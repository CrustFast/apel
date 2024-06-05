<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function getKategori()
    {
        $kategori = Kategori::all();
        return view('livewire.form', compact('kategori'));
    }
}
