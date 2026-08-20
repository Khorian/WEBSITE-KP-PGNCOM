<head></head>
<!-- AOS CSS -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<nav class="bg-white shadow-sm border-b border-gray-100 py-4 px-6 md:px-12 relative">
    <div class="max-w-7xl mx-auto flex items-center justify-between">
        
        <!-- Bagian Kiri: Logo & Teks Perusahaan -->
        <a href="{{ url('/') }}" class="flex items-center space-x-3 focus:outline-none">
            <img src="{{ asset('images/logo-pgascom.png') }}" alt="Logo PGASCOM" class="h-10 w-auto object-contain">
            <div class="flex flex-col">
                <span class="font-bold text-gray-900 text-lg tracking-tight leading-none">PGASCOM</span>
                <span class="text-[10px] font-semibold text-blue-600 tracking-wider mt-0.5">REGIONAL OFFICE LAMPUNG</span>
            </div>
        </a>

        <!-- Bagian Tengah: Menu Navigasi (Desktop) -->
        <div class="hidden md:flex items-center space-x-8 text-sm font-medium">
            <!-- Beranda -->
            <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-blue-600 font-semibold' : 'text-gray-600 hover:text-blue-600' }} transition-colors">
                Beranda
            </a>
            
            <!-- Profil Perusahaan -->
            <a href="{{ route('profil') }}" class="{{ request()->routeIs('profil') ? 'text-blue-600 font-semibold' : 'text-gray-600 hover:text-blue-600' }} transition-colors">
                Profil Perusahaan
            </a>
            
            <!-- Layanan -->
            <a href="{{ route('layanan') }}" class="{{ request()->routeIs('layanan') ? 'text-blue-600 font-semibold' : 'text-gray-600 hover:text-blue-600' }} transition-colors">
                Layanan
            </a>
            
            <!-- Berita dan Kegiatan -->
            <a href="{{ route('berita') }}" class="{{ request()->routeIs('berita') ? 'text-blue-600 font-semibold' : 'text-gray-600 hover:text-blue-600' }} transition-colors">
                Berita dan Kegiatan
            </a>
            
            <!-- Kontak Kami -->
            <a href="{{ route('kontak') }}" class="{{ request()->routeIs('kontak') ? 'text-blue-600 font-semibold' : 'text-gray-600 hover:text-blue-600' }} transition-colors">
                Kontak Kami
            </a>
        </div>

        <!-- Bagian Kanan: Tombol Admin Login (Desktop) -->
        <div class="hidden md:flex items-center">
            <a href="{{ route('login') }}" class="px-5 py-2 border border-blue-600 text-blue-600 hover:bg-blue-50 text-sm font-medium rounded-lg transition-colors">
                Admin Login
            </a>
        </div>

        <!-- Tombol Hamburger untuk Mobile (Diberi id="hamburger-btn") -->
        <div class="md:hidden flex items-center">
            <button type="button" id="hamburger-btn" class="text-gray-600 hover:text-gray-900 focus:outline-none">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>

    </div>

    <!-- Menu Dropdown untuk Mobile (Awalnya disembunyikan dengan kelas 'hidden') -->
    <div id="mobile-menu" class="hidden md:hidden absolute top-full left-0 w-full bg-white border-b border-gray-100 shadow-md py-4 px-6 space-y-3 z-50">
        <a href="{{ route('home') }}" class="block {{ request()->routeIs('home') ? 'text-blue-600 font-semibold' : 'text-gray-600' }} py-1">Beranda</a>
        <a href="{{ route('profil') }}" class="block {{ request()->routeIs('profil') ? 'text-blue-600 font-semibold' : 'text-gray-600' }} py-1">Profil Perusahaan</a>
        <a href="{{ route('layanan') }}" class="block {{ request()->routeIs('layanan') ? 'text-blue-600 font-semibold' : 'text-gray-600' }} py-1">Layanan</a>
        <a href="{{ route('berita') }}" class="block {{ request()->routeIs('berita') ? 'text-blue-600 font-semibold' : 'text-gray-600' }} py-1">Berita dan Kegiatan</a>
        <a href="{{ route('kontak') }}" class="block {{ request()->routeIs('kontak') ? 'text-blue-600 font-semibold' : 'text-gray-600' }} py-1">Kontak Kami</a>
        <div class="pt-2 border-t border-gray-100">
            <a href="{{ route('login') }}" class="block text-center w-full px-5 py-2 border border-blue-600 text-blue-600 hover:bg-blue-50 text-sm font-medium rounded-lg transition-colors">
                Admin Login
            </a>
        </div>
    </div>
</nav>

<!-- Skrip JavaScript untuk Menghidupkan Tombol Hamburger -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const hamburgerBtn = document.getElementById("hamburger-btn");
        const mobileMenu = document.getElementById("mobile-menu");

        if (hamburgerBtn && mobileMenu) {
            hamburgerBtn.addEventListener("click", function () {
                mobileMenu.classList.toggle("hidden");
            });
        }
    });
</script>