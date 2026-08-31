<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Berita - PGNCOM</title>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/png">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        [x-cloak] { display: none !important; }
    </style>
</head>
<body class="bg-slate-100 font-sans antialiased text-slate-800" x-data="beritaManager()">

    <div class="flex min-h-screen">

        <!-- Sidebar Kiri -->
        <aside class="w-64 bg-[#0b1324] text-slate-300 flex flex-col justify-between shrink-0 min-h-screen">
            <div>
                <!-- Brand Header / Logo -->
                <div class="p-5 flex items-center space-x-3 border-b border-slate-800/40">
                    <div class="bg-white px-2 py-1.5 rounded-lg shadow-sm flex items-center justify-center shrink-0">
                        <img src="{{ asset('images/logo-pgascom.png') }}" alt="Logo PGASCOM" class="h-6 w-auto object-contain">
                    </div>
                    <div>
                        <h2 class="font-black text-base tracking-wide leading-none text-white">PGASCOM</h2>
                        <p class="text-[9px] text-[#3b82f6] tracking-wider font-bold mt-1">REGIONAL OFFICE LAMPUNG</p>
                    </div>
                </div>

                <!-- Navigation Menu -->
                <nav class="px-3 py-4 space-y-1">
                    <a href="/admin/dashboard" class="flex items-center space-x-3 px-3.5 py-2.5 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800/40 font-medium text-sm transition">
                        <svg class="w-5 h-5 opacity-70" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/></svg>
                        <span>Dashboard</span>
                    </a>

                    <!-- Profil Perusahaan -->
<a href="/admin/profil" class="flex items-center space-x-3 px-3.5 py-2.5 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800/40 font-medium text-sm transition">
    <svg class="w-5 h-5 opacity-70" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
    </svg>
    <span>Profil Perusahaan</span>
</a>

                    <a href="/admin/layanan" class="flex items-center space-x-3 px-3.5 py-2.5 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800/40 font-medium text-sm transition">
                        <svg class="w-5 h-5 opacity-70" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                        <span>Layanan</span>
                    </a>

                    <a href="/admin/berita" class="flex items-center space-x-3 px-3.5 py-2.5 rounded-xl bg-[#1e293b] text-white font-semibold text-sm transition">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                        <span>Berita dan kegiatan</span>
                    </a>

                    <a href="/admin/kontak" class="flex items-center space-x-3 px-3.5 py-2.5 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800/40 font-medium text-sm transition">
                        <svg class="w-5 h-5 opacity-70" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        <span>Kontak Kami</span>
                    </a>

                    <a href="/admin/pengguna" class="flex items-center space-x-3 px-3.5 py-2.5 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800/40 font-medium text-sm transition">
                        <svg class="w-5 h-5 opacity-70" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
                        <span>Kelola pengguna</span>
                    </a>
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
                    <button type="submit" class="text-slate-400 hover:text-rose-400 p-1 transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg>
                    </button>
                </form>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-8 overflow-y-auto pb-28 relative">

            <!-- Title Section -->
            <div class="flex items-center justify-between mb-8">
                <div>
                    <h1 class="text-2xl font-bold text-slate-900">Kelola Berita</h1>
                    <p class="text-xs text-slate-500 mt-1"><span x-text="beritaList.length"></span> Berita tersimpan</p>
                </div>
                <a href="/admin/berita/tambah" class="bg-[#0f6cbd] hover:bg-blue-700 text-white font-semibold text-xs px-4 py-2.5 rounded-lg shadow-sm flex items-center space-x-2 transition">
                    <span class="text-base leading-none">+</span>
                    <span>tambahkan artikel baru</span>
                </a>
            </div>

            <!-- Filter Bar Interaktif -->
            <div class="bg-white rounded-2xl p-4 shadow-sm border border-slate-200/80 mb-6 flex flex-wrap items-center justify-between gap-4">
                <div class="flex flex-wrap items-center gap-3 flex-1">
                    
                    <!-- Search Input -->
                    <div class="relative min-w-[220px]">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-slate-400">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                        </div>
                        <input type="text" x-model="searchQuery" placeholder="cari artikel..." class="w-full pl-10 pr-4 py-2 bg-slate-50 border border-slate-200 rounded-xl text-xs text-slate-700 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:bg-white transition-all">
                    </div>

                    <!-- Filter Kategori -->
                    <select x-model="selectedKategori" class="px-3 py-2 bg-slate-50 border border-slate-200 rounded-lg text-xs text-slate-700 focus:outline-none focus:border-sky-500">
                        <option value="">Kategori: Semua</option>
                        <option value="Infrastruktur">Infrastruktur</option>
                        <option value="Kegiatan">Kegiatan</option>
                        <option value="Produk">Produk</option>
                        <option value="Sertifikasi">Sertifikasi</option>
                        <option value="Penghargaan">Penghargaan</option>
                    </select>

                    <!-- Filter Status -->
                    <select x-model="selectedStatus" class="px-3 py-2 bg-slate-50 border border-slate-200 rounded-lg text-xs text-slate-700 focus:outline-none focus:border-sky-500">
                        <option value="">Status: semua</option>
                        <option value="Publikasi">Publikasi</option>
                        <option value="Draf">Draf</option>
                        <option value="Arsip">Arsip</option>
                    </select>

                    <!-- Filter Tanggal -->
                    <input type="date" x-model="selectedDate" class="px-3 py-1.5 bg-slate-50 border border-slate-200 rounded-lg text-xs text-slate-700 focus:outline-none">
                    
                    <!-- Reset Filter Button -->
                    <button x-show="searchQuery || selectedKategori || selectedStatus || selectedDate" @click="resetFilters()" class="text-xs text-rose-500 hover:underline font-semibold">
                        Reset Filter
                    </button>
                </div>

                <!-- Export CSV -->
                <button @click="exportCSV()" class="px-3.5 py-2 border border-slate-200 rounded-lg text-xs font-medium text-slate-700 hover:bg-slate-50 transition flex items-center space-x-2">
                    <svg class="w-4 h-4 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                    <span>Export CSV</span>
                </button>
            </div>

            <!-- Table Berita -->
            <div class="bg-white rounded-2xl border border-slate-200/80 shadow-sm overflow-hidden mb-6">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse text-xs">
                        <thead>
                            <tr class="bg-slate-50/70 border-b border-slate-200/80 text-slate-500 uppercase font-semibold text-[10px] tracking-wider">
                                <th class="p-4 w-10 text-center">
                                    <input type="checkbox" @change="toggleSelectAll($event)" :checked="isAllSelected" class="rounded border-slate-300 text-sky-600 focus:ring-sky-500 cursor-pointer">
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
                            <template x-for="(item, index) in filteredBerita" :key="item.id">
                                <tr class="hover:bg-slate-50/80 transition">
                                    <td class="p-4 text-center">
                                        <input type="checkbox" :value="item.id" x-model="selectedItems" class="rounded border-slate-300 text-sky-600 focus:ring-sky-500 cursor-pointer">
                                    </td>
                                    <td class="p-4"><img :src="item.image" class="w-12 h-8 rounded object-cover" :alt="item.title"></td>
                                    <td class="p-4 font-bold text-slate-900 max-w-xs truncate" x-text="item.title"></td>
                                    <td class="p-4 text-slate-500" x-text="item.kategori"></td>
                                    <td class="p-4 text-slate-500" x-text="item.penulis"></td>
                                    <td class="p-4 text-slate-500" x-text="item.tanggal"></td>
                                    <td class="p-4">
                                        <span class="px-2.5 py-1 rounded-md text-[10px] font-bold"
                                              :class="{
                                                  'bg-emerald-50 text-emerald-600': item.status === 'Publikasi',
                                                  'bg-amber-50 text-amber-600': item.status === 'Draf',
                                                  'bg-slate-100 text-slate-500': item.status === 'Arsip'
                                              }"
                                              x-text="item.status"></span>
                                    </td>
                                    <td class="p-4 text-center text-slate-500" x-text="item.penonton"></td>
                                    <td class="p-4 text-center space-x-2">
                                        <button @click="openEditModal(item.id)" class="text-slate-400 hover:text-sky-600 transition">
                                            <svg class="w-4 h-4 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 012.828 0L20 4.828a2 2 0 010 2.828l-8.586 8.586-3 1 1-3 8.586-8.586z"/></svg>
                                        </button>
                                        <button @click="deleteSingleItem(item.id)" class="text-slate-400 hover:text-rose-500 transition">
                                            <svg class="w-4 h-4 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                        </button>
                                    </td>
                                </tr>
                            </template>
                            <tr x-show="filteredBerita.length === 0">
                                <td colspan="9" class="p-8 text-center text-slate-400">Tidak ada berita yang sesuai dengan filter.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="p-4 border-t border-slate-100 flex flex-wrap items-center justify-between gap-4 text-xs text-slate-500">
                    <p>Lihat 1-<span x-text="filteredBerita.length"></span> dari <span x-text="beritaList.length"></span> hasil</p>
                    <div class="flex items-center space-x-1">
                        <button class="px-3 py-1.5 rounded-lg border border-slate-200 text-slate-400 font-medium cursor-not-allowed">Sebelumnya</button>
                        <button class="w-7 h-7 rounded-lg bg-[#0f6cbd] text-white font-bold flex items-center justify-center">1</button>
                        <button class="px-3 py-1.5 rounded-lg border border-slate-200 text-slate-400 font-medium cursor-not-allowed">Selanjutnya</button>
                    </div>
                </div>
            </div>

            <!-- Floating Batch Action Bar -->
            <div x-show="selectedItems.length > 0" 
                 x-transition:enter="transition ease-out duration-200"
                 x-transition:enter-start="translate-y-10 opacity-0"
                 x-transition:enter-end="translate-y-0 opacity-100"
                 x-transition:leave="transition ease-in duration-150"
                 x-transition:leave-start="translate-y-0 opacity-100"
                 x-transition:leave-end="translate-y-10 opacity-0"
                 x-cloak
                 class="fixed bottom-6 left-1/2 transform -translate-x-1/2 bg-[#0b1324] text-white px-5 py-3 rounded-2xl shadow-xl flex items-center space-x-6 z-50">
                
                <div class="flex items-center space-x-2.5">
                    <span class="w-6 h-6 rounded-full bg-[#00a3e0] text-white text-xs font-bold flex items-center justify-center" x-text="selectedItems.length"></span>
                    <span class="text-xs font-medium text-slate-200">Artikel dipilih</span>
                </div>

                <div class="flex items-center space-x-2">
                    <button @click="batchUnpublish()" class="bg-slate-800 hover:bg-slate-700 text-slate-300 font-medium text-xs px-3.5 py-2 rounded-lg flex items-center space-x-1.5 transition">
                        <span>batalkan publikasi</span>
                    </button>
                    <button @click="batchArchive()" class="bg-slate-800 hover:bg-slate-700 text-slate-300 font-medium text-xs px-3.5 py-2 rounded-lg flex items-center space-x-1.5 transition">
                        <span>Arsip</span>
                    </button>
                    <button @click="batchDelete()" class="bg-red-500 hover:bg-red-600 text-white font-medium text-xs px-3.5 py-2 rounded-lg flex items-center space-x-1.5 transition">
                        <span>Hapus item dipilih</span>
                    </button>
                </div>
            </div>

            <!-- Modal Edit Berita -->
            <div x-show="showEditModal" x-cloak class="fixed inset-0 bg-slate-900/50 backdrop-blur-sm flex items-center justify-center z-50 p-4">
                <div class="bg-white rounded-2xl max-w-md w-full p-6 shadow-xl space-y-4">
                    <div class="flex items-center justify-between border-b border-slate-100 pb-3">
                        <h3 class="font-bold text-base text-slate-800">Edit Artikel</h3>
                        <button @click="showEditModal = false" class="text-slate-400 hover:text-slate-600 text-lg font-bold">&times;</button>
                    </div>
                    <div class="space-y-3">
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1">Judul Artikel</label>
                            <input type="text" x-model="editForm.title" class="w-full px-3.5 py-2 border border-slate-200 rounded-xl text-xs focus:outline-none focus:border-sky-500">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1">Kategori</label>
                            <select x-model="editForm.kategori" class="w-full px-3.5 py-2 border border-slate-200 rounded-xl text-xs focus:outline-none focus:border-sky-500">
                                <option value="Infrastruktur">Infrastruktur</option>
                                <option value="Kegiatan">Kegiatan</option>
                                <option value="Produk">Produk</option>
                                <option value="Sertifikasi">Sertifikasi</option>
                                <option value="Penghargaan">Penghargaan</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1">Status</label>
                            <select x-model="editForm.status" class="w-full px-3.5 py-2 border border-slate-200 rounded-xl text-xs focus:outline-none focus:border-sky-500">
                                <option value="Publikasi">Publikasi</option>
                                <option value="Draf">Draf</option>
                                <option value="Arsip">Arsip</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex justify-end space-x-2 pt-2">
                        <button @click="showEditModal = false" class="px-4 py-2 rounded-xl text-xs font-semibold text-slate-600 hover:bg-slate-100 transition">Batal</button>
                        <button @click="saveEdit()" class="px-4 py-2 bg-[#0f6cbd] hover:bg-blue-700 text-white text-xs font-semibold rounded-xl transition">Simpan Perubahan</button>
                    </div>
                </div>
            </div>

        </main>
    </div>

    <!-- Script Alpine.js Logika Berita Interaktif -->
    <script>
        function beritaManager() {
            return {
                searchQuery: '',
                selectedKategori: '',
                selectedStatus: '',
                selectedDate: '',
                selectedItems: [1, 2], // Default mencentang 2 item pertama
                showEditModal: false,
                editId: null,
                editForm: { title: '', kategori: '', status: '' },
                
                beritaList: [
                    { id: 1, title: 'PGAS Telkom Lampung Berhasil Tingkatkan Kapasitas Jaringan...', kategori: 'Infrastruktur', penulis: 'Admin PGAS', tanggal: '24 Juli 2026', status: 'Publikasi', penonton: '1,240', image: 'https://images.unsplash.com/photo-1544197150-b99a580bb7a8?w=100&auto=format&fit=crop&q=80' },
                    { id: 2, title: 'Workshop Keamanan Siber untuk Mitra Bisnis Regional Lampung', kategori: 'Kegiatan', penulis: 'Tim Keamanan', tanggal: '18 Juli 2026', status: 'Publikasi', penonton: '849', image: 'https://images.unsplash.com/photo-1518770660439-4636190af475?w=100&auto=format&fit=crop&q=80' },
                    { id: 3, title: 'Peluncuran Layanan Internet Corporate Generasi Terbaru...', kategori: 'Produk', penulis: 'Humas PGAS', tanggal: '10 Juli 2026', status: 'Publikasi', penonton: '1,520', image: 'https://images.unsplash.com/photo-1451187580459-43490279c0fa?w=100&auto=format&fit=crop&q=80' },
                    { id: 4, title: 'Sertifikasi ISO 27001 untuk Keamanan Sistem Informasi', kategori: 'Sertifikasi', penulis: 'Super Admin', tanggal: '05 Juli 2026', status: 'Publikasi', penonton: '678', image: 'https://images.unsplash.com/photo-1563986768609-322da13575f3?w=100&auto=format&fit=crop&q=80' },
                    { id: 5, title: 'Penghargaan Pelayanan Terbaik dari Asosiasi Telekomunikasi...', kategori: 'Penghargaan', penulis: 'Humas PGAS', tanggal: '20 Juni 2026', status: 'Publikasi', penonton: '2,105', image: 'https://images.unsplash.com/photo-1507525428034-b723cf961d3e?w=100&auto=format&fit=crop&q=80' }
                ],

                get filteredBerita() {
                    return this.beritaList.filter(item => {
                        const matchSearch = item.title.toLowerCase().includes(this.searchQuery.toLowerCase()) || 
                                           item.penulis.toLowerCase().includes(this.searchQuery.toLowerCase());
                        const matchKategori = !this.selectedKategori || item.kategori === this.selectedKategori;
                        const matchStatus = !this.selectedStatus || item.status === this.selectedStatus;
                        return matchSearch && matchKategori && matchStatus;
                    });
                },

                get isAllSelected() {
                    return this.filteredBerita.length > 0 && this.filteredBerita.every(item => this.selectedItems.map(Number).includes(Number(item.id)));
                },

                toggleSelectAll(e) {
                    if (e.target.checked) {
                        this.selectedItems = this.filteredBerita.map(item => item.id);
                    } else {
                        this.selectedItems = [];
                    }
                },

                resetFilters() {
                    this.searchQuery = '';
                    this.selectedKategori = '';
                    this.selectedStatus = '';
                    this.selectedDate = '';
                },

                deleteSingleItem(id) {
                    if (confirm('Apakah Anda yakin ingin menghapus artikel ini?')) {
                        this.beritaList = this.beritaList.filter(item => item.id !== id);
                        this.selectedItems = this.selectedItems.filter(itemId => Number(itemId) !== Number(id));
                    }
                },

                openEditModal(id) {
                    const item = this.beritaList.find(b => b.id === id);
                    if (item) {
                        this.editId = id;
                        this.editForm.title = item.title;
                        this.editForm.kategori = item.kategori;
                        this.editForm.status = item.status;
                        this.showEditModal = true;
                    }
                },

                saveEdit() {
                    const item = this.beritaList.find(b => b.id === this.editId);
                    if (item) {
                        item.title = this.editForm.title;
                        item.kategori = this.editForm.kategori;
                        item.status = this.editForm.status;
                    }
                    this.showEditModal = false;
                },

                batchDelete() {
                    if (this.selectedItems.length === 0) return;
                    if (confirm(`Apakah Anda yakin ingin menghapus ${this.selectedItems.length} artikel yang dipilih?`)) {
                        const selectedNumeric = this.selectedItems.map(Number);
                        this.beritaList = this.beritaList.filter(item => !selectedNumeric.includes(Number(item.id)));
                        this.selectedItems = [];
                    }
                },

                batchUnpublish() {
                    const selectedNumeric = this.selectedItems.map(Number);
                    this.beritaList.forEach(item => {
                        if (selectedNumeric.includes(Number(item.id))) {
                            item.status = 'Draf';
                        }
                    });
                    alert(`${this.selectedItems.length} artikel berhasil diubah statusnya menjadi Draf.`);
                    this.selectedItems = [];
                },

                batchArchive() {
                    const selectedNumeric = this.selectedItems.map(Number);
                    this.beritaList.forEach(item => {
                        if (selectedNumeric.includes(Number(item.id))) {
                            item.status = 'Arsip';
                        }
                    });
                    alert(`${this.selectedItems.length} artikel berhasil diarsipkan.`);
                    this.selectedItems = [];
                },

                exportCSV() {
                    let csvContent = "data:text/csv;charset=utf-8,ID,Judul,Kategori,Penulis,Tanggal,Status\n";
                    this.filteredBerita.forEach(item => {
                        csvContent += `${item.id},"${item.title}",${item.kategori},${item.penulis},${item.tanggal},${item.status}\n`;
                    });
                    const encodedUri = encodeURI(csvContent);
                    const link = document.createElement("a");
                    link.setAttribute("href", encodedUri);
                    link.setAttribute("download", "data_berita_pgascom.csv");
                    document.body.appendChild(link);
                    link.click();
                    document.body.removeChild(link);
                }
            }
        }
    </script>
</body>
</html>