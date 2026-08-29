<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Layanan Baru - PGAS TELEKOM</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
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
                    <a href="/admin/profil" class="flex items-center space-x-3 px-3.5 py-2.5 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800/40 font-medium text-sm transition"><span>Profil Perusahaan</span></a>
                    <a href="/admin/layanan" class="flex items-center space-x-3 px-3.5 py-2.5 rounded-xl bg-[#1e293b] text-white font-semibold text-sm transition"><span>Layanan</span></a>
                    <a href="/admin/berita" class="flex items-center space-x-3 px-3.5 py-2.5 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800/40 font-medium text-sm transition"><span>Berita dan kegiatan</span></a>
                    <a href="/admin/kontak" class="flex items-center space-x-3 px-3.5 py-2.5 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800/40 font-medium text-sm transition"><span>Kontak Kami</span></a>
                    <a href="/admin/pengguna" class="flex items-center space-x-3 px-3.5 py-2.5 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800/40 font-medium text-sm transition"><span>Kelola pengguna</span></a>
                </nav>
            </div>
        </aside>

        <!-- Main Content Area -->
        <main class="flex-1 p-8 overflow-y-auto pb-28">

            <nav class="flex text-xs font-medium text-slate-400 mb-2 space-x-2">
                <a href="/admin/dashboard">Dashboard</a>
                <span>&rsaquo;</span>
                <a href="/admin/layanan">Layanan</a>
                <span>&rsaquo;</span>
                <span class="text-sky-600 font-semibold">Tambah</span>
            </nav>

            <h1 class="text-2xl font-bold text-slate-900 mb-6">Tambahkan Layanan Baru</h1>

            @if ($errors->any())
                <div class="mb-6 p-4 bg-rose-50 border border-rose-200 rounded-2xl text-rose-700 text-xs font-medium">
                    <p class="font-bold mb-1">Gagal menyimpan layanan! Periksa input berikut:</p>
                    <ul class="list-disc list-inside">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.layanan.simpan') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

                    <!-- Left Column -->
                    <div class="lg:col-span-2 space-y-6">
                        <div class="bg-white rounded-2xl p-6 border border-slate-200/80 shadow-sm space-y-5">
                            <div>
                                <label for="nama_layanan" class="block text-xs font-bold text-slate-700 mb-2">Nama Layanan <span class="text-red-500">*</span></label>
                                <input type="text" id="nama_layanan" name="nama_layanan" required placeholder="Contoh: Dedicated Internet Corporate" class="w-full px-4 py-2.5 border border-slate-200 rounded-lg text-sm text-slate-800 focus:outline-none focus:border-sky-500">
                            </div>

                            <div>
                                <label for="deskripsi_singkat" class="block text-xs font-bold text-slate-700 mb-2">Deskripsi Singkat <span class="text-red-500">*</span></label>
                                <textarea id="deskripsi_singkat" name="deskripsi_singkat" rows="3" required placeholder="Penjelasan singkat layanan..." class="w-full p-4 border border-slate-200 rounded-lg text-sm text-slate-800 focus:outline-none resize-none"></textarea>
                            </div>

                            <div>
                                <label for="deskripsi_lengkap" class="block text-xs font-bold text-slate-700 mb-2">Deskripsi Lengkap / Fitur</label>
                                <textarea id="deskripsi_lengkap" name="deskripsi_lengkap" rows="6" placeholder="Rincian lengkap dan keunggulan layanan..." class="w-full p-4 border border-slate-200 rounded-lg text-sm text-slate-800 focus:outline-none resize-y"></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column -->
                    <div class="space-y-6">
                        <div class="bg-white rounded-2xl p-6 border border-slate-200/80 shadow-sm space-y-4">
                            <h3 class="font-bold text-sm text-slate-800 mb-2">Pengaturan Layanan</h3>

                           <div>
    <label for="kategori" class="block text-xs font-semibold text-slate-600 mb-1.5">Kategori <span class="text-red-500">*</span></label>
    <select id="kategori" name="kategori" required class="w-full px-3.5 py-2.5 border border-slate-200 rounded-lg text-sm text-slate-700 bg-white focus:outline-none">
        <option value="Produk dan Layanan">Produk dan Layanan</option>
        <option value="ICT Solution">ICT Solution</option>
    </select>
</div>

                            <div>
                                <label for="status" class="block text-xs font-semibold text-slate-600 mb-1.5">Status Layanan</label>
                                <select id="status" name="status" class="w-full px-3.5 py-2.5 border border-slate-200 rounded-lg text-sm text-slate-700 bg-white focus:outline-none">
                                    <option value="Aktif">Aktif</option>
                                    <option value="Nonaktif">Nonaktif</option>
                                </select>
                            </div>
                        </div>

                        <div class="bg-white rounded-2xl p-6 border border-slate-200/80 shadow-sm" x-data="{ imagePreview: null }">
                            <h3 class="font-bold text-sm text-slate-800 mb-3">Ikon / Gambar Layanan</h3>
                            <div class="border-2 border-dashed border-slate-200 rounded-xl p-4 text-center hover:border-sky-400 transition cursor-pointer relative bg-slate-50/50 min-h-[140px] flex items-center justify-center">
                                <input type="file" name="ikon" accept="image/*" class="absolute inset-0 opacity-0 cursor-pointer z-10"
                                    @change="
                                        const file = $event.target.files[0];
                                        if (file) {
                                            const reader = new FileReader();
                                            reader.onload = (e) => { imagePreview = e.target.result; };
                                            reader.readAsDataURL(file);
                                        }
                                    ">
                                <div x-show="!imagePreview" class="flex flex-col items-center justify-center">
                                    <p class="text-xs font-bold text-sky-600">Klik untuk upload ikon/gambar</p>
                                </div>
                                <div x-show="imagePreview" class="w-full">
                                    <img :src="imagePreview" class="w-full h-32 object-contain rounded-lg border">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Bottom Bar -->
                <div class="fixed bottom-0 right-0 left-64 bg-white border-t border-slate-200/80 p-4 px-8 flex items-center justify-between z-40">
                    <a href="{{ route('admin.layanan') }}" class="text-xs font-bold text-slate-500 hover:text-slate-800">Batal</a>

                    <button type="submit" class="px-5 py-2.5 rounded-lg bg-[#0f6cbd] hover:bg-blue-700 text-white text-xs font-bold shadow-sm">
                        Simpan Layanan
                    </button>
                </div>

            </form>

        </main>
    </div>

</body>
</html>