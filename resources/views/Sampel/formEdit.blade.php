@extends('app')
@section('content')
<div class="d-flex justify-content-center">
    <div class="card" style="width: 40%">
        <div class="card-header">
          Form Edit Sampel
        </div>
        <div class="card-body">
            <form action="{{ url('update-sampel') }}" method="post">
                @csrf
                <div class="form-group">
                  <label for="nama">Nama Produk</label>
                  <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Produk" value="{{ $data->nama }}">
                </div>
                <div class="form-group">
                  <label for="bn">Batch Number</label>
                  <input type="text" class="form-control" name="bn" id="bn" placeholder="Batch Number" value="{{ $data->bn }}">
                </div>
                <div class="form-group">
                  <label for="jenis">Jenis Sampel</label>
                  <input type="text" class="form-control" name="jenis" id="jenis" placeholder="Jenis Sampel" value="{{ $data->jenis }}">
                </div>
                <div class="form-group">
                  <label for="tanggal">Tanggal Masuk</label>
                  <input type="date" class="form-control" name="tanggal" id="tanggal" value="{{ $data->tanggal }}">
                </div>

                <input type="hidden" value="{{ $data->id }}" name="id">
                <button type="submit" class="btn btn-primary">Simpan</button>
              </form>
        </div>
      </div>
</div>
@endsection
