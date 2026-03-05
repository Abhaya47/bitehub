<section class="relative min-h-[90vh] flex items-center px-6 lg:px-20 pt-32 pb-20 overflow-hidden">
    <!-- Background Decor -->
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-[#F9443D]/5 rounded-full blur-[120px] -z-10"></div>
    
    <div class="max-w-7xl mx-auto w-full flex flex-col lg:flex-row items-center justify-between gap-16 relative z-10">

        {{-- LEFT CONTENT --}}
        <div class="w-full lg:w-1/2 text-center lg:text-left">
            <div class="inline-flex items-center px-4 py-1.5 rounded-full bg-white border border-gray-100 shadow-sm mb-6 animate-fade-in-up">
                <span class="text-[10px] font-black uppercase tracking-[0.2em] text-[#0f172a]/40">Welcome back to BiteHub</span>
            </div>
            
            <h1 class="font-lato text-6xl lg:text-8xl font-black text-[#0f172a] tracking-tight leading-[0.9] mb-4 animate-fade-in-up" style="animation-delay: 100ms">
                Hey, <span class="text-[#F9443D]">{{ $name }}</span>
            </h1>

            <p class="text-xl lg:text-2xl text-gray-400 font-medium mb-12 animate-fade-in-up" style="animation-delay: 200ms">
                Ready to discover your next favorite meal?
            </p>

            <div class="max-w-xl mx-auto lg:mx-0 animate-fade-in-up" style="animation-delay: 300ms">
                <livewire:Home.search />
            </div>
        </div>

        {{-- RIGHT CONTENT - Fixed Floating Elements --}}
        <div class="w-full lg:w-1/2 relative h-[450px] lg:h-[600px] flex items-center justify-center animate-fade-in" style="animation-delay: 400ms">
            <!-- Center Circle Decor -->
            <div class="absolute w-72 h-72 lg:w-[500px] lg:h-[500px] rounded-full border border-dashed border-gray-200 animate-spin-slow"></div>
            
            <!-- Food Items Container -->
            <div class="relative w-full h-full max-w-[500px]">
                {{-- Burger (Top Left) --}}
                <div class="absolute top-0 left-0 w-44 lg:w-64 animate-float" style="animation-delay: 0s">
                    <img src="{{ asset('images/Burger.png') }}" alt="Burger" class="w-full h-auto drop-shadow-[0_30px_60px_rgba(0,0,0,0.15)]">
                </div>

                {{-- Pizza (Bottom Right) --}}
                <div class="absolute bottom-10 right-0 w-48 lg:w-72 animate-float" style="animation-delay: 1s">
                    <img src="{{ asset('images/Pizza.png') }}" alt="Pizza" class="w-full h-auto drop-shadow-[0_30px_60px_rgba(0,0,0,0.15)]">
                </div>

                {{-- Croissant (Top Right) --}}
                <div class="absolute top-10 right-0 w-36 lg:w-56 animate-float" style="animation-delay: 2s">
                    <img src="{{ asset('images/Croissant.png') }}" alt="Croissant" class="w-full h-auto drop-shadow-[0_30px_60px_rgba(0,0,0,0.15)]">
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    @keyframes float {
        0%, 100% { transform: translateY(0) rotate(0); }
        50% { transform: translateY(-30px) rotate(5deg); }
    }

    @keyframes fade-in-up {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    @keyframes fade-in {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    @keyframes spin-slow {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }

    .animate-float {
        animation: float 6s ease-in-out infinite;
    }

    .animate-fade-in-up {
        animation: fade-in-up 1s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        opacity: 0;
    }

    .animate-fade-in {
        animation: fade-in 1.5s ease-out forwards;
    }

    .animate-spin-slow {
        animation: spin-slow 40s linear infinite;
    }
</style>
