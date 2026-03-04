<div class="bg-gray-50 text-[#012e34] font-raleway min-h-screen">
    <!-- Navbar -->
    <nav x-data="{ open: false }" class="w-full bg-white/80 backdrop-blur-md fixed top-0 z-50 shadow-sm transition-all">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center">
                <div class="flex items-center space-x-2">
                    <img src="{{ asset('images/bitehublogo.png') }}" alt="Bitehub Logo" class="w-12 h-12 object-contain" />
                    <span class="font-lato font-bold text-2xl tracking-tight text-[#012e34]">Bitehub</span>
                </div>
                <!-- Desktop Menu -->
                <div class="hidden md:flex space-x-8 items-center">
                    <a href="#how-it-works" class="text-sm font-medium text-[#012e34]/70 hover:text-[#F9443D] transition-colors">How it works</a>
                    <a href="#features" class="text-sm font-medium text-[#012e34]/70 hover:text-[#F9443D] transition-colors">Features</a>
                    <a href="{{ route('login') }}" class="text-sm font-medium text-[#012e34] hover:text-[#F9443D] transition-colors">Log in</a>
                    <a href="{{ route('register') }}" class="inline-flex items-center justify-center px-5 py-2.5 text-sm font-medium text-white bg-[#012e34] hover:bg-[#F9443D] rounded-full transition-all shadow-md">
                        Get Started
                    </a>
                </div>
                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button @click="open = !open" class="inline-flex items-center justify-center p-2 rounded-md text-[#012e34] hover:text-[#F9443D] focus:outline-none">
                        <svg :class="{'hidden': open, 'block': !open }" class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                        </svg>
                        <svg :class="{'hidden': !open, 'block': open }" class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- Mobile Menu -->
        <div x-show="open" @click.away="open = false" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="md:hidden absolute top-0 inset-x-0 p-2 transition transform origin-top-right">
            <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-white divide-y-2 divide-gray-50">
                <div class="pt-5 pb-6 px-5">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                           <img src="{{ asset('images/bitehublogo.png') }}" alt="Bitehub Logo" class="w-10 h-10 object-contain" />
                           <span class="font-lato font-bold text-xl tracking-tight text-[#012e34]">Bitehub</span>
                        </div>
                        <div class="-mr-2">
                            <button @click="open = false" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-[#F9443D] hover:bg-gray-100 focus:outline-none">
                                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="mt-6">
                        <nav class="grid gap-y-8">
                            <a href="#how-it-works" @click="open = false" class="p-3 flex items-center rounded-md hover:bg-gray-50">How it works</a>
                            <a href="#features" @click="open = false" class="p-3 flex items-center rounded-md hover:bg-gray-50">Features</a>
                            <a href="{{ route('login') }}" @click="open = false" class="p-3 flex items-center rounded-md hover:bg-gray-50">Log in</a>
                        </nav>
                    </div>
                </div>
                <div class="py-6 px-5 space-y-6">
                    <div>
                        <a href="{{ route('register') }}" class="w-full flex items-center justify-center px-4 py-2 border border-transparent rounded-full shadow-sm text-base font-medium text-white bg-[#012e34] hover:bg-[#F9443D]">
                            Get Started
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden bg-gray-50">
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-[#F9443D]/10 via-gray-50 to-gray-50"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-4xl mx-auto">
                <div class="inline-flex items-center px-3 py-1 rounded-full bg-[#F9443D]/10 border border-[#F9443D]/20 text-[#F9443D] text-xs font-semibold uppercase tracking-wider mb-6">
                    <span class="flex w-2 h-2 rounded-full bg-[#F9443D] mr-2 animate-pulse"></span>
                    Discover the culinary world
                </div>
                <h1 class="font-lato text-4xl sm:text-5xl md:text-7xl font-black text-[#012e34] tracking-tight leading-tight mb-8">
                    Find your next <span class="text-[#F9443D] drop-shadow-sm">favorite meal</span> near you.
                </h1>
                <p class="text-lg sm:text-xl text-[#012e34]/70 md:text-2xl mb-12 font-light max-w-2xl mx-auto leading-relaxed">
                    Bitehub uses your location to uncover hidden gems, local favorites, and top-rated restaurants right around the corner.
                </p>
                <div class="flex flex-col sm:flex-row justify-center items-center space-y-4 sm:space-y-0 sm:space-x-6">
                    <a href="{{ route('register') }}" class="w-full sm:w-auto inline-flex items-center justify-center px-8 py-4 text-base font-medium text-white bg-[#012e34] hover:bg-[#F9443D] rounded-full transition-all shadow-xl hover:shadow-2xl hover:-translate-y-1 group">
                        Explore Nearby Restaurants
                        <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                    <a href="#how-it-works" class="w-full sm:w-auto inline-flex items-center justify-center px-8 py-4 text-base font-medium text-[#012e34] bg-white hover:bg-gray-50 border border-gray-200 rounded-full transition-all shadow-sm hover:shadow-md">
                        See how it works
                    </a>
                </div>
            </div>
            
            <!-- Hero Interface Preview -->
            <div class="mt-20 relative mx-auto max-w-5xl">
                <div class="absolute -inset-1 rounded-3xl bg-gradient-to-r from-[#012e34] to-[#F9443D] opacity-20 blur-2xl"></div>
                <div class="relative rounded-3xl bg-white/60 backdrop-blur-xl border border-white/40 shadow-2xl overflow-hidden aspect-[4/3] sm:aspect-[16/9] md:aspect-[21/9] flex items-center justify-center">
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-3 sm:gap-6 p-4 sm:p-8 w-full h-full opacity-90">
                        <div class="rounded-2xl overflow-hidden shadow-lg"><img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&q=80&w=800" alt="Beautiful Modern Restaurant Interior" class="w-full h-full object-cover" /></div>
                        <div class="rounded-2xl overflow-hidden shadow-lg"><img src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?auto=format&fit=crop&q=80&w=800" alt="Elegant Plated Food" class="w-full h-full object-cover" /></div>
                        <div class="rounded-2xl overflow-hidden shadow-lg hidden md:block"><img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?auto=format&fit=crop&q=80&w=800" alt="Bustling Restaurant Scene" class="w-full h-full object-cover" /></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How it works -->
    <section id="how-it-works" class="py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="font-lato text-3xl md:text-4xl font-bold text-[#012e34] mb-4">Location-Based Magic</h2>
                <p class="text-lg text-[#012e34]/70">No searching, no typing. Just open Bitehub and let your surroundings inspire your cravings.</p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-12 relative">
                <!-- Abstract connecting line -->
                <div class="hidden md:block absolute top-1/2 left-0 w-full h-0.5 bg-gradient-to-r from-[#F9443D]/10 via-[#F9443D]/40 to-[#F9443D]/10 -z-10 transform -translate-y-1/2"></div>
                
                <div class="relative flex flex-col items-center group">
                    <div class="w-20 h-20 rounded-2xl bg-white border border-gray-100 shadow-xl shadow-gray-200/50 flex items-center justify-center mb-6 z-10 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-[#F9443D]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-[#012e34] mb-2 font-lato">1. Locate</h3>
                    <p class="text-[#012e34]/60 text-center text-sm leading-relaxed">Share your location to instantly see the culinary landscape right where you stand.</p>
                </div>
                
                <div class="relative flex flex-col items-center group">
                    <div class="w-20 h-20 rounded-2xl bg-white border border-gray-100 shadow-xl shadow-gray-200/50 flex items-center justify-center mb-6 z-10 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-[#F9443D]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-[#012e34] mb-2 font-lato">2. Discover</h3>
                    <p class="text-[#012e34]/60 text-center text-sm leading-relaxed">Browse beautifully curated profiles of nearby restaurants, cafes, and eateries.</p>
                </div>
                
                <div class="relative flex flex-col items-center group">
                    <div class="w-20 h-20 rounded-2xl bg-white border border-gray-100 shadow-xl shadow-gray-200/50 flex items-center justify-center mb-6 z-10 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-[#F9443D]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-[#012e34] mb-2 font-lato">3. Enjoy</h3>
                    <p class="text-[#012e34]/60 text-center text-sm leading-relaxed">Find what you crave, head over, and immerse yourself in a new dining experience.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Detailed Features -->
    <section id="features" class="py-24 lg:py-32 bg-white overflow-hidden relative">
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-full bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-gray-100/50 via-transparent to-transparent -z-0"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-20">
                <div class="inline-flex items-center px-4 py-1.5 rounded-full bg-[#F9443D]/10 text-[#F9443D] text-xs font-bold uppercase tracking-widest mb-6">
                    Sensory Discovery
                </div>
                <h2 class="font-lato text-4xl md:text-6xl font-black text-[#012e34] mb-6 leading-[1.1]">
                    Focus on the <span class="relative inline-block">
                        <span class="relative z-10 text-[#F9443D]">Experience</span>
                        <span class="absolute bottom-2 left-0 w-full h-3 bg-[#F9443D]/10 -z-10"></span>
                    </span>
                </h2>
                <p class="text-xl text-[#012e34]/60 leading-relaxed font-light">
                    We've eliminated the friction. No bookings, no waiting. Just a direct connection between your hunger and the city's finest flavors.
                </p>
            </div>
            
            <!-- Modern Bento Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
                
                <!-- Hero Featured Card (Spans 2x2) -->
                <div class="sm:col-span-2 md:row-span-2 group relative rounded-[2rem] overflow-hidden cursor-pointer shadow-2xl transition-all duration-500 ease-out hover:-translate-y-2 isolate transform-gpu min-h-[480px]">
                    <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&q=80&w=1200" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110 transform-gpu" alt="Modern Restaurant Interior" />
                    <div class="absolute inset-0 bg-gradient-to-t from-[#012e34] via-[#012e34]/40 to-transparent opacity-90 transition-opacity duration-500 group-hover:opacity-80"></div>
                    
                    <div class="absolute top-6 left-6">
                        <div class="backdrop-blur-md bg-white/20 border border-white/30 rounded-full px-3 py-1 flex items-center space-x-2 shadow-sm">
                            <span class="flex w-2 h-2 rounded-full bg-green-400 animate-pulse"></span>
                            <span class="text-white text-[10px] font-bold uppercase tracking-widest">Now Serving</span>
                        </div>
                    </div>

                    <div class="absolute inset-0 p-6 sm:p-10 flex flex-col justify-end">
                        <h3 class="text-white font-black text-2xl sm:text-3xl md:text-4xl mb-3 tracking-tight transition-transform duration-500 group-hover:-translate-y-1">The Artisan Table</h3>
                        <p class="text-white/80 text-base sm:text-lg font-light max-w-sm leading-snug transition-transform duration-500 delay-75 group-hover:-translate-y-1">Experience craft cocktails and seasonal small plates in an intimate setting.</p>
                        <div class="mt-6 sm:mt-8 flex items-center space-x-4 transition-transform duration-500 delay-100 group-hover:-translate-y-1">
                            <div class="flex -space-x-3">
                                <img src="https://i.pravatar.cc/100?u=1" class="w-8 h-8 sm:w-10 sm:h-10 rounded-full border-2 border-[#012e34] shadow-sm" alt="" />
                                <img src="https://i.pravatar.cc/100?u=2" class="w-8 h-8 sm:w-10 sm:h-10 rounded-full border-2 border-[#012e34] shadow-sm" alt="" />
                                <img src="https://i.pravatar.cc/100?u=3" class="w-8 h-8 sm:w-10 sm:h-10 rounded-full border-2 border-[#012e34] shadow-sm" alt="" />
                            </div>
                            <span class="text-white/60 text-[10px] font-bold uppercase tracking-[0.2em]">+12 Visited</span>
                        </div>
                    </div>
                </div>
                
                <!-- Visual Menu Card (Horizontal) -->
                <div class="sm:col-span-2 group relative rounded-[2rem] overflow-hidden bg-[#012e34] shadow-xl transition-all duration-500 ease-out hover:shadow-2xl isolate transform-gpu min-h-[320px]">
                    <div class="h-full w-full bg-gradient-to-br from-[#012e34] to-[#02414a] p-6 sm:p-10 flex items-center justify-between relative">
                        <div class="relative z-10 max-w-[60%] sm:max-w-[50%]">
                            <div class="w-12 h-12 sm:w-14 sm:h-14 bg-[#F9443D] rounded-2xl flex items-center justify-center text-white mb-6 rotate-3 transition-all duration-500 group-hover:rotate-12 group-hover:scale-110 shadow-lg shadow-[#F9443D]/30">
                                <svg class="w-6 h-6 sm:w-7 sm:h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            </div>
                            <h4 class="text-white font-bold text-xl sm:text-2xl mb-2 tracking-tight">Visual Menus</h4>
                            <p class="text-white/50 text-xs sm:text-sm font-light leading-relaxed">High-definition galleries for every dish.</p>
                        </div>
                        <div class="absolute -right-8 -bottom-8 w-48 h-48 sm:w-64 sm:h-64 bg-[#F9443D]/10 rounded-full blur-[80px] transition-all duration-700 group-hover:scale-125 group-hover:bg-[#F9443D]/20"></div>
                        <div class="relative hidden sm:block z-20">
                            <div class="flex items-center space-x-4 transform rotate-[8deg] translate-x-2 transition-transform duration-700 group-hover:rotate-0 group-hover:translate-x-[-20px]">
                                <div class="w-24 h-32 sm:w-28 sm:h-36 rounded-2xl overflow-hidden border border-white/10 transform-gpu shadow-2xl transition-all duration-500 group-hover:scale-105 bg-gray-900">
                                    <img src="https://images.unsplash.com/photo-1473093226795-af9932fe5856?auto=format&fit=crop&q=80&w=400" class="w-full h-full object-cover" alt="Gourmet Pasta" />
                                </div>
                                <div class="w-24 h-32 sm:w-28 sm:h-36 rounded-2xl overflow-hidden border border-white/10 mt-12 transform-gpu shadow-2xl transition-all duration-500 group-hover:scale-105 group-hover:mt-4 bg-gray-900">
                                    <img src="https://images.unsplash.com/photo-1544025162-d76694265947?auto=format&fit=crop&q=80&w=400" class="w-full h-full object-cover" alt="Plated Steak" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Real-time Proximity (Vertical) -->
                <div class="group relative rounded-[2rem] overflow-hidden bg-white border border-gray-100 p-6 sm:p-8 flex flex-col justify-between shadow-xl transition-all duration-300 ease-out hover:shadow-2xl hover:border-[#F9443D]/20 hover:-translate-y-1 isolate transform-gpu min-h-[280px]">
                    <div class="w-12 h-12 sm:w-14 sm:h-14 bg-gray-50 rounded-2xl flex items-center justify-center text-[#F9443D] mb-4 transition-all duration-300 group-hover:scale-110 group-hover:bg-[#F9443D]/10">
                        <svg class="w-7 h-7 sm:w-8 sm:h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <div>
                        <h4 class="text-[#012e34] font-bold text-xl mb-1 tracking-tight">Near You</h4>
                        <p class="text-[#012e34]/40 text-sm leading-tight">Hyper-local discovery.</p>
                    </div>
                    <div class="mt-6 pt-6 border-t border-gray-50">
                        <div class="flex items-center text-[#F9443D] font-black text-[10px] uppercase tracking-[0.2em]">
                            <span class="mr-2">Explore Now</span>
                            <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path></svg>
                        </div>
                    </div>
                </div>

                <!-- Proximity Pulse Card -->
                <div class="group relative rounded-[2rem] overflow-hidden bg-[#F9443D] p-6 sm:p-8 flex flex-col justify-center shadow-xl transition-all duration-300 ease-out hover:shadow-2xl hover:shadow-[#F9443D]/30 hover:-translate-y-1 isolate transform-gpu min-h-[280px]">
                    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,_var(--tw-gradient-stops))] from-white/20 via-transparent to-transparent"></div>
                    <h4 class="text-white font-bold text-xl mb-2 relative z-10 leading-tight tracking-tight">Real-time Proximity</h4>
                    <p class="text-white/80 text-[10px] font-bold relative z-10 leading-relaxed uppercase tracking-widest">Live distance updates</p>
                    <div class="mt-8 flex justify-center relative z-10">
                        <div class="relative">
                            <div class="absolute inset-0 bg-white/20 rounded-full animate-ping"></div>
                            <div class="relative w-12 h-12 bg-white rounded-full flex items-center justify-center text-[#F9443D] transition-transform duration-300 group-hover:scale-110 shadow-lg">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/></svg>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Gallery Item 1 -->
                <div class="sm:col-span-1 group relative rounded-[2rem] overflow-hidden shadow-lg transition-all duration-500 ease-out hover:shadow-2xl hover:-translate-y-1 isolate transform-gpu min-h-[280px]">
                    <img src="https://images.unsplash.com/photo-1550547660-d9450f859349?auto=format&fit=crop&q=80&w=600" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110 transform-gpu" alt="Gourmet Burger" />
                    <div class="absolute inset-0 bg-gradient-to-t from-[#012e34]/90 via-transparent to-transparent opacity-100 transition-opacity duration-500 group-hover:opacity-95"></div>
                    <div class="absolute bottom-6 left-6 right-6 sm:bottom-8 sm:left-8 sm:right-8">
                        <div class="text-white font-bold text-lg sm:text-xl leading-tight transition-transform duration-500 group-hover:-translate-y-1 tracking-tight">Smash Bros</div>
                        <div class="text-[#F9443D] text-[10px] font-black uppercase tracking-[0.25em] mt-2 transition-transform duration-500 delay-75 group-hover:-translate-y-1">1.2 miles away</div>
                    </div>
                </div>
                
                <!-- Gallery Item 2 -->
                <div class="sm:col-span-1 group relative rounded-[2rem] overflow-hidden shadow-lg transition-all duration-500 ease-out hover:shadow-2xl hover:-translate-y-1 isolate transform-gpu min-h-[280px]">
                    <img src="https://images.unsplash.com/photo-1513104890138-7c749659a591?auto=format&fit=crop&q=80&w=600" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110 transform-gpu" alt="Artisanal Pizza" />
                    <div class="absolute inset-0 bg-gradient-to-t from-[#012e34]/90 via-transparent to-transparent opacity-100 transition-opacity duration-500 group-hover:opacity-95"></div>
                    <div class="absolute bottom-6 left-6 right-6 sm:bottom-8 sm:left-8 sm:right-8">
                        <div class="text-white font-bold text-lg sm:text-xl leading-tight transition-transform duration-500 group-hover:-translate-y-1 tracking-tight">Luigi's Pizzeria</div>
                        <div class="text-[#F9443D] text-[10px] font-black uppercase tracking-[0.25em] mt-2 transition-transform duration-500 delay-75 group-hover:-translate-y-1">0.5 miles away</div>
                    </div>
                </div>

                <!-- Call to Action Card -->
                <div class="sm:col-span-2 group relative rounded-[2rem] overflow-hidden bg-white border-2 border-dashed border-gray-200 p-6 sm:p-10 flex flex-col items-center justify-center text-center transition-all duration-300 ease-out hover:border-[#F9443D]/40 hover:shadow-2xl hover:-translate-y-1 isolate transform-gpu min-h-[280px]">
                    <div class="absolute inset-0 bg-gradient-to-br from-gray-50 to-white opacity-50"></div>
                    <div class="relative z-10">
                        <h4 class="text-[#012e34] font-black text-xl sm:text-2xl mb-3 transition-transform duration-300 group-hover:-translate-y-1 tracking-tight">Ready to explore?</h4>
                        <p class="text-[#012e34]/50 text-sm mb-8 max-w-xs transition-transform duration-300 delay-75 group-hover:-translate-y-1 font-light">Join thousands of foodies discovering the best local bites every day.</p>
                        <a href="{{ route('register') }}" class="inline-flex items-center px-8 sm:px-10 py-3 sm:py-4 bg-[#012e34] text-white rounded-full font-bold text-sm transition-all duration-300 hover:bg-[#F9443D] hover:shadow-xl hover:shadow-[#F9443D]/25 transform hover:-translate-y-1 active:scale-95">
                            Get Started for Free
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </a>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-[#012e34] pt-16 pb-8 border-t border-[#02414a]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-center mb-8 pb-8 border-b border-[#02414a]">
                <div class="flex items-center space-x-2 mb-4 md:mb-0">
                    <img src="{{ asset('images/bitehublogo.png') }}" alt="Bitehub Logo" class="w-10 h-10 object-contain" />
                    <span class="font-lato font-bold text-xl tracking-tight text-white">Bitehub</span>
                </div>
                <div class="flex space-x-6">
                    <a href="#" class="text-gray-400 hover:text-[#F9443D] transition-colors">About</a>
                    <a href="#" class="text-gray-400 hover:text-[#F9443D] transition-colors">Privacy</a>
                    <a href="#" class="text-gray-400 hover:text-[#F9443D] transition-colors">Terms</a>
                    <a href="#" class="text-gray-400 hover:text-[#F9443D] transition-colors">Contact</a>
                </div>
            </div>
            <div class="text-center text-sm text-gray-400">
                &copy; {{ date('Y') }} Bitehub. Focus on discovery.
            </div>
        </div>
    </footer>
</div>
