<!DOCTYPE html>
<html>
<head>
    <title>Tambah Produk</title>
</head>
<body>
    <h2>Tambah Produk</h2>


    <!-- Tombol Kembali -->
    <p>
        <a href="/">Kembali</a>
    </p>


    <!-- Form Tambah Data -->
    <form action="/produk/store" method="post">
        {{ csrf_field() }}
        <table>
            <tr>
                <td><label for="nama">Nama</label></td>
                <td><input type="text" id="nama" name="nama" required="required"></td>
            </tr>
            <tr>
                <td><label for="merk">Merk</label></td>
                <td><input type="text" id="merk" name="merk" required="required"></td>
            </tr>
            <tr>
                <td><label for="stok">Stok</label></td>
                <td><input type="number" id="stok" name="stok" required="required"></td>
            </tr>
             <tr>
                <td><label for="harga">Harga</label></td>
                <td><input type="number" id="harga" name="harga" required="required"></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: right;">
                    <input type="submit" value="Simpan Data">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>