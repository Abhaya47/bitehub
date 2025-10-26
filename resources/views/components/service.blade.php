{{-- Padding on top and bottom --}}
<section class="py-20 bg-[#1a1a1a]">
    {{-- Header text --}}
    <div class="text-center mb-20">
        <p class="text-[#ff4444] text-sm font-semibold tracking-wider uppercase mb-2">
            OUR SERVICE
        </p>
        <h2 class="text-white text-3xl md:text-4xl font-bold">
            WE ARE TRYING TO CREATE FOODIE<br />COMMUNITY
        </h2>
    </div>

    {{-- Cards container --}}
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex flex-col md:flex-row justify-center gap-8">

            {{-- Card #2 (Left) --}}
            <div
                class="relative w-full md:w-[280px] h-[380px] bg-[#2a2a2a]  transition-shadow duration-300 cursor-pointer hover:shadow-lg hover:shadow-gray-400 rounded-[20px] shadow-lg flex flex-col items-center justify-end pb-10">
                {{-- Circle Image --}}
                <div class="absolute -top-16 w-32 h-32 rounded-full bg-white shadow-lg overflow-hidden">
                    <img src="{{ asset('images/no_avatar.jpg') }}" alt="Address Lounge"
                        class="w-full h-full object-cover">
                </div>
                {{-- Text Content --}}
                <div class="text-center pt-16">
                    <h3 class="text-white mb-2 font-bold text-[48px]">
                        #2
                    </h3>
                    <p class="text-gray-300 font-normal text-[14px]">
                        Address Lounge
                    </p>
                </div>
            </div>

            {{-- Card #1 (Center) --}}
            <div
                class="relative w-full md:w-[280px] h-[320px] bg-[#F6433F]  transition-shadow duration-300 cursor-pointer hover:shadow-lg hover:shadow-red-400 rounded-[20px] shadow-xl flex flex-col items-center justify-end pb-10 -mt-3">
                {{-- Circle Image --}}
                <div class="absolute -top-16 w-32 h-32 rounded-full bg-white shadow-lg overflow-hidden">
                    <img src="{{ asset('images/no_avatar.jpg') }}" alt="Amboo Momo" class="w-full h-full object-cover">
                </div>
                {{-- Text Content --}}
                <div class="text-center pt-16">
                    <h3 class="text-white mb-2 font-bold text-[56px]">
                        #1
                    </h3>
                    <p class="text-white font-normal text-[14px]">
                        Amboo Momo
                    </p>
                </div>
            </div>

            {{-- Card #3 (Right - Taller) --}}
            <div
                class="relative w-full md:w-[280px] h-[380px] bg-[#2a2a2a] transition-shadow duration-300 cursor-pointer hover:shadow-lg hover:shadow-gray-400 rounded-[20px] shadow-lg flex flex-col items-center justify-end pb-10">
                {{-- Circle Image --}}
                <div class="absolute -top-16 w-32 h-32 rounded-full bg-white shadow-lg overflow-hidden">
                    <img src="{{ asset('images/no_avatar.jpg') }}" alt="Jheer Sekuwa"
                        class="w-full h-full object-cover">
                </div>
                {{-- Text Content --}}
                <div class="text-center pt-16">
                    <h3 class="text-white mb-2 font-bold text-[48px]">
                        #3
                    </h3>
                    <p class="text-gray-300 font-normal text-[14px]">
                        Jheer Sekuwa
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
