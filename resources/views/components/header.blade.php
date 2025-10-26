<header class="fixed top-6 left-6 right-6 bg-white/10 backdrop-blur-md rounded-full z-50 px-5">
    <div class="flex items-center justify-between">
        <div class="w-[96px] h-[90px]">
            <img src="{{ asset('images/bitehublogo.png') }}" alt="BiteHub Logo" class="w-full h-full object-contain">
        </div>

        <nav class="hidden md:flex gap-10">
            <a href="#" class="font-inter text-md text-white hover:text-[#F9423C] transition-colors">Home</a>
            <a href="#" class="font-inter text-md text-white hover:text-[#F9423C] transition-colors">Reels</a>
            <a href="#" class="font-inter text-md text-white hover:text-[#F9423C] transition-colors">Chat</a>
            <a href="#" class="font-inter text-md text-white hover:text-[#F9423C] transition-colors">About us</a>
        </nav>

        <button class="bg-[#F9423C] rounded-3xl px-6 py-2 shadow-sm hover:bg-[#d93a34] transition-colors">
            <span class="font-inter font-semibold text-sm text-white">Get started</span>
        </button>

        {{-- <button class="md:hidden text-white ml-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button> --}}
    </div>
</header>