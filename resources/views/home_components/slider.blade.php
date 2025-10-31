<section class="px-5 lg:px-20 py-20">
    {{-- Card Slider Component --}}
    <div class="select-none relative">
        {{-- Scrollable Container --}}
        <div id="card-slider"
            class="flex gap-[15px] overflow-x-auto overflow-y-hidden h-[180px] scroll-smooth scrollbar-hide"
            style="scrollbar-width: none; -ms-overflow-style: none;">

            {{-- Non-Veg Food Items Card --}}
            <div class=" relative flex-none w-[270px] h-[180px] rounded-[25px] overflow-hidden group cursor-pointer">
                <div class=" absolute inset-0 bg-gradient-to-b from-black/20 to-black/20">
                    <img src="{{ asset('images/non_veg_items.png') }}" alt="Non-Veg Food"
                        class="w-full h-full object-cover -scale-x-1000 " draggable="false" />
                </div>
                <div class="absolute top-[29px] left-[19px]">
                    <h3
                        class=" font-raleway font-bold text-[22px] leading-[26px] tracking-[0.03em] text-white drop-shadow-[0_4px_4px_rgba(0,0,0,0.5)]">
                        Non Veg
                    </h3>
                    <p
                        class=" font-raleway font-bold text-[13px] leading-[15px] text-white drop-shadow-[0_4px_4px_rgba(0,0,0,0.5)] mt-[11px]">
                        All discount up to 60%
                    </p>
                </div>
            </div>

            {{-- Veggie Food Items Card --}}
            <div class="relative flex-none w-[270px] h-[180px] rounded-[25px] overflow-hidden group cursor-pointer">
                <div class="absolute inset-0 bg-gradient-to-b from-black/20 to-black/20">
                    <img src="{{ asset('images/veg_food_items.png') }}" alt="Veggie Food"
                        class="w-full h-full object-cover -scale-x-100" draggable="false" />
                </div>
                <div class="absolute top-[25px] left-[12px]">
                    <h3
                        class="font-raleway font-bold text-[22px] leading-[26px] tracking-[0.03em] text-white drop-shadow-[0_4px_4px_rgba(0,0,0,0.5)]">
                        Veg
                    </h3>
                    <p
                        class="font-raleway font-bold text-[13px] leading-[15px] text-white drop-shadow-[0_4px_4px_rgba(0,0,0,0.5)] mt-[15px]">
                        All discount up to 60%
                    </p>
                </div>
            </div>

            {{-- Bakery Food Card --}}
            <div class="relative flex-none w-[270px] h-[180px] rounded-[25px] overflow-hidden group cursor-pointer">
                <div class="absolute inset-0">
                    <img src="{{ asset('images/bakery_image.png') }}" alt="Bakery"
                        class="w-full h-full object-cover -scale-x-100" draggable="false" />
                </div>
                <div class="absolute top-[25px] left-[12px]">
                    <h3
                        class="font-raleway font-bold text-[22px] leading-[26px] tracking-[0.03em] text-white drop-shadow-[0_4px_4px_rgba(0,0,0,0.5)]">
                        Bakery
                    </h3>
                    <p
                        class="font-raleway font-bold text-[13px] leading-[15px] text-white drop-shadow-[0_4px_4px_rgba(0,0,0,0.5)] mt-[15px]">
                        All discount up to 60%
                    </p>
                </div>
            </div>

            {{-- Liquor Items Card 1 --}}
            <div class="relative flex-none w-[270px] h-[180px] rounded-[25px] overflow-hidden group cursor-pointer">
                <div class="absolute inset-0">
                    <img src="{{ asset('images/liquor_items.png') }}" alt="Liquor"
                        class="w-full h-full object-cover -scale-x-100" draggable="false" />
                </div>
                <div class="absolute top-[29px] left-[19px]">
                    <h3
                        class="font-raleway font-bold text-[22px] leading-[26px] tracking-[0.03em] text-white drop-shadow-[0_4px_4px_rgba(0,0,0,0.5)]">
                        Liquor
                    </h3>
                    <p
                        class="font-raleway font-bold text-[13px] leading-[15px] text-white drop-shadow-[0_4px_4px_rgba(0,0,0,0.5)] mt-[8px]">
                        All discount up to 20%
                    </p>
                </div>
            </div>

            {{-- Duplicate Card 1 --}}
            <div class="relative flex-none w-[270px] h-[180px] rounded-[25px] overflow-hidden group cursor-pointer">
                <div class="absolute inset-0">
                    <img src="{{ asset('images/liquor_items.png') }}" alt="Liquor"
                        class="w-full h-full object-cover -scale-x-100" draggable="false" />
                </div>
                <div class="absolute top-[29px] left-[19px]">
                    <h3
                        class="font-raleway font-bold text-[22px] leading-[26px] tracking-[0.03em] text-white drop-shadow-[0_4px_4px_rgba(0,0,0,0.5)]">
                        Liquor
                    </h3>
                    <p
                        class="select-none font-raleway font-bold text-[13px] leading-[15px] text-white drop-shadow-[0_4px_4px_rgba(0,0,0,0.5)] mt-[8px]">
                        All discount up to 20%
                    </p>
                </div>
            </div>

            {{-- Duplicate Card 1 --}}
            <div class="relative flex-none w-[270px] h-[180px] rounded-[25px] overflow-hidden group cursor-pointer">
                <div class="absolute inset-0">
                    <img src="{{ asset('images/liquor_items.png') }}" alt="Liquor"
                        class="w-full h-full object-cover -scale-x-100" draggable="false" />
                </div>
                <div class="absolute top-[29px] left-[19px]">
                    <h3
                        class="font-raleway font-bold text-[22px] leading-[26px] tracking-[0.03em] text-white drop-shadow-[0_4px_4px_rgba(0,0,0,0.5)]">
                        Liquor
                    </h3>
                    <p
                        class="select-none font-raleway font-bold text-[13px] leading-[15px] text-white drop-shadow-[0_4px_4px_rgba(0,0,0,0.5)] mt-[8px]">
                        All discount up to 20%
                    </p>
                </div>
            </div>
            {{-- Duplicate Card 1 --}}
            <div class="relative flex-none w-[270px] h-[180px] rounded-[25px] overflow-hidden group cursor-pointer">
                <div class="absolute inset-0">
                    <img src="{{ asset('images/liquor_items.png') }}" alt="Liquor"
                        class="w-full h-full object-cover -scale-x-100" draggable="false" />
                </div>
                <div class="absolute top-[29px] left-[19px]">
                    <h3
                        class="font-raleway font-bold text-[22px] leading-[26px] tracking-[0.03em] text-white drop-shadow-[0_4px_4px_rgba(0,0,0,0.5)]">
                        Liquor
                    </h3>
                    <p
                        class="select-none font-raleway font-bold text-[13px] leading-[15px] text-white drop-shadow-[0_4px_4px_rgba(0,0,0,0.5)] mt-[8px]">
                        All discount up to 20%
                    </p>
                </div>
            </div>

            {{-- Duplicate Card 2 --}}
            <div class="relative flex-none w-[270px] h-[180px] rounded-[25px] overflow-hidden group cursor-pointer">
                <div class="absolute inset-0">
                    <img src="{{ asset('images/liquor_items.png') }}" alt="Liquor"
                        class="w-full h-full object-cover -scale-x-100" draggable="false" />
                </div>
                <div class="absolute top-[29px] left-[19px]">
                    <h3
                        class="font-raleway font-bold text-[22px] leading-[26px] tracking-[0.03em] text-white drop-shadow-[0_4px_4px_rgba(0,0,0,0.5)]">
                        Liquor
                    </h3>
                    <p
                        class="font-raleway font-bold text-[13px] leading-[15px] text-white drop-shadow-[0_4px_4px_rgba(0,0,0,0.5)] mt-[8px]">
                        All discount up to 20%
                    </p>
                </div>
            </div>

            {{-- Duplicate Card 3 --}}
            <div class="relative flex-none w-[270px] h-[180px] rounded-[25px] overflow-hidden group cursor-pointer">
                <div class="absolute inset-0">
                    <img src="{{ asset('images/liquor_items.png') }}" alt="Liquor"
                        class="w-full h-full object-cover -scale-x-100" draggable="false" />
                </div>
                <div class="absolute top-[29px] left-[19px]">
                    <h3
                        class="font-raleway font-bold text-[22px] leading-[26px] tracking-[0.03em] text-white drop-shadow-[0_4px_4px_rgba(0,0,0,0.5)]">
                        Liquor
                    </h3>
                    <p
                        class="font-raleway font-bold text-[13px] leading-[15px] text-white drop-shadow-[0_4px_4px_rgba(0,0,0,0.5)] mt-[8px]">
                        All discount up to 20%
                    </p>
                </div>
            </div>
        </div>
    </div>

    {{-- Header Section --}}
    <div class="flex justify-between items-center mb-5">
        <h2 class="font-bold text-xl leading-6 py-5 tracking-wider text-[#252B5C]">
            Featured Places
        </h2>
        <a href="#" class="font-semibold text-sm tracking-wider text-[#234F68]">
            view all
        </a>
    </div>

    {{-- Card Slider Component --}}
    <div class="select-none relative">
        {{-- Scrollable Container --}}
        <div id="featured-slider" class="flex gap-[15px] overflow-x-auto overflow-y-hidden h-[156px] scroll-smooth"
            style="scrollbar-width: none; -ms-overflow-style: none;">

            {{-- Card 1 - Aambo Momo --}}
            <div class="relative flex-none w-[268px] h-[156px] bg-[#F5F4F8] rounded-[25px] cursor-pointer">
                {{-- Image Section --}}
                <div class="absolute left-2 top-2 w-[130px] h-[140px]">
                    <img src="{{ asset('images/ambo.png') }}" alt="Aambo Momo"
                        class="w-full h-full object-cover rounded-[25px]" draggable="false" />

                    {{-- Favorite Button --}}
                    <div
                        class="absolute top-0 left-0 w-[25px] h-[25px] bg-[#F9443D] backdrop-blur-sm rounded-full flex items-center justify-center">
                        <svg width="11" height="10" viewBox="0 0 11 10" fill="none">
                            <path
                                d="M5.5 9.5L1.5 5.5C0.5 4.5 0.5 2.5 1.5 1.5C2.5 0.5 4.5 0.5 5.5 1.5C6.5 0.5 8.5 0.5 9.5 1.5C10.5 2.5 10.5 4.5 9.5 5.5L5.5 9.5Z"
                                fill="white" stroke="white" stroke-width="0.8" />
                        </svg>
                    </div>
                    {{-- Restaurant Badge --}}
                    <div
                        class="flex items-center absolute bottom-0 left-0 px-1 py-2.5 bg-[#F9443D] shadow-lg rounded-lg">
                        <span class="font-medium text-[8px] leading-[9px] tracking-wider text-white">Restaurant</span>
                    </div>
                </div>

                {{-- Content Section --}}
                <div class="absolute right-2.5 top-4 flex flex-col gap-2 w-[108px]">
                    {{-- Title --}}
                    <h3 class="font-bold text-sm leading-[18px] tracking-wider text-[#252B5C]">
                        Aambo Momo
                    </h3>

                    {{-- Rating and Location --}}
                    <div class="flex flex-col gap-2">
                        {{-- Rating --}}
                        <div class="flex items-center gap-0.5">
                            <svg width="9" height="9" viewBox="0 0 9 9" fill="none">
                                <path
                                    d="M4.5 0.75L5.5 3.5H8.25L6 5.25L6.75 8L4.5 6.25L2.25 8L3 5.25L0.75 3.5H3.5L4.5 0.75Z"
                                    fill="#FFC42D" />
                            </svg>
                            <span class="font-bold text-[8px] leading-2 text-[#53587A]">4.9</span>
                        </div>

                        {{-- Location --}}
                        <div class="flex items-center gap-0.5">
                            <svg width="9" height="9" viewBox="0 0 9 9" fill="none">
                                <path
                                    d="M4.5 0.75C2.5 0.75 0.75 2.5 0.75 4.5C0.75 6.5 4.5 8.25 4.5 8.25C4.5 8.25 8.25 6.5 8.25 4.5C8.25 2.5 6.5 0.75 4.5 0.75Z"
                                    fill="#234F68" />
                                <circle cx="4.5" cy="4.5" r="0.75" fill="white" stroke="white"
                                    stroke-width="1.25" />
                            </svg>
                            <span class="font-normal text-[10px] leading-3 text-[#53587A]">Jhamsikhel, Lalitpur</span>
                        </div>
                    </div>
                </div>

                {{-- Discount Badge --}}
                <div class="absolute bottom-[22px] left-[146px]">
                    <span class="font-medium text-[13px] leading-4 tracking-wider text-[#252B5C]">Up to 10% Off</span>
                </div>
            </div>

            {{-- Card 2 - Jamuna Sekuwa --}}
            <div class="relative flex-none w-[268px] h-[156px] bg-[#F5F4F8] rounded-[25px] cursor-pointer">
                {{-- Image Section --}}
                <div class="absolute left-2 top-2 w-[126px] h-[140px]">
                    <img src="{{ asset('images/jamuna.png') }}" alt="Jamuna Sekuwa"
                        class="w-full h-full object-cover rounded-[18px]" draggable="false" />

                    {{-- Favorite Button (Active) --}}
                    <div
                        class="absolute top-0 left-0 w-[25px] h-[25px] bg-[#F9443D] backdrop-blur-sm rounded-full flex items-center justify-center">
                        <svg width="11" height="10" viewBox="0 0 11 10" fill="none">
                            <path
                                d="M5.5 9.5L1.5 5.5C0.5 4.5 0.5 2.5 1.5 1.5C2.5 0.5 4.5 0.5 5.5 1.5C6.5 0.5 8.5 0.5 9.5 1.5C10.5 2.5 10.5 4.5 9.5 5.5L5.5 9.5Z"
                                fill="white" stroke="white" stroke-width="0.8" />
                        </svg>
                    </div>

                    {{-- Restaurant Badge --}}
                    <div
                        class="flex items-center absolute bottom-0 left-0 px-1 py-2.5 bg-[#F9443D] shadow-lg rounded-lg">
                        <span class="font-medium text-[8px] leading-[9px] tracking-wider text-white">Restaurant</span>
                    </div>
                </div>

                {{-- Content Section --}}
                <div class="absolute right-2.5 top-4 flex flex-col gap-2 w-[108px]">
                    {{-- Title --}}
                    <h3 class="font-bold text-sm leading-[18px] tracking-wider text-[#252B5C]">
                        Jamuna Sekuwa
                    </h3>

                    {{-- Rating and Location --}}
                    <div class="flex flex-col gap-2">
                        {{-- Rating --}}
                        <div class="flex items-center gap-0.5">
                            <svg width="9" height="9" viewBox="0 0 9 9" fill="none">
                                <path
                                    d="M4.5 0.75L5.5 3.5H8.25L6 5.25L6.75 8L4.5 6.25L2.25 8L3 5.25L0.75 3.5H3.5L4.5 0.75Z"
                                    fill="#FFC42D" />
                            </svg>
                            <span class="font-bold text-[8px] leading-2 text-[#53587A]">4.2</span>
                        </div>

                        {{-- Location --}}
                        <div class="flex items-center gap-0.5">
                            <svg width="9" height="9" viewBox="0 0 9 9" fill="none">
                                <path
                                    d="M4.5 0.75C2.5 0.75 0.75 2.5 0.75 4.5C0.75 6.5 4.5 8.25 4.5 8.25C4.5 8.25 8.25 6.5 8.25 4.5C8.25 2.5 6.5 0.75 4.5 0.75Z"
                                    fill="#FA712D" />
                                <circle cx="4.5" cy="4.5" r="0.75" fill="white" stroke="white"
                                    stroke-width="1.25" />
                            </svg>
                            <span class="font-normal text-[10px] leading-3 text-[#53587A]">Kalanki, Kathmandu</span>
                        </div>
                    </div>
                </div>

                {{-- Discount Badge --}}
                <div class="absolute bottom-5 left-[143px]">
                    <span class="font-medium text-[13px] leading-4 tracking-wider text-[#252B5C]">Up to 20% Off</span>
                </div>
            </div>

            {{-- Card 2 - Jamuna Sekuwa --}}
            <div class="relative flex-none w-[268px] h-[156px] bg-[#F5F4F8] rounded-[25px] cursor-pointer">
                {{-- Image Section --}}
                <div class="absolute left-2 top-2 w-[126px] h-[140px]">
                    <img src="{{ asset('images/jamuna.png') }}" alt="Jamuna Sekuwa"
                        class="w-full h-full object-cover rounded-[18px]" draggable="false" />

                    {{-- Favorite Button (Active) --}}
                    <div
                        class="absolute top-0 left-0 w-[25px] h-[25px] bg-[#F9443D] backdrop-blur-sm rounded-full flex items-center justify-center">
                        <svg width="11" height="10" viewBox="0 0 11 10" fill="none">
                            <path
                                d="M5.5 9.5L1.5 5.5C0.5 4.5 0.5 2.5 1.5 1.5C2.5 0.5 4.5 0.5 5.5 1.5C6.5 0.5 8.5 0.5 9.5 1.5C10.5 2.5 10.5 4.5 9.5 5.5L5.5 9.5Z"
                                fill="white" stroke="white" stroke-width="0.8" />
                        </svg>
                    </div>

                    {{-- Restaurant Badge --}}
                    <div
                        class="flex items-center absolute bottom-0 left-0 px-1 py-2.5 bg-[#F9443D] shadow-lg rounded-lg">
                        <span class="font-medium text-[8px] leading-[9px] tracking-wider text-white">Restaurant</span>
                    </div>
                </div>

                {{-- Content Section --}}
                <div class="absolute right-2.5 top-4 flex flex-col gap-2 w-[108px]">
                    {{-- Title --}}
                    <h3 class="font-bold text-sm leading-[18px] tracking-wider text-[#252B5C]">
                        Jamuna Sekuwa
                    </h3>

                    {{-- Rating and Location --}}
                    <div class="flex flex-col gap-2">
                        {{-- Rating --}}
                        <div class="flex items-center gap-0.5">
                            <svg width="9" height="9" viewBox="0 0 9 9" fill="none">
                                <path
                                    d="M4.5 0.75L5.5 3.5H8.25L6 5.25L6.75 8L4.5 6.25L2.25 8L3 5.25L0.75 3.5H3.5L4.5 0.75Z"
                                    fill="#FFC42D" />
                            </svg>
                            <span class="font-bold text-[8px] leading-2 text-[#53587A]">4.2</span>
                        </div>

                        {{-- Location --}}
                        <div class="flex items-center gap-0.5">
                            <svg width="9" height="9" viewBox="0 0 9 9" fill="none">
                                <path
                                    d="M4.5 0.75C2.5 0.75 0.75 2.5 0.75 4.5C0.75 6.5 4.5 8.25 4.5 8.25C4.5 8.25 8.25 6.5 8.25 4.5C8.25 2.5 6.5 0.75 4.5 0.75Z"
                                    fill="#FA712D" />
                                <circle cx="4.5" cy="4.5" r="0.75" fill="white" stroke="white"
                                    stroke-width="1.25" />
                            </svg>
                            <span class="font-normal text-[10px] leading-3 text-[#53587A]">Kalanki, Kathmandu</span>
                        </div>
                    </div>
                </div>

                {{-- Discount Badge --}}
                <div class="absolute bottom-5 left-[143px]">
                    <span class="font-medium text-[13px] leading-4 tracking-wider text-[#252B5C]">Up to 20% Off</span>
                </div>
            </div>

            {{-- Card 2 - Jamuna Sekuwa --}}
            <div class="relative flex-none w-[268px] h-[156px] bg-[#F5F4F8] rounded-[25px] cursor-pointer">
                {{-- Image Section --}}
                <div class="absolute left-2 top-2 w-[126px] h-[140px]">
                    <img src="{{ asset('images/jamuna.png') }}" alt="Jamuna Sekuwa"
                        class="w-full h-full object-cover rounded-[18px]" draggable="false" />

                    {{-- Favorite Button (Active) --}}
                    <div
                        class="absolute top-0 left-0 w-[25px] h-[25px] bg-[#F9443D] backdrop-blur-sm rounded-full flex items-center justify-center">
                        <svg width="11" height="10" viewBox="0 0 11 10" fill="none">
                            <path
                                d="M5.5 9.5L1.5 5.5C0.5 4.5 0.5 2.5 1.5 1.5C2.5 0.5 4.5 0.5 5.5 1.5C6.5 0.5 8.5 0.5 9.5 1.5C10.5 2.5 10.5 4.5 9.5 5.5L5.5 9.5Z"
                                fill="white" stroke="white" stroke-width="0.8" />
                        </svg>
                    </div>

                    {{-- Restaurant Badge --}}
                    <div
                        class="flex items-center absolute bottom-0 left-0 px-1 py-2.5 bg-[#F9443D] shadow-lg rounded-lg">
                        <span class="font-medium text-[8px] leading-[9px] tracking-wider text-white">Restaurant</span>
                    </div>
                </div>

                {{-- Content Section --}}
                <div class="absolute right-2.5 top-4 flex flex-col gap-2 w-[108px]">
                    {{-- Title --}}
                    <h3 class="font-bold text-sm leading-[18px] tracking-wider text-[#252B5C]">
                        Jamuna Sekuwa
                    </h3>

                    {{-- Rating and Location --}}
                    <div class="flex flex-col gap-2">
                        {{-- Rating --}}
                        <div class="flex items-center gap-0.5">
                            <svg width="9" height="9" viewBox="0 0 9 9" fill="none">
                                <path
                                    d="M4.5 0.75L5.5 3.5H8.25L6 5.25L6.75 8L4.5 6.25L2.25 8L3 5.25L0.75 3.5H3.5L4.5 0.75Z"
                                    fill="#FFC42D" />
                            </svg>
                            <span class="font-bold text-[8px] leading-2 text-[#53587A]">4.2</span>
                        </div>

                        {{-- Location --}}
                        <div class="flex items-center gap-0.5">
                            <svg width="9" height="9" viewBox="0 0 9 9" fill="none">
                                <path
                                    d="M4.5 0.75C2.5 0.75 0.75 2.5 0.75 4.5C0.75 6.5 4.5 8.25 4.5 8.25C4.5 8.25 8.25 6.5 8.25 4.5C8.25 2.5 6.5 0.75 4.5 0.75Z"
                                    fill="#FA712D" />
                                <circle cx="4.5" cy="4.5" r="0.75" fill="white" stroke="white"
                                    stroke-width="1.25" />
                            </svg>
                            <span class="font-normal text-[10px] leading-3 text-[#53587A]">Kalanki, Kathmandu</span>
                        </div>
                    </div>
                </div>

                {{-- Discount Badge --}}
                <div class="absolute bottom-5 left-[143px]">
                    <span class="font-medium text-[13px] leading-4 tracking-wider text-[#252B5C]">Up to 20% Off</span>
                </div>
            </div>

            {{-- Card 2 - Jamuna Sekuwa --}}
            <div class="relative flex-none w-[268px] h-[156px] bg-[#F5F4F8] rounded-[25px] cursor-pointer">
                {{-- Image Section --}}
                <div class="absolute left-2 top-2 w-[126px] h-[140px]">
                    <img src="{{ asset('images/jamuna.png') }}" alt="Jamuna Sekuwa"
                        class="w-full h-full object-cover rounded-[18px]" draggable="false" />

                    {{-- Favorite Button (Active) --}}
                    <div
                        class="absolute top-0 left-0 w-[25px] h-[25px] bg-[#F9443D] backdrop-blur-sm rounded-full flex items-center justify-center">
                        <svg width="11" height="10" viewBox="0 0 11 10" fill="none">
                            <path
                                d="M5.5 9.5L1.5 5.5C0.5 4.5 0.5 2.5 1.5 1.5C2.5 0.5 4.5 0.5 5.5 1.5C6.5 0.5 8.5 0.5 9.5 1.5C10.5 2.5 10.5 4.5 9.5 5.5L5.5 9.5Z"
                                fill="white" stroke="white" stroke-width="0.8" />
                        </svg>
                    </div>

                    {{-- Restaurant Badge --}}
                    <div
                        class="flex items-center absolute bottom-0 left-0 px-1 py-2.5 bg-[#F9443D] shadow-lg rounded-lg">
                        <span class="font-medium text-[8px] leading-[9px] tracking-wider text-white">Restaurant</span>
                    </div>
                </div>

                {{-- Content Section --}}
                <div class="absolute right-2.5 top-4 flex flex-col gap-2 w-[108px]">
                    {{-- Title --}}
                    <h3 class="font-bold text-sm leading-[18px] tracking-wider text-[#252B5C]">
                        Jamuna Sekuwa
                    </h3>

                    {{-- Rating and Location --}}
                    <div class="flex flex-col gap-2">
                        {{-- Rating --}}
                        <div class="flex items-center gap-0.5">
                            <svg width="9" height="9" viewBox="0 0 9 9" fill="none">
                                <path
                                    d="M4.5 0.75L5.5 3.5H8.25L6 5.25L6.75 8L4.5 6.25L2.25 8L3 5.25L0.75 3.5H3.5L4.5 0.75Z"
                                    fill="#FFC42D" />
                            </svg>
                            <span class="font-bold text-[8px] leading-2 text-[#53587A]">4.2</span>
                        </div>

                        {{-- Location --}}
                        <div class="flex items-center gap-0.5">
                            <svg width="9" height="9" viewBox="0 0 9 9" fill="none">
                                <path
                                    d="M4.5 0.75C2.5 0.75 0.75 2.5 0.75 4.5C0.75 6.5 4.5 8.25 4.5 8.25C4.5 8.25 8.25 6.5 8.25 4.5C8.25 2.5 6.5 0.75 4.5 0.75Z"
                                    fill="#FA712D" />
                                <circle cx="4.5" cy="4.5" r="0.75" fill="white" stroke="white"
                                    stroke-width="1.25" />
                            </svg>
                            <span class="font-normal text-[10px] leading-3 text-[#53587A]">Kalanki, Kathmandu</span>
                        </div>
                    </div>
                </div>

                {{-- Discount Badge --}}
                <div class="absolute bottom-5 left-[143px]">
                    <span class="font-medium text-[13px] leading-4 tracking-wider text-[#252B5C]">Up to 20% Off</span>
                </div>
            </div>

            {{-- Card 2 - Jamuna Sekuwa --}}
            <div class="relative flex-none w-[268px] h-[156px] bg-[#F5F4F8] rounded-[25px] cursor-pointer">
                {{-- Image Section --}}
                <div class="absolute left-2 top-2 w-[126px] h-[140px]">
                    <img src="{{ asset('images/jamuna.png') }}" alt="Jamuna Sekuwa"
                        class="w-full h-full object-cover rounded-[18px]" draggable="false" />

                    {{-- Favorite Button (Active) --}}
                    <div
                        class="absolute top-0 left-0 w-[25px] h-[25px] bg-[#F9443D] backdrop-blur-sm rounded-full flex items-center justify-center">
                        <svg width="11" height="10" viewBox="0 0 11 10" fill="none">
                            <path
                                d="M5.5 9.5L1.5 5.5C0.5 4.5 0.5 2.5 1.5 1.5C2.5 0.5 4.5 0.5 5.5 1.5C6.5 0.5 8.5 0.5 9.5 1.5C10.5 2.5 10.5 4.5 9.5 5.5L5.5 9.5Z"
                                fill="white" stroke="white" stroke-width="0.8" />
                        </svg>
                    </div>

                    {{-- Restaurant Badge --}}
                    <div
                        class="flex items-center absolute bottom-0 left-0 px-1 py-2.5 bg-[#F9443D] shadow-lg rounded-lg">
                        <span class="font-medium text-[8px] leading-[9px] tracking-wider text-white">Restaurant</span>
                    </div>
                </div>

                {{-- Content Section --}}
                <div class="absolute right-2.5 top-4 flex flex-col gap-2 w-[108px]">
                    {{-- Title --}}
                    <h3 class="font-bold text-sm leading-[18px] tracking-wider text-[#252B5C]">
                        Jamuna Sekuwa
                    </h3>

                    {{-- Rating and Location --}}
                    <div class="flex flex-col gap-2">
                        {{-- Rating --}}
                        <div class="flex items-center gap-0.5">
                            <svg width="9" height="9" viewBox="0 0 9 9" fill="none">
                                <path
                                    d="M4.5 0.75L5.5 3.5H8.25L6 5.25L6.75 8L4.5 6.25L2.25 8L3 5.25L0.75 3.5H3.5L4.5 0.75Z"
                                    fill="#FFC42D" />
                            </svg>
                            <span class="font-bold text-[8px] leading-2 text-[#53587A]">4.2</span>
                        </div>

                        {{-- Location --}}
                        <div class="flex items-center gap-0.5">
                            <svg width="9" height="9" viewBox="0 0 9 9" fill="none">
                                <path
                                    d="M4.5 0.75C2.5 0.75 0.75 2.5 0.75 4.5C0.75 6.5 4.5 8.25 4.5 8.25C4.5 8.25 8.25 6.5 8.25 4.5C8.25 2.5 6.5 0.75 4.5 0.75Z"
                                    fill="#FA712D" />
                                <circle cx="4.5" cy="4.5" r="0.75" fill="white" stroke="white"
                                    stroke-width="1.25" />
                            </svg>
                            <span class="font-normal text-[10px] leading-3 text-[#53587A]">Kalanki, Kathmandu</span>
                        </div>
                    </div>
                </div>

                {{-- Discount Badge --}}
                <div class="absolute bottom-5 left-[143px]">
                    <span class="font-medium text-[13px] leading-4 tracking-wider text-[#252B5C]">Up to 20% Off</span>
                </div>
            </div>

            {{-- Card 2 - Jamuna Sekuwa --}}
            <div class="relative flex-none w-[268px] h-[156px] bg-[#F5F4F8] rounded-[25px] cursor-pointer">
                {{-- Image Section --}}
                <div class="absolute left-2 top-2 w-[126px] h-[140px]">
                    <img src="{{ asset('images/jamuna.png') }}" alt="Jamuna Sekuwa"
                        class="w-full h-full object-cover rounded-[18px]" draggable="false" />

                    {{-- Favorite Button (Active) --}}
                    <div
                        class="absolute top-0 left-0 w-[25px] h-[25px] bg-[#F9443D] backdrop-blur-sm rounded-full flex items-center justify-center">
                        <svg width="11" height="10" viewBox="0 0 11 10" fill="none">
                            <path
                                d="M5.5 9.5L1.5 5.5C0.5 4.5 0.5 2.5 1.5 1.5C2.5 0.5 4.5 0.5 5.5 1.5C6.5 0.5 8.5 0.5 9.5 1.5C10.5 2.5 10.5 4.5 9.5 5.5L5.5 9.5Z"
                                fill="white" stroke="white" stroke-width="0.8" />
                        </svg>
                    </div>

                    {{-- Restaurant Badge --}}
                    <div
                        class="flex items-center absolute bottom-0 left-0 px-1 py-2.5 bg-[#F9443D] shadow-lg rounded-lg">
                        <span class="font-medium text-[8px] leading-[9px] tracking-wider text-white">Restaurant</span>
                    </div>
                </div>

                {{-- Content Section --}}
                <div class="absolute right-2.5 top-4 flex flex-col gap-2 w-[108px]">
                    {{-- Title --}}
                    <h3 class="font-bold text-sm leading-[18px] tracking-wider text-[#252B5C]">
                        Jamuna Sekuwa
                    </h3>

                    {{-- Rating and Location --}}
                    <div class="flex flex-col gap-2">
                        {{-- Rating --}}
                        <div class="flex items-center gap-0.5">
                            <svg width="9" height="9" viewBox="0 0 9 9" fill="none">
                                <path
                                    d="M4.5 0.75L5.5 3.5H8.25L6 5.25L6.75 8L4.5 6.25L2.25 8L3 5.25L0.75 3.5H3.5L4.5 0.75Z"
                                    fill="#FFC42D" />
                            </svg>
                            <span class="font-bold text-[8px] leading-2 text-[#53587A]">4.2</span>
                        </div>

                        {{-- Location --}}
                        <div class="flex items-center gap-0.5">
                            <svg width="9" height="9" viewBox="0 0 9 9" fill="none">
                                <path
                                    d="M4.5 0.75C2.5 0.75 0.75 2.5 0.75 4.5C0.75 6.5 4.5 8.25 4.5 8.25C4.5 8.25 8.25 6.5 8.25 4.5C8.25 2.5 6.5 0.75 4.5 0.75Z"
                                    fill="#FA712D" />
                                <circle cx="4.5" cy="4.5" r="0.75" fill="white" stroke="white"
                                    stroke-width="1.25" />
                            </svg>
                            <span class="font-normal text-[10px] leading-3 text-[#53587A]">Kalanki, Kathmandu</span>
                        </div>
                    </div>
                </div>

                {{-- Discount Badge --}}
                <div class="absolute bottom-5 left-[143px]">
                    <span class="font-medium text-[13px] leading-4 tracking-wider text-[#252B5C]">Up to 20% Off</span>
                </div>
            </div>

            {{-- Card 2 - Jamuna Sekuwa --}}
            <div class="relative flex-none w-[268px] h-[156px] bg-[#F5F4F8] rounded-[25px] cursor-pointer">
                {{-- Image Section --}}
                <div class="absolute left-2 top-2 w-[126px] h-[140px]">
                    <img src="{{ asset('images/jamuna.png') }}" alt="Jamuna Sekuwa"
                        class="w-full h-full object-cover rounded-[18px]" draggable="false" />

                    {{-- Favorite Button (Active) --}}
                    <div
                        class="absolute top-0 left-0 w-[25px] h-[25px] bg-[#F9443D] backdrop-blur-sm rounded-full flex items-center justify-center">
                        <svg width="11" height="10" viewBox="0 0 11 10" fill="none">
                            <path
                                d="M5.5 9.5L1.5 5.5C0.5 4.5 0.5 2.5 1.5 1.5C2.5 0.5 4.5 0.5 5.5 1.5C6.5 0.5 8.5 0.5 9.5 1.5C10.5 2.5 10.5 4.5 9.5 5.5L5.5 9.5Z"
                                fill="white" stroke="white" stroke-width="0.8" />
                        </svg>
                    </div>

                    {{-- Restaurant Badge --}}
                    <div
                        class="flex items-center absolute bottom-0 left-0 px-1 py-2.5 bg-[#F9443D] shadow-lg rounded-lg">
                        <span class="font-medium text-[8px] leading-[9px] tracking-wider text-white">Restaurant</span>
                    </div>
                </div>

                {{-- Content Section --}}
                <div class="absolute right-2.5 top-4 flex flex-col gap-2 w-[108px]">
                    {{-- Title --}}
                    <h3 class="font-bold text-sm leading-[18px] tracking-wider text-[#252B5C]">
                        Jamuna Sekuwa
                    </h3>

                    {{-- Rating and Location --}}
                    <div class="flex flex-col gap-2">
                        {{-- Rating --}}
                        <div class="flex items-center gap-0.5">
                            <svg width="9" height="9" viewBox="0 0 9 9" fill="none">
                                <path
                                    d="M4.5 0.75L5.5 3.5H8.25L6 5.25L6.75 8L4.5 6.25L2.25 8L3 5.25L0.75 3.5H3.5L4.5 0.75Z"
                                    fill="#FFC42D" />
                            </svg>
                            <span class="font-bold text-[8px] leading-2 text-[#53587A]">4.2</span>
                        </div>

                        {{-- Location --}}
                        <div class="flex items-center gap-0.5">
                            <svg width="9" height="9" viewBox="0 0 9 9" fill="none">
                                <path
                                    d="M4.5 0.75C2.5 0.75 0.75 2.5 0.75 4.5C0.75 6.5 4.5 8.25 4.5 8.25C4.5 8.25 8.25 6.5 8.25 4.5C8.25 2.5 6.5 0.75 4.5 0.75Z"
                                    fill="#FA712D" />
                                <circle cx="4.5" cy="4.5" r="0.75" fill="white" stroke="white"
                                    stroke-width="1.25" />
                            </svg>
                            <span class="font-normal text-[10px] leading-3 text-[#53587A]">Kalanki, Kathmandu</span>
                        </div>
                    </div>
                </div>

                {{-- Discount Badge --}}
                <div class="absolute bottom-5 left-[143px]">
                    <span class="font-medium text-[13px] leading-4 tracking-wider text-[#252B5C]">Up to 20% Off</span>
                </div>
            </div>

            {{-- Card 2 - Jamuna Sekuwa --}}
            <div class="relative flex-none w-[268px] h-[156px] bg-[#F5F4F8] rounded-[25px] cursor-pointer">
                {{-- Image Section --}}
                <div class="absolute left-2 top-2 w-[126px] h-[140px]">
                    <img src="{{ asset('images/jamuna.png') }}" alt="Jamuna Sekuwa"
                        class="w-full h-full object-cover rounded-[18px]" draggable="false" />

                    {{-- Favorite Button (Active) --}}
                    <div
                        class="absolute top-0 left-0 w-[25px] h-[25px] bg-[#F9443D] backdrop-blur-sm rounded-full flex items-center justify-center">
                        <svg width="11" height="10" viewBox="0 0 11 10" fill="none">
                            <path
                                d="M5.5 9.5L1.5 5.5C0.5 4.5 0.5 2.5 1.5 1.5C2.5 0.5 4.5 0.5 5.5 1.5C6.5 0.5 8.5 0.5 9.5 1.5C10.5 2.5 10.5 4.5 9.5 5.5L5.5 9.5Z"
                                fill="white" stroke="white" stroke-width="0.8" />
                        </svg>
                    </div>

                    {{-- Restaurant Badge --}}
                    <div
                        class="flex items-center absolute bottom-0 left-0 px-1 py-2.5 bg-[#F9443D] shadow-lg rounded-lg">
                        <span class="font-medium text-[8px] leading-[9px] tracking-wider text-white">Restaurant</span>
                    </div>
                </div>

                {{-- Content Section --}}
                <div class="absolute right-2.5 top-4 flex flex-col gap-2 w-[108px]">
                    {{-- Title --}}
                    <h3 class="font-bold text-sm leading-[18px] tracking-wider text-[#252B5C]">
                        Jamuna Sekuwa
                    </h3>

                    {{-- Rating and Location --}}
                    <div class="flex flex-col gap-2">
                        {{-- Rating --}}
                        <div class="flex items-center gap-0.5">
                            <svg width="9" height="9" viewBox="0 0 9 9" fill="none">
                                <path
                                    d="M4.5 0.75L5.5 3.5H8.25L6 5.25L6.75 8L4.5 6.25L2.25 8L3 5.25L0.75 3.5H3.5L4.5 0.75Z"
                                    fill="#FFC42D" />
                            </svg>
                            <span class="font-bold text-[8px] leading-2 text-[#53587A]">4.2</span>
                        </div>

                        {{-- Location --}}
                        <div class="flex items-center gap-0.5">
                            <svg width="9" height="9" viewBox="0 0 9 9" fill="none">
                                <path
                                    d="M4.5 0.75C2.5 0.75 0.75 2.5 0.75 4.5C0.75 6.5 4.5 8.25 4.5 8.25C4.5 8.25 8.25 6.5 8.25 4.5C8.25 2.5 6.5 0.75 4.5 0.75Z"
                                    fill="#FA712D" />
                                <circle cx="4.5" cy="4.5" r="0.75" fill="white" stroke="white"
                                    stroke-width="1.25" />
                            </svg>
                            <span class="font-normal text-[10px] leading-3 text-[#53587A]">Kalanki, Kathmandu</span>
                        </div>
                    </div>
                </div>

                {{-- Discount Badge --}}
                <div class="absolute bottom-5 left-[143px]">
                    <span class="font-medium text-[13px] leading-4 tracking-wider text-[#252B5C]">Up to 20% Off</span>
                </div>
            </div>

            {{-- Card 2 - Jamuna Sekuwa --}}
            <div class="relative flex-none w-[268px] h-[156px] bg-[#F5F4F8] rounded-[25px] cursor-pointer">
                {{-- Image Section --}}
                <div class="absolute left-2 top-2 w-[126px] h-[140px]">
                    <img src="{{ asset('images/jamuna.png') }}" alt="Jamuna Sekuwa"
                        class="w-full h-full object-cover rounded-[18px]" draggable="false" />

                    {{-- Favorite Button (Active) --}}
                    <div
                        class="absolute top-0 left-0 w-[25px] h-[25px] bg-[#F9443D] backdrop-blur-sm rounded-full flex items-center justify-center">
                        <svg width="11" height="10" viewBox="0 0 11 10" fill="none">
                            <path
                                d="M5.5 9.5L1.5 5.5C0.5 4.5 0.5 2.5 1.5 1.5C2.5 0.5 4.5 0.5 5.5 1.5C6.5 0.5 8.5 0.5 9.5 1.5C10.5 2.5 10.5 4.5 9.5 5.5L5.5 9.5Z"
                                fill="white" stroke="white" stroke-width="0.8" />
                        </svg>
                    </div>

                    {{-- Restaurant Badge --}}
                    <div
                        class="flex items-center absolute bottom-0 left-0 px-1 py-2.5 bg-[#F9443D] shadow-lg rounded-lg">
                        <span class="font-medium text-[8px] leading-[9px] tracking-wider text-white">Restaurant</span>
                    </div>
                </div>

                {{-- Content Section --}}
                <div class="absolute right-2.5 top-4 flex flex-col gap-2 w-[108px]">
                    {{-- Title --}}
                    <h3 class="font-bold text-sm leading-[18px] tracking-wider text-[#252B5C]">
                        Jamuna Sekuwa
                    </h3>

                    {{-- Rating and Location --}}
                    <div class="flex flex-col gap-2">
                        {{-- Rating --}}
                        <div class="flex items-center gap-0.5">
                            <svg width="9" height="9" viewBox="0 0 9 9" fill="none">
                                <path
                                    d="M4.5 0.75L5.5 3.5H8.25L6 5.25L6.75 8L4.5 6.25L2.25 8L3 5.25L0.75 3.5H3.5L4.5 0.75Z"
                                    fill="#FFC42D" />
                            </svg>
                            <span class="font-bold text-[8px] leading-2 text-[#53587A]">4.2</span>
                        </div>

                        {{-- Location --}}
                        <div class="flex items-center gap-0.5">
                            <svg width="9" height="9" viewBox="0 0 9 9" fill="none">
                                <path
                                    d="M4.5 0.75C2.5 0.75 0.75 2.5 0.75 4.5C0.75 6.5 4.5 8.25 4.5 8.25C4.5 8.25 8.25 6.5 8.25 4.5C8.25 2.5 6.5 0.75 4.5 0.75Z"
                                    fill="#FA712D" />
                                <circle cx="4.5" cy="4.5" r="0.75" fill="white" stroke="white"
                                    stroke-width="1.25" />
                            </svg>
                            <span class="font-normal text-[10px] leading-3 text-[#53587A]">Kalanki, Kathmandu</span>
                        </div>
                    </div>
                </div>

                {{-- Discount Badge --}}
                <div class="absolute bottom-5 left-[143px]">
                    <span class="font-medium text-[13px] leading-4 tracking-wider text-[#252B5C]">Up to 20% Off</span>
                </div>
            </div>


        </div>
    </div>

    {{-- JavaScript for Mouse Drag & Scroll Wheel --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Select both sliders by id
            const sliders = document.querySelectorAll('#card-slider, #featured-slider');
            if (!sliders || sliders.length === 0) return;

            sliders.forEach((slider) => {
                let isDown = false;
                let startX = 0;
                let scrollLeft = 0;

                // Mouse events
                slider.addEventListener('mousedown', (e) => {
                    isDown = true;
                    slider.style.cursor = 'grabbing';
                    startX = e.pageX - slider.offsetLeft;
                    scrollLeft = slider.scrollLeft;
                });

                slider.addEventListener('mouseleave', () => {
                    isDown = false;
                    slider.style.cursor = 'grab';
                });

                slider.addEventListener('mouseup', () => {
                    isDown = false;
                    slider.style.cursor = 'grab';
                });

                slider.addEventListener('mousemove', (e) => {
                    if (!isDown) return;
                    e.preventDefault();
                    const x = e.pageX - slider.offsetLeft;
                    const walk = (x - startX) * 4; // scroll-fast
                    slider.scrollLeft = scrollLeft - walk;
                });

                // Touch events (mobile)
                slider.addEventListener('touchstart', (e) => {
                    if (e.touches.length !== 1) return;
                    isDown = true;
                    const touch = e.touches[0];
                    startX = touch.pageX - slider.offsetLeft;
                    scrollLeft = slider.scrollLeft;
                }, {
                    passive: true
                });

                slider.addEventListener('touchend', () => {
                    isDown = false;
                });

                slider.addEventListener('touchmove', (e) => {
                    if (!isDown) return;
                    const touch = e.touches[0];
                    const x = touch.pageX - slider.offsetLeft;
                    const walk = (x - startX) * 4;
                    slider.scrollLeft = scrollLeft - walk;
                }, {
                    passive: true
                });

                // Scroll wheel functionality (preventDefault to avoid vertical scroll capture)
                slider.addEventListener('wheel', (e) => {
                    // if shift key is pressed, let native horizontal scroll happen
                    if (e.shiftKey) return;
                    e.preventDefault();
                    // deltaY for vertical wheel, add to horizontal scroll
                    slider.scrollLeft += e.deltaY;
                }, {
                    passive: false
                });

                // Ensure initial cursor
                slider.style.cursor = 'grab';
            });
        });
    </script>

    {{-- Custom CSS for hiding scrollbar --}}
    <style>
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }

        .scrollbar-hide {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@700&display=swap');

        .font-raleway {
            font-family: 'Raleway', sans-serif;
        }
    </style>

</section>
