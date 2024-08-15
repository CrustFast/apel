<?php

namespace App\Livewire\Eksternal;

use Livewire\Component;
use App\Models\LaporanGratifikasi;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;

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
        Log::info('Memulai proses submit.');

        try {
            $validatedData = $this->validate();
            Log::info('Validasi berhasil.', $validatedData);
        } catch (\Illuminate\Validation\ValidationException $e) {
            Log::error('Validasi gagal.', $e->errors());
            session()->flash('error', 'Validasi gagal.');
            return;
        }

        $validatedData['tanggal_penerimaan_penolakan'] = Carbon::parse($this->tanggal_penerimaan_penolakan)->format('Y-m-d');
        $validatedData['tanggal_dilaporkan'] = Carbon::parse($this->tanggal_dilaporkan)->format('Y-m-d');

        $filePaths = [];
        if (!empty($this->files)) {
            foreach ($this->files as $file) {
                $filePaths[] = $file->store('uploads', 'public');
            }
        }

        $validatedData['files'] = json_encode($filePaths);

        try {
            LaporanGratifikasi::create($validatedData);
            Log::info('Data berhasil disimpan.');
            session()->flash('message', 'Laporan berhasil disimpan.');

            // Correct usage of emit
            $this->emit('showModal');
        } catch (\Exception $e) {
            Log::error('Error saving data: ' . $e->getMessage());
            session()->flash('error', 'Terjadi kesalahan saat menyimpan data.');
        }
    }

    public function render()
    {
        return view('livewire.eksternal.form-gratifikasi');
    }
}
