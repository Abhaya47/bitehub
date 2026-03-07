<section class="relative min-h-[100vh] lg:min-h-[90vh] flex items-center px-6 lg:px-20 pt-32 pb-20 overflow-hidden">
    <!-- Sophisticated Background Decor -->
    <div class="absolute top-1/4 -right-20 w-[600px] h-[600px] bg-[#F9443D]/10 rounded-full blur-[120px] -z-10 animate-pulse-slow"></div>
    <div class="absolute bottom-1/4 -left-20 w-[500px] h-[500px] bg-orange-400/5 rounded-full blur-[100px] -z-10"></div>
    
    <div class="max-w-7xl mx-auto w-full flex flex-col lg:flex-row items-center justify-between gap-20 relative z-10">

        {{-- LEFT CONTENT --}}
        <div class="w-full lg:w-1/2 text-center lg:text-left">
            <div class="inline-flex items-center px-4 py-2 rounded-full bg-white/80 backdrop-blur-md border border-gray-100 shadow-sm mb-8 animate-fade-in-up">
                <span class="flex h-2 w-2 rounded-full bg-[#F9443D] mr-3 animate-pulse"></span>
                <span class="text-[10px] font-black uppercase tracking-[0.2em] text-[#0f172a]/60">Discover • Review • Share</span>
            </div>
            
            <h1 class="font-lato text-7xl lg:text-[100px] font-black text-[#0f172a] tracking-tight leading-[0.85] mb-6 animate-fade-in-up" style="animation-delay: 100ms">
                Hey, <span class="text-[#F9443D]">{{ $name }}</span>
            </h1>

            <p class="text-xl lg:text-2xl text-gray-400 font-medium mb-12 max-w-lg lg:mx-0 mx-auto animate-fade-in-up" style="animation-delay: 200ms">
                Find the best spots in town and read what the community is saying. Your next favorite discovery starts here.
            </p>

            <div class="max-w-xl mx-auto lg:mx-0 animate-fade-in-up" style="animation-delay: 300ms">
                <livewire:Home.search />
            </div>
            
            <div class="mt-12 flex items-center justify-center lg:justify-start gap-8 animate-fade-in-up" style="animation-delay: 400ms">
                <div class="flex -space-x-3">
                    @for($i=1; $i<=4; $i++)
                        <div class="w-10 h-10 rounded-full border-2 border-white bg-gray-100 flex items-center justify-center overflow-hidden">
                            <img src="https://i.pravatar.cc/100?u={{ $i }}" alt="User" class="w-full h-full object-cover">
                        </div>
                    @endfor
                    <div class="w-10 h-10 rounded-full border-2 border-white bg-[#0f172a] flex items-center justify-center text-[10px] font-bold text-white">
                        +2k
                    </div>
                </div>
                <div class="text-left">
                    <p class="text-sm font-black text-[#0f172a]">Join our community</p>
                    <p class="text-xs text-gray-400 font-medium">5,000+ local food guides</p>
                </div>
            </div>
        </div>

        {{-- RIGHT CONTENT - Modern UI Showcase --}}
        <div class="w-full lg:w-1/2 relative flex items-center justify-center animate-fade-in" style="animation-delay: 500ms">
            <!-- Main Featured Card -->
            <div class="relative group">
                <!-- Card Background Glow -->
                <div class="absolute -inset-4 bg-gradient-to-tr from-[#F9443D]/20 to-orange-400/20 rounded-[3rem] blur-2xl opacity-50 group-hover:opacity-100 transition-opacity duration-700"></div>
                
                <div class="relative w-[300px] lg:w-[420px] aspect-[4/5] rounded-[2.5rem] overflow-hidden shadow-[0_40px_100px_-15px_rgba(0,0,0,0.3)] border-[6px] border-white transition-transform duration-700 group-hover:scale-[1.02]">
                    <img src="{{ asset('images/restaurant3.jpg') }}" alt="Featured Restaurant" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">
                    
                    <!-- Glassmorphic Overlay -->
                    <div class="absolute bottom-6 left-6 right-6 p-6 rounded-3xl bg-white/90 backdrop-blur-xl border border-white/20 shadow-2xl">
                        <div class="flex items-center justify-between mb-3">
                            <span class="px-3 py-1 rounded-full bg-green-500/10 text-green-600 text-[10px] font-black uppercase tracking-wider">Trending Now</span>
                            <div class="flex items-center gap-1.5">
                                <svg class="w-3.5 h-3.5 text-yellow-400 fill-current" viewBox="0 0 20 20"><path d="M10 1l2.6 6.3 6.9.6-5.3 4.6 1.6 6.8-5.8-3.5-5.8 3.5 1.6-6.8-5.3-4.6 6.9-.6L10 1z"/></svg>
                                <span class="text-xs font-black text-[#0f172a]">4.9 <span class="text-gray-400 font-medium">(1.2k Reviews)</span></span>
                            </div>
                        </div>
                        <h3 class="text-2xl font-black text-[#0f172a] mb-1">The Gourmet Hub</h3>
                        <p class="text-sm text-gray-500 font-medium">Fusion Cuisine • Fine Dining</p>
                    </div>
                </div>

                <!-- Floating Badge 1: Community Trust -->
                <div class="absolute top-10 -right-20 lg:-right-36 p-5 rounded-3xl bg-white shadow-[0_20px_50px_rgba(0,0,0,0.1)] border border-gray-50 flex items-center gap-4 animate-float" style="animation-duration: 7s">
                    <div class="w-12 h-12 rounded-2xl bg-blue-50 flex items-center justify-center">
                        <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                    </div>
                    <div>
                        <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest leading-none mb-1">Verified</p>
                        <p class="text-base font-black text-[#0f172a]">12k+ <span class="text-[10px] text-gray-400">Reviews</span></p>
                    </div>
                </div>

                <!-- Floating Badge 2: Recent Activity -->
                <div class="absolute bottom-32 -left-20 lg:-left-44 p-4 rounded-3xl bg-white shadow-[0_20px_50px_rgba(0,0,0,0.1)] border border-gray-50 flex items-center gap-4 animate-float" style="animation-duration: 5s; animation-delay: 1s">
                    <div class="w-12 h-12 rounded-2xl overflow-hidden shadow-inner bg-gray-50">
                        <img src="https://i.pravatar.cc/100?u=9" alt="User" class="w-full h-full object-cover">
                    </div>
                    <div class="pr-2">
                        <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest leading-none mb-1">Recent Review</p>
                        <p class="text-[13px] font-black text-[#0f172a] leading-tight max-w-[120px]">"Best burger in Kathmandu!"</p>
                        <div class="flex gap-0.5 mt-1">
                            @for($i=0; $i<5; $i++)
                                <svg class="w-2.5 h-2.5 text-yellow-400 fill-current" viewBox="0 0 20 20"><path d="M10 1l2.6 6.3 6.9.6-5.3 4.6 1.6 6.8-5.8-3.5-5.8 3.5 1.6-6.8-5.3-4.6 6.9-.6L10 1z"/></svg>
                            @endfor
                        </div>
                    </div>
                </div>

                <!-- Abstract Decorative Rings -->
                <div class="absolute -z-20 top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[140%] h-[140%] border border-dashed border-gray-200/60 rounded-full animate-spin-slow"></div>
                <div class="absolute -z-20 top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[110%] h-[110%] border border-gray-100/40 rounded-full"></div>
            </div>
        </div>
    </div>
</section>

<style>
    @keyframes float {
        0%, 100% { transform: translateY(0) translateX(0) rotate(0); }
        33% { transform: translateY(-15px) translateX(10px) rotate(2deg); }
        66% { transform: translateY(5px) translateX(-5px) rotate(-1deg); }
    }

    @keyframes fade-in-up {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }

    @keyframes fade-in {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    @keyframes spin-slow {
        from { transform: translate(-50%, -50%) rotate(0deg); }
        to { transform: translate(-50%, -50%) rotate(360deg); }
    }

    @keyframes pulse-slow {
        0%, 100% { opacity: 0.3; transform: scale(1); }
        50% { opacity: 0.6; transform: scale(1.1); }
    }

    .animate-float {
        animation: float infinite ease-in-out;
    }

    .animate-fade-in-up {
        animation: fade-in-up 1.2s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        opacity: 0;
    }

    .animate-fade-in {
        animation: fade-in 2s ease-out forwards;
    }

    .animate-spin-slow {
        animation: spin-slow 60s linear infinite;
    }

    .animate-pulse-slow {
        animation: pulse-slow 8s ease-in-out infinite;
    }
</style>

