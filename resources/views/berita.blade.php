<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita dan Kegiatan - PGASCOM Regional Office Lampung</title>
    
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/logo-logo-pgascom.png') }}" type="image/png">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800 font-sans">

    <!-- Include Navbar -->
    @include('components.navbar')

    <!-- HERO BANNER BERITA & KEGIATAN -->
    <section class="bg-gradient-to-r from-[#0b1c3d] via-blue-700 to-blue-600 text-white py-16 px-6 md:px-12 relative overflow-hidden">
        <div class="max-w-7xl mx-auto space-y-3">
            <!-- Breadcrumb -->
            <div class="flex items-center space-x-2 text-xs md:text-sm text-gray-300">
                <a href="{{ route('home') }}" class="hover:text-white transition-colors">Beranda</a>
                <span>&gt;</span>
                <span class="text-cyan-400 font-semibold">Berita dan Kegiatan</span>
            </div>

            <!-- Judul & Subjudul -->
            <h1 class="text-3xl md:text-5xl font-bold tracking-tight">Berita &amp; Kegiatan</h1>
            <p class="text-xs md:text-sm text-gray-200 max-w-2xl leading-relaxed">
                Informasi terkini seputar kegiatan dan pencapaian PT PGAS Telekomunikasi Nusantara Regional Lampung.
            </p>
        </div>
    </section>

    <!-- KONTEN UTAMA: PENCARIAN, KATEGORI & GRID BERITA -->
    <section class="py-12 px-6 md:px-12 max-w-7xl mx-auto">
        
        <!-- Bar Pencarian & Filter Kategori -->
        <div class="space-y-6 mb-12">
            <!-- Input Pencarian -->
            <div class="relative max-w-2xl mx-auto">
                <span class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none text-gray-400">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                </span>
                <input type="text" placeholder="Cari berita..." class="w-full pl-11 pr-4 py-3 bg-gray-100 border border-gray-200 rounded-full text-xs md:text-sm focus:outline-none focus:bg-white focus:border-blue-600 transition-colors shadow-inner">
            </div>

            <!-- Tombol Kategori Filter -->
            <div class="flex flex-wrap items-center justify-center gap-3">
                <button class="px-5 py-2 bg-blue-600 text-white text-xs md:text-sm font-semibold rounded-full shadow-sm transition-colors">Semua</button>
                <button class="px-5 py-2 bg-gray-200/80 hover:bg-gray-300 text-gray-700 text-xs md:text-sm font-medium rounded-full transition-colors">Infrastruktur</button>
                <button class="px-5 py-2 bg-gray-200/80 hover:bg-gray-300 text-gray-700 text-xs md:text-sm font-medium rounded-full transition-colors">Kegiatan</button>
                <button class="px-5 py-2 bg-gray-200/80 hover:bg-gray-300 text-gray-700 text-xs md:text-sm font-medium rounded-full transition-colors">Produk</button>
                <button class="px-5 py-2 bg-gray-200/80 hover:bg-gray-300 text-gray-700 text-xs md:text-sm font-medium rounded-full transition-colors">Sertifikasi</button>
                <button class="px-5 py-2 bg-gray-200/80 hover:bg-gray-300 text-gray-700 text-xs md:text-sm font-medium rounded-full transition-colors">Penghargaan</button>
            </div>
        </div>

        <!-- Grid Kartu Berita -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            
            <!-- Berita 1 -->
            <div class="bg-white rounded-3xl overflow-hidden border border-gray-100 shadow-sm flex flex-col justify-between transition-transform hover:-translate-y-1">
                <div>
                    <img src="{{ asset('images/news-1.png') }}" alt="Berita 1" class="w-full h-48 object-cover">
                    <div class="p-6 space-y-3">
                        <span class="inline-block text-[10px] font-bold px-3 py-1 bg-blue-50 text-blue-600 rounded-md uppercase tracking-wider">Infrastruktur</span>
                        <h3 class="font-bold text-gray-900 text-base leading-snug">
                            PGAS Telkom Lampung Berhasil Tingkatkan Kapasitas Jaringan Fiber Optik
                        </h3>
                        <p class="text-gray-600 text-xs leading-relaxed">
                            Regional Office Lampung berhasil menyelesaikan proyek peningkatan kapasitas jaringan...
                        </p>
                    </div>
                </div>
                <div class="p-6 pt-0 flex items-center justify-between text-xs">
                    <a href="#" class="inline-flex items-center text-blue-600 font-semibold hover:text-blue-700">
                        Lihat selengkapnya 
                        <svg class="w-3.5 h-3.5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </a>
                    <span class="text-gray-400 text-[11px]">24 Juli 2026</span>
                </div>
            </div>

            <!-- Berita 2 -->
            <div class="bg-white rounded-3xl overflow-hidden border border-gray-100 shadow-sm flex flex-col justify-between transition-transform hover:-translate-y-1">
                <div>
                    <img src="{{ asset('images/news-2.png') }}" alt="Berita 2" class="w-full h-48 object-cover">
                    <div class="p-6 space-y-3">
                        <span class="inline-block text-[10px] font-bold px-3 py-1 bg-blue-50 text-blue-600 rounded-md uppercase tracking-wider">Kegiatan</span>
                        <h3 class="font-bold text-gray-900 text-base leading-snug">
                            Workshop Keamanan Siber untuk Mitra Bisnis Regional Lampung
                        </h3>
                        <p class="text-gray-600 text-xs leading-relaxed">
                            PT PGAS Telekomunikasi Nusantara Regional Lampung menggelar workshop keamanan siber yang diikuti oleh lebih dari...
                        </p>
                    </div>
                </div>
                <div class="p-6 pt-0 flex items-center justify-between text-xs">
                    <a href="#" class="inline-flex items-center text-blue-600 font-semibold hover:text-blue-700">
                        Lihat selengkapnya 
                        <svg class="w-3.5 h-3.5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </a>
                    <span class="text-gray-400 text-[11px]">18 Juli 2026</span>
                </div>
            </div>

            <!-- Berita 3 -->
            <div class="bg-white rounded-3xl overflow-hidden border border-gray-100 shadow-sm flex flex-col justify-between transition-transform hover:-translate-y-1">
                <div>
                    <img src="{{ asset('images/news-3.png') }}" alt="Berita 3" class="w-full h-48 object-cover">
                    <div class="p-6 space-y-3">
                        <span class="inline-block text-[10px] font-bold px-3 py-1 bg-blue-50 text-blue-600 rounded-md uppercase tracking-wider">Produk</span>
                        <h3 class="font-bold text-gray-900 text-base leading-snug">
                            Peluncuran Layanan Internet Corporate Generasi Terbaru di Lampung
                        </h3>
                        <p class="text-gray-600 text-xs leading-relaxed">
                            Merespons kebutuhan konektivitas yang terus berkembang, PGAS Telkom resmi meluncurkan layanan Internet Corporate...
                        </p>
                    </div>
                </div>
                <div class="p-6 pt-0 flex items-center justify-between text-xs">
                    <a href="#" class="inline-flex items-center text-blue-600 font-semibold hover:text-blue-700">
                        Lihat selengkapnya 
                        <svg class="w-3.5 h-3.5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </a>
                    <span class="text-gray-400 text-[11px]">10 Juli 2026</span>
                </div>
            </div>

            <!-- Berita 4 -->
            <div class="bg-white rounded-3xl overflow-hidden border border-gray-100 shadow-sm flex flex-col justify-between transition-transform hover:-translate-y-1">
                <div>
                    <img src="{{ asset('images/news-1.png') }}" alt="Berita 4" class="w-full h-48 object-cover">
                    <div class="p-6 space-y-3">
                        <span class="inline-block text-[10px] font-bold px-3 py-1 bg-blue-50 text-blue-600 rounded-md uppercase tracking-wider">Sertifikasi</span>
                        <h3 class="font-bold text-gray-900 text-base leading-snug">
                            Sertifikasi ISO 27001 untuk Keamanan Sistem Informasi
                        </h3>
                        <p class="text-gray-600 text-xs leading-relaxed">
                            Regional Lampung berhasil mendapatkan sertifikasi ISO 27001:2022 sebagai bukti komitmen dalam menjaga keamanan sistem informasi dan data pelanggan.
                        </p>
                    </div>
                </div>
                <div class="p-6 pt-0 flex items-center justify-between text-xs">
                    <a href="#" class="inline-flex items-center text-blue-600 font-semibold hover:text-blue-700">
                        Lihat selengkapnya 
                        <svg class="w-3.5 h-3.5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </a>
                    <span class="text-gray-400 text-[11px]">05 Juli 2026</span>
                </div>
            </div>

            <!-- Berita 5 -->
            <div class="bg-white rounded-3xl overflow-hidden border border-gray-100 shadow-sm flex flex-col justify-between transition-transform hover:-translate-y-1">
                <div>
                    <img src="{{ asset('images/news-2.png') }}" alt="Berita 5" class="w-full h-48 object-cover">
                    <div class="p-6 space-y-3">
                        <span class="inline-block text-[10px] font-bold px-3 py-1 bg-blue-50 text-blue-600 rounded-md uppercase tracking-wider">Penghargaan</span>
                        <h3 class="font-bold text-gray-900 text-base leading-snug">
                            Penghargaan Pelayanan Terbaik dari Asosiasi Telekomunikasi Indonesia
                        </h3>
                        <p class="text-gray-600 text-xs leading-relaxed">
                            Regional Office Lampung berhasil menyelesaikan proyek peningkatan kapasitas jaringan...
                        </p>
                    </div>
                </div>
                <div class="p-6 pt-0 flex items-center justify-between text-xs">
                    <a href="#" class="inline-flex items-center text-blue-600 font-semibold hover:text-blue-700">
                        Lihat selengkapnya 
                        <svg class="w-3.5 h-3.5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </a>
                    <span class="text-gray-400 text-[11px]">20 Juni 2026</span>
                </div>
            </div>

        </div>
    </section>

    <!-- Include Footer -->
    @include('components.footer')

</body>
</html>