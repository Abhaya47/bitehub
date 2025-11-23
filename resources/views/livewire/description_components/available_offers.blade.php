<!-- Available Offers Component -->
<div class="w-full px-4 py-6">
    <div class="bg-white rounded-xl p-6 sm:p-8 flex flex-col gap-5 w-full">
        {{-- Header --}}
        <h2 class="text-lg sm:text-xl md:text-2xl font-normal text-[#004225] leading-7 text-left">
            Available Offers
        </h2>

    {{-- Offers List Container --}}
    <div class="flex flex-col gap-3">
        {{-- Offer Card 1 --}}
        <div class="offer-card border border-[rgba(0,66,37,0.5)] rounded-lg p-3 flex flex-col sm:flex-row items-center justify-between gap-3 bg-gradient-to-r from-[rgba(0,133,74,0.05)] via-[rgba(1,158,89,0.05)] to-[rgba(12,210,123,0.05)]">
            {{-- Time Section --}}
            <div class="flex items-center gap-2.5 min-w-fit">
                {{-- Info Icon --}}
                <div class="w-5 h-5 relative flex-shrink-0">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
                        <circle cx="10" cy="10" r="8.33" stroke="#004225" stroke-width="1.5" />
                        <line x1="10" y1="6.77" x2="10" y2="10.8" stroke="#004225"
                            stroke-width="1.5" stroke-linecap="round" />
                        <circle cx="10" cy="13.33" r="1" fill="#004225" />
                    </svg>
                </div>

                {{-- Time Text --}}
                <span class="text-[#004225] text-sm sm:text-base font-medium whitespace-nowrap tracking-[0.25px]">
                    Sun, 06:00 PM - 09:30 PM
                </span>
            </div>

            {{-- Availed Count --}}
            <div class="flex-grow text-center sm:text-left sm:flex-grow-0 sm:ml-4">
                <span class="text-[#004225] text-sm sm:text-base font-normal tracking-[0.25px]">
                    Offer availed <span class="font-medium">100</span> times
                </span>
            </div>

            {{-- Action Button --}}
            <button
                class="bg-[#F6433F] text-white rounded-lg px-3 py-3 sm:py-4 min-w-[100px] h-12 flex items-center justify-center font-medium text-sm hover:bg-[#d63833] transition-colors focus:outline-none focus:ring-2 focus:ring-[#F6433F] focus:ring-opacity-50">
                Avail Offer
            </button>
        </div>
        {{-- Offer Card 2 --}}
        <div class="offer-card border border-[rgba(0,66,37,0.5)] rounded-lg p-3 flex flex-col sm:flex-row items-center justify-between gap-3 bg-gradient-to-r from-[rgba(0,133,74,0.05)] via-[rgba(1,158,89,0.05)] to-[rgba(12,210,123,0.05)]">
            <div class="flex items-center gap-2.5 min-w-fit">
                <div class="w-5 h-5 relative flex-shrink-0">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
                        <circle cx="10" cy="10" r="8.33" stroke="#004225" stroke-width="1.5" />
                        <line x1="10" y1="6.77" x2="10" y2="10.8" stroke="#004225"
                            stroke-width="1.5" stroke-linecap="round" />
                        <circle cx="10" cy="13.33" r="1" fill="#004225" />
                    </svg>
                </div>
                <span class="text-[#004225] text-sm sm:text-base font-medium whitespace-nowrap tracking-[0.25px]">
                    Sun, 06:00 PM - 09:30 PM
                </span>
            </div>
            <div class="flex-grow text-center sm:text-left sm:flex-grow-0 sm:ml-4">
                <span class="text-[#004225] text-sm sm:text-base font-normal tracking-[0.25px]">
                    Offer availed <span class="font-medium">100</span> times
                </span>
            </div>
            <button
                class="bg-[#F6433F] text-white rounded-lg px-3 py-3 sm:py-4 min-w-[100px] h-12 flex items-center justify-center font-medium text-sm hover:bg-[#d63833] transition-colors focus:outline-none focus:ring-2 focus:ring-[#F6433F] focus:ring-opacity-50">
                Avail Offer
            </button>
        </div>
        {{-- Offer Card 3 --}}
        <div class="offer-card border border-[rgba(0,66,37,0.5)] rounded-lg p-3 flex flex-col sm:flex-row items-center justify-between gap-3 bg-gradient-to-r from-[rgba(0,133,74,0.05)] via-[rgba(1,158,89,0.05)] to-[rgba(12,210,123,0.05)]">
            <div class="flex items-center gap-2.5 min-w-fit">
                <div class="w-5 h-5 relative flex-shrink-0">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
                        <circle cx="10" cy="10" r="8.33" stroke="#004225" stroke-width="1.5" />
                        <line x1="10" y1="6.77" x2="10" y2="10.8" stroke="#004225"
                            stroke-width="1.5" stroke-linecap="round" />
                        <circle cx="10" cy="13.33" r="1" fill="#004225" />
                    </svg>
                </div>
                <span class="text-[#004225] text-sm sm:text-base font-medium whitespace-nowrap tracking-[0.25px]">
                    Sun, 06:00 PM - 09:30 PM
                </span>
            </div>
            <div class="flex-grow text-center sm:text-left sm:flex-grow-0 sm:ml-4">
                <span class="text-[#004225] text-sm sm:text-base font-normal tracking-[0.25px]">
                    Offer availed <span class="font-medium">100</span> times
                </span>
            </div>
            <button
                class="bg-[#F6433F] text-white rounded-lg px-3 py-3 sm:py-4 min-w-[100px] h-12 flex items-center justify-center font-medium text-sm hover:bg-[#d63833] transition-colors focus:outline-none focus:ring-2 focus:ring-[#F6433F] focus:ring-opacity-50">
                Avail Offer
            </button>
        </div>
    </div>

    {{-- See All Link --}}
    <a href="#"
        class="text-[#3595FF] text-sm font-medium text-center underline tracking-[0.5px] hover:text-[#2980e8] transition-colors">
        See all offers(+10 more)
    </a>
</div>
</div>
