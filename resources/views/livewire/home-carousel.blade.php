<div class="py-16 bg-[#faf9f6]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-end mb-10">
            <div>
                <h3 class="text-[#f9443d] font-bold tracking-widest uppercase text-sm mb-2">New Arrivals</h3>
                <h2 class="text-3xl font-extrabold text-[#111827]">Discover Recently Added Spots</h2>
            </div>
            <a href="/login" class="hidden md:block text-[#f9443d] font-bold hover:underline">Explore All</a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($restaurants as $restaurant)
                <div class="bg-white rounded-3xl overflow-hidden shadow-md hover:shadow-xl transition-shadow duration-300 border border-gray-100 group">
                    <div class="relative h-48 overflow-hidden">
                        <img src="{{ $restaurant->file_path ? asset('storage/' . $restaurant->file_path) : 'https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?q=80&w=2070&auto=format&fit=crop' }}" 
                             alt="{{ $restaurant->name }}" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        @if($restaurant->rating)
                            <div class="absolute top-4 right-4 bg-white/90 backdrop-blur px-3 py-1 rounded-full flex items-center gap-1 shadow-sm">
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                <span class="font-bold text-sm text-gray-800">{{ number_format($restaurant->rating->rating, 1) }}</span>
                            </div>
                        @endif
                    </div>
                    <div class="p-6">
                        <h4 class="text-xl font-bold text-[#111827] mb-2 group-hover:text-[#f9443d] transition-colors line-clamp-1">{{ $restaurant->name }}</h4>
                        <p class="text-gray-500 text-sm mb-4 line-clamp-2 h-10">{{ $restaurant->address }}</p>
                        
                        <div class="flex flex-wrap gap-2 mb-6">
                            @foreach($restaurant->tags->take(3) as $rtag)
                                <span class="text-[10px] font-bold uppercase tracking-wider px-2 py-1 bg-gray-100 text-gray-600 rounded-md">
                                    {{ $rtag->tag->name }}
                                </span>
                            @endforeach
                        </div>

                        <a href="/login" class="w-full inline-flex justify-center items-center px-4 py-2 bg-[#111827] text-white rounded-xl font-bold text-sm hover:bg-[#f9443d] transition-colors duration-300">
                            View Details
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        
        <div class="mt-12 text-center md:hidden">
            <a href="/login" class="inline-flex items-center gap-2 text-[#f9443d] font-bold">
                View All Restaurants
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
            </a>
        </div>
    </div>
</div>
