<header class="fixed top-6 left-6 right-6 bg-black/5 backdrop-blur-md shadow-md rounded-full z-50 px-5">
    <div class="flex items-center justify-between">
        <div class="w-[96px] h-[90px]">
            <img src="{{ asset('images/bitehublogo.png') }}" alt="BiteHub Logo" class="w-full h-full object-contain">
        </div>

        {{-- Navigation links centered --}}
        <nav class="hidden md:flex gap-10">
            <a href="#"
                class="font-inter text-md text-[#234F68] hover:text-[#F9423C] transition-colors font-bold">Home</a>
            <a href="#"
                class="font-inter text-md text-[#234F68] hover:text-[#F9423C] transition-colors font-bold">Reels</a>
            <a href="#"
                class="font-inter text-md text-[#234F68] hover:text-[#F9423C] transition-colors font-bold">Chat</a>
            <a href="#"
                class="font-inter text-md text-[#234F68] hover:text-[#F9423C] transition-colors font-bold">About us</a>
        </nav>

        {{-- This is the red register button --}}
        {{-- <button class="bg-[#F9423C] rounded-3xl px-6 py-2 shadow-sm hover:bg-[#d93a34] transition-colors">
            <span class="font-inter font-semibold text-sm text-white">Get started</span>
        </button> --}}

        {{-- This is the right section which consists of location, notification & profile --}}
        <div class="flex items-center gap-4">
            {{-- Adding up the location border --}}
            <div
                class="hidden md:flex items-center gap-2 text-gray-700 border-2 border-gray-300 rounded-full px-4 py-4 hover:shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                        clip-rule="evenodd" />
                </svg>

                <span class="text-sm">Las Vegas</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-600" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd" />
                </svg>
            </div>
            <button class="relative p-3 border border-gray-300 rounded-full hover:shadow-lg transition-colors">
                <img src="{{ asset('images/bell_notification.png') }}" alt="Notifications" class="w-6 h-6">
            </button>

            <button
                class="border border-gray-200 rounded-full overflow-hidden hover:shadow-lg w-12 h-12 transition-colors">
                <img src="{{ asset('images/profile_pic.png') }}" alt="Profile" class="w-full h-full object-cover">
            </button>
        </div>
    </div>
</header>
