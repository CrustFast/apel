<?php

namespace App\Livewire\Eksternal;

use Livewire\Component;
use App\Models\LaporanBenturanKepentingan;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
use Twilio\Rest\Client;

class FormBenturanKepentingan extends Component
{
    use WithFileUploads;

    public $nama_pelapor;
    public $jabatan;
    public $nomor_telepon;
    public $email_pelapor;
    public $nama_pihak_terlibat;
    public $jabatan_pihak_terlibat;
    public $program_keahlian_id;
    public $tanggal_penerimaan_penolakan;
    public $tanggal_dilaporkan;
    public $tempat_kejadian;
    public $jenis_benturan_id;
    public $kronologi_kejadian;
    public $files = [];

    protected $rules = [
        'nama_pelapor' => 'required|string|max:255',
        'jabatan' => 'required|string|max:255',
        'nomor_telepon' => 'required|string|max:20|regex:/^08[1-9][0-9]{6,11}$/',
        'email_pelapor' => 'required|email|max:255',
        'nama_pihak_terlibat' => 'required|string|max:255',
        'jabatan_pihak_terlibat' => 'required|string|max:255',
        'program_keahlian_id' => 'required|exists:program_keahlian_2,id',
        'tanggal_penerimaan_penolakan' => 'required|date',
        'tanggal_dilaporkan' => 'required|date|after_or_equal:tanggal_penerimaan_penolakan',
        'tempat_kejadian' => 'required|string|max:255',
        'jenis_benturan_id' => 'required|exists:jenis_benturan_kepentingan,kode_id|not_in:""',
        'program_keahlian_id' => 'required|exists:program_keahlian_2,id|not_in:""',
        'kronologi_kejadian' => 'required|string',
        'files.*' => 'nullable|file|max:10240', // Validate files, maximum size of 10MB each
    ];

    protected $messages = [
        'nama_pelapor.required' => 'Nama Pelapor wajib diisi!',
        'jabatan.required' => 'Jabatan wajib diisi!',
        'nomor_telepon.required' => 'Nomor Telepon wajib diisi!',
        'email_pelapor.required' => 'Email wajib diisi!',
        'email_pelapor.email' => 'Format email tidak valid!',
        'nama_pihak_terlibat.required' => 'Nama Pihak Terlibat wajib diisi!',
        'jabatan_pihak_terlibat.required' => 'Jabatan Pihak Terlibat wajib diisi!',
        'program_keahlian_id.required' => 'Unit Kerja wajib dipilih!',
        'tanggal_penerimaan_penolakan.required' => 'Tanggal Penerimaan wajib diisi!',
        'tanggal_dilaporkan.required' => 'Tanggal Dilaporkan wajib diisi!',
        'tempat_kejadian.required' => 'Tempat Kejadian wajib diisi!',
        'jenis_benturan_id.required' => 'Jenis Benturan Kepentingan wajib dipilih!',
        'kronologi_kejadian.required' => 'Kronologi Kejadian wajib diisi!',
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
        $validatedData['bukti_file_path'] = json_encode($filePaths);

        try {
            LaporanBenturanKepentingan::create($validatedData);

            Log::info('Data berhasil disimpan.');

            // Jika sukses, arahkan ke success-page
            return redirect()->to('/success-page');

            session()->flash('message', 'Laporan berhasil disimpan.');
        } catch (\Exception $e) {
            Log::error('Terjadi kesalahan saat menyimpan data: ' . $e->getMessage());
            // Jika validasi gagal, arahkan ke failed-page
            return redirect()->to('/failed-page');
            session()->flash('error', 'Terjadi kesalahan saat menyimpan data.');
        }
    }

    public function render()
    {
        return view('livewire.eksternal.form-benturan-kepentingan', [
            'programKeahlianOptions' => \App\Models\ProgramKeahlian::all(),
            'jenisBenturanKepentingan' => \App\Models\JenisBenturanKepentingan::all(),
        ]);
    }
}

