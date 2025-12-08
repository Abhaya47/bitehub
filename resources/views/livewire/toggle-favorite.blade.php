<div class="z-20">
    <button
        wire:click="toggleFavorite"
        onclick="event.preventDefault(); event.stopPropagation();"
        class="group w-[25px] md:w-[28px] lg:w-[32px] h-[25px] md:h-[28px] lg:h-[32px] bg-white rounded-full flex items-center justify-center transition-colors duration-200 hover:bg-red-600 shadow-sm z-30">
        @if($isFavorited)
        {{-- Solid/Filled Heart --}}
        <svg class="w-[11px] md:w-[13px] lg:w-[15px] h-[10px] md:h-[12px] lg:h-[14px] transition-colors duration-200 fill-red-600 stroke-red-600 group-hover:fill-white group-hover:stroke-white"
            viewBox="0 0 11 10">
            <path d="M5.5 9.5L1.5 5.5C0.5 4.5 0.5 2.5 1.5 1.5C2.5 0.5 4.5 0.5 5.5 1.5C6.5 0.5 8.5 0.5 9.5 1.5C10.5 2.5 10.5 4.5 9.5 5.5L5.5 9.5Z" stroke-width="0.8" />
        </svg>
        @else
        {{-- Outline Heart --}}
        <svg class="w-[11px] md:w-[13px] lg:w-[15px] h-[10px] md:h-[12px] lg:h-[14px] transition-colors duration-200 fill-transparent stroke-red-600 group-hover:fill-white group-hover:stroke-white"
            viewBox="0 0 11 10">
            <path d="M5.5 9.5L1.5 5.5C0.5 4.5 0.5 2.5 1.5 1.5C2.5 0.5 4.5 0.5 5.5 1.5C6.5 0.5 8.5 0.5 9.5 1.5C10.5 2.5 10.5 4.5 9.5 5.5L5.5 9.5Z" stroke-width="0.8" />
        </svg>
        @endif
    </button>
</div>