<div class="w-full">
    <div class="w-full bg-white p-8 rounded-xl shadow-sm border border-gray-100">
        {{-- Section Title --}}
        <h2 class="text-[22px] font-normal leading-[28px] text-[#004225] mb-5">
            Write a Review
        </h2>

        {{-- Divider --}}
        <hr class="border-t border-[rgba(197,197,197,0.5)] mb-8">

        <div class="relative flex justify-between items-center mb-12 px-4">
            <div class="absolute top-6 left-10 right-10 h-[1px] bg-gray-200 -z-0"></div>
            @php
            $ratings = [
            1 => ['label' => 'Bad', 'val' => '(1/5)'],
            2 => ['label' => 'So-so', 'val' => '(2/5)'],
            3 => ['label' => 'Ok', 'val' => '(3/5)'],
            4 => ['label' => 'Good', 'val' => '(4/5)'],
            5 => ['label' => 'Great', 'val' => '(5/5)'],
            ];
            @endphp

            @foreach($ratings as $index => $data)
            <div class="rating-item relative z-10 flex flex-col items-center group cursor-pointer" data-rating="{{ $index }}">
                <div class="star-box w-12 h-12 flex items-center justify-center rounded-2xl transition-all duration-200 border border-gray-300 bg-white text-gray-400">
                    <svg class="star-svg w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                </div>
                <div class="mt-3 text-center">
                    <p class="rating-label text-gray-400 font-medium text-xs md:text-sm">
                        {{ $data['label'] }} <span class="whitespace-nowrap">{{ $data['val'] }}</span>
                    </p>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Success and Error Messages -->
        @if($successMessage)
        <div class="mb-6 p-4 bg-green-100 border border-green-400 text-green-700 rounded-xl">
            {{ $successMessage }}
        </div>
        @endif

        @if($errorMessage)
        <div class="mb-6 p-4 bg-red-100 border border-red-400 text-red-700 rounded-xl">
            {{ $errorMessage }}
        </div>
        @endif

        <form wire:submit="submit" class="space-y-8">
            <input type="hidden" wire:model="rating" id="ratingInput" value="{{ $rating }}">

            <div class="relative border border-gray-300 rounded-2xl p-4 focus-within:border-[#F9423C] transition-colors">
                <label class="absolute -top-3 left-4 bg-white px-2 text-sm font-medium text-gray-500">Headline</label>
                <input
                    type="text"
                    id="headlineInput"
                    wire:model="headline"
                    maxlength="50"
                    class="w-full border-none focus:ring-0 text-gray-800 text-lg bg-transparent"
                    placeholder="Enter your headline">
                @error('headline')
                <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                @enderror
                <div class="absolute bottom-2 right-4 text-[10px] font-bold text-gray-400" id="headlineCounter">0/50</div>
            </div>

            <div class="relative border border-gray-300 rounded-2xl p-4 focus-within:border-[#F9423C] transition-colors">
                <label class="absolute -top-3 left-4 bg-white px-2 text-sm font-medium text-gray-500">Review</label>
                <textarea
                    id="reviewTextarea"
                    wire:model="review"
                    rows="6"
                    maxlength="255"
                    class="w-full border-none focus:ring-0 text-gray-700 leading-relaxed bg-transparent resize-none"
                    placeholder="Write your review here..."></textarea>
                @error('review')
                <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                @enderror
                <div class="absolute bottom-2 right-4 flex items-center space-x-2">
                    <span id="charCounter" class="text-xs font-bold text-gray-400">0/255</span>
                    <div class="text-gray-300">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M19 19L5 5M19 13L11 5M19 7L17 5" stroke-width="2" stroke-linecap="round" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Image Upload Section -->
            <div class="relative border border-gray-300 rounded-2xl p-4 focus-within:border-[#F9423C] transition-colors">
                <label class="absolute -top-3 left-4 bg-white px-2 text-sm font-medium text-gray-500">Restaurant Images (Optional - Max 5 images)</label>

                <!-- File Input -->
                <div class="mb-4">
                    <input
                        type="file"
                        wire:model="images"
                        multiple
                        accept="image/*"
                        class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-[#F9423C] file:text-white hover:file:bg-[#E83A32] cursor-pointer">
                    @error('images.*')
                    <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                    @enderror
                    <p class="text-xs text-gray-500 mt-2">Supported formats: JPEG, PNG, JPG, GIF (Max 2MB per image)</p>
                </div>

                <!-- Image Preview Grid -->
                @if(!empty($imagePreviews))
                <div class="grid grid-cols-2 md:grid-cols-3 gap-3">
                    @foreach($imagePreviews as $index => $preview)
                    <div class="relative group">
                        <img src="{{ $preview }}" alt="Preview {{ $index + 1 }}" class="w-full h-24 object-cover rounded-lg border border-gray-200">
                        <button
                            type="button"
                            wire:click="removeImage({{ $index }})"
                            class="absolute top-1 right-1 bg-red-500 text-white rounded-full w-6 h-6 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-200 hover:bg-red-600">
                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                        <div class="absolute bottom-1 left-1 bg-black bg-opacity-50 text-white text-xs px-2 py-1 rounded">
                            {{ $index + 1 }}
                        </div>
                    </div>
                    @endforeach
                </div>
                @endif
            </div>

            <button type="submit" class="w-full bg-[#F9423C] text-white font-bold py-4 rounded-2xl shadow-lg shadow-[#F9423C]/20 hover:opacity-90 active:scale-[0.98] transition-all" wire:target="submit" wire:loading.attr="disabled">
                <span wire:loading.remove wire:target="submit">Submit Review</span>
                <span wire:loading wire:target="submit">
                    <svg class="animate-spin h-5 w-5 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    Submitting...
                </span>
            </button>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const ratingItems = document.querySelectorAll('.rating-item');
            const ratingInput = document.getElementById('ratingInput');

            const headlineInput = document.getElementById('headlineInput');
            const headlineCounter = document.getElementById('headlineCounter');

            const textarea = document.getElementById('reviewTextarea');
            const charCounter = document.getElementById('charCounter');

            const BRAND_COLOR = '#F9423C';

            // --- Rating Selection Logic ---
            function updateRatingUI(selectedRating) {
                ratingItems.forEach(item => {
                    const val = item.getAttribute('data-rating');
                    const box = item.querySelector('.star-box');
                    const label = item.querySelector('.rating-label');
                    if (val == selectedRating) {
                        box.className = `star-box w-12 h-12 flex items-center justify-center rounded-2xl transition-all duration-200 bg-[#F9423C] shadow-lg shadow-[#F9423C]/20 ring-4 ring-[#F9423C]/10 text-white`;
                        label.className = `rating-label mt-3 text-center text-[#F9423C] font-bold text-xs md:text-sm`;
                    } else {
                        box.className = 'star-box w-12 h-12 flex items-center justify-center rounded-2xl transition-all duration-200 border border-gray-300 bg-white text-gray-400';
                        label.className = 'rating-label mt-3 text-center text-gray-400 font-medium text-xs md:text-sm';
                    }
                });
            }

            ratingItems.forEach(item => {
                item.addEventListener('click', () => {
                    const val = item.getAttribute('data-rating');
                    ratingInput.value = val;
                    // Trigger Livewire model update
                    ratingInput.dispatchEvent(new Event('input', {
                        bubbles: true
                    }));
                    updateRatingUI(val);
                });
            });

            // --- Generic Truncation & Counter Function ---
            function validateField(inputElement, counterElement, max) {
                if (inputElement.value.length > max) {
                    inputElement.value = inputElement.value.substring(0, max);
                }

                const current = inputElement.value.length;
                counterElement.textContent = `${current}/${max}`;

                if (current >= max) {
                    counterElement.style.color = BRAND_COLOR;
                } else {
                    counterElement.style.color = '';
                }
            }

            // Listeners
            headlineInput.addEventListener('input', () => validateField(headlineInput, headlineCounter, 50));
            textarea.addEventListener('input', () => validateField(textarea, charCounter, 255));

            // Initial setup
            updateRatingUI(4);
        });
    </script>