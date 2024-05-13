<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <!-- Navbar -->
    <nav class="bg-gray-800 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a class="text-white text-xl font-bold" href="#">
                <img src="{{ asset('image/logo.png') }}" alt="Logo" class="h-8 inline-block">
                NAMA JASA
            </a>
            <div class="space-x-4">
                <a class="text-gray-300 hover:text-white" href="#">Beranda</a>
                <a class="text-gray-300 hover:text-white" href="#">Menu</a>
                <a class="text-gray-300 hover:text-white" href="#">Tentang Kami</a>
                <a class="text-gray-300 hover:text-white" href="#">Kontak</a>
            </div>
        </div>
    </nav>
</body>
</html>