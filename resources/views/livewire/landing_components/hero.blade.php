<section class="relative min-h-screen w-full bg-cover bg-center bg-no-repeat py-8 sm:py-12 overflow-hidden "
    style="background-image: url('{{ asset('images/wave_grey_background.png') }}');">
    <div class="container mx-auto relative h-full px-4 sm:px-6 lg:px-12">
        <div class="flex flex-col lg:flex-row items-center justify-between min-h-screen gap-8 lg:gap-12">

            <!-- Hero Text Content -->
            <div class="text-center lg:text-left max-w-full lg:max-w-[600px] z-10 py-8 lg:py-0">

                <!-- Welcome Text -->
                <h3
                    class="font-bold text-sm sm:text-base lg:text-[19.27px] leading-none tracking-[1.71px] uppercase text-[#F9443D] mb-4">
                    WELCOME TO BITEHUB
                </h3>

                <!-- Main Heading -->
                <h1
                    class="font-normal text-2xl sm:text-3xl md:text-4xl lg:text-[55.83px] leading-snug lg:leading-[79px] text-[#000000] mb-5">
                    Discover Restaurants and <span class="text-[#F9443D]">Delicious Food.</span>
                </h1>

                <!-- Description -->
                <p
                    class="font-normal text-sm sm:text-base lg:text-[16px] leading-relaxed lg:leading-[20px] tracking-[0.03em] text-[#000000] mb-8">
                    Explore the latest food hotspots in your city through curated videos by top influencers and
                    vloggers.
                    Bite Hub brings all the buzz from social media directly to your fingertips!
                </p>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row justify-center lg:justify-start gap-4 sm:gap-6">
                    <!-- About Us Button -->
                    <a href="/register">
                        <button
                            class="flex items-center justify-center gap-2 w-full sm:w-auto px-6 sm:w-[159px] h-[48px] bg-[#F9443D] rounded-full shadow-md hover:bg-[#d93a34] transition-colors">
                            <span class="font-semibold text-sm md:text-base text-white">Register Now</span>
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
                                <path d="M3.5 7H12.125" stroke="white" stroke-width="1.5" />
                                <path d="M9.41 3.29L13.125 7L9.41 10.71" stroke="white" stroke-width="1.5" />
                            </svg>
                        </button>
                    </a>

                    <!-- Learn More Button -->
                    <button
                        class="flex items-center justify-center gap-2 w-full sm:w-auto px-6 sm:w-[154px] h-[48px] border border-[#A1A7AD] rounded-full hover:border-[#F9443D] transition-colors group">
                        <span
                            class="font-semibold text-sm md:text-base text-[#A1A7AD] group-hover:text-[#F9443D] transition-colors">Learn
                            More</span>
                    </button>
                </div>
            </div>

            <!-- Hero Images Container -->
            <div class="relative w-full lg:w-1/2 h-[400px] sm:h-[500px] md:h-[600px] lg:h-[700px]">

                <!-- Pasta Image 1 (Center) -->
                <div
                    class="absolute left-1/2 -translate-x-1/2 sm:left-1/3 sm:translate-x-0 lg:left-[110px] xl:left-[150px] top-[30px] w-[200px] sm:w-[250px] md:w-[300px] lg:w-[320px] xl:w-[360px] h-[350px] sm:h-[450px] md:h-[520px] lg:h-[560px] xl:h-[620px] rounded-[20px] sm:rounded-[25px] lg:rounded-[34px] rotate-[2deg] lg:rotate-[4.96deg] overflow-visible z-30">
                    <!-- soft radial glow behind the card -->
                    <div class="absolute -inset-2 sm:-inset-3 rounded-[15px] sm:rounded-[30px] pointer-events-none"
                        style="background: radial-gradient(closest-side, rgba(249,68,61,0.55), rgba(246,64,63,0.25) 40%, transparent 70%); filter: blur(20px sm:blur(28px); z-index:0;">
                    </div>
                    <div class="relative overflow-hidden rounded-[20px] sm:rounded-[25px] lg:rounded-[34px] animate-[bounce_8s_ease-in-out_infinite] "
                        style="z-index:10;">
                        <img src="{{ asset('images/pasta_pan_1.png') }}" alt="Pasta Preparation"
                            class="w-full h-full object-cover rounded-[20px] sm:rounded-[25px] lg:rounded-[34px]">
                    </div>
                </div>

                <!-- Pasta Image 2 (Top Right) - Hidden on very small screens -->
                <div
                    class="absolute right-[-20px] sm:right-[-30px] lg:right-[-50px] top-[120px] sm:top-[100px] lg:top-[90px] w-[180px] sm:w-[220px] md:w-[280px] lg:w-[320px] md:w-[340px] xl:w-[380px] h-[250px] sm:h-[350px] md:h-[420px] lg:h-[460px] xl:h-[520px] rounded-[16px] sm:rounded-[20px] lg:rounded-[26px] -rotate-[3deg] lg:-rotate-[7.55deg] overflow-visible z-20">
                    <div class="absolute -inset-2 sm:-inset-3 rounded-[15px] sm:rounded-[20px] lg:rounded-[23px] pointer-events-none"
                        style="background: radial-gradient(closest-side, rgba(249,68,61,0.5), rgba(246,64,63,0.18) 40%, transparent 70%); filter: blur(20px sm:blur(30px; z-index:0;">
                    </div>
                    <div class="relative overflow-hidden rounded-[16px] sm:rounded-[20px] lg:rounded-[26px] animate-[bounce_8s_linear_infinite]"
                        style="z-index:10;">
                        <img src="{{ asset('images/pasta_pan_2.png') }}" alt="Delicious Pasta"
                            class="w-full h-full object-cover rounded-[16px] sm:rounded-[20px] lg:rounded-[26px]">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>