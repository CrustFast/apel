<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->string('klasifikasi_laporan');
            $table->date('tanggal_pengaduan');
            $table->string('jenis_layanan');
            $table->string('tipe');
            $table->string('kategori_pengaduan');
            $table->text('isi_pengaduan');
            $table->string('foto')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
