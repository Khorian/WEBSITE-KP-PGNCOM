<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

// ==========================================
// 1. ROUTE PUBLIK / USER (Menggunakan ->name)
// ==========================================

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/profil', function () {
    return view('profil');
})->name('profil');

Route::get('/layanan', function () {
    return view('layanan'); // Memanggil resources/views/layanan.blade.php (User)
})->name('layanan');

Route::get('/berita', function () {
    return view('berita');
})->name('berita');

Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');


// ==========================================
// 2. ROUTE LOGIN ADMIN
// ==========================================

Route::get('/login', function () {
    return view('admin.login');
})->name('login');

Route::post('/login', function (Request $request) {
    // Sesuaikan proses autentikasi kamu di sini
    if ($request->email === 'admin@pgastelkom.co.id' && $request->password === 'password') {
        Session::put('admin_logged_in', true);
        Session::put('admin_email', $request->email);
        return redirect()->route('admin.dashboard');
    }
    return back()->with('error', 'Email atau password salah.');
})->name('login.process');


// ==========================================
// 3. ROUTE DASHBOARD & CMS ADMIN
// ==========================================

Route::get('/admin/dashboard', function () {
    if (!Session::get('admin_logged_in')) {
        return redirect()->route('login');
    }
    return view('admin.dashboard');
})->name('admin.dashboard');

Route::get('/admin/layanan', function () {
    return view('admin.layanan');
})->name('admin.layanan');

Route::get('/admin/layanan/tambah', function () {
    return view('admin.tambah-layanan');
})->name('admin.layanan.tambah');

Route::get('/admin/berita', function () {
    return view('admin.berita');
})->name('admin.berita');

Route::get('/admin/berita/tambah', function () {
    return view('admin.tambah-berita');
})->name('admin.berita.tambah');

Route::get('/admin/kontak', function () {
    return view('admin.kontak');
})->name('admin.kontak');

Route::get('/admin/pengguna', function () {
    return view('admin.pengguna');
})->name('admin.pengguna');

// ==========================================
// ROUTE LOGIN ADMIN (Flexibel / Mode Dev)
// ==========================================

Route::get('/login', function () {
    return view('admin.login');
})->name('login');

Route::post('/login', function (Request $request) {
    // Memperbolehkan login selama email & password diisi
    if (!empty($request->email) && !empty($request->password)) {
        Session::put('admin_logged_in', true);
        Session::put('admin_email', $request->email);

        return redirect()->route('admin.dashboard');
    }

    return back()->with('error', 'Silakan isi email dan kata sandi.');
})->name('login.process');

// Route Logout Admin
Route::post('/logout', function () {
    Session::forget('admin_logged_in');
    Session::forget('admin_email');
    Session::flush();

    return redirect()->route('login');
})->name('logout');

// Route Kelola Profil Perusahaan Admin
Route::get('/admin/profil', function () {
    return view('admin.profil');
})->name('admin.profil');