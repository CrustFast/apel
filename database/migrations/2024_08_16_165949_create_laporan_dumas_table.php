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
        Schema::create('laporan_dumas', function (Blueprint $table) {
            $table->id();
            
            // Klasifikasi Laporan (required)
            $table->enum('klasifikasi_laporan', ['pengaduan', 'permintaan-informasi', 'saran']);
            
            // Tanggal Pengaduan
            $table->date('tanggal_pengaduan')->nullable();

            // Jenis Layanan
            $table->enum('jenis_layanan', ['diklat', 'non-diklat'])->nullable();

            // Tipe Layanan
            $table->enum('tipe', ['daring', 'luring', 'hybrid', 'pkl', 'pengguna-fasilitas', 'kunjungan'])->nullable();

            // Kategori Pengaduan
            $table->string('kategori_pengaduan_id')->nullable();

            // Peserta Diklat Fields
            $table->date('periode_diklat_mulai')->nullable();
            $table->date('periode_diklat_akhir')->nullable();
            $table->string('nama_diklat')->nullable();
            $table->string('nama_peserta_diklat')->nullable();
            $table->string('nomor_telepon_peserta_diklat')->nullable();
            $table->string('asal_smk_peserta_diklat')->nullable();
            $table->string('program_keahlian')->nullable();

            // Peserta PKL Fields
            $table->date('periode_magang_mulai')->nullable();
            $table->date('periode_magang_akhir')->nullable();
            $table->string('nama_peserta_pkl')->nullable();
            $table->string('nomor_telepon_peserta_pkl')->nullable();
            $table->string('asal_smk_peserta_pkl')->nullable();
            $table->string('unit')->nullable();

            // Pengguna Fasilitas Fields
            $table->date('tanggal_penggunaan_mulai')->nullable();
            $table->date('tanggal_penggunaan_akhir')->nullable();
            $table->string('nama_pengguna_fasilitas')->nullable();
            $table->string('nomor_telepon_pengguna_fasilitas')->nullable();
            $table->string('email_pengguna_fasilitas')->nullable();
            $table->string('nama_fasilitas')->nullable();

            // Masyarakat Umum Fields
            $table->string('nama_masyarakat_umum')->nullable();
            $table->string('nomor_telepon_masyarakat_umum')->nullable();
            $table->string('email_masyarakat_umum')->nullable();
            $table->string('alamat_masyarakat_umum')->nullable();

            // Permintaan Informasi Fields
            $table->string('nama_peminta_informasi')->nullable();
            $table->string('nomor_telepon_peminta_informasi')->nullable();

            // Saran Fields
            $table->string('nama_aduan_informasi')->nullable();
            $table->string('nomor_telepon_aduan_saran')->nullable();
            
            // Isi Pengaduan/Permintaan Informasi
            $table->text('isi_laporan_pengaduan')->nullable();
            $table->text('isi_laporan_permintaan_informasi')->nullable();
            $table->text('isi_laporan_saran')->nullable();

            // Upload Bukti Pendukung
            $table->json('bukti_foto_path')->nullable();

            // Pilihan Anonim/Rahasia
            $table->enum('privasi', ['anonim', 'rahasia'])->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporan_dumas');
    }
};
