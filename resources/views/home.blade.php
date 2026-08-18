<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - PGASCOM Regional Office Lampung</title>
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/png"> 

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    
    <style>
        .swiper-button-next::after, .swiper-button-prev::after {
            display: none; /* Menyembunyikan panah bawaan swiper agar bisa pakai kustomisasi tombol sendiri */
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800 font-sans">

    <!-- Include Navbar -->
    @include('components.navbar')

    <!-- HERO SECTION -->
    <section class="bg-gradient-to-r from-[#0b1c3d] via-blue-700 to-blue-600 text-white py-16 px-6 md:px-12 relative overflow-hidden">
        <div data-aos="zoom-in" class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div class="space-y-6">
                <span class="inline-block px-3 py-1 bg-blue-900/60 text-blue-400 text-xs font-semibold rounded-full tracking-wide uppercase border border-blue-800">
                    Solusi ICT & Telekomunikasi
                </span>
                <h1 class="text-3xl md:text-5xl font-bold tracking-tight leading-tight">
                    Solusi ICT Terpercaya untuk Lampung
                </h1>
                <p class="text-gray-300 text-sm md:text-base leading-relaxed">
                    PT PGAS Telekomunikasi Nusantara Regional Lampung menyediakan layanan telekomunikasi dan infrastruktur ICT berkualitas tinggi untuk mendukung pertumbuhan bisnis di seluruh Provinsi Lampung.
                </p>
                <div>
                    <a href="#layanan" class="inline-flex items-center px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white font-medium text-sm rounded-lg transition-colors shadow-lg shadow-blue-600/30">
                        Pelajari lebih lanjut
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="relative">
                <div class="rounded-2xl overflow-hidden shadow-2xl border-4 border-blue-900/50">
                    <img src="{{ asset('images/pgncom.png') }}" alt="Gedung PGASCOM Lampung" class="w-full h-auto object-cover">
                </div>
            </div>
        </div>
    </section>

    <!-- PROFIL PERUSAHAAN SECTION -->
    <section class="py-20 px-6 md:px-12 max-w-7xl mx-auto text-center">
        <span class="text-blue-600 text-xs font-semibold uppercase tracking-widest">Profil Perusahaan</span>
        <h2 class="text-2xl md:text-4xl font-bold text-gray-900 mt-2 mb-6">PT PGAS Telekomunikasi Nusantara</h2>
        <p class="text-gray-600 text-sm md:text-base max-w-3xl mx-auto leading-relaxed mb-16">
            PT PGAS Telekomunikasi Nusantara Regional Lampung adalah anak perusahaan PT PGN Tbk yang bergerak di bidang telekomunikasi dan ICT. Dengan pengalaman lebih dari 20 tahun, kami telah melayani kebutuhan korporasi di seluruh Provinsi Lampung. Kami berkomitmen untuk menghadirkan solusi digital terbaik yang mendukung pertumbuhan bisnis pelanggan melalui infrastruktur handal, teknologi terkini, dan tim profesional tersertifikasi.
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
                    "Menjadi perusahaan solusi ICT terdepan dan terkemuka yang mendukung pertumbuhan ekonomi digital di Indonesia khususnya tahun 2030."
                </p>
            </div>

            <!-- Misi -->
            <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 relative overflow-hidden">
                <div class="w-10 h-10 bg-orange-50 text-orange-600 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                </div>
                <h3 class="font-bold text-lg text-gray-900 mb-2">Misi</h3>
                <ul class="text-gray-600 text-xs md:text-sm space-y-2 leading-relaxed list-disc list-inside">
                    <li>Menyediakan infrastruktur telekomunikasi berkualitas tinggi yang menjangkau seluruh wilayah Lampung.</li>
                    <li>Meningkatkan adopsi ICT korporasi guna mendukung transformasi digital berteknologi tinggi.</li>
                    <li>Mengembangkan SDM yang kompeten, profesional, dan berorientasi pada kepuasan pelanggan.</li>
                    <li>Memperkuat komitmen strategis yang saling menguntungkan dengan seluruh pemangku kepentingan.</li>
                    <li>Mendukung tata kelola perusahaan yang baik dan mewujudkan program GCG yang berkelanjutan.</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- LAYANAN SECTION (DENGAN CAROUSEL SWIPER) -->
    <section id="layanan" class="py-20 px-6 md:px-12 max-w-7xl mx-auto">
        <div class="text-center mb-12">
            <span class="text-blue-600 text-xs font-semibold uppercase tracking-widest">Layanan Kami</span>
            <h2 class="text-2xl md:text-4xl font-bold text-gray-900 mt-2">Solusi Terpadu ICT & Telekomunikasi</h2>
            <p class="text-gray-600 text-sm mt-3 max-w-2xl mx-auto">Kami membantu merancang, mengelola, dan melindungi infrastruktur teknologi yang mendukung operasional perusahaan dan layanan publik di seluruh Lampung.</p>
        </div>

        <!-- Container Carousel -->
        <div class="relative px-4">
            <!-- Swiper Main Container -->
            <div class="swiper layananSwiper py-4">
                <div class="swiper-wrapper">
                    
                    <!-- Card 1: GITA -->
                    <div class="swiper-slide h-auto">
                        <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex flex-col justify-between h-full transition-transform hover:-translate-y-1">
                            <div>
                                <div class="flex items-center justify-between mb-4">
                                    <span class="text-xs font-bold px-2.5 py-1 bg-blue-50 text-blue-600 rounded-md">GITA</span>
                                    <div class="w-8 h-8 rounded-lg bg-blue-50 flex items-center justify-center text-blue-600 font-bold text-xs">G</div>
                                </div>
                                <h3 class="font-bold text-gray-900 text-base mb-2">Digital Platform & Application</h3>
                                <p class="text-gray-600 text-xs leading-relaxed mb-6">
                                    Solusi untuk kebutuhan development server baik for digital platform and application, dedicated connection to global internet, interconnection data center, data communications, and cloud services. Designed to build smart ecosystem and integrated office automation.
                                </p>
                            </div>
                            <a href="#" class="inline-flex items-center text-blue-600 text-xs font-semibold hover:text-blue-700">
                                Learn More 
                                <svg class="w-3.5 h-3.5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                            </a>
                        </div>
                    </div>

                    <!-- Card 2: AMBER -->
                    <div class="swiper-slide h-auto">
                        <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex flex-col justify-between h-full transition-transform hover:-translate-y-1">
                            <div>
                                <div class="flex items-center justify-between mb-4">
                                    <span class="text-xs font-bold px-2.5 py-1 bg-blue-50 text-blue-600 rounded-md">AMBER</span>
                                    <div class="w-8 h-8 rounded-lg bg-blue-50 flex items-center justify-center text-blue-600 font-bold text-xs">A</div>
                                </div>
                                <h3 class="font-bold text-gray-900 text-base mb-2">Network & Cyber</h3>
                                <p class="text-gray-600 text-xs leading-relaxed mb-6">
                                    Securing all of your data from cyber attacks, build the ideal business communication networks and infrastructure that are connected to the national and internet networks.
                                </p>
                            </div>
                            <a href="#" class="inline-flex items-center text-blue-600 text-xs font-semibold hover:text-blue-700">
                                Learn More 
                                <svg class="w-3.5 h-3.5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                            </a>
                        </div>
                    </div>

                    <!-- Card 3: SINTA -->
                    <div class="swiper-slide h-auto">
                        <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex flex-col justify-between h-full transition-transform hover:-translate-y-1">
                            <div>
                                <div class="flex items-center justify-between mb-4">
                                    <span class="text-xs font-bold px-2.5 py-1 bg-blue-50 text-blue-600 rounded-md">SINTA</span>
                                    <div class="w-8 h-8 rounded-lg bg-blue-50 flex items-center justify-center text-blue-600 font-bold text-xs">S</div>
                                </div>
                                <h3 class="font-bold text-gray-900 text-base mb-2">Information Technology Infrastructure</h3>
                                <p class="text-gray-600 text-xs leading-relaxed mb-6">
                                    SINTA is a comprehensive service that provides expert advice in the success specific needs in various industries. This creates innovative many services including architecture network design, data professional services, enterprise hubs and complete IT solutions, data structure, and IT assess of operational productivity and efficiency.
                                </p>
                            </div>
                            <a href="#" class="inline-flex items-center text-blue-600 text-xs font-semibold hover:text-blue-700">
                                Learn More 
                                <svg class="w-3.5 h-3.5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                            </a>
                        </div>
                    </div>

                    <!-- Card 4: SORAIA (Tambahan Contoh Layanan) -->
                    <div class="swiper-slide h-auto">
                        <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex flex-col justify-between h-full transition-transform hover:-translate-y-1">
                            <div>
                                <div class="flex items-center justify-between mb-4">
                                    <span class="text-xs font-bold px-2.5 py-1 bg-blue-50 text-blue-600 rounded-md">SORAIA</span>
                                    <div class="w-8 h-8 rounded-lg bg-blue-50 flex items-center justify-center text-blue-600 font-bold text-xs">SO</div>
                                </div>
                                <h3 class="font-bold text-gray-900 text-base mb-2">Smart Office & IoT Solutions</h3>
                                <p class="text-gray-600 text-xs leading-relaxed mb-6">
                                    Penyediaan ekosistem Internet of Things (IoT) untuk otomatisasi kantor pintar, efisiensi energi, dan pengelolaan fasilitas gedung secara terintegrasi dan real-time.
                                </p>
                            </div>
                            <a href="#" class="inline-flex items-center text-blue-600 text-xs font-semibold hover:text-blue-700">
                                Learn More 
                                <svg class="w-3.5 h-3.5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Tombol Navigasi Carousel Kustom -->
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

    <!-- INFORMASI TERKINI SECTION -->
    <section class="py-20 px-6 md:px-12 max-w-7xl mx-auto bg-white rounded-3xl mb-12 shadow-sm border border-gray-100">
        <div class="text-center mb-12">
            <span class="text-blue-600 text-xs font-semibold uppercase tracking-widest">Berita & Kegiatan</span>
            <h2 class="text-2xl md:text-4xl font-bold text-gray-900 mt-2">Informasi Terkini</h2>
            <p class="text-gray-500 text-xs mt-1">Lihat semua/ports ></p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Berita 1 -->
            <div class="rounded-2xl overflow-hidden border border-gray-100 bg-gray-50 flex flex-col">
                <img src="{{ asset('images/news-1.png') }}" alt="News 1" class="w-full h-48 object-cover">
                <div class="p-6 flex flex-col justify-between flex-grow">
                    <div>
                        <div class="flex justify-between items-center text-[10px] text-gray-500 mb-2">
                            <span class="text-blue-600 font-semibold">Infrastructure & Network</span>
                            <span>Oct 12, 2025</span>
                        </div>
                        <h3 class="font-bold text-gray-900 text-sm mb-2 leading-snug">
                            PGAS Telekom Nusantara Expands Backhaul Capacity Along Sumatra's Corridors
                        </h3>
                        <p class="text-gray-600 text-xs leading-relaxed">
                            To support growing demand for enterprise solutions, we have expanded high-speed backbone channels with 400G optical lines.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Berita 2 -->
            <div class="rounded-2xl overflow-hidden border border-gray-100 bg-gray-50 flex flex-col">
                <img src="{{ asset('images/news-2.png') }}" alt="News 2" class="w-full h-48 object-cover">
                <div class="p-6 flex flex-col justify-between flex-grow">
                    <div>
                        <div class="flex justify-between items-center text-[10px] text-gray-500 mb-2">
                            <span class="text-blue-600 font-semibold">Cyber Article</span>
                            <span>Sep 28, 2025</span>
                        </div>
                        <h3 class="font-bold text-gray-900 text-sm mb-2 leading-snug">
                            Securing SCADA Platforms Cybersecurity Protocols in the Energy Sector
                        </h3>
                        <p class="text-gray-600 text-xs leading-relaxed">
                            An in-depth study of enterprise SCADA-based protocols ensuring critical infrastructure-targeted incidents remain under strict scrutiny.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Berita 3 -->
            <div class="rounded-2xl overflow-hidden border border-gray-100 bg-gray-50 flex flex-col">
                <img src="{{ asset('images/news-3.png') }}" alt="News 3" class="w-full h-48 object-cover">
                <div class="p-6 flex flex-col justify-between flex-grow">
                    <div>
                        <div class="flex justify-between items-center text-[10px] text-gray-500 mb-2">
                            <span class="text-blue-600 font-semibold">Client Program</span>
                            <span>Dec 15, 2025</span>
                        </div>
                        <h3 class="font-bold text-gray-900 text-sm mb-2 leading-snug">
                            Empowering Rural Education: Free Internet Access for Southern Lampung Villages
                        </h3>
                        <p class="text-gray-600 text-xs leading-relaxed">
                            As part of our initiative, access to digital tools creates structured, safe entry points for all schools in remote regions.
                        </p>
                    </div>
                </div>
            </div>
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
                640: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            },
        });
    </script>

    <!-- AOS JS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 800, // Durasi animasi dalam milidetik (0.8 detik)
    once: true,    // Animasi hanya berjalan sekali ketika discroll pertama kali
  });
</script>
</body>
</html>