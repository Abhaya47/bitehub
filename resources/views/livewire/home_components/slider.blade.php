    <section class="px-5 max-w-full lg:px-20 py-20">
        {{-- Card Slider Component --}}
        <div class="select-none relative group">
            {{-- Left Arrow Button --}}
            <button
                class="carousel-btn-prev absolute left-[30.23px] top-[150px] -translate-y-1/2 w-[60.93px] h-[40px] bg-white rounded-lg flex items-center justify-center hover:bg-gray-100 transition-colors shadow-md z-10 opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                data-slider="card-slider">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10 13.28L5.65333 8.93333C5.14 8.42 5.14 7.58 5.65333 7.06667L10 2.72" stroke="#004225"
                        stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>

            {{-- Right Arrow Button --}}
            <button
                class="carousel-btn-next absolute right-[36.56px] top-[150px] -translate-y-1/2 w-[60.93px] h-[40px] bg-white rounded-lg flex items-center justify-center hover:bg-gray-100 transition-colors shadow-md z-10 opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                data-slider="card-slider">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 2.72L10.3467 7.06667C10.86 7.58 10.86 8.42 10.3467 8.93333L6 13.28" stroke="#004225"
                        stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>

            {{-- Scrollable Container --}}
            <div id="card-slider"
                class="flex gap-[15px] overflow-x-auto overflow-y-hidden h-[180px] md:h-[200px] lg:h-[220px] scroll-smooth scrollbar-hide"
                style="scrollbar-width: none; -ms-overflow-style: none;">

                {{-- Non-Veg Food Items Card --}}
                <div
                    class="relative flex-none w-[270px] md:w-[320px] lg:w-[350px] h-[180px] md:h-[200px] lg:h-[220px] rounded-[25px] overflow-hidden group cursor-pointer">
                    <div class="absolute inset-0 bg-gradient-to-b from-black/20 to-black/20">
                        <img src="{{ asset('images/non_veg_items.png') }}" alt="Non-Veg Food"
                            class="w-full h-full object-cover -scale-x-1000" draggable="false" />
                    </div>
                    <div
                        class="absolute top-[29px] md:top-[35px] lg:top-[40px] le                       
                    ft-[19px] md:left-[24px] lg:left-[28px]">
                        <h3
                            class="font-raleway font-bold text-[22px] md:text-[26px] lg:text-[30px] leading-[26px] md:leading-[30px] lg:leading-[35px] tracking-[0.03em] text-white drop-shadow-[0_4px_4px_rgba(0,0,0,0.5)]">
                            Non Veg
                        </h3>
                        <p
                            class="font-raleway font-bold text-[13px] md:text-[15px] lg:text-[17px] leading-[15px] md:leading-[18px] lg:leading-[20px] text-white drop-shadow-[0_4px_4px_rgba(0,0,0,0.5)] mt-[11px] md:mt-[13px] lg:mt-[15px]">
                            All discount up to 60%
                        </p>
                    </div>
                </div>

                {{-- Veggie Food Items Card --}}
                <div
                    class="relative flex-none w-[270px] md:w-[320px] lg:w-[350px] h-[180px] md:h-[200px] lg:h-[220px] rounded-[25px] overflow-hidden group cursor-pointer">
                    <div class="absolute inset-0 bg-gradient-to-b from-black/20 to-black/20">
                        <img src="{{ asset('images/veg_food_items.png') }}" alt="Veggie Food"
                            class="w-full h-full object-cover -scale-x-100" draggable="false" />
                    </div>
                    <div
                        class="absolute top-[25px] md:top-[30px] lg:top-[35px] left-[12px] md:left-[16px] lg:left-[20px]">
                        <h3
                            class="font-raleway font-bold text-[22px] md:text-[26px] lg:text-[30px] leading-[26px] md:leading-[30px] lg:leading-[35px] tracking-[0.03em] text-white drop-shadow-[0_4px_4px_rgba(0,0,0,0.5)]">
                            Veg
                        </h3>
                        <p
                            class="font-raleway font-bold text-[13px] md:text-[15px] lg:text-[17px] leading-[15px] md:leading-[18px] lg:leading-[20px] text-white drop-shadow-[0_4px_4px_rgba(0,0,0,0.5)] mt-[15px] md:mt-[17px] lg:mt-[19px]">
                            All discount up to 60%
                        </p>
                    </div>
                </div>

                {{-- Bakery Food Card --}}
                <div
                    class="relative flex-none w-[270px] md:w-[320px] lg:w-[350px] h-[180px] md:h-[200px] lg:h-[220px] rounded-[25px] overflow-hidden group cursor-pointer">
                    <div class="absolute inset-0">
                        <img src="{{ asset('images/bakery_image.png') }}" alt="Bakery"
                            class="w-full h-full object-cover -scale-x-100" draggable="false" />
                    </div>
                    <div
                        class="absolute top-[25px] md:top-[30px] lg:top-[35px] left-[12px] md:left-[16px] lg:left-[20px]">
                        <h3
                            class="font-raleway font-bold text-[22px] md:text-[26px] lg:text-[30px] leading-[26px] md:leading-[30px] lg:leading-[35px] tracking-[0.03em] text-white drop-shadow-[0_4px_4px_rgba(0,0,0,0.5)]">
                            Bakery
                        </h3>
                        <p
                            class="font-raleway font-bold text-[13px] md:text-[15px] lg:text-[17px] leading-[15px] md:leading-[18px] lg:leading-[20px] text-white drop-shadow-[0_4px_4px_rgba(0,0,0,0.5)] mt-[15px] md:mt-[17px] lg:mt-[19px]">
                            All discount up to 60%
                        </p>
                    </div>
                </div>

                {{-- Liquor Items Card 1 --}}
                <div
                    class="relative flex-none w-[270px] md:w-[320px] lg:w-[350px] h-[180px] md:h-[200px] lg:h-[220px] rounded-[25px] overflow-hidden group cursor-pointer">
                    <div class="absolute inset-0">
                        <img src="{{ asset('images/liquor_items.png') }}" alt="Liquor"
                            class="w-full h-full object-cover -scale-x-100" draggable="false" />
                    </div>
                    <div
                        class="absolute top-[29px] md:top-[35px] lg:top-[40px] left-[19px] md:left-[24px] lg:left-[28px]">
                        <h3
                            class="font-raleway font-bold text-[22px] md:text-[26px] lg:text-[30px] leading-[26px] md:leading-[30px] lg:leading-[35px] tracking-[0.03em] text-white drop-shadow-[0_4px_4px_rgba(0,0,0,0.5)]">
                            Liquor
                        </h3>
                        <p
                            class="font-raleway font-bold text-[13px] md:text-[15px] lg:text-[17px] leading-[15px] md:leading-[18px] lg:leading-[20px] text-white drop-shadow-[0_4px_4px_rgba(0,0,0,0.5)] mt-[8px] md:mt-[10px] lg:mt-[12px]">
                            All discount up to 20%
                        </p>
                    </div>
                </div>

                {{-- Duplicate Cards with same responsive classes --}}
                <div
                    class="relative flex-none w-[270px] md:w-[320px] lg:w-[350px] h-[180px] md:h-[200px] lg:h-[220px] rounded-[25px] overflow-hidden group cursor-pointer">
                    <div class="absolute inset-0">
                        <img src="{{ asset('images/liquor_items.png') }}" alt="Liquor"
                            class="w-full h-full object-cover -scale-x-100" draggable="false" />
                    </div>
                    <div
                        class="absolute top-[29px] md:top-[35px] lg:top-[40px] left-[19px] md:left-[24px] lg:left-[28px]">
                        <h3
                            class="font-raleway font-bold text-[22px] md:text-[26px] lg:text-[30px] leading-[26px] md:leading-[30px] lg:leading-[35px] tracking-[0.03em] text-white drop-shadow-[0_4px_4px_rgba(0,0,0,0.5)]">
                            Liquor
                        </h3>
                        <p
                            class="select-none font-raleway font-bold text-[13px] md:text-[15px] lg:text-[17px] leading-[15px] md:leading-[18px] lg:leading-[20px] text-white drop-shadow-[0_4px_4px_rgba(0,0,0,0.5)] mt-[8px] md:mt-[10px] lg:mt-[12px]">
                            All discount up to 20%
                        </p>
                    </div>
                </div>

                {{-- Remaining duplicate cards --}}
                <div
                    class="relative flex-none w-[270px] md:w-[320px] lg:w-[350px] h-[180px] md:h-[200px] lg:h-[220px] rounded-[25px] overflow-hidden group cursor-pointer">
                    <div class="absolute inset-0">
                        <img src="{{ asset('images/liquor_items.png') }}" alt="Liquor"
                            class="w-full h-full object-cover -scale-x-100" draggable="false" />
                    </div>
                    <div
                        class="absolute top-[29px] md:top-[35px] lg:top-[40px] left-[19px] md:left-[24px] lg:left-[28px]">
                        <h3
                            class="font-raleway font-bold text-[22px] md:text-[26px] lg:text-[30px] leading-[26px] md:leading-[30px] lg:leading-[35px] tracking-[0.03em] text-white drop-shadow-[0_4px_4px_rgba(0,0,0,0.5)]">
                            Liquor
                        </h3>
                        <p
                            class="select-none font-raleway font-bold text-[13px] md:text-[15px] lg:text-[17px] leading-[15px] md:leading-[18px] lg:leading-[20px] text-white drop-shadow-[0_4px_4px_rgba(0,0,0,0.5)] mt-[8px] md:mt-[10px] lg:mt-[12px]">
                            All discount up to 20%
                        </p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Header Section --}}
        <div class="flex justify-between items-center mb-5 mt-8 md:mt-10 lg:mt-12">
            <h2
                class="font-bold text-xl md:text-2xl lg:text-3xl leading-6 md:leading-7 lg:leading-8 py-5 tracking-wider text-[#252B5C]">
                Featured Places
            </h2>
            <a href="#" class="font-semibold text-sm md:text-base lg:text-lg tracking-wider text-[#234F68]">
                view all
            </a>
        </div>

        {{-- Card Slider Component --}}
        <div class="select-none relative">
            {{-- Scrollable Container --}}
            <div id="featured-slider"
                class="flex gap-[15px] overflow-x-auto overflow-y-hidden h-[156px] md:h-[176px] lg:h-[196px] scroll-smooth"
                style="scrollbar-width: none; -ms-overflow-style: none;">

                @foreach ($restaurants as $restaurant)
                    <a href="{{ route('description', ['restaurant' => $restaurant->id]) }}" class="block">
                        <div
                            class="relative flex-none w-[268px] md:w-[320px] lg:w-[380px] h-[156px] md:h-[176px] lg:h-[196px] bg-[#F5F4F8] rounded-[25px] cursor-pointer">
                            {{-- Image Section --}}
                            <div
                                class="absolute left-2 top-2 w-[130px] md:w-[150px] lg:w-[170px] h-[140px] md:h-[160px] lg:h-[180px]">
                                <img src="{{ $restaurant->id == 1 ? asset('images/ambo.png') : asset('images/jamuna.png') }}"
                                    alt="{{ $restaurant->name }}" class="w-full h-full object-cover rounded-[25px]"
                                    draggable="false" />

                                {{-- Favorite Button --}}
                                <div
                                    class="absolute top-0 left-0 w-[25px] md:w-[28px] lg:w-[32px] h-[25px] md:h-[28px] lg:h-[32px] bg-[#F9443D] backdrop-blur-sm rounded-full flex items-center justify-center">
                                    <svg class="w-[11px] md:w-[13px] lg:w-[15px] h-[10px] md:h-[12px] lg:h-[14px]"
                                        viewBox="0 0 11 10" fill="none">
                                        <path
                                            d="M5.5 9.5L1.5 5.5C0.5 4.5 0.5 2.5 1.5 1.5C2.5 0.5 4.5 0.5 5.5 1.5C6.5 0.5 8.5 0.5 9.5 1.5C10.5 2.5 10.5 4.5 9.5 5.5L5.5 9.5Z"
                                            fill="white" stroke="white" stroke-width="0.8" />
                                    </svg>
                                </div>
                                {{-- Restaurant Badge --}}
                                <div
                                    class="flex items-center absolute bottom-0 left-0 px-1 md:px-1.5 lg:px-2 py-2.5 md:py-3 lg:py-3.5 bg-[#F9443D] shadow-lg rounded-lg">
                                    <span
                                        class="font-medium text-[8px] md:text-[9px] lg:text-[10px] leading-[9px] md:leading-[10px] lg:leading-[11px] tracking-wider text-white">Restaurant</span>
                                </div>
                            </div>

                            {{-- Content Section --}}
                            <div
                                class="absolute right-2.5 md:right-3 lg:right-4 top-4 md:top-5 lg:top-6 flex flex-col gap-2 w-[108px] md:w-[140px] lg:w-[170px]">
                                {{-- Title --}}
                                <h3
                                    class="font-bold text-sm md:text-base lg:text-lg leading-[18px] md:leading-[20px] lg:leading-[22px] tracking-wider text-[#252B5C]">
                                    {{ $restaurant->name }}
                                </h3>

                                {{-- Rating and Location --}}
                                <div class="flex flex-col gap-2">
                                    {{-- Rating --}}
                                    <div class="flex items-center gap-0.5">
                                        <svg class="w-[9px] md:w-[10px] lg:w-[11px] h-[9px] md:h-[10px] lg:h-[11px]"
                                            viewBox="0 0 9 9" fill="none">
                                            <path
                                                d="M4.5 0.75L5.5 3.5H8.25L6 5.25L6.75 8L4.5 6.25L2.25 8L3 5.25L0.75 3.5H3.5L4.5 0.75Z"
                                                fill="#FFC42D" />
                                        </svg>
                                        <span
                                            class="font-bold text-[8px] md:text-[9px] lg:text-[10px] leading-2 text-[#53587A]">{{ $restaurant->averageRating }}</span>
                                    </div>

                                    {{-- Location --}}
                                    <div class="flex items-center gap-0.5">
                                        <svg class="w-[9px] md:w-[10px] lg:w-[11px] h-[9px] md:h-[10px] lg:h-[11px]"
                                            viewBox="0 0 9 9" fill="none">
                                            <path
                                                d="M4.5 0.75C2.5 0.75 0.75 2.5 0.75 4.5C0.75 6.5 4.5 8.25 4.5 8.25C4.5 8.25 8.25 6.5 8.25 4.5C8.25 2.5 6.5 0.75 4.5 0.75Z"
                                                fill="#234F68" />
                                            <circle cx="4.5" cy="4.5" r="0.75" fill="white"
                                                stroke="white" stroke-width="1.25" />
                                        </svg>
                                        <span
                                            class="font-normal text-[10px] md:text-[11px] lg:text-[12px] leading-3 text-[#53587A]">{{ $restaurant->address }}</span>
                                    </div>
                                </div>
                            </div>

                            {{-- Discount Badge --}}
                            <div
                                class="absolute bottom-[22px] md:bottom-[26px] lg:bottom-[30px] left-[146px] md:left-[168px] lg:left-[192px]">
                                <span
                                    class="font-medium text-[13px] md:text-[14px] lg:text-[15px] leading-4 tracking-wider text-[#252B5C]">Up
                                    to {{ $restaurant->id == 1 ? '10' : '20' }}% Off</span>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>

        {{-- JavaScript for Mouse Drag & Scroll Wheel --}}
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const sliders = document.querySelectorAll('#card-slider, #featured-slider');
                if (!sliders || sliders.length === 0) return;

                sliders.forEach((slider) => {
                    let isDown = false;
                    let startX = 0;
                    let scrollLeft = 0;

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
                        const walk = (x - startX) * 4;
                        slider.scrollLeft = scrollLeft - walk;
                    });

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

                    slider.addEventListener('wheel', (e) => {
                        if (e.shiftKey) return;
                        e.preventDefault();
                        slider.scrollLeft += e.deltaY;
                    }, {
                        passive: false
                    });

                    slider.style.cursor = 'grab';
                });

                // Carousel button functionality
                const prevBtn = document.querySelector('.carousel-btn-prev');
                const nextBtn = document.querySelector('.carousel-btn-next');
                const cardSlider = document.getElementById('card-slider');

                if (prevBtn && nextBtn && cardSlider) {
                    prevBtn.addEventListener('click', () => {
                        cardSlider.scrollBy({
                            left: -350,
                            behavior: 'smooth'
                        });
                    });

                    nextBtn.addEventListener('click', () => {
                        cardSlider.scrollBy({
                            left: 350,
                            behavior: 'smooth'
                        });
                    });
                }
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
