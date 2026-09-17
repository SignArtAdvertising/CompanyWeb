@extends('layouts.public')

@section('title', 'Hubungi Kami | Sign Art Advertising')

@section('content')

{{-- ===================== HERO ===================== --}}
<div class="relative h-[45vh] flex items-center bg-secondary overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1504328345606-18bbc8c9d7d1?w=1600&auto=format&fit=crop&q=80" alt="Workshop" class="w-full h-full object-cover opacity-30">
        <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/40 to-transparent"></div>
    </div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
        <h1 class="text-5xl md:text-6xl font-heading font-bold text-white uppercase mb-4">HUBUNGI KAMI</h1>
        <div class="w-12 h-1 bg-primary mb-5"></div>
        <p class="text-gray-300 text-sm max-w-md leading-relaxed">
            Connect with Indonesia's premier large-format media and digital printing experts. Let's scale your vision from design to installation.
        </p>
    </div>
</div>

{{-- ===================== CONTACT FORM + DETAILS ===================== --}}
<div class="py-20 bg-white">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col gap-0 shadow-lg">
                <div class="bg-primary text-white p-8">
                    <h3 class="text-[10px] font-bold uppercase tracking-widest text-white/70 mb-6">CONTACT DETAILS</h3>
                    
                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <i data-lucide="map-pin" class="w-5 h-5 text-white/70 flex-shrink-0 mt-0.5"></i>
                            <div>
                                <p class="text-[10px] font-bold uppercase tracking-wider text-white/60 mb-1">OUR HEADQUARTER</p>
                                <p class="text-white text-sm font-medium">Jalan Mangkubumi, No.6B,<br>Medan, North Sumatra 20151</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <i data-lucide="phone" class="w-5 h-5 text-white/70 flex-shrink-0 mt-0.5"></i>
                            <div>
                                <p class="text-[10px] font-bold uppercase tracking-wider text-white/60 mb-1">PHONE SUPPORT</p>
                                <p class="text-white text-sm font-medium">(061) 415 8842</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <i data-lucide="mail" class="w-5 h-5 text-white/70 flex-shrink-0 mt-0.5"></i>
                            <div>
                                <p class="text-[10px] font-bold uppercase tracking-wider text-white/60 mb-1">GENERAL INQUIRY</p>
                                <p class="text-white text-sm font-medium">signart6.adv@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Operating Hours Card --}}
                <div class="border border-gray-200 border-t-0 p-8">
                    <div class="flex items-center gap-2 mb-6">
                        <i data-lucide="clock" class="w-4 h-4 text-primary"></i>
                        <h3 class="text-sm font-bold uppercase tracking-widest text-black">OPERATING HOURS</h3>
                    </div>
                    <ul class="space-y-3 text-sm">
                        <li class="flex justify-between">
                            <span class="text-gray-500">Monday – Saturday</span>
                            <span class="font-bold text-black">08:00 – 17:00</span>
                        </li>
                        <li class="flex justify-between border-t border-gray-100 pt-3">
                            <span class="text-gray-500">Sunday & Holidays</span>
                            <span class="font-bold text-primary uppercase text-xs tracking-wider">CLOSED</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- ===================== MAP ===================== --}}
<div class="relative h-[420px] bg-secondary overflow-hidden">
    {{-- Map embed --}}
    <iframe 
        src="https://maps.google.com/maps?q=Jalan+Mangkubumi,+No.6B,+Medan,+North+Sumatra+20151&t=&z=14&ie=UTF8&iwloc=&output=embed"
        class="w-full h-full border-0 grayscale"
        loading="lazy">
    </iframe>
    {{-- Dark overlay for readability --}}
    <div class="absolute inset-0 bg-black/40 pointer-events-none"></div>
    {{-- Studio overlay badge --}}
    <div class="absolute bottom-8 left-8 bg-secondary/90 text-white p-6 shadow-xl max-w-xs">
        <h3 class="font-heading font-bold text-lg uppercase mb-2">VISIT OUR STUDIO</h3>
        <p class="text-gray-400 text-xs leading-relaxed">Manufacturing and creative design happens right here.</p>
    </div>
</div>

@endsection
