<?php
namespace App\Http\Controllers;

use App\Models\LaporanGratifikasi;
use Illuminate\Http\Request;

class LaporanGratifikasiController extends Controller
{
    // Fungsi untuk menangani halaman edit
    public function edit($id)
    {
        // Ambil data laporan berdasarkan ID
        $laporan = LaporanGratifikasi::findOrFail($id);

        // Arahkan ke view edit dengan data laporan yang sesuai
        return view('livewire.dashboard.edit-page', compact('laporan'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data
        $request->validate([
            'jenis_laporan' => 'required|in:Penerimaan,Penolakan',
        ]);

        // Update laporan
        $laporan = LaporanGratifikasi::findOrFail($id);
        $laporan->jenis_laporan = $request->input('jenis_laporan');
        $laporan->save();

        return redirect()->route('dashboard')->with('success', 'Laporan berhasil diupdate');
    }

}
