<div class="relative w-full max-w-xs sm:max-w-sm md:max-w-md lg:max-w-lg xl:max-w-xl">
    <div class="flex items-center bg-gray-100 rounded-lg px-4 py-3 sm:px-6 sm:py-4 shadow-sm hover:shadow-md transition-shadow">

        {{-- Search Icon --}}
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400 mr-3 flex-shrink-0" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
        </svg>

        {{-- Input Field --}}
        <input wire:model.live="search" type="search" placeholder="Search foods, restaurants and trending places"
            class="bg-transparent w-full outline-none text-gray-700 placeholder-gray-400 text-sm">
    </div>
    @if ($search !== '')
    <div class="absolute top-full left-0 w-full mt-2 flex flex-col rounded-xl bg-white/60 backdrop-blur-lg border border-white/40 shadow-2xl overflow-hidden z-50">
        @foreach ($responses as $response)
        <a href="{{ route('description', $response->restaurant_id) }}"
            class="block w-full px-4 py-3 sm:px-6 text-left text-gray-800 hover:bg-white/50 transition-colors font-medium text-sm sm:text-base">
            {{ $response->name }}
        </a>
        @endforeach
    </div>
    @endif
</div>