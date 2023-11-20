<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
</head>
<body>
    <h1>Selamat datang di Toko Bunga Kami</h1>
    
    <h2>Produk Terbaru</h2>
    <div class="product-list">
        @foreach ($products as $product)
            <div class="product">
                @if ($product->image)
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" width="150">
                @else
                    <img src="{{ asset('images/default-product-image.jpg') }}" alt="Gambar Default" width="150">
                @endif
                <h3>{{ $product->nama }}</h3>
                <p>{{ $product->deskripsi }}</p>
                <p>Harga: ${{ $product->harga }}</p>
                <p>Jumlah (Stok): {{ $product->jumlah }}</p>
                <form action="{{ route('order') }}" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <label for="quantity">Jumlah Pesanan:</label>
                    <input type="number" name="quantity" id="quantity" min="1" value="1">
                    <button type="submit">Pesan Sekarang</button>
                </form>
            </div>
        @endforeach
    </div>
</body>
</html>
