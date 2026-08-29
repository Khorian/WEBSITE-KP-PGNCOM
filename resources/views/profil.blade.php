<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Perusahaan - PGASCOM Regional Office Lampung</title>
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/png">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800 font-sans">

    @include('components.navbar')

    <!-- HERO BANNER -->
    <section class="bg-gradient-to-r from-[#0b1c3d] via-blue-700 to-blue-600 text-white py-16 px-6 md:px-12 relative overflow-hidden">
        <div class="max-w-7xl mx-auto space-y-3">
            <div class="flex items-center space-x-2 text-xs md:text-sm text-gray-300">
                <a href="{{ route('home') }}" class="hover:text-white transition-colors">Beranda</a>
                <span>&gt;</span>
                <span class="text-cyan-400 font-semibold">Profil Perusahaan</span>
            </div>
            <h1 class="text-3xl md:text-5xl font-bold tracking-tight">Profil Regional Lampung</h1>
            <p class="text-xs md:text-sm text-gray-200 max-w-2xl leading-relaxed">
                Mengenal lebih dekat PT PGAS Telekomunikasi Nusantara Regional Office Lampung.
            </p>
        </div>
    </section>

    <!-- SEJARAH SINGKAT -->
    <section class="py-16 px-6 md:px-12 max-w-7xl mx-auto">
        <div class="text-center mb-12">
            <span class="text-xs font-bold text-blue-600 uppercase tracking-widest">SEJARAH SINGKAT</span>
            <h2 class="text-2xl md:text-3xl font-black text-gray-900 mt-1">{{ $profil->judul_sejarah }}</h2>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
            <div class="lg:col-span-7 space-y-4 text-xs md:text-sm text-gray-600 leading-relaxed">
                <p>{{ $profil->sejarah_p1 }}</p>
                <p>{{ $profil->sejarah_p2 }}</p>
            </div>
            <div class="lg:col-span-5 bg-white p-6 rounded-3xl border border-gray-100 shadow-sm flex items-center justify-center">
                <img src="{{ $profil->gambar_sejarah ? asset($profil->gambar_sejarah) : asset('images/logo-pgascom.png') }}" class="max-h-36 w-auto object-contain" alt="Logo PGNCOM">
            </div>
        </div>
    </section>

    <!-- VISI -->
    <section class="py-12 px-6 md:px-12 max-w-5xl mx-auto">
        <div class="bg-blue-600 text-white p-10 md:p-14 rounded-3xl shadow-lg text-center space-y-4">
            <span class="text-xs font-bold tracking-widest uppercase text-blue-200">VISI</span>
            <p class="text-base md:text-xl font-medium italic leading-relaxed max-w-3xl mx-auto">
                "{{ $profil->visi }}"
            </p>
        </div>
    </section>

    <!-- MISI -->
    <section class="py-12 px-6 md:px-12 max-w-7xl mx-auto">
        <div class="text-center mb-10">
            <h2 class="text-2xl font-black text-gray-900">Misi</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @foreach($profil->misi ?? [] as $index => $misiItem)
                <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm flex items-start space-x-4">
                    <span class="w-8 h-8 rounded-xl bg-blue-50 text-blue-600 font-bold flex items-center justify-center text-xs shrink-0">
                        {{ sprintf('%02d', $index + 1) }}
                    </span>
                    <p class="text-xs md:text-sm text-gray-700 font-medium leading-relaxed mt-1">{{ $misiItem }}</p>
                </div>
            @endforeach
        </div>
    </section>

    <!-- STRUKTUR ORGANISASI / TIM TANGGAP DARURAT -->
    <section class="py-16 px-6 md:px-12 max-w-7xl mx-auto">
        <div class="text-center mb-10">
            <span class="text-xs font-bold text-blue-600 uppercase tracking-widest">STRUKTUR ORGANISASI</span>
            <h2 class="text-2xl font-black text-gray-900 mt-1">Tim Tanggap Darurat</h2>
            <p class="text-xs text-gray-500 mt-0.5">PT PGAS TELEKOMUNIKASI NUSANTARA REGIONAL OFFICE – LAMPUNG</p>
        </div>

        <div class="max-w-md mx-auto mb-8 bg-slate-900 text-white rounded-2xl text-center overflow-hidden shadow-md">
            <div class="bg-slate-800 py-2 text-[10px] font-bold uppercase tracking-wider text-slate-300">MANAGER RO LAMPUNG</div>
            <div class="py-3 text-xs font-bold text-white">{{ $profil->manager_nama }}</div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4">
            @php
                $teams = [
                    'TIM PEMADAM API' => $profil->tim_tanggap['pemadam'] ?? [],
                    'TIM EVAKUASI' => $profil->tim_tanggap['evakuasi'] ?? [],
                    'TIM DOCUMENT' => $profil->tim_tanggap['document'] ?? [],
                    'TIM HURU HARA' => $profil->tim_tanggap['huru_hara'] ?? [],
                    'TIM P3K' => $profil->tim_tanggap['p3k'] ?? [],
                ];
            @endphp

            @foreach($teams as $teamName => $members)
                <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden shadow-sm">
                    <div class="bg-[#0b1c3d] text-white py-2 px-3 text-center text-[10px] font-bold tracking-wider uppercase">
                        {{ $teamName }}
                    </div>
                    <div class="p-3 text-center space-y-1 bg-slate-50/50 min-h-[90px] flex flex-col justify-center">
                        @foreach($members as $m)
                            @if(!empty($m))
                                <p class="text-xs font-semibold text-gray-700">{{ $m }}</p>
                            @endif
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- NILAI PERUSAHAAN -->
    <section class="py-16 px-6 md:px-12 max-w-7xl mx-auto">
        <div class="text-center mb-10">
            <span class="text-xs font-bold text-blue-600 uppercase tracking-widest">NILAI PERUSAHAAN</span>
            <h2 class="text-2xl font-black text-gray-900 mt-1">Nilai yang Kami Junjung Tinggi</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach($profil->nilai_perusahaan ?? [] as $val)
                <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm space-y-2">
                    <h3 class="text-sm font-bold text-gray-900">{{ $val['judul'] ?? '' }}</h3>
                    <p class="text-xs text-gray-500 leading-relaxed">{{ $val['deskripsi'] ?? '' }}</p>
                </div>
            @endforeach
        </div>
    </section>

    @include('components.footer')

</body>
</html>