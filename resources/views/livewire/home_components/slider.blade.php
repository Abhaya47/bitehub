<section class="px-4 sm:px-5 md:px-8 lg:px-16 xl:px-20 2xl:px-24 max-w-full py-12 sm:py-16 md:py-20">
    {{-- Card Slider Component --}}
    <div class="select-none relative group overflow-hidden">
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
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6 2.72L10.3467 7.06667C10.86 7.58 10.86 8.42 10.3467 8.93333L6 13.28" stroke="#004225"
                    stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </button>

        {{-- Scrollable Container --}}
        <div id="card-slider"
            class="flex gap-3 sm:gap-4 md:gap-5 lg:gap-6 xl:gap-7 overflow-x-auto overflow-y-hidden h-auto scroll-smooth"
            style="scrollbar-width: none; -ms-overflow-style: none;">
            @livewire('home.home-tags')
        </div>
    </div>

    {{-- Header Section --}}
    <div class="flex justify-between items-center mb-5 mt-8 md:mt-10 lg:mt-12">
        <h2
            class="font-bold text-xl md:text-2xl lg:text-3xl leading-6 md:leading-7 lg:leading-8 py-5 tracking-wider text-[#252B5C]">
            Featured Places
        </h2>
        <span class="font-semibold text-sm md:text-base lg:text-lg tracking-wider text-[#234F68]">
            slide to view more
        </span>
    </div>

    {{-- Card Slider Component --}}
    <div class="select-none relative overflow-hidden">
        {{-- Scrollable Container --}}
        <div id="featured-slider"
            class="flex gap-3 sm:gap-4 md:gap-5 lg:gap-6 xl:gap-7 overflow-x-auto overflow-y-hidden h-[156px] sm:h-[165px] md:h-[176px] lg:h-[196px] xl:h-[210px] 2xl:h-[220px] scroll-smooth"
            style="scrollbar-width: none; -ms-overflow-style: none;">

            @foreach ($restaurants as $restaurant)
                <x-restaurant-card :restaurant="$restaurant" />
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

                // Prevent default drag behavior on images and links
                slider.addEventListener('dragstart', (e) => {
                    e.preventDefault();
                });

                slider.addEventListener('mousedown', (e) => {
                    isDown = true;
                    slider.style.cursor = 'grabbing';
                    slider.style.userSelect = 'none';
                    startX = e.pageX - slider.offsetLeft;
                    scrollLeft = slider.scrollLeft;
                });

                slider.addEventListener('mouseleave', () => {
                    isDown = false;
                    slider.style.cursor = 'grab';
                    slider.style.userSelect = 'auto';
                });

                slider.addEventListener('mouseup', () => {
                    isDown = false;
                    slider.style.cursor = 'grab';
                    slider.style.userSelect = 'auto';
                });

                slider.addEventListener('mousemove', (e) => {
                    if (!isDown) return;
                    e.preventDefault();
                    const x = e.pageX - slider.offsetLeft;
                    const walk = (x - startX) * 2.5;
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
                    const walk = (x - startX) * 2.5;
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
                prevBtn.addEventListener('click', (e) => {
                    e.preventDefault();
                    cardSlider.scrollBy({
                        left: -350,
                        behavior: 'smooth'
                    });
                });

                nextBtn.addEventListener('click', (e) => {
                    e.preventDefault();
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
        #card-slider::-webkit-scrollbar,
        #featured-slider::-webkit-scrollbar {
            display: none;
        }

        #card-slider,
        #featured-slider {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        .font-raleway {
            font-family: 'Raleway', sans-serif;
        }
    </style>
</section>
