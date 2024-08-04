<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisBenturanKepentingan extends Model
{
    use HasFactory;

    protected $table = 'jenis_benturan_kepentingan';

    protected $fillable = ['jenis_benturan_kepentingan'];
}
