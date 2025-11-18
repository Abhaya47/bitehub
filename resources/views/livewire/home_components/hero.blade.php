<section class="relative min-h-screen flex items-center px-5 lg:px-20 pt-20 pb-20 mt-[-170px]">
    <div class="w-full flex items-center justify-around">

        {{-- ---------------- LEFT SIDE CONTENT ---------------- --}}
        <div class="flex-shrink-0 max-w-md">
            {{-- Greeting --}}
            <h1 class="font-inter text-5xl lg:text-6xl font-bold text-[#234F68] leading-tight mb-2">
                Hey, <span class="text-[#F9423C]">{{$name}}</span>
            </h1>

            {{-- Subheading --}}
            <p class="font-inter text-2xl lg:text-3xl text-[#234F68] mb-8">
                Let's start exploring
            </p>

            {{-- Search Bar --}}
            <livewire:search />
        </div>

        {{-- ---------------- RIGHT SIDE IMAGES ---------------- --}}
        <div class="flex-1 flex items-center justify-around " >
            <div class="relative w-[600px] h-[300px]">

                {{-- Burger Image (Top Left) --}}
                <img src="{{ asset('images/Burger.png') }}" alt="Hamburger" draggable="false"
                     class="absolute left-[70px] w-[366px] object-contain animate-float"
                     style="animation-delay: 0s;">

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
