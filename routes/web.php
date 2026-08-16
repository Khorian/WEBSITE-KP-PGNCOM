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



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


// ==============================
// HALAMAN UTAMA
// ==============================

Route::get('/', function () {
    return view('home');
})->name('home');


// ==============================
// PROFIL
// ==============================

Route::get('/profil', function () {
    return view('profil');
})->name('profil');


// ==============================
// LAYANAN
// ==============================

Route::get('/layanan', function () {
    return view('layanan');
})->name('layanan');


// ==============================
// BERITA
// ==============================

Route::get('/berita', function () {
    return view('berita');
})->name('berita');


// ==============================
// KONTAK
// ==============================

Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');


// ==============================
// LOGIN ADMIN
// ==============================

Route::get('/login', function () {
    return view('admin.login');
})->name('login');


// PROSES LOGIN
Route::post('/login', function (Request $request) {

    if (
        $request->email === 'admin@pgascom.co.id' &&
        $request->password === 'admin123'
    ) {

        Session::put('admin_logged_in', true);
        Session::put('admin_email', $request->email);

        return redirect()->route('admin.dashboard');
    }

    return back()->with('error', 'Email atau password salah.');

})->name('login.process');


// ==============================
// DASHBOARD ADMIN
// ==============================

Route::get('/admin/dashboard', function () {

    if (!Session::get('admin_logged_in')) {
        return redirect()->route('login');
    }

    return view('admin.dashboard');

})->name('admin.dashboard');


// ==============================
// LOGOUT
// ==============================

Route::post('/logout', function () {

    Session::forget('admin_logged_in');
    Session::forget('admin_email');

    return redirect()->route('login');

})->name('logout');

// ==============================
// KELOLA LAYANAN ADMIN
// ==============================

Route::get('/admin/layanan', function () {

    if (!Session::get('admin_logged_in')) {
        return redirect()->route('login');
    }

    return view('admin.layanan');

})->name('admin.layanan');