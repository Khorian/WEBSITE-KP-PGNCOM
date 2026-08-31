<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\LayananController;
use App\Http\Controllers\Admin\KontakController;
use App\Http\Controllers\Admin\PenggunaController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProfilController;

// ==========================================
// 1. ROUTE HALAMAN PUBLIK / USER
// ==========================================
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/profil', [ProfilController::class, 'publicIndex'])->name('profil');

Route::get('/layanan', function () {
    $layanans = \App\Models\Layanan::where('status', 'Aktif')->latest()->get();
    return view('layanan', compact('layanans'));
})->name('layanan');

Route::get('/berita', function () {
    $beritas = \App\Models\Berita::where('status', 'Publikasi')->latest()->get();
    return view('berita', compact('beritas'));
})->name('berita');

Route::get('/kontak', [KontakController::class, 'publicIndex'])->name('kontak');
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
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Profil Perusahaan
    Route::get('/profil', [ProfilController::class, 'adminIndex'])->name('profil');
    Route::post('/profil/simpan', [ProfilController::class, 'update'])->name('profil.simpan');

    // Kelola Layanan
    Route::get('/layanan', [LayananController::class, 'index'])->name('layanan');
    Route::get('/layanan/tambah', [LayananController::class, 'create'])->name('layanan.tambah');
    Route::post('/layanan/simpan', [LayananController::class, 'store'])->name('layanan.simpan');
    Route::delete('/layanan/hapus/{id}', [LayananController::class, 'destroy'])->name('layanan.hapus');
    Route::post('/layanan/batch-action', [LayananController::class, 'batchAction'])->name('layanan.batch');

    // Kelola Berita
    Route::get('/berita', [BeritaController::class, 'index'])->name('berita');
    Route::get('/berita/tambah', [BeritaController::class, 'create'])->name('berita.tambah');
    Route::post('/berita/simpan', [BeritaController::class, 'store'])->name('berita.simpan');
    Route::delete('/berita/hapus/{id}', [BeritaController::class, 'destroy'])->name('berita.hapus');
    Route::post('/berita/batch-action', [BeritaController::class, 'batchAction'])->name('berita.batch');

    // Kelola Kontak
    Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');
    Route::post('/kontak/info-update', [KontakController::class, 'updateInfo'])->name('kontak.info_update');
    Route::post('/kontak/baca/{id}', [KontakController::class, 'markAsRead'])->name('kontak.baca');
    Route::delete('/kontak/hapus/{id}', [KontakController::class, 'destroy'])->name('kontak.hapus');
    Route::post('/kontak/batch-action', [KontakController::class, 'batchAction'])->name('kontak.batch');

    // Kelola Pengguna
    Route::get('/pengguna', [PenggunaController::class, 'index'])->name('pengguna');
    Route::post('/pengguna/simpan', [PenggunaController::class, 'store'])->name('pengguna.simpan');
    Route::delete('/pengguna/hapus/{id}', [PenggunaController::class, 'destroy'])->name('pengguna.hapus');
});