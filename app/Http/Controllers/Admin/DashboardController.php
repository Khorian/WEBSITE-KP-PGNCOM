<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\Layanan;
use App\Models\Kontak;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        // 1. Data Ringkasan Counter Real-time
        $totalBerita = Berita::count();
        $totalLayanan = Layanan::where('status', 'Aktif')->count();
        $totalPesan = Kontak::count();
        $pesanBaru = Kontak::where('status', 'Belum Dibaca')->count();
        $totalPengguna = User::count();

        // 2. Ambil 5 Berita/Aktivitas Terbaru untuk Tabel "Riwayat Pengeditan Info"
        $latestBerita = Berita::latest()->take(5)->get();

        return view('admin.dashboard', compact(
            'totalBerita',
            'totalLayanan',
            'totalPesan',
            'pesanBaru',
            'totalPengguna',
            'latestBerita'
        ));
    }
}