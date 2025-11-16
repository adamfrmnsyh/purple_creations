@extends('layouts.app')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Katalog Produk</h1>
    <a href="{{ route('admin.katalog.create') }}" class="btn btn-primary btn-sm">
        + Tambah Produk
    </a>
</div>

@if (session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Daftar Katalog</h6>
    </div>

    <div class="card-body">
        <form id="filterForm" method="GET" action="{{ route('admin.katalog.index') }}">
            <div class="mb-3">
                <label for="jenis" class="form-label">Filter berdasarkan Jenis:</label>
                <select name="jenis" id="jenis" class="form-control" onchange="document.getElementById('filterForm').submit()">
                    <option value="">-- Semua Jenis --</option>
                    <option value="bunga papan" {{ request('jenis') == 'bunga papan' ? 'selected' : '' }}>Bunga Papan</option>
                    <option value="standing flower" {{ request('jenis') == 'standing flower' ? 'selected' : '' }}>Standing Flower</option>
                    <option value="bunga meja" {{ request('jenis') == 'bunga meja' ? 'selected' : '' }}>Bunga Meja</option>
                    <option value="paper flower" {{ request('jenis') == 'paper flower' ? 'selected' : '' }}>Paper Flower</option>
                    <option value="hand bouquet" {{ request('jenis') == 'hand bouquet' ? 'selected' : '' }}>Hand Bouquet</option>
                    <option value="money bouquet" {{ request('jenis') == 'money bouquet' ? 'selected' : '' }}>Money Bouquet</option>
                    <option value="Pecah Belah Parcel" {{ request('jenis') == 'Pecah Belah Parcel' ? 'selected' : '' }}>Pecah Belah Parcel</option>
                    <option value="Parcel Buah" {{ request('jenis') == 'Parcel Buah' ? 'selected' : '' }}>Parcel Buah</option>
                    <option value="Hamper Baby Born" {{ request('jenis') == 'Hamper Baby Born' ? 'selected' : '' }}>Hamper Baby Born</option>
                </select>
            </div>
        </form>

        <div class="table-responsive">
            <table class="table table-bordered" width="100%">
                <thead class="table-primary">
                    <tr>
                        <th>ID Katalog</th>
                        <th>Nama Produk</th>
                        <th>Jenis</th>
                        <th>Harga</th>
                        <th>Status</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($katalogs as $item)
                    <tr>
                        <td>{{ $item->id_katalog }}</td>
                        <td>{{ $item->nama_produk }}</td>
                        <td>{{ $item->jenis }}</td>
                        <td>Rp {{ number_format($item->harga, 0, ',', '.') }}</td>

                        <td>
                            @if($item->status)
                            <span class="badge bg-success text-light">Aktif</span>
                            @else
                            <span class="badge bg-danger text-light">Nonaktif</span>
                            @endif
                        </td>
                        <td>
                            @if($item->gambar)
                            <img src="{{ asset('storage/' . $item->gambar) }}" width="150">
                            @else
                            <small class="text-muted">Tidak ada gambar</small>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('admin.katalog.edit', $item->id_katalog) }}"
                                class="btn btn-warning btn-sm">
                                Edit
                            </a>



                            <form action="{{ route('admin.katalog.destroy', $item->id_katalog) }}"
                                method="POST" style="display:inline;">
                                @csrf @method('DELETE')
                                <button onclick="return confirm('Hapus produk ini?')" class="btn btn-danger btn-sm">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
</div>
@endsection