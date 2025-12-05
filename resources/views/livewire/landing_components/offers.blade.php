<section class="py-20 bg-[#ffffff]">
    <div class="max-w-7xl mx-auto px-4">
        <div class="relative w-full h-[431px] bg-[black] rounded-[20px] shadow-lg overflow-hidden">

            {{-- Content Container --}}
            <div class="flex items-center justify-between h-full px-12 md:px-16">

                {{-- Left Side - Text Content --}}
                <div class="flex-1 max-w-xl">
                    {{-- Offers Label --}}
                    <p class="text-[#F6433F] uppercase font-semibold text-[16px] mb-4 tracking-wide">
                        Offers
                    </p>

                    {{-- Main Heading --}}
                    <h2 class="text-white font-bold text-[42px] md:text-[48px] leading-tight mb-4">
                        Here are the latest<br />offer
                    </h2>

                    {{-- Description --}}
                    <p class="text-gray-400 text-[16px] mb-8 leading-relaxed">
                        Discover trending offers and discounts at<br />your fav places
                    </p>

                    {{-- CTA Button --}}
                    <button
                        class="bg-[#F6433F] hover:bg-[#E63935] text-white font-semibold px-8 py-3 rounded-full text-[16px] transition-all duration-300 shadow-lg hover:shadow-xl">
                        Explore Now
                    </button>
                </div>

                {{-- Right Side - Image --}}
                <div class="hidden md:flex flex-1 items-center justify-end">
                    <div class="relative w-[506px] h-[461px]">
                        <img src="{{ asset('images/hand_holding_tickets.png') }}" alt="Hand holding coupon"
                            class="w-full h-full object-contain">
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>
