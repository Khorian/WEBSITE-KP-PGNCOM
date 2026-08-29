<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - PGASCOM</title>
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
                    <a href="/admin/dashboard" class="flex items-center space-x-3 px-3.5 py-2.5 rounded-xl bg-[#1e293b] text-white font-semibold text-sm transition"><span>Dashboard</span></a>
                    <a href="/admin/profil" class="flex items-center space-x-3 px-3.5 py-2.5 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800/40 font-medium text-sm transition"><span>Profil Perusahaan</span></a>
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

        <!-- Main Content -->
        <main class="flex-1 p-8 overflow-y-auto">

            <!-- Header Title & Date Bar -->
            <div class="flex items-center justify-between mb-8">
                <div>
                    <h1 class="text-2xl font-bold text-slate-900">Selamat Datang, {{ auth()->user()->name ?? 'Super Admin' }}</h1>
                    <p class="text-xs text-slate-500 mt-1">Berikut ringkasan data website PGASCOM Regional Lampung.</p>
                </div>
                <div class="bg-white border border-slate-200 rounded-xl px-4 py-2 text-xs font-semibold text-slate-600 shadow-sm flex items-center space-x-2">
                    <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    <span>{{ date('l, d F Y') }}</span>
                </div>
            </div>

            <!-- Top Cards Summary -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                <!-- Total Berita Card -->
                <div class="bg-white rounded-2xl p-6 border border-slate-200/80 shadow-sm flex items-center justify-between">
                    <div>
                        <p class="text-xs font-semibold text-slate-400">Total berita</p>
                        <h2 class="text-3xl font-black text-slate-900 mt-2">{{ $totalBerita }}</h2>
                        <p class="text-[11px] font-bold text-emerald-600 mt-2 flex items-center space-x-1">
                            <span>&nearr; {{ $totalBerita }} artikel terpublikasi</span>
                        </p>
                    </div>
                    <div class="w-12 h-12 bg-amber-50 text-amber-500 rounded-2xl flex items-center justify-center">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/></svg>
                    </div>
                </div>

                <!-- Total Layanan Card -->
                <div class="bg-white rounded-2xl p-6 border border-slate-200/80 shadow-sm flex items-center justify-between">
                    <div>
                        <p class="text-xs font-semibold text-slate-400">Total layanan</p>
                        <h2 class="text-3xl font-black text-slate-900 mt-2">{{ $totalLayanan }}</h2>
                        <p class="text-[11px] font-bold text-sky-600 mt-2 flex items-center space-x-1">
                            <span>&nearr; {{ $totalLayanan }} aktif di publik</span>
                        </p>
                    </div>
                    <div class="w-12 h-12 bg-sky-50 text-sky-500 rounded-2xl flex items-center justify-center">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
                    </div>
                </div>
            </div>

            <!-- Table: Riwayat Pengeditan Info (Data Berita Terbaru Real-time) -->
            <div class="bg-white rounded-2xl border border-slate-200/80 shadow-sm overflow-hidden mb-8">
                <div class="p-6 border-b border-slate-100 flex items-center justify-between">
                    <h3 class="font-bold text-slate-900 text-sm">Riwayat Pengeditan info</h3>
                    <span class="text-xs text-slate-400 font-medium">{{ count($latestBerita) }} item tersimpan</span>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse text-xs">
                        <thead>
                            <tr class="bg-slate-50/70 border-b border-slate-200/80 text-slate-400 uppercase font-semibold text-[10px] tracking-wider">
                                <th class="p-4">JUDUL</th>
                                <th class="p-4">KATEGORI</th>
                                <th class="p-4">PENULIS</th>
                                <th class="p-4">TANGGAL/WAKTU</th>
                                <th class="p-4">STATUS</th>
                                <th class="p-4 text-center">AKSI</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 text-slate-700 font-medium">
                            @forelse ($latestBerita as $item)
                                <tr class="hover:bg-slate-50/80 transition">
                                    <td class="p-4 font-bold text-slate-900 max-w-xs truncate">{{ $item->judul }}</td>
                                    <td class="p-4 text-slate-500">{{ $item->kategori }}</td>
                                    <td class="p-4 text-slate-500">{{ $item->penulis ?? 'Admin PGAS' }}</td>
                                    <td class="p-4 text-slate-500">{{ $item->created_at ? $item->created_at->format('d M Y') : '-' }}</td>
                                    <td class="p-4">
                                        <span class="px-2.5 py-1 rounded-md text-[10px] font-bold {{ $item->status == 'Publikasi' ? 'bg-emerald-50 text-emerald-600' : 'bg-amber-50 text-amber-600' }}">
                                            {{ $item->status }}
                                        </span>
                                    </td>
                                    <td class="p-4 text-center space-x-2">
                                        <a href="{{ route('admin.berita') }}" class="text-slate-400 hover:text-sky-600 transition" title="Kelola di Berita">
                                            <svg class="w-4 h-4 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 210.3H3v-3.572L16.732 3.732z"/></svg>
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="p-8 text-center text-slate-400">Belum ada riwayat aktivitas berita.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Bottom Cards: Statistik Real-time -->
            <div class="bg-white rounded-2xl p-6 border border-slate-200/80 shadow-sm">
                <h3 class="text-center font-bold text-slate-900 text-sm mb-6">Statistik</h3>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Stat 1: Total Pengguna/Admin -->
                    <div class="bg-slate-50/60 rounded-2xl p-6 text-center border border-slate-100">
                        <p class="text-xs font-semibold text-slate-500 mb-3">Jumlah pengguna admin</p>
                        <div class="w-10 h-10 bg-sky-100 text-sky-600 rounded-full flex items-center justify-center mx-auto mb-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
                        </div>
                        <h2 class="text-3xl font-black text-slate-900">{{ $totalPengguna }}</h2>
                        <p class="text-[11px] font-bold text-sky-600 mt-2">Pengguna terdaftar</p>
                    </div>

                    <!-- Stat 2: Jumlah Pesan Masuk -->
                    <div class="bg-slate-50/60 rounded-2xl p-6 text-center border border-slate-100">
                        <p class="text-xs font-semibold text-slate-500 mb-3">Jumlah pesan pengunjung</p>
                        <div class="w-10 h-10 bg-emerald-100 text-emerald-600 rounded-full flex items-center justify-center mx-auto mb-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"/></svg>
                        </div>
                        <h2 class="text-3xl font-black text-slate-900">{{ $totalPesan }}</h2>
                        <p class="text-[11px] font-bold text-emerald-600 mt-2">+{{ $pesanBaru }} Pesan Belum Dibaca</p>
                    </div>
                </div>
            </div>

        </main>
    </div>

</body>
</html>