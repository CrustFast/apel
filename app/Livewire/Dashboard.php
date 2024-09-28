<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\LaporanGratifikasi;

class Dashboard extends Component
{
    public $laporan_gratifikasi;

    public function mount()
    {
        $this->laporan_gratifikasi = LaporanGratifikasi::all(); 
    }

    public function render()
    {
        // Ambil data dari tabel laporan_gratifikasis menggunakan model LaporanGratifikasi
        $laporan_gratifikasi = LaporanGratifikasi::all(); 

        // Debugging: dump and die untuk melihat data yang diambil
        dd($laporan_gratifikasi);

        return view('livewire.dashboard', [
            'laporan_gratifikasi' => $laporan_gratifikasi // Kirim data ke view
        ]);
    }
}
