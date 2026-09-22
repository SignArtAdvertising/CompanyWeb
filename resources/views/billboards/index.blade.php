@extends('layouts.public')

@section('title', 'Daftar Lokasi Billboard - Sign Art Advertising')

@section('content')
<!-- Hero Section -->
<section class="relative bg-secondary py-24 px-4 sm:px-6 lg:px-8 flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 opacity-20">
        <div class="absolute inset-0 bg-gradient-to-r from-secondary to-transparent z-10"></div>
        <img src="{{ asset('images/hero.webp') }}" alt="Billboard Background" class="w-full h-full object-cover hero-zoom">
    </div>
    <div class="relative z-10 text-center max-w-3xl mx-auto">
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-heading font-black text-white mb-6 uppercase tracking-tight fade-in-up" style="animation-delay: 0.1s;">
            Lokasi <span class="text-primary">Billboard</span> Tersedia
        </h1>
        <p class="text-lg md:text-xl text-gray-300 mb-8 font-light fade-in-up" style="animation-delay: 0.3s;">
            Pilih lokasi strategis untuk kampanye promosi Anda dengan titik billboard premium dari Sign Art Advertising.
        </p>
    </div>
</section>

<!-- Content Section -->
<section class="py-20 px-4 sm:px-6 lg:px-8 bg-gray-50">
    <div class="max-w-7xl mx-auto">
        <!-- Filter & Search Section -->
        <div class="mb-10">
            <form action="{{ route('billboards.public.index') }}" method="GET" class="flex flex-col md:flex-row gap-4 justify-between items-center bg-white p-4 rounded shadow-sm border border-gray-100">
                <div class="flex items-center gap-2 w-full md:w-1/2">
                    <i data-lucide="search" class="w-5 h-5 text-gray-400 absolute ml-3"></i>
                    <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari kode atau nama billboard..." class="w-full border border-gray-300 rounded pl-10 pr-4 py-3 text-sm focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition">
                </div>
                <div class="flex items-center gap-4 w-full md:w-auto">
                    <select name="type" class="w-full md:w-48 border border-gray-300 rounded px-4 py-3 text-sm focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition" onchange="this.form.submit()">
                        <option value="all">Semua Tipe</option>
                        <option value="Billboard" {{ request('type') == 'Billboard' ? 'selected' : '' }}>Billboard</option>
                        <option value="Semi Billboard" {{ request('type') == 'Semi Billboard' ? 'selected' : '' }}>Semi Billboard</option>
                        <option value="Baliho" {{ request('type') == 'Baliho' ? 'selected' : '' }}>Baliho</option>
                    </select>
                    <button type="submit" class="bg-primary text-white px-6 py-3 rounded text-sm font-bold hover:bg-red-700 transition">
                        CARI
                    </button>
                </div>
            </form>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
            @forelse($billboards as $item)
                <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 overflow-hidden border border-gray-100 flex flex-col fade-in-up">
                    <div class="relative h-64 overflow-hidden group">
                        @if($item->image_area)
                            <img src="{{ Storage::disk('s3')->url($item->image_area) }}" alt="{{ $item->name }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                        @else
                            <div class="w-full h-full bg-gray-200 flex items-center justify-center text-gray-400">
                                <i data-lucide="image" class="w-16 h-16 opacity-50"></i>
                            </div>
                        @endif
                        <div class="absolute top-4 left-4">
                            <span class="bg-primary text-white text-xs font-bold uppercase tracking-wider py-1.5 px-3 rounded-full shadow-lg">
                                {{ $item->type }}
                            </span>
                        </div>
                        <div class="absolute top-4 right-4">
                            <span class="bg-secondary/90 backdrop-blur-sm text-white text-xs font-bold uppercase tracking-wider py-1.5 px-3 rounded-full shadow-lg border border-white/20">
                                {{ $item->code }}
                            </span>
                        </div>
                    </div>
                    
                    <div class="p-8 flex flex-col flex-grow">
                        <h3 class="text-xl font-heading font-bold text-gray-900 mb-3 leading-tight line-clamp-2 hover:text-primary transition-colors">
                            <a href="{{ route('billboards.public.show', $item->slug) }}">{{ $item->name }}</a>
                        </h3>
                        
                        <div class="flex items-center text-sm text-gray-500 mb-4 bg-gray-50 p-3 rounded-lg border border-gray-100">
                            <i data-lucide="maximize" class="w-4 h-4 mr-2 text-primary"></i>
                            <span class="font-medium">{{ $item->size ?: 'Ukuran Menyesuaikan' }}</span>
                            <span class="mx-2 text-gray-300">|</span>
                            <span class="font-medium text-gray-600">{{ $item->orientation }}</span>
                        </div>
                        
                        <div class="mt-auto pt-6 flex justify-between items-center border-t border-gray-100">
                            <a href="{{ route('billboards.public.show', $item->slug) }}" class="inline-flex items-center text-primary font-bold text-sm uppercase tracking-wide hover:text-red-700 transition group">
                                Lihat Detail 
                                <i data-lucide="arrow-right" class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-full text-center py-20 bg-white rounded-2xl shadow-sm border border-gray-100">
                    <i data-lucide="map-pin-off" class="w-16 h-16 text-gray-300 mx-auto mb-4"></i>
                    <h3 class="text-xl font-heading font-medium text-gray-900">Belum ada lokasi billboard yang tersedia</h3>
                    <p class="text-gray-500 mt-2">Silakan cek kembali secara berkala untuk update lokasi terbaru.</p>
                </div>
            @endforelse
        </div>
    </div>
</section>
@endsection
