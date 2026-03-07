<div>
    {{-- Restaurant Menus Section --}}
    <div class="bg-white rounded-xl p-6 sm:p-8 shadow-sm w-full">
        <div class="flex flex-col sm:flex-row items-start sm:items-center gap-2 sm:gap-4 mb-8">
            <h2 class="text-2xl font-black text-[#0f172a] tracking-tight">
                Menu Gallery
            </h2>
            <p class="text-sm text-gray-400 font-medium">
                Tap any card to view the menu in detail.
            </p>
        </div>

        @if ($menus->isEmpty())
            <div class="text-center py-12 bg-gray-50 rounded-[2rem] border-2 border-dashed border-gray-100">
                <p class="text-base text-gray-400 font-medium">The owner hasn’t uploaded any menus yet. Please check back later.</p>
            </div>
        @else
            {{-- Menu Cards --}}
            <div class="flex overflow-x-auto space-x-6 pb-6 scrollbar-hide">
                @foreach ($menus as $index => $menu)
                    @php
                        $preview = $menu->preview_url ?? asset('images/restaurant1.jpg');
                    @endphp
                    <button onclick="openMenuModal({{ $index }})"
                        class="group relative rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 bg-white flex-shrink-0 w-56 text-left hover:-translate-y-1">
                        <img src="{{ $preview }}" alt="{{ $menu->title }}"
                            class="w-full h-[200px] object-cover transition-transform duration-700 group-hover:scale-110">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-60 group-hover:opacity-90 transition-opacity">
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 p-4">
                            <p class="text-white text-base font-black leading-tight mb-1">
                                {{ $menu->title }}
                            </p>
                            <p class="text-white/70 text-[10px] font-bold uppercase tracking-widest">
                                {{ $menu->page_count ? $menu->page_count . ' pages' : 'View menu' }}
                            </p>
                        </div>
                    </button>
                @endforeach
            </div>
        @endif
    </div>
</div>
