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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('nama_apk');
            $table->string('versi');
            $table->string('tahun_sk');
            $table->string('nomor_sk');
            $table->string('kondisi')->nullable();
            $table->text('alasan')->nullable();
            $table->string('nama_admin');
            $table->string('nomor_wa');
            $table->string('email');
            $table->string('jumlah_pengguna');
            $table->string('alamat_web');
            $table->string('jenis_layanan');
            $table->text('uraian');
            $table->string('sop')->nullable();
            $table->string('pemilik');
            $table->string('tampilan')->nullable();
            $table->string('pelatihan')->nullable();
            $table->string('rapat')->nullable();
            $table->string('bug')->nullable();
            $table->string('kendala')->nullable();
            // $table->text('body');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
