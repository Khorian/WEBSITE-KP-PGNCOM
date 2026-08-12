<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami - PGASCOM Regional Office Lampung</title>
    
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/logo-pgascom.png') }}" type="image/png">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800 font-sans">

    <!-- Include Navbar -->
    @include('components.navbar')

    <!-- HERO BANNER KONTAK -->
    <section class="bg-gradient-to-r from-[#0b1c3d] via-blue-700 to-blue-600 text-white py-16 px-6 md:px-12 relative overflow-hidden">
        <div class="max-w-7xl mx-auto space-y-3">
            <!-- Breadcrumb -->
            <div class="flex items-center space-x-2 text-xs md:text-sm text-gray-300">
                <a href="{{ route('home') }}" class="hover:text-white transition-colors">Beranda</a>
                <span>&gt;</span>
                <span class="text-cyan-400 font-semibold">Kontak Kami</span>
            </div>

            <!-- Judul & Subjudul -->
            <h1 class="text-3xl md:text-5xl font-bold tracking-tight">Hubungi Kami</h1>
            <p class="text-xs md:text-sm text-gray-200 max-w-2xl leading-relaxed">
                Tim kami siap membantu Anda. Hubungi kami melalui berbagai cara di bawah ini.
            </p>
        </div>
    </section>

    <!-- KONTEN UTAMA: INFORMASI KONTAK & FORM PESAN -->
    <section class="py-16 px-6 md:px-12 max-w-7xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
            
            <!-- Bagian Kiri: Informasi Kontak (Lebar 5 Kolom) -->
            <div class="lg:col-span-5 space-y-6">
                <div>
                    <h2 class="text-lg font-bold text-gray-900">Informasi Kontak</h2>
                    <p class="text-xs text-gray-500 mt-0.5">Kami Ada untuk Anda</p>
                </div>

                <!-- Card Email -->
                <div class="bg-blue-50/70 p-5 rounded-2xl border border-blue-100 space-y-1">
                    <span class="text-xs font-bold text-blue-700 uppercase tracking-wider block">Email</span>
                    <a href="mailto:sales@pgncom.co.id" class="text-xs md:text-sm font-semibold text-gray-800 hover:text-blue-600 transition-colors block">sales@pgncom.co.id</a>
                </div>

                <!-- Card Telepon -->
                <div class="bg-blue-50/70 p-5 rounded-2xl border border-blue-100 space-y-1">
                    <span class="text-xs font-bold text-blue-700 uppercase tracking-wider block">Telepon</span>
                    <span class="text-xs md:text-sm font-semibold text-gray-800 block">(021) 39733645</span>
                </div>

                <!-- Card Jam Operasional -->
                <div class="bg-blue-50/70 p-5 rounded-2xl border border-blue-100 space-y-1">
                    <span class="text-xs font-bold text-blue-700 uppercase tracking-wider block">Jam Operasional</span>
                    <p class="text-xs text-gray-700 leading-relaxed">Senin – Kamis: 07.30 – 16.00 WIB</p>
                    <p class="text-xs text-gray-700 leading-relaxed">Jum'at: 07.30 – 16.30 WIB</p>
                </div>
            </div>

            <!-- Bagian Kanan: Form Kirim Pesan (Lebar 7 Kolom) -->
            <div class="lg:col-span-7 bg-white p-8 rounded-3xl shadow-sm border border-gray-100">
                <h2 class="text-lg font-bold text-gray-900 mb-6">Kirim Pesan</h2>
                
                <form action="#" method="POST" class="space-y-4">
                    @csrf
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <!-- Nama Lengkap -->
                        <div class="space-y-1.5">
                            <label class="block text-xs font-semibold text-gray-700">Nama Lengkap <span class="text-red-500">*</span></label>
                            <input type="text" placeholder="Masukan nama Anda" class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl text-xs focus:outline-none focus:bg-white focus:border-blue-600 transition-colors" required>
                        </div>
                        <!-- Email -->
                        <div class="space-y-1.5">
                            <label class="block text-xs font-semibold text-gray-700">Email <span class="text-red-500">*</span></label>
                            <input type="email" placeholder="email@anda.com" class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl text-xs focus:outline-none focus:bg-white focus:border-blue-600 transition-colors" required>
                        </div>
                    </div>

                    <!-- Nomor Telepon -->
                    <div class="space-y-1.5">
                        <label class="block text-xs font-semibold text-gray-700">Nomor Telepon <span class="text-red-500">*</span></label>
                        <input type="text" placeholder="+62 812-xxxx-xxx" class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl text-xs focus:outline-none focus:bg-white focus:border-blue-600 transition-colors" required>
                    </div>

                    <!-- Pesan -->
                    <div class="space-y-1.5">
                        <label class="block text-xs font-semibold text-gray-700">Pesan <span class="text-red-500">*</span></label>
                        <textarea rows="4" placeholder="Tuliskan pesan atau pertanyaan anda disini..." class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl text-xs focus:outline-none focus:bg-white focus:border-blue-600 transition-colors resize-none" required></textarea>
                    </div>

                    <!-- Tombol Kirim -->
                    <div class="pt-2">
                        <button type="submit" class="w-full py-3.5 bg-blue-600 hover:bg-blue-700 text-white font-medium text-xs md:text-sm rounded-xl transition-colors shadow-md shadow-blue-600/20 flex items-center justify-center space-x-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/></svg>
                            <span>Kirim Pesan</span>
                        </button>
                    </div>
                </form>
            </div>

        </div>

<!-- SECTION: LOKASI KANTOR & GOOGLE MAPS -->
        <div class="mt-16 space-y-6">
            <div>
                <h2 class="text-lg font-bold text-gray-900">Lokasi Kantor</h2>
            </div>

            <div class="bg-white p-4 rounded-3xl shadow-sm border border-gray-100 overflow-hidden space-y-4">
                <!-- Google Maps Embed - PGASCOM Regional Office Lampung -->
                <div class="w-full h-[400px] rounded-2xl overflow-hidden border border-gray-200">
                    <iframe 
                        src= "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4028.9948742277643!2d105.25327199915412!3d-5.401310369338983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40dafa5c877af5%3A0xcba38e036d283c3f!2sKantor%20Pgascom%20Regional%20Office%20Lampung!5e1!3m2!1sid!2sid!4v1785987121707!5m2!1sid!2sid"
                        width="100%" 
                        height="100%" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>

                <!-- Alamat Teks di Bawah Map -->
                <div class="flex items-center space-x-2 text-xs text-gray-600 px-2 pb-2">
                    <svg class="w-4 h-4 text-blue-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    <span>Jln. Sam Ratulangi No. 15 Penengahan Raya, Kedaton Bandar Lampung, 35112.</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Include Footer -->
    @include('components.footer')

</body>
</html>