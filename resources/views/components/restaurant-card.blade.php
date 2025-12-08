@props(['restaurant'])

<a href="{{ route('description', ['restaurant' => $restaurant->id]) }}" class="block">
    <div class="relative flex-none w-[268px] md:w-[320px] lg:w-[380px] h-[156px] md:h-[176px] lg:h-[196px] bg-[#F5F4F8] rounded-[25px] cursor-pointer transition-transform duration-300 hover:shadow-md">
        {{-- Image Section --}}
        <div class="absolute left-2 top-2 w-[130px] md:w-[150px] lg:w-[170px] h-[140px] md:h-[160px] lg:h-[180px] object-cover">
            <img src="{{ $restaurant->file_path ? asset('storage/' . $restaurant->file_path) : asset('images/image_not_found.png') }}"
                alt="{{ $restaurant->name }}" class="w-full h-full object-cover rounded-[25px]"
                draggable="false" />

            {{-- Favorite Button --}}
            <div class="absolute top-2 left-2 z-20">
                @livewire('toggle-favorite', ['restaurantId' => $restaurant->id], key('card-fav-'.$restaurant->id))
            </div>

            {{-- Restaurant Badge --}}
            <div class="flex items-center absolute bottom-0 left-[290px] px-1 md:px-1.5 lg:px-2 py-2.5 md:py-3 lg:py-3.5 bg-[#F9443D] shadow-lg rounded-xl">
                <span class="font-medium text-[8px] md:text-[9px] lg:text-[10px] leading-[9px] md:leading-[10px] lg:leading-[11px] tracking-wider text-white">Restaurant</span>
            </div>
        </div>

        {{-- Content Section --}}
        <div class="absolute right-2.5 md:right-3 lg:right-4 top-4 md:top-5 lg:top-6 flex flex-col gap-2 w-[108px] md:w-[140px] lg:w-[170px]">
            {{-- Title --}}
            <h3 class="font-bold text-sm md:text-base lg:text-lg leading-[18px] md:leading-[20px] lg:leading-[22px] tracking-wider text-[#252B5C] truncate">
                {{ $restaurant->name }}
            </h3>

            {{-- Rating and Location --}}
            <div class="flex flex-col gap-2">
                {{-- Rating --}}
                <div class="flex items-center gap-0.5">
                    <span class="font-bold text-[8px] md:text-[9px] lg:text-[10px] leading-2 text-[#53587A]">{{ $restaurant->averageRating }}</span>
                    <svg class="w-[9px] md:w-[10px] lg:w-[11px] h-[9px] md:h-[10px] lg:h-[11px]"
                        viewBox="0 0 9 9" fill="none">
                        <path d="M4.5 0.75L5.5 3.5H8.25L6 5.25L6.75 8L4.5 6.25L2.25 8L3 5.25L0.75 3.5H3.5L4.5 0.75Z" fill="#FFC42D" />
                    </svg>
                </div>

                {{-- Location --}}
                <div class="flex items-center gap-0.5">
                    <svg class="w-[9px] md:w-[10px] lg:w-[11px] h-[9px] md:h-[10px] lg:h-[11px]"
                        viewBox="0 0 9 9" fill="none">
                        <path d="M4.5 0.75C2.5 0.75 0.75 2.5 0.75 4.5C0.75 6.5 4.5 8.25 4.5 8.25C4.5 8.25 6.5 0.75 4.5 0.75Z" fill="#234F68" />
                        <circle cx="4.5" cy="4.5" r="0.75" fill="white" stroke="white" stroke-width="1.25" />
                    </svg>
                    <span class="font-normal text-[10px] md:text-[11px] lg:text-[12px] leading-3 text-[#53587A] truncate">{{ $restaurant->address }}</span>
                </div>
            </div>
        </div>

        {{-- Discount Badge --}}
        @php
        $maxDiscount = $restaurant->offers->max('discount_value');
        @endphp
        @if ($maxDiscount)
        <div class="absolute bottom-[22px] md:bottom-[26px] lg:bottom-[30px] left-[146px] md:left-[168px] lg:left-[192px]">
            <span class="font-medium text-[13px] md:text-[14px] lg:text-[15px] leading-4 tracking-wider text-[#252B5C]">Up to {{ intval($maxDiscount) }}% Off</span>
        </div>
        @endif
    </div>
</a>