<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Profil Perusahaan - PGAS TELEKOM</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-100 font-sans antialiased text-slate-800">

    <div class="flex min-h-screen">

        <!-- Sidebar Kiri -->
        <aside class="w-64 bg-[#0b1324] text-slate-300 flex flex-col justify-between shrink-0 min-h-screen">
            <div>
                <div class="p-5 flex items-center space-x-3 border-b border-slate-800/40">
                    <div class="bg-white px-2 py-1.5 rounded-lg shadow-sm flex items-center justify-center shrink-0">
                        <img src="{{ asset('images/logo-pgascom.png') }}" alt="Logo PGASCOM" class="h-6 w-auto object-contain">
                    </div>
                    <div>
                        <h2 class="font-black text-base tracking-wide leading-none text-white">PGASCOM</h2>
                        <p class="text-[9px] text-[#3b82f6] tracking-wider font-bold mt-1">REGIONAL OFFICE LAMPUNG</p>
                    </div>
                </div>

                <nav class="px-3 py-4 space-y-1">
                    <a href="/admin/dashboard" class="flex items-center space-x-3 px-3.5 py-2.5 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800/40 font-medium text-sm transition"><span>Dashboard</span></a>
                    <a href="/admin/profil" class="flex items-center space-x-3 px-3.5 py-2.5 rounded-xl bg-[#1e293b] text-white font-semibold text-sm transition"><span>Profil Perusahaan</span></a>
                    <a href="/admin/layanan" class="flex items-center space-x-3 px-3.5 py-2.5 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800/40 font-medium text-sm transition"><span>Layanan</span></a>
                    <a href="/admin/berita" class="flex items-center space-x-3 px-3.5 py-2.5 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800/40 font-medium text-sm transition"><span>Berita dan kegiatan</span></a>
                    <a href="/admin/kontak" class="flex items-center space-x-3 px-3.5 py-2.5 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800/40 font-medium text-sm transition"><span>Pesan Masuk</span></a>
                    <a href="/admin/pengguna" class="flex items-center space-x-3 px-3.5 py-2.5 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800/40 font-medium text-sm transition"><span>Kelola pengguna</span></a>
                </nav>
            </div>

            <div class="p-4 border-t border-slate-800/60 flex items-center justify-between">
                <div class="flex items-center space-x-3">
                    <img class="w-9 h-9 rounded-full object-cover border border-slate-700" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=100&auto=format&fit=crop&q=80" alt="Admin">
                    <div>
                        <h4 class="text-xs font-bold text-white">{{ auth()->user()->name ?? 'Admin PGAS' }}</h4>
                        <p class="text-[10px] text-slate-400">Super Admin</p>
                    </div>
                </div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="text-slate-400 hover:text-rose-400 p-1 transition"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg></button>
                </form>
            </div>
        </aside>

        <!-- Main Content Form Edit Profil -->
        <main class="flex-1 p-8 overflow-y-auto">

            <div class="flex items-center justify-between mb-8">
                <div>
                    <h1 class="text-2xl font-bold text-slate-900">Kelola Profil Perusahaan</h1>
                    <p class="text-xs text-slate-500 mt-1">Ubah konten Sejarah, Visi, Misi, Struktur Organisasi, dan Nilai Perusahaan.</p>
                </div>
            </div>

            @if(session('success'))
                <div class="mb-6 p-4 bg-emerald-50 border border-emerald-200 text-emerald-700 text-xs rounded-xl font-semibold">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('admin.profil.simpan') }}" method="POST" enctype="multipart/form-data" class="space-y-8">
                @csrf

                <!-- SECTION 1: SEJARAH -->
                <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-sm space-y-4">
                    <h3 class="text-sm font-bold text-slate-900 border-b pb-3">1. Sejarah Singkat</h3>

                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Judul Sejarah</label>
                        <input type="text" name="judul_sejarah" value="{{ old('judul_sejarah', $profil->judul_sejarah) }}" class="w-full px-3.5 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-xs text-slate-800 focus:outline-none focus:border-blue-600">
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Paragraf Pertama</label>
                        <textarea name="sejarah_p1" rows="3" class="w-full p-3.5 bg-slate-50 border border-slate-200 rounded-xl text-xs text-slate-800 focus:outline-none focus:border-blue-600 resize-none">{{ old('sejarah_p1', $profil->sejarah_p1) }}</textarea>
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Paragraf Kedua</label>
                        <textarea name="sejarah_p2" rows="3" class="w-full p-3.5 bg-slate-50 border border-slate-200 rounded-xl text-xs text-slate-800 focus:outline-none focus:border-blue-600 resize-none">{{ old('sejarah_p2', $profil->sejarah_p2) }}</textarea>
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Gambar Logo Sejarah (Opsional)</label>
                        <input type="file" name="gambar_sejarah" class="text-xs text-slate-500">
                    </div>
                </div>

                <!-- SECTION 2: VISI & MISI -->
                <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-sm space-y-4">
                    <h3 class="text-sm font-bold text-slate-900 border-b pb-3">2. Visi & Misi</h3>

                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Pernyataan Visi</label>
                        <textarea name="visi" rows="2" class="w-full p-3.5 bg-slate-50 border border-slate-200 rounded-xl text-xs text-slate-800 focus:outline-none focus:border-blue-600 resize-none">{{ old('visi', $profil->visi) }}</textarea>
                    </div>

                    <div class="space-y-2">
                        <label class="block text-xs font-bold text-slate-700">Daftar Poin Misi</label>
                        @php $misiList = $profil->misi ?? []; @endphp
                        @for($i = 0; $i < 5; $i++)
                            <input type="text" name="misi[]" value="{{ $misiList[$i] ?? '' }}" placeholder="Misi {{ $i+1 }}" class="w-full px-3.5 py-2 bg-slate-50 border border-slate-200 rounded-xl text-xs text-slate-800 focus:outline-none focus:border-blue-600 mb-2">
                        @endfor
                    </div>
                </div>

                <!-- SECTION 3: STRUKTUR ORGANISASI -->
                <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-sm space-y-4">
                    <h3 class="text-sm font-bold text-slate-900 border-b pb-3">3. Tim Tanggap Darurat</h3>

                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Manager RO Lampung</label>
                        <input type="text" name="manager_nama" value="{{ old('manager_nama', $profil->manager_nama) }}" class="w-full px-3.5 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-xs text-slate-800 focus:outline-none focus:border-blue-600">
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 pt-2">
                        <!-- Tim Pemadam -->
                        <div class="bg-slate-50 p-3.5 rounded-xl border border-slate-200">
                            <label class="block text-xs font-bold text-slate-800 mb-2">Tim Pemadam API</label>
                            @for($k=0; $k<3; $k++)
                                <input type="text" name="tim_tanggap[pemadam][]" value="{{ $profil->tim_tanggap['pemadam'][$k] ?? '' }}" class="w-full px-3 py-1.5 bg-white border rounded-lg text-xs mb-1.5">
                            @endfor
                        </div>

                        <!-- Tim Evakuasi -->
                        <div class="bg-slate-50 p-3.5 rounded-xl border border-slate-200">
                            <label class="block text-xs font-bold text-slate-800 mb-2">Tim Evakuasi</label>
                            @for($k=0; $k<3; $k++)
                                <input type="text" name="tim_tanggap[evakuasi][]" value="{{ $profil->tim_tanggap['evakuasi'][$k] ?? '' }}" class="w-full px-3 py-1.5 bg-white border rounded-lg text-xs mb-1.5">
                            @endfor
                        </div>

                        <!-- Tim Document -->
                        <div class="bg-slate-50 p-3.5 rounded-xl border border-slate-200">
                            <label class="block text-xs font-bold text-slate-800 mb-2">Tim Document</label>
                            @for($k=0; $k<3; $k++)
                                <input type="text" name="tim_tanggap[document][]" value="{{ $profil->tim_tanggap['document'][$k] ?? '' }}" class="w-full px-3 py-1.5 bg-white border rounded-lg text-xs mb-1.5">
                            @endfor
                        </div>

                        <!-- Tim Huru Hara -->
                        <div class="bg-slate-50 p-3.5 rounded-xl border border-slate-200">
                            <label class="block text-xs font-bold text-slate-800 mb-2">Tim Huru Hara</label>
                            @for($k=0; $k<3; $k++)
                                <input type="text" name="tim_tanggap[huru_hara][]" value="{{ $profil->tim_tanggap['huru_hara'][$k] ?? '' }}" class="w-full px-3 py-1.5 bg-white border rounded-lg text-xs mb-1.5">
                            @endfor
                        </div>

                        <!-- Tim P3K -->
                        <div class="bg-slate-50 p-3.5 rounded-xl border border-slate-200">
                            <label class="block text-xs font-bold text-slate-800 mb-2">Tim P3K</label>
                            @for($k=0; $k<3; $k++)
                                <input type="text" name="tim_tanggap[p3k][]" value="{{ $profil->tim_tanggap['p3k'][$k] ?? '' }}" class="w-full px-3 py-1.5 bg-white border rounded-lg text-xs mb-1.5">
                            @endfor
                        </div>
                    </div>
                </div>

                <div class="flex justify-end pt-4">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold text-xs px-8 py-3.5 rounded-xl shadow-md transition">
                        Simpan Perubahan Profil
                    </button>
                </div>

            </form>

        </main>
    </div>

</body>
</html>