<div class="space-y-4">
    @if ($offers && $offers->count() > 0)
        @foreach ($offers as $offer)
            <div class="relative p-6 rounded-3xl bg-gradient-to-br from-white to-gray-50 border border-gray-100 shadow-sm hover:shadow-md transition-all group overflow-hidden">
                {{-- Decorative element --}}
                <div class="absolute top-0 right-0 w-24 h-24 bg-[#F9443D]/5 rounded-bl-full -mr-8 -mt-8 group-hover:bg-[#F9443D]/10 transition-colors"></div>
                
                <div class="relative z-10 flex flex-col gap-4">
                    <div class="flex items-center justify-between">
                        <div class="px-3 py-1 rounded-full bg-[#F9443D]/10 text-[#F9443D] text-[10px] font-black uppercase tracking-widest">
                            Limited Time
                        </div>
                        <span class="text-[#F9443D] text-2xl font-black">
                            @if ($offer->discount_type == 'percentage')
                                {{ intval($offer->discount_value) }}% <span class="text-sm">OFF</span>
                            @else
                                <span class="text-sm">रु</span> {{ intval($offer->discount_value) }} <span class="text-sm uppercase">OFF</span>
                            @endif
                        </span>
                    </div>
                    
                    <div>
                        <h4 class="text-[#0f172a] font-black text-lg leading-tight mb-1">{{ $offer->title }}</h4>
                        <p class="text-gray-400 text-sm font-medium leading-relaxed">
                            {{ $offer->description }}
                        </p>
                    </div>

                    <div class="pt-4 border-t border-gray-100 flex items-center gap-3 text-gray-400">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        <span class="text-[10px] font-bold uppercase tracking-widest">
                            Valid until {{ \Carbon\Carbon::parse($offer->end_at)->format('M d, Y') }}
                        </span>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <div class="text-center py-12 px-6 rounded-[2rem] border-2 border-dashed border-gray-100">
            <div class="w-16 h-16 bg-gray-50 rounded-full flex items-center justify-center mx-auto mb-4">
                <svg class="w-8 h-8 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" /></svg>
            </div>
            <p class="text-gray-400 font-bold text-sm uppercase tracking-widest">No active offers</p>
        </div>
    @endif
</div>
