<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisBenturanKepentingan extends Model
{
    use HasFactory;

    protected $table = 'jenis_benturan_kepentingan';

    // Jika primary key bukan 'id'
    protected $primaryKey = 'kode_id';

    // Jika primary key bukan auto-incrementing
    public $incrementing = false;

    // Jika primary key bukan integer
    protected $keyType = 'string';

    protected $fillable = ['jenis_benturan_kepentingan'];
}
