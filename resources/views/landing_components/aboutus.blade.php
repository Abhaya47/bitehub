<section id="about" class="py-20">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            
            {{-- LEFT - FEATURED IMAGE --}}
            <div class="order-2 lg:order-1">
                <div class="w-full h-96 rounded-3xl overflow-hidden shadow-2xl">
                    <img src="{{ asset('images/chef.png') }}" alt="Restaurant ambiance" class="w-full h-full object-cover">
                </div>
            </div>
            
            {{-- RIGHT - CONTENT --}}
            <div class="order-1 lg:order-2">
                <span class="text-primary text-md font-semibold tracking-widest uppercase inline-block mb-4 text-red-500">
                    About Us
                </span>
                
                <div class="relative inline-block mb-8">
                    <h2 class="text-4xl md:text-5xl text-black leading-tight">
                        Here are some top restaurants where <b> you can either dine in or take away! </b>
                    </h2>
                    <div class="absolute -bottom-4 left-0 w-20 h-1 bg-primary"></div>
                </div>
                
                <p class="text-black text-lg leading-relaxed mb-8 mt-12">
                    We provide the most trending local places, restaurant places out there nearby
                </p>
                
                {{-- FOUNDER CARD --}}
                <div class="flex items-center gap-6">
                    <div class="w-16 h-16 rounded-full bg-gradient-to-br from-primary to-secondary flex-shrink-0 overflow-hidden border-1 border-primary">
                        <img src="{{ asset('images/no_avatar.jpg') }}" alt="Founder" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <h3 class="text-bold font-bold text-lg">Monkey King</h3>
                        <p class="text-primary text-xs font-semibold tracking-wider uppercase text-red-500">Founder</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>