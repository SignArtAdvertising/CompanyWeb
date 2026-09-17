@extends('layouts.public')

@section('title', 'Layanan | Sign Art Advertising')

@section('content')

{{-- ===================== HERO SECTION ===================== --}}
<div class="relative min-h-[55vh] flex items-center bg-secondary overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1504328345606-18bbc8c9d7d1?w=1600&auto=format&fit=crop&q=80" alt="Workshop" class="w-full h-full object-cover opacity-20">
    </div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 w-full">
        <div class="max-w-2xl">
            <h1 class="text-5xl md:text-6xl font-heading font-bold text-white leading-tight mb-6">
                LAYANAN <span class="text-primary">PROFESIONAL</span> KAMI
            </h1>
            <p class="text-gray-300 text-base mb-10 leading-relaxed max-w-lg">
                Sign Art Advertising menyediakan layanan periklanan terpadu, mulai dari produksi visual (digital printing, neon box, signage) hingga penyewaan puluhan titik lokasi billboard strategis untuk memaksimalkan eksposur brand Anda.
            </p>
        </div>
    </div>
</div>

{{-- ===================== SERVICES GRID ===================== --}}
<div class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @php
            $services = [
                [
                    'slug'    => 'billboard',
                    'badge'   => 'PRINTING',
                    'title'   => 'BILLBOARD ADVERTISING',
                    'desc'    => 'Kami menyediakan solusi billboard dengan pemasangan dan pencetakan premium menggunakan material outdoor terkuat dan tahan lama dengan pencahayaan maksimal.',
                    'img'     => asset('images/gbr billboard-01.png'),
                    'features'=> ['Cetak Printing', '40+ Lokasi', 'Pemasangan Profesional'],
                    'has_link'=> true
                ],
                [
                    'slug'    => 'neon-box',
                    'badge'   => 'SIGN',
                    'title'   => 'NEON BOX & SIGNAGE',
                    'desc'    => 'Kami membuat neon box akrilik dengan cutting presisi menggunakan laser, dilengkapi sistem LED dengan distribusi cahaya yang merata dan tahan lama.',
                    'img'     => 'https://images.unsplash.com/photo-1563298723-dcfebaa392e3?w=600&auto=format&fit=crop&q=80',
                    'features'=> [],
                    'has_link'=> false
                ],
                [
                    'slug'    => 'shop-sign',
                    'badge'   => 'BRANDING',
                    'title'   => 'SHOP SIGN & BRANDING',
                    'desc'    => 'Solusi tanda toko corporate menggunakan huruf timbul stainless steel, aluminium composite, dan back-lit LED untuk kesan profesional dan elegan.',
                    'img'     => 'https://images.unsplash.com/photo-1528699633788-424224dc89b5?w=600&auto=format&fit=crop&q=80',
                    'features'=> [],
                    'has_link'=> false
                ],
                [
                    'slug'    => 'digital-printing',
                    'badge'   => 'PRINTED',
                    'title'   => 'DIGITAL PRINTING',
                    'desc'    => 'Teknologi cetak digital format besar (1200 dpi) menggunakan printer UV flatbed industri untuk banner, spanduk, stiker, dan berbagai media cetak lainnya.',
                    'img'     => asset('images/digital_printing.png'),
                    'features'=> [],
                    'has_link'=> false
                ],
            ];
        @endphp

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($services as $service)
            <div class="bg-white border border-gray-100 shadow-sm rounded overflow-hidden flex flex-col group hover:shadow-lg transition duration-300">
                <div class="relative h-48 overflow-hidden">
                    <img src="{{ $service['img'] }}" alt="{{ $service['title'] }}" class="w-full h-full object-cover transform group-hover:scale-105 transition duration-500 grayscale group-hover:grayscale-0">
                    <span class="absolute top-3 left-3 bg-primary text-white text-[9px] font-bold px-2 py-1 uppercase tracking-wider">{{ $service['badge'] }}</span>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <h3 class="text-base font-heading font-bold text-black mb-3 uppercase leading-snug">{{ $service['title'] }}</h3>
                    <p class="text-xs text-gray-500 leading-relaxed mb-5 flex-grow">{{ $service['desc'] }}</p>
                    
                    <ul class="space-y-1 mb-6">
                        @foreach($service['features'] as $feat)
                        <li class="flex items-center text-xs text-gray-600">
                            <i data-lucide="check" class="w-3 h-3 text-primary mr-2 flex-shrink-0"></i>
                            {{ $feat }}
                        </li>
                        @endforeach
                    </ul>

                    @if($service['has_link'])
                    <a href="{{ url('/billboards') }}" class="text-primary text-[10px] font-bold uppercase tracking-wider flex items-center hover:text-red-800 transition group-hover:gap-2 gap-1">
                        CEK LOKASI <i data-lucide="chevron-right" class="w-3 h-3"></i>
                    </a>
                    @else
                    <div class="h-[15px]"></div>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

{{-- ===================== WHY CHOOSE US ===================== --}}
<div class="py-24 bg-[#f5f5f5]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

            <!-- Left: Text -->
            <div>
                <p class="text-primary text-xs font-bold uppercase tracking-widest mb-3">OUR ADVANTAGE</p>
                <h2 class="text-4xl font-heading font-bold text-black mb-8 leading-tight uppercase">
                    Mengapa Memilih<br><span class="text-primary">SIGN ART</span> ADVERTISING?
                </h2>
                <p class="text-gray-600 text-sm leading-relaxed mb-10 max-w-md">
                    Kami menggabungkan presisi teknik dengan kreativitas visual untuk memastikan setiap proyek memberikan dampak maksimal bagi bisnis Anda dengan tetap menjaga kualitas, ketepatan waktu, dan anggaran yang efisien.
                </p>

                <div class="grid grid-cols-2 gap-6">
                    <div class="bg-white p-5 rounded shadow-sm border border-gray-100">
                        <p class="text-3xl font-heading font-bold text-black mb-1">20+</p>
                        <p class="text-xs font-bold text-gray-700 uppercase tracking-wide mb-2">TAHUN</p>
                        <p class="text-xs text-gray-500">Pengalaman lebih dari 2004 di industri periklanan.</p>
                    </div>
                    <div class="bg-white p-5 rounded shadow-sm border border-gray-100">
                        <p class="text-3xl font-heading font-bold text-black mb-1">★★★★★</p>
                        <p class="text-xs font-bold text-gray-700 uppercase tracking-wide mb-2">PRESISI TINGGI</p>
                        <p class="text-xs text-gray-500">Dikerjakan dengan mesin CNC dan teknisi handal.</p>
                    </div>
                    <div class="bg-white p-5 rounded shadow-sm border border-gray-100">
                        <div class="flex items-center mb-2">
                            <i data-lucide="factory" class="w-5 h-5 text-primary mr-2"></i>
                            <p class="text-xs font-bold text-gray-700 uppercase tracking-wide">INDUSTRIAL GRADE</p>
                        </div>
                        <p class="text-xs text-gray-500">Material berkualitas industrial untuk ketahanan jangka panjang.</p>
                    </div>
                    <div class="bg-white p-5 rounded shadow-sm border border-gray-100">
                        <div class="flex items-center mb-2">
                            <i data-lucide="zap" class="w-5 h-5 text-primary mr-2"></i>
                            <p class="text-xs font-bold text-gray-700 uppercase tracking-wide">FAST RESPONSE</p>
                        </div>
                        <p class="text-xs text-gray-500">Menerima pertanyaan dan mulai produksi dalam 24 jam.</p>
                    </div>
                </div>
            </div>

            <!-- Right: Image with overlay badge -->
            <div class="relative">
                <img src="https://images.unsplash.com/photo-1504328345606-18bbc8c9d7d1?w=800&auto=format&fit=crop&q=80" alt="Manufacturing Floor" class="w-full h-[520px] object-cover rounded shadow-xl">
                <div class="absolute bottom-6 left-6 bg-black/80 text-white px-6 py-4 rounded">
                    <p class="text-primary text-[10px] font-bold uppercase tracking-widest">20+ YEARS</p>
                    <p class="text-white text-sm font-bold uppercase tracking-wide">MANUFACTURING EXCELLENCE</p>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- ===================== WORKFLOW ===================== --}}
<div class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-heading font-bold text-black uppercase tracking-wide mb-4">WORKFLOW KAMI</h2>
            <p class="text-gray-500 text-sm max-w-xl mx-auto">Proses kami yang terstruktur dan transparan memastikan setiap proyek selesai tepat waktu sesuai standar.</p>
        </div>

        @php
            $steps = [
                ['icon' => 'message-circle', 'title' => 'Consultation', 'desc' => 'Diskusi kebutuhan klien untuk menentukan solusi periklanan yang paling tepat.'],
                ['icon' => 'pen-tool', 'title' => 'Design', 'desc' => 'Visual mocking dan revisi desain sampai klien puas sebelum produksi dimulai.'],
                ['icon' => 'settings', 'title' => 'Fabrication', 'desc' => 'Proses produksi menggunakan mesin dan teknisi berpengalaman berstandar industri.'],
                ['icon' => 'truck', 'title' => 'Installation', 'desc' => 'Pengiriman dan pemasangan oleh tim lapangan terlatih, tepat waktu dan aman.'],
            ];
        @endphp

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 relative">
            <!-- Connector line (desktop only) -->
            <div class="hidden lg:block absolute top-12 left-[12.5%] right-[12.5%] h-[2px] bg-gray-200 z-0"></div>

            @foreach($steps as $i => $step)
            <div class="text-center relative z-10">
                <div class="w-24 h-24 bg-white border-2 border-primary rounded-full flex items-center justify-center mx-auto mb-6 shadow-md shadow-red-100">
                    <i data-lucide="{{ $step['icon'] }}" class="w-10 h-10 text-primary"></i>
                </div>
                <h3 class="text-lg font-heading font-bold text-black mb-2 uppercase tracking-wide">{{ $step['title'] }}</h3>
                <p class="text-xs text-gray-500 leading-relaxed max-w-[180px] mx-auto">{{ $step['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</div>

{{-- ===================== RED CTA BANNER ===================== --}}
<div class="bg-primary py-24">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl md:text-5xl font-heading font-bold text-white uppercase leading-tight mb-6">
            SIAP UNTUK MENINGKATKAN<br>VISIBILITAS BRAND ANDA?
        </h2>
        <p class="text-white/80 text-sm max-w-xl mx-auto mb-10">
            Hubungi kami hari ini untuk konsultasi gratis dan penawaran yang sesuai dengan kebutuhan bisnis Anda yang kompetitif.
        </p>
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="{{ url('/contact') }}" class="px-8 py-3 text-xs font-bold uppercase text-primary bg-white hover:bg-gray-100 transition tracking-wider shadow-md">
                REQUEST A QUOTE
            </a>

        </div>
    </div>
</div>

@endsection
