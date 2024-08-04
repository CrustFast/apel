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
        Schema::create('laporan_gratifikasis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pelapor');
            $table->string('jabatan');
            $table->date('tanggal_penerimaan_penolakan');
            $table->date('tanggal_dilaporkan');
            $table->string('nama_pemberi');
            $table->string('hubungan');
            $table->string('objek_gratifikasi');
            $table->string('pemanfaatan_objek');
            $table->string('nomor_telepon');
            $table->string('email');
            $table->text('kronologi');
            $table->string('jenis_laporan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporan_gratifikasis');
    }
};

