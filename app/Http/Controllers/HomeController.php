<?php

namespace App\Http\Controllers;

use App\Models\ProfilPerusahaan;
use App\Models\Layanan;
use App\Models\Berita;

class HomeController extends Controller
{
    public function index()
    {
        // 1. Data Profil (Visi & Misi Dinamis)
        $profil = ProfilPerusahaan::first() ?? new ProfilPerusahaan([
            'visi' => 'Menjadi perusahaan solusi ICT terdepan dan terpercaya yang mendukung pertumbuhan ekonomi digital di Indonesia khususnya tahun 2030.',
            'misi' => [
                'Menyediakan infrastruktur telekomunikasi berkualitas tinggi yang menjangkau seluruh wilayah Lampung.',
                'Meningkatkan adopsi ICT korporasi guna mendukung transformasi digital berteknologi tinggi.',
                'Mengembangkan SDM yang kompeten, profesional, dan berorientasi pada kepuasan pelanggan.',
                'Memperkuat komitmen strategis yang saling menguntungkan dengan seluruh pemangku kepentingan.',
                'Mendukung tata kelola perusahaan yang baik dan mewujudkan program GCG yang berkelanjutan.'
            ]
        ]);

        // 2. Data Layanan (Hanya Ambil Layanan Berstatus 'Aktif')
        $layanans = Layanan::where('status', 'Aktif')->latest()->get();

        // 3. Data Berita Terbaru (Ambil 3 Berita Berstatus 'Publikasi')
        $beritas = Berita::where('status', 'Publikasi')->latest()->take(3)->get();

        // Memanggil view home.blade.php
        return view('home', compact('profil', 'layanans', 'beritas'));
    }
}