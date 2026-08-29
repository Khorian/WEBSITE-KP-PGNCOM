<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Berita - PGAS TELEKOM</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>[x-cloak] { display: none !important; }</style>
</head>
<body class="bg-slate-100 font-sans antialiased text-slate-800" 
      x-data="beritaAdmin({{ json_encode($beritaList->pluck('status', 'id')) }})">

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
                    <a href="/admin/profil" class="flex items-center space-x-3 px-3.5 py-2.5 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800/40 font-medium text-sm transition"><span>Profil Perusahaan</span></a>
                    <a href="/admin/layanan" class="flex items-center space-x-3 px-3.5 py-2.5 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800/40 font-medium text-sm transition"><span>Layanan</span></a>
                    <a href="/admin/berita" class="flex items-center space-x-3 px-3.5 py-2.5 rounded-xl bg-[#1e293b] text-white font-semibold text-sm transition"><span>Berita dan kegiatan</span></a>
                    <a href="/admin/kontak" class="flex items-center space-x-3 px-3.5 py-2.5 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800/40 font-medium text-sm transition"><span>Kontak Kami</span></a>
                    <a href="/admin/pengguna" class="flex items-center space-x-3 px-3.5 py-2.5 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800/40 font-medium text-sm transition"><span>Kelola pengguna</span></a>
                </nav>
            </div>

            <div class="p-4 border-t border-slate-800/60 flex items-center justify-between">
                <div class="flex items-center space-x-3">
                    <img class="w-9 h-9 rounded-full object-cover border border-slate-700" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=100&auto=format&fit=crop&q=80" alt="Admin">
                    <div>
                        <h4 class="text-xs font-bold text-white">Admin PGAS</h4>
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
        <main class="flex-1 p-8 overflow-y-auto pb-28 relative">

            <div class="flex items-center justify-between mb-8">
                <div>
                    <h1 class="text-2xl font-bold text-slate-900">Kelola Berita</h1>
                    <p class="text-xs text-slate-500 mt-1">{{ count($beritaList) }} Berita tersimpan</p>
                </div>
                <a href="/admin/berita/tambah" class="bg-[#0f6cbd] hover:bg-blue-700 text-white font-semibold text-xs px-4 py-2.5 rounded-lg shadow-sm flex items-center space-x-2 transition">
                    <span class="text-base leading-none">+</span>
                    <span>tambahkan artikel baru</span>
                </a>
            </div>

            <!-- Pesan Sukses -->
            @if(session('success'))
                <div class="mb-6 p-4 bg-emerald-50 border border-emerald-200 text-emerald-700 text-xs rounded-xl font-semibold">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Filter Bar Form -->
            <form method="GET" action="{{ route('admin.berita') }}" class="bg-white rounded-2xl p-4 shadow-sm border border-slate-200/80 mb-6 flex flex-wrap items-center justify-between gap-4">
                <div class="flex flex-wrap items-center gap-3 flex-1">
                    <input type="text" name="search" value="{{ request('search') }}" placeholder="cari artikel..." class="px-4 py-2 bg-slate-50 border border-slate-200 rounded-xl text-xs text-slate-700 focus:outline-none focus:border-sky-500">
                    
                    <select name="kategori" onchange="this.form.submit()" class="px-3 py-2 bg-slate-50 border border-slate-200 rounded-lg text-xs text-slate-700 focus:outline-none">
                        <option value="">Kategori: Semua</option>
                        <option value="Infrastruktur" {{ request('kategori') == 'Infrastruktur' ? 'selected' : '' }}>Infrastruktur</option>
                        <option value="Kegiatan" {{ request('kategori') == 'Kegiatan' ? 'selected' : '' }}>Kegiatan</option>
                        <option value="Produk" {{ request('kategori') == 'Produk' ? 'selected' : '' }}>Produk</option>
                        <option value="Sertifikasi" {{ request('kategori') == 'Sertifikasi' ? 'selected' : '' }}>Sertifikasi</option>
                        <option value="Penghargaan" {{ request('kategori') == 'Penghargaan' ? 'selected' : '' }}>Penghargaan</option>
                    </select>

                    <select name="status" onchange="this.form.submit()" class="px-3 py-2 bg-slate-50 border border-slate-200 rounded-lg text-xs text-slate-700 focus:outline-none">
                        <option value="">Status: semua</option>
                        <option value="Publikasi" {{ request('status') == 'Publikasi' ? 'selected' : '' }}>Publikasi</option>
                        <option value="Draf" {{ request('status') == 'Draf' ? 'selected' : '' }}>Draf</option>
                        <option value="Arsip" {{ request('status') == 'Arsip' ? 'selected' : '' }}>Arsip</option>
                    </select>

                    <input type="date" name="tanggal" value="{{ request('tanggal') }}" onchange="this.form.submit()" class="px-3 py-1.5 bg-slate-50 border border-slate-200 rounded-lg text-xs text-slate-700">
                    
                    @if(request('search') || request('kategori') || request('status') || request('tanggal'))
                        <a href="{{ route('admin.berita') }}" class="text-xs text-rose-500 hover:underline font-semibold">Reset Filter</a>
                    @endif
                </div>
            </form>

            <!-- Table Berita -->
            <div class="bg-white rounded-2xl border border-slate-200/80 shadow-sm overflow-hidden mb-6">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse text-xs">
                        <thead>
                            <tr class="bg-slate-50/70 border-b border-slate-200/80 text-slate-500 uppercase font-semibold text-[10px] tracking-wider">
                                <th class="p-4 w-10 text-center">
                                    <input type="checkbox" @change="toggleSelectAll($event)" class="rounded border-slate-300 text-sky-600 cursor-pointer">
                                </th>
                                <th class="p-4 w-16">GAMBAR</th>
                                <th class="p-4">JUDUL ARTIKEL</th>
                                <th class="p-4">KATEGORI</th>
                                <th class="p-4">PENULIS</th>
                                <th class="p-4">TANGGAL PUBLIKASI</th>
                                <th class="p-4">STATUS</th>
                                <th class="p-4 text-center">PENONTON</th>
                                <th class="p-4 text-center">AKSI</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 text-slate-700 font-medium">
                            @forelse ($beritaList as $item)
                                <tr class="hover:bg-slate-50/80 transition">
                                    <td class="p-4 text-center">
                                        <input type="checkbox" value="{{ $item->id }}" x-model="selectedItems" class="rounded border-slate-300 text-sky-600 cursor-pointer">
                                    </td>
                                    <td class="p-4">
                                        <img src="{{ $item->gambar ? asset($item->gambar) : 'https://images.unsplash.com/photo-1544197150-b99a580bb7a8?w=100&auto=format&fit=crop&q=80' }}" class="w-12 h-8 rounded object-cover" alt="Thumb">
                                    </td>
                                    <td class="p-4 font-bold text-slate-900 max-w-xs truncate">{{ $item->judul }}</td>
                                    <td class="p-4 text-slate-500">{{ $item->kategori }}</td>
                                    <td class="p-4 text-slate-500">{{ $item->penulis }}</td>
                                    <td class="p-4 text-slate-500">{{ $item->created_at->format('d M Y') }}</td>
                                    <td class="p-4">
                                        <span class="px-2.5 py-1 rounded-md text-[10px] font-bold {{ $item->status == 'Publikasi' ? 'bg-emerald-50 text-emerald-600' : ($item->status == 'Draf' ? 'bg-amber-50 text-amber-600' : 'bg-slate-100 text-slate-500') }}">
                                            {{ $item->status }}
                                        </span>
                                    </td>
                                    <td class="p-4 text-center text-slate-500">{{ number_format($item->penonton) }}</td>
                                    <td class="p-4 text-center space-x-2">
                                        <form action="{{ route('admin.berita.hapus', $item->id) }}" method="POST" class="inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus artikel ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-slate-400 hover:text-rose-500 transition" title="Hapus">
                                                <svg class="w-4 h-4 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="9" class="p-8 text-center text-slate-400">Belum ada berita tersimpan.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Floating Batch Action Bar Dinamis -->
            <form id="batchForm" method="POST" action="{{ route('admin.berita.batch') }}">
                @csrf
                <input type="hidden" name="ids" :value="selectedItems.join(',')">
                <input type="hidden" name="action" x-ref="batchActionInput">

                <div x-show="selectedItems.length > 0" x-cloak
                     class="fixed bottom-6 left-1/2 transform -translate-x-1/2 bg-[#0b1324] text-white px-5 py-3 rounded-2xl shadow-xl flex items-center space-x-6 z-50">
                    
                    <div class="flex items-center space-x-2.5">
                        <span class="w-6 h-6 rounded-full bg-[#00a3e0] text-white text-xs font-bold flex items-center justify-center" x-text="selectedItems.length"></span>
                        <span class="text-xs font-medium text-slate-200">Artikel dipilih</span>
                    </div>

                    <div class="flex items-center space-x-2">
                        <!-- Tombol Berganti Secara Real-time -->
                        <button type="button" x-show="isUnpublishedSelected()" @click="submitBatch('publish')" class="bg-emerald-600 hover:bg-emerald-500 text-white font-medium text-xs px-3.5 py-2 rounded-lg transition cursor-pointer">
                            Publikasikan
                        </button>

                        <button type="button" x-show="!isUnpublishedSelected()" @click="submitBatch('unpublish')" class="bg-slate-800 hover:bg-slate-700 text-slate-300 font-medium text-xs px-3.5 py-2 rounded-lg transition cursor-pointer">
                            batalkan publikasi
                        </button>

                        <button type="button" @click="submitBatch('archive')" class="bg-slate-800 hover:bg-slate-700 text-slate-300 font-medium text-xs px-3.5 py-2 rounded-lg transition cursor-pointer">
                            Arsip
                        </button>

                        <button type="button" @click="if(confirm('Apakah Anda yakin ingin menghapus artikel terpilih?')) submitBatch('delete')" class="bg-red-500 hover:bg-red-600 text-white font-medium text-xs px-3.5 py-2 rounded-lg transition cursor-pointer">
                            Hapus item dipilih
                        </button>
                    </div>
                </div>
            </form>

        </main>
    </div>

    <!-- Script Logika Alpine.js -->
    <script>
        function beritaAdmin(statusMap) {
            return {
                selectedItems: [],
                statusMap: statusMap || {},
                toggleSelectAll(e) {
                    const checkboxes = document.querySelectorAll('tbody input[type="checkbox"]');
                    this.selectedItems = [];
                    if (e.target.checked) {
                        checkboxes.forEach(cb => {
                            cb.checked = true;
                            this.selectedItems.push(String(cb.value));
                        });
                    } else {
                        checkboxes.forEach(cb => cb.checked = false);
                    }
                },
                isUnpublishedSelected() {
                    if (this.selectedItems.length === 0) return false;
                    // Cek apakah item yang dicentang berstatus Draf atau Arsip
                    return this.selectedItems.some(id => {
                        const status = this.statusMap[id];
                        return status === 'Draf' || status === 'Arsip';
                    });
                },
                submitBatch(actionType) {
                    this.$refs.batchActionInput.value = actionType;
                    document.getElementById('batchForm').submit();
                }
            }
        }
    </script>
</body>
</html>