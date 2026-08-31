<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Layanan - PGNCOM</title>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/png">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        [x-cloak] { display: none !important; }
    </style>
</head>
<body class="bg-slate-100 font-sans antialiased text-slate-800" x-data="layananManager()">

    <div class="flex min-h-screen">

        <!-- Sidebar Kiri (Gelap) -->
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
                        <svg class="w-5 h-5 opacity-70" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/></svg>
                        <span>Dashboard</span>
                    </a>

                    <!-- Profil Perusahaan -->
<a href="/admin/profil" class="flex items-center space-x-3 px-3.5 py-2.5 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800/40 font-medium text-sm transition">
    <svg class="w-5 h-5 opacity-70" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
    </svg>
    <span>Profil Perusahaan</span>
</a>
                    <a href="/admin/layanan" class="flex items-center space-x-3 px-3.5 py-2.5 rounded-xl bg-[#1e293b] text-white font-semibold text-sm transition">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
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
            <div class="p-4 border-t border-slate-800/60 flex items-center justify-between">
                <div class="flex items-center space-x-3">
                    <img class="w-9 h-9 rounded-full object-cover border border-slate-700" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=100&auto=format&fit=crop&q=80" alt="Admin Avatar">
                    <div>
                        <h4 class="text-xs font-bold text-white">Admin PGAS</h4>
                        <p class="text-[10px] text-slate-400">Super Admin</p>
                    </div>
                </div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="text-slate-400 hover:text-rose-400 p-1 transition" title="Logout">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg>
                    </button>
                </form>
            </div>
        </aside>

        <!-- Main Content Area -->
        <main class="flex-1 p-8 overflow-y-auto pb-28 relative">

            <!-- Top Bar -->
            <div class="flex items-center justify-between mb-8">
                <div>
                    <h1 class="text-2xl font-bold text-slate-900">Kelola Layanan</h1>
                    <p class="text-xs text-slate-500 mt-1"><span x-text="layananList.length"></span> Layanan tersimpan</p>
                </div>
                <a href="/admin/layanan/tambah" class="bg-[#0f6cbd] hover:bg-blue-700 text-white font-semibold text-xs px-4 py-2.5 rounded-lg shadow-sm flex items-center space-x-2 transition">
                    <span class="text-base leading-none">+</span>
                    <span>Tambahkan Layanan</span>
                </a>
            </div>

            <!-- Grid Card Layanan Interaktif dengan Checkbox -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <template x-for="(item, index) in layananList" :key="item.id">
                    <div class="bg-white rounded-2xl border border-slate-200/80 shadow-sm overflow-hidden flex flex-col justify-between hover:shadow-md transition relative group">
                        
                        <!-- Checkbox Pilihan di Atas Gambar -->
                        <div class="absolute top-3 left-3 z-10 bg-white/90 backdrop-blur px-2.5 py-1.5 rounded-lg shadow-sm flex items-center space-x-1.5 border border-slate-200/80">
                            <input type="checkbox" :value="item.id" x-model="selectedItems" class="rounded border-slate-300 text-sky-600 focus:ring-sky-500 w-4 h-4 cursor-pointer">
                            <span class="text-[10px] font-bold text-slate-600 select-none">Pilih</span>
                        </div>

                        <div>
                            <img :src="item.image" :alt="item.title" class="w-full h-40 object-cover">
                            <div class="p-5">
                                <h3 class="font-bold text-sm text-slate-900 mb-1 leading-snug" x-text="item.title"></h3>
                                <p class="text-xs text-slate-500 line-clamp-2" x-text="item.description"></p>
                            </div>
                        </div>

                        <div class="px-5 pb-5 pt-2 grid grid-cols-2 gap-3">
                            <button @click="openEditModal(index)" class="bg-sky-50 hover:bg-sky-100 text-sky-600 font-medium text-xs py-2 rounded-lg flex items-center justify-center space-x-1.5 transition">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 012.828 0L20 4.828a2 2 0 010 2.828l-8.586 8.586-3 1 1-3 8.586-8.586z"/></svg>
                                <span>Edit</span>
                            </button>
                            <button @click="deleteSingleItem(index)" class="bg-rose-50 hover:bg-rose-100 text-rose-500 font-medium text-xs py-2 rounded-lg flex items-center justify-center space-x-1.5 transition">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                <span>Hapus</span>
                            </button>
                        </div>
                    </div>
                </template>
            </div>

            <!-- Floating Action Bar (Muncul Hanya Saat Ada Item Dipilih) -->
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
                    <span class="text-xs font-medium text-slate-200">Layanan dipilih</span>
                </div>

                <div class="flex items-center space-x-2">
                    <button @click="batchUnpublish()" class="bg-slate-800 hover:bg-slate-700 text-slate-300 font-medium text-xs px-3.5 py-2 rounded-lg flex items-center space-x-1.5 transition">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858-5.908a10.018 10.018 0 013.682-.813c4.478 0 8.268 2.943 9.542 7a10.025 10.025 0 01-4.132 5.411m-8.625-8.625a3 3 0 004.243 4.243"/></svg>
                        <span>batalkan publikasi</span>
                    </button>

                    <button @click="batchArchive()" class="bg-slate-800 hover:bg-slate-700 text-slate-300 font-medium text-xs px-3.5 py-2 rounded-lg flex items-center space-x-1.5 transition">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M5 8h14M5 8a2 2 0 01-2-2V5a2 2 0 012-2h14a2 2 0 012 2v1a2 2 0 01-2 2M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"/></svg>
                        <span>Arsip</span>
                    </button>

                    <button @click="batchDelete()" class="bg-red-500 hover:bg-red-600 text-white font-medium text-xs px-3.5 py-2 rounded-lg flex items-center space-x-1.5 transition">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                        <span>Hapus item dipilih</span>
                    </button>
                </div>
            </div>

            <!-- Modal Edit Layanan -->
            <div x-show="showEditModal" x-cloak class="fixed inset-0 bg-slate-900/50 backdrop-blur-sm flex items-center justify-center z-50 p-4">
                <div class="bg-white rounded-2xl max-w-md w-full p-6 shadow-xl space-y-4">
                    <div class="flex items-center justify-between border-b border-slate-100 pb-3">
                        <h3 class="font-bold text-base text-slate-800">Edit Layanan</h3>
                        <button @click="showEditModal = false" class="text-slate-400 hover:text-slate-600 text-lg font-bold">&times;</button>
                    </div>
                    <div class="space-y-3">
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1">Judul Layanan</label>
                            <input type="text" x-model="editForm.title" class="w-full px-3.5 py-2 border border-slate-200 rounded-xl text-xs focus:outline-none focus:border-sky-500">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1">Deskripsi</label>
                            <textarea x-model="editForm.description" rows="3" class="w-full px-3.5 py-2 border border-slate-200 rounded-xl text-xs focus:outline-none focus:border-sky-500 resize-none"></textarea>
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

   <!-- Script Alpine.js Logika Manajemen Layanan & Floating Bar (Perbaikan Tipe Data) -->
<script>
    function layananManager() {
        return {
            showEditModal: false,
            editIndex: null,
            selectedItems: [1, 2], // Mencentang ID 1 dan 2 sebagai default
            editForm: { title: '', description: '' },
            layananList: [
                { id: 1, title: 'SORAIA (Infrastruktur Jaringan & Konektivitas)', description: 'Jaringan backbone serat optik andal...', image: 'https://images.unsplash.com/photo-1544197150-b99a580bb7a8?w=500&auto=format&fit=crop&q=80' },
                { id: 2, title: 'SINTA / SINTA (IT Managed Services & Infrastructure)', description: 'Pengelolaan infrastruktur IT end-to-end & pemeliharaan...', image: 'https://images.unsplash.com/photo-1518770660439-4636190af475?w=500&auto=format&fit=crop&q=80' },
                { id: 3, title: 'GITA (Sistem & Aplikasi)', description: 'Pembuatan dan pengembangan aplikasi penunjang operasional bisnis yang lebih efisien...', image: 'https://images.unsplash.com/photo-1451187580459-43490279c0fa?w=500&auto=format&fit=crop&q=80' },
                { id: 4, title: 'SINATRA (IoT & Telemetri)', description: 'Solusi infrastruktur teknologi operasional berbasis SCADA dan Internet of Things (IoT)...', image: 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=500&auto=format&fit=crop&q=80' },
                { id: 5, title: 'AMBER (Keamanan TI)', description: 'Penerapan teknologi pintar terintegrasi untuk membantu...', image: 'https://images.unsplash.com/photo-1563986768609-322da13575f3?w=500&auto=format&fit=crop&q=80' },
                { id: 6, title: 'SISKA (Smart Solutions)', description: 'Penerapan teknologi pintar terintegrasi untuk membantu pengambilan keputusan bisnis yang cerdas...', image: 'https://images.unsplash.com/photo-1558494949-ef010cbdcc31?w=500&auto=format&fit=crop&q=80' }
            ],
            deleteSingleItem(index) {
                if (confirm('Apakah Anda yakin ingin menghapus layanan ini?')) {
                    const deletedId = this.layananList[index].id;
                    this.layananList.splice(index, 1);
                    this.selectedItems = this.selectedItems.filter(id => Number(id) !== Number(deletedId));
                }
            },
            openEditModal(index) {
                this.editIndex = index;
                this.editForm.title = this.layananList[index].title;
                this.editForm.description = this.layananList[index].description;
                this.showEditModal = true;
            },
            saveEdit() {
                if (this.editIndex !== null) {
                    this.layananList[this.editIndex].title = this.editForm.title;
                    this.layananList[this.editIndex].description = this.editForm.description;
                }
                this.showEditModal = false;
            },
            // Logika Hapus Item Dipilih (Batch Delete dengan Konversi Tipe Data Number)
            batchDelete() {
                if (this.selectedItems.length === 0) return;

                if (confirm(`Apakah Anda yakin ingin menghapus ${this.selectedItems.length} layanan yang dipilih?`)) {
                    // Konversi semua ID yang dipilih ke angka
                    const numericSelectedIds = this.selectedItems.map(id => Number(id));

                    // Filter item yang ID-nya TIDAK ada di dalam array item yang dicentang
                    this.layananList = this.layananList.filter(item => !numericSelectedIds.includes(Number(item.id)));
                    
                    // Reset daftar pilihan
                    this.selectedItems = [];
                }
            },
            batchUnpublish() {
                alert(`${this.selectedItems.length} layanan berhasil dibatalkan publikasinya.`);
                this.selectedItems = [];
            },
            batchArchive() {
                alert(`${this.selectedItems.length} layanan berhasil diarsipkan.`);
                this.selectedItems = [];
            }
        }
    }
</script>