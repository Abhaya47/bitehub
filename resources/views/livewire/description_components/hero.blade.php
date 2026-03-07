<div class="relative">
    {{-- Main Image Showcase --}}
    <div class="relative h-[300px] md:h-[450px] w-full group overflow-hidden">
        <div class="carousel-track flex h-full transition-transform duration-700 ease-in-out">
            <div class="min-w-full h-full">
                <img src="{{ asset('images/restaurant1.jpg') }}" class="w-full h-full object-cover" alt="Gallery 1">
            </div>
            <div class="min-w-full h-full">
                <img src="{{ asset('images/restaurant2.jpg') }}" class="w-full h-full object-cover" alt="Gallery 2">
            </div>
            <div class="min-w-full h-full">
                <img src="{{ asset('images/restaurant3.jpg') }}" class="w-full h-full object-cover" alt="Gallery 3">
            </div>
        </div>

        {{-- Gradient Overlays --}}
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-black/30"></div>

        {{-- Navigation Controls --}}
        <div class="absolute inset-x-0 top-1/2 -translate-y-1/2 px-4 flex justify-between opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none">
            <button onclick="prevSlide()" class="w-12 h-12 rounded-full bg-white/20 backdrop-blur-md border border-white/30 flex items-center justify-center text-white hover:bg-[#F9443D] transition-all pointer-events-auto">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7" /></svg>
            </button>
            <button onclick="nextSlide()" class="w-12 h-12 rounded-full bg-white/20 backdrop-blur-md border border-white/30 flex items-center justify-center text-white hover:bg-[#F9443D] transition-all pointer-events-auto">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7" /></svg>
            </button>
        </div>

        {{-- Photo Count Badge --}}
        <div class="absolute top-6 right-6 px-4 py-2 rounded-2xl bg-black/40 backdrop-blur-md border border-white/20 text-white text-xs font-black uppercase tracking-widest flex items-center gap-2">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
            <span>1 / 3 Photos</span>
        </div>
    </div>

    {{-- Info Card Overlay --}}
    <div class="px-8 pb-10 -mt-10 relative z-10">
        <div class="bg-white rounded-[2rem] p-8 shadow-xl shadow-black/5 border border-gray-100">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-6">
                <div class="flex-1">
                    <div class="flex items-center gap-3 mb-3">
                        <span class="px-3 py-1 rounded-full bg-green-100 text-green-600 text-[10px] font-black uppercase tracking-widest">Open Now</span>
                        <div class="flex items-center gap-1">
                            @for($i=1; $i<=5; $i++)
                                <svg class="w-3.5 h-3.5 {{ $i <= round($averageRating) ? 'text-yellow-400' : 'text-gray-200' }} fill-current" viewBox="0 0 20 20"><path d="M10 1l2.6 6.3 6.9.6-5.3 4.6 1.6 6.8-5.8-3.5-5.8 3.5 1.6-6.8-5.3-4.6 6.9-.6L10 1z"/></svg>
                            @endfor
                        </div>
                    </div>
                    <h1 class="text-4xl md:text-5xl font-black text-[#0f172a] tracking-tight mb-2">{{ $restaurant->name }}</h1>
                    <div class="flex items-center text-gray-400 text-sm font-medium gap-6">
                        <div class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-[#F9443D]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                            <span>{{ $restaurant->address }}</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-[#F9443D]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                            <span>रु 2,000 for two</span>
                        </div>
                    </div>
                </div>

                <div class="flex items-center gap-4">
                    <button class="w-12 h-12 rounded-2xl bg-gray-50 border border-gray-100 flex items-center justify-center text-[#0f172a] hover:bg-white hover:shadow-lg transition-all">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" /></svg>
                    </button>
                    <button class="w-12 h-12 rounded-2xl bg-gray-50 border border-gray-100 flex items-center justify-center text-[#0f172a] hover:bg-white hover:shadow-lg transition-all">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z" /></svg>
                    </button>
                    <div class="h-12 w-[1px] bg-gray-100 mx-2"></div>
                    <div class="text-right">
                        <p class="text-xs font-black text-gray-400 uppercase tracking-widest mb-1">Established</p>
                        <p class="text-sm font-black text-[#0f172a]">2020</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    let currentSlide = 0;
    const track = document.querySelector('.carousel-track');
    const badge = document.querySelector('.bottom-6.right-6 span');

    function updateCarousel() {
        track.style.transform = `translateX(-${currentSlide * 100}%)`;
        badge.innerText = `${currentSlide + 1} / 3 Photos`;
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % 3;
        updateCarousel();
    }

    function prevSlide() {
        currentSlide = (currentSlide - 1 + 3) % 3;
        updateCarousel();
    }
</script>
