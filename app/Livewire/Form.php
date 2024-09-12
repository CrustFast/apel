<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ProgramKeahlian;
use App\Models\LaporanDumas;
use App\Models\Kategori;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;

class Form extends Component
{
    public $selectedOption;
    public $selectedIdentity;
    public $programKeahlianOptions = [];

    public $klasifikasi_laporan;
    public $tanggal_pengaduan;
    public $jenis_layanan;
    public $tipe;
    public $kategori_pengaduan_id;
    public $periode_diklat_mulai;
    public $periode_diklat_akhir;
    public $nama_diklat;
    public $nama_peserta_diklat;
    public $nomor_telepon_peserta_diklat;
    public $asal_smk_peserta_diklat;
    public $program_keahlian;
    public $tanggal_magang;
    public $nama_peserta_pkl;
    public $asal_smk_peserta_pkl;
    public $unit;
    public $tanggal_penggunaan_mulai;
    public $tanggal_penggunaan_akhir;
    public $nama_pengguna_fasilitas;
    public $nomor_telepon_pengguna_fasilitas;
    public $email_pengguna_fasilitas;
    public $nama_fasilitas;
    public $nama_masyarakat_umum;
    public $nomor_telepon_masyarakat_umum;
    public $email_masyarakat_umum;
    public $alamat_masyarakat_umum;
    public $nama_peminta_informasi;
    public $nomor_telepon_peminta_informasi;
    public $nama_aduan_informasi;
    public $nomor_telepon_aduan_saran;
    public $isi_laporan_pengaduan;
    public $isi_laporan_permintaan_informasi;
    public $isi_laporan_saran;
    public $bukti_foto_path = [];
    public $privasi;

    protected $rules = [
        'klasifikasi_laporan' => 'required|string',

        // Pengaduan
        'tanggal_pengaduan' => 'required|date|after_or_equal:today',
        'jenis_layanan' => 'required_if:klasifikasi_laporan,pengaduan|string',
        'tipe' => 'required_if:klasifikasi_laporan,pengaduan|string',
        'kategori_pengaduan_id' => 'required|exists:kategori,kategori_id|not_in:""', 

        'periode_diklat_mulai' => 'required_if:jenis_layanan,diklat|date',
        'periode_diklat_akhir' => 'required_if:jenis_layanan,diklat|date',
        'nama_diklat' => 'required_if:jenis_layanan,diklat|string|max:255',
        'nama_peserta_diklat' => 'required_if:jenis_layanan,diklat|string|max:255',
        'nomor_telepon_peserta_diklat' => 'required_if:jenis_layanan,diklat|string|max:20|regex:/^08[1-9][0-9]{6,11}$/',
        'asal_smk_peserta_diklat' => 'required_if:jenis_layanan,diklat|string|max:255',
        'program_keahlian' => 'required_if:jenis_layanan,diklat|string|max:255',
        'tanggal_magang' => 'required_if:tipe,pkl|date',
        'nama_peserta_pkl' => 'required_if:tipe,pkl|string|max:255',
        'asal_smk_peserta_pkl' => 'required_if:tipe,pkl|string|max:255',
        'unit' => 'required_if:tipe,pkl|string|max:255',
        'tanggal_penggunaan_mulai' => 'required_if:tipe,pengguna-fasilitas|date',
        'tanggal_penggunaan_akhir' => 'required_if:tipe,pengguna-fasilitas|date',
        'nama_pengguna_fasilitas' => 'required_if:tipe,pengguna-fasilitas|string|max:255',
        'nomor_telepon_pengguna_fasilitas' => 'required_if:tipe,pengguna-fasilitas|string|max:20|regex:/^08[1-9][0-9]{6,11}$/',
        'email_pengguna_fasilitas' => 'required_if:tipe,pengguna-fasilitas|email|max:255',
        'nama_fasilitas' => 'required_if:tipe,pengguna-fasilitas|string|max:255',
        'nama_masyarakat_umum' => 'required_if:tipe,kunjungan|string|max:255',
        'nomor_telepon_masyarakat_umum' => 'required_if:tipe,kunjungan|string|max:20|regex:/^08[1-9][0-9]{6,11}$/',
        'email_masyarakat_umum' => 'required_if:tipe,kunjungan|email|max:255',
        'alamat_masyarakat_umum' => 'required_if:tipe,kunjungan|string|max:255',
        'isi_laporan_pengaduan' => 'required_if:klasifikasi_laporan,pengaduan|string',

        // Permintaan Informasi
        'nama_peminta_informasi' => 'required_if:klasifikasi_laporan,permintaan-informasi|string|max:255',
        'nomor_telepon_peminta_informasi' => 'required_if:klasifikasi_laporan,permintaan-informasi|string|max:20|regex:/^08[1-9][0-9]{6,11}$/',
        'isi_laporan_permintaan_informasi' => 'required_if:klasifikasi_laporan,permintaan-informasi|string',

        // Saran
        'nama_aduan_informasi' => 'required_if:klasifikasi_laporan,saran|string|max:255',
        'nomor_telepon_aduan_saran' => 'required_if:klasifikasi_laporan,saran|string|max:20|regex:/^08[1-9][0-9]{6,11}$/',
        'isi_laporan_saran' => 'required_if:klasifikasi_laporan,saran|string',

        // 'isi_laporan' => 'required|string',
        'bukti_foto_path.*' => 'nullable|file|max:10240', // Maksimal ukuran file 10MB
        'privasi' => 'required|in:anonim,rahasia',
    ];

    protected $messages = [
        'klasifikasi_laporan.required' => 'Klasifikasi laporan wajib dipilih!',
        'tanggal_pengaduan.required' => 'Tanggal pengaduan wajib diisi!',
        'jenis_layanan.required' => 'Jenis layanan wajib dipilih!',
        'tipe.required' => 'Tipe layanan wajib dipilih!',
        'kategori_pengaduan_id.required' => 'Kategori pengaduan wajib dipilih!',
        'periode_diklat_mulai.required_if' => 'Periode diklat mulai wajib diisi!',
        'periode_diklat_akhir.required_if' => 'Periode diklat akhir wajib diisi!',
        'nama_diklat.required_if' => 'Nama diklat wajib diisi!',
        'nama_peserta_diklat.required_if' => 'Nama peserta diklat wajib diisi!',
        'nomor_telepon_peserta_diklat.required_if' => 'Nomor telepon peserta diklat wajib diisi!',
        'nomor_telepon_peserta_diklat.regex' => 'Nomor telepon harus dimulai dengan 08 dan memiliki 8-12 digit!',
        'asal_smk_peserta_diklat.required_if' => 'Asal SMK peserta diklat wajib diisi!',
        'program_keahlian.required_if' => 'Program keahlian wajib diisi!',
        'tanggal_magang.required_if' => 'Tanggal magang wajib diisi!',
        'nama_peserta_pkl.required_if' => 'Nama peserta PKL wajib diisi!',
        'asal_smk_peserta_pkl.required_if' => 'Asal SMK peserta PKL wajib diisi!',
        'unit.required_if' => 'Unit wajib diisi!',
        'tanggal_penggunaan_mulai.required_if' => 'Tanggal penggunaan mulai wajib diisi!',
        'tanggal_penggunaan_akhir.required_if' => 'Tanggal penggunaan akhir wajib diisi!',
        'nama_pengguna_fasilitas.required_if' => 'Nama pengguna fasilitas wajib diisi!',
        'nomor_telepon_pengguna_fasilitas.required_if' => 'Nomor telepon pengguna fasilitas wajib diisi!',
        'nomor_telepon_pengguna_fasilitas.regex' => 'Nomor telepon harus dimulai dengan 08 dan memiliki 8-12 digit!',
        'email_pengguna_fasilitas.required_if' => 'Email pengguna fasilitas wajib diisi!',
        'email_pengguna_fasilitas.email' => 'Format email tidak valid!',
        'nama_fasilitas.required_if' => 'Nama fasilitas wajib diisi!',
        'nama_masyarakat_umum.required_if' => 'Nama masyarakat umum wajib diisi!',
        'nomor_telepon_masyarakat_umum.required_if' => 'Nomor telepon masyarakat umum wajib diisi!',
        'nomor_telepon_masyarakat_umum.regex' => 'Nomor telepon harus dimulai dengan 08 dan memiliki 8-12 digit!',
        'email_masyarakat_umum.required_if' => 'Email masyarakat umum wajib diisi!',
        'email_masyarakat_umum.email' => 'Format email tidak valid!',
        'alamat_masyarakat_umum.required_if' => 'Alamat masyarakat umum wajib diisi!',
        'nama_peminta_informasi.required_if' => 'Nama peminta informasi wajib diisi!',
        'nomor_telepon_peminta_informasi.required_if' => 'Nomor telepon peminta informasi wajib diisi!',
        'nomor_telepon_peminta_informasi.regex' => 'Nomor telepon harus dimulai dengan 08 dan memiliki 8-12 digit!',
        'isi_laporan_pengaduan.required' => 'Isi laporan wajib diisi!',
        'bukti_foto_path.*.file' => 'Bukti pendukung harus berupa file!',
        'bukti_foto_path.*.max' => 'Ukuran file maksimal adalah 10MB!',
        'privasi.required' => 'Pilihan privasi wajib dipilih!',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);

        // Log untuk memastikan kategori_pengaduan_id diupdate dengan benar
        if ($propertyName === 'kategori_pengaduan_id') {
            Log::info('Updated kategori_pengaduan_id:', ['kategori_pengaduan_id' => $this->kategori_pengaduan_id]);
        }
    }

    public function submit()
    {
        Log::info('Memulai proses submit laporan Dumas.');
    
        // Log nilai input sebelum validasi
        Log::info('Nilai input:', [
            'tanggal_pengaduan' => $this->tanggal_pengaduan,
            'isi_laporan_pengaduan' => $this->isi_laporan_pengaduan,
            'klasifikasi_laporan' => $this->klasifikasi_laporan,
            'jenis_layanan' => $this->jenis_layanan,
            'tipe' => $this->tipe,
            'kategori_pengaduan_id' => $this->kategori_pengaduan_id,
        ]);

        Log::info('Kategori pengaduan ID:', ['kategori_pengaduan_id' => $this->kategori_pengaduan_id]);

        $rules = [
            'klasifikasi_laporan' => 'required',
            'tanggal_pengaduan' => 'required|date|after_or_equal:today',
            'jenis_layanan' => 'required|string',
            'tipe' => 'required|string',
            'kategori_pengaduan_id' => 'required|exists:kategori,kategori_id|not_in:""',
        ];
    
        try {
            $validatedData = $this->validate($rules);
            Log::info('Validasi berhasil.', $validatedData);
        } catch (\Illuminate\Validation\ValidationException $e) {
            Log::error('Validasi gagal.', $e->errors());
            session()->flash('error', 'Validasi gagal. Silakan periksa kembali input Anda.');
            return;
        }        
    
        // Modifikasi format tanggal sebelum penyimpanan
        $validatedData['tanggal_pengaduan'] = Carbon::parse($this->tanggal_pengaduan)->format('Y-m-d');
        Log::info('Data yang sudah dimodifikasi:', $validatedData);
    
        // Handle file uploads jika ada
        $filePaths = [];
        if (!empty($this->bukti_foto_path)) {
            foreach ($this->bukti_foto_path as $file) {
                $filePaths[] = $file->store('uploads', 'public'); // Simpan file dan path-nya
                Log::info('File uploaded:', ['file' => $filePaths]);
            }
        }
    
        // Tambahkan path file ke dalam data yang divalidasi
        $validatedData['bukti_foto_path'] = json_encode($filePaths);
    
        // Simpan data yang telah divalidasi
        try {
            LaporanDumas::create($validatedData);
            Log::info('Data berhasil disimpan.');
    
            // Kirim event untuk memicu modal
            $this->dispatch('formSubmitted', ['pesan' => 'Terima kasih, laporan Anda telah kami terima. Silakan cek email untuk informasi lebih lanjut.']);
            Log::info('Event formSubmitted berhasil dikirim.');
    
            session()->flash('message', 'Laporan berhasil disimpan.');
        } catch (\Exception $e) {
            Log::error('Terjadi kesalahan saat menyimpan data: ' . $e->getMessage());
            session()->flash('error', 'Terjadi kesalahan saat menyimpan data.');
        }
    }
    

    public function mount()
    {
        $this->programKeahlianOptions = ProgramKeahlian::all();
    }

    public function render()
    {
        return view('livewire.form', [
            'kategoriPengaduanOptions' => \App\Models\Kategori::all(), // Mengirim data kategori ke Blade
        ]);
    }
}
