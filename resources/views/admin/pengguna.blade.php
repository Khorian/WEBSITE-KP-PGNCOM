<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Pengguna - PGN TELEKOM</title>
     <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/png">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>[x-cloak] { display: none !important; }</style>
</head>
<body class="bg-slate-100 font-sans antialiased text-slate-800" x-data="{ openModal: false }">

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
                    <a href="/admin/kontak" class="flex items-center space-x-3 px-3.5 py-2.5 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800/40 font-medium text-sm transition"><span>Pesan Masuk</span></a>
                    <a href="/admin/pengguna" class="flex items-center space-x-3 px-3.5 py-2.5 rounded-xl bg-[#1e293b] text-white font-semibold text-sm transition"><span>Kelola Pengguna</span></a>
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
        <main class="flex-1 p-8 overflow-y-auto relative">

            <div class="flex items-center justify-between mb-8">
                <div>
                    <h1 class="text-2xl font-bold text-slate-900">Kelola Pengguna</h1>
                    <p class="text-xs text-slate-500 mt-1">{{ count($users ?? []) }} Pengguna terdaftar</p>
                </div>
                <button @click="openModal = true" class="bg-[#0f6cbd] hover:bg-blue-700 text-white font-semibold text-xs px-4 py-2.5 rounded-lg shadow-sm flex items-center space-x-2 transition">
                    <span class="text-base leading-none">+</span>
                    <span>Tambah Pengguna Baru</span>
                </button>
            </div>

            @if(session('success'))
                <div class="mb-6 p-4 bg-emerald-50 border border-emerald-200 text-emerald-700 text-xs rounded-xl font-semibold">
                    {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div class="mb-6 p-4 bg-rose-50 border border-rose-200 text-rose-700 text-xs rounded-xl font-semibold">
                    {{ session('error') }}
                </div>
            @endif

            <!-- Filter Bar Form -->
            <form method="GET" action="{{ route('admin.pengguna') }}" class="bg-white rounded-2xl p-4 shadow-sm border border-slate-200/80 mb-6 flex items-center justify-between">
                <div class="flex items-center gap-3 flex-1">
                    <input type="text" name="search" value="{{ request('search') }}" placeholder="cari nama atau email..." class="px-4 py-2 bg-slate-50 border border-slate-200 rounded-xl text-xs text-slate-700 focus:outline-none focus:border-sky-500 w-72">
                    
                    @if(request('search'))
                        <a href="{{ route('admin.pengguna') }}" class="text-xs text-rose-500 hover:underline font-semibold">Reset Filter</a>
                    @endif
                </div>
            </form>

            <!-- Table Pengguna -->
            <div class="bg-white rounded-2xl border border-slate-200/80 shadow-sm overflow-hidden mb-6">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse text-xs">
                        <thead>
                            <tr class="bg-slate-50/70 border-b border-slate-200/80 text-slate-500 uppercase font-semibold text-[10px] tracking-wider">
                                <th class="p-4 w-12 text-center">NO</th>
                                <th class="p-4">NAMA PENGGUNA</th>
                                <th class="p-4">EMAIL</th>
                                <th class="p-4">TANGGAL DIBUAT</th>
                                <th class="p-4 text-center">AKSI</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 text-slate-700 font-medium">
                            @forelse ($users ?? [] as $index => $item)
                                <tr class="hover:bg-slate-50/80 transition">
                                    <td class="p-4 text-center font-bold text-slate-400">{{ $index + 1 }}</td>
                                    <td class="p-4 font-bold text-slate-900 flex items-center space-x-3">
                                        <div class="w-8 h-8 rounded-full bg-blue-100 text-blue-600 font-bold flex items-center justify-center text-xs shrink-0">
                                            {{ strtoupper(substr($item->name, 0, 1)) }}
                                        </div>
                                        <span>{{ $item->name }}</span>
                                        @if(auth()->user()->id == $item->id)
                                            <span class="px-2 py-0.5 bg-blue-50 text-blue-600 text-[9px] font-extrabold rounded-md">(Anda)</span>
                                        @endif
                                    </td>
                                    <td class="p-4 text-slate-500">{{ $item->email }}</td>
                                    <td class="p-4 text-slate-500">{{ $item->created_at ? $item->created_at->format('d M Y') : '-' }}</td>
                                    <td class="p-4 text-center">
                                        @if(auth()->user()->id != $item->id)
                                            <form action="{{ route('admin.pengguna.hapus', $item->id) }}" method="POST" class="inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus pengguna ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-slate-400 hover:text-rose-500 transition" title="Hapus Pengguna">
                                                    <svg class="w-4 h-4 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                                </button>
                                            </form>
                                        @else
                                            <span class="text-slate-300 text-[10px] font-bold">Aktif</span>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="p-8 text-center text-slate-400">Belum ada pengguna terdaftar.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </main>
    </div>

    <!-- Modal Form Tambah Pengguna Baru -->
    <div x-show="openModal" x-cloak class="fixed inset-0 z-50 flex items-center justify-center bg-slate-900/50 backdrop-blur-sm p-4">
        <div class="bg-white rounded-3xl p-6 w-full max-w-md shadow-2xl border border-slate-100">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-base font-bold text-slate-900">Tambah Pengguna Admin Baru</h3>
                <button @click="openModal = false" class="text-slate-400 hover:text-slate-600 font-bold text-lg">&times;</button>
            </div>

            <form action="{{ route('admin.pengguna.simpan') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Nama Lengkap</label>
                    <input type="text" name="name" required placeholder="Masukkan nama admin" class="w-full px-3.5 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-xs text-slate-800 focus:outline-none focus:border-blue-600">
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Alamat Email</label>
                    <input type="email" name="email" required placeholder="admin@domain.com" class="w-full px-3.5 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-xs text-slate-800 focus:outline-none focus:border-blue-600">
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Password</label>
                    <input type="password" name="password" required placeholder="Minimal 6 karakter" class="w-full px-3.5 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-xs text-slate-800 focus:outline-none focus:border-blue-600">
                </div>

                <div class="flex items-center justify-end space-x-2 pt-3">
                    <button type="button" @click="openModal = false" class="px-4 py-2.5 rounded-xl border border-slate-200 text-xs font-bold text-slate-600 hover:bg-slate-50 transition">Batal</button>
                    <button type="submit" class="px-5 py-2.5 rounded-xl bg-blue-600 hover:bg-blue-700 text-white text-xs font-bold transition">Simpan Pengguna</button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>