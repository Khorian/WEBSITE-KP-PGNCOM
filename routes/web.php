<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\LayananController;
use App\Http\Controllers\Admin\KontakController;
use App\Http\Controllers\Admin\PenggunaController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProfilController;

// ==========================================
// 1. ROUTE HALAMAN PUBLIK / USER
// ==========================================
Route::get('/', function () { return view('home'); })->name('home');
Route::get('/profil', [ProfilController::class, 'publicIndex'])->name('profil');
Route::get('/layanan', function () {
    $layanans = \App\Models\Layanan::where('status', 'Aktif')->latest()->get();
    return view('layanan', compact('layanans'));
})->name('layanan');

Route::get('/berita', function () {
    $beritas = \App\Models\Berita::where('status', 'Publikasi')->latest()->get();
    return view('berita', compact('beritas'));
})->name('berita');

// Route Kontak User & Kirim Pesan
Route::get('/kontak', function () { return view('kontak'); })->name('kontak');
Route::post('/kontak/kirim', [KontakController::class, 'storePublic'])->name('kontak.kirim');


// ==========================================
// 2. ROUTE AUTENTIKASI ADMIN
// ==========================================
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.process');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// ==========================================
// 3. ROUTE ADMIN (DIPROTEKSI AUTH)
// ==========================================
Route::middleware(['auth'])->prefix('admin')->group(function () {
    // Dashboard & Statis
   Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/profil', function () { return view('admin.profil'); })->name('admin.profil');
    Route::get('/pengguna', function () { return view('admin.pengguna'); })->name('admin.pengguna');

    Route::get('/profil', [ProfilController::class, 'adminIndex'])->name('admin.profil');
    Route::post('/profil/simpan', [ProfilController::class, 'update'])->name('admin.profil.simpan');

    // Route Layanan
    Route::get('/layanan', [LayananController::class, 'index'])->name('admin.layanan');
    Route::get('/layanan/tambah', [LayananController::class, 'create'])->name('admin.layanan.tambah');
    Route::post('/layanan/simpan', [LayananController::class, 'store'])->name('admin.layanan.simpan');
    Route::delete('/layanan/hapus/{id}', [LayananController::class, 'destroy'])->name('admin.layanan.hapus');
    Route::post('/layanan/batch-action', [LayananController::class, 'batchAction'])->name('admin.layanan.batch');

    // Route Berita
    Route::get('/berita', [BeritaController::class, 'index'])->name('admin.berita');
    Route::get('/berita/tambah', [BeritaController::class, 'create'])->name('admin.berita.tambah');
    Route::post('/berita/simpan', [BeritaController::class, 'store'])->name('admin.berita.simpan');
    Route::delete('/berita/hapus/{id}', [BeritaController::class, 'destroy'])->name('admin.berita.hapus');
    Route::post('/berita/batch-action', [BeritaController::class, 'batchAction'])->name('admin.berita.batch');

    // Route Pesan Masuk / Kontak Admin
    Route::get('/kontak', [KontakController::class, 'index'])->name('admin.kontak');
    Route::post('/kontak/baca/{id}', [KontakController::class, 'markAsRead'])->name('admin.kontak.baca');
    Route::delete('/kontak/hapus/{id}', [KontakController::class, 'destroy'])->name('admin.kontak.hapus');
    Route::post('/kontak/batch-action', [KontakController::class, 'batchAction'])->name('admin.kontak.batch');

    // Route Kelola Pengguna
    Route::get('/pengguna', [PenggunaController::class, 'index'])->name('admin.pengguna');
    Route::post('/pengguna/simpan', [PenggunaController::class, 'store'])->name('admin.pengguna.simpan');
    Route::delete('/pengguna/hapus/{id}', [PenggunaController::class, 'destroy'])->name('admin.pengguna.hapus');
});