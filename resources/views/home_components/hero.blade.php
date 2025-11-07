<section class="relative min-h-screen flex items-center px-5 lg:px-20 pt-20 pb-20 mt-[-170px]">
    <div class="w-full flex items-center justify-around">

        {{-- ---------------- LEFT SIDE CONTENT ---------------- --}}
        <div class="flex-shrink-0 max-w-md">
            {{-- Greeting --}}
            <h1 class="font-inter text-5xl lg:text-6xl font-bold text-[#234F68] leading-tight mb-2">
                Hey, <span class="text-[#F9423C]">Sahil!</span>
            </h1>

            {{-- Subheading --}}
            <p class="font-inter text-2xl lg:text-3xl text-[#234F68] mb-8">
                Let's start exploring
            </p>

            {{-- Search Bar --}}
            <div class="relative w-[400px]">
                <div
                    class="flex items-center bg-gray-100 rounded-lg px-6 py-4 shadow-sm hover:shadow-md transition-shadow">

                    {{-- Search Icon --}}
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400 mr-3 flex-shrink-0"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>

                    {{-- Input Field --}}
                    <input type="text" placeholder="Search foods, restaurants and trending places"
                        class="bg-transparent w-full outline-none text-gray-700 placeholder-gray-400 text-sm">
                </div>
            </div>
        </div>

        {{-- ---------------- RIGHT SIDE IMAGES ---------------- --}}
        <div class="flex-1 flex items-center justify-around">
            <div class="relative w-[600px] h-[300px]">

                {{-- Burger Image (Top Left) --}}
                <img src="{{ asset('images/Burger.png') }}" alt="Hamburger" draggable="false"
                    class="absolute left-[70px] w-[366px] object-contain animate-float" style="animation-delay: 0s;">

                {{-- Pizza Image (Bottom Center) --}}
                <img src="{{ asset('images/Pizza.png') }}" alt="Pizza" draggable="false"
                    class="absolute top-75 left-[300px] w-[366px] object-contain animate-float"
                    style="animation-delay: 0.5s;">

                {{-- Croissant Image (Top Right) --}}
                <img src="{{ asset('images/Croissant.png') }}" alt="Croissant" draggable="false"
                    class="absolute top-10 left-[410px] w-[366px] object-contain animate-float"
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
