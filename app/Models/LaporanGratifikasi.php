<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanGratifikasi extends Model
{
    use HasFactory;

    protected $table = 'laporan_gratifikasis';

    protected $fillable = [
        'nama_pelapor', 
        'jabatan', 
        'tanggal_penerimaan_penolakan', 
        'tanggal_dilaporkan', 
        'nama_pemberi', 
        'hubungan', 
        'objek_gratifikasi', 
        'pemanfaatan_objek', 
        'nomor_telepon', 
        'email', 
        'kronologi', 
        'jenis_laporan'
    ];

    protected $casts = [
        'tanggal_penerimaan_penolakan' => 'date',
        'tanggal_dilaporkan' => 'date',
    ];
}
