@extends('layouts.public')

@section('title', $billboard->name . ' - Sign Art Advertising')

@section('content')
<!-- Header Section -->
<section class="relative bg-secondary py-16 px-4 sm:px-6 lg:px-8 overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0 bg-gradient-to-r from-secondary to-transparent z-10"></div>
        <img src="{{ asset('images/hero.webp') }}" alt="Background" class="w-full h-full object-cover">
    </div>
    <div class="relative z-10 max-w-7xl mx-auto">
        <div class="flex items-center gap-3 mb-4">
            <span class="bg-primary text-white text-xs font-bold uppercase tracking-wider py-1 px-3 rounded-full">
                {{ $billboard->type }}
            </span>
            <span class="bg-white/20 backdrop-blur-sm text-white text-xs font-bold uppercase tracking-wider py-1 px-3 rounded-full border border-white/20">
                {{ $billboard->code }}
            </span>
        </div>
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-heading font-black text-white leading-tight uppercase">
            {{ $billboard->name }}
        </h1>
    </div>
</section>

<!-- Main Detail Section -->
<section class="py-16 px-4 sm:px-6 lg:px-8 bg-gray-50">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            
            <!-- Left Column: Images -->
            <div class="lg:col-span-2 space-y-8">
                <!-- Area Billboard -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                    <div class="px-6 py-4 border-b border-gray-100 bg-gray-50">
                        <h3 class="text-lg font-heading font-bold text-gray-900 flex items-center">
                            <i data-lucide="image" class="w-5 h-5 mr-2 text-primary"></i> Area Promosi
                        </h3>
                    </div>
                    <div class="p-6">
                        @if($billboard->image_area)
                            <img src="{{ Storage::url($billboard->image_area) }}" alt="Area {{ $billboard->name }}" class="w-full h-auto rounded-lg shadow-sm">
                        @else
                            <div class="w-full h-64 bg-gray-100 rounded-lg flex items-center justify-center text-gray-400">
                                <span>Tidak ada gambar area promosi</span>
                            </div>
                        @endif
                    </div>
                </div>

                <!-- Denah Lokasi -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                    <div class="px-6 py-4 border-b border-gray-100 bg-gray-50 flex justify-between items-center">
                        <h3 class="text-lg font-heading font-bold text-gray-900 flex items-center">
                            <i data-lucide="map" class="w-5 h-5 mr-2 text-primary"></i> Denah Lokasi
                        </h3>
                        @if($billboard->maps_link)
                        <a href="{{ $billboard->maps_link }}" target="_blank" class="text-sm text-primary hover:text-red-700 font-medium flex items-center">
                            Buka di Maps <i data-lucide="external-link" class="w-4 h-4 ml-1"></i>
                        </a>
                        @endif
                    </div>
                    <div class="p-6">
                        @if($billboard->image_denah)
                            <img src="{{ Storage::url($billboard->image_denah) }}" alt="Denah {{ $billboard->name }}" class="w-full h-auto rounded-lg shadow-sm">
                        @else
                            <div class="w-full h-64 bg-gray-100 rounded-lg flex items-center justify-center text-gray-400">
                                <span>Tidak ada gambar denah lokasi</span>
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Right Column: Specs & Details -->
            <div class="space-y-8">
                
                <!-- Spesifikasi -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                    <div class="px-6 py-4 border-b border-gray-100 bg-secondary text-white">
                        <h3 class="text-lg font-heading font-bold flex items-center">
                            <i data-lucide="info" class="w-5 h-5 mr-2"></i> Spesifikasi
                        </h3>
                    </div>
                    <div class="p-6">
                        <dl class="space-y-4">
                            <div>
                                <dt class="text-sm font-medium text-gray-500">Ukuran</dt>
                                <dd class="mt-1 text-base font-semibold text-gray-900 flex items-center">
                                    <i data-lucide="maximize" class="w-4 h-4 mr-2 text-gray-400"></i> {{ $billboard->size ?: '-' }}
                                </dd>
                            </div>
                            <div>
                                <dt class="text-sm font-medium text-gray-500">Orientasi</dt>
                                <dd class="mt-1 text-base font-semibold text-gray-900 flex items-center">
                                    <i data-lucide="monitor" class="w-4 h-4 mr-2 text-gray-400"></i> {{ $billboard->orientation ?: '-' }}
                                </dd>
                            </div>
                            @if($billboard->spesifikasi)
                            <div class="pt-4 border-t border-gray-100">
                                <dt class="text-sm font-medium text-gray-500 mb-2">Detail Spesifikasi</dt>
                                <dd class="text-sm text-gray-700 prose prose-sm">
                                    {!! nl2br(e($billboard->spesifikasi)) !!}
                                </dd>
                            </div>
                            @endif
                        </dl>
                    </div>
                </div>

                <!-- Data Traffic -->
                @if($billboard->traffic_weekly_motor || $billboard->traffic_monthly_motor)
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                    <div class="px-6 py-4 border-b border-gray-100 bg-gray-50">
                        <h3 class="text-lg font-heading font-bold text-gray-900 flex items-center">
                            <i data-lucide="bar-chart-2" class="w-5 h-5 mr-2 text-primary"></i> Data Traffic
                        </h3>
                    </div>
                    <div class="p-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-center">
                            
                            <!-- Weekly -->
                            <div class="bg-blue-50 p-4 rounded-xl border border-blue-100">
                                <span class="block text-sm font-bold text-blue-800 uppercase tracking-wider mb-4 border-b border-blue-200 pb-2">Weekly</span>
                                <div class="grid grid-cols-2 gap-4">
                                    <div class="text-center">
                                        <i data-lucide="bike" class="w-5 h-5 mx-auto text-blue-600 mb-1"></i>
                                        <div class="text-xs text-blue-600 font-semibold">Motor</div>
                                        <div class="text-sm font-black text-blue-900">{{ number_format($billboard->traffic_weekly_motor, 0, ',', '.') }}</div>
                                    </div>
                                    <div class="text-center">
                                        <i data-lucide="car" class="w-5 h-5 mx-auto text-blue-600 mb-1"></i>
                                        <div class="text-xs text-blue-600 font-semibold">Mobil</div>
                                        <div class="text-sm font-black text-blue-900">{{ number_format($billboard->traffic_weekly_mobil, 0, ',', '.') }}</div>
                                    </div>
                                    <div class="text-center">
                                        <i data-lucide="bus" class="w-5 h-5 mx-auto text-blue-600 mb-1"></i>
                                        <div class="text-xs text-blue-600 font-semibold">Bus/Van</div>
                                        <div class="text-sm font-black text-blue-900">{{ number_format($billboard->traffic_weekly_bus, 0, ',', '.') }}</div>
                                    </div>
                                    <div class="text-center">
                                        <i data-lucide="truck" class="w-5 h-5 mx-auto text-blue-600 mb-1"></i>
                                        <div class="text-xs text-blue-600 font-semibold">Truk</div>
                                        <div class="text-sm font-black text-blue-900">{{ number_format($billboard->traffic_weekly_truk, 0, ',', '.') }}</div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Monthly -->
                            <div class="bg-green-50 p-4 rounded-xl border border-green-100">
                                <span class="block text-sm font-bold text-green-800 uppercase tracking-wider mb-4 border-b border-green-200 pb-2">Monthly</span>
                                <div class="grid grid-cols-2 gap-4">
                                    <div class="text-center">
                                        <i data-lucide="bike" class="w-5 h-5 mx-auto text-green-600 mb-1"></i>
                                        <div class="text-xs text-green-600 font-semibold">Motor</div>
                                        <div class="text-sm font-black text-green-900">{{ number_format($billboard->traffic_monthly_motor, 0, ',', '.') }}</div>
                                    </div>
                                    <div class="text-center">
                                        <i data-lucide="car" class="w-5 h-5 mx-auto text-green-600 mb-1"></i>
                                        <div class="text-xs text-green-600 font-semibold">Mobil</div>
                                        <div class="text-sm font-black text-green-900">{{ number_format($billboard->traffic_monthly_mobil, 0, ',', '.') }}</div>
                                    </div>
                                    <div class="text-center">
                                        <i data-lucide="bus" class="w-5 h-5 mx-auto text-green-600 mb-1"></i>
                                        <div class="text-xs text-green-600 font-semibold">Bus/Van</div>
                                        <div class="text-sm font-black text-green-900">{{ number_format($billboard->traffic_monthly_bus, 0, ',', '.') }}</div>
                                    </div>
                                    <div class="text-center">
                                        <i data-lucide="truck" class="w-5 h-5 mx-auto text-green-600 mb-1"></i>
                                        <div class="text-xs text-green-600 font-semibold">Truk</div>
                                        <div class="text-sm font-black text-green-900">{{ number_format($billboard->traffic_monthly_truk, 0, ',', '.') }}</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <p class="text-xs text-gray-400 mt-4 text-center">*Berdasarkan data pantauan satelit</p>
                    </div>
                </div>
                @endif

                <!-- Keterangan Lokasi -->
                @if($billboard->keterangan)
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                    <div class="px-6 py-4 border-b border-gray-100 bg-gray-50">
                        <h3 class="text-lg font-heading font-bold text-gray-900 flex items-center">
                            <i data-lucide="map-pin" class="w-5 h-5 mr-2 text-primary"></i> Keterangan Lokasi
                        </h3>
                    </div>
                    <div class="p-6">
                        <ul class="space-y-2 text-sm text-gray-700 list-disc list-inside">
                            @foreach(explode("\n", $billboard->keterangan) as $ket)
                                @if(trim($ket))
                                    <li>{{ trim($ket) }}</li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
                @endif

                <!-- CTA -->
                <div class="bg-primary rounded-2xl shadow-lg p-6 text-center text-white relative overflow-hidden">
                    <div class="absolute inset-0 bg-black opacity-10"></div>
                    <div class="relative z-10">
                        <h3 class="text-xl font-heading font-bold mb-2">Tertarik dengan Lokasi Ini?</h3>
                        <p class="text-sm text-red-100 mb-6">Hubungi tim kami untuk mendapatkan penawaran harga terbaik.</p>
                        <a href="{{ url('/contact') }}" class="inline-flex justify-center w-full bg-white text-primary font-bold py-3 px-6 rounded-lg shadow hover:bg-gray-50 transition-colors">
                            Hubungi Kami
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection
