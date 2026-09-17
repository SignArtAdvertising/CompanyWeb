@extends('layouts.public')

@section('title', 'Tentang Kami | Sign Art Advertising')

@section('content')

{{-- ===================== HERO ===================== --}}
<div class="relative min-h-[70vh] flex items-end bg-secondary overflow-hidden">
    {{-- Background photo grid --}}
    <div class="absolute inset-0 z-0 grid grid-cols-3 grid-rows-2 gap-1 opacity-30">
        <img src="https://images.unsplash.com/photo-1504328345606-18bbc8c9d7d1?w=600&auto=format&fit=crop&q=60" class="w-full h-full object-cover" alt="">
        <img src="https://images.unsplash.com/photo-1620325867502-221ddb5faa5f?w=600&auto=format&fit=crop&q=60" class="w-full h-full object-cover" alt="">
        <img src="https://images.unsplash.com/photo-1582216503949-c14d9b1bfb26?w=600&auto=format&fit=crop&q=60" class="w-full h-full object-cover" alt="">
        <img src="https://images.unsplash.com/photo-1559828551-7896ff63e00b?w=600&auto=format&fit=crop&q=60" class="w-full h-full object-cover" alt="">
        <img src="https://images.unsplash.com/photo-1563298723-dcfebaa392e3?w=600&auto=format&fit=crop&q=60" class="w-full h-full object-cover" alt="">
        <img src="https://images.unsplash.com/photo-1541882255745-e6308ba6e855?w=600&auto=format&fit=crop&q=60" class="w-full h-full object-cover" alt="">
    </div>
    {{-- Dark overlay --}}
    <div class="absolute inset-0 bg-black/70 z-0"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-20 pt-32 w-full">
        <div class="border-l-4 border-primary pl-6 max-w-2xl">
            <h1 class="text-5xl md:text-7xl font-heading font-bold text-white leading-none uppercase mb-4">
                DUA DEKADE<br>PRESISI DALAM<br><span class="text-primary">PERIKLANAN</span>
            </h1>
            <p class="text-gray-300 text-sm max-w-lg leading-relaxed mt-6">
                Selama lebih dari 20 tahun, Sign Art Advertising telah membuktikan diri sebagai mitra periklanan terpercaya ratusan klien dari berbagai industri di Indonesia.
            </p>
        </div>
    </div>
</div>

{{-- ===================== COMPANY STORY ===================== --}}
<div class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
            {{-- Left: Heading --}}
            <div>
                <h2 class="text-4xl md:text-5xl font-heading font-bold text-black uppercase leading-tight">
                    WARISAN KUALITAS &<br><span class="text-primary">INOVASI</span>
                </h2>
            </div>
            {{-- Right: Text --}}
            <div class="space-y-5 text-gray-600 text-sm leading-relaxed">
                <p>
                    Sign Art Advertising didirikan pada tahun 2004 di Medan dengan fokus utama memberikan solusi periklanan luar dan dalam ruang yang berkualitas tinggi. Berbekal semangat dan komitmen terhadap keunggulan kualitas tanpa kompromi, perusahaan kami tumbuh secara pasti menjadi penyedia layanan advertising terpercaya di Indonesia.
                </p>
                <p>
                    Selama hampir dua dekade, kami telah menangani berbagai proyek mulai dari bisnis lokal hingga korporasi nasional. Kepercayaan klien adalah fondasi utama yang mendorong kami untuk terus berinovasi dan meningkatkan standar pelayanan di setiap aspek pengerjaan kami.
                </p>
                <p>
                    Kini, didukung oleh tim spesialis yang solid, dedikatif, dan berpengalaman di bidangnya, Sign Art Advertising siap menjadi mitra periklanan terpercaya Anda untuk jangka panjang dalam memenuhi segala kebutuhan branding visual Anda.
                </p>
            </div>
        </div>
    </div>
</div>

{{-- ===================== VISION & MISSION ===================== --}}
<div class="py-0 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-24">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

            {{-- VISI KAMI — Dark card with image --}}
            <div class="relative overflow-hidden rounded-sm min-h-[280px] flex flex-col justify-end group">
                <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?w=800&auto=format&fit=crop&q=80" alt="Visi" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition duration-700">
                <div class="absolute inset-0 bg-black/75"></div>
                <div class="relative z-10 p-8">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="bg-primary p-2 rounded"><i data-lucide="eye" class="w-4 h-4 text-white"></i></div>
                        <h3 class="text-white text-xs font-bold uppercase tracking-widest">VISI KAMI</h3>
                    </div>
                    <p class="text-gray-300 text-sm leading-relaxed">
                        Menjadi perusahaan advertising terdepan di Indonesia yang dikenal atas inovasi, kualitas premium, dan layanan end-to-end yang melampaui ekspektasi klien di setiap proyek yang kami kerjakan.
                    </p>
                </div>
            </div>

            {{-- MISI KAMI — White card --}}
            <div class="bg-[#f5f5f5] border border-gray-200 rounded-sm p-8">
                <div class="flex items-center gap-3 mb-6">
                    <div class="bg-primary p-2 rounded"><i data-lucide="target" class="w-4 h-4 text-white"></i></div>
                    <h3 class="text-secondary text-xs font-bold uppercase tracking-widest">MISI KAMI</h3>
                </div>
                <ul class="space-y-4">
                    @php
                        $missions = [
                            'Memberikan solusi desain dan produksi periklanan yang inovatif dan relevan.',
                            'Menggunakan material berkualitas industri dengan harga yang kompetitif.',
                            'Menyelesaikan setiap proyek tepat waktu tanpa mengorbankan presisi.',
                            'Membangun hubungan jangka panjang berbasis kepercayaan dengan setiap klien.',
                            'Terus berinovasi dengan adopsi teknologi mesin dan material terbaru.',
                        ];
                    @endphp
                    @foreach($missions as $i => $mission)
                    <li class="flex items-start text-sm text-gray-700">
                        <span class="flex-shrink-0 w-6 h-6 bg-primary text-white text-[10px] font-bold rounded-full flex items-center justify-center mr-3 mt-0.5">{{ $i + 1 }}</span>
                        {{ $mission }}
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

{{-- ===================== CORE VALUES ===================== --}}
<div class="py-24 bg-[#f5f5f5] border-t border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-heading font-bold text-secondary uppercase tracking-wide mb-2">NILAI INTI KAMI</h2>
            <div class="w-16 h-1 bg-primary mx-auto"></div>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            @php
                $values = [
                    ['icon' => 'shield-check', 'title' => 'PROFESIONALITAS', 'desc' => 'Setiap proyek dikerjakan oleh tim terlatih dengan standar profesional tertinggi yang tidak pernah kami kompromikan.'],
                    ['icon' => 'crosshair', 'title' => 'PRESISI', 'desc' => 'Ketelitian dalam setiap detail produksi adalah identitas kami, dari cutting hingga instalasi akhir di lapangan.'],
                    ['icon' => 'lightbulb', 'title' => 'INOVASI', 'desc' => 'Kami terus mengadopsi teknologi terbaru untuk hasil cetak dan fabrikasi yang melampaui standar industri.'],
                    ['icon' => 'heart-handshake', 'title' => 'INTEGRITAS', 'desc' => 'Kejujuran dan transparansi adalah fondasi dari setiap hubungan yang kami bangun bersama klien.'],
                ];
            @endphp
            @foreach($values as $val)
            <div class="text-center p-6 bg-white rounded-sm border border-gray-100 shadow-sm group hover:shadow-md hover:border-primary transition duration-300">
                <i data-lucide="{{ $val['icon'] }}" class="w-8 h-8 text-secondary group-hover:text-primary transition duration-300 mx-auto mb-4"></i>
                <h3 class="font-heading font-bold text-black text-xs uppercase tracking-wider mb-3">{{ $val['title'] }}</h3>
                <p class="text-gray-500 text-xs leading-relaxed">{{ $val['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</div>

{{-- ===================== RED CTA BANNER ===================== --}}
<div class="bg-primary py-24">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl md:text-5xl font-heading font-bold text-white uppercase leading-tight mb-6">
            SIAP MENCIPTAKAN<br>DAMPAK VISUAL?
        </h2>
        <p class="text-white/80 text-sm max-w-xl mx-auto mb-10">
            Kami siap membantu Anda menciptakan identitas visual yang kuat dan berkesan. Hubungi tim kami untuk konsultasi gratis dan penawaran yang sesuai.
        </p>
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="{{ url('/contact') }}" class="px-8 py-3 text-xs font-bold uppercase text-primary bg-white hover:bg-gray-100 transition tracking-wider shadow-md">
                HUBUNGI TIM KAMI
            </a>
            <a href="{{ url('/billboards') }}" class="px-8 py-3 text-xs font-bold uppercase text-white border-2 border-white hover:bg-white hover:text-primary transition tracking-wider">
                LIHAT LOKASI BILLBOARD
            </a>
        </div>
    </div>
</div>

@endsection
