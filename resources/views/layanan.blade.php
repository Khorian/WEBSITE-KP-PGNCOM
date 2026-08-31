<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan - PGNCOM Regional Office Lampung</title>
    
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/png">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Alpine.js untuk Modal Pop-up Interaktif -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>[x-cloak] { display: none !important; }</style>
</head>
<body class="bg-gray-50 text-gray-800 font-sans" x-data="{ openModal: false, activeLayanan: {} }">

    <!-- Include Navbar -->
    @include('components.navbar')

    <!-- HERO BANNER LAYANAN -->
    <section  class="bg-blue-600 text-white py-16 px-6 md:px-12 relative overflow-hidden">
        <div class="max-w-7xl mx-auto space-y-3">
            <!-- Breadcrumb -->
            <div class="flex items-center space-x-2 text-xs md:text-sm text-gray-300">
                <a href="{{ route('home') }}" class="hover:text-white transition-colors">Beranda</a>
                <span>&gt;</span>
                <span class="text-cyan-400 font-semibold">Layanan</span>
            </div>

            <!-- Judul & Subjudul -->
            <h1 class="text-3xl md:text-5xl font-bold tracking-tight">Layanan Kami</h1>
            <p class="text-xs md:text-sm text-gray-200 max-w-2xl leading-relaxed">
                Solusi telekomunikasi dan ICT terlengkap untuk kebutuhan bisnis Anda di wilayah Lampung.
            </p>
        </div>
    </section>

    <!-- GRID CARDS LAYANAN -->
    <section class="py-16 px-6 md:px-12 max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @forelse ($layanans as $item)
                @php
                    $namaLayanan = $item->nama_layanan ?? $item->nama ?? 'Layanan';
                    $namaSingkat = strtoupper(explode(' ', trim($namaLayanan))[0] ?? 'LAYANAN');
                    $kategoriLayanan = $item->kategori ?? 'Produk dan Layanan';
                    $deskripsiSingkat = $item->deskripsi_singkat ?? $item->deskripsi ?? '';
                    $deskripsiLengkap = $item->deskripsi_lengkap ?? $item->detail ?? $deskripsiSingkat;
                    $gambarIkon = $item->ikon ? asset($item->ikon) : null;
                @endphp

                <div class="bg-white rounded-3xl p-7 border border-gray-100 shadow-sm hover:shadow-md transition flex flex-col justify-between">
                    <div class="space-y-4">
                        <!-- Kategori di Atas Logo -->
                        <span class="block text-[10px] font-bold text-blue-600 uppercase tracking-wider">
                            {{ $kategoriLayanan }}
                        </span>

                        <!-- Logo / Ikon Layanan -->
                        <div class="w-12 h-12 bg-blue-50/80 border border-blue-100 rounded-2xl flex items-center justify-center overflow-hidden p-1.5">
                            @if($gambarIkon)
                                <img src="{{ $gambarIkon }}" class="w-full h-full object-contain" alt="{{ $namaSingkat }}">
                            @else
                                <span class="text-blue-700 font-extrabold text-xs">
                                    {{ strtoupper(substr($namaSingkat, 0, 2)) }}
                                </span>
                            @endif
                        </div>

                        <!-- Nama & Deskripsi -->
                        <h3 class="text-xl font-extrabold text-gray-900 tracking-tight">{{ $namaSingkat }}</h3>
                        <p class="text-xs font-semibold text-slate-700 -mt-2">{{ $deskripsiSingkat }}</p>

                        @if($deskripsiLengkap)
                            <p class="text-xs text-gray-500 leading-relaxed line-clamp-4">{{ $deskripsiLengkap }}</p>
                        @endif
                    </div>

                    <!-- Tombol Learn More Interaktif -->
                    <div class="mt-6 pt-4 border-t border-slate-100">
                        <button type="button" 
                                @click="activeLayanan = { 
                                    nama: '{{ addslashes($namaSingkat) }}', 
                                    subjudul: '{{ addslashes($deskripsiSingkat) }}', 
                                    kategori: '{{ addslashes($kategoriLayanan) }}', 
                                    deskripsi: '{{ addslashes($deskripsiLengkap) }}', 
                                    ikon: '{{ $gambarIkon }}' 
                                }; openModal = true" 
                                class="text-xs font-bold text-blue-600 hover:text-blue-800 transition inline-flex items-center space-x-1 focus:outline-none cursor-pointer">
                            <span>Learn More</span>
                            <span class="text-sm leading-none">&rsaquo;</span>
                        </button>
                    </div>
                </div>
            @empty
                <div class="col-span-3 text-center py-16 bg-white rounded-3xl border border-gray-100 text-xs text-gray-400">
                    Belum ada layanan yang dipublikasikan saat ini.
                </div>
            @endforelse
        </div>
    </section>

    <!-- MODAL POP-UP DETAIL LAYANAN -->
    <div x-show="openModal" x-cloak class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
            
            <!-- Backdrop Overlay -->
            <div x-show="openModal" 
                 x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" 
                 x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" 
                 @click="openModal = false" 
                 class="fixed inset-0 bg-slate-900/60 backdrop-blur-sm transition-opacity" aria-hidden="true"></div>

            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

            <!-- Modal Content Card -->
            <div x-show="openModal" 
                 x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" 
                 x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
                 class="inline-block align-bottom bg-white rounded-3xl text-left overflow-hidden shadow-2xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full p-6 md:p-8">
                
                <div class="flex justify-between items-start mb-6">
                    <div class="flex items-center space-x-3">
                        <template x-if="activeLayanan.ikon">
                            <img :src="activeLayanan.ikon" class="w-12 h-12 object-contain p-1.5 bg-blue-50 border border-blue-100 rounded-2xl" alt="Logo">
                        </template>
                        <div>
                            <span class="text-[10px] font-bold text-blue-600 uppercase tracking-wider block" x-text="activeLayanan.kategori"></span>
                            <h3 class="text-xl font-black text-gray-900" x-text="activeLayanan.nama"></h3>
                        </div>
                    </div>
                    <button @click="openModal = false" class="text-gray-400 hover:text-gray-600 focus:outline-none p-1">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                    </button>
                </div>

                <div class="space-y-3">
                    <h4 class="text-sm font-bold text-slate-800" x-text="activeLayanan.subjudul"></h4>
                    <p class="text-xs md:text-sm text-gray-600 leading-relaxed whitespace-pre-line" x-text="activeLayanan.deskripsi"></p>
                </div>

                <div class="mt-8 pt-4 border-t border-gray-100 flex justify-end">
                    <button @click="openModal = false" class="bg-blue-600 hover:bg-blue-700 text-white font-bold text-xs px-6 py-2.5 rounded-xl transition shadow-md">
                        Tutup
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Footer -->
    @include('components.footer')

</body>
</html>