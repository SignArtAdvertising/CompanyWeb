@extends('layouts.public')

@section('content')
<!-- Hero Section -->
<div class="relative bg-secondary overflow-hidden h-[90vh] flex items-center">
    <div class="absolute inset-0 z-0">
        <!-- Using a placeholder pattern or image -->
        <div class="absolute inset-0 bg-black opacity-50 z-10"></div>
        <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?q=80&w=2070&auto=format&fit=crop" alt="Workshop Background" class="w-full h-full object-cover">
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-20 w-full flex items-center">
        <div class="text-left max-w-3xl border-l-4 border-primary pl-6">
            <h1 class="text-5xl md:text-6xl font-heading font-bold text-white leading-tight mb-4">
                Solusi Digital Printing & <br> Periklanan Terdepan di <br> Medan
            </h1>
            <p class="mt-4 text-lg text-gray-200 sm:max-w-xl font-body mb-8">
                Pusat One Stop Solution Advertising. Melayani produksi visual (signage & digital printing) hingga penyewaan titik lokasi billboard strategis untuk brand Anda.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 mt-8">
                <a href="{{ url('/contact') }}" class="px-8 py-3 text-sm font-bold uppercase rounded text-white bg-primary hover:bg-red-700 transition tracking-wider">
                    MULAI KONSULTASI
                </a>
                <a href="{{ url('/services') }}" class="px-8 py-3 text-sm font-bold uppercase border-2 border-white rounded text-white hover:bg-white hover:text-black transition tracking-wider">
                    LIHAT PRODUK
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Featured Services Section -->
<div class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row justify-between items-end mb-12 border-b border-gray-200 pb-4 relative">
            <div>
                <h2 class="text-3xl font-heading font-bold text-black uppercase tracking-wide">LAYANAN <span class="font-light">UNGGULAN</span></h2>
                <div class="absolute bottom-0 left-0 w-24 h-1 bg-primary"></div>
            </div>
            <div class="mt-4 md:mt-0 text-sm text-gray-500 max-w-sm text-right">
                Pusat layanan pembuatan dan pemasangan media promosi dengan pengerjaan profesional yang mengutamakan kualitas, kecepatan, dan kepuasan Anda.
            </div>
        </div>

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

<!-- Company Introduction -->
<div class="py-24 bg-bg-section">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="relative">
                <div class="border-[8px] border-primary absolute -bottom-4 -right-4 w-48 h-48 z-0"></div>
                <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=800&auto=format&fit=crop&q=80" alt="Company Introduction" class="w-full rounded shadow-lg relative z-10 border-4 border-white">
            </div>
            <div>
                <p class="text-primary font-bold text-xs uppercase tracking-widest mb-3">ABOUT SIGN ART</p>
                <h3 class="text-4xl font-heading font-bold text-secondary mb-6 leading-tight">Mitra Periklanan Terpercaya<br>Anda Sejak 2004</h3>
                <p class="text-sm text-gray-600 mb-8 leading-relaxed">
                    Sign Art Advertising telah melayani ratusan klien dari berbagai industri dalam membangun identitas visual yang memukau. Kami menggabungkan kreativitas, material berkualitas, dan presisi tinggi.
                </p>
                <ul class="space-y-4 mb-10">
                    <li class="flex items-center text-sm font-medium text-gray-700">
                        <div class="bg-primary rounded-full p-1 mr-3">
                            <i data-lucide="check" class="text-white w-4 h-4"></i>
                        </div>
                        Pengerjaan Tepat Waktu
                    </li>
                    <li class="flex items-center text-sm font-medium text-gray-700">
                        <div class="bg-primary rounded-full p-1 mr-3">
                            <i data-lucide="check" class="text-white w-4 h-4"></i>
                        </div>
                        Tim Teknisi Handal & Berpengalaman
                    </li>
                    <li class="flex items-center text-sm font-medium text-gray-700">
                        <div class="bg-primary rounded-full p-1 mr-3">
                            <i data-lucide="check" class="text-white w-4 h-4"></i>
                        </div>
                        Harga Kompetitif dengan Kualitas Premium
                    </li>
                </ul>
                <a href="{{ url('/about') }}" class="inline-block px-8 py-3 text-xs font-bold uppercase text-white bg-black hover:bg-gray-800 transition tracking-wider">
                    PELAJARI SELENGKAPNYA
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Workshop Info -->
<div class="flex flex-col md:flex-row">
    <div class="w-full md:w-1/2 bg-[#2E2E2E] py-24 px-8 md:px-16 lg:px-24 flex flex-col justify-center">
        <h2 class="text-4xl font-heading font-bold text-white mb-10">Kunjungi Workshop Kami</h2>
        <div class="space-y-8">
            <div class="flex items-start">
                <div class="flex-shrink-0 bg-primary p-3 rounded">
                    <i data-lucide="map-pin" class="text-white w-5 h-5"></i>
                </div>
                <div class="ml-4">
                    <h4 class="text-sm font-bold text-white uppercase tracking-wider mb-1">Alamat</h4>
                    <p class="text-gray-400 text-sm">Jalan Mangkubumi, No.6B, Medan, North Sumatra 20151</p>
                </div>
            </div>
            <div class="flex items-start">
                <div class="flex-shrink-0 bg-primary p-3 rounded">
                    <i data-lucide="phone" class="text-white w-5 h-5"></i>
                </div>
                <div class="ml-4">
                    <h4 class="text-sm font-bold text-white uppercase tracking-wider mb-1">Telepon</h4>
                    <p class="text-gray-400 text-sm">(061) 415 8842</p>
                </div>
            </div>
            <div class="flex items-start">
                <div class="flex-shrink-0 bg-primary p-3 rounded">
                    <i data-lucide="mail" class="text-white w-5 h-5"></i>
                </div>
                <div class="ml-4">
                    <h4 class="text-sm font-bold text-white uppercase tracking-wider mb-1">Email</h4>
                    <p class="text-gray-400 text-sm">signart6.adv@gmail.com</p>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full md:w-1/2 min-h-[400px]">
        <!-- Google Maps iframe placeholder using real embed -->
        <iframe src="https://maps.google.com/maps?q=Jalan+Mangkubumi,+No.6B,+Medan,+North+Sumatra+20151&t=&z=14&ie=UTF8&iwloc=&output=embed" class="w-full h-full border-0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
@endsection
