<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanBenturanKepentingan extends Model
{
    use HasFactory;

    protected $table = 'laporan_benturan_kepentingan';

    protected $fillable = [
        'nama_pelapor',
        'jabatan',
        'nomor_telepon',
        'email_pelapor',
        'nama_pihak_terlibat',
        'jabatan_pihak_terlibat',
        'program_keahlian_id',
        'tanggal_penerimaan_penolakan',  
        'tanggal_dilaporkan',            
        'tempat_kejadian',
        'jenis_benturan_id',
        'kronologi_kejadian',
        'bukti_file_path'
    ];

    protected $casts = [
        'tanggal_penerimaan_penolakan' => 'date',
        'tanggal_dilaporkan' => 'date',
    ];

    // Relasi ke ProgramKeahlian
    public function programKeahlian()
    {
        return $this->belongsTo(ProgramKeahlian::class, 'program_keahlian_id');
    }

    // Relasi ke model JenisBenturanKepentingan
    public function jenisBenturan()
    {
        return $this->belongsTo(JenisBenturanKepentingan::class, 'jenis_benturan_id', 'kode_id');
    }
}

