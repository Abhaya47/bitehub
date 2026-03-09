<div class="mt-16 space-y-8" x-data="{ 
    showFullImage: false, 
    fullImageUrl: '' 
}">
    <div class="flex items-center justify-between">
        <h5 class="text-2xl font-black text-[#0f172a] tracking-tight">Community Feedback</h5>
        <div class="flex items-center gap-2">
            <span class="text-xs font-black text-gray-400 uppercase tracking-widest">Sort by:</span>
            <select wire:model.live="sortBy" class="bg-transparent border-none text-xs font-black text-[#F9443D] uppercase tracking-widest focus:ring-0 cursor-pointer">
                <option value="newest">Newest First</option>
                <option value="highest">Highest Rated</option>
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
                                <img src="https://i.pravatar.cc/150?u={{ $review->user->id }}" alt="{{ $review->user->name }}" class="w-full h-full object-cover">
                            </div>
                            <div>
                                <h6 class="font-black text-[#0f172a] leading-none mb-1">{{ $review->user->name }}</h6>
                                <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">Local Guide</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <div class="flex gap-0.5 mb-1">
                                @for($i=1; $i<=5; $i++)
                                    <svg class="w-3.5 h-3.5 {{ $i <= $review->rating ? 'text-yellow-400' : 'text-gray-100' }} fill-current" viewBox="0 0 20 20"><path d="M10 1l2.6 6.3 6.9.6-5.3 4.6 1.6 6.8-5.8-3.5-5.8 3.5 1.6-6.8-5.3-4.6 6.9-.6L10 1z"/></svg>
                                @endfor
                            </div>
                            <p class="text-[10px] font-black text-gray-300 uppercase tracking-widest">{{ $review->created_at->diffForHumans() }}</p>
                        </div>
                    </div>

                    <p class="text-gray-500 leading-relaxed font-medium mb-6 italic">
                        "{{ $review->review }}"
                    </p>

                    {{-- Review Photos --}}
                    @if(!empty($review->file_path))
                        <div class="flex gap-3 overflow-x-auto pb-6 no-scrollbar">
                            @php
                                $reviewGallery = collect($review->file_path)->map(function($path) use ($review) {
                                    return ['file_url' => Storage::url($path), 'title' => 'Review by ' . $review->user->name];
                                })->toArray();
                            @endphp
                            @foreach($review->file_path as $index => $path)
                                <div class="relative flex-none w-24 h-24 rounded-2xl overflow-hidden cursor-pointer group/img" 
                                     onclick="openGalleryModal({{ json_encode($reviewGallery) }}, {{ $index }})">
                                    <img src="{{ Storage::url($path) }}" class="w-full h-full object-cover transition-transform duration-500 group-hover/img:scale-110">
                                    <div class="absolute inset-0 bg-black/20 opacity-0 group-hover/img:opacity-100 transition-opacity flex items-center justify-center">
                                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif

                    <div class="flex items-center gap-6 pt-6 border-t border-gray-50">
                        <button wire:click="toggleHelpful({{ $review->id }})" class="flex items-center gap-2 {{ $review->helpfulUsers->isNotEmpty() ? 'text-[#F9443D]' : 'text-gray-400' }} hover:text-[#F9443D] transition-colors">
                            <svg class="w-4 h-4" fill="{{ $review->helpfulUsers->isNotEmpty() ? 'currentColor' : 'none' }}" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" /></svg>
                            <span class="text-[10px] font-black uppercase tracking-widest">Helpful ({{ $review->helpful_count }})</span>
                        </button>
                        <button wire:click="setReplyingTo({{ $review->id }})" class="flex items-center gap-2 {{ $replyingTo === $review->id ? 'text-[#0f172a]' : 'text-gray-400' }} hover:text-[#0f172a] transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" /></svg>
                            <span class="text-[10px] font-black uppercase tracking-widest">Reply ({{ $review->replies->count() }})</span>
                        </button>
                    </div>

                    {{-- Reply Form --}}
                    @if($replyingTo === $review->id)
                        <div class="mt-6 p-6 rounded-3xl bg-gray-50 border border-gray-100 animate-fade-in">
                            <textarea wire:model="replyText" 
                                      placeholder="Write your reply..."
                                      class="w-full p-4 rounded-2xl bg-white border-none focus:ring-2 focus:ring-[#F9443D]/20 text-sm font-medium mb-4 h-24"></textarea>
                            <div class="flex justify-end gap-3">
                                <button wire:click="setReplyingTo(null)" class="px-4 py-2 text-[10px] font-black uppercase tracking-widest text-gray-400">Cancel</button>
                                <button wire:click="submitReply({{ $review->id }})" class="px-6 py-2 bg-[#F9443D] text-white rounded-xl text-[10px] font-black uppercase tracking-widest shadow-lg shadow-[#F9443D]/20">Post Reply</button>
                            </div>
                            @error('replyText') <span class="text-[10px] font-bold text-[#F9443D] mt-2 block">{{ $message }}</span> @enderror
                        </div>
                    @endif

                    {{-- Nested Replies --}}
                    @if($review->replies->count() > 0)
                        <div class="mt-8 space-y-6 ml-6 border-l-2 border-gray-50 pl-6">
                            @foreach($review->replies as $reply)
                                <div class="relative">
                                    <div class="flex items-center gap-3 mb-2">
                                        <div class="w-8 h-8 rounded-xl bg-gray-50 overflow-hidden border-2 border-white shadow-sm">
                                            <img src="https://i.pravatar.cc/150?u={{ $reply->user->id }}" class="w-full h-full object-cover">
                                        </div>
                                        <h6 class="font-black text-[#0f172a] text-xs">{{ $reply->user->name }}</h6>
                                        <span class="text-[10px] font-bold text-gray-300 uppercase tracking-widest">{{ $reply->created_at->diffForHumans() }}</span>
                                    </div>
                                    <p class="text-gray-500 text-sm font-medium leading-relaxed italic">
                                        "{{ $reply->review }}"
                                    </p>
                                </div>
                            @endforeach
                        </div>
                    @endif
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
