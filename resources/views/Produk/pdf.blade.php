<!DOCTYPE html>
<html>
<head>
    <title>Laporan Produk</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
</head>
<body>
    <div align="center">
        <h1 ><b>Laporan Produk</b></h1>
</div>
<hr >
    <table class="table table-bordered" style="width:100%" >
        <tr style="text-align: center">
                <th>No</th>
                <th>Nama Produk</th>
                <th>Kode Produk</th>
        </tr>
        @foreach($data as $key => $item)
        <tr style="text-align: center">
            <td>{{ $item->id }}</td>
            <td>{{ $item->nama_produk }}</td>
                <td>{{ $item->kode_produk }}</td>
        </tr>
        @endforeach
    </table>

</body>
</html>
