<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan - PGASCOM Regional Office Lampung</title>
    
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/png">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800 font-sans">

    <!-- Include Navbar -->
    @include('components.navbar')

    <!-- HERO BANNER LAYANAN -->
    <section class="bg-gradient-to-r from-[#0b1c3d] via-blue-700 to-blue-600 text-white py-16 px-6 md:px-12 relative overflow-hidden">
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

   <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
    @forelse ($layanans as $item)
        <div class="bg-white rounded-3xl p-6 border border-gray-100 shadow-sm hover:shadow-md transition flex flex-col justify-between">
            <div>
                <!-- Kategori di Atas Logo -->
                <span class="block text-[10px] font-bold text-blue-600 uppercase tracking-wider mb-3">
                    {{ $item->kategori }}
                </span>

                <!-- Logo / Ikon Layanan -->
                <div class="w-12 h-12 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center mb-4 overflow-hidden">
                    @if($item->ikon)
                        <img src="{{ asset($item->ikon) }}" class="w-full h-full object-cover">
                    @else
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    @endif
                </div>

                <!-- Nama & Deskripsi -->
                <h3 class="text-lg font-bold text-gray-900 mb-2">{{ $item->nama_layanan }}</h3>
                <p class="text-xs font-semibold text-slate-700 mb-2">{{ $item->deskripsi_singkat }}</p>

                @if($item->deskripsi_lengkap)
                    <p class="text-xs text-gray-500 leading-relaxed line-clamp-4">{{ $item->deskripsi_lengkap }}</p>
                @endif
            </div>

            <div class="mt-6 pt-4 border-t border-slate-100">
                <a href="#" class="text-xs font-bold text-blue-600 hover:underline inline-flex items-center space-x-1">
                    <span>Learn More</span>
                    <span>&rsaquo;</span>
                </a>
            </div>
        </div>
    @empty
        <div class="col-span-3 text-center py-12 text-gray-400">
            Belum ada layanan yang dipublikasikan saat ini.
        </div>
    @endforelse
</div>
                <a href="#" class="inline-flex items-center text-blue-600 text-xs font-semibold hover:text-blue-700">
                    Learn More 
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                </a>
            </div>

        </div>
    </section>

    <!-- Include Footer -->
    @include('components.footer')

</body>
</html>