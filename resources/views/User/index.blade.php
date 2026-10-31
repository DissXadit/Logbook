@extends('app')
@section('content')
<div class="card">
    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
    <div class="card-header">
    Data User
    <a href="{{ route('tambah-user') }}" class="btn btn-success">Tambah</a>
    </div>
    <div class="card-body">
        <table class="table" id="myTable">
            <thead class="thead-dark text-center">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Level</th>
                <th scope="col">Email</th>
                <th scope="col" style="width: 15%">Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach ( $data as $key => $item )
                <tr>
                    <th scope="row">{{ $key+1 }}</th>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->level }}</td>
                    <td>{{ $item->email }}</td>
                    <td>
                        <div class="row">
                            <div class="col-4">
                                <form action="{{ url('hapus-data') }}" method="post">
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

