<div>
    <div class="w-full px-4 pt-20 pb-6 sm:pt-28 sm:pb-8">
        {{-- Carousel Container --}}

        <div class="relative w-full h-[280px] sm:h-[375px] md:h-[425px] mb-6">
            {{-- Carousel Images --}}
            <div class="carousel-container relative w-full h-full overflow-hidden rounded-[20px]">
                <div class="carousel-track flex transition-transform duration-500 ease-in-out h-full">
                    {{-- Add your images here --}}
                    <div class="carousel-slide min-w-full h-full">
                        <img src="{{ asset('images/restaurant1.jpg') }}" alt="Hotel Restaurant View 1"
                            class="w-full h-full object-cover" draggable="false">
                    </div>
                    <div class="carousel-slide min-w-full h-full">
                        <img src="{{ asset('images/restaurant2.jpg') }}" alt="Hotel Restaurant View 2"
                            class="w-full h-full object-cover" draggable="false">
                    </div>
                    <div class="carousel-slide min-w-full h-full">
                        <img src="{{ asset('images/restaurant3.jpg') }}" alt="Hotel Restaurant View 3"
                            class="w-full h-full object-cover" draggable="false">
                    </div>
                    {{-- Duplicate slides for infinite loop --}}
                    <div class="carousel-slide min-w-full h-full">
                        <img src="{{ asset('images/restaurant1.jpg') }}" alt="Hotel Restaurant View 1"
                            class="w-full h-full object-cover" draggable="false">
                    </div>
                    <div class="carousel-slide min-w-full h-full">
                        <img src="{{ asset('images/restaurant2.jpg') }}" alt="Hotel Restaurant View 2"
                            class="w-full h-full object-cover" draggable="false">
                    </div>
                    <div class="carousel-slide min-w-full h-full">
                        <img src="{{ asset('images/restaurant3.jpg') }}" alt="Hotel Restaurant View 3"
                            class="w-full h-full object-cover" draggable="false">
                    </div>
                </div>
            </div>

            {{-- Left Arrow Button --}}
            <button
                class="carousel-btn-prev absolute left-6 sm:left-9 top-1/2 -translate-y-1/2 w-12 h-10 bg-white rounded-lg flex items-center justify-center hover:bg-gray-100 transition-colors shadow-md z-10">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M10 13.28L5.65333 8.93333C5.14 8.42 5.14 7.58 5.65333 7.06667L10 2.72" stroke="#004225"
                        stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>

            {{-- Right Arrow Button --}}
            <button
                class="carousel-btn-next absolute right-6 sm:right-9 top-1/2 -translate-y-1/2 w-12 h-10 bg-white rounded-lg flex items-center justify-center hover:bg-gray-100 transition-colors shadow-md z-10">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 2.72L10.3467 7.06667C10.86 7.58 10.86 8.42 10.3467 8.93333L6 13.28" stroke="#004225"
                        stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
        </div>

        {{-- Hotel Information Card --}}
        <div class="bg-white rounded-xl p-6 sm:p-8 shadow-sm">
            {{-- Header with Title and Rating --}}
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-5 gap-3 sm:gap-0">
                <h1 class="text-3xl sm:text-4xl font-medium leading-none text-[#004225]">
                    {{ $restaurant->name }}
                </h1>
                <div class="flex items-center gap-2">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M11.4417 2.86667L12.9917 5.98333C13.2084 6.425 13.7667 6.85 14.2584 6.93333L17.0667 7.41667C18.8334 7.70833 19.2584 8.99167 17.9417 10.3L15.8084 12.4333C15.4251 12.8167 15.2167 13.525 15.3334 14.0583L15.9751 16.7667C16.4501 18.8833 15.3417 19.7083 13.5001 18.6167L10.8667 17.05C10.3751 16.7667 9.63341 16.7667 9.13341 17.05L6.50008 18.6167C4.66675 19.7083 3.55008 18.875 4.02508 16.7667L4.66675 14.0583C4.78341 13.525 4.57508 12.8167 4.19175 12.4333L2.05841 10.3C0.750081 8.99167 1.16675 7.70833 2.93341 7.41667L5.74175 6.93333C6.22508 6.85 6.78341 6.425 7.00008 5.98333L8.55008 2.86667C9.37508 1.2 10.6251 1.2 11.4417 2.86667Z"
                            stroke="#202020" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <span class="text-base font-medium text-[#202020]">
                        {{ $averageRating }} Stars | {{ $totalReviews }} Reviews
                    </span>
                </div>
            </div>

            {{-- Divider --}}
            <hr class="border-t border-[rgba(197,197,197,0.5)] mb-5">

            {{-- Information Rows --}}
            <div class="space-y-5">
                {{-- Row 1: Price and Location --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    {{-- Price --}}
                    <div class="flex items-center gap-4">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8.67188 14.3298C8.67188 15.6198 9.66188 16.6598 10.8919 16.6598H13.4019C14.4719 16.6598 15.3419 15.7498 15.3419 14.6298C15.3419 13.4098 14.8119 12.9798 14.0219 12.6998L9.99187 11.2998C9.20187 11.0198 8.67188 10.5898 8.67188 9.36984C8.67188 8.24984 9.54187 7.33984 10.6119 7.33984H13.1219C14.3519 7.33984 15.3419 8.37984 15.3419 9.66984"
                                stroke="#202020" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M12 6V18" stroke="#202020" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                stroke="#202020" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <span class="text-base font-normal text-[#202020]" style="letter-spacing: 0.5px;">
                            रु 2,000 for 2 | Nepali
                        </span>
                    </div>

                    {{-- Location --}}
                    <div class="flex items-center gap-4">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12 13.4299C13.7231 13.4299 15.12 12.0331 15.12 10.3099C15.12 8.58681 13.7231 7.18994 12 7.18994C10.2769 7.18994 8.88 8.58681 8.88 10.3099C8.88 12.0331 10.2769 13.4299 12 13.4299Z"
                                stroke="#202020" stroke-width="1.5" />
                            <path
                                d="M3.62001 8.49C5.59001 -0.169998 18.42 -0.159997 20.38 8.5C21.53 13.58 18.37 17.88 15.6 20.54C13.59 22.48 10.41 22.48 8.39001 20.54C5.63001 17.88 2.47001 13.57 3.62001 8.49Z"
                                stroke="#202020" stroke-width="1.5" />
                        </svg>
                        <span class="text-base font-normal text-[#202020]" style="letter-spacing: 0.5px;">
                            {{ $restaurant->address }}
                        </span>
                    </div>
                </div>

                {{-- Row 2: Opening Hours --}}
                <div class="flex items-center gap-4">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M22 12C22 17.52 17.52 22 12 22C6.48 22 2 17.52 2 12C2 6.48 6.48 2 12 2C17.52 2 22 6.48 22 12Z"
                            stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M15.71 15.18L12.61 13.33C12.07 13.01 11.63 12.24 11.63 11.61V7.51001" stroke="#292D32"
                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <span class="text-base font-normal text-[#007E47]" style="letter-spacing: 0.5px;">
                        Open from 10:00 AM - 11:00 PM
                    </span>
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg" class="ml-2">
                        <path
                            d="M10 18.3333C14.6024 18.3333 18.3334 14.6023 18.3334 9.99996C18.3334 5.39759 14.6024 1.66663 10 1.66663C5.39765 1.66663 1.66669 5.39759 1.66669 9.99996C1.66669 14.6023 5.39765 18.3333 10 18.3333Z"
                            stroke="#202020" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M10 6.66663V10" stroke="#202020" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M10 13.3334H10.0083" stroke="#202020" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        {{-- Carousel JavaScript --}}
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const track = document.querySelector('.carousel-track');
                const slides = document.querySelectorAll('.carousel-slide');
                const prevBtn = document.querySelector('.carousel-btn-prev');
                const nextBtn = document.querySelector('.carousel-btn-next');

                let currentIndex = 0;
                const totalSlides = 3; // Original slides count
                const duplicatedSlides = slides.length; // Total including duplicates
                let autoPlayInterval;

                // Function to update carousel position
                function updateCarousel() {
                    const offset = -currentIndex * 100;
                    track.style.transform = `translateX(${offset}%)`;
                }

                // Function to go to next slide
                function nextSlide() {
                    currentIndex++;
                    if (currentIndex >= duplicatedSlides) {
                        currentIndex = 0;
                        track.style.transition = 'none';
                        updateCarousel();
                        setTimeout(() => {
                            track.style.transition = 'transform 0.5s ease-in-out';
                        }, 50);
                    } else {
                        updateCarousel();
                    }
                }

                // Function to go to previous slide
                function prevSlide() {
                    currentIndex--;
                    if (currentIndex < 0) {
                        currentIndex = duplicatedSlides - 1;
                        track.style.transition = 'none';
                        updateCarousel();
                        setTimeout(() => {
                            track.style.transition = 'transform 0.5s ease-in-out';
                        }, 50);
                    } else {
                        updateCarousel();
                    }
                }

                // Auto play functionality
                function startAutoPlay() {
                    autoPlayInterval = setInterval(nextSlide, 5000); // Change slide every 5 seconds
                }

                function stopAutoPlay() {
                    clearInterval(autoPlayInterval);
                }

                // Event listeners for navigation buttons
                nextBtn.addEventListener('click', function() {
                    stopAutoPlay();
                    nextSlide();
                    startAutoPlay();
                });

                prevBtn.addEventListener('click', function() {
                    stopAutoPlay();
                    nextSlide();
                    startAutoPlay();
                });

                // Pause auto play on hover
                const carouselContainer = document.querySelector('.carousel-container');
                carouselContainer.addEventListener('mouseenter', stopAutoPlay);
                carouselContainer.addEventListener('mouseleave', startAutoPlay);

                // Start auto play on page load
                startAutoPlay();
            });
        </script>
    @endpush

    @push('styles')
        <style>
            /* Import Roboto font if not already included in your app.blade.php */
            @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap');

            /* Ensure smooth transitions */
            .carousel-track {
                will-change: transform;
            }

            /* Optional: Add fade effect for slides */
            .carousel-slide {
                flex-shrink: 0;
            }
        </style>
    @endpush
</div>
