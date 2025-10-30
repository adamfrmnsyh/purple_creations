@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800">Tambah Katalog</h1>

    <div class="card shadow mb-4">
        <div class="card-body">

            <form action="{{ route('katalog.store') }}" method="POST" enctype="multipart/form-data">
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
                        <option value="bunga papan">Bunga Papan</option>
                        <option value="standing flower">Standing Flower</option>
                        <option value="bunga meja">Bunga Meja</option>
                        <option value="paper flower">Paper Flower</option>
                        <option value="hand bouquet">Hand Bouquet</option>
                        <option value="money bouquet">Money Bouquet</option>
                        <option value="Pecah Belah Parcel">Pecah Belah Parcel</option>
                        <option value="Parcel Buah">Parcel Buah</option>
                        <option value="Hamper Baby Born">Hamper Baby Born</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea name="deskripsi" class="form-control"></textarea>
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
