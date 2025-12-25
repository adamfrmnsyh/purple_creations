@extends('layouts.app')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Riwayat Pesanan</h1>
</div>

@if (session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">Filter & Daftar Pesanan</h6>
    </div>

    <div class="card-body">
        <!-- Filter Form -->
        <form method="GET" action="{{ route('admin.pesanan.index') }}" class="mb-4 d-flex align-items-end gap-3 flex-wrap">
            <div>
                <label for="tanggal_awal" class="form-label">Tanggal Awal</label>
                <input type="date" name="tanggal_awal" id="tanggal_awal" class="form-control"
                    value="{{ request('tanggal_awal') }}">
            </div>
            <div>
                <label for="tanggal_akhir" class="form-label">Tanggal Akhir</label>
                <input type="date" name="tanggal_akhir" id="tanggal_akhir" class="form-control"
                    value="{{ request('tanggal_akhir') }}">
            </div>
            <div>
                <label for="status" class="form-label">Status</label>
                <select name="status" id="status" class="form-select">
                    <option value="Semua" {{ request('status') == 'Semua' ? 'selected' : '' }}>Semua</option>
                    <option value="Belum ACC" {{ request('status') == 'Belum ACC' ? 'selected' : '' }}>Belum ACC</option>
                    <option value="Sudah ACC" {{ request('status') == 'Sudah ACC' ? 'selected' : '' }}>Sudah ACC</option>
                    <option value="Dibatalkan" {{ request('status') == 'Dibatalkan' ? 'selected' : '' }}>Dibatalkan</option>
                </select>
            </div>

            <div class="d-flex gap-2 align-items-end">
                <button type="submit" class="btn btn-primary">Filter</button>
                <a href="{{ route('admin.pesanan.index') }}" class="btn btn-secondary">Reset</a>
            </div>

            @if($pesanans->count() > 0)
            <div class="ms-auto">
                <a href="{{ route('admin.pesanan.export', request()->query()) }}" class="btn btn-success">
                    Download CSV
                </a>
            </div>
            @endif
        </form>

        <!-- Tabel Data -->
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="table-primary">
                    <tr>
                        <th>ID</th>
                        <th>Nama Pemesan</th>
                        <th>Email</th>
                        <th>Alamat</th>
                        <th>No. Telp</th>
                        <th>Nama Produk</th>
                        <th>Jenis Bunga</th>
                        <th>Harga</th>
                        <th>Tanggal Kirim</th>
                        <th>Catatan</th>
                        <th>Tipe Pembelian</th>
                        <th>Pesanan Dibuat</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($pesanans as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>{{ $item->no_telp }}</td>
                        <td>{{ $item->nama_produk }}</td>
                        <td>{{ $item->jenis }}</td>
                        <td>Rp {{ number_format($item->harga, 0, ',', '.') }}</td>
                        <td>{{ \Carbon\Carbon::parse($item->tgl_kirim)->format('d/m/Y') }}</td>
                        <td>{{ $item->catatan }}</td>
                        <td>{{ $item->tipe_pembelian }}</td>
                        <td>{{ \Carbon\Carbon::parse($item->created_at)->format('d/m/Y H:i') }}</td>
                        <td>
                            <form action="{{ route('admin.pesanan.updateStatus', $item->id) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <select
                                    name="status"
                                    class="form-select form-select-sm text-white
                {{ $item->status == 'Sudah ACC' ? 'bg-success' : 
                   ($item->status == 'Dibatalkan' ? 'bg-danger' : 'bg-warning text-dark') }}"
                                    onchange="this.form.submit()">

                                    <option value="Belum ACC"
                                        class="bg-warning text-dark"
                                        {{ $item->status == 'Belum ACC' ? 'selected' : '' }}>
                                        Belum ACC
                                    </option>

                                    <option value="Sudah ACC"
                                        class="bg-success text-white"
                                        {{ $item->status == 'Sudah ACC' ? 'selected' : '' }}>
                                        Sudah ACC
                                    </option>

                                    <option value="Dibatalkan"
                                        class="bg-danger text-white"
                                        {{ $item->status == 'Dibatalkan' ? 'selected' : '' }}>
                                        Dibatalkan
                                    </option>
                                </select>
                            </form>
                        </td>

                    </tr>
                    @empty
                    <tr>
                        <td colspan="13" class="text-center text-muted">Belum ada pesanan</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection