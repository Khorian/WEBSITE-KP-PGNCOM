<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan - PGASCOM Regional Office Lampung</title>
    
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/png">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800 font-sans">

    <!-- Include Navbar -->
    @include('components.navbar')

    <!-- HERO BANNER LAYANAN -->
    <section class="bg-gradient-to-r from-[#0b1c3d] via-blue-700 to-blue-600 text-white py-16 px-6 md:px-12 relative overflow-hidden">
        <div class="max-w-7xl mx-auto space-y-3">
            <!-- Breadcrumb -->
            <div class="flex items-center space-x-2 text-xs md:text-sm text-gray-300">
                <a href="{{ route('home') }}" class="hover:text-white transition-colors">Beranda</a>
                <span>&gt;</span>
                <span class="text-cyan-400 font-semibold">Layanan</span>
            </div>

            <!-- Judul & Subjudul -->
            <h1 class="text-3xl md:text-5xl font-bold tracking-tight">Layanan Kami</h1>
            <p class="text-xs md:text-sm text-gray-200 max-w-2xl leading-relaxed">
                Solusi telekomunikasi dan ICT terlengkap untuk kebutuhan bisnis Anda di wilayah Lampung.
            </p>
        </div>
    </section>

    <!-- KONTEN DAFTAR LAYANAN SECTION -->
    <section class="py-16 px-6 md:px-12 max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            
            <!-- Layanan 1: GITA -->
            <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 flex flex-col justify-between transition-transform hover:-translate-y-1">
                <div>
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-xs font-bold px-3 py-1 bg-blue-50 text-blue-600 rounded-md">GITA</span>
                        <div class="w-10 h-10 rounded-xl bg-blue-50 flex items-center justify-center text-blue-600 font-bold text-sm">G</div>
                    </div>
                    <h3 class="font-bold text-gray-900 text-lg mb-1">Digital Platform & Application</h3>
                    <p class="text-xs text-blue-600 font-semibold uppercase tracking-wider mb-4">Digital Platform dan Application</p>
                    <p class="text-gray-600 text-xs md:text-sm leading-relaxed mb-6">
                        Service provision and development services for digital software and applications specifically designed to support digital transformation digital in the company's daily operations. These services can be adjusted to meet your company needs, either its built from scratch or redesigned from the existing applications.
                    </p>
                </div>
                <a href="#" class="inline-flex items-center text-blue-600 text-xs font-semibold hover:text-blue-700">
                    Learn More 
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                </a>
            </div>

            <!-- Layanan 2: AMBER -->
            <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 flex flex-col justify-between transition-transform hover:-translate-y-1">
                <div>
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-xs font-bold px-3 py-1 bg-blue-50 text-blue-600 rounded-md">AMBER</span>
                        <div class="w-10 h-10 rounded-xl bg-blue-50 flex items-center justify-center text-blue-600 font-bold text-sm">A</div>
                    </div>
                    <h3 class="font-bold text-gray-900 text-lg mb-1">Security Cyber</h3>
                    <p class="text-xs text-blue-600 font-semibold uppercase tracking-wider mb-4">Security Cyber</p>
                    <p class="text-gray-600 text-xs md:text-sm leading-relaxed mb-6">
                        Security as a Services (sec-aaS) that will protect all of your data from cyber attacks, built the data inside your communications networks and all devices that are connected to the internet and intranet networks.
                    </p>
                </div>
                <a href="#" class="inline-flex items-center text-blue-600 text-xs font-semibold hover:text-blue-700">
                    Learn More 
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                </a>
            </div>

            <!-- Layanan 3: SORAIA -->
            <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 flex flex-col justify-between transition-transform hover:-translate-y-1">
                <div>
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-xs font-bold px-3 py-1 bg-blue-50 text-blue-600 rounded-md">SORAIA</span>
                        <div class="w-10 h-10 rounded-xl bg-blue-50 flex items-center justify-center text-blue-600 font-bold text-sm">SO</div>
                    </div>
                    <h3 class="font-bold text-gray-900 text-lg mb-1">Smart Radio Communication & Surveillance</h3>
                    <p class="text-xs text-blue-600 font-semibold uppercase tracking-wider mb-4">Smart Radio Communication & Surveillance</p>
                    <p class="text-gray-600 text-xs md:text-sm leading-relaxed mb-6">
                        SORAIA is a comprehensive service that integrates various important features for communication and monitoring audio/video that are specifically designed to provide comfort, security, and enterprise mobility. This solution ensures communication and supervision reliability to increase effectiveness operational and situational awareness.
                    </p>
                </div>
                <a href="#" class="inline-flex items-center text-blue-600 text-xs font-semibold hover:text-blue-700">
                    Learn More 
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                </a>
            </div>

            <!-- Layanan 4: SINTA -->
            <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 flex flex-col justify-between transition-transform hover:-translate-y-1">
                <div>
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-xs font-bold px-3 py-1 bg-blue-50 text-blue-600 rounded-md">SINTA</span>
                        <div class="w-10 h-10 rounded-xl bg-blue-50 flex items-center justify-center text-blue-600 font-bold text-sm">SI</div>
                    </div>
                    <h3 class="font-bold text-gray-900 text-lg mb-1">Information Technology Infrastructure Solutions</h3>
                    <p class="text-xs text-blue-600 font-semibold uppercase tracking-wider mb-4">Information Technology Infrastructure Solutions</p>
                    <p class="text-gray-600 text-xs md:text-sm leading-relaxed mb-6">
                        SINTA is a comprehensive solution that can be adjusted to the business specific needs in various industries. This solution provided many services including data centers, network devices, and professional services which can help your company in controlling costs, reducing the risk of asset ownership, as well as increasing IT operational productivity and efficiency.
                    </p>
                </div>
                <a href="#" class="inline-flex items-center text-blue-600 text-xs font-semibold hover:text-blue-700">
                    Learn More 
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                </a>
            </div>

            <!-- Layanan 5: SISKA (Dibuat melebar ke tengah jika ganjil) -->
            <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 flex flex-col justify-between transition-transform hover:-translate-y-1 md:col-span-2 max-w-2xl mx-auto w-full">
                <div>
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-xs font-bold px-3 py-1 bg-blue-50 text-blue-600 rounded-md">SISKA</span>
                        <div class="w-10 h-10 rounded-xl bg-blue-50 flex items-center justify-center text-blue-600 font-bold text-sm">SK</div>
                    </div>
                    <h3 class="font-bold text-gray-900 text-lg mb-1">Telecommunications Infrastructure Solution</h3>
                    <p class="text-xs text-blue-600 font-semibold uppercase tracking-wider mb-4">Telecommunications Infrastructure Solution</p>
                    <p class="text-gray-600 text-xs md:text-sm leading-relaxed mb-6">
                        SISKA is a comprehensive telecommunications solution providing a specific network with backbone lines and improved fiber-optic services with gas pipeline networks for reliable connectivity.
                    </p>
                </div>
                <a href="#" class="inline-flex items-center text-blue-600 text-xs font-semibold hover:text-blue-700">
                    Learn More 
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                </a>
            </div>

        </div>
    </section>

    <!-- Include Footer -->
    @include('components.footer')

</body>
</html>