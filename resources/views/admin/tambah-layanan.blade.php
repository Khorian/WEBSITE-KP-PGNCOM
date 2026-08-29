<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambahkan Layanan Baru - PGAS TELEKOM</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-slate-100 font-sans antialiased text-slate-800" x-data="formLayanan()">

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
                    <!-- Dashboard -->
                    <a href="/admin/dashboard" class="flex items-center space-x-3 px-3.5 py-2.5 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800/40 font-medium text-sm transition">
                        <svg class="w-5 h-5 opacity-70" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/>
                        </svg>
                        <span>Dashboard</span>
                    </a>

                    <!-- Profil Perusahaan -->
                    <a href="#" class="flex items-center space-x-3 px-3.5 py-2.5 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800/40 font-medium text-sm transition">
                        <svg class="w-5 h-5 opacity-70" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                        </svg>
                        <span>Profil Perusahaan</span>
                    </a>

                    <!-- Layanan (Active) -->
                    <a href="/admin/layanan" class="flex items-center space-x-3 px-3.5 py-2.5 rounded-xl bg-[#1e293b] text-white font-semibold text-sm transition">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                        </svg>
                        <span>Layanan</span>
                    </a>

                    <!-- Berita dan kegiatan -->
<a href="/admin/berita" class="flex items-center space-x-3 px-3.5 py-2.5 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800/40 font-medium text-sm transition">
    <svg class="w-5 h-5 opacity-70" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
    </svg>
    <span>Berita dan kegiatan</span>
</a>

                    <!-- Kontak Kami -->
<a href="/admin/kontak" class="flex items-center space-x-3 px-3.5 py-2.5 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800/40 font-medium text-sm transition">
    <svg class="w-5 h-5 opacity-70" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
    </svg>
    <span>Kontak Kami</span>
</a>

                   <!-- Kelola pengguna -->
<a href="/admin/pengguna" class="flex items-center space-x-3 px-3.5 py-2.5 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800/40 font-medium text-sm transition">
    <svg class="w-5 h-5 opacity-70" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
    </svg>
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
                <button type="button" class="text-slate-400 hover:text-white p-1 transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                    </svg>
                </button>
            </div>
        </aside>

        <!-- Main Content Area -->
        <main class="flex-1 p-8 overflow-y-auto pb-28">

            <!-- Breadcrumb Navigation -->
            <nav class="flex text-xs font-medium text-slate-400 mb-2 space-x-2">
                <a href="/admin/dashboard" class="hover:text-slate-600 transition">Dashboard</a>
                <span>&rsaquo;</span>
                <a href="/admin/layanan" class="hover:text-slate-600 transition">Layanan</a>
                <span>&rsaquo;</span>
                <span class="text-sky-600 font-semibold">Tambahkan</span>
            </nav>

            <!-- Page Title -->
            <h1 class="text-2xl font-bold text-slate-900 mb-6">Tambahkan layanan baru</h1>

            <!-- Form Container -->
            <form action="#" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

                    <!-- Main Left Column (Form Fields) -->
                    <div class="lg:col-span-2 space-y-6">

                        <!-- Card 1: Judul & Slug -->
                        <div class="bg-white rounded-2xl p-6 border border-slate-200/80 shadow-sm space-y-5">
                            <!-- Field Nama Layanan -->
                            <div>
                                <label for="nama_layanan" class="block text-xs font-bold text-slate-700 mb-2">
                                    Nama layanan <span class="text-red-500">*</span>
                                </label>
                                <input type="text" id="nama_layanan" name="nama_layanan" x-model="nama" @input="generateSlug()"
                                    placeholder="Contoh: SORAIA (Infrastruktur Jaringan & Konektivitas)" required
                                    class="w-full px-4 py-2.5 border border-slate-200 rounded-lg text-sm text-slate-800 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 transition">
                            </div>

                            <!-- Field Slug Auto-generated -->
                            <div>
                                <label for="slug" class="block text-xs font-bold text-slate-700 mb-1">
                                    Slug (Auto-generated) <span class="text-slate-400 font-normal">(Slug URL)</span>
                                </label>
                                <input type="text" id="slug" name="slug" x-model="slug" readonly
                                    placeholder="soraia-infrastruktur-jaringan-konektivitas"
                                    class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-lg text-sm text-slate-500 focus:outline-none cursor-not-allowed">
                            </div>
                        </div>

                        <!-- Card 2: Editor Deskripsi Layanan -->
                        <div class="bg-white rounded-2xl p-6 border border-slate-200/80 shadow-sm">
                            <label class="block text-xs font-bold text-slate-700 mb-3">
                                Deskripsi Layanan <span class="text-red-500">*</span>
                            </label>

                            <!-- WYSIWYG Toolbar Dummy -->
                            <div class="border border-slate-200 rounded-xl overflow-hidden">
                                <div class="bg-slate-50 px-3 py-2 border-b border-slate-200 flex items-center space-x-4 text-slate-600 text-sm">
                                    <button type="button" class="font-bold hover:text-slate-900 px-1">B</button>
                                    <button type="button" class="italic hover:text-slate-900 px-1">I</button>
                                    <button type="button" class="underline hover:text-slate-900 px-1">U</button>
                                    <div class="h-4 w-px bg-slate-300"></div>
                                    <button type="button" class="hover:text-slate-900">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"/></svg>
                                    </button>
                                    <button type="button" class="hover:text-slate-900">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8M4 18h16"/></svg>
                                    </button>
                                    <div class="h-4 w-px bg-slate-300"></div>
                                    <button type="button" class="hover:text-slate-900">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"/></svg>
                                    </button>
                                    <button type="button" class="hover:text-slate-900">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                    </button>
                                    <button type="button" class="hover:text-slate-900 font-mono text-xs">&lt;/&gt;</button>
                                </div>

                                <!-- Textarea Input Body -->
                                <textarea name="deskripsi" rows="8" placeholder="Tuliskan deskripsi lengkap mengenai layanan ini..."
                                    class="w-full p-4 text-sm text-slate-800 placeholder-slate-400 focus:outline-none resize-y"></textarea>
                            </div>
                        </div>

                    </div>

                    <!-- Right Column (Publish & Settings) -->
                    <div class="space-y-6">

                        <!-- Sidebar Card 1: Publish Settings -->
                        <div class="bg-white rounded-2xl p-6 border border-slate-200/80 shadow-sm space-y-4">
                            <h3 class="font-bold text-sm text-slate-800 mb-2">Publish Settings</h3>

                            <!-- Status Select -->
                            <div>
                                <label for="status" class="block text-xs font-semibold text-slate-600 mb-1.5">Status</label>
                                <select id="status" name="status" class="w-full px-3.5 py-2.5 border border-slate-200 rounded-lg text-sm text-slate-700 bg-white focus:outline-none focus:border-sky-500">
                                    <option value="Published">Published</option>
                                    <option value="Draft">Draft</option>
                                    <option value="Archived">Archived</option>
                                </select>
                            </div>

                            <!-- Kategori Layanan -->
                            <div>
                                <label for="kategori" class="block text-xs font-semibold text-slate-600 mb-1.5">Kategori Layanan</label>
                                <select id="kategori" name="kategori" class="w-full px-3.5 py-2.5 border border-slate-200 rounded-lg text-sm text-slate-700 bg-white focus:outline-none focus:border-sky-500">
                                    <option value="Infrastruktur & Konektivitas">Infrastruktur & Konektivitas</option>
                                    <option value="IT Managed Services">IT Managed Services</option>
                                    <option value="Sistem & Aplikasi">Sistem & Aplikasi</option>
                                    <option value="IoT & Telemetri">IoT & Telemetri</option>
                                    <option value="Keamanan TI">Keamanan TI</option>
                                    <option value="Smart Solutions">Smart Solutions</option>
                                </select>
                            </div>
                        </div>

                        <!-- Sidebar Card 2: Gambar Layanan -->
                        <div class="bg-white rounded-2xl p-6 border border-slate-200/80 shadow-sm">
                            <h3 class="font-bold text-sm text-slate-800 mb-3">Gambar Layanan</h3>

                            <div class="border-2 border-dashed border-slate-200 rounded-xl p-6 text-center hover:border-sky-400 transition cursor-pointer relative bg-slate-50/50">
                                <input type="file" name="gambar" class="absolute inset-0 opacity-0 cursor-pointer" @change="previewImage">
                                <div class="flex flex-col items-center justify-center space-y-2">
                                    <div class="w-10 h-10 rounded-full bg-sky-50 text-sky-500 flex items-center justify-center">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"/></svg>
                                    </div>
                                    <div>
                                        <p class="text-xs font-bold text-sky-600">Click to upload image</p>
                                        <p class="text-[10px] text-slate-400 mt-0.5">or drag and drop here</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Sidebar Card 3: Tags & Metadata -->
                        <div class="bg-white rounded-2xl p-6 border border-slate-200/80 shadow-sm">
                            <h3 class="font-bold text-sm text-slate-800 mb-3">Tags & Metadata</h3>

                            <div class="flex flex-wrap items-center gap-2 p-2.5 border border-slate-200 rounded-xl bg-white">
                                <span class="bg-slate-100 text-slate-600 text-xs font-semibold px-2.5 py-1 rounded-md flex items-center space-x-1">
                                    <span>PGASCOM</span>
                                    <button type="button" class="text-slate-400 hover:text-slate-600">&times;</button>
                                </span>
                                <span class="bg-slate-100 text-slate-600 text-xs font-semibold px-2.5 py-1 rounded-md flex items-center space-x-1">
                                    <span>Nusantara</span>
                                    <button type="button" class="text-slate-400 hover:text-slate-600">&times;</button>
                                </span>
                                <input type="text" placeholder="Tambah tag..." class="text-xs text-slate-700 focus:outline-none flex-1 min-w-[80px]">
                            </div>
                        </div>

                        <!-- Sidebar Card 4: SEO Configuration -->
                        <div class="bg-white rounded-2xl p-6 border border-slate-200/80 shadow-sm space-y-4">
                            <h3 class="font-bold text-sm text-slate-800 mb-2">SEO Configuration</h3>

                            <div>
                                <label class="block text-xs font-semibold text-slate-600 mb-1">Meta Title</label>
                                <input type="text" name="meta_title" placeholder="Layanan PGASCOM - Lampung"
                                    class="w-full px-3.5 py-2 border border-slate-200 rounded-lg text-xs text-slate-800 focus:outline-none focus:border-sky-500">
                            </div>

                            <div>
                                <label class="block text-xs font-semibold text-slate-600 mb-1">Meta Description</label>
                                <textarea name="meta_description" rows="3" placeholder="Deskripsi singkat untuk penelusuran google..."
                                    class="w-full px-3.5 py-2 border border-slate-200 rounded-lg text-xs text-slate-800 focus:outline-none focus:border-sky-500 resize-none"></textarea>
                            </div>
                        </div>

                    </div>

                </div>

                <!-- Bottom Action Bar -->
                <div class="fixed bottom-0 right-0 left-64 bg-white border-t border-slate-200/80 p-4 px-8 flex items-center justify-between z-40">
                    <a href="/admin/layanan" class="text-xs font-bold text-slate-500 hover:text-slate-800 transition">
                        Cancel
                    </a>

                    <div class="flex items-center space-x-3">
                        <button type="button" class="px-5 py-2.5 rounded-lg border border-slate-200 text-xs font-bold text-slate-700 hover:bg-slate-50 transition">
                            Simpan sebagai draf
                        </button>
                        <button type="submit" class="px-5 py-2.5 rounded-lg bg-[#0f6cbd] hover:bg-blue-700 text-white text-xs font-bold shadow-sm transition">
                            Publikasi
                        </button>
                    </div>
                </div>

            </form>

        </main>
    </div>

    <!-- Alpine JS Script untuk Auto-generate Slug -->
    <script>
        function formLayanan() {
            return {
                nama: '',
                slug: '',
                generateSlug() {
                    this.slug = this.nama
                        .toLowerCase()
                        .replace(/[^\w ]+/g, '')
                        .replace(/ +/g, '-');
                }
            }
        }
    </script>
</body>
</html>