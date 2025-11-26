<div class="relative w-[400px]">
    <div class="flex items-center bg-gray-100 rounded-lg px-6 py-4 shadow-sm hover:shadow-md transition-shadow">

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
        <div class="flex flex-col items-center  rounded-lg px-6 py-4 shadow-sm hover:shadow-md transition-shadow">
            @foreach ($responses as $response)
                <div class="m-2">
                    <button>{{ $response->name }}</button>
                </div>
            @endforeach
        </div>
    @endif
</div>
