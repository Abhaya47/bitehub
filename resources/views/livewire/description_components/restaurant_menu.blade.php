{{-- Restaurant Menus Section --}}
<div class="w-full max-w-full mx-auto px-4 py-6">
    <div class="bg-white rounded-xl p-5 shadow-sm">
        {{-- Section Title --}}
        <h2 class="text-[22px] font-normal leading-[28px] text-[#004225] mb-5">
            Restaurant Menus
        </h2>

        {{-- Divider --}}
        <hr class="border-t border-[rgba(197,197,197,0.5)] mb-5">

        {{-- Menu Cards Container --}}
        <div class="flex flex-wrap items-center gap-4">
            {{-- Menu Card 1 --}}
            <div
                class="relative w-[138px] h-[142px] rounded-xl overflow-hidden shadow-[0px_10px_34px_rgba(20,20,43,0.14)] cursor-pointer hover:shadow-xl transition-shadow group">
                {{-- Menu Image --}}
                <img src="{{ asset('images/menu-1.jpg') }}" alt="Food Menu" class="w-full h-full object-cover">

                {{-- Dark Overlay at Bottom --}}
                <div
                    class="absolute bottom-0 left-0 right-0 h-[32px] bg-[rgba(63,63,63,0.98)] rounded-b-xl flex items-center px-2.5">
                    <span class="text-white text-xs font-normal leading-4">
                        Food Menu (2 Pages)
                    </span>
                </div>

                {{-- Hover Effect --}}
                <div class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition-colors"></div>
            </div>

            {{-- Menu Card 2 --}}
            <div
                class="relative w-[138px] h-[142px] rounded-xl overflow-hidden shadow-[0px_10px_34px_rgba(20,20,43,0.14)] cursor-pointer hover:shadow-xl transition-shadow group">
                {{-- Menu Image --}}
                <img src="{{ asset('images/menu-2.jpg') }}" alt="Food Menu" class="w-full h-full object-cover">

                {{-- Dark Overlay at Bottom --}}
                <div
                    class="absolute bottom-0 left-0 right-0 h-[32px] bg-[rgba(63,63,63,0.98)] rounded-b-xl flex items-center px-2.5">
                    <span class="text-white text-xs font-normal leading-4">
                        Food Menu (2 Pages)
                    </span>
                </div>

                {{-- Hover Effect --}}
                <div class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition-colors"></div>
            </div>

            {{-- Menu Card 3 --}}
            <div
                class="relative w-[138px] h-[142px] rounded-xl overflow-hidden shadow-[0px_10px_34px_rgba(20,20,43,0.14)] cursor-pointer hover:shadow-xl transition-shadow group">
                {{-- Menu Image --}}
                <img src="{{ asset('images/menu-3.jpg') }}" alt="Food Menu" class="w-full h-full object-cover">

                {{-- Dark Overlay at Bottom --}}
                <div
                    class="absolute bottom-0 left-0 right-0 h-[32px] bg-[rgba(63,63,63,0.98)] rounded-b-xl flex items-center px-2.5">
                    <span class="text-white text-xs font-normal leading-4">
                        Food Menu (2 Pages)
                    </span>
                </div>

                {{-- Hover Effect --}}
                <div class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition-colors"></div>
            </div>

            {{-- Menu Card 4 --}}
            <div
                class="relative w-[138px] h-[142px] rounded-xl overflow-hidden shadow-[0px_10px_34px_rgba(20,20,43,0.14)] cursor-pointer hover:shadow-xl transition-shadow group">
                {{-- Menu Image --}}
                <img src="{{ asset('images/menu-4.jpg') }}" alt="Food Menu" class="w-full h-full object-cover">

                {{-- Dark Overlay at Bottom --}}
                <div
                    class="absolute bottom-0 left-0 right-0 h-[32px] bg-[rgba(63,63,63,0.98)] rounded-b-xl flex items-center px-2.5">
                    <span class="text-white text-xs font-normal leading-4">
                        Food Menu (2 Pages)
                    </span>
                </div>

                {{-- Hover Effect --}}
                <div class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition-colors"></div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Ensure smooth hover transitions */
    .group:hover .absolute {
        transition: all 0.3s ease;
    }
</style>
