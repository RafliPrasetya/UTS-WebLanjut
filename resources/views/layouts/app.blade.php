<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel App')</title>
    <!-- Tambahkan link CSS atau script lainnya di sini jika diperlukan -->
</head>
<body>
    <div class="container">
        @yield('content')
    </div>

    <!-- Tambahkan script JavaScript atau tag lainnya di sini jika diperlukan -->
</body>
</html>
