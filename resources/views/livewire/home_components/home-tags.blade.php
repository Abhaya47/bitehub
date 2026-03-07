<div>
    <div id="card-slider"
         class="flex gap-[20px] overflow-x-auto py-6 px-4 -mx-4 scroll-smooth scrollbar-hide"
         style="scrollbar-width: none; -ms-overflow-style: none;">
        @foreach($tags as $tag)
            <div
                wire:key="tag-{{ $tag->id }}"
                wire:click="selectTag({{ $tag->id }})"
                class="relative flex-none w-[270px] md:w-[320px] lg:w-[350px] h-[180px] md:h-[200px] lg:h-[220px] rounded-[30px] overflow-hidden group cursor-pointer transition-all duration-300 {{ $selectedTagId == $tag->id ? 'border-4 border-[#F9443D]' : 'border-4 border-transparent hover:border-gray-100' }}">
                
                {{-- Background Image --}}
                <div class="absolute inset-0">
                    <img src="{{ asset('images/non_veg_items.png') }}" alt="{{ $tag->name }}"
                         class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" draggable="false"/>
                    {{-- Dynamic Overlay --}}
                    <div class="absolute inset-0 transition-colors duration-300 {{ $selectedTagId == $tag->id ? 'bg-[#F9443D]/20' : 'bg-black/30 group-hover:bg-black/20' }}"></div>
                </div>

                {{-- Active Badge --}}
                @if($selectedTagId == $tag->id)
                    <div class="absolute top-4 right-4 z-20 animate-fade-in">
                        <div class="px-3 py-1.5 rounded-full bg-[#F9443D] text-white text-[10px] font-black uppercase tracking-widest shadow-lg flex items-center gap-2">
                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                            Selected
                        </div>
                    </div>
                @endif

                {{-- Content --}}
                <div class="absolute inset-0 p-8 flex flex-col justify-end z-10">
                    <h3 class="font-lato font-black text-2xl md:text-3xl text-white tracking-tight drop-shadow-md">
                        {{ $tag->name }}
                    </h3>
                    <p class="font-medium text-sm text-white/80 mt-1 transition-opacity duration-300 {{ $selectedTagId == $tag->id ? 'opacity-100' : 'opacity-0 group-hover:opacity-100' }}">
                        Explore best {{ strtolower($tag->name) }} spots
                    </p>
                </div>

                {{-- Glassmorphic bottom shine --}}
                <div class="absolute bottom-0 left-0 right-0 h-1/2 bg-gradient-to-t from-black/60 to-transparent pointer-events-none"></div>
            </div>
        @endforeach
    </div>

    <style>
        @keyframes fade-in {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-in {
            animation: fade-in 0.3s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        }
    </style>
</div>
