<!DOCTYPE html>
<html>
<head>
    <title>Pesan Produk Bunga</title>
</head>
<body>
    <h1>Pesan Produk Bunga</h1>
    <form action="{{ route('order.submit') }}" method="POST">
        @csrf
        <label for="product">Pilih Produk:</label>
        <select name="product" id="product">
            @foreach ($products as $product)
                <option value="{{ $product->id }}">{{ $product->nama }}</option>
            @endforeach
        </select>
        <br>
        <label for="quantity">Jumlah:</label>
        <input type="number" name="quantity" id="quantity" min="1" value="1">
        <br>
        <label for="name">Nama Pemesan:</label>
        <input type="text" name="name" id="name">
        <br>
        <label for="email">Email Pemesan:</label>
        <input type="email" name="email" id="email">
        <br>
        <button type="submit">Pesan Sekarang</button>
    </form>
</body>
</html>
