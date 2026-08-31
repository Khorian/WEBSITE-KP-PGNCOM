<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Pengguna - PGNCOM</title>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/png">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        [x-cloak] { display: none !important; }
    </style>
</head>
<body class="bg-slate-100 font-sans antialiased text-slate-800" x-data="penggunaManager()">

    <div class="flex min-h-screen">

        <!-- Sidebar Kiri (Dark Mode) -->
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

                    <a href="/admin/berita" class="flex items-center space-x-3 px-3.5 py-2.5 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800/40 font-medium text-sm transition">
                        <svg class="w-5 h-5 opacity-70" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                        <span>Berita dan kegiatan</span>
                    </a>

                    <a href="/admin/kontak" class="flex items-center space-x-3 px-3.5 py-2.5 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800/40 font-medium text-sm transition">
                        <svg class="w-5 h-5 opacity-70" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        <span>Kontak kami</span>
                    </a>

                    <a href="/admin/pengguna" class="flex items-center space-x-3 px-3.5 py-2.5 rounded-xl bg-[#1e293b] text-white font-semibold text-sm transition">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
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
        <main class="flex-1 p-8 overflow-y-auto">

            <!-- Top Title Bar -->
            <div class="flex items-center justify-between mb-8">
                <div>
                    <h1 class="text-2xl font-bold text-slate-900">Kelola Pengguna</h1>
                    <p class="text-xs text-slate-500 mt-1"><span x-text="penggunaList.length"></span> pengguna terdaftar.</p>
                </div>

                <!-- Button Tambahkan Pengguna -->
                <button @click="openAddModal()" type="button" class="bg-[#0f6cbd] hover:bg-blue-700 text-white font-semibold text-xs px-4 py-2.5 rounded-lg shadow-sm flex items-center space-x-2 transition">
                    <span class="text-base leading-none">+</span>
                    <span>Tambahkan pengguna</span>
                </button>
            </div>

            <!-- Card Table Pengguna -->
            <div class="bg-white rounded-2xl border border-slate-200/80 shadow-sm overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse text-xs">
                        <thead>
                            <tr class="border-b border-slate-100 text-slate-400 uppercase font-semibold text-[10px] tracking-wider bg-white">
                                <th class="p-4 w-10 text-center">
                                    <input type="checkbox" @change="toggleSelectAll($event)" :checked="isAllSelected" class="rounded border-slate-300 text-sky-600 focus:ring-sky-500 cursor-pointer">
                                </th>
                                <th class="p-4">PENGGUNA</th>
                                <th class="p-4">ROLE</th>
                                <th class="p-4">LOGIN TERAKHIR</th>
                                <th class="p-4">STATUS</th>
                                <th class="p-4 text-center">AKSI</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 text-slate-700 font-medium">
                            <template x-for="(user, index) in penggunaList" :key="user.id">
                                <tr class="hover:bg-slate-50/60 transition">
                                    <td class="p-4 text-center">
                                        <input type="checkbox" :value="user.id" x-model="selectedUsers" class="rounded border-slate-300 text-sky-600 focus:ring-sky-500 cursor-pointer">
                                    </td>
                                    <td class="p-4">
                                        <div class="font-bold text-slate-900 text-sm" x-text="user.name"></div>
                                        <div class="text-[11px] text-slate-400 font-normal" x-text="user.email"></div>
                                    </td>
                                    <td class="p-4">
                                        <span class="px-2.5 py-1 rounded-md text-[10px] font-bold"
                                              :class="user.role === 'Super Admin' ? 'bg-purple-50 text-purple-600' : 'bg-sky-50 text-sky-600'"
                                              x-text="user.role"></span>
                                    </td>
                                    <td class="p-4 text-slate-500" x-text="user.lastLogin"></td>
                                    <td class="p-4">
                                        <span class="px-2.5 py-1 rounded-md text-[10px] font-bold"
                                              :class="user.status === 'Aktif' ? 'bg-emerald-50 text-emerald-600' : 'bg-rose-50 text-rose-600'"
                                              x-text="user.status"></span>
                                    </td>
                                    <td class="p-4 text-center space-x-1">
                                        <button @click="openEditModal(user.id)" class="text-slate-400 hover:text-sky-600 transition p-1" title="Edit">
                                            <svg class="w-4 h-4 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 012.828 0L20 4.828a2 2 0 010 2.828l-8.586 8.586-3 1 1-3 8.586-8.586z"/></svg>
                                        </button>
                                        <template x-if="user.role !== 'Super Admin'">
                                            <button @click="deleteUser(user.id)" class="text-rose-500 hover:text-rose-700 transition p-1" title="Hapus">
                                                <svg class="w-4 h-4 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                            </button>
                                        </template>
                                    </td>
                                </tr>
                            </template>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Modal Tambah / Edit Pengguna -->
            <div x-show="showModal" x-cloak class="fixed inset-0 bg-slate-900/50 backdrop-blur-sm flex items-center justify-center z-50 p-4">
                <div class="bg-white rounded-2xl max-w-md w-full p-6 shadow-xl space-y-4">
                    <div class="flex items-center justify-between border-b border-slate-100 pb-3">
                        <h3 class="font-bold text-base text-slate-800" x-text="isEdit ? 'Edit Pengguna' : 'Tambah Pengguna Baru'"></h3>
                        <button @click="showModal = false" class="text-slate-400 hover:text-slate-600 text-lg font-bold">&times;</button>
                    </div>

                    <form @submit.prevent="saveUser()" class="space-y-3">
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1">Nama Lengkap</label>
                            <input type="text" x-model="userForm.name" required class="w-full px-3.5 py-2 border border-slate-200 rounded-xl text-xs focus:outline-none focus:border-sky-500">
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1">Email</label>
                            <input type="email" x-model="userForm.email" required class="w-full px-3.5 py-2 border border-slate-200 rounded-xl text-xs focus:outline-none focus:border-sky-500">
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1">Role</label>
                            <select x-model="userForm.role" class="w-full px-3.5 py-2 border border-slate-200 rounded-xl text-xs focus:outline-none focus:border-sky-500">
                                <option value="Editor">Editor</option>
                                <option value="Super Admin">Super Admin</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1">Status</label>
                            <select x-model="userForm.status" class="w-full px-3.5 py-2 border border-slate-200 rounded-xl text-xs focus:outline-none focus:border-sky-500">
                                <option value="Aktif">Aktif</option>
                                <option value="Nonaktif">Nonaktif</option>
                            </select>
                        </div>

                        <div class="flex justify-end space-x-2 pt-2">
                            <button type="button" @click="showModal = false" class="px-4 py-2 rounded-xl text-xs font-semibold text-slate-600 hover:bg-slate-100 transition">Batal</button>
                            <button type="submit" class="px-4 py-2 bg-[#0f6cbd] hover:bg-blue-700 text-white text-xs font-semibold rounded-xl transition" x-text="isEdit ? 'Simpan Perubahan' : 'Tambah Pengguna'"></button>
                        </div>
                    </form>
                </div>
            </div>

        </main>
    </div>

    <!-- Script Alpine.js Logika Interaktif Pengguna -->
    <script>
        function penggunaManager() {
            return {
                showModal: false,
                isEdit: false,
                editId: null,
                selectedUsers: [],
                userForm: { name: '', email: '', role: 'Editor', status: 'Aktif' },

                penggunaList: [
                    { id: 1, name: 'Administrator', email: 'admin@pgastelkom.co.id', role: 'Super Admin', lastLogin: '29 Jul 2025, 09:14', status: 'Aktif' },
                    { id: 2, name: 'Dewi Anggraini', email: 'dewi@pgastelkom.co.id', role: 'Editor', lastLogin: '28 Jul 2025, 14:22', status: 'Aktif' },
                    { id: 3, name: 'Khorian Muksim', email: 'Muksim@pgastelkom.co.id', role: 'Editor', lastLogin: '28 Jul 2025, 14:22', status: 'Aktif' },
                    { id: 4, name: 'Ilyas Ramadhan', email: 'Ilyas@pgastelkom.co.id', role: 'Editor', lastLogin: '28 Jul 2025, 14:22', status: 'Aktif' }
                ],

                get isAllSelected() {
                    return this.penggunaList.length > 0 && this.selectedUsers.length === this.penggunaList.length;
                },

                toggleSelectAll(e) {
                    if (e.target.checked) {
                        this.selectedUsers = this.penggunaList.map(u => u.id);
                    } else {
                        this.selectedUsers = [];
                    }
                },

                openAddModal() {
                    this.isEdit = false;
                    this.userForm = { name: '', email: '', role: 'Editor', status: 'Aktif' };
                    this.showModal = true;
                },

                openEditModal(id) {
                    const user = this.penggunaList.find(u => u.id === id);
                    if (user) {
                        this.isEdit = true;
                        this.editId = id;
                        this.userForm = { name: user.name, email: user.email, role: user.role, status: user.status };
                        this.showModal = true;
                    }
                },

                saveUser() {
                    if (this.isEdit) {
                        const user = this.penggunaList.find(u => u.id === this.editId);
                        if (user) {
                            user.name = this.userForm.name;
                            user.email = this.userForm.email;
                            user.role = this.userForm.role;
                            user.status = this.userForm.status;
                        }
                    } else {
                        const newId = Date.now();
                        this.penggunaList.push({
                            id: newId,
                            name: this.userForm.name,
                            email: this.userForm.email,
                            role: this.userForm.role,
                            lastLogin: 'Baru Saja',
                            status: this.userForm.status
                        });
                    }
                    this.showModal = false;
                },

                deleteUser(id) {
                    if (confirm('Apakah Anda yakin ingin menghapus pengguna ini?')) {
                        this.penggunaList = this.penggunaList.filter(u => u.id !== id);
                        this.selectedUsers = this.selectedUsers.filter(uId => uId !== id);
                    }
                }
            }
        }
    </script>
</body>
</html>