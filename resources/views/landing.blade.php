<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jasa Ilustrasi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
        
        .row {
            display: flex;
            flex-wrap: wrap;
        }

        .box {
            background-color: #eeeeee; /* Warna latar belakang kotak */
            padding: 20px; /* Ruang dalam kotak */
            border-radius: 10px; /* Membuat sudut kotak menjadi melengkung */
            margin-bottom: 20px; /* Jarak antara kotak */
            flex-grow: 1; /* Menggunakan ruang yang tersedia dengan fleksibilitas yang sama */
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
            <h1 class="display-4 font-weight-bold">Selamat Datang di Layanan Jasa Ilustrasi Anime!</h1>
            <p class="lead">Apakah Anda ingin karakter anime khusus yang mencerminkan kepribadian Anda? Atau mungkin Anda ingin melihat karakter favorit Anda dalam gaya yang unik? Kami di sini siap membantu mewujudkan imajinasi Anda menjadi karya seni yang memukau!</p>
            <a class="btn btn-primary btn-lg" href="https://www.youtube.com/watch?v=xvFZjo5PgG0" role="button">Pesan Sekarang</a>
            <p style=""><em>21.11.3854 - 21.11.38 - 21.11.38</em></p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="box">
                    <h2>Komisi Karakter Anime</h2>
                    <p>Buat karakter anime sesuai keinginan Anda! Mulai dari karakter asli hingga fanart dari karakter favorit Anda.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box">
                    <h2>Fleksibilitas dalam Pemesanan</h2>
                    <p>Kami memahami setiap detail penting bagi Anda. Berikan referensi seperti pose, nama karakter, aksesoris, dan yang lainnya untuk memastikan hasil akhir sesuai dengan harapan Anda.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box">
                    <h2>Kualitas Profesional</h2>
                    <p>Dibuat oleh seniman berbakat dengan pengalaman dalam menciptakan karakter anime yang memikat.</p>
                </div>
            </div>
        </div>
    </div>
    

    

    @include('includes.footer')

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
