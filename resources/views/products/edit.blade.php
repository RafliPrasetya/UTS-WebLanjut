<!DOCTYPE html>
<html>
<head>
    <title>Edit Produk</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        h1 {
            background-color: #007BFF;
            color: #fff;
            text-align: center;
            padding: 10px;
        }
        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
        }
        .form-group {
            margin-bottom: 10px;
        }
        label {
            display: block;
            font-weight: bold;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
        }
        input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Edit Produk</h1>
    <div class="container">
        <form action="{{ route('products.update', $product) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="image">Gambar Produk:</label>
                <input type="file" name="image" accept="image/*">
            </div>
            <div class="form-group">
                <label for="nama">Nama Produk:</label>
                <input type="text" name="nama" value="{{ $product->nama }}" required>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi Produk:</label>
                <textarea name="deskripsi" required>{{ $product->deskripsi }}</textarea>
            </div>
            <div class="form-group">
                <label for="harga">Harga Produk:</label>
                <input type="number" name="harga" value="{{ $product->harga }}" required>
            </div>
            <div class="form-group">
                <label for="jumlah">Jumlah (Stok) Produk:</label>
                <input type="number" name="jumlah" value="{{ $product->jumlah }}" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Simpan Perubahan">
            </div>
        </form>
    </div>
</body>
</html>
