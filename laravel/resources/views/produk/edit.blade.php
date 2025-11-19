<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Produk</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
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
        }
        .btn:hover {
            background-color: #0056b3;
        }
        .btn-danger {
            background-color: #dc3545;
        }
        .btn-danger:hover {
            background-color: #c82333;
        }
        .btn-success {
            background-color: #28a745;
        }
        .btn-success:hover {
            background-color: #218838;
        }
        .form-container {
            max-width: 500px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <h2>Edit Produk</h2>

    <div class="form-container">
        <form action="{{ route('produk.update', $produk->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama_produk">Nama Produk:</label>
                <input type="text" id="nama_produk" name="nama_produk" value="{{ old('nama_produk', $produk->nama_produk) }}" required>
            </div>

            <div class="form-group">
                <label for="merk">Merk:</label>
                <input type="text" id="merk" name="merk" value="{{ old('merk', $produk->merk) }}" required>
            </div>

            <div class="form-group">
                <label for="stok">Stok:</label>
                <input type="number" id="stok" name="stok" value="{{ old('stok', $produk->stok) }}" required>
            </div>

            <div class="form-group">
                <label for="harga">Harga:</label>
                <input type="number" id="harga" name="harga" value="{{ old('harga', $produk->harga) }}" required>
            </div>

            <button type="submit" class="btn btn-success">Update</button>
            <a href="{{ route('produk.index') }}" class="btn btn-danger">Batal</a>
        </form>
    </div>
</body>

</html>
