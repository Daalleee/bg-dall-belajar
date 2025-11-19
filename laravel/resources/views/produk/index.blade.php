<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .tombol-tambah {
            display: inline-block;
            padding: 10px 15px;
            background-color: #28a745;
            color: white;
            text-decoration: none;
            border-radius: 4px;
        }
        .tombol-tambah:hover {
            background-color: #218838;
        }
        .aksi a {
            display: inline-block;
            padding: 5px 10px;
            margin: 0 2px;
            text-decoration: none;
            border-radius: 3px;
            color: white;
        }
        .aksi .detail {
            background-color: #17a2b8;
        }
        .aksi .edit {
            background-color: #ffc107;
            color: #212529;
        }
        .aksi .delete {
            background-color: #dc3545;
        }
    </style>
</head>

<body>
    <h3>Daftar Produk</h3>
    <a href="{{ route('produk.create') }}" class="tombol-tambah">Tambah Produk</a>

    <table>
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Merk Barang</th>
            <th>Stok Barang</th>
            <th>Harga Barang</th>
            <th>Aksi</th>
        </tr>
        @forelse ($allproduk as $index => $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->nama_produk }}</td>
                <td>{{ $item->merk }}</td>
                <td>{{ $item->stok }}</td>
                <td>Rp {{ number_format($item->harga, 0, ',', '.') }}</td>
                <td class="aksi">
                    <a href="{{ route('produk.show', $item->id) }}" class="detail">Detail</a>
                    <a href="{{ route('produk.edit', $item->id) }}" class="edit">Edit</a>
                    <form action="{{ route('produk.destroy', $item->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <a href="#" class="delete" onclick="event.preventDefault(); if(confirm('Yakin mau hapus?')) { this.closest('form').submit(); }">Delete</a>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6" style="text-align: center;">Tidak ada data produk</td>
            </tr>
        @endforelse
    </table>
</body>

</html>
