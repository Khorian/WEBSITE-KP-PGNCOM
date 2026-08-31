<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Masuk & Kelola Kontak - PGNCOM</title>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/png">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-100 font-sans antialiased text-slate-800">

    <div class="flex min-h-screen">

        <!-- Sidebar Kiri -->
        <aside class="w-64 bg-[#0b1324] text-slate-300 flex flex-col justify-between shrink-0 min-h-screen">
            <div>
                <div class="p-5 flex items-center space-x-3 border-b border-slate-800/40">
                    <div class="bg-white px-2 py-1.5 rounded-lg shadow-sm flex items-center justify-center shrink-0">
                        <img src="{{ asset('images/logo-pgascom.png') }}" alt="Logo PGNCOM" class="h-6 w-auto object-contain">
                    </div>
                    <div>
                        <h2 class="font-black text-base tracking-wide leading-none text-white">PGNCOM</h2>
                        <p class="text-[9px] text-[#3b82f6] tracking-wider font-bold mt-1">REGIONAL OFFICE LAMPUNG</p>
                    </div>
                </div>

                <nav class="px-3 py-4 space-y-1">
                    <a href="/admin/dashboard" class="flex items-center space-x-3 px-3.5 py-2.5 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800/40 font-medium text-sm transition"><span>Dashboard</span></a>
                    <a href="/admin/profil" class="flex items-center space-x-3 px-3.5 py-2.5 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800/40 font-medium text-sm transition"><span>Profil Perusahaan</span></a>
                    <a href="/admin/layanan" class="flex items-center space-x-3 px-3.5 py-2.5 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800/40 font-medium text-sm transition"><span>Layanan</span></a>
                    <a href="/admin/berita" class="flex items-center space-x-3 px-3.5 py-2.5 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800/40 font-medium text-sm transition"><span>Berita dan kegiatan</span></a>
                    <a href="/admin/kontak" class="flex items-center space-x-3 px-3.5 py-2.5 rounded-xl bg-[#1e293b] text-white font-semibold text-sm transition"><span>Pesan Masuk</span></a>
                    <a href="/admin/pengguna" class="flex items-center space-x-3 px-3.5 py-2.5 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800/40 font-medium text-sm transition"><span>Kelola pengguna</span></a>
                </nav>
            </div>

            <div class="p-4 border-t border-slate-800/60 flex items-center justify-between">
    @php
        // Mengambil nama dari user yang sedang login, atau fallback ke 'Quesha Azarine'
        $userName = auth()->user()->name ?? 'Quesha Azarine';
        
        // Mengambil inisial huruf depan dari nama (misal: Quesha Azarine -> QA)
        $words = explode(' ', trim($userName));
        $initials = strtoupper(substr($words[0], 0, 1));
        if (count($words) > 1) {
            $initials .= strtoupper(substr(end($words), 0, 1));
        }
    @endphp

    <!-- Link ke Beranda Utama dengan Avatar Inisial Dinamis -->
    <!-- Favicon <a href="{{ route('home') }}" class="flex items-center space-x-3 group hover:opacity-80 transition" title="Kembali ke Beranda Utama">
        <!-- Bulatan Avatar Inisial -->
        <div class="w-9 h-9 rounded-full bg-blue-600 text-white font-bold text-xs flex items-center justify-center border border-blue-400 group-hover:border-sky-300 transition shrink-0">
            {{ $initials }}
        </div>
        
        <!-- Informasi Nama & Role -->
        <div class="overflow-hidden">
            <h4 class="text-xs font-bold text-white group-hover:text-sky-400 transition truncate">{{ $userName }}</h4>
            <p class="text-[10px] text-slate-400"> Admin</p>
        </div>
    </a>

    <!-- Tombol Logout -->
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="text-slate-400 hover:text-rose-400 p-1 transition" title="Keluar / Logout">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
            </svg>
        </button>
    </form>
                </form>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-8 overflow-y-auto space-y-8">

            <!-- BAGIAN 1: FORM EDIT INFORMASI KONTAK USER -->
            <div class="bg-white rounded-2xl border border-slate-200/80 shadow-sm p-6">
                <div class="mb-4">
                    <h2 class="text-lg font-bold text-slate-900">Kelola Informasi Kontak Public</h2>
                    <p class="text-xs text-slate-500 mt-0.5">Ubah detail email, nomor telepon, jam operasional, dan alamat yang tampil di halaman user `/kontak`.</p>
                </div>

                @if(session('success_info'))
                    <div class="mb-4 p-3 bg-emerald-50 border border-emerald-200 text-emerald-700 text-xs rounded-xl font-semibold">
                        {{ session('success_info') }}
                    </div>
                @endif

                <form action="{{ route('admin.kontak.info_update') }}" method="POST" class="space-y-4">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1">Email Kontak</label>
                            <input type="email" name="email" value="{{ old('email', $info->email) }}" required class="w-full px-3.5 py-2 bg-slate-50 border border-slate-200 rounded-xl text-xs text-slate-800 focus:outline-none focus:border-blue-600">
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1">Nomor Telepon</label>
                            <input type="text" name="telepon" value="{{ old('telepon', $info->telepon) }}" required class="w-full px-3.5 py-2 bg-slate-50 border border-slate-200 rounded-xl text-xs text-slate-800 focus:outline-none focus:border-blue-600">
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1">Jam Operasional (Senin – Kamis)</label>
                            <input type="text" name="jam_senin_kamis" value="{{ old('jam_senin_kamis', $info->jam_senin_kamis) }}" required class="w-full px-3.5 py-2 bg-slate-50 border border-slate-200 rounded-xl text-xs text-slate-800 focus:outline-none focus:border-blue-600">
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1">Jam Operasional (Jum'at)</label>
                            <input type="text" name="jam_jumat" value="{{ old('jam_jumat', $info->jam_jumat) }}" required class="w-full px-3.5 py-2 bg-slate-50 border border-slate-200 rounded-xl text-xs text-slate-800 focus:outline-none focus:border-blue-600">
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Alamat Kantor</label>
                        <input type="text" name="alamat" value="{{ old('alamat', $info->alamat) }}" required class="w-full px-3.5 py-2 bg-slate-50 border border-slate-200 rounded-xl text-xs text-slate-800 focus:outline-none focus:border-blue-600">
                    </div>

                    <div class="flex justify-end pt-2">
                        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold text-xs px-5 py-2.5 rounded-xl shadow-sm transition">
                            Simpan Perubahan Kontak
                        </button>
                    </div>
                </form>
            </div>

            <!-- BAGIAN 2: TABEL PESAN MASUK -->
            <div>
                <div class="flex items-center justify-between mb-4">
                    <div>
                        <h1 class="text-xl font-bold text-slate-900">Pesan Masuk</h1>
                        <p class="text-xs text-slate-500 mt-1">{{ count($pesan ?? []) }} Pesan diterima</p>
                    </div>
                </div>

                @if(session('success'))
                    <div class="mb-4 p-3 bg-emerald-50 border border-emerald-200 text-emerald-700 text-xs rounded-xl font-semibold">
                        {{ session('success') }}
                    </div>
                @endif

                <!-- Filter Bar Form -->
                <form method="GET" action="{{ route('admin.kontak') }}" class="bg-white rounded-2xl p-4 shadow-sm border border-slate-200/80 mb-6 flex items-center justify-between">
                    <div class="flex items-center gap-3 flex-1">
                        <input type="text" name="search" value="{{ request('search') }}" placeholder="cari nama, email, subjek..." class="px-4 py-2 bg-slate-50 border border-slate-200 rounded-xl text-xs text-slate-700 focus:outline-none focus:border-sky-500 w-72">
                        
                        <select name="status" onchange="this.form.submit()" class="px-4 py-2 bg-slate-50 border border-slate-200 rounded-xl text-xs text-slate-700 focus:outline-none focus:border-sky-500">
                            <option value="semua">Status: Semua</option>
                            <option value="Belum Dibaca" {{ request('status') == 'Belum Dibaca' ? 'selected' : '' }}>Belum Dibaca</option>
                            <option value="Sudah Dibaca" {{ request('status') == 'Sudah Dibaca' ? 'selected' : '' }}>Sudah Dibaca</option>
                        </select>
                    </div>
                </form>

                <!-- Table Pesan -->
                <div class="bg-white rounded-2xl border border-slate-200/80 shadow-sm overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse text-xs">
                            <thead>
                                <tr class="bg-slate-50/70 border-b border-slate-200/80 text-slate-500 uppercase font-semibold text-[10px] tracking-wider">
                                    <th class="p-4">PENGIRIM</th>
                                    <th class="p-4">SUBJEK</th>
                                    <th class="p-4">PESAN</th>
                                    <th class="p-4">TANGGAL</th>
                                    <th class="p-4">STATUS</th>
                                    <th class="p-4 text-center">AKSI</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100 text-slate-700 font-medium">
                                @forelse ($pesan ?? [] as $item)
                                    <tr class="hover:bg-slate-50/80 transition">
                                        <td class="p-4">
                                            <div class="font-bold text-slate-900">{{ $item->nama }}</div>
                                            <div class="text-[10px] text-slate-400">{{ $item->email }}</div>
                                        </td>
                                        <td class="p-4 font-bold text-slate-800">{{ $item->subjek }}</td>
                                        <td class="p-4 text-slate-600 max-w-xs leading-relaxed">{{ $item->pesan }}</td>
                                        <td class="p-4 text-slate-500">{{ $item->created_at ? $item->created_at->format('d M Y H:i') : '-' }}</td>
                                        <td class="p-4">
                                            <span class="px-2.5 py-1 rounded-md text-[10px] font-bold {{ $item->status == 'Belum Dibaca' ? 'bg-amber-50 text-amber-700 border border-amber-200' : 'bg-slate-100 text-slate-600' }}">
                                                {{ $item->status }}
                                            </span>
                                        </td>
                                        <td class="p-4 text-center space-x-2">
                                            @if($item->status == 'Belum Dibaca')
                                                <form action="{{ route('admin.kontak.baca', $item->id) }}" method="POST" class="inline">
                                                    @csrf
                                                    <button type="submit" class="text-blue-600 hover:underline font-bold text-[11px]">Tandai Dibaca</button>
                                                </form>
                                            @endif
                                            <form action="{{ route('admin.kontak.hapus', $item->id) }}" method="POST" class="inline" onsubmit="return confirm('Hapus pesan ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-slate-400 hover:text-rose-500 transition">
                                                    <svg class="w-4 h-4 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="p-8 text-center text-slate-400">Belum ada pesan masuk.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </main>
    </div>

</body>
</html>