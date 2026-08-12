<head></head>
<!-- Swup CDN -->
<script defer src="https://unpkg.com/swup@4"></script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const swup = new Swup();
    });
</script>

<style>
    /* Konfigurasi Durasi Animasi Transisi */
    .transition-fade {
        transition: opacity 0.3s ease;
        opacity: 1;
    }
    html.is-animating .transition-fade {
        opacity: 0;
    }
</style>
</head>

    <div class="max-w-7xl mx-auto flex items-center justify-between">
    </div>

<nav class="bg-white shadow-sm border-b border-gray-100 py-4 px-6 md:px-12">
    <div class="max-w-7xl mx-auto flex items-center justify-between">
        
        <!-- Bagian Kiri: Logo & Teks Perusahaan -->
        <a href="{{ url('/') }}" class="flex items-center space-x-3 focus:outline-none">
            <img src="{{ asset('images/logo-pgascom.png') }}" alt="Logo PGASCOM" class="h-10 w-auto object-contain">
            <div class="flex flex-col">
                <span class="font-bold text-gray-900 text-lg tracking-tight leading-none">PGASCOM</span>
                <span class="text-[10px] font-semibold text-blue-600 tracking-wider mt-0.5">REGIONAL OFFICE LAMPUNG</span>
            </div>
        </a>

        <!-- Bagian Tengah: Menu Navigasi dengan Pengecekan Active Route -->
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

        <!-- Bagian Kanan: Tombol Admin Login -->
        <div class="hidden md:flex items-center">
            <a href="{{ route('login') }}" class="px-5 py-2 border border-blue-600 text-blue-600 hover:bg-blue-50 text-sm font-medium rounded-lg transition-colors">
                Admin Login
            </a>
        </div>

        <!-- Tombol Hamburger untuk Mobile -->
        <div class="md:hidden flex items-center">
            <button type="button" class="text-gray-600 hover:text-gray-900 focus:outline-none">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>

    </div>
</nav>