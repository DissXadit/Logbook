@extends('app')
@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h1 class="h3 mb-1 text-gray-800">Dashboard</h1>
        <p class="text-muted mb-0">{{ now()->format('l, d-M-Y') }}</p>
    </div>
</div>

<div class="row">
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah User</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jumlahUser }}</div>
            </div>
        </div>
    </div>

    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Jumlah Produk</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jumlahProduk }}</div>
            </div>
        </div>
    </div>

    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Jumlah Sampel</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jumlahSampel }}</div>
            </div>
        </div>
    </div>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">Sampel Terbaru</h6>
        <a href="{{ route('sampel') }}" class="btn btn-sm btn-primary">Lihat Semua</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered mb-0">
                <thead class="thead-light">
                    <tr>
                        <th>Nama Sampel</th>
                        <th>Batch Number</th>
                        <th>Jenis</th>
                        <th>Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($sampelTerbaru as $sampel)
                        <tr>
                            <td>{{ $sampel->nama }}</td>
                            <td>{{ $sampel->bn }}</td>
                            <td>{{ $sampel->jenis }}</td>
                            <td>{{ \Carbon\Carbon::parse($sampel->tanggal)->format('d-M-Y') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center text-muted">Belum ada data sampel.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
