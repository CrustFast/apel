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
            $table->string('nama_pelapor');
            $table->string('jabatan');
            $table->string('nomor_telepon');
            $table->string('email');
            $table->string('nama_pihak_terlibat');
            $table->string('jabatan_pihak_terlibat');
            $table->foreignId('unit_kerja_id')->constrained('program_keahlian_2');
            $table->date('tanggal_penerimaan');
            $table->date('tanggal_dilaporkan');
            $table->string('tempat_kejadian');
            $table->string('jenis_benturan_kepentingan');
            $table->string('kronologi');
            $table->string('file_upload')->nullable();
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
