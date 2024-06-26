<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AniArt</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .hero-section {
            background-image: url('{{ asset('image/background-hero.jpeg') }}');
            background-size: cover;
            background-position: center;
            position: relative;
        }

        .background-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }
    </style>
</head>
<body>
    <!-- resources/views/welcome.blade.php -->
    @include('includes.header')

    <!-- Jumbotron / Hero Section -->   
    <div class="jumbotron jumbotron-fluid hero-section">
        <div class="background-overlay"></div>
        <div class="container text-white text-center" style="position: relative; z-index: 1;"   >
            <h1 class="text-4xl font-bold">Selamat Datang di Layanan Jasa Ilustrasi Anime!</h1>
            <p class="text-lg">Apakah Anda ingin karakter anime khusus yang mencerminkan kepribadian Anda? Atau mungkin Anda ingin melihat karakter favorit Anda dalam gaya yang unik? Kami di sini siap membantu mewujudkan imajinasi Anda menjadi karya seni yang memukau!</p>
            <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full inline-block mt-4" href="https://www.youtube.com/watch?v=xvFZjo5PgG0" role="button">Pesan Sekarang</a>
            <p style=""><em>21.11.3854 - 21.11.3885 - 21.11.3853</em></p>
        </div>
    </div>

    <h1 class="text-center text-3xl font-bold">Keuntungan memilih jasa kami</h1>

    <section class="container p-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-center">
            <div class="rounded-3xl p-3 bg-gray-200">
                <h2 class="text-xl font-bold">Komisi Karakter Anime</h2>
                <p>Buat karakter anime sesuai keinginan Anda! Mulai dari karakter asli hingga fanart dari karakter favorit Anda.</p>
            </div>
            <div class="rounded-3xl p-3 bg-gray-200">
                <h2 class="text-xl font-bold">Fleksibilitas dalam Pemesanan</h2>
                <p>Kami memahami setiap detail penting bagi Anda. Berikan referensi seperti pose, nama karakter, aksesoris, dan yang lainnya untuk memastikan hasil akhir sesuai dengan harapan Anda.</p>
            </div>
            <div class="rounded-3xl p-3 bg-gray-200">
                <h2 class="text-xl font-bold">Kualitas Profesional</h2>
                <p>Dibuat oleh seniman berbakat dengan pengalaman dalam menciptakan karakter anime yang memikat.</p>
            </div>
        </div>
    </section> 

    @include('includes.footer')
</body>
</html>
