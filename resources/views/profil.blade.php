<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Perusahaan - PGASCOM Regional Office Lampung</title>
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800 font-sans">

    <!-- Include Navbar -->
    @include('components.navbar')

    <!-- HERO BANNER PROFIL -->
    <section class="bg-gradient-to-r from-[#0b1c3d] via-blue-700 to-blue-600 text-white py-16 px-6 md:px-12 relative overflow-hidden">
        <div class="max-w-7xl mx-auto space-y-3">
            <!-- Breadcrumb -->
            <div class="flex items-center space-x-2 text-xs md:text-sm text-gray-300">
                <a href="{{ route('home') }}" class="hover:text-white transition-colors">Beranda</a>
                <span>&gt;</span>
                <span class="text-cyan-400 font-semibold">Profil Perusahaan</span>
            </div>

            <!-- Judul & Subjudul -->
            <h1 class="text-3xl md:text-5xl font-bold tracking-tight">Profil Regional Lampung</h1>
            <p class="text-xs md:text-sm text-gray-200 max-w-2xl leading-relaxed">
                Mengenal lebih dekat PT PGAS Telekomunikasi Nusantara Regional Office Lampung.
            </p>
        </div>
    </section>

    <!-- SEJARAH SINGKAT SECTION -->
    <section class="py-16 px-6 md:px-12 max-w-7xl mx-auto">
        <div class="text-center mb-10">
            <span class="text-blue-600 text-xs font-semibold uppercase tracking-widest">SEJARAH SINGKAT</span>
            <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mt-1">Perjalanan PGNCOM di Lampung</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-12 gap-10 items-center">
            <div class="md:col-span-7 space-y-4 text-xs md:text-sm text-gray-600 leading-relaxed text-justify">
                <p>
                    Sebagai anak perusahaan PT PGAS Telekomunikasi Nusantara (PGNCOM) bernaung di bawah korporasi utamanya, PT Perusahaan Gas Negara, Tbk (PGN), yang mengawali langkah melalui koridor optik fiber optik strategis di sepanjang jalur pipa gas bumi di seluruh wilayah Sumatra pada tahun 2007. Untuk mengoptimalkan nilai komersial dari aset infrastruktur telekomunikasi berkapasitas besar tersebut, PGNCOM resmi didirikan pada 10 Januari 2007 guna fokus mengelola layanan dibidang informasi dan komunikasi (ICT) bagi korporasi domestik maupun internasional.
                </p>
                <p>
                    Seiring berkembangnya jaringan ekosistem, PGNCOM terus merintis untuk mengintegrasikan koridor strategis dari Jakarta, wilayah Sumatra, hingga merintis titik point of presence (landing point) leased line yang terkoneksi ke Singapura. Dalam memantapkan eksistensi operasional sekaligus mengakselerasi infrastruktur konektivitas digital, didirikanlah Regional Office (RO) Lampung yang berpusat di Bandar Lampung. Kantor wilayah ini memegang peranan strategis dalam memastikan keandalan jaringan telekomunikasi Sumatra Bagian Selatan sekaligus menyediakan solusi ICT berkapasitas dan instan pascamerdeka setempat.
                </p>
            </div>
            <div class="md:col-span-5">
                <div class="rounded-2xl overflow-hidden shadow-md border border-gray-200 bg-white p-2">
                    <img src="{{ asset('images/logo-pgascom.png') }}" alt="Gedung/Kantor PGASCOM" class="w-full h-auto object-cover rounded-xl">
                </div>
            </div>
        </div>
    </section>

    <!-- VISI SECTION -->
    <section class="py-12 px-6 md:px-12 max-w-5xl mx-auto text-center">
        <div class="bg-blue-600 text-white p-8 md:p-12 rounded-3xl shadow-lg relative overflow-hidden">
            <div class="w-10 h-10 bg-blue-500/50 rounded-xl mx-auto flex items-center justify-center mb-4 border border-blue-400">
                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
            </div>
            <span class="text-xs font-semibold tracking-widest uppercase text-blue-200">Visi</span>
            <p class="text-base md:text-xl font-medium mt-3 leading-relaxed italic max-w-3xl mx-auto">
                "Menjadi perusahaan solusi ICT terdepan dan terpercaya yang mendorong pertumbuhan ekonomi digital di Provinsi Lampung pada tahun 2030."
            </p>
        </div>
    </section>

    <!-- MISI SECTION -->
    <section class="py-12 px-6 md:px-12 max-w-5xl mx-auto">
        <h3 class="text-2xl font-bold text-gray-900 text-center mb-8">Misi</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm flex items-start space-x-4">
                <div class="w-8 h-8 bg-blue-50 text-blue-600 rounded-lg shrink-0 flex items-center justify-center font-bold text-xs">01</div>
                <p class="text-xs md:text-sm text-gray-600 leading-relaxed">Menyediakan infrastruktur telekomunikasi berkualitas tinggi yang menjangkau seluruh wilayah Lampung.</p>
            </div>
            <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm flex items-start space-x-4">
                <div class="w-8 h-8 bg-blue-50 text-blue-600 rounded-lg shrink-0 flex items-center justify-center font-bold text-xs">02</div>
                <p class="text-xs md:text-sm text-gray-600 leading-relaxed">Mengembangkan solusi ICT korporasi guna mendukung transformasi digital korporasi pelanggan.</p>
            </div>
            <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm flex items-start space-x-4">
                <div class="w-8 h-8 bg-blue-50 text-blue-600 rounded-lg shrink-0 flex items-center justify-center font-bold text-xs">03</div>
                <p class="text-xs md:text-sm text-gray-600 leading-relaxed">Membangun SDM yang kompeten, profesional, dan berorientasi pada kepuasan pelanggan.</p>
            </div>
            <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm flex items-start space-x-4">
                <div class="w-8 h-8 bg-blue-50 text-blue-600 rounded-lg shrink-0 flex items-center justify-center font-bold text-xs">04</div>
                <p class="text-xs md:text-sm text-gray-600 leading-relaxed">Memperkuat komitmen strategis yang saling menguntungkan dengan seluruh pemangku kepentingan.</p>
            </div>
            <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm md:col-span-2 flex items-start space-x-4">
                <div class="w-8 h-8 bg-blue-50 text-blue-600 rounded-lg shrink-0 flex items-center justify-center font-bold text-xs">05</div>
                <p class="text-xs md:text-sm text-gray-600 leading-relaxed">Mendukung tata kelola perusahaan yang baik dan mewujudkan program GCG yang berkelanjutan.</p>
            </div>
        </div>
    </section>

<!-- TIM TANGGAP DARURAT SECTION -->
    <section class="py-16 px-6 md:px-12 max-w-7xl mx-auto bg-gray-100/60 rounded-3xl my-12 border border-gray-200/60">
        <div class="text-center mb-10">
            <span class="text-blue-600 text-xs font-semibold uppercase tracking-widest">STRUKTUR ORGANISASI</span>
            <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mt-1">Tim Tanggap Darurat</h2>
            <p class="text-xs text-gray-500 mt-1 uppercase">PT PGAS TELEKOMUNIKASI NUSANTARA REGIONAL OFFICE – LAMPUNG</p>
        </div>

        <div class="space-y-8 max-w-5xl mx-auto">
            <!-- Pimpinan Tertinggi: Manager RO Lampung -->
            <div class="flex justify-center">
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden text-center w-64">
                    <div class="bg-[#0b1c3d] text-white py-2 px-4">
                        <span class="text-[10px] uppercase tracking-wider font-bold block">MANAGER RO LAMPUNG</span>
                    </div>
                    <div class="py-3 px-4">
                        <span class="text-xs font-semibold text-gray-800 block">Ade Irawan</span>
                    </div>
                </div>
            </div>

            

            <!-- Jajaran Tim di Bawahnya -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-5 gap-4">
                
                <!-- TIM PEMADAM API -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden flex flex-col">
                    <div class="bg-[#0b1c3d] text-white py-2 px-3 text-center">
                        <span class="text-[10px] uppercase tracking-wider font-bold block">TIM PEMADAM API</span>
                    </div>
                    <div class="p-3 text-center space-y-1 flex-grow flex flex-col justify-center text-xs text-gray-600">
                        <p class="font-medium text-gray-800">Sapparudin</p>
                        <p>Nurwanto</p>
                        <p>A. Taufik Prabowo</p>
                    </div>
                </div>

                <!-- TIM EVAKUASI -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden flex flex-col">
                    <div class="bg-[#0b1c3d] text-white py-2 px-3 text-center">
                        <span class="text-[10px] uppercase tracking-wider font-bold block">TIM EVAKUASI</span>
                    </div>
                    <div class="p-3 text-center space-y-1 flex-grow flex flex-col justify-center text-xs text-gray-600">
                        <p class="font-medium text-gray-800">Erlita D</p>
                        <p>Agus Ardiyan</p>
                        <p>Ariyanto Wibowo</p>
                    </div>
                </div>

                <!-- TIM DOCUMENT -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden flex flex-col">
                    <div class="bg-[#0b1c3d] text-white py-2 px-3 text-center">
                        <span class="text-[10px] uppercase tracking-wider font-bold block">TIM DOCUMENT</span>
                    </div>
                    <div class="p-3 text-center space-y-1 flex-grow flex flex-col justify-center text-xs text-gray-600">
                        <p class="font-medium text-gray-800">Silmiliyan</p>
                        <p>Dedy Narendra</p>
                        <p>Cahyoni Maimanah</p>
                    </div>
                </div>

                <!-- TIM HURU HARA -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden flex flex-col">
                    <div class="bg-[#0b1c3d] text-white py-2 px-3 text-center">
                        <span class="text-[10px] uppercase tracking-wider font-bold block">TIM HURU HARA</span>
                    </div>
                    <div class="p-3 text-center space-y-1 flex-grow flex flex-col justify-center text-xs text-gray-600">
                        <p class="font-medium text-gray-800">Gandi Rismawan</p>
                        <p>Ahmad Buchori</p>
                        <p>Kartika Chandra W.</p>
                    </div>
                </div>

                <!-- TIM P3K -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden flex flex-col">
                    <div class="bg-[#0b1c3d] text-white py-2 px-3 text-center">
                        <span class="text-[10px] uppercase tracking-wider font-bold block">TIM P3K</span>
                    </div>
                    <div class="p-3 text-center space-y-1 flex-grow flex flex-col justify-center text-xs text-gray-600">
                        <p class="font-medium text-gray-800">Rizal</p>
                        <p>Yopi Marzuki</p>
                        <p>Rendy Oktavianus</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- NILAI PERUSAHAAN SECTION -->
    <section class="py-16 px-6 md:px-12 max-w-7xl mx-auto">
        <div class="text-center mb-12">
            <span class="text-blue-600 text-xs font-semibold uppercase tracking-widest">NILAI PERUSAHAAN</span>
            <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mt-1">Nilai yang Kami Junjung Tinggi</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Nilai 1 -->
            <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm space-y-3">
                <div class="w-10 h-10 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                </div>
                <h3 class="font-bold text-gray-900 text-base">Inovasi</h3>
                <p class="text-gray-600 text-xs leading-relaxed">Selalu menghadirkan solusi digital terdepan dan kreatif.</p>
            </div>
            <!-- Nilai 2 -->
            <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm space-y-3">
                <div class="w-10 h-10 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                </div>
                <h3 class="font-bold text-gray-900 text-base">Integritas</h3>
                <p class="text-gray-600 text-xs leading-relaxed">Menjunjung tinggi kejujuran dan transparansi dalam setiap aspek pekerjaan.</p>
            </div>
            <!-- Nilai 3 -->
            <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm space-y-3">
                <div class="w-10 h-10 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
                </div>
                <h3 class="font-bold text-gray-900 text-base">Keandalan</h3>
                <p class="text-gray-600 text-xs leading-relaxed">Memastikan kestabilan layanan internet yang fasilitas dan dapat diandalkan.</p>
            </div>
            <!-- Nilai 4 -->
            <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm space-y-3">
                <div class="w-10 h-10 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                </div>
                <h3 class="font-bold text-gray-900 text-base">Kolaborasi</h3>
                <p class="text-gray-600 text-xs leading-relaxed">Bekerja sama secara sinergi demi seluruh kemajuan bersama.</p>
            </div>
            <!-- Nilai 5 -->
            <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm space-y-3">
                <div class="w-10 h-10 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                </div>
                <h3 class="font-bold text-gray-900 text-base">Profesionalisme</h3>
                <p class="text-gray-600 text-xs leading-relaxed">Memberikan layanan terbaik dengan standar kualitas yang tinggi.</p>
            </div>
            <!-- Nilai 6 -->
            <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm space-y-3">
                <div class="w-10 h-10 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="font-bold text-gray-900 text-base">Keberlanjutan</h3>
                <p class="text-gray-600 text-xs leading-relaxed">Berkomitmen peduli dalam bisnis bagi seluruh kepedulian dan lingkungan.</p>
            </div>
        </div>
    </section>

    <!-- Include Footer -->
    @include('components.footer')

</body>
</html>