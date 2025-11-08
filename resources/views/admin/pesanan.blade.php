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
        <h6 class="m-0 font-weight-bold text-primary">Daftar Pesanan</h6>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" width="100%">
                <thead class="table-primary">
                    <tr>
                        <th>ID</th>
                        <th>Nama Pemesan</th>
                        <th>Email</th>
                        <th>Alamat</th>
                        <th>Nomor Telepon</th>
                        <th>Nama Produk</th>
                        <th>Jenis Bunga</th>
                        <th>Harga</th>
                        <th>Tanggal Kirim</th>
                        <th>Catatan</th>
                        <th>Tipe Pembelian</th>
                        <th>Pesanan Dibuat</th>
                        <th>Status</th>
                        <th>Aksi</th>
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
                        <td>{{ $item->jenis_bunga }}</td>
                        <td>Rp {{ number_format($item->harga, 0, ',', '.') }}</td>
                        <td>{{ \Carbon\Carbon::parse($item->tgl_kirim)->format('d/m/Y') }}</td>
                        <td>{{ $item->tipe_pembelian }}</td>
                        <td>{{ $item->catatan }}</td>
                        <td>{{ \Carbon\Carbon::parse($item->created_at)->format('d/m/Y H:i') }}</td>

                        <td>
                            @if ($item->status == 'Sudah ACC')
                                <span class="badge bg-success text-light">Sudah ACC</span>
                            @elseif ($item->status == 'Dibatalkan')
                                <span class="badge bg-danger text-light">Dibatalkan</span>
                            @else
                                <span class="badge bg-warning text-dark">Belum ACC</span>
                            @endif
                        </td>
                        <td>
                            <form action="{{ route('admin.pesanan.updateStatus', $item->id) }}" method="POST" class="d-flex">
                                @csrf
                                @method('PUT')
                                <select name="status" class="form-select form-select-sm me-2">
                                    <option value="Belum ACC" {{ $item->status == 'Belum ACC' ? 'selected' : '' }}>Belum ACC</option>
                                    <option value="Sudah ACC" {{ $item->status == 'Sudah ACC' ? 'selected' : '' }}>Sudah ACC</option>
                                    <option value="Dibatalkan" {{ $item->status == 'Dibatalkan' ? 'selected' : '' }}>Dibatalkan</option>
                                </select>
                                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="8" class="text-center text-muted">Belum ada pesanan</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
