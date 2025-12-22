<div>
    {{-- Restaurant Menus Section --}}
    <div class="w-full px-4 py-6">
        <div class="bg-white rounded-xl p-6 sm:p-8 shadow-sm w-full">
            <div class="flex flex-col sm:flex-row items-start sm:items-center gap-2 sm:gap-4">
                <h2 class="text-[22px] font-normal leading-[28px] text-[#004225]">
                    Restaurant Menus
                </h2>
                <p class="text-sm text-[#555]">
                    Tap any card to view the menu inline.
                </p>
            </div>

            {{-- Divider --}}
            <hr class="border-t border-[rgba(197,197,197,0.5)] my-5">

            @if ($menus->isEmpty())
                <div class="text-center py-8">
                    <p class="text-base text-[#666]">The owner hasn’t uploaded any menus yet. Please check back later.
                    </p>
                </div>
            @else
                {{-- Menu Cards --}}
                <div class="flex overflow-x-auto space-x-4 pb-4">
                    @foreach ($menus as $index => $menu)
                        @php
                            $preview = $menu->preview_url ?? asset('images/restaurant1.jpg');
                        @endphp
                        <button onclick="openMenuModal({{ $index }})"
                            class="group relative rounded-xl overflow-hidden shadow-[0px_10px_34px_rgba(20,20,43,0.1)] hover:shadow-xl transition-all duration-200 bg-white flex-shrink-0 w-48 text-left">
                            <img src="{{ $preview }}" alt="{{ $menu->title }}"
                                class="w-full h-[160px] object-cover">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                            </div>
                            <div class="absolute bottom-0 left-0 right-0 p-3">
                                <p class="text-white text-sm font-semibold leading-tight">
                                    {{ $menu->title }}
                                </p>
                                <p class="text-white/80 text-xs">
                                    {{ $menu->page_count ? $menu->page_count . ' pages' : 'View menu' }}
                                </p>
                            </div>
                        </button>
                    @endforeach
                </div>
            @endif
        </div>
    </div>

    {{-- Full Screen Modal --}}
    <div id="menuModal" class="hidden fixed inset-0 z-[9999] bg-black/90 transition-opacity duration-300 opacity-0">
        {{-- Top Bar --}}
        <div class="flex justify-between items-center px-6 py-4 text-white w-full absolute top-0 left-0 z-20">
            <div class="text-lg font-medium">
                <span id="menuCounter">1 / 1</span>
            </div>
            <button onclick="closeMenuModal()" class="text-white hover:text-gray-300 focus:outline-none p-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        {{-- Main Content (Image) --}}
        <div class="flex-1 flex items-center justify-center p-4 relative w-full h-full overflow-hidden">
            {{-- Prev Button --}}
            <button id="prevBtn" onclick="prevMenu()"
                class="absolute left-4 md:left-8 z-20 text-white/70 hover:text-white focus:outline-none p-2 transition-colors bg-black/20 hover:bg-black/40 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 md:h-10 md:w-10" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>

            {{-- Image Container --}}
            <div id="imageContainer"
                class="relative w-full h-full flex items-center justify-center overflow-hidden cursor-grab active:cursor-grabbing">
                <img id="menuImage" src="" alt="Menu" draggable="false"
                    class="max-w-full max-h-[85vh] object-contain shadow-2xl rounded-sm select-none transition-transform duration-100 ease-out origin-center">
            </div>

            {{-- Next Button --}}
            <button id="nextBtn" onclick="nextMenu()"
                class="absolute right-4 md:right-8 z-20 text-white/70 hover:text-white focus:outline-none p-2 transition-colors bg-black/20 hover:bg-black/40 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 md:h-10 md:w-10" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>
        </div>

        {{-- Bottom Caption --}}
        <div class="absolute bottom-8 left-0 right-0 text-center text-white/90 pointer-events-none z-20">
            <h3 id="menuTitle" class="text-xl font-medium"></h3>
        </div>
    </div>


</div>
