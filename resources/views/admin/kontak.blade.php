<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Kontak - PGAS TELEKOM</title>
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
                    <!-- Dashboard -->
                    <a href="/admin/dashboard" class="flex items-center space-x-3 px-3.5 py-2.5 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800/40 font-medium text-sm transition">
                        <svg class="w-5 h-5 opacity-70" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/>
                        </svg>
                        <span>Dashboard</span>
                    </a>

                   <!-- Profil Perusahaan -->
<a href="/admin/profil" class="flex items-center space-x-3 px-3.5 py-2.5 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800/40 font-medium text-sm transition">
    <svg class="w-5 h-5 opacity-70" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
    </svg>
    <span>Profil Perusahaan</span>
</a>
                    <!-- Layanan -->
                    <a href="/admin/layanan" class="flex items-center space-x-3 px-3.5 py-2.5 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800/40 font-medium text-sm transition">
                        <svg class="w-5 h-5 opacity-70" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                        </svg>
                        <span>Layanan</span>
                    </a>

                    <!-- Berita dan kegiatan -->
                    <a href="/admin/berita" class="flex items-center justify-between px-3.5 py-2.5 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800/40 font-medium text-sm transition">
                        <div class="flex items-center space-x-3">
                            <svg class="w-5 h-5 opacity-70" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                            <span>Berita dan kegiatan</span>
                        </div>
                    </a>

                    <!-- Kontak Kami (Menu Aktif) -->
                    <a href="/admin/kontak" class="flex items-center space-x-3 px-3.5 py-2.5 rounded-xl bg-[#1e293b] text-white font-semibold text-sm transition">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
                <span class="text-sky-600 font-semibold">kontak kami</span>
            </nav>

            <!-- Page Title -->
            <h1 class="text-2xl font-bold text-slate-900 mb-6">Kelola Kontak</h1>

            <!-- Form Container -->
            <form action="#" method="POST" class="space-y-6">
                @csrf

                <!-- Row 1: Informasi Alamat & Nomor Telepon -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                    <!-- Box 1: Informasi Alamat -->
                    <div class="bg-white rounded-2xl p-6 border border-slate-200/80 shadow-sm flex flex-col justify-between">
                        <div>
                            <div class="flex items-center space-x-2 mb-4">
                                <svg class="w-5 h-5 text-sky-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                                <h3 class="font-bold text-sm text-slate-800">Informasi Alamat</h3>
                            </div>

                            <div>
                                <label for="alamat" class="block text-xs font-semibold text-slate-500 mb-2">Alamat Lengkap</label>
                                <textarea id="alamat" name="alamat" rows="3"
                                    class="w-full p-3.5 bg-slate-50 border border-slate-200 rounded-xl text-xs text-slate-700 leading-relaxed focus:outline-none focus:bg-white focus:border-sky-500 transition resize-none">Jl. Sam Ratulangi No.15, Penengahan,
Kec. Tj. Karang Pusat, Kota Bandar Lampung, Lampung 35122</textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Box 2: Nomor Telepon -->
                    <div class="bg-white rounded-2xl p-6 border border-slate-200/80 shadow-sm space-y-4">
                        <div class="flex items-center space-x-2 mb-2">
                            <svg class="w-5 h-5 text-sky-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            <h3 class="font-bold text-sm text-slate-800">Nomor Telepon</h3>
                        </div>

                        <div>
                            <label for="telepon_kantor" class="block text-xs font-semibold text-slate-500 mb-1.5">Telepon Kantor</label>
                            <input type="text" id="telepon_kantor" name="telepon_kantor" value="(021) 39733645"
                                class="w-full px-3.5 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-xs text-slate-700 focus:outline-none focus:bg-white focus:border-sky-500 transition">
                        </div>

                        <div>
                            <label for="whatsapp" class="block text-xs font-semibold text-slate-500 mb-1.5">WhatsApp</label>
                            <input type="text" id="whatsapp" name="whatsapp" value="(021) 39733645"
                                class="w-full px-3.5 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-xs text-slate-700 focus:outline-none focus:bg-white focus:border-sky-500 transition">
                        </div>
                    </div>

                </div>

                <!-- Row 2: Email & Jam Operasional -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                    <!-- Box 3: Email -->
                    <div class="bg-white rounded-2xl p-6 border border-slate-200/80 shadow-sm space-y-4">
                        <div class="flex items-center space-x-2 mb-2">
                            <svg class="w-5 h-5 text-sky-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            <h3 class="font-bold text-sm text-slate-800">Email</h3>
                        </div>

                        <div>
                            <label for="email_utama" class="block text-xs font-semibold text-slate-500 mb-1.5">Email Utama</label>
                            <input type="email" id="email_utama" name="email_utama" value="regional.lampung@pgastelkom.co.id"
                                class="w-full px-3.5 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-xs text-slate-700 focus:outline-none focus:bg-white focus:border-sky-500 transition">
                        </div>

                        <div>
                            <label for="email_support" class="block text-xs font-semibold text-slate-500 mb-1.5">Email Support</label>
                            <input type="email" id="email_support" name="email_support" value="support.lampung@pgastelkom.co.id"
                                class="w-full px-3.5 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-xs text-slate-700 focus:outline-none focus:bg-white focus:border-sky-500 transition">
                        </div>
                    </div>

                    <!-- Box 4: Jam Operasional -->
                    <div class="bg-white rounded-2xl p-6 border border-slate-200/80 shadow-sm space-y-4">
                        <div class="flex items-center space-x-2 mb-2">
                            <svg class="w-5 h-5 text-sky-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <h3 class="font-bold text-sm text-slate-800">Jam Operasional</h3>
                        </div>

                        <div>
                            <label for="jam_senin_kamis" class="block text-xs font-semibold text-slate-500 mb-1.5">Senin – Kamis</label>
                            <input type="text" id="jam_senin_kamis" name="jam_senin_kamis" value="07.30 – 16.00 WIB"
                                class="w-full px-3.5 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-xs text-slate-700 focus:outline-none focus:bg-white focus:border-sky-500 transition">
                        </div>

                        <div>
                            <label for="jam_jumat" class="block text-xs font-semibold text-slate-500 mb-1.5">Jumat</label>
                            <input type="text" id="jam_jumat" name="jam_jumat" value="07.30 - 16.30"
                                class="w-full px-3.5 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-xs text-slate-700 focus:outline-none focus:bg-white focus:border-sky-500 transition">
                        </div>
                    </div>

                </div>

                <!-- Row 3: Google Maps URL -->
                <div class="bg-white rounded-2xl p-6 border border-slate-200/80 shadow-sm">
                    <h3 class="font-bold text-sm text-slate-800 mb-3">Google Maps URL</h3>
                    <input type="text" name="google_maps_url" value="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.5!2d105.2677!3d-5.4297"
                        class="w-full px-3.5 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-xs text-slate-700 focus:outline-none focus:bg-white focus:border-sky-500 transition">
                </div>

                <!-- Action Button Card -->
                <div class="bg-white rounded-2xl p-4 border border-slate-200/80 shadow-sm flex items-center justify-between">
                    <a href="/admin/dashboard" class="text-xs font-semibold text-slate-500 hover:text-slate-800 transition pl-2">
                        Cancel
                    </a>

                    <div class="flex items-center space-x-3">
                        <button type="button" class="px-5 py-2.5 rounded-xl border border-slate-200 text-xs font-bold text-slate-700 hover:bg-slate-50 transition">
                            Simpan sebagai dtaf
                        </button>
                        <button type="submit" class="px-5 py-2.5 rounded-xl bg-[#0f6cbd] hover:bg-blue-700 text-white text-xs font-bold shadow-sm transition">
                            Perbaharui Kontak
                        </button>
                    </div>
                </div>

            </form>

        </main>
    </div>

</body>
</html>