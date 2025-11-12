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
        Schema::create('katalogs', function (Blueprint $table) {
            $table->string('id_katalog')->primary(); // ID manual (bukan auto increment)
            $table->string('nama_produk');
            $table->enum('jenis', ['Bunga Papan', 'Standing Flower', 'Bunga Meja', 'Paper Flower', 'Handbouquet', 'Money Bouquet', 'Pecah Belah Parcel', 'Parcel Buah', 'Hampers Baby Born', 'Handbouquet(Artificial)', 'Bunga Meja (Artificial)', 'Money Bouquet (Artificial)']);
            $table->text('deskripsi')->nullable();
            $table->decimal('harga', 10, 2);
            $table->string('gambar')->nullable();
             $table->boolean('status')->default(true);  // ✅ Tambahan kolom aktif/nonaktif
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('katalogs');
    }
};

