<section class="relative min-h-screen flex items-center px-4 sm:px-6 lg:px-20 pt-32 pb-10 lg:pt-20 lg:pb-20 lg:mt-[-130px] xl:mt-[-170px]">
    <div class="w-full flex flex-col lg:flex-row items-center justify-between gap-8 lg:gap-12">

        {{-- ---------------- LEFT SIDE CONTENT ---------------- --}}
        <div class="flex-shrink-0 max-w-md w-full lg:w-auto text-center lg:text-left">
            {{-- Greeting --}}
            <h1 class="font-inter text-3xl sm:text-4xl lg:text-5xl xl:text-6xl font-bold text-[#234F68] leading-tight mb-2">
                Hey, <span class="text-[#F9423C]">{{ $name }}</span>
            </h1>

            {{-- Subheading --}}
            <p class="font-inter text-xl sm:text-2xl lg:text-3xl text-[#234F68] mb-8">
                Let's start exploring
            </p>

            {{-- Search Bar --}}
            <livewire:Home.search />
        </div>

        {{-- ---------------- RIGHT SIDE IMAGES ---------------- --}}
        <div class="flex-1 hidden lg:flex items-center justify-center lg:justify-end w-full lg:w-auto">
            <div class="relative w-full max-w-xs sm:max-w-sm md:max-w-md lg:max-w-lg xl:max-w-xl h-[200px] sm:h-[250px] md:h-[280px] lg:h-[300px]">

                {{-- Burger Image (Top Left) --}}
                <img src="{{ asset('images/Burger.png') }}" alt="Hamburger" draggable="false"
                    class="absolute top-[80px] left-1/6 sm:left-8 lg:left-[-350px] w-24 sm:w-32 md:w-40 lg:w-[366px] object-contain animate-float" style="animation-delay: 0s;">

                {{-- Pizza Image (Bottom Center) --}}
                <img src="{{ asset('images/Pizza.png') }}" alt="Pizza" draggable="false"
                    class="absolute bottom-[3px] left-1/4 translate-x-1/2 sm:left-1/2 sm:translate-x-0 lg:left-[-20px] w-24 sm:w-24 md:w-32 lg:w-[366px] object-contain animate-float"
                    style="animation-delay: 0.5s;">

                {{-- Croissant Image (Top Right) --}}
                <img src="{{ asset('images/Croissant.png') }}" alt="Croissant" draggable="false"
                    class="absolute right-1/5 bottom-6 sm:right-8  sm:top-8 lg:left-[144px] lg:top-[110px] w-24 sm:w-28 md:w-36 lg:w-[366px] object-contain animate-float"
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