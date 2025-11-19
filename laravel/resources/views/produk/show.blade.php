<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Produk</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .card {
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 15px;
            margin: 15px 0;
        }
        .btn {
            padding: 10px 15px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            margin: 5px;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        .btn-warning {
            background-color: #ffc107;
            color: #212529;
        }
        .btn-warning:hover {
            background-color: #e0a800;
        }
        .btn-secondary {
            background-color: #6c757d;
        }
        .btn-secondary:hover {
            background-color: #5a6268;
        }
    </style>
</head>

<body>
    <h2>Detail Produk</h2>

    <div class="card">
        <p><strong>Nama Produk:</strong> {{ $produk->nama_produk }}</p>
        <p><strong>Merk:</strong> {{ $produk->merk }}</p>
        <p><strong>Stok:</strong> {{ $produk->stok }}</p>
        <p><strong>Harga:</strong> Rp {{ number_format($produk->harga, 0, ',', '.') }}</p>
    </div>

    <a href="{{ route('produk.index') }}" class="btn btn-secondary">Kembali</a>
    <a href="{{ route('produk.edit', $produk->id) }}" class="btn btn-warning">Edit</a>
</body>

</html>
