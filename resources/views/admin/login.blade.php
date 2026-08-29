<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - PT PGASCOM RO LAMPUNG</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Alpine.js untuk fitur toggle password -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gray-100 font-sans antialiased min-h-screen flex items-center justify-center">

    <div class="flex w-full min-h-screen bg-white">
        
        <!-- Sisi Kiri: Panel Biru -->
        <div class="hidden lg:flex lg:w-1/2 bg-[#1d70d6] text-white flex-col justify-between p-12 relative overflow-hidden">
            <!-- Header Logo -->
            <div class="flex items-center space-x-3">
                <div class="bg-white p-2 rounded-md flex items-center justify-center">
                    <!-- Placeholder Logo PGN COM -->
                    <span class="text-[#1d70d6] font-bold text-lg tracking-tighter">pgn<span class="text-xs text-blue-400 font-normal">COM</span></span>
                </div>
                <div>
                    <h2 class="font-bold text-sm tracking-wide leading-tight">PT PGASCOM</h2>
                    <p class="text-[10px] text-blue-200 tracking-wider">REGIONAL OFFICE LAMPUNG</p>
                </div>
            </div>

            <!-- Content Tengah -->
            <div class="my-auto">
                <h1 class="text-4xl font-extrabold tracking-wide mb-2">DASHBOARD ADMIN</h1>
                <p class="text-blue-100 text-sm font-light tracking-wide">PT PGASCOM REGIONAL OFFICE LAMPUNG</p>
            </div>

            <!-- Footer Kiri -->
            <div class="text-xs text-blue-200 opacity-80">
                @2026 PT PGASCOM RO LAMPUNG
            </div>
        </div>

        <!-- Sisi Kanan: Form Login -->
        <div class="w-full lg:w-1/2 flex flex-col justify-center items-center p-8 lg:p-16">
            <div class="w-full max-w-md">
                
                <!-- Judul -->
                <div class="mb-8">
                    <h2 class="text-3xl font-bold text-slate-800 mb-1">Welcome!</h2>
                    <p class="text-slate-500 font-medium">masuk sebagai admin</p>
                </div>

                <!-- Form Login -->
                <form action="{{ route('login') }}" method="POST" class="space-y-5">
                    @csrf

                    <!-- Field Email -->
                    <div>
                        <label for="email" class="block text-sm font-semibold text-slate-700 mb-2">Email admin</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                                <!-- Email Icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" required 
                                class="w-full pl-10 pr-4 py-2.5 bg-slate-50 border border-slate-200 rounded-lg text-slate-700 placeholder-slate-400 focus:outline-none focus:bg-white focus:border-blue-500 transition-colors text-sm" 
                                placeholder="admin@pgastelkom.co.id">
                        </div>
                        @error('email')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Field Password -->
                    <div x-data="{ show: false }">
                        <label for="password" class="block text-sm font-semibold text-slate-700 mb-2">Kata sandi</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                                <!-- Lock Icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                </svg>
                            </div>
                            <input :type="show ? 'text' : 'password'" id="password" name="password" required 
                                class="w-full pl-10 pr-10 py-2.5 bg-slate-50 border border-slate-200 rounded-lg text-slate-700 placeholder-slate-400 focus:outline-none focus:bg-white focus:border-blue-500 transition-colors text-sm" 
                                placeholder="••••••••••••">
                            <button type="button" @click="show = !show" class="absolute inset-y-0 right-0 pr-3 flex items-center text-slate-400 hover:text-slate-600 focus:outline-none">
                                <!-- Eye Icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </button>
                        </div>
                        @error('password')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Remember Me & Forgot Password -->
                    <div class="flex items-center justify-between text-xs pt-1">
                        <label class="flex items-center space-x-2 cursor-pointer">
                            <input type="checkbox" name="remember" class="w-4 h-4 text-blue-600 border-slate-300 rounded focus:ring-blue-500">
                            <span class="text-slate-700 font-medium">Ingat saya</span>
                        </label>
                        <a href="#" class="font-semibold text-blue-600 hover:underline">lupa kata sandi?</a>
                    </div>

                    <!-- Submit Button -->
                    <div class="pt-2">
                        <button type="submit" class="w-full bg-[#2070e0] hover:bg-blue-700 text-white font-semibold py-2.5 px-4 rounded-lg shadow-sm transition-all flex items-center justify-center space-x-2 text-sm">
                            <span>Login to Portal</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </button>
                    </div>
                </form>

                <!-- Footer Kanan (Tampil di mobile / tablet) -->
                <div class="mt-8 text-center text-xs text-slate-400">
                    © 2026 PT PGASCOM RO LAMPUNG
                </div>

            </div>
        </div>

    </div>

</body>
</html>