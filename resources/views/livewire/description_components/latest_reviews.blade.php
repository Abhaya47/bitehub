<div class="mt-16 space-y-8">
    <div class="flex items-center justify-between">
        <h5 class="text-2xl font-black text-[#0f172a] tracking-tight">Community Feedback</h5>
        <div class="flex items-center gap-2">
            <span class="text-xs font-black text-gray-400 uppercase tracking-widest">Sort by:</span>
            <select class="bg-transparent border-none text-xs font-black text-[#F9443D] uppercase tracking-widest focus:ring-0 cursor-pointer">
                <option>Newest First</option>
                <option>Highest Rated</option>
            </select>
        </div>
    </div>

    @if(count($reviews) > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            @foreach($reviews as $review)
                <div class="p-8 rounded-[2.5rem] bg-white border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-500 group">
                    <div class="flex items-start justify-between mb-6">
                        <div class="flex items-center gap-4">
                            <div class="w-14 h-14 rounded-2xl bg-gray-50 overflow-hidden border-2 border-white shadow-md">
                                <img src="https://i.pravatar.cc/150?u={{ $review['user']['id'] }}" alt="{{ $review['user']['name'] }}" class="w-full h-full object-cover">
                            </div>
                            <div>
                                <h6 class="font-black text-[#0f172a] leading-none mb-1">{{ $review['user']['name'] }}</h6>
                                <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">Local Guide</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <div class="flex gap-0.5 mb-1">
                                @for($i=1; $i<=5; $i++)
                                    <svg class="w-3.5 h-3.5 {{ $i <= $review['rating'] ? 'text-yellow-400' : 'text-gray-100' }} fill-current" viewBox="0 0 20 20"><path d="M10 1l2.6 6.3 6.9.6-5.3 4.6 1.6 6.8-5.8-3.5-5.8 3.5 1.6-6.8-5.3-4.6 6.9-.6L10 1z"/></svg>
                                @endfor
                            </div>
                            <p class="text-[10px] font-black text-gray-300 uppercase tracking-widest">{{ \Carbon\Carbon::parse($review['created_at'])->diffForHumans() }}</p>
                        </div>
                    </div>

                    <p class="text-gray-500 leading-relaxed font-medium mb-6 italic">
                        "{{ $review['review'] }}"
                    </p>

                    <div class="flex items-center gap-6 pt-6 border-t border-gray-50">
                        <button class="flex items-center gap-2 text-gray-400 hover:text-[#F9443D] transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" /></svg>
                            <span class="text-[10px] font-black uppercase tracking-widest">Helpful</span>
                        </button>
                        <button class="flex items-center gap-2 text-gray-400 hover:text-[#0f172a] transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" /></svg>
                            <span class="text-[10px] font-black uppercase tracking-widest">Reply</span>
                        </button>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="text-center py-20 bg-gray-50 rounded-[2.5rem] border-2 border-dashed border-gray-100">
            <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center mx-auto mb-6 shadow-sm">
                <svg class="w-10 h-10 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" /></svg>
            </div>
            <h4 class="text-[#0f172a] font-black text-xl mb-2">No reviews yet</h4>
            <p class="text-gray-400 font-medium">Be the first to share your experience!</p>
        </div>
    @endif
</div>
