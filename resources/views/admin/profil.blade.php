<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Profil Perusahaan - PGNCOM</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-slate-100 font-sans antialiased text-slate-800">

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

                    <!-- Profil Perusahaan (Menu Aktif) -->
                    <a href="/admin/profil" class="flex items-center space-x-3 px-3.5 py-2.5 rounded-xl bg-[#1e293b] text-white font-semibold text-sm transition">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                        <span>Profil perusahaan</span>
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
        <main class="flex-1 p-8 overflow-y-auto pb-28">

            <!-- Breadcrumb Navigation -->
            <nav class="flex text-xs font-medium text-slate-400 mb-2 space-x-2">
                <a href="/admin/dashboard" class="hover:text-slate-600 transition">Dashboard</a>
                <span>&rsaquo;</span>
                <span class="text-sky-600 font-semibold">Profil Perusahaan</span>
            </nav>

            <h1 class="text-2xl font-bold text-slate-900 mb-6">Kelola Profil Perusahaan</h1>

            <form action="#" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf

                <!-- Section 1: Sejarah Singkat Perusahaan -->
                <div class="bg-white rounded-2xl p-6 border border-slate-200/80 shadow-sm space-y-4">
                    <h3 class="font-bold text-base text-slate-800 border-b border-slate-100 pb-3">Sejarah Singkat (Perjalanan PGNCOM di Lampung)</h3>
                    
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Judul Sub-Sejarah</label>
                        <input type="text" name="judul_sejarah" value="Perjalanan PGNCOM di Lampung" class="w-full px-3.5 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-xs focus:outline-none focus:bg-white focus:border-sky-500">
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Isi Paragraf 1</label>
                        <textarea name="sejarah_p1" rows="3" class="w-full p-3 bg-slate-50 border border-slate-200 rounded-xl text-xs focus:outline-none focus:bg-white focus:border-sky-500 resize-none">Sebagai anak perusahaan PT PGAS Telekomunikasi Nusantara (PGNCOM) bernaung di bawah korporasi utamanya, PT Perusahaan Gas Negara, Tbk (PGN), yang mengawali langkah melalui koridor optik fiber optik strategis di sepanjang jalur pipa gas bumi di seluruh wilayah Sumatra pada tahun 2007...</textarea>
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Isi Paragraf 2</label>
                        <textarea name="sejarah_p2" rows="3" class="w-full p-3 bg-slate-50 border border-slate-200 rounded-xl text-xs focus:outline-none focus:bg-white focus:border-sky-500 resize-none">Seiring berkembangnya jaringan ekosistem, PGNCOM terus merintis untuk mengintegrasikan koridor strategis dari Jakarta, wilayah Sumatra, hingga merintis titik point of presence (landing point) leased line yang terkoneksi ke Singapura...</textarea>
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Gambar Banner / Logo Sejarah</label>
                        <input type="file" name="gambar_sejarah" class="text-xs text-slate-500 border border-slate-200 rounded-xl p-2 w-full bg-slate-50">
                    </div>
                </div>

                <!-- Section 2: Visi & Misi -->
                <div class="bg-white rounded-2xl p-6 border border-slate-200/80 shadow-sm space-y-4">
                    <h3 class="font-bold text-base text-slate-800 border-b border-slate-100 pb-3">Visi & Misi Perusahaan</h3>

                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Teks Visi</label>
                        <textarea name="visi" rows="2" class="w-full p-3 bg-slate-50 border border-slate-200 rounded-xl text-xs focus:outline-none focus:bg-white focus:border-sky-500 resize-none">"Menjadi perusahaan solusi ICT terdepan dan terpercaya yang mendorong pertumbuhan ekonomi digital di Provinsi Lampung pada tahun 2030."</textarea>
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-2">Daftar Misi (Point 1 - 5)</label>
                        <div class="space-y-2">
                            <input type="text" name="misi[]" value="Menyediakan infrastruktur telekomunikasi berkualitas tinggi yang menjangkau seluruh wilayah Lampung." class="w-full px-3.5 py-2 bg-slate-50 border border-slate-200 rounded-xl text-xs">
                            <input type="text" name="misi[]" value="Mengembangkan solusi ICT korporasi guna mendukung transformasi digital korporasi pelanggan." class="w-full px-3.5 py-2 bg-slate-50 border border-slate-200 rounded-xl text-xs">
                            <input type="text" name="misi[]" value="Membangun SDM yang kompeten, profesional, dan berorientasi pada kepuasan pelanggan." class="w-full px-3.5 py-2 bg-slate-50 border border-slate-200 rounded-xl text-xs">
                            <input type="text" name="misi[]" value="Memperkuat komitmen strategis yang saling menguntungkan dengan seluruh pemangku kepentingan." class="w-full px-3.5 py-2 bg-slate-50 border border-slate-200 rounded-xl text-xs">
                            <input type="text" name="misi[]" value="Mendukung tata kelola perusahaan yang baik dan mewujudkan program GCG yang berkelanjutan." class="w-full px-3.5 py-2 bg-slate-50 border border-slate-200 rounded-xl text-xs">
                        </div>
                    </div>
                </div>

                <!-- Section 3: Tim Tanggap Darurat / Struktur Organisasi -->
                <div class="bg-white rounded-2xl p-6 border border-slate-200/80 shadow-sm space-y-4">
                    <h3 class="font-bold text-base text-slate-800 border-b border-slate-100 pb-3">Struktur Organisasi (Tim Tanggap Darurat)</h3>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1">Manager RO Lampung</label>
                            <input type="text" name="manager" value="Ade Irawan" class="w-full px-3.5 py-2 bg-slate-50 border border-slate-200 rounded-xl text-xs">
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1">Tim Pemadam Api</label>
                            <input type="text" name="tim_pemadam" value="Sapparudin, Nurwanto, A. Taufik Prabowo" class="w-full px-3.5 py-2 bg-slate-50 border border-slate-200 rounded-xl text-xs">
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1">Tim Evakuasi</label>
                            <input type="text" name="tim_evakuasi" value="Erlita D, Agus Ardiyan, Ariyanto Wibowo" class="w-full px-3.5 py-2 bg-slate-50 border border-slate-200 rounded-xl text-xs">
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1">Tim Document</label>
                            <input type="text" name="tim_document" value="Silmiliyan, Dedy Narendra, Cahyoni Maimanah" class="w-full px-3.5 py-2 bg-slate-50 border border-slate-200 rounded-xl text-xs">
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1">Tim Huru Hara</label>
                            <input type="text" name="tim_huru_hara" value="Gandi Rismawan, Ahmad Buchori, Kartika Chandra W." class="w-full px-3.5 py-2 bg-slate-50 border border-slate-200 rounded-xl text-xs">
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1">Tim P3K</label>
                            <input type="text" name="tim_p3k" value="Rizal, Yopi Marzuki, Rendy Oktavianus" class="w-full px-3.5 py-2 bg-slate-50 border border-slate-200 rounded-xl text-xs">
                        </div>
                    </div>
                </div>

                <!-- Section 4: Nilai-Nilai Perusahaan -->
                <div class="bg-white rounded-2xl p-6 border border-slate-200/80 shadow-sm space-y-4">
                    <h3 class="font-bold text-base text-slate-800 border-b border-slate-100 pb-3">Nilai-Nilai Perusahaan</h3>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1">1. Inovasi</label>
                            <textarea name="nilai_inovasi" rows="2" class="w-full p-2.5 bg-slate-50 border border-slate-200 rounded-xl text-xs resize-none">Selalu menghadirkan solusi digital terdepan dan kreatif.</textarea>
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1">2. Integritas</label>
                            <textarea name="nilai_integritas" rows="2" class="w-full p-2.5 bg-slate-50 border border-slate-200 rounded-xl text-xs resize-none">Menjunjung tinggi kejujuran dan transparansi dalam setiap aspek pekerjaan.</textarea>
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1">3. Keandalan</label>
                            <textarea name="nilai_keandalan" rows="2" class="w-full p-2.5 bg-slate-50 border border-slate-200 rounded-xl text-xs resize-none">Memastikan kestabilan layanan internet yang fasilitas dan dapat diandalkan.</textarea>
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1">4. Kolaborasi</label>
                            <textarea name="nilai_kolaborasi" rows="2" class="w-full p-2.5 bg-slate-50 border border-slate-200 rounded-xl text-xs resize-none">Bekerja sama secara sinergi demi seluruh kemajuan bersama.</textarea>
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1">5. Profesionalisme</label>
                            <textarea name="nilai_profesionalisme" rows="2" class="w-full p-2.5 bg-slate-50 border border-slate-200 rounded-xl text-xs resize-none">Memberikan layanan terbaik dengan standar kualitas yang tinggi.</textarea>
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1">6. Keberlanjutan</label>
                            <textarea name="nilai_keberlanjutan" rows="2" class="w-full p-2.5 bg-slate-50 border border-slate-200 rounded-xl text-xs resize-none">Berkomitmen peduli dalam bisnis bagi seluruh kepedulian dan lingkungan.</textarea>
                        </div>
                    </div>
                </div>

                <!-- Bottom Floating Action Bar -->
                <div class="fixed bottom-0 right-0 left-64 bg-white border-t border-slate-200/80 p-4 px-8 flex items-center justify-between z-40">
                    <a href="/admin/dashboard" class="text-xs font-bold text-slate-500 hover:text-slate-800 transition">
                        Batal
                    </a>

                    <button type="submit" class="px-6 py-2.5 rounded-xl bg-[#0f6cbd] hover:bg-blue-700 text-white text-xs font-bold shadow-sm transition">
                        Simpan Perubahan Profil
                    </button>
                </div>

            </form>

        </main>
    </div>

</body>
</html>