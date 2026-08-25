<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita dan Kegiatan - PGASCOM Regional Office Lampung</title>
    
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/png">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Alpine.js CDN untuk Interaktivitas Filter & Modal -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gray-50 text-gray-800 font-sans" x-data="{ 
    selectedCategory: 'semua', 
    searchQuery: '',
    isOpen: false,
    currentNews: { title: '', date: '', category: '', content: '', image: '' }
}">

    <!-- Include Navbar -->
    @include('components.navbar')

    <!-- HERO BANNER BERITA & KEGIATAN -->
    <section class="bg-blue-600 text-white py-16 px-6 md:px-12 relative overflow-hidden">
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
                <input type="text" x-model="searchQuery" placeholder="Cari berita..." class="w-full pl-11 pr-4 py-3 bg-gray-100 border border-gray-200 rounded-full text-xs md:text-sm focus:outline-none focus:bg-white focus:border-blue-600 transition-colors shadow-inner">
            </div>

            <!-- Tombol Kategori Filter -->
            <div class="flex flex-wrap items-center justify-center gap-3">
                <button @click="selectedCategory = 'semua'" :class="selectedCategory === 'semua' ? 'bg-blue-600 text-white font-semibold' : 'bg-gray-200/80 hover:bg-gray-300 text-gray-700 font-medium'" class="px-5 py-2 text-xs md:text-sm rounded-full shadow-sm transition-colors">Semua</button>
                <button @click="selectedCategory = 'infrastruktur'" :class="selectedCategory === 'infrastruktur' ? 'bg-blue-600 text-white font-semibold' : 'bg-gray-200/80 hover:bg-gray-300 text-gray-700 font-medium'" class="px-5 py-2 text-xs md:text-sm rounded-full shadow-sm transition-colors">Infrastruktur</button>
                <button @click="selectedCategory = 'kegiatan'" :class="selectedCategory === 'kegiatan' ? 'bg-blue-600 text-white font-semibold' : 'bg-gray-200/80 hover:bg-gray-300 text-gray-700 font-medium'" class="px-5 py-2 text-xs md:text-sm rounded-full shadow-sm transition-colors">Kegiatan</button>
                <button @click="selectedCategory = 'produk'" :class="selectedCategory === 'produk' ? 'bg-blue-600 text-white font-semibold' : 'bg-gray-200/80 hover:bg-gray-300 text-gray-700 font-medium'" class="px-5 py-2 text-xs md:text-sm rounded-full shadow-sm transition-colors">Produk</button>
                <button @click="selectedCategory = 'sertifikasi'" :class="selectedCategory === 'sertifikasi' ? 'bg-blue-600 text-white font-semibold' : 'bg-gray-200/80 hover:bg-gray-300 text-gray-700 font-medium'" class="px-5 py-2 text-xs md:text-sm rounded-full shadow-sm transition-colors">Sertifikasi</button>
                <button @click="selectedCategory = 'penghargaan'" :class="selectedCategory === 'penghargaan' ? 'bg-blue-600 text-white font-semibold' : 'bg-gray-200/80 hover:bg-gray-300 text-gray-700 font-medium'" class="px-5 py-2 text-xs md:text-sm rounded-full shadow-sm transition-colors">Penghargaan</button>
            </div>
        </div>

        <!-- Grid Kartu Berita -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            
            <!-- Berita 1 -->
            <div x-show="(selectedCategory === 'semua' || selectedCategory === 'kegiatan') && ('Konsistensi PGNCOM dalam implementasi HSSE dengan Kegiatan Manajement Walk Through di Lampung'.toLowerCase().includes(searchQuery.toLowerCase()))" 
                 class="bg-white rounded-3xl overflow-hidden border border-gray-100 shadow-sm flex flex-col justify-between transition-transform hover:-translate-y-1">
                <div>
                    <img src="{{ asset('images/news-1.png') }}" alt="Berita 1" class="w-full h-48 object-cover">
                    <div class="p-6 space-y-3">
                        <span class="inline-block text-[10px] font-bold px-3 py-1 bg-blue-50 text-blue-600 rounded-md uppercase tracking-wider">Kegiatan</span>
                        <h3 class="font-bold text-gray-900 text-base leading-snug">
                            Konsistensi PGNCOM dalam implementasi HSSE dengan Kegiatan Manajement Walk Through di Lampung
                        </h3>   
                        <p class="text-gray-600 text-xs leading-relaxed">
                            Kegiatan MWT ini melibatkan Direktur SDM dan Penunjang Bisnis PGN, yang melakukan kunjungan ke lokasi kantor regional office PGNCOM yang berada di Lampung.                       </p>
                    </div>
                </div>
                <div class="p-6 pt-0 flex items-center justify-between text-xs">
                    <button @click="isOpen = true; currentNews = {
                        title: 'Konsistensi PGNCOM dalam implementasi HSSE dengan Kegiatan Manajement Walk Through di Lampung',
                        date: '7-9 Maret 2023',
                        category: 'kegiatan',
                        image: '{{ asset("images/news-1.png") }}',
                        content: 'Pada tanggal 7-9 Maret 2023, PGN sebagai holding dari PGNCOM melaksanakan kegiatan Management Walk Through (MWT) di Lampung dalam rangka Bulan K3 tahun 2023. Kegiatan MWT ini melibatkan Direktur SDM dan Penunjang Bisnis PGN, yang melakukan kunjungan ke lokasi kantor regional office PGNCOM yang berada di Lampung. Dalam pelaksanaannya, kegiatan MWT ini dilakukan dengan mengunjungi asset perusahaan baik jaringan maupun non jaringan sebagai bentuk komitmen manajemen dalam menjaga implementasi HSSE di seluruh area perusahaan. Hal ini menunjukkan bahwa PGN sebagai perusahaan yang memiliki kesadaran tinggi dalam menjaga keselamatan dan kesehatan kerja bagi seluruh karyawan serta pelanggan yang dilayani oleh perusahaan.'
                    }" class="inline-flex items-center text-blue-600 font-semibold hover:text-blue-700 focus:outline-none">
                        Lihat selengkapnya 
                        <svg class="w-3.5 h-3.5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </button>
                    <span class="text-gray-400 text-[11px]">7-9 Maret 2023</span>
                </div>
            </div>

            <!-- Berita 2 -->
            <div x-show="(selectedCategory === 'semua' || selectedCategory === 'produk') && ('Layanan GASPlay Siap Penuhi Kebutuhan Masyarakat'.toLowerCase().includes(searchQuery.toLowerCase()))" 
                 class="bg-white rounded-3xl overflow-hidden border border-gray-100 shadow-sm flex flex-col justify-between transition-transform hover:-translate-y-1">
                <div>
                    <img src="{{ asset('images/news-2.png') }}" alt="Berita 2" class="w-full h-48 object-cover">
                    <div class="p-6 space-y-3">
                        <span class="inline-block text-[10px] font-bold px-3 py-1 bg-blue-50 text-blue-600 rounded-md uppercase tracking-wider">Produk</span>
                        <h3 class="font-bold text-gray-900 text-base leading-snug">
                            Layanan GASPlay Siap Penuhi Kebutuhan Masyarakat
                        </h3>
                        <p class="text-gray-600 text-xs leading-relaxed">
                            PT PGAS Telekomunikasi Nusantara Regional Lampung menggelar workshop keamanan siber yang diikuti oleh lebih dari...
                        </p>
                    </div>
                </div>
                <div class="p-6 pt-0 flex items-center justify-between text-xs">
                    <button @click="isOpen = true; currentNews = {
                        title: 'Layanan GASPlay Siap Penuhi Kebutuhan Masyarakat',
                        date: '18 Juli 2026',
                        category: 'produk',
                        image: '{{ asset("images/news-2.png") }}',
                        content: 'Setelah peluncuran pertama Gasplay dibulan Maret 2019, kali ini PT Telemedia Dinamika Sarana atau yg lebih dikenal dengan Gasnet melakukan kegiatan Sosialisasi Produk Gasplay. Kali ini kegiatan dilakukan di area Lampung tepatnya di kantor kelurahan Perumnas Way Halim Kota Bandar Lampung dan dipilih sebagai lokasi pertama untuk peluncuran Produk GasPlay di Lampung. Turut hadir dalam acara ini adalah Camat, Lurah, seluruh RT dan kepala lingkungan Perumnas Way Halim, Sales Area Head PGN Lampung, Kepala RO PGNCom Lampung dan Manager PGN Solution area Lampung. Kegiatan ini dilakukan dalam rangka pengenalan dan untuk mengajak masyarakat Bandar Lampung yang merupakan pelanggan gas bumi, agar nantinya dapat menggunakan layanan Gasplay.'
                    }" class="inline-flex items-center text-blue-600 font-semibold hover:text-blue-700 focus:outline-none">
                        Lihat selengkapnya 
                        <svg class="w-3.5 h-3.5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </button>
                    <span class="text-gray-400 text-[11px]">11 Desember 2019</span>
                </div>
            </div>

            <!-- Berita 3 -->
            <div x-show="(selectedCategory === 'semua' || selectedCategory === 'produk') && ('Peluncuran Layanan Internet Corporate Generasi Terbaru di Lampung'.toLowerCase().includes(searchQuery.toLowerCase()))" 
                 class="bg-white rounded-3xl overflow-hidden border border-gray-100 shadow-sm flex flex-col justify-between transition-transform hover:-translate-y-1">
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
                    <button @click="isOpen = true; currentNews = {
                        title: 'Peluncuran Layanan Internet Corporate Generasi Terbaru di Lampung',
                        date: '10 Juli 2026',
                        category: 'Produk',
                        image: '{{ asset("images/news-3.png") }}',
                        content: 'Merespons kebutuhan konektivitas yang terus berkembang pesat di sektor bisnis, PGAS Telkom resmi meluncurkan layanan Internet Corporate generasi terbaru.\n\nLayanan ini menawarkan kecepatan tinggi, stabilitas jaringan superior, serta dukungan teknis 24/7 khusus untuk mendukung produktivitas perusahaan.'
                    }" class="inline-flex items-center text-blue-600 font-semibold hover:text-blue-700 focus:outline-none">
                        Lihat selengkapnya 
                        <svg class="w-3.5 h-3.5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </button>
                    <span class="text-gray-400 text-[11px]">10 Juli 2026</span>
                </div>
            </div>
        </div>
    </section>

    <!-- MODAL POP-UP BERITA LENGKAP -->
    <div x-show="isOpen" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/60 backdrop-blur-sm" style="display: none;" x-cloak>
        <div @click.away="isOpen = false" class="bg-white rounded-3xl max-w-3xl w-full max-h-[90vh] overflow-y-auto shadow-2xl p-6 md:p-8 space-y-6 relative">
            
            <!-- Tombol Close (X) -->
            <button @click="isOpen = false" class="absolute top-4 right-4 w-9 h-9 bg-gray-100 hover:bg-gray-200 text-gray-600 rounded-full flex items-center justify-center transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>

            <!-- Kategori & Tanggal -->
            <div class="flex items-center space-x-3">
                <span class="text-[10px] font-bold px-3 py-1 bg-blue-50 text-blue-600 rounded-md uppercase tracking-wider" x-text="currentNews.category"></span>
                <span class="text-xs text-gray-400" x-text="currentNews.date"></span>
            </div>

            <!-- Judul Berita -->
            <h2 class="text-xl md:text-2xl font-bold text-gray-900 leading-snug" x-text="currentNews.title"></h2>

            <!-- Gambar Berita Versi Full -->
            <img :src="currentNews.image" alt="Gambar Berita" class="w-full h-64 md:h-80 object-cover rounded-2xl">

            <!-- Konten Berita Lengkap -->
            <div class="text-gray-600 text-xs md:text-sm leading-relaxed space-y-4 whitespace-pre-line" x-text="currentNews.content"></div>

            <!-- Tombol Tutup Bawah -->
            <div class="pt-4 border-t border-gray-100 flex justify-end">
                <button @click="isOpen = false" class="px-6 py-2.5 bg-gray-100 hover:bg-gray-200 text-gray-700 text-xs md:text-sm font-medium rounded-xl transition-colors">
                    Tutup
                </button>
            </div>
        </div>
    </div>

    <!-- Include Footer -->
    @include('components.footer')

</body>
</html>