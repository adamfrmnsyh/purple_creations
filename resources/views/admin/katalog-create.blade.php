@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800">Tambah Katalog</h1>

    <div class="card shadow mb-4">
        <div class="card-body">

            <form action="{{ route('admin.katalog.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label>ID Katalog</label>
                    <input type="text" name="id_katalog" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Nama Produk</label>
                    <input type="text" name="nama_produk" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Jenis Produk</label>
                    <select name="jenis" class="form-control" required>
                        <option value="">-- Pilih --</option>
                        <option value="Bunga Papan">Bunga Papan</option>
                        <option value="Standing Flower">Standing Flower</option>
                        <option value="Bunga Meja">Bunga Meja</option>
                        <option value="Paper Flower">Paper Flower</option>
                        <option value="Handbouquet">Handbouquet</option>
                        <option value="Money Bouquet">Money Bouquet</option>
                        <option value="Pecah Belah Parcel">Pecah Belah Parcel</option>
                        <option value="Parcel Buah">Parcel Buah</option>
                        <option value="Hampers Baby Born">Hampers Baby Born</option>
                        <option value="Bunga Meja (Artificial)">Bunga Meja (Artificial)</option>
                        <option value="Handbouquet (Artificial)">Handbouquet (Artificial)</option>
                        <option value="Money Bouquet (Artificial)">Money Bouquet (Artificial)</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Harga</label>
                    <input type="number" name="harga" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Gambar Produk</label>
                    <input type="file" name="gambar" class="form-control">
                </div>

                <div class="form-group">
                    <label>Status</label>
                    <select name="status" class="form-control">
                        <option value="1">Aktif</option>
                        <option value="0">Nonaktif</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('katalog.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>

</div>
@endsection
