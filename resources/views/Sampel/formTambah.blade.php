@extends('app')
@section('content')
<div class="d-flex justify-content-center">
    <div class="card" style="width: 40%">
        <div class="card-header">
          Form Tambah Sampel
        </div>
        <div class="card-body">
            <form action="{{ url('simpan-sampel') }}" method="post">
                @csrf
                <div class="form-group">
                  <label for="nama">Nama Produk</label>
                  <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Produk">
                </div>
                <div class="form-group">
                  <label for="bn">Batch Number</label>
                  <input type="text" class="form-control" name="bn" id="bn" placeholder="Batch Number">
                </div>
                <div class="form-group">
                  <label for="jenis">Jenis Sampel</label>
                  <select class="form-control" name="jenis" id="jenis" placeholder="Jenis Sampel">
                    <option>Rutin</option>
                    <option>Non Rutin</option>
                  </select>
                  {{-- <input type="text" class="form-control" name="jenis" id="jenis" placeholder="Jenis Sampel"> --}}
                </div>
                <div class="form-group">
                  <label for="tanggal">Tanggal Masuk</label>
                  <input type="date" class="form-control container text-center col" name="tanggal" id="tanggal" placeholder="Tanggal">
                  {{-- <input type="date" class="form-control container text-center col" name="tanggal" id="tanggal" placeholder="Tanggal"> --}}
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
              </form>
        </div>
      </div>
</div>
@endsection
