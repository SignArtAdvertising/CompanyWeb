<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sign Art Advertising | Professional Signage Maker')</title>
    <!-- SEO Meta Tags -->
    <meta name="description" content="Sign Art Advertising adalah perusahaan pembuat signage profesional. Kami melayani pembuatan Billboard, Neon Box, Shop Sign, dan Digital Printing dengan kualitas premium.">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://unpkg.com/lucide@latest"></script>
    <style>
        /* Micro Animations */
        .fade-in-up {
            animation: fadeInUp 0.8s ease-out forwards;
            opacity: 0;
            transform: translateY(20px);
        }
        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .hero-zoom {
            animation: zoomBg 10s ease-in-out infinite alternate;
        }
        @keyframes zoomBg {
            from { transform: scale(1); }
            to { transform: scale(1.05); }
        }
    </style>
</head>
<body class="font-body text-text-main bg-bg-base antialiased" x-data="{ scrolled: false, mobileMenuOpen: false }" @scroll.window="scrolled = (window.pageYOffset > 50)">

    <!-- Navbar -->
    <nav :class="{'bg-white shadow-lg': scrolled, 'bg-white/90 backdrop-blur-md border-b border-gray-100': !scrolled}" class="fixed top-0 w-full z-50 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20 relative">
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ url('/') }}" class="flex items-center gap-3">
                        <img class="h-10 w-auto" src="{{ asset('images/logo.jpeg') }}" alt="Sign Art Logo">
                        <span class="font-heading text-2xl font-bold tracking-wide text-secondary">SIGN ART</span>
                    </a>
                </div>
                <div class="hidden md:flex absolute left-1/2 transform -translate-x-1/2 space-x-8 items-center text-sm font-bold uppercase font-heading">
                    <a href="{{ url('/') }}" class="{{ request()->is('/') ? 'text-primary border-b-2 border-primary pb-1' : 'text-gray-800 hover:text-primary transition duration-200' }}">Home</a>
                    <a href="{{ url('/services') }}" class="{{ request()->is('services') ? 'text-primary border-b-2 border-primary pb-1' : 'text-gray-800 hover:text-primary transition duration-200' }}">Services</a>
                    <a href="{{ url('/billboards') }}" class="{{ request()->is('billboards*') ? 'text-primary border-b-2 border-primary pb-1' : 'text-gray-800 hover:text-primary transition duration-200' }}">Billboard</a>
                    <a href="{{ url('/about') }}" class="{{ request()->is('about') ? 'text-primary border-b-2 border-primary pb-1' : 'text-gray-800 hover:text-primary transition duration-200' }}">About Us</a>
                    <a href="{{ url('/contact') }}" class="{{ request()->is('contact') ? 'text-primary border-b-2 border-primary pb-1' : 'text-gray-800 hover:text-primary transition duration-200' }}">Contact</a>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button @click="mobileMenuOpen = !mobileMenuOpen" class="text-gray-800 hover:text-primary focus:outline-none">
                        <i data-lucide="menu" class="h-6 w-6"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- Mobile Menu -->
        <div x-show="mobileMenuOpen" class="md:hidden bg-white border-t border-gray-100" style="display: none;">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="{{ url('/') }}" class="block px-3 py-2 text-base font-medium text-gray-800 hover:text-primary hover:bg-gray-50 rounded-md">Home</a>
                <a href="{{ url('/services') }}" class="block px-3 py-2 text-base font-medium text-gray-800 hover:text-primary hover:bg-gray-50 rounded-md">Services</a>
                <a href="{{ url('/billboards') }}" class="block px-3 py-2 text-base font-medium text-gray-800 hover:text-primary hover:bg-gray-50 rounded-md">Billboard</a>
                <a href="{{ url('/about') }}" class="block px-3 py-2 text-base font-medium text-gray-800 hover:text-primary hover:bg-gray-50 rounded-md">About Us</a>
                <a href="{{ url('/contact') }}" class="block px-3 py-2 text-base font-medium text-gray-800 hover:text-primary hover:bg-gray-50 rounded-md">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="min-h-screen pt-20">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-secondary text-white py-16 border-t-[6px] border-primary">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-8 lg:gap-12">
                <div class="sm:col-span-2 lg:col-span-2">
                    <div class="flex items-center gap-3 mb-6">
                        <img class="h-8 w-auto" src="{{ asset('images/logo.jpeg') }}" alt="Sign Art Logo">
                        <span class="font-heading text-2xl font-bold tracking-wide text-white">SIGN ART</span>
                    </div>
                    <p class="text-gray-400 text-sm leading-relaxed mb-6 lg:pr-8">
                        Menjadi media digital resmi Sign Art Advertising dalam memperkenalkan perusahaan, layanan, serta daftar billboard kepada calon pelanggan dengan kualitas dan profesionalisme tinggi.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition"><i data-lucide="instagram" class="w-5 h-5"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white transition"><i data-lucide="facebook" class="w-5 h-5"></i></a>
                        <a href="https://www.linkedin.com/company/signart-adv/home/" target="_blank" class="text-gray-400 hover:text-white transition"><i data-lucide="linkedin" class="w-5 h-5"></i></a>
                    </div>
                </div>
                <div>
                    <h4 class="text-lg font-heading font-medium mb-6 uppercase tracking-wider">Services</h4>
                    <ul class="space-y-3 text-sm text-gray-400">
                        <li><a href="{{ url('/billboards') }}" class="hover:text-primary transition flex items-center gap-2"><i data-lucide="chevron-right" class="w-3 h-3 text-primary"></i> Billboard</a></li>
                        <li class="flex items-center gap-2"><i data-lucide="chevron-right" class="w-3 h-3 text-primary"></i> Neon Box</li>
                        <li class="flex items-center gap-2"><i data-lucide="chevron-right" class="w-3 h-3 text-primary"></i> Shop Sign</li>
                        <li class="flex items-center gap-2"><i data-lucide="chevron-right" class="w-3 h-3 text-primary"></i> Digital Printing</li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-heading font-medium mb-6 uppercase tracking-wider">Company</h4>
                    <ul class="space-y-3 text-sm text-gray-400">
                        <li><a href="{{ url('/about') }}" class="hover:text-primary transition flex items-center gap-2"><i data-lucide="chevron-right" class="w-3 h-3 text-primary"></i> About Us</a></li>
                        <li><a href="{{ url('/billboards') }}" class="hover:text-primary transition flex items-center gap-2"><i data-lucide="chevron-right" class="w-3 h-3 text-primary"></i> Billboard</a></li>
                        <li><a href="{{ url('/contact') }}" class="hover:text-primary transition flex items-center gap-2"><i data-lucide="chevron-right" class="w-3 h-3 text-primary"></i> Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-heading font-medium mb-6 uppercase tracking-wider">Billboards</h4>
                    <ul class="space-y-3 text-sm text-gray-400">
                        <li><a href="{{ route('billboards.public.index', ['type' => 'Billboard']) }}" class="hover:text-primary transition flex items-center gap-2"><i data-lucide="chevron-right" class="w-3 h-3 text-primary"></i> Billboard</a></li>
                        <li><a href="{{ route('billboards.public.index', ['type' => 'Semi Billboard']) }}" class="hover:text-primary transition flex items-center gap-2"><i data-lucide="chevron-right" class="w-3 h-3 text-primary"></i> Semi Billboard</a></li>
                        <li><a href="{{ route('billboards.public.index', ['type' => 'Baliho']) }}" class="hover:text-primary transition flex items-center gap-2"><i data-lucide="chevron-right" class="w-3 h-3 text-primary"></i> Baliho</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-12 pt-8 flex flex-col md:flex-row justify-center items-center text-sm text-gray-500">
                <p>&copy; {{ date('Y') }} Sign Art Advertising. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        lucide.createIcons();
    </script>
</body>
</html>
