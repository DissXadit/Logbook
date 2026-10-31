@extends('app')
@section('content')
<div class="d-flex justify-content-center">
    <div class="card" style="width: 40%">
        <div class="card-header">
          Form Edit Produk
        </div>
        <div class="card-body">
            <form action="{{ url('update-produk') }}" method="post">
                @csrf
                <div class="form-group">
                  <label for="nama_produk">Nama Produk</label>
                  <input type="text" class="form-control" name="nama_produk" id="nama_produk" value="{{ $data->nama_produk }}">
                </div>
                <div class="form-group">
                  <label for="kode_produk">Kode Produk</label>
                  <input type="text" class="form-control" name="kode_produk" id="kode_produk" value="{{ $data->kode_produk }}">
                </div>
                <input type="hidden" value="{{ $data->id }}" name="id">
                <button type="submit" class="btn btn-primary">Simpan</button>
              </form>
        </div>
      </div>
</div>
@endsection
