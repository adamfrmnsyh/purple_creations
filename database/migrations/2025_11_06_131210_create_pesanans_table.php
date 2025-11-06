<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pesanans', function (Blueprint $table) {
            $table->id();
            $table->string('Nama');
            $table->string('Email');
            $table->text('Alamat');
            $table->string('No_Telp');
            $table->string('Nama_Produk');
            $table->string('Jenis')->nullable();
            $table->decimal('Harga', 12, 2);
            $table->date('tgl_Kirim');
            $table->text('Catatan')->nullable();
            $table->string('Tipe_Pembelian');
            $table->string('ID_Katalog')->nullable();
            $table->timestamps();

            // Jika kamu punya tabel katalog
            $table->foreign('ID_Katalog')->references('id_katalog')->on('katalogs')->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pesanans');
    }
};
