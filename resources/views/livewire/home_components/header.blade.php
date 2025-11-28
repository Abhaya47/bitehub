<header class="fixed top-2 left-6 right-6  bg-black/5 backdrop-blur-md shadow-md rounded-full z-50">
    <div class="flex items-center justify-between h-[90px] px-5">

        {{-- Mobile menu button (left side on mobile) --}}
        <div class="md:hidden z-10">
            <button type="button" id="mobile-menu-button"
                class="relative inline-flex items-center justify-center rounded-md p-2 text-[#234F68] hover:bg-white/10 hover:text-[#F9423C] focus:outline-none transition-colors">
                <span class="sr-only">Open main menu</span>
                {{-- Hamburger icon --}}
                <svg id="menu-open-icon" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
                {{-- Close icon (hidden by default) --}}
                <svg id="menu-close-icon" class="h-6 w-6 hidden" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        {{-- Logo (centered on mobile, left on desktop) --}}
        <div class="absolute left-1/2 -translate-x-1/2 md:relative md:left-0 md:translate-x-0 w-[96px] h-[90px] z-10">
            <a href="{{ route('home') }}">
                <img src="{{ asset('images/bitehublogo.png') }}" alt="BiteHub Logo"
                    class="w-full h-full object-contain">
            </a>
        </div>

        {{-- Navigation links centered (desktop only) --}}
        <nav class="hidden md:flex gap-10 absolute left-1/2 -translate-x-1/2">
            <a href="{{ url('home') }}"
                class="font-inter text-md text-[#234F68] hover:text-[#F9423C] transition-colors font-bold">Home</a>
            <a href="#"
                class="font-inter text-md text-[#234F68] hover:text-[#F9423C] transition-colors font-bold">Reels</a>
            <a href="#"
                class="font-inter text-md text-[#234F68] hover:text-[#F9423C] transition-colors font-bold">Chat</a>
            <a href="#"
                class="font-inter text-md text-[#234F68] hover:text-[#F9423C] transition-colors font-bold">About us</a>
        </nav>

        {{-- Right section (location, notification & profile) --}}
        <div class="flex items-center gap-4 z-10">

            {{-- Location dropdown (hidden on mobile) --}}
            <div
                class="hidden md:flex items-center gap-2 text-gray-700 border-2 border-gray-300 rounded-full px-4 py-4 hover:shadow-lg cursor-pointer transition-all">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                        clip-rule="evenodd" />
                </svg>
                <span class="text-sm">{{ $position->cityName }}</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-600" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd" />
                </svg>
            </div>

            {{-- Notification button --}}
            <button class="relative p-3 border border-gray-300 rounded-full hover:shadow-lg transition-all">
                <img src="{{ asset('images/bell_notification.png') }}" alt="Notifications" class="w-6 h-6">
            </button>

            <div class="relative z-10 group">
                {{-- Profile button --}}
                <button
                    class="
            w-12 h-12 rounded-full overflow-hidden
            border-2 border-transparent hover:border-[#F9423C]
            shadow-md hover:shadow-xl
            ring-2 ring-gray-200
            transition-all duration-300
            focus:outline-none focus:ring-4 focus:ring-[#F9423C]
        "
                    aria-label="User Profile Menu">
                    <img src="{{ asset('images/profile_pic.png') }}" alt="User Profile Picture"
                        class="w-full h-full object-cover">
                </button>

                {{-- Dropdown menu --}}
                <div class="absolute right-0 mt-5 w-56 bg-white backdrop-blur-sm bg-opacity-95 rounded-xl shadow-2xl transform opacity-0 scale-95 invisible group-hover:opacity-100 group-hover:scale-100 group-hover:visible
                transition-all duration-300 ease-out z-20 origin-top-right"
                    role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                    <div class="py-2" role="none">
                        <div class="px-4 py-2 text-sm text-gray-500 border-b border-gray-100 mb-1">
                            Signed in as {{ Auth::user()->name }}
                        </div>

                        <a href="#"
                            class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 transition duration-150"
                            role="menuitem" tabindex="-1">
                            <svg class="w-4 h-4 mr-3 text-gray-400 group-hover:text-indigo-600 transition"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                            My Profile
                        </a>

                        <a href="#"
                            class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 transition duration-150"
                            role="menuitem" tabindex="-1">
                            <svg class="w-4 h-4 mr-3 text-gray-400 group-hover:text-indigo-600 transition"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37a1.724 1.724 0 002.572-1.065z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            Settings
                        </a>

                        <div class="border-t border-gray-100 my-1"></div>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit"
                                class="flex items-center w-full px-4 py-2 text-sm text-red-600 hover:bg-red-50 hover:text-red-700 transition duration-150"
                                role="menuitem" tabindex="-1">
                                <svg class="w-4 h-4 mr-3 text-red-400 group-hover:text-red-700 transition"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                                    </path>
                                </svg>
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

{{-- Mobile menu overlay (separate from header to prevent breaking the rounded design) --}}
<div id="mobile-menu"
    class="hidden fixed top-32 left-6 right-6 bg-black/5 backdrop-blur-md shadow-md rounded-3xl z-40 md:hidden">
    <div class="py-4 px-6">
        <div class="space-y-2">
            <a href="{{ url('home') }}"
                class="block rounded-full px-4 py-3 text-base font-bold text-[#234F68] hover:bg-white/20 hover:text-[#F9423C] transition-all">Home</a>
            <a href=""
                class="block rounded-full px-4 py-3 text-base font-bold text-[#234F68] hover:bg-white/20 hover:text-[#F9423C] transition-all">Reels</a>
            <a href="#"
                class="block rounded-full px-4 py-3 text-base font-bold text-[#234F68] hover:bg-white/20 hover:text-[#F9423C] transition-all">Chat</a>
            <a href="#"
                class="block rounded-full px-4 py-3 text-base font-bold text-[#234F68] hover:bg-white/20 hover:text-[#F9423C] transition-all">About
                us</a>

            {{-- Location in mobile menu --}}
            <div
                class="flex items-center gap-2 text-gray-700 border-2 border-gray-300 rounded-full px-4 py-3 mt-4 cursor-pointer hover:shadow-lg transition-all">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                        clip-rule="evenodd" />
                </svg>
                <span class="text-sm font-bold">{{ $position->cityName }}</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-600" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd" />
                </svg>
            </div>
        </div>
    </div>
</div>

{{-- JavaScript for menu toggle --}}
@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            const openIcon = document.getElementById('menu-open-icon');
            const closeIcon = document.getElementById('menu-close-icon');

            menuButton.addEventListener('click', function(e) {
                e.stopPropagation();

                // Toggle mobile menu
                mobileMenu.classList.toggle('hidden');

                // Toggle icons
                openIcon.classList.toggle('hidden');
                closeIcon.classList.toggle('hidden');
            });

            // Close menu when clicking outside
            document.addEventListener('click', function(e) {
                if (!mobileMenu.contains(e.target) && !menuButton.contains(e.target)) {
                    if (!mobileMenu.classList.contains('hidden')) {
                        mobileMenu.classList.add('hidden');
                        openIcon.classList.remove('hidden');
                        closeIcon.classList.add('hidden');
                    }
                }
            });
        });
    </script>
@endpush
