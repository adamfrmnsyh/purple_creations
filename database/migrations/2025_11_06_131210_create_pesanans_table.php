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
            $table->string('nama');
            $table->string('email');
            $table->text('alamat');
            $table->string('no_telp');
            $table->string('nama_produk');
            $table->string('jenis')->nullable();
            $table->decimal('harga', 12, 2);
            $table->date('tgl_kirim');
            $table->text('catatan')->nullable();
            $table->string('tipe_pembelian');
            $table->string('id_katalog')->nullable();
            $table->timestamps();

            // Jika kamu punya tabel katalog
            $table->foreign('id_katalog')->references('id_katalog')->on('katalogs')->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pesanans');
    }
};
