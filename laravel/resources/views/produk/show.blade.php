<div class="container mt-4">
    <h2>Detail Produk</h2>

    <div class="card p-3 mt-3">
        <p><strong>Nama Produk:</strong> {{ $produk->nama }}</p>
        <p><strong>Merk:</strong> {{ $produk->merk }}</p>
        <p><strong>Stok:</strong> {{ $produk->stok }}</p>
        <p><strong>Harga:</strong> Rp {{ number_format($produk->harga, 0, ',', '.') }}</p>
    </div>

    <a href="{{ route('produk.index') }}" class="btn btn-secondary mt-3">Kembali</a>
    <a href="{{ route('produk.edit', $produk->id) }}" class="btn btn-warning mt-3">Edit</a>
</div>
