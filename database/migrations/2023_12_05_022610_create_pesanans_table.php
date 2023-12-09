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
        Schema::create('pesanans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pelanggan_id');
            $table->unsignedBigInteger('kategori_paket_id');
            $table->string('nama');
            $table->string('jenis_cucian');
            $table->date('tanggal_pesan');
            $table->integer('jumlah');
            $table->integer('total_harga');
            $table->timestamps();

            //Foreign Key
            $table->foreign('pelanggan_id')->references('id')->on('pelanggans')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('kategori_paket_id')->references('id')->on('kategoris')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanans');
    }
};
