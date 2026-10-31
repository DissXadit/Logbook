@extends('app')
@section('content')
<div class="d-flex justify-content-center">
    <div class="card" style="width: 40%">
        <div class="card-header">
          Form Tambah Produk
        </div>
        <div class="card-body">
            <form action="{{ url('simpan-produk') }}" method="post">
                @csrf
                <div class="form-group">
                  <label for="nama_produk">Nama Produk</label>
                  <input type="text" class="form-control" name="nama_produk" id="nama_produk" placeholder="Nama Produk">
                </div>
                <div class="form-group">
                  <label for="kode_produk">Kode Produk</label>
                  <input type="text" class="form-control" name="kode_produk" id="kode_produk" placeholder="Kode Produk">
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
              </form>
        </div>
      </div>
</div>
@endsection
