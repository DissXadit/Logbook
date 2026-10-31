@extends('app')
@section('content')
<div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Jumlah Produk</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jumlah }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fa-solid fa-kit-medical fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <a href="{{ route('cetakPdf') }}" class="d-flex d-sm-inline btn btn-sm btn-primary shadow bg-body-tertiary rounded"><i
        class="fa fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>


    <h></h>
    <div class="card mt-3">

    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
    <div class="card-header">
    Data Produk <a href="{{ url('tambah-produk') }}" class="btn btn-success">Tambah</a>
    </div>
    <div class="card-body">
        <table class="table" id="myTable">
            <thead class="thead-dark text-center">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Produk</th>
                <th scope="col">Kode Produk</th>
                <th scope="col" style="width: 15%">Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach ( $data as $key => $item )
                <tr>
                    <th scope="row">{{ $key+1 }}</th>
                    <td>{{ $item->nama_produk }}</td>
                    <td>{{ $item->kode_produk }}</td>
                    <td>
                        <div class="row">
                            <div class="col-4">
                                <a href="{{ url('edit-produk', $item->id) }}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                            </div>
                            <div class="col-4">
                                <form action="{{ url('hapus-produk') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $item->id }}">
                                    <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('script')
<script>let table = new DataTable('#myTable');
</script>
@endsection
