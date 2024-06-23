<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Kategori; // Import model Kategori

class KategoriPengaduan extends Component
{
  public $kategoriPengaduan;

  public function mount()
  {
    $this->kategoriPengaduan = Kategori::pluck('nama_kategori', 'kategori_id')->toArray();
  }

  public function render()
  {
    return view('livewire.kategori-pengaduan');
  }
}
