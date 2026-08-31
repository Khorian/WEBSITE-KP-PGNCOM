<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - PGNCOM Regional Office Lampung</title>
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/png"> 

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        .swiper-button-next::after, .swiper-button-prev::after {
            display: none;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800 font-sans">

    <!-- Include Navbar -->
    @include('components.navbar')

<!-- HERO SECTION -->
<section class="bg-blue-600 text-white py-16 px-6 md:px-12 relative overflow-hidden">
    <div data-aos="zoom-in" class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
        <div class="space-y-6">
            <span class="inline-block px-3 py-1 bg-blue-700/60 text-blue-200 text-xs font-semibold rounded-full tracking-wide uppercase border border-blue-500/30">
                Solusi ICT & Telekomunikasi
            </span>
            <h1 class="text-3xl md:text-5xl font-bold tracking-tight leading-tight">
                Solusi ICT Terpercaya untuk Lampung
            </h1>
            <p class="text-blue-100 text-sm md:text-base leading-relaxed">
                PT PGAS Telekomunikasi Nusantara Regional Lampung menyediakan layanan telekomunikasi dan infrastruktur ICT berkualitas tinggi untuk mendukung pertumbuhan bisnis di seluruh Provinsi Lampung.
            </p>
            <div>
    <a href="{{ url('/profil') }}" class="inline-flex items-center px-6 py-3 bg-white text-blue-600 hover:bg-blue-50 font-medium text-sm rounded-lg transition-colors shadow-lg">
        Pelajari lebih lanjut
        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
        </svg>
    </a>
</div>
        </div>
        <div class="relative">
            <div class="rounded-2xl overflow-hidden shadow-2xl border-4 border-blue-500/30">
                <img src="{{ asset('images/pgncom.png') }}" alt="Gedung PGASCOM Lampung" class="w-full h-auto object-cover">
            </div>
        </div>
    </div>
</section>
    <!-- PROFIL PERUSAHAAN SECTION -->
    <section class="py-20 px-6 md:px-12 max-w-7xl mx-auto text-center" data-aos="fade-up">
        <span class="text-blue-600 text-xs font-semibold uppercase tracking-widest">Profil Perusahaan</span>
        <h2 class="text-2xl md:text-4xl font-bold text-gray-900 mt-2 mb-6">PT PGN Telekomunikasi Nusantara</h2>
        <p class="text-gray-600 text-sm md:text-base max-w-3xl mx-auto leading-relaxed mb-16">
            PT PGN Telekomunikasi Nusantara Regional Lampung adalah anak perusahaan PT PGN Tbk yang bergerak di bidang telekomunikasi dan ICT. Dengan pengalaman lebih dari 20 tahun, kami telah melayani kebutuhan korporasi di seluruh Provinsi Lampung. Kami berkomitmen untuk menghadirkan solusi digital terbaik yang mendukung pertumbuhan bisnis pelanggan melalui infrastruktur handal, teknologi terkini, dan tim profesional tersertifikasi.
        </p>

        <!-- Visi & Misi Card -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 text-left">
            <!-- Visi -->
            <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 relative overflow-hidden">
                <div class="w-10 h-10 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                </div>
                <h3 class="font-bold text-lg text-gray-900 mb-2">Visi</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    "{{ $profil->visi ?? 'Menjadi perusahaan solusi ICT terdepan dan terkemuka yang mendukung pertumbuhan ekonomi digital di Indonesia khususnya tahun 2030.' }}"
                </p>
            </div>

            <!-- Misi -->
            <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 relative overflow-hidden">
                <div class="w-10 h-10 bg-orange-50 text-orange-600 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                </div>
                <h3 class="font-bold text-lg text-gray-900 mb-2">Misi</h3>
                <ul class="text-gray-600 text-xs md:text-sm space-y-2 leading-relaxed list-disc list-inside">
                    @forelse($profil->misi ?? [] as $misiItem)
                        @if(!empty($misiItem))
                            <li>{{ $misiItem }}</li>
                        @endif
                    @empty
                        <li>Menyediakan infrastruktur telekomunikasi berkualitas tinggi yang menjangkau seluruh wilayah Lampung.</li>
                        <li>Meningkatkan adopsi ICT korporasi guna mendukung transformasi digital berteknologi tinggi.</li>
                        <li>Mengembangkan SDM yang kompeten, profesional, dan berorientasi pada kepuasan pelanggan.</li>
                    @endforelse
                </ul>
            </div>
        </div>
    </section>

    <!-- LAYANAN SECTION (DINAMIS SAMA SEPERTI ADMIN) -->
    <section id="layanan" class="py-20 px-6 md:px-12 max-w-7xl mx-auto" data-aos="fade-up">
        <div class="text-center mb-12">
            <span class="text-blue-600 text-xs font-semibold uppercase tracking-widest">Layanan Kami</span>
            <h2 class="text-2xl md:text-4xl font-bold text-gray-900 mt-2">Solusi Terpadu ICT & Telekomunikasi</h2>
            <p class="text-gray-600 text-sm mt-3 max-w-2xl mx-auto">Kami membantu merancang, mengelola, dan melindungi infrastruktur teknologi yang mendukung operasional perusahaan dan layanan publik di seluruh Lampung.</p>
        </div>

        <div class="relative px-4">
            <div class="swiper layananSwiper py-4">
                <div class="swiper-wrapper">
                    @forelse($layanans as $layanan)
                        @php
                            $namaLayanan = $layanan->nama_layanan ?? $layanan->nama ?? 'Layanan';
                            $namaSingkat = strtoupper(explode(' ', trim($namaLayanan))[0] ?? 'LAYANAN');
                            $kategoriLayanan = $layanan->kategori ?? 'Produk dan Layanan';
                            $deskripsiLayanan = $layanan->deskripsi_singkat ?? $layanan->deskripsi ?? '';
                        @endphp

                        <div class="swiper-slide h-auto">
                            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex flex-col justify-between h-full transition-transform hover:-translate-y-1">
                                <div>
                                    <div class="flex items-center justify-between mb-4">
                                        <span class="text-[10px] font-bold px-2.5 py-1 bg-blue-50 text-blue-600 rounded-md uppercase">
                                            {{ $kategoriLayanan }}
                                        </span>
                                        <div class="w-10 h-10 rounded-xl bg-blue-50/80 p-1.5 flex items-center justify-center border border-blue-100 overflow-hidden">
                                            @if($layanan->ikon)
                                                <img src="{{ asset($layanan->ikon) }}" alt="{{ $namaSingkat }}" class="w-full h-full object-contain">
                                            @else
                                                <span class="text-blue-700 font-black text-xs">
                                                    {{ strtoupper(substr($namaSingkat, 0, 2)) }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <h3 class="font-bold text-gray-900 text-base mb-1">{{ $namaSingkat }}</h3>
                                    <p class="text-xs font-semibold text-gray-500 mb-3">{{ $namaLayanan }}</p>
                                    <p class="text-gray-600 text-xs leading-relaxed mb-6 line-clamp-4">
                                        {{ $deskripsiLayanan }}
                                    </p>
                                </div>
                                <a href="{{ route('layanan') }}" class="inline-flex items-center text-blue-600 text-xs font-semibold hover:text-blue-700">
                                    Learn More 
                                    <svg class="w-3.5 h-3.5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                                </a>
                            </div>
                        </div>
                    @empty
                        <div class="swiper-slide w-full text-center py-12 text-xs text-gray-400">Belum ada layanan aktif.</div>
                    @endforelse
                </div>
            </div>

            <!-- Tombol Navigasi Swiper Kustom -->
            <div class="flex justify-center items-center space-x-4 mt-8">
                <button class="swiper-button-prev-custom w-10 h-10 rounded-full border border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white flex items-center justify-center transition-colors shadow-sm focus:outline-none">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
                </button>
                <button class="swiper-button-next-custom w-10 h-10 rounded-full border border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white flex items-center justify-center transition-colors shadow-sm focus:outline-none">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                </button>
            </div>
        </div>
    </section>

    <!-- INFORMASI TERKINI SECTION (DINAMIS DARI KELOLA BERITA ADMIN) -->
    <section class="py-20 px-6 md:px-12 max-w-7xl mx-auto bg-white rounded-3xl mb-12 shadow-sm border border-gray-100" data-aos="fade-up">
        <div class="flex items-center justify-between mb-12">
            <div>
                <span class="text-blue-600 text-xs font-semibold uppercase tracking-widest block">Berita & Kegiatan</span>
                <h2 class="text-2xl md:text-4xl font-bold text-gray-900 mt-1">Informasi Terkini</h2>
            </div>
            <a href="{{ route('berita') }}" class="text-xs font-bold text-blue-600 hover:underline inline-flex items-center space-x-1">
                <span>Lihat Semua Berita</span>
                <span>&rarr;</span>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @forelse($beritas as $item)
                @php
                    $gambarRaw = trim($item->gambar ?? $item->foto ?? '');
                    $gambarUrl = null;

                    if (!empty($gambarRaw)) {
                        if (filter_var($gambarRaw, FILTER_VALIDATE_URL)) {
                            $gambarUrl = $gambarRaw;
                        } elseif (file_exists(public_path($gambarRaw))) {
                            $gambarUrl = asset($gambarRaw);
                        } elseif (file_exists(public_path('images/' . $gambarRaw))) {
                            $gambarUrl = asset('images/' . $gambarRaw);
                        } elseif (file_exists(public_path('storage/' . $gambarRaw))) {
                            $gambarUrl = asset('storage/' . $gambarRaw);
                        } else {
                            $gambarUrl = asset($gambarRaw);
                        }
                    }
                @endphp

                <div class="rounded-2xl overflow-hidden border border-gray-100 bg-gray-50 flex flex-col justify-between hover:shadow-md transition">
                    <div>
                        <!-- Gambar Berita dengan Fallback Logo PGASCOM -->
                        <div class="w-full h-48 bg-slate-100 overflow-hidden relative border-b border-gray-100 flex items-center justify-center p-2">
                            @if($gambarUrl)
                                <img src="{{ $gambarUrl }}" 
                                     alt="{{ $item->judul }}" 
                                     class="w-full h-full object-cover"
                                     onerror="this.onerror=null; this.src='{{ asset('images/logo-pgascom.png') }}'; this.className='max-h-24 w-auto object-contain opacity-80';">
                            @else
                                <img src="{{ asset('images/logo-pgascom.png') }}" 
                                     alt="PGASCOM" 
                                     class="max-h-24 w-auto object-contain opacity-80">
                            @endif
                        </div>

                        <!-- Konten Berita -->
                        <div class="p-6">
                            <div class="flex justify-between items-center text-[10px] text-gray-500 mb-2">
                                <span class="text-blue-600 font-semibold uppercase tracking-wider">{{ $item->kategori ?? 'Kegiatan' }}</span>
                                <span>{{ $item->created_at ? \Carbon\Carbon::parse($item->created_at)->format('d M Y') : '-' }}</span>
                            </div>
                            <h3 class="font-bold text-gray-900 text-sm mb-2 leading-snug line-clamp-2">
                                {{ $item->judul }}
                            </h3>
                            <p class="text-gray-600 text-xs leading-relaxed line-clamp-3">
                                {{ strip_tags($item->isi ?? $item->deskripsi ?? '') }}
                            </p>
                        </div>
                    </div>

                    <div class="px-6 pb-6 pt-0">
                        <a href="{{ route('berita') }}" class="text-xs font-bold text-blue-600 hover:underline">Baca Selengkapnya &rarr;</a>
                    </div>
                </div>
            @empty
                <div class="col-span-3 text-center py-12 text-xs text-gray-400">Belum ada berita yang dipublikasikan.</div>
            @endforelse
        </div>
    </section>

    <!-- Include Footer -->
    @include('components.footer')

    <!-- Swiper JS Script -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.layananSwiper', {
            slidesPerView: 1,
            spaceBetween: 24,
            loop: true,
            navigation: {
                nextEl: '.swiper-button-next-custom',
                prevEl: '.swiper-button-prev-custom',
            },
            breakpoints: {
                640: { slidesPerView: 2 },
                1024: { slidesPerView: 3 },
            },
        });
    </script>

    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true,
        });
    </script>
</body>
</html>