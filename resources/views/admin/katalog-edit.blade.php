@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto mt-10 bg-white shadow-md rounded-lg p-6">

    <h2 class="text-2xl font-bold mb-4">Edit Katalog Produk</h2>

    <form action="{{ route('admin.katalog.update', $katalog->id_katalog) }}" method="POST" enctype="multipart/form-data">

        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block font-semibold mb-1">Nama Produk</label>
            <input type="text" name="nama_produk" value="{{ $katalog->nama_produk }}"
                class="w-full border border-gray-300 rounded-lg p-2 focus:ring focus:ring-blue-200" required>
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-1">Jenis</label>
            <select name="jenis" class="w-full border border-gray-300 rounded-lg p-2 focus:ring focus:ring-blue-200" required>
                <option value="">-- Pilih Jenis Produk --</option>
                <option value="Bunga Papan" {{ $katalog->jenis == 'Bunga Papan' ? 'selected' : '' }}>Bunga Papan</option>
                <option value="Standing Flower" {{ $katalog->jenis == 'Standing Flower' ? 'selected' : '' }}>Standing Flower</option>
                <option value="Bunga Meja" {{ $katalog->jenis == 'Bunga Meja' ? 'selected' : '' }}>Bunga Meja</option>
                <option value="Paper Flower" {{ $katalog->jenis == 'Paper Flower' ? 'selected' : '' }}>Paper Flower</option>
                <option value="Handbouquet" {{ $katalog->jenis == 'Handbouquet' ? 'selected' : '' }}>Handbouquet</option>
                <option value="Money Bouquet" {{ $katalog->jenis == 'Money Bouquet' ? 'selected' : '' }}>Money Bouquet</option>
                <option value="Pecah Belah Parcel" {{ $katalog->jenis == 'Pecah Belah Parcel' ? 'selected' : '' }}>Pecah Belah Parcel</option>
                <option value="Parcel Buah" {{ $katalog->jenis == 'Parcel Buah' ? 'selected' : '' }}>Parcel Buah</option>
                <option value="Hamper Baby Born" {{ $katalog->jenis == 'Hamper Baby Born' ? 'selected' : '' }}>Hamper Baby Born</option>
                <option value="Bunga Meja (Artificial)" {{ $katalog->jenis == 'Bunga Meja (Artificial)' ? 'selected' : '' }}>Bunga Meja (Artificial)</option>
                <option value="Handbouquet (Artificial)" {{ $katalog->jenis == 'Handbouquet (Artificial)' ? 'selected' : '' }}>Handbouquet (Artificial)</option>
                <option value="Money Bouquet (Artificial)" {{ $katalog->jenis == 'Money Bouquet (Artificial)' ? 'selected' : '' }}>Money Bouquet (Artificial)</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-1">Harga</label>
            <input type="number" name="harga" value="{{ $katalog->harga }}"
                class="w-full border border-gray-300 rounded-lg p-2 focus:ring focus:ring-blue-200" required>
        </div>

        {{-- Edit Gambar --}}
        <div class="mb-4">
            <label class="block font-semibold mb-1">Foto Produk</label>

            @if($katalog->gambar)
            <img src="{{ asset('storage/'.$katalog->gambar) }}" class="w-32 mb-2">
            @endif

            <input type="file" name="gambar" class="w-full border border-gray-300 rounded-lg p-2">
        </div>


        <div class="mb-4">
            <label class="block font-semibold mb-1">Status</label>
            <input type="checkbox" name="status" value="1" {{ $katalog->status ? 'checked' : '' }}> Aktif
        </div>

        <div class="flex gap-3">
            <a href="{{ route('admin.katalog.index') }}" class="px-4 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600">
                Batal
            </a>

            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                Update
            </button>
        </div>
    </form>
</div>
@endsection