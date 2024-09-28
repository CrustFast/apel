<?php

namespace App\Livewire\Eksternal;

use Livewire\Component;
use App\Models\LaporanGratifikasi;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
use Twilio\Rest\Client;

class FormGratifikasi extends Component
{
    use WithFileUploads;

    public $jenis_laporan;
    public $nama_pelapor;
    public $jabatan;
    public $tanggal_penerimaan_penolakan;
    public $tanggal_dilaporkan;
    public $nama_pemberi;
    public $hubungan;
    public $objek_gratifikasi;
    public $pemanfaatan_objek;
    public $nomor_telepon;
    public $email;
    public $kronologi;
    public $files = [];

    protected $rules = [
        'jenis_laporan' => 'required|string',
        'nama_pelapor' => 'required|string|max:255',
        'jabatan' => 'required|string|max:255',
        'tanggal_penerimaan_penolakan' => 'required|date',
        'tanggal_dilaporkan' => 'required|date|after_or_equal:tanggal_penerimaan_penolakan',
        'nama_pemberi' => 'required|string|max:255',
        'hubungan' => 'required|string|max:255',
        'objek_gratifikasi' => 'required|string|max:255',
        'pemanfaatan_objek' => 'required|string|max:255',
        'nomor_telepon' => 'required|string|max:20|regex:/^08[1-9][0-9]{6,11}$/',
        'email' => 'required|email|max:255',
        'kronologi' => 'required|string',
        'files.*' => 'nullable|file|max:10240', // Validate files, maximum size of 10MB each
    ];

    protected $messages = [
        'nama_pelapor.required' => 'Nama Pelapor wajib diisi!',
        'jabatan.required' => 'Jabatan wajib diisi!',
        'nama_pemberi.required' => 'Nama Pemberi Wajib diisi!',
        'hubungan.required' => 'Harap Isi Hubungan Anda dengan Pemberi!',
        'objek_gratifikasi.required' => 'Harap Isi Jenis Objek Gratifikasi!',
        'pemanfaatan_objek.required' => 'Harap Isi Pemanfaatan Objek!',
        'nomor_telepon' => 'Masukkan Nomor Telepon Yang Valid!',
        'email.required' => 'Email wajib diisi!',
        'email.email' => 'Format email tidak valid!',
        'kronologi.required' => 'Harap Isi Kronologi Kejadian!',
        'tanggal_penerimaan_penolakan.required' => 'Harap Isi Tanggal Penerimaan atau Penolakan!',
        'tanggal_dilaporkan.required' => 'Tanggal dilaporkan ke UPG wajib diisi!',
        'tanggal_dilaporkan.after_or_equal' => 'Tanggal dilaporkan tidak boleh lebih awal dari tanggal penerimaan.',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);

        // Remove error message if validation passes
        if ($this->getErrorBag()->isEmpty()) {
            $this->resetErrorBag($propertyName);
        }
    }
    
    public function submit()
    {
        // Logging awal saat method dipanggil
        Log::info('Submit method called.');

        try {
            // Validasi data input dari form
            $validatedData = $this->validate();
            Log::info('Validation passed.', $validatedData);

            // Ubah format tanggal menjadi 'Y-m-d'
            $validatedData['tanggal_penerimaan_penolakan'] = Carbon::parse($this->tanggal_penerimaan_penolakan)->format('Y-m-d');
            $validatedData['tanggal_dilaporkan'] = Carbon::parse($this->tanggal_dilaporkan)->format('Y-m-d');

            // Penanganan upload file jika ada file yang diunggah
            $filePaths = [];
            if (!empty($this->files)) {
                foreach ($this->files as $file) {
                    // Logging file temporary URL untuk pengecekan
                    Log::info('Temporary file URL:', ['url' => $file->temporaryUrl()]);

                    // Simpan file di storage 'public/uploads'
                    $filePaths[] = $file->store('uploads', 'public');

                    // Logging path file yang berhasil diupload
                    Log::info('File uploaded:', ['file' => $filePaths]);
                }
            }
            
            // Konversi file paths ke dalam format JSON dan tambahkan ke dalam data yang disimpan
            $validatedData['files'] = json_encode($filePaths);

            Log::info('Final data to be saved:', $validatedData);

            // Simpan data ke database dan simpan ke variabel $laporan
            $laporan = LaporanGratifikasi::create($validatedData);
            Log::info('Data successfully saved.');

            // Dapatkan nomor pengaduan dari laporan yang baru disimpan
            $nomorPengaduan = $laporan->id; // Perbaikan

            // Log sebelum memanggil metode sendWhatsAppNotification
            Log::info('Calling sendWhatsAppNotification method.');

            // Kirimkan notifikasi WhatsApp kepada pelapor menggunakan nomor dari input fields
            $this->sendWhatsAppNotificationToPelapor($this->nomor_telepon, $nomorPengaduan);

            // Kirimkan notifikasi WhatsApp kepada admin
            $this->sendWhatsAppNotificationToAdmin($nomorPengaduan, $this->nama_pelapor, $this->jenis_laporan);

            // Log setelah memanggil metode sendWhatsAppNotification
            Log::info('sendWhatsAppNotification method finished.');

            // Jika sukses, arahkan ke success-page
            return redirect()->to('/success-page');

            // Kirimkan event untuk memicu modal ketika laporan berhasil disimpan
            $this->dispatch('formSubmitted', ['pesan' => 'Terima Kasih, Laporan Anda Telah Kami Terima. Silakan cek email Anda untuk informasi status laporan.']);
            Log::info('formSubmitted event dispatched.');

            // Flash message jika laporan berhasil disimpan
            session()->flash('message', 'Laporan berhasil disimpan.');
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Penanganan jika validasi gagal
            Log::error('Validation failed.', $e->errors());
            session()->flash('error', 'Validasi gagal. Silakan cek kembali data yang diinput.');
            return;
        } catch (\Exception $e) {

            // Jika ada kesalahan lain, arahkan ke failed-page
            return redirect()->to('/failed-page');

            // Penanganan jika ada error lain saat penyimpanan
            Log::error('Error saving data: ' . $e->getMessage());
            session()->flash('error', 'Terjadi kesalahan saat menyimpan data. Silakan coba lagi.');
        }
    }

    private function sendWhatsAppNotificationToPelapor($nomorTelepon, $nomorPengaduan)
    {
        Log::info('sendWhatsAppNotificationToPelapor method started.');

        if (strpos($nomorTelepon, '+') !== 0) {
            // Tambahkan +62 jika nomor dimulai dengan 0
            $nomorTelepon = preg_replace('/^0/', '+62', $nomorTelepon);
        }

        $sid = env('TWILIO_SID');
        $token = env('TWILIO_AUTH_TOKEN');
        $twilio = new Client($sid, $token);

        $message = "Terima kasih telah melapor! Pengaduan Anda dengan nomor #$nomorPengaduan telah kami terima dan akan segera ditindaklanjuti.";
        $recipient = 'whatsapp:' . $nomorTelepon;

        try {
            $twilio->messages->create(
                $recipient,
                [
                    'from' => env('TWILIO_WHATSAPP_NUMBER'),
                    'body' => $message
                ]
            );
            Log::info('WhatsApp notification sent successfully to pelapor at ' . $recipient); // Log jika berhasil
        } catch (\Exception $e) {
            Log::error('Error sending WhatsApp notification to pelapor: ' . $e->getMessage()); // Log jika ada error
        }

        Log::info('sendWhatsAppNotificationToPelapor method finished.');
    }

    private function sendWhatsAppNotificationToAdmin($nomorPengaduan, $namaPelapor, $jenisLaporan)
    {
        Log::info('sendWhatsAppNotificationToAdmin method started.');

        $sid = env('TWILIO_SID');
        $token = env('TWILIO_AUTH_TOKEN');
        $twilio = new Client($sid, $token);

        // Nomor WhatsApp admin yang menerima notifikasi
        $adminPhoneNumber = 'whatsapp:+6281249256793';

        $message = "Pengaduan baru diterima.\n\nKanal Pengaduan: AKSI\nNomor Pengaduan: #$nomorPengaduan\nNama Pelapor: $namaPelapor\nJenis Laporan: $jenisLaporan\nSilakan segera ditindaklanjuti.";
        
        try {
            $twilio->messages->create(
                $adminPhoneNumber,
                [
                    'from' => env('TWILIO_WHATSAPP_NUMBER'),
                    'body' => $message
                ]
            );
            Log::info('WhatsApp notification sent successfully to admin at ' . $adminPhoneNumber); // Log jika berhasil
        } catch (\Exception $e) {
            Log::error('Error sending WhatsApp notification to admin: ' . $e->getMessage()); // Log jika ada error
        }

        Log::info('sendWhatsAppNotificationToAdmin method finished.');
    }

    public function render()
    {
        return view('livewire.eksternal.form-gratifikasi');
    }
}
