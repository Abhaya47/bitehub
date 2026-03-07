<div x-data="{ isOpen: @entangle('isOpen') }" 
     x-show="isOpen" 
     class="fixed inset-0 z-[100001] flex items-center justify-center p-4" 
     style="display: none;"
     x-transition:enter="transition ease-out duration-300"
     x-transition:enter-start="opacity-0 scale-90"
     x-transition:enter-end="opacity-100 scale-100"
     x-transition:leave="transition ease-in duration-200"
     x-transition:leave-start="opacity-100 scale-100"
     x-transition:leave-end="opacity-0 scale-90">
    
    {{-- Backdrop --}}
    <div class="absolute inset-0 bg-[#0f172a]/80 backdrop-blur-sm" @click="isOpen = false"></div>

    {{-- Modal --}}
    <div class="relative bg-white w-full max-w-2xl rounded-[3rem] shadow-2xl overflow-hidden animate-fade-in-up">
        <div class="p-10">
            {{-- Header --}}
            <div class="flex items-center justify-between mb-8">
                <div>
                    <h3 class="text-3xl font-black text-[#0f172a] tracking-tight">Share your experience</h3>
                    <p class="text-gray-400 font-medium">Your reviews help others find the best spots.</p>
                </div>
                <button @click="isOpen = false" class="w-12 h-12 rounded-full bg-gray-50 flex items-center justify-center text-gray-400 hover:bg-[#F9443D] hover:text-white transition-all">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
            </div>

            <form wire:submit.prevent="submit" class="space-y-8">
                {{-- Rating Selector --}}
                <div class="space-y-3">
                    <label class="text-xs font-black uppercase tracking-[0.2em] text-gray-400">Rate your meal</label>
                    <div class="flex items-center gap-2">
                        @for($i = 1; $i <= 5; $i++)
                            <button type="button" 
                                    wire:click="setRating({{ $i }})"
                                    class="group transition-all duration-300 transform hover:scale-110">
                                <svg class="w-12 h-12 {{ $i <= $rating ? 'text-yellow-400 fill-current' : 'text-gray-100' }} hover:text-yellow-300 transition-colors" 
                                     viewBox="0 0 20 20">
                                    <path d="M10 1l2.6 6.3 6.9.6-5.3 4.6 1.6 6.8-5.8-3.5-5.8 3.5 1.6-6.8-5.3-4.6 6.9-.6L10 1z"/>
                                </svg>
                            </button>
                        @endfor
                        <span class="ml-4 text-2xl font-black text-[#0f172a]">{{ $rating }}.0</span>
                    </div>
                </div>

                {{-- Review Text --}}
                <div class="space-y-3">
                    <label class="text-xs font-black uppercase tracking-[0.2em] text-gray-400">Describe your experience</label>
                    <textarea 
                        wire:model="review"
                        placeholder="The food was amazing, especially the..."
                        class="w-full h-40 p-6 rounded-[2rem] bg-gray-50 border-none focus:ring-2 focus:ring-[#F9443D]/20 text-[#0f172a] font-medium placeholder-gray-300 transition-all"
                    ></textarea>
                    @error('review') <span class="text-xs font-bold text-[#F9443D]">{{ $message }}</span> @enderror
                </div>

                {{-- Image Upload --}}
                <div class="space-y-3">
                    <label class="text-xs font-black uppercase tracking-[0.2em] text-gray-400">Add some photos</label>
                    <div class="flex flex-wrap gap-4">
                        {{-- Preview --}}
                        @if ($images)
                            @foreach($images as $image)
                                <div class="relative w-24 h-24 rounded-2xl overflow-hidden group border-2 border-white shadow-md">
                                    <img src="{{ $image->temporaryUrl() }}" class="w-full h-full object-cover">
                                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                                    </div>
                                </div>
                            @endforeach
                        @endif

                        {{-- Upload Button --}}
                        <label class="w-24 h-24 rounded-2xl border-2 border-dashed border-gray-200 flex flex-col items-center justify-center text-gray-400 hover:border-[#F9443D] hover:text-[#F9443D] transition-all cursor-pointer bg-gray-50">
                            <input type="file" wire:model="images" multiple class="hidden">
                            <svg class="w-8 h-8 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                            <span class="text-[10px] font-black uppercase">Upload</span>
                        </label>
                    </div>
                    @error('images.*') <span class="text-xs font-bold text-[#F9443D]">{{ $message }}</span> @enderror
                    <div wire:loading wire:target="images" class="text-xs font-bold text-[#F9443D] animate-pulse">Uploading photos...</div>
                </div>

                {{-- Submit Button --}}
                <div class="pt-4">
                    <button type="submit" 
                            wire:loading.attr="disabled"
                            class="w-full py-5 bg-[#F9443D] text-white rounded-[2rem] font-black text-sm uppercase tracking-widest hover:bg-[#ff5a54] transition-all shadow-xl shadow-[#F9443D]/20 flex items-center justify-center gap-3">
                        <span wire:loading.remove wire:target="submit">Submit Review</span>
                        <span wire:loading wire:target="submit">Posting...</span>
                        <svg wire:loading.remove wire:target="submit" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 7l5 5m0 0l-5 5m5-5H6"></path></svg>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
