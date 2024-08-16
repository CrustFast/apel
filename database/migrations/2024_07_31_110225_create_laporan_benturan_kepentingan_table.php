<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('laporan_benturan_kepentingan', function (Blueprint $table) {
            $table->id();
            
            // Informasi Pelapor
            $table->string('nama_pelapor');
            $table->string('jabatan');
            $table->string('nomor_telepon');
            $table->string('email_pelapor');

            // Informasi Pihak Terlibat
            $table->string('nama_pihak_terlibat');
            $table->string('jabatan_pihak_terlibat');
            $table->unsignedInteger('program_keahlian_id');
            // $table->foreign('program_keahlian_id')->references('id')->on('program_keahlian_2')->onDelete('restrict');
            // $table->foreign('program_keahlian_id')->references('id')->on('program_keahlian_2')->onDelete('restrict');

            // Deskripsi Kejadian
            $table->date('tanggal_penerimaan_penolakan');
            $table->date('tanggal_dilaporkan');
            $table->string('tempat_kejadian');
            $table->string('jenis_benturan_id');
            // $table->foreign('jenis_benturan_id')->references('kode_id')->on('jenis_benturan_kepentingan')->onDelete('restrict');
            $table->text('kronologi_kejadian');

            // Bukti Pendukung
            $table->string('bukti_file_path');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporan_benturan_kepentingan');
    }
};
