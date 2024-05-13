<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        // Di sini Anda bisa menyiapkan data yang dibutuhkan
        // Jika tidak ada data yang perlu disiapkan, cukup kembalikan tampilan

        // Contoh jika ingin mengirimkan data ke tampilan
        //$judul = 'Selamat Datang di Antar Makanan';
        //$deskripsi = 'Kami menyediakan layanan antar makanan terbaik untuk Anda. Pesan sekarang dan nikmati makanan favorit Anda di rumah!';
        //$kontak = 'Hubungi kami di 123-456-789';

        // Kembalikan tampilan dengan data yang sudah disiapkan
        return view('landing');
    }
}
