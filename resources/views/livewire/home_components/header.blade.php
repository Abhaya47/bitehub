<header x-data="{ atTop: true }" 
        x-init="atTop = window.pageYOffset > 10 ? false : true"
        @scroll.window="atTop = window.pageYOffset > 10 ? false : true"
        :class="{ 'top-0 left-0 right-0 rounded-none bg-white/80 backdrop-blur-xl shadow-sm': !atTop, 'top-4 left-6 right-6 rounded-3xl bg-white/60 backdrop-blur-md border border-white/40': atTop }"
        class="fixed transition-all duration-500 z-[100]">
    <div class="max-w-7xl mx-auto flex items-center justify-between h-20 px-6 lg:px-10">

        {{-- Mobile menu button --}}
        <div class="md:hidden">
            <button @click="$dispatch('toggle-mobile-menu')" class="p-2 text-[#0f172a] hover:bg-gray-100 rounded-xl transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" /></svg>
            </button>
        </div>

        {{-- Logo --}}
        <div class="flex items-center space-x-3 group">
            <a href="{{ route('home') }}" class="flex items-center">
                <div class="w-12 h-12 flex items-center justify-center transition-transform group-hover:scale-105">
                    <img src="{{ asset('images/bitehublogo.png') }}" alt="BiteHub Logo" class="w-full h-full object-contain">
                </div>
                <span class="font-lato font-black text-2xl tracking-tighter text-[#0f172a] ml-2 hidden sm:block">BiteHub</span>
            </a>
        </div>

        {{-- Navigation Links --}}
        <nav class="hidden md:flex items-center space-x-1">
            <a href="{{ url('home') }}" class="px-5 py-2 rounded-full text-sm font-bold text-[#0f172a] hover:bg-[#F9443D]/10 hover:text-[#F9443D] transition-all">Home</a>
            <a href="#" class="px-5 py-2 rounded-full text-sm font-bold text-[#0f172a]/60 hover:text-[#0f172a] transition-all">Reels</a>
            <a href="#" class="px-5 py-2 rounded-full text-sm font-bold text-[#0f172a]/60 hover:text-[#0f172a] transition-all">Chat</a>
            <a href="#" class="px-5 py-2 rounded-full text-sm font-bold text-[#0f172a]/60 hover:text-[#0f172a] transition-all">About</a>
        </nav>

        {{-- Actions --}}
        <div class="flex items-center space-x-4">
            {{-- Location --}}
            <div class="hidden lg:flex items-center space-x-2 px-4 py-2.5 bg-gray-100/50 rounded-full border border-gray-200 transition-all hover:bg-white hover:shadow-sm cursor-pointer">
                <svg class="w-4 h-4 text-[#F9443D]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                <span class="text-xs font-black text-[#0f172a] uppercase tracking-wider">{{ $position->cityName }}</span>
            </div>

            {{-- Notifications --}}
            @auth
                @livewire('notification-panel')
            @endauth

            {{-- Profile --}}
            <div x-data="{ open: false }" @click.away="open = false" class="relative">
                <button @click="open = !open" class="w-11 h-11 rounded-full overflow-hidden border-2 border-white shadow-sm hover:shadow-md transition-all">
                    <img src="{{ Auth::user()->file_path ? Storage::url(Auth::user()->file_path) : asset('images/profile_pic.png') }}" class="w-full h-full object-cover">
                </button>

                <div x-show="open" 
                     x-transition:enter="transition ease-out duration-200"
                     x-transition:enter-start="opacity-0 scale-95 -translate-y-2"
                     x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                     class="absolute right-0 mt-3 w-64 bg-white rounded-3xl shadow-[0_20px_50px_rgba(0,0,0,0.15)] border border-gray-50 overflow-hidden py-2">
                    <div class="px-6 py-4 border-b border-gray-50 mb-2">
                        <p class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-1">Signed in as</p>
                        <p class="text-sm font-black text-[#0f172a] truncate">{{ Auth::user()->name }}</p>
                    </div>
                    
                    <a href="{{ url('profile') }}" class="flex items-center px-6 py-3 text-sm font-bold text-gray-600 hover:text-[#0f172a] hover:bg-gray-50 transition-colors">
                        <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" /></svg>
                        Profile
                    </a>
                    <a href="{{ url('profile-settings') }}" class="flex items-center px-6 py-3 text-sm font-bold text-gray-600 hover:text-[#0f172a] hover:bg-gray-50 transition-colors">
                        <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37a1.724 1.724 0 002.572-1.065z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                        Settings
                    </a>

                    <div class="h-[1px] bg-gray-50 my-2"></div>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="flex items-center w-full px-6 py-3 text-sm font-bold text-red-500 hover:bg-red-50 transition-colors">
                            <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" /></svg>
                            Sign Out
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
