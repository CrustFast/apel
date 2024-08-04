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
        'tanggal_dilaporkan' => 'required|date',
        'nama_pemberi' => 'required|string|max:255',
        'hubungan' => 'required|string|max:255',
        'objek_gratifikasi' => 'required|string|max:255',
        'pemanfaatan_objek' => 'required|string|max:255',
        'nomor_telepon' => 'required|string|max:20',
        'email' => 'required|email|max:255',
        'kronologi' => 'required|string',
        'files.*' => 'nullable|file|max:10240', // Validate files, maximum size of 10MB each
    ];

    public function submit()
    {
        Log::info('Memulai proses submit.');

        // Log nilai input sebelum validasi
        Log::info('Nilai tanggal penerimaan penolakan:', ['tanggal_penerimaan_penolakan' => $this->tanggal_penerimaan_penolakan]);
        Log::info('Nilai tanggal dilaporkan:', ['tanggal_dilaporkan' => $this->tanggal_dilaporkan]);

        try {
            $validatedData = $this->validate();
            Log::info('Validasi berhasil.', $validatedData);
        } catch (\Illuminate\Validation\ValidationException $e) {
            Log::error('Validasi gagal.', $e->errors());
            session()->flash('error', 'Validasi gagal.');
            return;
        }

        // Mengubah format tanggal sebelum menyimpan ke database
        $validatedData['tanggal_penerimaan_penolakan'] = Carbon::parse($this->tanggal_penerimaan_penolakan)->format('Y-m-d');
        $validatedData['tanggal_dilaporkan'] = Carbon::parse($this->tanggal_dilaporkan)->format('Y-m-d');

        // Log data yang akan disimpan
        Log::info('Data yang diterima', $validatedData);

        // Handle file uploads
        $filePaths = [];
        if (!empty($this->files)) {
            foreach ($this->files as $file) {
                $filePaths[] = $file->store('uploads', 'public'); // Save file and store the path
            }
        }

        // Add file paths to the data to be saved
        $validatedData['files'] = json_encode($filePaths);

        try {
            LaporanGratifikasi::create($validatedData);

            Log::info('Data berhasil disimpan.');

            session()->flash('message', 'Laporan berhasil disimpan.');
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
