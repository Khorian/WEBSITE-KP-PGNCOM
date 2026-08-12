<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/profil', function () {
    return view('profil');
})->name('profil');

Route::get('/layanan', function () {
    return view('layanan'); // Pastikan file layanan.blade.php sudah dibuat di resources/views/
})->name('layanan');

// Halaman Layanan
Route::get('/layanan', function () {
    return view('layanan'); // Pastikan file layanan.blade.php sudah dibuat di resources/views/
})->name('layanan');

// Halaman Berita dan Kegiatan
Route::get('/berita', function () {
    return view('berita'); // Pastikan file berita.blade.php sudah dibuat di resources/views/
})->name('berita');

// Halaman Kontak Kami
Route::get('/kontak', function () {
    return view('kontak'); // Pastikan file kontak.blade.php sudah dibuat di resources/views/
})->name('kontak');

Route::get('/login', function () {
    return view('auth.login'); // Atau sesuaikan dengan halaman login Anda
})->name('login');