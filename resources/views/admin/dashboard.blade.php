<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - PGNCOM</title>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/png">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        [x-cloak] { display: none !important; }
    </style>
</head>
<body class="bg-slate-100 font-sans antialiased text-slate-800" x-data="dashboardManager()">

    <div class="flex min-h-screen">

        <!-- Sidebar Kiri -->
        <aside class="w-64 bg-[#0d1627] text-slate-300 flex flex-col justify-between shrink-0 min-h-screen">
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
                    <a href="/admin/dashboard" class="flex items-center space-x-3 px-3.5 py-2.5 rounded-xl bg-[#1e293b] text-white font-semibold text-sm transition">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/></svg>
                        <span>Dashboard</span>
                    </a>

                    <a href="/admin/profil" class="flex items-center space-x-3 px-3.5 py-2.5 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800/40 font-medium text-sm transition">
                        <svg class="w-5 h-5 opacity-70" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                        <span>Profil Perusahaan</span>
                    </a>

                    <a href="/admin/layanan" class="flex items-center space-x-3 px-3.5 py-2.5 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800/40 font-medium text-sm transition">
                        <svg class="w-5 h-5 opacity-70" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                        <span>Layanan</span>
                    </a>

                    <a href="/admin/berita" class="flex items-center space-x-3 px-3.5 py-2.5 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800/40 font-medium text-sm transition">
                        <svg class="w-5 h-5 opacity-70" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
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

            <!-- Profile Admin Footer -->
            <div class="p-4 border-t border-slate-800/80 flex items-center justify-between">
                <div class="flex items-center space-x-3">
                    <img class="w-9 h-9 rounded-full object-cover border border-slate-700" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=100&auto=format&fit=crop&q=80" alt="Admin Avatar">
                    <div>
                        <h4 class="text-xs font-bold text-white">Admin PGAS</h4>
                        <p class="text-[10px] text-slate-400">Super Admin</p>
                    </div>
                </div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="text-slate-400 hover:text-red-400 p-1 transition" title="Logout">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg>
                    </button>
                </form>
            </div>
        </aside>

        <!-- Main Content Area -->
        <main class="flex-1 p-8 overflow-y-auto">

            <!-- Top Header Bar -->
            <div class="flex items-start justify-between mb-8">
                <div>
                    <h1 class="text-2xl font-bold text-slate-900">Selamat Datang, Super Admin</h1>
                    <p class="text-sm text-slate-500 mt-0.5">Berikut ringkasan data website PGASCOM Regional Lampung.</p>
                </div>
                <!-- Date Pill Realtime/Dinamis -->
                <div class="flex items-center space-x-2 bg-white px-3.5 py-1.5 rounded-lg border border-slate-200 text-xs font-medium text-slate-600 shadow-sm">
                    <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    <span x-text="currentDate"></span>
                </div>
            </div>

            <!-- Summary Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                <!-- Card Total Berita -->
                <a href="/admin/berita" class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 flex items-center justify-between hover:shadow-md transition">
                    <div>
                        <p class="text-xs font-medium text-slate-500">Total berita</p>
                        <h3 class="text-3xl font-extrabold text-slate-800 my-2">5</h3>
                        <p class="text-xs text-emerald-500 font-medium flex items-center space-x-1">
                            <span>↗ +2</span>
                            <span class="text-slate-400 font-normal">bulan ini</span>
                        </p>
                    </div>
                    <div class="w-12 h-12 bg-amber-50 rounded-xl flex items-center justify-center text-amber-500">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                    </div>
                </a>

                <!-- Card Total Layanan -->
                <a href="/admin/layanan" class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 flex items-center justify-between hover:shadow-md transition">
                    <div>
                        <p class="text-xs font-medium text-slate-500">Total layanan</p>
                        <h3 class="text-3xl font-extrabold text-slate-800 my-2">8</h3>
                        <p class="text-xs text-emerald-500 font-medium flex items-center space-x-1">
                            <span>↗</span>
                            <span>aktif</span>
                        </p>
                    </div>
                    <div class="w-12 h-12 bg-sky-50 rounded-xl flex items-center justify-center text-sky-500">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                    </div>
                </a>
            </div>

            <!-- Table Section: Riwayat Pengeditan Info -->
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 mb-8">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-base font-bold text-slate-800">Riwayat Pengeditan info</h3>
                    <span class="text-xs text-slate-400" x-text="riwayatList.length + ' item tersimpan'"></span>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-left text-xs">
                        <thead>
                            <tr class="text-slate-400 border-b border-slate-100">
                                <th class="pb-3 font-semibold">Judul</th>
                                <th class="pb-3 font-semibold">Kategori</th>
                                <th class="pb-3 font-semibold">Penulis</th>
                                <th class="pb-3 font-semibold">Tanggal/Waktu</th>
                                <th class="pb-3 font-semibold">Status</th>
                                <th class="pb-3 font-semibold text-right">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-50 text-slate-700">
                            <template x-for="(item, index) in riwayatList" :key="item.id">
                                <tr class="hover:bg-slate-50/60 transition">
                                    <td class="py-3.5 font-medium max-w-xs truncate" x-text="item.judul"></td>
                                    <td class="py-3.5 text-slate-500" x-text="item.kategori"></td>
                                    <td class="py-3.5 text-slate-500" x-text="item.penulis"></td>
                                    <td class="py-3.5 text-slate-500" x-text="item.tanggal"></td>
                                    <td class="py-3.5">
                                        <span class="px-2.5 py-1 rounded-full text-[10px] font-medium"
                                              :class="{
                                                  'bg-emerald-50 text-emerald-600': item.status === 'Published' || item.status === 'Active',
                                                  'bg-slate-100 text-slate-600': item.status === 'Draft',
                                                  'bg-rose-50 text-rose-500': item.status === 'Archived'
                                              }"
                                              x-text="item.status"></span>
                                    </td>
                                    <td class="py-3.5 text-right space-x-2">
                                        <button @click="openEditModal(item.id)" class="text-slate-400 hover:text-blue-600 transition" title="Edit">
                                            <svg class="w-4 h-4 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 012.828 0L20 4.828a2 2 0 010 2.828l-8.586 8.586-3 1 1-3 8.586-8.586z"/></svg>
                                        </button>
                                        <button @click="deleteRiwayat(item.id)" class="text-slate-400 hover:text-red-500 transition" title="Hapus">
                                            <svg class="w-4 h-4 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                        </button>
                                    </td>
                                </tr>
                            </template>
                            <tr x-show="riwayatList.length === 0">
                                <td colspan="6" class="py-6 text-center text-slate-400">Belum ada riwayat pengeditan.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Bottom Section: Statistik -->
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100">
                <h3 class="text-base font-bold text-slate-800 text-center mb-6">Statistik</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-3xl mx-auto">
                    
                    <!-- Box Jumlah Pengunjung -->
                    <div class="border border-slate-100 bg-slate-50/50 rounded-2xl p-6 text-center">
                        <p class="text-xs font-semibold text-slate-600 mb-4">Jumlah pengunjung</p>
                        <div class="flex justify-center mb-2">
                            <svg class="w-10 h-10 text-sky-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                            </svg>
                        </div>
                        <h2 class="text-4xl font-extrabold text-slate-800 mb-4">20</h2>
                        <div class="text-[11px] text-slate-400 font-medium">
                            <p>Pengunjung hari ini</p>
                            <p class="text-emerald-500 font-bold mt-0.5">↗ +2 pengunjung</p>
                        </div>
                    </div>

                    <!-- Box Jumlah Pesan Pengunjung -->
                    <a href="/admin/kontak" class="border border-slate-100 bg-slate-50/50 rounded-2xl p-6 text-center block hover:border-sky-300 transition">
                        <p class="text-xs font-semibold text-slate-600 mb-4">Jumlah pesan pengunjung</p>
                        <div class="flex justify-center mb-2">
                            <svg class="w-10 h-10 text-sky-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                            </svg>
                        </div>
                        <h2 class="text-4xl font-extrabold text-slate-800 mb-4">8</h2>
                        <div class="text-[11px] text-slate-400 font-medium">
                            <p>Pesan Masuk</p>
                            <p class="text-emerald-500 font-bold mt-0.5">↗ +3 Baru</p>
                        </div>
                    </a>

                </div>
            </div>

            <!-- Modal Edit Riwayat Info -->
            <div x-show="showEditModal" x-cloak class="fixed inset-0 bg-slate-900/50 backdrop-blur-sm flex items-center justify-center z-50 p-4">
                <div class="bg-white rounded-2xl max-w-md w-full p-6 shadow-xl space-y-4">
                    <div class="flex items-center justify-between border-b border-slate-100 pb-3">
                        <h3 class="font-bold text-base text-slate-800">Edit Riwayat Info</h3>
                        <button @click="showEditModal = false" class="text-slate-400 hover:text-slate-600 text-lg font-bold">&times;</button>
                    </div>

                    <form @submit.prevent="saveEdit()" class="space-y-3">
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1">Judul</label>
                            <input type="text" x-model="editForm.judul" required class="w-full px-3.5 py-2 border border-slate-200 rounded-xl text-xs focus:outline-none focus:border-sky-500">
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1">Kategori</label>
                            <input type="text" x-model="editForm.kategori" required class="w-full px-3.5 py-2 border border-slate-200 rounded-xl text-xs focus:outline-none focus:border-sky-500">
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1">Status</label>
                            <select x-model="editForm.status" class="w-full px-3.5 py-2 border border-slate-200 rounded-xl text-xs focus:outline-none focus:border-sky-500">
                                <option value="Published">Published</option>
                                <option value="Active">Active</option>
                                <option value="Draft">Draft</option>
                                <option value="Archived">Archived</option>
                            </select>
                        </div>

                        <div class="flex justify-end space-x-2 pt-2">
                            <button type="button" @click="showEditModal = false" class="px-4 py-2 rounded-xl text-xs font-semibold text-slate-600 hover:bg-slate-100 transition">Batal</button>
                            <button type="submit" class="px-4 py-2 bg-[#0f6cbd] hover:bg-blue-700 text-white text-xs font-semibold rounded-xl transition">Simpan Perubahan</button>
                        </div>
                    </form>
                </div>
            </div>

        </main>
    </div>

    <!-- Script Alpine.js Logika Dashboard -->
    <script>
        function dashboardManager() {
            return {
                showEditModal: false,
                editId: null,
                currentDate: new Date().toLocaleDateString('en-GB', { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' }),
                editForm: { judul: '', kategori: '', status: 'Published' },

                riwayatList: [
                    { id: 1, judul: 'PGASCOM Strengthens Digital Infrastructure in Nusantara Capital', kategori: 'News', penulis: 'Siti Rahma', tanggal: '24 Oct 2023', status: 'Published' },
                    { id: 2, judul: 'Sumatera-Java Subsea Cable Fiber Optic Project Phase 4', kategori: 'Portfolio', penulis: 'Ahmad S.', tanggal: '22 Oct 2023', status: 'Published' },
                    { id: 3, judul: 'International IPLC (International Private Leased Circuit)', kategori: 'Services', penulis: 'Budi H.', tanggal: '19 Oct 2023', status: 'Active' },
                    { id: 4, judul: 'PGASCOM Career Day 2023 - Jakarta Office Openings', kategori: 'Careers', penulis: 'HR PGAS', tanggal: '15 Oct 2023', status: 'Draft' },
                    { id: 5, judul: 'New Cloud Core Infrastructure partnership with PGAS Telekomunikasi', kategori: 'News', penulis: 'Siti Rahma', tanggal: '11 Oct 2023', status: 'Archived' }
                ],

                openEditModal(id) {
                    const item = this.riwayatList.find(r => r.id === id);
                    if (item) {
                        this.editId = id;
                        this.editForm.judul = item.judul;
                        this.editForm.kategori = item.kategori;
                        this.editForm.status = item.status;
                        this.showEditModal = true;
                    }
                },

                saveEdit() {
                    const item = this.riwayatList.find(r => r.id === this.editId);
                    if (item) {
                        item.judul = this.editForm.judul;
                        item.kategori = this.editForm.kategori;
                        item.status = this.editForm.status;
                    }
                    this.showEditModal = false;
                },

                deleteRiwayat(id) {
                    if (confirm('Apakah Anda yakin ingin menghapus item riwayat ini?')) {
                        this.riwayatList = this.riwayatList.filter(r => r.id !== id);
                    }
                }
            }
        }
    </script>
</body>
</html>