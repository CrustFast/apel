<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanDumas extends Model
{
    use HasFactory;

    protected $table = 'laporan_dumas';

    protected $fillable = [
        'klasifikasi_laporan',
        'tanggal_pengaduan',
        'jenis_layanan',
        'tipe',
        'kategori_pengaduan_id',
        'periode_diklat_mulai',
        'periode_diklat_akhir',
        'nama_diklat',
        'nama_peserta_diklat',
        'nomor_telepon_peserta_diklat',
        'asal_smk_peserta_diklat',
        'program_keahlian',
        'tanggal_magang',
        'nama_peserta_pkl',
        'asal_smk_peserta_pkl',
        'unit',
        'tanggal_penggunaan_mulai',
        'tanggal_penggunaan_akhir',
        'nama_pengguna_fasilitas',
        'nomor_telepon_pengguna_fasilitas',
        'email_pengguna_fasilitas',
        'nama_fasilitas',
        'nama_masyarakat_umum',
        'nomor_telepon_masyarakat_umum',
        'email_masyarakat_umum',
        'alamat_masyarakat_umum',
        'nama_peminta_informasi',
        'nomor_telepon_peminta_informasi',
        'nama_aduan_informasi',
        'nomor_telepon_aduan_saran',
        'isi_laporan_pengaduan',
        'isi_laporan_permintaan_informasi',
        'isi_laporan_saran',
        'bukti_foto_path',
        'privasi',
        'periode_magang_mulai',
        'periode_magang_akhir',
        'nomor_telepon_peserta_pkl',
    ];

    // Cast attributes to specific types
    protected $casts = [
        'periode_diklat_mulai' => 'date',
        'periode_diklat_akhir' => 'date',
        'periode_magang_mulai' => 'date',
        'periode_magang_akhir' => 'date',
        'tanggal_magang' => 'date',
        'tanggal_penggunaan_mulai' => 'date',
        'tanggal_penggunaan_akhir' => 'date',
        'bukti_foto_path' => 'array', // JSON field
    ];

    // Relasi ke Kategori Pengaduan
    // public function kategoriPengaduan()
    // {
    //     return $this->belongsTo(KategoriPengaduan::class, 'kategori_pengaduan_id');
    // }

    // Relasi ke Program Keahlian
    public function programKeahlian()
    {
        return $this->belongsTo(ProgramKeahlian::class, 'program_keahlian', 'id');
    }
}

