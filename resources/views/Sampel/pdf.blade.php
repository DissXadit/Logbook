<!DOCTYPE html>
<html>
<head>
    <title>Laporan Sampel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
</head>
<body>
    <div align="center">
        <h1 ><b>Laporan Sampel Masuk</b></h1>
</div>
<hr >
    <table class="table table-bordered" style="width:100%" align="center" >
        <tr style="text-align: center">
                <th>No</th>
                <th>Nama Produk</th>
                <th>Batch Number</th>
                <th>Jenis Sampel</th>
                <th>Tanggal Masuk</th>
                <th>Waktu Masuk</th>
        </tr>
        @foreach($data as $key => $item)
        <tr style="text-align: center">
            <td>{{ $item->id }}</td>
            <td>{{ $item->nama }}</td>
                <td>{{ $item->bn }}</td>
                <td>{{ $item->jenis }}</td>
                <td>{{ \Carbon\Carbon::parse($item->tanggal)->format('d-M-Y')}}</td>
                <td>{{ \Carbon\Carbon::parse($item->created_at)->format('H:i ') }}</td>
        </tr>
        @endforeach
    </table>

</body>
</html>
