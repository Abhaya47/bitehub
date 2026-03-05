<div class="bg-white text-[#0f172a] font-raleway min-h-screen selection:bg-[#F9443D]/30 selection:text-[#0f172a]">
    <!-- Navigation -->
    <nav x-data="{ 
            atTop: true, 
            mobileMenuOpen: false 
         }" 
         x-init="atTop = window.pageYOffset > 20 ? false : true"
         @scroll.window="atTop = window.pageYOffset > 20 ? false : true"
         :class="{ 'bg-white/80 backdrop-blur-xl shadow-sm py-4': !atTop, 'bg-transparent py-6': atTop }"
         class="fixed top-0 w-full z-[100] transition-all duration-500 ease-in-out">
        <div class="max-w-7xl mx-auto px-6 lg:px-10">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <div class="flex items-center space-x-3 group cursor-pointer">
                    <a href="/" class="flex items-center">
                        <div class="w-12 h-12 flex items-center justify-center transition-transform group-hover:scale-105">
                            <img src="{{ asset('images/bitehublogo.png') }}" alt="Bitehub Logo" class="w-full h-full object-contain" />
                        </div>
                        <span class="font-lato font-black text-2xl tracking-tighter text-[#0f172a] ml-2">Bitehub</span>
                    </a>
                </div>

                <!-- Desktop Nav -->
                <div class="hidden md:flex items-center space-x-10">
                    <div class="flex items-center space-x-8">
                        <a href="#how-it-works" class="text-sm font-semibold text-[#0f172a]/60 hover:text-[#F9443D] transition-colors duration-300">How it works</a>
                        <a href="#features" class="text-sm font-semibold text-[#0f172a]/60 hover:text-[#F9443D] transition-colors duration-300">Features</a>
                    </div>
                    <div class="h-4 w-[1px] bg-gray-200"></div>
                    <div class="flex items-center space-x-6">
                        <a href="{{ route('login') }}" class="text-sm font-bold text-[#0f172a] hover:opacity-70 transition-opacity">Sign In</a>
                        <a href="{{ route('register') }}" class="inline-flex items-center justify-center px-6 py-3 text-sm font-bold text-white bg-[#0f172a] rounded-full transition-all duration-300 shadow-lg shadow-gray-200 hover:shadow-xl hover:shadow-[#F9443D]/20 hover:bg-[#F9443D] hover:-translate-y-0.5 active:translate-y-0">
                            Get Started
                        </a>
                    </div>
                </div>

                <!-- Mobile Toggle -->
                <div class="md:hidden">
                    <button @click="mobileMenuOpen = !mobileMenuOpen" class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-100 text-[#0f172a]">
                        <svg x-show="!mobileMenuOpen" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 6h16M4 12h16m-7 6h7" /></svg>
                        <svg x-show="mobileMenuOpen" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12" /></svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div x-show="mobileMenuOpen" 
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 -translate-y-4"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 -translate-y-4"
             class="md:hidden absolute top-full left-0 w-full bg-white border-t border-gray-100 shadow-2xl p-6 space-y-4">
            <a href="#how-it-works" @click="mobileMenuOpen = false" class="block text-lg font-bold text-[#0f172a]">How it works</a>
            <a href="#features" @click="mobileMenuOpen = false" class="block text-lg font-bold text-[#0f172a]">Features</a>
            <div class="pt-4 border-t border-gray-100 flex flex-col space-y-3">
                <a href="{{ route('login') }}" class="block text-center py-3 font-bold text-[#0f172a] bg-gray-50 rounded-2xl">Sign In</a>
                <a href="{{ route('register') }}" class="block text-center py-4 font-bold text-white bg-[#F9443D] rounded-2xl shadow-lg shadow-[#F9443D]/20">Get Started</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative pt-40 pb-20 lg:pt-56 lg:pb-40 overflow-hidden">
        <!-- Animated Background Elements -->
        <div class="absolute top-0 right-0 -translate-y-1/2 translate-x-1/4 w-[800px] h-[800px] bg-[#F9443D]/5 rounded-full blur-[120px] -z-10 animate-pulse" style="animation-duration: 8s;"></div>

        <div class="max-w-7xl mx-auto px-6 lg:px-10 relative z-10 text-center">
            <div x-data="{ shown: false }" x-init="setTimeout(() => shown = true, 100)" 
                 class="max-w-4xl mx-auto">
                
                <div x-show="shown" x-transition:enter="transition ease-out duration-700" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0"
                     class="inline-flex items-center px-4 py-1.5 rounded-full bg-white border border-gray-100 shadow-sm mb-8">
                    <span class="flex w-2 h-2 rounded-full bg-[#F9443D] mr-3 animate-ping"></span>
                    <span class="text-xs font-black uppercase tracking-widest text-[#0f172a]/60">Your neighborhood, plated.</span>
                </div>

                <h1 x-show="shown" x-transition:enter="transition ease-out duration-1000 delay-100" x-transition:enter-start="opacity-0 translate-y-8" x-transition:enter-end="opacity-100 translate-y-0"
                    class="font-lato text-5xl sm:text-7xl lg:text-8xl font-black text-[#0f172a] tracking-tight leading-[0.95] mb-10">
                    Find your next <br/>
                    <span class="relative inline-block text-[#F9443D]">
                        favorite meal
                        <svg class="absolute -bottom-2 left-0 w-full h-3 text-[#F9443D]/20" viewBox="0 0 300 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 10.5C50 3.5 150 1.5 299 10.5" stroke="currentColor" stroke-width="3" stroke-linecap="round"/></svg>
                    </span> 
                    near you.
                </h1>

                <p x-show="shown" x-transition:enter="transition ease-out duration-1000 delay-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                   class="text-lg sm:text-xl text-[#0f172a]/50 md:text-2xl mb-14 font-medium max-w-2xl mx-auto leading-relaxed">
                    Bitehub connects your cravings with local hidden gems using real-time location intelligence.
                </p>

                <div x-show="shown" x-transition:enter="transition ease-out duration-1000 delay-500" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0"
                     class="flex flex-col sm:flex-row justify-center items-center gap-5">
                    <a href="{{ route('register') }}" class="w-full sm:w-auto px-10 py-5 bg-[#0f172a] text-white rounded-2xl font-bold text-lg transition-all duration-300 shadow-2xl shadow-gray-300 hover:shadow-[#F9443D]/40 hover:bg-[#F9443D] hover:-translate-y-1 group">
                        Start Exploring
                        <svg class="inline-block w-5 h-5 ml-2 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 7l5 5m0 0l-5 5m5-5H6" /></svg>
                    </a>
                    <a href="#how-it-works" class="w-full sm:w-auto px-10 py-5 bg-white/60 backdrop-blur-md text-[#0f172a] border border-white/40 rounded-2xl font-bold text-lg transition-all duration-300 hover:bg-white hover:shadow-lg">
                        Learn More
                    </a>
                </div>
            </div>

            <!-- Floating UI Preview -->
            <div class="mt-32 relative max-w-6xl mx-auto">
                <div class="relative rounded-[2.5rem] bg-white/40 backdrop-blur-md border border-white/40 shadow-[0_50px_100px_-20px_rgba(0,0,0,0.12)] overflow-hidden">
                    <div class="aspect-video md:aspect-[21/9] bg-gray-50 flex items-center justify-center relative overflow-hidden">
                         <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?auto=format&fit=crop&q=80&w=1600" class="absolute inset-0 w-full h-full object-cover opacity-90 transition-transform duration-[10s] hover:scale-110" alt="Restaurant Interior" />
                         <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent"></div>
                         
                         <div class="absolute bottom-10 left-10 p-6 backdrop-blur-md bg-white/10 border border-white/20 rounded-3xl text-white text-left hidden sm:block">
                            <p class="text-xs font-bold uppercase tracking-widest opacity-60 mb-1">Trending Now</p>
                            <h4 class="text-2xl font-black">The Rustic Kitchen</h4>
                            <p class="text-sm font-medium opacity-80">0.4 miles away • 4.9 ★</p>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How it Works -->
    <section id="how-it-works" class="py-32 relative">
        <div class="max-w-7xl mx-auto px-6 lg:px-10">
            <div class="flex flex-col md:flex-row items-end justify-between mb-24 gap-8 text-left">
                <div class="max-w-2xl">
                    <h2 class="font-lato text-4xl md:text-6xl font-black text-[#0f172a] leading-tight mb-6">Discovery, simplified.</h2>
                    <p class="text-xl text-gray-500 font-medium">We've stripped away the noise. No complex filters, no endless scrolling. Just your location and the best food it has to offer.</p>
                </div>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Step 1 -->
                <div class="group p-10 rounded-[2.5rem] bg-white/60 backdrop-blur-md border border-white/40 transition-all duration-500 hover:shadow-2xl hover:-translate-y-2">
                    <div class="w-16 h-16 rounded-2xl bg-[#F9443D]/10 flex items-center justify-center text-[#F9443D] mb-8">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                    </div>
                    <h3 class="text-2xl font-black text-[#0f172a] mb-4">Set Location</h3>
                    <p class="text-gray-500 font-medium leading-relaxed">Share your current position with a single tap. We respect your privacy and only use it for discovery.</p>
                </div>

                <!-- Step 2 -->
                <div class="group p-10 rounded-[2.5rem] bg-white/60 backdrop-blur-md border border-white/40 transition-all duration-500 hover:shadow-2xl hover:-translate-y-2">
                    <div class="w-16 h-16 rounded-2xl bg-[#0f172a]/5 flex items-center justify-center text-[#0f172a] mb-8">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
                    </div>
                    <h3 class="text-2xl font-black text-[#0f172a] mb-4">See What's Near</h3>
                    <p class="text-gray-500 font-medium leading-relaxed">Instantly view a curated list of top-rated eateries within walking or short driving distance.</p>
                </div>

                <!-- Step 3 -->
                <div class="group p-10 rounded-[2.5rem] bg-[#0f172a] text-white transition-all duration-500 hover:shadow-2xl hover:-translate-y-2">
                    <div class="w-16 h-16 rounded-2xl bg-white/10 flex items-center justify-center text-[#F9443D] mb-8">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" /></svg>
                    </div>
                    <h3 class="text-2xl font-black mb-4">Enjoy the Vibe</h3>
                    <p class="opacity-70 font-medium leading-relaxed">Head over, experience the atmosphere, and indulge in a meal that feels like a discovery.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white/80 backdrop-blur-xl pt-32 pb-16 border-t border-gray-100">
        <div class="max-w-7xl mx-auto px-6 lg:px-10">
            <div class="flex flex-col md:flex-row justify-between items-center pt-12 border-t border-gray-100 gap-6">
                <p class="text-xs font-bold text-gray-400 uppercase tracking-widest">&copy; {{ date('Y') }} Bitehub Labs. All rights reserved.</p>
                <div class="flex items-center space-x-6">
                    <a href="#" class="w-10 h-10 rounded-full border border-gray-100 flex items-center justify-center text-[#0f172a] hover:bg-[#0f172a] hover:text-white transition-all">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full border border-gray-100 flex items-center justify-center text-[#0f172a] hover:bg-[#0f172a] hover:text-white transition-all">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 1.366.062 2.633.336 3.608 1.31s1.248 2.242 1.31 3.608c.058 1.266.07 1.646.07 4.85s-.012 3.584-.07 4.85c-.062 1.366-.336 2.633-1.31 3.608s-2.242 1.248-3.608 1.31c-1.266.058-1.646.07-4.85.07s-3.584-.012-4.85-.07c-1.366-.062-2.633-.336-3.608-1.31s-1.248-2.242-1.31-3.608c-.058-1.266-.07-1.646-.07-4.85s.012-3.584.07-4.85c.062-1.366.336-2.633 1.31-3.608s2.242-1.248 3.608-1.31c1.266-.058 1.646-.07 4.85-.07zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948s.014 3.667.072 4.947c.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.073 4.948.073s3.667-.014 4.947-.072c4.358-.2 6.78-2.618 6.98-6.98.059-1.281.073-1.689.073-4.948s-.014-3.667-.072-4.947c-.2-4.358-2.618-6.78-6.98-6.98-1.281-.058-1.689-.073-4.948-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.791-4-4s1.791-4 4-4 4 1.791 4 4-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>
</div>
