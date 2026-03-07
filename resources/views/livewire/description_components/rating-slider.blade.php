<div class="space-y-12">
    {{-- Unified Review Header --}}
    <div class="flex flex-col md:flex-row items-center gap-12 p-10 bg-gray-50 rounded-[3rem] border border-gray-100 shadow-inner">
        {{-- Big Rating --}}
        <div class="text-center md:border-r border-gray-200 md:pr-12">
            <p class="text-[10px] font-black uppercase tracking-[0.2em] text-gray-400 mb-4">Average Rating</p>
            <h4 class="text-8xl font-black text-[#0f172a] leading-none mb-4">{{ $averageRating }}</h4>
            <div class="flex justify-center gap-1 mb-4">
                @for($i=1; $i<=5; $i++)
                    <svg class="w-6 h-6 {{ $i <= round($averageRating) ? 'text-yellow-400' : 'text-gray-200' }} fill-current" viewBox="0 0 20 20"><path d="M10 1l2.6 6.3 6.9.6-5.3 4.6 1.6 6.8-5.8-3.5-5.8 3.5 1.6-6.8-5.3-4.6 6.9-.6L10 1z"/></svg>
                @endfor
            </div>
            <p class="text-sm font-bold text-[#0f172a]">{{ $count }} Verified Reviews</p>
        </div>

        {{-- Rating Bars --}}
        <div class="flex-1 w-full space-y-4">
            @php
                $bars = [
                    5 => ['count' => $five, 'label' => 'Excellent'],
                    4 => ['count' => $four, 'label' => 'Very Good'],
                    3 => ['count' => $three, 'label' => 'Average'],
                    2 => ['count' => $two, 'label' => 'Poor'],
                    1 => ['count' => $one, 'label' => 'Terrible']
                ];
            @endphp
            @foreach($bars as $star => $data)
                <div class="flex items-center gap-6 group">
                    <span class="text-[10px] font-black text-[#0f172a] w-16 uppercase tracking-widest opacity-40 group-hover:opacity-100 transition-opacity">{{ $data['label'] }}</span>
                    <div class="flex-1 h-3 bg-white rounded-full overflow-hidden shadow-sm border border-gray-100">
                        @php $percentage = $count > 0 ? ($data['count'] / $count) * 100 : 0; @endphp
                        <div class="h-full bg-gradient-to-r from-[#F9443D] to-orange-400 transition-all duration-1000 rounded-full" style="width: {{ $percentage }}%"></div>
                    </div>
                    <span class="text-xs font-black text-[#0f172a] w-8 text-right opacity-40 group-hover:opacity-100">{{ $data['count'] }}</span>
                </div>
            @endforeach
        </div>

        {{-- Call to Action --}}
        <div class="md:pl-12 md:border-l border-gray-200 text-center md:text-left">
            <h5 class="text-lg font-black text-[#0f172a] mb-2">Had a meal here?</h5>
            <p class="text-sm text-gray-400 font-medium mb-6">Share your experience with the BiteHub community.</p>
            <button wire:click="$dispatch('openReviewForm')" class="px-8 py-4 bg-[#0f172a] text-white rounded-2xl font-black text-xs uppercase tracking-widest hover:bg-[#F9443D] transition-all shadow-xl shadow-gray-200">
                Write a Review
            </button>
        </div>
    </div>
</div>
