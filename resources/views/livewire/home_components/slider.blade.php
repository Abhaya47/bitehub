<div>
    {{-- Tags / Filter Section --}}
    <section class="px-6 lg:px-10 py-12 max-w-7xl mx-auto overflow-hidden">
        <div class="flex justify-between items-end mb-8">
            <div>
                <div class="inline-flex px-3 py-1 rounded-full bg-[#F9443D]/10 text-[#F9443D] text-[10px] font-black uppercase tracking-widest mb-4">Cravings</div>
                <h2 class="font-lato text-3xl md:text-4xl font-black text-[#0f172a] tracking-tight">What's on your mind?</h2>
            </div>
            {{-- Navigation Controls for Tag Slider --}}
            <div class="flex space-x-2">
                <button type="button" onclick="event.stopPropagation(); document.getElementById('card-slider').scrollBy({left: -400, behavior: 'smooth'})" class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-white border border-gray-100 shadow-sm flex items-center justify-center text-[#0f172a] hover:bg-[#0f172a] hover:text-white transition-all">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7" /></svg>
                </button>
                <button type="button" onclick="event.stopPropagation(); document.getElementById('card-slider').scrollBy({left: 400, behavior: 'smooth'})" class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-white border border-gray-100 shadow-sm flex items-center justify-center text-[#0f172a] hover:bg-[#0f172a] hover:text-white transition-all">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7" /></svg>
                </button>
            </div>
        </div>
        
        <div class="relative group overflow-hidden">
            {{-- Tag Slider --}}
            @livewire('home.home-tags')
        </div>
    </section>

    {{-- Featured Places Section --}}
    <section class="px-6 lg:px-10 py-16 max-w-7xl mx-auto overflow-hidden relative z-10">
        <div class="flex justify-between items-end mb-12">
            <div>
                <div class="inline-flex px-3 py-1 rounded-full bg-blue-50 text-blue-600 text-[10px] font-black uppercase tracking-widest mb-4">Top Rated</div>
                <h2 class="font-lato text-4xl md:text-5xl font-black text-[#0f172a] tracking-tight">Featured Places</h2>
            </div>
            {{-- Navigation Controls for Featured Slider --}}
            <div class="flex space-x-2 relative z-20">
                <button type="button" wire:ignore onclick="event.preventDefault(); event.stopPropagation(); document.getElementById('featured-slider').scrollBy({left: -400, behavior: 'smooth'}); return false;" class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-white border border-gray-100 shadow-sm flex items-center justify-center text-[#0f172a] hover:bg-[#0f172a] hover:text-white transition-all">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7" /></svg>
                </button>
                <button type="button" wire:ignore onclick="event.preventDefault(); event.stopPropagation(); document.getElementById('featured-slider').scrollBy({left: 400, behavior: 'smooth'}); return false;" class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-white border border-gray-100 shadow-sm flex items-center justify-center text-[#0f172a] hover:bg-[#0f172a] hover:text-white transition-all">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7" /></svg>
                </button>
            </div>
        </div>

        <div class="relative group">
            {{-- Scrollable Container --}}
            <div id="featured-slider" class="flex gap-6 overflow-x-auto pb-10 scroll-smooth no-scrollbar pointer-events-none">
                @foreach ($restaurants as $restaurant)
                    <div 
                       class="flex-none w-[340px] md:w-[420px] lg:w-[480px] group relative pointer-events-auto">
                        <div class="flex items-center h-[180px] md:h-[200px] lg:h-[220px] p-4 bg-white/60 backdrop-blur-md border border-white/40 rounded-[2rem] shadow-lg transition-all duration-500 group-hover:shadow-2xl group-hover:-translate-y-1">
                            
                            {{-- Image Section (Left) --}}
                            <div class="relative w-[130px] md:w-[160px] lg:w-[180px] h-full rounded-2xl overflow-hidden flex-shrink-0">
                                <img src="{{ $restaurant->file_path ? asset('storage/' . $restaurant->file_path) : asset('images/image_not_found.png') }}"
                                     alt="{{ $restaurant->name }}" 
                                     class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" 
                                     draggable="false" />
                                
                                {{-- Discount Badge --}}
                                @php $maxDiscount = $restaurant->offers->max('discount_value'); @endphp
                                @if ($maxDiscount)
                                    <div class="absolute top-2 left-2 px-2 py-1 bg-[#F9443D] text-white text-[9px] font-black uppercase tracking-widest rounded-lg">
                                        {{ intval($maxDiscount) }}% OFF
                                    </div>
                                @endif
                            </div>

                            {{-- Content Section (Right) --}}
                            <div class="ml-6 flex-1 flex flex-col justify-between py-2">
                                <div>
                                    <div class="flex items-center justify-between mb-2">
                                        <a href="{{ route('description', ['restaurant' => $restaurant->id]) }}" class="hover:underline truncate leading-tight block">
                                            <h3 class="text-lg md:text-xl font-black text-[#0f172a] tracking-tight truncate leading-tight">{{ $restaurant->name }}</h3>
                                        </a>
                                        <div class="flex items-center bg-yellow-400 text-black px-2 py-0.5 rounded-lg text-[10px] font-black">
                                            {{ $restaurant->rating ?? '4.5' }}
                                        </div>
                                    </div>
                                    
                                    <div class="flex items-center text-gray-500 text-xs font-medium mb-4">
                                        <svg class="w-3.5 h-3.5 mr-1 text-[#F9443D]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                                        <span class="truncate">{{ $restaurant->address }}</span>
                                    </div>
                                </div>

                                <div class="flex items-center justify-between">
                                    <span class="text-[10px] font-black text-[#0f172a]/40 uppercase tracking-widest">Featured</span>
                                    <a href="{{ route('description', ['restaurant' => $restaurant->id]) }}" class="w-8 h-8 rounded-full border border-gray-100 flex items-center justify-center text-gray-300 group-hover:bg-[#0f172a] group-hover:text-white group-hover:border-[#0f172a] transition-all">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7" /></svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <style>
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
        
        .slider-container img, .slider-container a {
            -webkit-user-drag: none;
            user-select: none;
            -webkit-user-select: none;
        }

        .slider-active {
            cursor: grabbing !important;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sliders = [document.getElementById('featured-slider'), document.getElementById('card-slider')];
            
            sliders.forEach(slider => {
                if (!slider) return;

                let isDown = false;
                let startX;
                let scrollLeft;
                let moved = false;
                let startPos = { x: 0, y: 0 };

                slider.classList.add('slider-container');

                slider.addEventListener('mousedown', (e) => {
                    isDown = true;
                    moved = false;
                    slider.classList.add('slider-active');
                    startX = e.pageX - slider.offsetLeft;
                    scrollLeft = slider.scrollLeft;
                    startPos = { x: e.pageX, y: e.pageY };
                });

                slider.addEventListener('mouseleave', () => {
                    isDown = false;
                    slider.classList.remove('slider-active');
                });

                slider.addEventListener('mouseup', () => {
                    isDown = false;
                    slider.classList.remove('slider-active');
                });

                slider.addEventListener('mousemove', (e) => {
                    if (!isDown) return;
                    
                    const x = e.pageX - slider.offsetLeft;
                    const walk = (x - startX) * 2;
                    
                    // Check if mouse actually moved enough to be considered a drag
                    if (Math.abs(e.pageX - startPos.x) > 5) {
                        moved = true;
                        slider.scrollLeft = scrollLeft - walk;
                    }
                });

                // Prevent click if we were dragging
                slider.addEventListener('click', (e) => {
                    if (moved) {
                        e.preventDefault();
                        e.stopPropagation();
                    }
                }, true);
            });
        });
    </script>
</div>
