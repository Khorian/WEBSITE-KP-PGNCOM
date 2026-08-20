<!-- 1. Bagian Call to Action (CTA) Mengambang -->
<div class="max-w-7xl mx-auto px-6 relative z-20 mt-6 mb-8">
    <!-- Style Animasi Floating -->
    <style>
    @keyframes floatAnimation {
        0%, 100% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(-8px);
        }
    }
    .animate-floating {
        animation: floatAnimation 4s ease-in-out infinite;
    }
    </style>

    <div class="bg-gradient-to-r from-blue-700 to-blue-600 py-14 px-8 text-center text-white rounded-3xl shadow-2xl shadow-blue-600/30 max-w-5xl mx-auto animate-floating relative overflow-hidden border border-blue-500/30">
        
        <!-- Efek Cahaya Dekoratif -->
        <div class="absolute -right-10 -top-10 w-40 h-40 bg-white/10 rounded-full blur-2xl pointer-events-none"></div>
        <div class="absolute -left-10 -bottom-10 w-40 h-40 bg-black/10 rounded-full blur-2xl pointer-events-none"></div>

        <div class="max-w-3xl mx-auto space-y-4 relative z-10">
            <h2 class="text-2xl md:text-3xl font-bold tracking-tight">
                Siap Membawa Bisnis Anda ke Level Berikutnya?
            </h2>
            <p class="text-xs md:text-sm text-blue-100 max-w-2xl mx-auto leading-relaxed">
                Tim kami siap membantu merancang solusi jaringan serat optik, cloud hosting regional, dan integrasi sistem yang disesuaikan dengan kebutuhan bisnis Anda.
            </p>
            <div class="pt-2">
                <a href="{{ url('/kontak') }}" class="inline-block px-6 py-3 bg-[#ff6600] hover:bg-[#e65c00] text-white font-medium text-xs md:text-sm rounded-xl transition-all duration-300 hover:scale-105 shadow-lg shadow-orange-600/30">
                    Hubungi Kami !
                </a>
            </div>
        </div>
    </div>
</div>

<!-- 2. Bagian Footer Utama -->
<footer class="bg-[#0b1c3d] text-gray-300 pt-16 pb-8 border-t border-blue-950 relative z-10 mt-12">
    
    <!-- Konten Utama Footer -->
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-12 gap-10 px-6 md:px-12">
        
        <!-- Kolom 1: Logo, Deskripsi & Sosial Media -->
        <div class="md:col-span-4 space-y-4">
            <div class="flex items-center space-x-3">
                <img src="{{ asset('images/logo-pgascom.png') }}" alt="Logo PGASCOM" class="h-8 w-auto object-contain">
                <span class="font-bold text-white text-xl tracking-wide">PGAS COM</span>
            </div>
            <!-- Diubah ke text-sm (normal) -->
            <p class="text-sm text-gray-400 leading-relaxed pr-4">
                PT PGAS Telekomunikasi Nusantara adalah perusahaan telekomunikasi dan ICT terkemuka yang melayani kebutuhan digital di seluruh Indonesia.
            </p>
            <!-- Ikon Sosial Media -->
            <div class="flex items-center space-x-3 pt-2">
                <!-- Instagram -->
                <a href="#" class="w-8 h-8 rounded-full bg-blue-950/80 hover:bg-blue-900 flex items-center justify-center text-gray-300 transition-colors">
                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                    </svg>
                </a>
                <!-- LinkedIn -->
                <a href="#" class="w-8 h-8 rounded-full bg-blue-950/80 hover:bg-blue-900 flex items-center justify-center text-gray-300 transition-colors">
                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                        <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                    </svg>
                </a>
                <!-- Facebook -->
                <a href="#" class="w-8 h-8 rounded-full bg-blue-950/80 hover:bg-blue-900 flex items-center justify-center text-gray-300 transition-colors">
                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                        <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/>
                    </svg>
                </a>
                <!-- Twitter / X -->
                <a href="#" class="w-8 h-8 rounded-full bg-blue-950/80 hover:bg-blue-900 flex items-center justify-center text-gray-300 transition-colors">
                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                        <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                    </svg>
                </a>
            </div>
        </div>

        <!-- Kolom 2: Menu Beranda -->
        <div class="md:col-span-2 space-y-3">
            <!-- Diubah ke text-base -->
            <h3 class="text-white font-semibold text-base">Beranda</h3>
            <!-- Diubah ke text-sm -->
            <ul class="space-y-2 text-sm text-gray-400">
                <li><a href="{{ url('/profil') }}" class="hover:text-white transition-colors">Profil perusahaan</a></li>
                <li><a href="{{ url('/layanan') }}" class="hover:text-white transition-colors">Layanan</a></li>
                <li><a href="{{ url('/berita') }}" class="hover:text-white transition-colors">Berita dan kegiatan</a></li>
                <li><a href="{{ url('/kontak') }}" class="hover:text-white transition-colors">Kontak kami</a></li>
            </ul>
        </div>

        <!-- Kolom 3: Layanan -->
        <div class="md:col-span-2 space-y-3">
            <!-- Diubah ke text-base -->
            <h3 class="text-white font-semibold text-base">Layanan</h3>
            <!-- Diubah ke text-sm -->
            <ul class="space-y-2 text-sm text-gray-400">
                <li><a href="#" class="hover:text-white transition-colors">GITA</a></li>
                <li><a href="#" class="hover:text-white transition-colors">AMBER</a></li>
                <li><a href="#" class="hover:text-white transition-colors">SORAIA</a></li>
                <li><a href="#" class="hover:text-white transition-colors">SINTA</a></li>
                <li><a href="#" class="hover:text-white transition-colors">SISKA</a></li>
            </ul>
        </div>

        <!-- Kolom 4: Kontak Kami -->
        <div class="md:col-span-4 space-y-3">
            <!-- Diubah ke text-base -->
            <h3 class="text-white font-semibold text-base">Kontak Kami</h3>
            <!-- Diubah ke text-sm -->
            <div class="space-y-3 text-sm text-gray-400">
                <div class="flex items-start space-x-2.5">
                    <svg class="w-4 h-4 text-blue-400 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    <span>Jln. Sam Ratulangi No. 15 Penengahan Raya, Kedaton Bandar Lampung, 35112.</span>
                </div>
                <div class="flex items-center space-x-2.5">
                    <svg class="w-4 h-4 text-blue-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                    </svg>
                    <span>07217626359</span>
                </div>
                <div class="flex items-center space-x-2.5">
                    <svg class="w-4 h-4 text-blue-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                    <span>sales@pgncom.co.id</span>
                </div>
            </div>
        </div>

    </div>

    <!-- Garis Pembatas & Hak Cipta Bawah -->
    <div class="max-w-7xl mx-auto mt-12 pt-6 px-6 md:px-12 border-t border-blue-950 flex flex-col sm:flex-row items-center justify-between text-xs text-gray-500">
        <p>&copy; {{ date('Y') }} PT PGASCOM RO Lampung. All rights reserved.</p>
    </div>
</footer>