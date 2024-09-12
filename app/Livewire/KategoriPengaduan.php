<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Kategori;
use Illuminate\Support\Facades\Log;

class KategoriPengaduan extends Component
{
    public $kategoriPengaduan;
    public $selectedKategori; // Menyimpan ID kategori yang dipilih

    public function mount()
    {
        // Mengambil data kategori dalam format [kategori_id => nama_kategori]
        $this->kategoriPengaduan = Kategori::pluck('nama_kategori', 'kategori_id')->toArray();
    }

    // Dipanggil setiap kali ada perubahan pada pilihan kategori
    public function updatedSelectedKategori($value)
    {
        Log::info('Event emit kategoriSelected dipanggil dengan ID:', ['kategori_id' => $value]);
        $this->emit('kategoriSelected', $value); // Mengirim event ke komponen lain
    }

    public function render()
    {
        return view('livewire.kategori-pengaduan');
    }
}
