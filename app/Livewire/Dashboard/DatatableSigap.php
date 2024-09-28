<?php

namespace App\Livewire\Dashboard;

use App\Models\LaporanDumas;
use Livewire\Component;
use Livewire\WithPagination;

class DatatableSigap extends Component
{
    use WithPagination;

    public function render()
    {
        $laporanDumas = LaporanDumas::with(['kategoriPengaduan', 'programKeahlian'])
            ->select('id', 'jenis_layanan', 'tipe', 'kategori_pengaduan_id', 'tanggal_pengaduan', 'nama_diklat', 'tanggal_pengaduan')
            ->latest()
            ->paginate(12)
            ->through(function ($laporan) {
                // Tentukan status berdasarkan logika
                if ($laporan->tanggal_pengaduan <= now()->subDays(30)) {
                    $laporan->status = 'selesai'; // Jika dilaporkan lebih dari 30 hari, status selesai
                } elseif ($laporan->tanggal_pengaduan <= now()->subDays(7)) {
                    $laporan->status = 'proses';  // Jika dilaporkan lebih dari 7 hari, status proses
                } else {
                    $laporan->status = 'menunggu'; // Jika dilaporkan kurang dari 7 hari, status menunggu
                }
                return $laporan;
            });

        return view('livewire.dashboard.datatable-sigap', [
            'laporanDumas' => $laporanDumas,
        ]);
    }
}
