<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>
    <h3>Daftar Produk</h3>
    <a href="" class="tombol-tambah">Tambah</a>
</body>
<table border="1">
    <tr>
        <th>No</th>
        <th>Nama Barang</th>
        <th>Merk Barang</th>
        <th>Stok Barang</th>
        <th>Harga Barang</th>
        <th>Aksi</th>
    </tr>
    @foreach ($allproduk as $index => $item)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $item->nama_produk }}</td>
            <td>{{ $item->merk }}</td>
            <td>{{ $item->stok }}</td>
            <td>{{ $item->harga }}</td>
            <td>
                <a href="{{ url('produk/show') }}">detail</a>
                <a href="{{ url('produk/edit/' . $item->id) }}">edit</a>
                <a href="{{ url('produk/destroy/' . $item->id) }}"
                    onclick="return confirm('Yakin mau hapus?')">delete</a>
            </td>
        </tr>
    @endforeach

</table>

</html>
