<section
    class="relative min-h-screen flex items-center px-4 sm:px-6 lg:px-20 pt-32 pb-10 lg:pt-20 lg:pb-20 lg:mt-[-130px] xl:mt-[-170px]">
    <div class="w-full flex flex-col lg:flex-row items-center justify-between gap-8 lg:gap-12">

        {{-- LEFT SIDE CONTENT - Now with Z-Index --}}
        <div class="relative z-20 flex-1 w-full text-center lg:text-left">
            <h1
                class="font-inter text-3xl sm:text-4xl lg:text-5xl xl:text-6xl font-bold text-[#234F68] leading-tight mb-2">
                Hey, <span class="text-[#F9423C]">{{ $name }}</span>
            </h1>

            <p class="font-inter text-xl sm:text-2xl lg:text-3xl text-[#234F68] mb-8">
                Let's start exploring
            </p>

            {{-- Search Bar --}}
            <livewire:Home.search />
        </div>

        {{-- RIGHT SIDE IMAGES - Added pointer-events-none --}}
        <div class="flex-1 hidden lg:flex items-center justify-center lg:justify-end w-full pointer-events-none">
            <div class="relative w-full max-w-xs sm:max-w-sm md:max-w-md lg:max-w-lg xl:max-w-xl h-[300px]">

                {{-- Burger Image (Your preferred positioning) --}}
                <img src="{{ asset('images/Burger.png') }}" alt="Hamburger" draggable="false"
                    class="absolute top-[80px] lg:left-[-350px] w-24 sm:w-32 md:w-40 lg:w-[366px] object-contain animate-float pointer-events-auto"
                    style="animation-delay: 0s;">

                {{-- Pizza Image --}}
                <img src="{{ asset('images/Pizza.png') }}" alt="Pizza" draggable="false"
                    class="absolute bottom-[3px] lg:left-[-20px] w-24 sm:w-24 md:w-32 lg:w-[366px] object-contain animate-float pointer-events-auto"
                    style="animation-delay: 0.5s;">

                {{-- Croissant Image --}}
                <img src="{{ asset('images/Croissant.png') }}" alt="Croissant" draggable="false"
                    class="absolute lg:left-[144px] lg:top-[110px] w-24 sm:w-28 md:w-36 lg:w-[366px] object-contain animate-float pointer-events-auto"
                    style="animation-delay: 1s;">
            </div>
        </div>
    </div>
</section>

{{-- ---------------- FLOATING ANIMATION ---------------- --}}
<style>
    @keyframes float {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-20px);
        }
    }

    .animate-float {
        animation: float 3s ease-in-out infinite;
    }
</style>
