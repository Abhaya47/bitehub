@props(['restaurant'])

<a href="{{ route('description', ['restaurant' => $restaurant->id]) }}" class="block">
    <div
        class="relative flex-none w-[268px] sm:w-[300px] md:w-[320px] lg:w-[380px] xl:w-[420px] 2xl:w-[450px] h-[156px] sm:h-[165px] md:h-[176px] lg:h-[196px] xl:h-[210px] 2xl:h-[220px] bg-[#F5F4F8] rounded-[25px] cursor-pointer transition-transform duration-300 hover:shadow-md">
        {{-- Image Section --}}
        <div
            class="absolute left-2 top-2 w-[130px] sm:w-[140px] md:w-[150px] lg:w-[170px] xl:w-[190px] 2xl:w-[200px] h-[140px] sm:h-[150px] md:h-[160px] lg:h-[180px] xl:h-[195px] 2xl:h-[205px] object-cover">
            <img src="{{ $restaurant->file_path ? asset('storage/' . $restaurant->file_path) : asset('images/image_not_found.png') }}"
                alt="{{ $restaurant->name }}" class="w-full h-full object-cover rounded-[25px]" draggable="false" />

            {{-- Favorite Button --}}
            <div class="absolute top-2 left-2 z-20">
                @livewire('toggle-favorite', ['restaurantId' => $restaurant->id], key('card-fav-' . $restaurant->id))
            </div>

            {{-- Restaurant Badge --}}
            <div
                class="flex items-center absolute bottom-0 right-0 px-1 sm:px-1.5 md:px-1.5 lg:px-2 py-2.5 sm:py-3 md:py-3 lg:py-3.5 bg-[#F9443D] shadow-lg rounded-xl">
                <span
                    class="font-medium text-[8px] md:text-[9px] lg:text-[10px] leading-[9px] md:leading-[10px] lg:leading-[11px] tracking-wider text-white">Restaurant</span>
            </div>
        </div>

        {{-- Content Section --}}
        <div
            class="absolute right-2.5 md:right-3 lg:right-4 top-4 md:top-5 lg:top-6 flex flex-col gap-2 w-[108px] md:w-[140px] lg:w-[170px]">
            {{-- Title --}}
            <h3
                class="font-bold text-sm md:text-base lg:text-lg leading-[18px] md:leading-[20px] lg:leading-[22px] tracking-wider text-[#252B5C] truncate">
                {{ $restaurant->name }}
            </h3>

            {{-- Rating and Location --}}
            <div class="flex flex-col gap-2">
                {{-- Rating --}}
                <div class="flex items-center gap-0.5">
                    <span
                        class="font-bold text-[8px] md:text-[9px] lg:text-[16px] leading-2 text-[#53587A]">{{ $restaurant->averageRating }}</span>
                    <svg class="w-[9px] md:w-[10px] lg:w-[16px] h-[9px] md:h-[10px] lg:h-[16px]" viewBox="0 0 9 9"
                        fill="none">
                        {{-- Star Icon Path (Existing and Correct) --}}
                        <path d="M4.5 0.75L5.5 3.5H8.25L6 5.25L6.75 8L4.5 6.25L2.25 8L3 5.25L0.75 3.5H3.5L4.5 0.75Z"
                            fill="#FFC42D" />
                    </svg>
                </div>

                {{-- Location --}}
                <div class="flex items-center gap-0.5">
                    <svg class="w-[9px] md:w-[10px] lg:w-[16px] h-[9px] md:h-[10px] lg:h-[16px]" viewBox="0 0 9 9"
                        fill="none">
                        <path
                            d="M4.5 0.75C2.98 0.75 1.75 1.98 1.75 3.5C1.75 5.5 4.5 8.25 4.5 8.25C4.5 8.25 7.25 5.5 7.25 3.5C7.25 1.98 6.02 0.75 4.5 0.75Z"
                            fill="#234F68" />

                        {{-- Central dot inside the pin bulb (cy changed from 4.5 to 3.5) --}}
                        <circle cx="4.5" cy="3.5" r="0.75" fill="white" stroke="white"
                            stroke-width="0.25" />
                    </svg>
                    <span
                        class="font-normal text-[10px] md:text-[11px] lg:text-[16px] leading-5 text-[#53587A] truncate">{{ $restaurant->address }}</span>
                </div>
            </div>
        </div>


        {{-- Discount Badge --}}
        @php
            $maxDiscount = $restaurant->offers->max('discount_value');
        @endphp
        @if ($maxDiscount)
            <div class="absolute bottom-[22px] md:bottom-[26px] lg:bottom-[30px] right-3 md:right-4">
                <span
                    class="font-medium text-[13px] md:text-[14px] lg:text-[15px] leading-4 tracking-wider text-[#252B5C] bg-white/90 backdrop-blur-sm px-2 py-1 rounded-md shadow-sm">
                    Up to {{ intval($maxDiscount) }}% Off
                </span>
            </div>
        @endif
    </div>
</a>
