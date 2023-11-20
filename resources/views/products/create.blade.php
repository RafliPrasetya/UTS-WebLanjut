<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Produk Baru</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }

        h1 {
            background-color: #01af07;
            color: #fff;
            text-align: center;
            padding: 20px;
            margin: 0;
        }

        .container {
            max-width: 500px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 5px;
            box-sizing: border-box;
        }

        input[type="file"] {
            margin-top: 10px;
        }

        input[type="submit"] {
            background-color: #01af07;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        textarea {
            resize: vertical;
        }
    </style>
</head>
<body>
    <h1>Buat Produk Baru</h1>
    <div class="container">
        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="image">Gambar Produk:</label>
                <input type="file" name="image" accept="image/*" required>
            </div>
            <div class="form-group">
                <label for="nama">Nama Produk:</label>
                <input type="text" name="nama" required>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi Produk:</label>
                <textarea name="deskripsi" required></textarea>
            </div>
            <div class="form-group">
                <label for="harga">Harga Produk:</label>
                <input type="number" name="harga" required>
            </div>
            <div class="form-group">
                <label for="jumlah">Jumlah (Stok) Produk:</label>
                <input type="number" name="jumlah" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Simpan Produk">
            </div>
        </form>
    </div>
</body>
</html>
