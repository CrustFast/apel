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

    // pengaduan
    public $klasifikasi_laporan;
    public $tanggal_pengaduan;
    public $jenis_layanan;
    public $tipe;
    public $kategori_pengaduan_id;
    public $isi_laporan_pengaduan;

    // diklat
    public $periode_diklat_mulai;
    public $periode_diklat_akhir;
    public $nama_diklat;
    public $nama_peserta_diklat;
    public $nomor_telepon_peserta_diklat;
    public $asal_smk_peserta_diklat;
    public $program_keahlian;

    // pkl
    public $periode_magang_mulai;
    public $periode_magang_akhir;
    public $tanggal_magang;
    public $nama_peserta_pkl;
    public $nomor_telepon_peserta_pkl;
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

        // diklat
        'periode_diklat_mulai' => 'required_if:jenis_layanan,diklat|date',
        'periode_diklat_akhir' => 'required_if:jenis_layanan,diklat|date',
        'nama_diklat' => 'required_if:jenis_layanan,diklat|string|max:255',
        'nama_peserta_diklat' => 'required_if:jenis_layanan,diklat|string|max:255',
        'nomor_telepon_peserta_diklat' => 'required_if:jenis_layanan,diklat|string|max:20|regex:/^08[1-9][0-9]{6,11}$/',
        'asal_smk_peserta_diklat' => 'required_if:jenis_layanan,diklat|string|max:255',
        'program_keahlian' => 'required_if:jenis_layanan,diklat|string|max:255|not_in:""',

        // pkl
        'tanggal_magang' => 'required_if:tipe,pkl|date',
        'periode_magang_mulai' => 'required_if:tipe,pkl|date',
        'periode_magang_akhir' => 'required_if:tipe,pkl|date',
        'nama_peserta_pkl' => 'required_if:tipe,pkl|string|max:255',
        'asal_smk_peserta_pkl' => 'required_if:tipe,pkl|string|max:255',
        'unit' => 'required_if:tipe,pkl|string|max:255',
        'nomor_telepon_peserta_pkl' => 'required_if:tipe,pkl|string|max:20|regex:/^08[1-9][0-9]{6,11}$/',

        // pengguna fasilitas
        'tanggal_penggunaan_mulai' => 'required_if:tipe,pengguna-fasilitas|date',
        'tanggal_penggunaan_akhir' => 'required_if:tipe,pengguna-fasilitas|date',
        'nama_pengguna_fasilitas' => 'required_if:tipe,pengguna-fasilitas|string|max:255',
        'nomor_telepon_pengguna_fasilitas' => 'required_if:tipe,pengguna-fasilitas|string|max:20|regex:/^08[1-9][0-9]{6,11}$/',
        'email_pengguna_fasilitas' => 'required_if:tipe,pengguna-fasilitas|email|max:255',
        'nama_fasilitas' => 'required_if:tipe,pengguna-fasilitas|string|max:255',

        // Masyarakat Umum
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

    public function updatedPrivasi($value)
    {
        if ($value === 'anonim') {
            $this->nama_masyarakat_umum = $this->getRandomAnonimName();
        } else {
            $this->nama_masyarakat_umum = ''; // Reset jika bukan anonim
        }
    }

    private function getRandomAnonimName()
    {
        // Daftar nama-nama anonim yang bisa dipilih
        $anonimNames = [
            'Berang-berang Anonim',
            'Harimau Anonim',
            'Kuda Anonim',
            'Rusa Anonim',
            'Singa Anonim',
            'Panda Anonim',
            'Burung Hantu Anonim',
            'Gajah Anonim',
            'Serigala Anonim'
        ];

        // Pilih nama secara acak
        return $anonimNames[array_rand($anonimNames)];
    }

    public function submit()
    {
        Log::info('Memulai proses submit laporan Dumas.');
        
        // Log semua data yang diterima sebelum validasi
        Log::info('Data input sebelum validasi:', [
            'klasifikasi_laporan' => $this->klasifikasi_laporan,
            'tanggal_pengaduan' => $this->tanggal_pengaduan,
            'jenis_layanan' => $this->jenis_layanan,
            'tipe' => $this->tipe,
            'kategori_pengaduan_id' => $this->kategori_pengaduan_id,
            'isi_laporan_pengaduan' => $this->isi_laporan_pengaduan,
            'nama_peminta_informasi' => $this->nama_peminta_informasi,
            'nomor_telepon_peminta_informasi' => $this->nomor_telepon_peminta_informasi,
            'isi_laporan_permintaan_informasi' => $this->isi_laporan_permintaan_informasi,
            'nama_aduan_informasi' => $this->nama_aduan_informasi,
            'nomor_telepon_aduan_saran' => $this->nomor_telepon_aduan_saran,
            'isi_laporan_saran' => $this->isi_laporan_saran,
            'periode_diklat_mulai' => $this->periode_diklat_mulai,
            'periode_diklat_akhir' => $this->periode_diklat_akhir,
            'nama_diklat' => $this->nama_diklat,
            'nama_peserta_diklat' => $this->nama_peserta_diklat,
            'nomor_telepon_peserta_diklat' => $this->nomor_telepon_peserta_diklat,
            'asal_smk_peserta_diklat' => $this->asal_smk_peserta_diklat,
            'program_keahlian' => $this->program_keahlian,
            'isi_laporan_pengaduan' => $this->isi_laporan_pengaduan,
            'periode_magang_mulai' => $this->periode_magang_mulai,
            'periode_magang_akhir' => $this->periode_magang_akhir,
            'nama_peserta_pkl' => $this->nama_peserta_pkl,
            'nomor_telepon_peserta_pkl' => $this->nomor_telepon_peserta_pkl,
            'asal_smk_peserta_pkl' => $this->asal_smk_peserta_pkl,
            'unit' => $this->unit,
            'tanggal_penggunaan_mulai' => $this->tanggal_penggunaan_mulai,
            'tanggal_penggunaan_akhir' => $this->tanggal_penggunaan_akhir,
            'nama_pengguna_fasilitas' => $this->nama_pengguna_fasilitas,
            'nomor_telepon_pengguna_fasilitas' => $this->nomor_telepon_pengguna_fasilitas,
            'email_pengguna_fasilitas' => $this->email_pengguna_fasilitas,
            'nama_fasilitas' => $this->nama_fasilitas,
            'nama_masyarakat_umum' => $this->nama_masyarakat_umum,
            'nomor_telepon_masyarakat_umum' => $this->nomor_telepon_masyarakat_umum,
            'email_masyarakat_umum' => $this->email_masyarakat_umum,
            'alamat_masyarakat_umum' => $this->alamat_masyarakat_umum,
        ]);

        Log::info('Kategori pengaduan ID:', ['kategori_pengaduan_id' => $this->kategori_pengaduan_id]);

        // Tentukan rules secara dinamis berdasarkan klasifikasi_laporan
        $rules = [];

        // Aturan validasi untuk pengaduan
        if ($this->klasifikasi_laporan === 'pengaduan') {
            $rules = [
                'klasifikasi_laporan' => 'required',
                'tanggal_pengaduan' => 'required|date|after_or_equal:today',
                'jenis_layanan' => 'required|string',
                'tipe' => 'required|string',
                'kategori_pengaduan_id' => 'required|exists:kategori,kategori_id|not_in:""',
                'isi_laporan_pengaduan' => 'required|string',
            ];

            // Tambahkan validasi untuk periode diklat jika jenis layanan adalah diklat
            if ($this->jenis_layanan === 'diklat') {
                $rules['periode_diklat_mulai'] = 'required|date|before_or_equal:periode_diklat_akhir';
                $rules['periode_diklat_akhir'] = 'required|date|after_or_equal:periode_diklat_mulai';
                $rules['nama_diklat'] = 'required|string';
                $rules['nama_peserta_diklat'] = 'required|string';
                $rules['nomor_telepon_peserta_diklat'] = 'required|string';
                $rules['asal_smk_peserta_diklat'] = 'required|string';
                $rules['program_keahlian'] = 'required|string';
                $rules['isi_laporan_pengaduan'] = 'required|string';
            }

            if ($this->tipe === 'pkl') {
                $rules['periode_magang_mulai'] = 'required|date|before_or_equal:periode_magang_akhir';
                $rules['periode_magang_akhir'] = 'required|date|after_or_equal:periode_magang_mulai';
                $rules['nama_peserta_pkl'] = 'required|string';
                $rules['nomor_telepon_peserta_pkl'] = 'required|string';
                $rules['asal_smk_peserta_pkl'] = 'required|string';
                $rules['unit'] = 'required|string';
            }

            if ($this->tipe === 'pengguna-fasilitas') {
                $rules['tanggal_penggunaan_mulai'] = 'required|date|before_or_equal:tanggal_penggunaan_akhir';
                $rules['tanggal_penggunaan_akhir'] = 'required|date|after_or_equal:tanggal_penggunaan_mulai';
                $rules['nama_pengguna_fasilitas'] = 'required|string';
                $rules['nomor_telepon_pengguna_fasilitas'] = 'required|string';
                $rules['email_pengguna_fasilitas'] = 'required|string';
                $rules['nama_fasilitas'] = 'required|string';
            }

            if ($this->tipe === 'kunjungan') {
                $rules['nama_masyarakat_umum'] = 'required|string';
                $rules['nomor_telepon_masyarakat_umum'] = 'required|string';
                $rules['email_masyarakat_umum'] = 'required|string';
                $rules['alamat_masyarakat_umum'] = 'required|string';
            }
        } elseif ($this->klasifikasi_laporan === 'permintaan-informasi') {
            // Aturan validasi untuk permintaan informasi
            $rules = [
                'klasifikasi_laporan' => 'required',
                'nama_peminta_informasi' => 'required|string|max:255',
                'nomor_telepon_peminta_informasi' => 'required|string|max:20|regex:/^08[1-9][0-9]{6,11}$/',
                'isi_laporan_permintaan_informasi' => 'required|string',
            ];
        } elseif ($this->klasifikasi_laporan === 'saran') {
            // Aturan validasi untuk saran
            $rules = [
                'klasifikasi_laporan' => 'required',
                'nama_aduan_informasi' => 'required|string|max:255',
                'nomor_telepon_aduan_saran' => 'required|string|max:20|regex:/^08[1-9][0-9]{6,11}$/',
                'isi_laporan_saran' => 'required|string',
            ];
        }

        // Log rules yang digunakan untuk validasi
        Log::info('Aturan validasi yang digunakan:', $rules);

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

        // Periode Diklat
        if (isset($validatedData['periode_diklat_mulai']) && isset($validatedData['periode_diklat_akhir'])) {
            $validatedData['periode_diklat_mulai'] = Carbon::parse($this->periode_diklat_mulai)->format('Y-m-d');
            $validatedData['periode_diklat_akhir'] = Carbon::parse($this->periode_diklat_akhir)->format('Y-m-d');

            // Log info mengenai periode diklat
            Log::info('Periode diklat terkirim:', [
                'periode_diklat_mulai' => $validatedData['periode_diklat_mulai'],
                'periode_diklat_akhir' => $validatedData['periode_diklat_akhir']
            ]);
        } else {
            // Log jika tidak ada periode diklat
            Log::info('Tidak ada data periode diklat yang dikirim.');
        }
        
        // Periode Magang
        if (isset($validatedData['periode_magang_mulai']) && isset($validatedData['periode_magang_akhir'])) {
            $validatedData['periode_magang_mulai'] = Carbon::parse($this->periode_magang_mulai)->format('Y-m-d');
            $validatedData['periode_magang_akhir'] = Carbon::parse($this->periode_magang_akhir)->format('Y-m-d');

            // Log info mengenai periode magang
            Log::info('Periode magang terkirim:', [
                'periode_magang_mulai' => $validatedData['periode_magang_mulai'],
                'periode_magang_akhir' => $validatedData['periode_magang_akhir']
            ]);
        } else {
            // Log jika tidak ada periode magang
            Log::info('Tidak ada data periode magang yang dikirim.');
        }

        // Periode Penggunaan Fasilitas
        if (isset($validatedData['tanggal_penggunaan_mulai']) && isset($validatedData['tanggal_penggunaan_akhir'])) {
            $validatedData['tanggal_penggunaan_mulai'] = Carbon::parse($this->tanggal_penggunaan_mulai)->format('Y-m-d');
            $validatedData['tanggal_penggunaan_akhir'] = Carbon::parse($this->tanggal_penggunaan_akhir)->format('Y-m-d');

            // Log info mengenai periode penggunaan
            Log::info('Periode penggunaan terkirim:', [
                'tanggal_penggunaan_mulai' => $validatedData['tanggal_penggunaan_mulai'],
                'tanggal_penggunaan_akhir' => $validatedData['tanggal_penggunaan_akhir']
            ]);
        } else {
            // Log jika tidak ada periode penggunaan
            Log::info('Tidak ada data periode penggunaan fasilitas yang dikirim.');
        }

        if ($this->privasi === 'anonim') {
            $this->nama_masyarakat_umum = $this->getRandomAnonimName(); // Pastikan nama anonim tetap terisi
        }
        
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
            Log::info('Data berhasil disimpan ke database.', $validatedData);

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
        // Kondisi untuk menentukan input fields yang harus ditampilkan berdasarkan klasifikasi
        $isPermintaanInformasi = $this->klasifikasi_laporan === 'permintaan-informasi';
        $isSaran = $this->klasifikasi_laporan === 'saran';
        $isPengaduan = $this->klasifikasi_laporan === 'pengaduan';

        return view('livewire.form', [
            'kategoriPengaduanOptions' => \App\Models\Kategori::all(), // Mengirim data kategori ke Blade
            'isPermintaanInformasi' => $isPermintaanInformasi,
            'isSaran' => $isSaran,
            'isPengaduan' => $isPengaduan,
        ]);
    }
}
