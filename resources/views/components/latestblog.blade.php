<section class = "py-20 bg-[#ffffff] ">
    {{-- This is the main content  wrapper --}}
    <div class = "max-w-7xl mx-auto px-4"> {{-- The content won't stretch wider than this. --}}
        <p class = "text-[#F6433F] uppercase font-semibold text-[16px] mb-4 tracking-wide">
            OUR BLOG
        </p>
        <p class = "text-black font-semibold text-[24px] md:text-[28px] leading-tight mb-4">
            Latest Post Blog
        </p>
        <div class = "grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-12">

            {{-- uses grid layout --}}
            <div class ="relative w-full bg-[#bdbdbd] rounded-[20px] shadow-lg overflow-hidden h-[400px] group">
                {{-- group allows you to create hover effects on child elements when hovering over parent --}}

                {{-- Image Place holder --}}
                <div class = "w-full h-[218px] bg-[#B8B8B8]"> </div>

                {{-- Category Badge --}}
                <button
                    class = "absolute top-[180px] right-6 bg-[#F6433F] hover:bg-[#E63935] text-white font-semibold px-5 py-2 rounded-full text-[14px] transition-all duration-300 shadow-lg ">
                    {{-- transition - smooth animation when properties change --}}
                    Food
                </button>

                {{-- Content Section --}}
                <div class = "p-6">
                    {{-- p-6 means padding on all sides(top,right,bottom,left) --}}
                    <div class = "flex items-center gap-4 text-[12px] text-[#4a4a4a] mb-3">
                        <span>October 23, 2025 Sahil </span>
                        <span>By Admin</span>
                    </div>

                    {{-- Title --}}
                    <h3 class = "text-[#1a1a1a] font-bold text-[18px] mb-3 leading-tight">
                        The Best Chicken Tinga Tacos
                    </h3>

                    {{-- Description --}}
                    <p class = "text-[#4a4a4a] text-[14px] leading-relaxed ">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.
                    </p>
                </div>
            </div>

            {{-- Blog Card Second --}}
            <div class="relative w-full bg-[#C4C4C4] rounded-[20px] shadow-lg overflow-hidden h-[400px] group">
                {{-- Image Placeholder --}}
                <div class="w-full h-[218px] bg-[#B8B8B8]"></div>

                {{-- Category Badge --}}
                <button
                    class="absolute top-[180px] right-6 bg-[#F6433F] hover:bg-[#E63935] text-white font-semibold px-5 py-2 rounded-full text-[14px] transition-all duration-300 shadow-lg">
                    News
                </button>

                {{-- Content --}}
                <div class="p-6">
                    <div class="flex items-center gap-4 text-[12px] text-[#4a4a4a] mb-3">
                        <span>November 18, 2025 Panda</span>
                        <span>By Admin</span>
                    </div>
                    <h3 class="text-[#1a1a1a] font-bold text-[18px] mb-3 leading-tight">
                        Avocado Grilled Salmon, Rich In Nutrients For The Body
                    </h3>
                    <p class="text-[#4a4a4a] text-[14px] leading-relaxed">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore.
                    </p>
                </div>
            </div>

            {{-- Blog Card Second --}}
            <div class="relative w-full bg-[#C4C4C4] rounded-[20px] shadow-lg overflow-hidden h-[400px] group">
                {{-- Image Placeholder --}}
                <div class="w-full h-[218px] bg-[#B8B8B8]"></div>

                {{-- Category Badge --}}
                <button
                    class="absolute top-[180px] right-6 bg-[#F6433F] hover:bg-[#E63935] text-white font-semibold px-5 py-2 rounded-full text-[14px] transition-all duration-300 shadow-lg">
                    News
                </button>

                {{-- Content --}}
                <div class="p-6">
                    <div class="flex items-center gap-4 text-[12px] text-[#4a4a4a] mb-3">
                        <span>November 18, 2025 Panda</span>
                        <span>By Admin</span>
                    </div>
                    <h3 class="text-[#1a1a1a] font-bold text-[18px] mb-3 leading-tight">
                        Avocado Grilled Salmon, Rich In Nutrients For The Body
                    </h3>
                    <p class="text-[#4a4a4a] text-[14px] leading-relaxed">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore.
                    </p>
                </div>
            </div>
        </div>
        {{-- Contact CTA --}}
        <div
            class="mt-16 bg-white rounded-[20px] shadow-xl p-4 md:p-8 flex flex-col md:flex-row items-center justify-between">
            <p class="text-[#9ca3af] text-[18px] md:text-[20px] font-medium mb-6 md:mb-0">
                Want to contact with us?
            </p>
            <button
                class="bg-[#F6433F] hover:bg-[#E63935] text-white font-semibold px-8 py-4 rounded-full text-[16px] transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105">
                Contact Us
            </button>
        </div>
    </div>
</section>
