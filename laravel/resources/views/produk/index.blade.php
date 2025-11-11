<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
</head>
<body>
    <h3>Tambah Produk</h3>


    <!-- Tombol Tambah Data -->
    <p>
        <a href="create">+ Tambah Produk</a>
    </p>


    <!-- Tabel Data Pegawai -->
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Merk</th>
                <th>Stok</th>
                <th>harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach($produks as $item)
            <tr>
                <td>{{ $item->id}}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->merk }}</td>
                <td>{{ $item->harga }}</td>
                <td>
                    <a href="">Edit</a> |
                    <a href="">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>