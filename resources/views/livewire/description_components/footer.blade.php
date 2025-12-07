<footer class="bg-[#F9413F] text-white">
    {{-- Main Footer Content --}}
    <div class="max-w-7xl mx-auto px-4 py-16">
        {{-- Three Column Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-12">

            {{-- Column 1: About Us --}}
            <div>
                <h3 class="text-[20px] font-bold mb-4">
                    About Us
                </h3>
                <p class="text-[14px] leading-relaxed mb-6 text-white/90 text-justify">
                    Explore the latest food hotspots in your city through curated videos by top influencers and
                    vloggers. Bite Hub brings all the buzz from social media directly to your fingertips!
                </p>
                <a href = "{{ route('landing') }}">
                    <button
                        class="text-white font-bold text-[14px] uppercase tracking-wide hover:underline transition-all">
                        READ MORE
                    </button>
                </a>
            </div>

            {{-- Column 3: Get in Touch --}}
            <div>
                <h3 class="text-[20px] font-bold mb-4">
                    Get in Touch
                </h3>
                <p class="text-[14px] mb-6 leading-relaxed">
                    Have some question or want to say something ?
                </p>

                {{-- Email Input with Arrow Image --}}
                <div class="relative">
                    <input type="email" placeholder="Your Email"
                        class="w-full py-3 px-5 pr-14 rounded-full bg-white text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-white/30 text-[14px]" />
                    <button class="absolute right-4 top-[32px] -translate-y-1/2 hover:opacity-75 transition-all">
                        <img src="{{ asset('images/email_vector.png') }}" alt="Send" class="h-5 w-5" />
                    </button>
                </div>
            </div>

        </div>
    </div>

    {{-- Bottom Bar with Border --}}
    <div class="border-t border-white/30">
        <div class="max-w-7xl mx-auto px-4 py-6">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                {{-- Copyright Text --}}
                <p class="text-[14px] text-white/90">
                    Copyright © 2020. All Rights Reserved.
                </p>

                {{-- Bottom Navigation Links --}}
                <div class="flex gap-6">
                    <a href="{{ route('home') }}" class="text-[14px] font-semibold hover:underline transition-all">
                        Home
                    </a>
                    <a href="#" class="text-[14px] font-semibold hover:underline transition-all">
                        Reels
                    </a>
                    <a href="#" class="text-[14px] font-semibold hover:underline transition-all">
                        Chat
                    </a>
                    <a href="{{ route('landing') }}" class="text-[14px] font-semibold hover:underline transition-all">
                        About Us
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
