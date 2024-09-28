<?php

namespace App\Livewire\Dashboard;

use App\Models\LaporanGratifikasi;
use Livewire\Component;
use Livewire\WithPagination;

class DatatableAksi extends Component
{
    use WithPagination;

    public function render()
    {
        // Pindahkan logika pengambilan data ke dalam render agar diperbarui dengan polling
        $laporanGratifikasis = LaporanGratifikasi::select('id', 'nama_pelapor', 'tanggal_dilaporkan', 'objek_gratifikasi', 'jenis_laporan')
            ->latest()
            ->paginate(12) 
            ->through(function ($laporan) {
                // Tentukan status berdasarkan logika
                if ($laporan->tanggal_dilaporkan <= now()->subDays(30)) {
                    $laporan->status = 'selesai'; // Jika dilaporkan lebih dari 30 hari, status selesai
                } elseif ($laporan->tanggal_dilaporkan <= now()->subDays(7)) {
                    $laporan->status = 'proses';  // Jika dilaporkan lebih dari 7 hari, status proses
                } else {
                    $laporan->status = 'menunggu'; // Jika dilaporkan kurang dari 7 hari, status menunggu
                }
                return $laporan;
            });

        return view('livewire.dashboard.datatable-aksi', [
            'laporanGratifikasis' => $laporanGratifikasis,
        ]);
    }
}
