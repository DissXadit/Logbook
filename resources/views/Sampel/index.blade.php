@extends('app')
@section('content')
<div class="container-fluid">

        <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Jumlah Sampel</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jumlah }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-pills fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<a href="{{ route('cetakPDF') }}" class="d-flex d-sm-inline btn btn-sm btn-primary shadow bg-body-tertiary rounded"><i
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
    Data Sampel <a href="{{ url('form-tambah') }}" class="d-flex d-sm-inline-block btn btn-sm btn-success shadow-sm align-right ">
        <i  class="fas fa-upload fa-sm text-white-50" ></i> Tambah</a>


    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="myTable" width="100%" cellspacing="0">
            <thead class="thead-dark text-center">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Produk</th>
                <th scope="col">Batch Number</th>
                <th scope="col">Jenis Sampel</th>
                <th scope="col">Tanggal Masuk</th>
                <th scope="col">Waktu Masuk</th>
                <th scope="col" style="width: 15%">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ( $data as $key => $item )
            <tr style="text-align: center;">
                <th scope="row">{{ $key+1 }}</th>
                <td style="text-align: left">{{ $item->nama }}</td>
                <td>{{ $item->bn }}</td>
                <td>{{ $item->jenis }}</td>
                <td>{{ \Carbon\Carbon::parse($item->tanggal)->format('d-M-Y')}}</td>
                <td>{{ \Carbon\Carbon::parse($item->created_at)->format('H:i ') }}</td>
                <td>
                    <div class="row center">
                        <div class="col-4">
                            <a href="{{ url('form-edit', $item->id) }}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                        </div>
                        @if (Auth::user()->level == 'admin')
                        <div class="col-4">
                            <form action="{{ url('hapus-sampel') }}" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{ $item->id }}">
                                <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                            </form>
                        </div>
                        @endif
                    </div>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    </div>
</div>
@endsection

@section('script')
<script>let table = new DataTable('#myTable');
</script>
@endsection
