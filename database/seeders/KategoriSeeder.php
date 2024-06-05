<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategori')->insert([
            ['kategori_id' => 'SKM1', 'nama_kategori' => 'Kesesuaian persyaratan pelayanan'],
            ['kategori_id' => 'SKM2', 'nama_kategori' => 'Kemudahan prosedur'],
            ['kategori_id' => 'SKM3', 'nama_kategori' => 'Kecepatan pelayanan'],
            ['kategori_id' => 'SKM4', 'nama_kategori' => 'Biaya/tarif pelayanan'],
            ['kategori_id' => 'SKM5', 'nama_kategori' => 'Kesesuaian produk'],
            ['kategori_id' => 'SKM6', 'nama_kategori' => 'Perilaku petugas'],
            ['kategori_id' => 'SKM7', 'nama_kategori' => 'Kompetensi/kemampuan petugas'],
            ['kategori_id' => 'SKM8', 'nama_kategori' => 'Penanganan pengaduan'],
            ['kategori_id' => 'SKM9', 'nama_kategori' => 'Kualitas sarana dan prasarana'],
        ]);
    }
}
