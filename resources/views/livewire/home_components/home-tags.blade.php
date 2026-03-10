<div>
    @php
        $tagImages = [
            'Momo' => 'https://images.unsplash.com/photo-1625220194771-7ebdea0b70b9?q=80&w=800&auto=format&fit=crop',
            'Sekuwa' => 'https://images.unsplash.com/photo-1544025162-d76694265947?q=80&w=800&auto=format&fit=crop',
            'Nepali' => 'https://images.unsplash.com/photo-1589302168068-964664d93dc0?q=80&w=800&auto=format&fit=crop',
            'Chinese' => 'https://images.unsplash.com/photo-1585032226651-759b368d7246?q=80&w=800&auto=format&fit=crop',
            'Fast Food' => 'https://images.unsplash.com/photo-1561758033-d89a9ad46330?q=80&w=800&auto=format&fit=crop',
            'Vegetarian' => 'https://images.unsplash.com/photo-1540189549336-e6e99c3679fe?q=80&w=800&auto=format&fit=crop',
            'Pizza' => 'https://images.unsplash.com/photo-1513104890138-7c749659a591?q=80&w=800&auto=format&fit=crop',
            'Burgers' => 'https://images.unsplash.com/photo-1568901346375-23c9450c58cd?q=80&w=800&auto=format&fit=crop',
            'Coffee' => 'https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?q=80&w=800&auto=format&fit=crop',
            'Halal' => 'https://images.unsplash.com/photo-1555939594-58d7cb561ad1?q=80&w=800&auto=format&fit=crop',
        ];
        $defaultImage = 'https://images.unsplash.com/photo-1504674900247-0877df9cc836?q=80&w=800&auto=format&fit=crop';
    @endphp
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
                    <img src="{{ $tagImages[$tag->name] ?? $defaultImage }}" alt="{{ $tag->name }}"
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
