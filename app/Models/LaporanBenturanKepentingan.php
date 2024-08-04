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
        'email',
        'nama_pihak_terlibat',
        'jabatan_pihak_terlibat',
        'unit_kerja_id',
        'tanggal_penerimaan',
        'tanggal_dilaporkan',
        'tempat_kejadian',
        'jenis_benturan_kepentingan',
        'kronologi',
        'file_upload'
    ];

    // Relasi ke ProgramKeahlian
    public function programKeahlian()
    {
        return $this->belongsTo(ProgramKeahlian::class, 'unit_kerja_id');
    }
}
