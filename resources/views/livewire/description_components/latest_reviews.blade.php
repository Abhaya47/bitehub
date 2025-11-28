{{-- Latest Reviews Section --}}
<div class="w-full max-w-full mx-auto px-4 py-6">
    <div class="flex flex-col gap-4">
        {{-- Row 1: Two Review Cards --}}
        <div class="flex flex-wrap justify-center gap-4">
            @if ($reviews->count() > 0)
            @foreach ($reviews->take(2) as $review)
            {{-- Review Card --}}
            <div class="bg-white rounded-xl p-5 shadow-sm flex-1 min-w-[320px] max-w-[677.5px]">
                {{-- Header: Profile and Rating --}}
                <div class="flex justify-between items-center mb-3">
                    {{-- Profile Section --}}
                    <div class="flex items-center gap-4">
                        {{-- Profile Image --}}
                        <div class="w-10 h-10 rounded-full overflow-hidden bg-gray-200">
                            <img src="{{ $review['user']['name'] ?? asset('images/no_avatar.jpg') }}"
                                alt={{ $review['user']['name'] }} class="w-full h-full object-cover">
                        </div>
                        {{-- Name and Reviews Count --}}
                        <div>
                            <h3 class="text-sm font-medium leading-4 text-[#202020] mb-1">
                                {{ $review['user']['name'] }}
                            </h3>
                            <p class="text-xs font-normal leading-[14px] text-[#7E7E7E]">
                            </p>
                        </div>
                    </div>

                    {{-- Rating --}}
                    <div class="flex items-center gap-1.5">
                        <span class="text-xs font-medium leading-[14px] text-[#F6433F]">
                            {{ $review['rating'] }}
                        </span>
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M6 0.5L7.34708 4.1459H11.0846L8.36878 6.2082L9.71585 9.8541L6 7.7918L2.28415 9.8541L3.63122 6.2082L0.915384 4.1459H4.65292L6 0.5Z"
                                fill="#F6433F" />
                        </svg>
                    </div>
                </div>

                {{-- Review Text --}}
                <p class="text-xs font-normal leading-[14px] text-[#5F5F5F] text-justify mb-3">
                    {{ $review['review'] }}
                </p>

                {{-- Review Images --}}
                @if($review->file_path && is_array($review->file_path))
                <div class="flex items-center gap-2 mt-3">
                    @php
                    $imageUrls = array_map(fn($p) => asset('storage/'.$p), $review->file_path);
                    @endphp
                    @foreach($review->file_path as $index => $image)
                    <button onclick="openReviewModal({{ json_encode($imageUrls) }}, {{ $index }})"
                        class="w-[70px] h-[61px] rounded-lg overflow-hidden hover:opacity-90 transition-opacity">
                        <img src="{{ asset('storage/' . $image) }}" alt="Review Image"
                            class="w-full h-full object-cover">
                    </button>
                    @endforeach
                </div>
                @endif
            </div>
            @endforeach
            @else
            {{-- Fallback static cards if no reviews --}}
            {{-- Review Card 1 --}}
            <div class="bg-white rounded-xl p-5 shadow-sm flex-1 min-w-[320px] max-w-[677.5px]">
                {{-- Header: Profile and Rating --}}
                <div class="flex justify-between items-center mb-3">
                    {{-- Profile Section --}}
                    <div class="flex items-center gap-4">
                        {{-- Profile Image --}}
                        <div class="w-10 h-10 rounded-full overflow-hidden bg-gray-200">
                            <img src="{{ asset('images/no_avatar.jpg') }}" alt="Ram Bahadur"
                                class="w-full h-full object-cover">
                        </div>
                        {{-- Name and Reviews Count --}}
                        <div>
                            <h3 class="text-sm font-medium leading-4 text-[#202020] mb-1">
                                Ram Bahadur
                            </h3>
                            <p class="text-xs font-normal leading-[14px] text-[#7E7E7E]">
                                Reviewed 45 restaurants
                            </p>
                        </div>
                    </div>

                    {{-- Rating --}}
                    <div class="flex items-center gap-1.5">
                        <span class="text-xs font-medium leading-[14px] text-[#F6433F]">
                            4.5
                        </span>
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M6 0.5L7.34708 4.1459H11.0846L8.36878 6.2082L9.71585 9.8541L6 7.7918L2.28415 9.8541L3.63122 6.2082L0.915384 4.1459H4.65292L6 0.5Z"
                                fill="#F6433F" />
                        </svg>
                    </div>
                </div>

                {{-- Review Text --}}
                <p class="text-xs font-normal leading-[14px] text-[#5F5F5F] text-justify mb-3">
                    If you wanna take a break from Kathmandu you find a great location and hospitality in this
                    rooftop in
                    the heart of the town. Food is really tasty and staff really great!
                </p>

                {{-- Review Images --}}
                <div class="flex items-center gap-2">
                    <div class="w-[70px] h-[61px] rounded-lg overflow-hidden">
                        <img src="{{ asset('images/review-img-1.jpg') }}" alt="Review Image 1"
                            class="w-full h-full object-cover">
                    </div>
                    <div class="w-[70px] h-[61px] rounded-lg overflow-hidden">
                        <img src="{{ asset('images/review-img-2.jpg') }}" alt="Review Image 2"
                            class="w-full h-full object-cover">
                    </div>
                    <div class="w-[70px] h-[61px] rounded-lg overflow-hidden">
                        <img src="{{ asset('images/review-img-3.jpg') }}" alt="Review Image 3"
                            class="w-full h-full object-cover">
                    </div>
                </div>
            </div>

            {{-- Review Card 2 --}}
            <div class="bg-white rounded-xl p-5 shadow-sm flex-1 min-w-[320px] max-w-[677.5px]">
                {{-- Header: Profile and Rating --}}
                <div class="flex justify-between items-center mb-3">
                    {{-- Profile Section --}}
                    <div class="flex items-center gap-4">
                        {{-- Profile Image --}}
                        <div class="w-10 h-10 rounded-full overflow-hidden bg-gray-200">
                            <img src="{{ asset('images/no_avatar.jpg') }}" alt="Prashant Kumar Singh"
                                class="w-full h-full object-cover">
                        </div>
                        {{-- Name and Reviews Count --}}
                        <div>
                            <h3 class="text-sm font-medium leading-4 text-[#202020] mb-1">
                                Prashant Kumar Singh
                            </h3>
                            <p class="text-xs font-normal leading-[14px] text-[#7E7E7E]">
                                Reviewed 45 restaurants
                            </p>
                        </div>
                    </div>

                    {{-- Rating --}}
                    <div class="flex items-center gap-1.5">
                        <span class="text-xs font-medium leading-[14px] text-[#F6433F]">
                            4.5
                        </span>
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M6 0.5L7.34708 4.1459H11.0846L8.36878 6.2082L9.71585 9.8541L6 7.7918L2.28415 9.8541L3.63122 6.2082L0.915384 4.1459H4.65292L6 0.5Z"
                                fill="#F6433F" />
                        </svg>
                    </div>
                </div>

                {{-- Review Text --}}
                <p class="text-xs font-normal leading-[14px] text-[#5F5F5F] text-justify mb-3">
                    If you wanna take a break from Kathmandu you find a great location and hospitality in this
                    rooftop in
                    the heart of the town. Food is really tasty and staff really great!
                </p>

                {{-- Review Images --}}
                <div class="flex items-center gap-2">
                    <div class="w-[70px] h-[61px] rounded-lg overflow-hidden">
                        <img src="{{ asset('images/review-img-1.jpg') }}" alt="Review Image 1"
                            class="w-full h-full object-cover">
                    </div>
                    <div class="w-[70px] h-[61px] rounded-lg overflow-hidden">
                        <img src="{{ asset('images/review-img-2.jpg') }}" alt="Review Image 2"
                            class="w-full h-full object-cover">
                    </div>
                    <div class="w-[70px] h-[61px] rounded-lg overflow-hidden">
                        <img src="{{ asset('images/review-img-3.jpg') }}" alt="Review Image 3"
                            class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
            @endif
        </div>

        {{-- Row 2: Two Review Cards --}}
        <div class="flex flex-wrap justify-center gap-4">
            @if ($reviews->count() > 0)
            @foreach ($reviews->skip(2)->take(2) as $review)
            {{-- Review Card --}}
            <div class="bg-white rounded-xl p-5 shadow-sm flex-1 min-w-[320px] max-w-[677.5px]">
                {{-- Header: Profile and Rating --}}
                <div class="flex justify-between items-center mb-3">
                    {{-- Profile Section --}}
                    <div class="flex items-center gap-4">
                        {{-- Profile Image --}}
                        <div class="w-10 h-10 rounded-full overflow-hidden bg-gray-200">
                            <img src="{{ $review->user->profile_image ?? asset('images/no_avatar.jpg') }}"
                                alt="{{ $review['user']['name'] }}" class="w-full h-full object-cover">
                        </div>
                        {{-- Name and Reviews Count --}}
                        <div>
                            <h3 class="text-sm font-medium leading-4 text-[#202020] mb-1">
                                {{ $review['user']['name'] }}
                            </h3>
                            <p class="text-xs font-normal leading-[14px] text-[#7E7E7E]">
                                Reviewed {{ 45 }} restaurants
                            </p>
                        </div>
                    </div>

                    {{-- Rating --}}
                    <div class="flex items-center gap-1.5">
                        <span class="text-xs font-medium leading-[14px] text-[#F6433F]">
                            {{ $review['rating'] }}
                        </span>
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M6 0.5L7.34708 4.1459H11.0846L8.36878 6.2082L9.71585 9.8541L6 7.7918L2.28415 9.8541L3.63122 6.2082L0.915384 4.1459H4.65292L6 0.5Z"
                                fill="#F6433F" />
                        </svg>
                    </div>
                </div>

                {{-- Review Text --}}
                <p class="text-xs font-normal leading-[14px] text-[#5F5F5F] text-justify mb-3">
                    {{ $review['review'] }}
                </p>

                {{-- Review Images --}}
                @if($review->file_path && is_array($review->file_path))
                <div class="flex items-center gap-2 mt-3">
                    @php
                    $imageUrls = array_map(fn($p) => asset('storage/'.$p), $review->file_path);
                    @endphp
                    @foreach($review->file_path as $index => $image)
                    <button onclick="openReviewModal({{ json_encode($imageUrls) }}, {{ $index }})"
                        class="w-[70px] h-[61px] rounded-lg overflow-hidden hover:opacity-90 transition-opacity">
                        <img src="{{ asset('storage/' . $image) }}" alt="Review Image"
                            class="w-full h-full object-cover">
                    </button>
                    @endforeach
                </div>
                @endif
            </div>
            @endforeach
            @else
            {{-- Fallback static cards if no reviews --}}
            {{-- Review Card 3 --}}
            <div class="bg-white rounded-xl p-5 shadow-sm flex-1 min-w-[320px] max-w-[677.5px]">
                {{-- Header: Profile and Rating --}}
                <div class="flex justify-between items-center mb-3">
                    {{-- Profile Section --}}
                    <div class="flex items-center gap-4">
                        {{-- Profile Image --}}
                        <div class="w-10 h-10 rounded-full overflow-hidden bg-gray-200">
                            <img src="{{ asset('images/no_avatar.jpg') }}" alt="Prashant Kumar Singh"
                                class="w-full h-full object-cover">
                        </div>
                        {{-- Name and Reviews Count --}}
                        <div>
                            <h3 class="text-sm font-medium leading-4 text-[#202020] mb-1">
                                Prashant Kumar Singh
                            </h3>
                            <p class="text-xs font-normal leading-[14px] text-[#7E7E7E]">
                                Reviewed 45 restaurants
                            </p>
                        </div>
                    </div>

                    {{-- Rating --}}
                    <div class="flex items-center gap-1.5">
                        <span class="text-xs font-medium leading-[14px] text-[#F6433F]">
                            4.5
                        </span>
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M6 0.5L7.34708 4.1459H11.0846L8.36878 6.2082L9.71585 9.8541L6 7.7918L2.28415 9.8541L3.63122 6.2082L0.915384 4.1459H4.65292L6 0.5Z"
                                fill="#F6433F" />
                        </svg>
                    </div>
                </div>

                {{-- Review Text --}}
                <p class="text-xs font-normal leading-[14px] text-[#5F5F5F] text-justify mb-3">
                    If you wanna take a break from Kathmandu you find a great location and hospitality in this
                    rooftop in
                    the heart of the town. Food is really tasty and staff really great!
                </p>

                {{-- Review Images --}}
                <div class="flex items-center gap-2">
                    <div class="w-[70px] h-[61px] rounded-lg overflow-hidden">
                        <img src="{{ asset('images/review-img-1.jpg') }}" alt="Review Image 1"
                            class="w-full h-full object-cover">
                    </div>
                    <div class="w-[70px] h-[61px] rounded-lg overflow-hidden">
                        <img src="{{ asset('images/review-img-2.jpg') }}" alt="Review Image 2"
                            class="w-full h-full object-cover">
                    </div>
                    <div class="w-[70px] h-[61px] rounded-lg overflow-hidden">
                        <img src="{{ asset('images/review-img-3.jpg') }}" alt="Review Image 3"
                            class="w-full h-full object-cover">
                    </div>
                </div>
            </div>

            {{-- Review Card 4 --}}
            <div class="bg-white rounded-xl p-5 shadow-sm flex-1 min-w-[320px] max-w-[677.5px]">
                {{-- Header: Profile and Rating --}}
                <div class="flex justify-between items-center mb-3">
                    {{-- Profile Section --}}
                    <div class="flex items-center gap-4">
                        {{-- Profile Image --}}
                        <div class="w-10 h-10 rounded-full overflow-hidden bg-gray-200">
                            <img src="{{ asset('images/no_avatar.jpg') }}" alt="Prashant Kumar Singh"
                                class="w-full h-full object-cover">
                        </div>
                        {{-- Name and Reviews Count --}}
                        <div>
                            <h3 class="text-sm font-medium leading-4 text-[#202020] mb-1">
                                Prashant Kumar Singh
                            </h3>
                            <p class="text-xs font-normal leading-[14px] text-[#7E7E7E]">
                                Reviewed 45 restaurants
                            </p>
                        </div>
                    </div>

                    {{-- Rating --}}
                    <div class="flex items-center gap-1.5">
                        <span class="text-xs font-medium leading-[14px] text-[#F6433F]">
                            4.5
                        </span>
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M6 0.5L7.34708 4.1459H11.0846L8.36878 6.2082L9.71585 9.8541L6 7.7918L2.28415 9.8541L3.63122 6.2082L0.915384 4.1459H4.65292L6 0.5Z"
                                fill="#F6433F" />
                        </svg>
                    </div>
                </div>

                {{-- Review Text --}}
                <p class="text-xs font-normal leading-[14px] text-[#5F5F5F] text-justify mb-3">
                    If you wanna take a break from Kathmandu you find a great location and hospitality in this
                    rooftop in
                    the heart of the town. Food is really tasty and staff really great!
                </p>

                {{-- Review Images --}}
                <div class="flex items-center gap-2">
                    <div class="w-[70px] h-[61px] rounded-lg overflow-hidden">
                        <img src="{{ asset('images/review-img-1.jpg') }}" alt="Review Image 1"
                            class="w-full h-full object-cover">
                    </div>
                    <div class="w-[70px] h-[61px] rounded-lg overflow-hidden">
                        <img src="{{ asset('images/review-img-2.jpg') }}" alt="Review Image 2"
                            class="w-full h-full object-cover">
                    </div>
                    <div class="w-[70px] h-[61px] rounded-lg overflow-hidden">
                        <img src="{{ asset('images/review-img-3.jpg') }}" alt="Review Image 3"
                            class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>

    {{-- Full Screen Modal --}}
    <div id="reviewModal" class="hidden fixed inset-0 z-[9999] bg-black/90 transition-opacity duration-300 opacity-0">
        {{-- Top Bar --}}
        <div class="flex justify-between items-center px-6 py-4 text-white w-full absolute top-0 left-0 z-20">
            <div class="text-lg font-medium">
                <span id="reviewCounter">1 / 1</span>
            </div>
            <button onclick="closeReviewModal()" class="text-white hover:text-gray-300 focus:outline-none p-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        {{-- Main Content (Image) --}}
        <div class="flex-1 flex items-center justify-center p-4 relative w-full h-full overflow-hidden">
            {{-- Prev Button --}}
            <button id="reviewPrevBtn" onclick="prevReviewImage()"
                class="absolute left-4 md:left-8 z-20 text-white/70 hover:text-white focus:outline-none p-2 transition-colors bg-black/20 hover:bg-black/40 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 md:h-10 md:w-10" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>

            {{-- Image Container --}}
            <div id="reviewImageContainer"
                class="relative w-full h-full flex items-center justify-center overflow-hidden cursor-grab active:cursor-grabbing">
                <img id="reviewImage" src="" alt="Review" draggable="false"
                    class="max-w-full max-h-[85vh] object-contain shadow-2xl rounded-sm select-none transition-transform duration-100 ease-out origin-center">
            </div>

            {{-- Next Button --}}
            <button id="reviewNextBtn" onclick="nextReviewImage()"
                class="absolute right-4 md:right-8 z-20 text-white/70 hover:text-white focus:outline-none p-2 transition-colors bg-black/20 hover:bg-black/40 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 md:h-10 md:w-10" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>
        </div>
    </div>

    @push('scripts')
    <script>
        let currentReviewImages = [];
        let currentReviewIndex = 0;
        let reviewScale = 1;
        let reviewPointX = 0;
        let reviewPointY = 0;
        let isReviewDragging = false;
        let reviewStartX = 0;
        let reviewStartY = 0;

        const reviewModal = document.getElementById('reviewModal');
        const reviewImage = document.getElementById('reviewImage');
        const reviewImageContainer = document.getElementById('reviewImageContainer');
        const reviewCounter = document.getElementById('reviewCounter');
        const reviewPrevBtn = document.getElementById('reviewPrevBtn');
        const reviewNextBtn = document.getElementById('reviewNextBtn');

        function openReviewModal(images, index) {
            currentReviewImages = images;
            currentReviewIndex = index;
            updateReviewModalContent();
            reviewModal.classList.add('flex', 'flex-col');
            reviewModal.classList.remove('hidden');
            setTimeout(() => {
                reviewModal.classList.remove('opacity-0');
            }, 10);
            document.body.style.overflow = 'hidden';
            resetReviewZoom();
        }

        function closeReviewModal() {
            reviewModal.classList.add('opacity-0');
            setTimeout(() => {
                reviewModal.classList.add('hidden');
                reviewModal.classList.remove('flex', 'flex-col');
            }, 300);
            document.body.style.overflow = '';
        }

        function updateReviewModalContent() {
            if (currentReviewImages.length === 0) return;
            reviewImage.src = currentReviewImages[currentReviewIndex];
            reviewCounter.textContent = `${currentReviewIndex + 1} / ${currentReviewImages.length}`;

            reviewPrevBtn.style.display = currentReviewImages.length > 1 ? 'block' : 'none';
            reviewNextBtn.style.display = currentReviewImages.length > 1 ? 'block' : 'none';
        }

        function nextReviewImage() {
            currentReviewIndex = (currentReviewIndex + 1) % currentReviewImages.length;
            updateReviewModalContent();
            resetReviewZoom();
        }

        function prevReviewImage() {
            currentReviewIndex = (currentReviewIndex - 1 + currentReviewImages.length) % currentReviewImages.length;
            updateReviewModalContent();
            resetReviewZoom();
        }

        function resetReviewZoom() {
            reviewScale = 1;
            reviewPointX = 0;
            reviewPointY = 0;
            updateReviewTransform();
        }

        function updateReviewTransform() {
            reviewImage.style.transform = `translate(${reviewPointX}px, ${reviewPointY}px) scale(${reviewScale})`;
        }

        reviewImageContainer.addEventListener('wheel', (e) => {
            e.preventDefault();
            const rect = reviewImageContainer.getBoundingClientRect();
            const containerCenterX = rect.width / 2;
            const containerCenterY = rect.height / 2;

            const mouseX = e.clientX - rect.left - containerCenterX;
            const mouseY = e.clientY - rect.top - containerCenterY;

            const delta = e.deltaY > 0 ? -0.1 : 0.1;
            const newScale = Math.min(Math.max(1, reviewScale + delta), 4);

            if (newScale === 1) {
                reviewPointX = 0;
                reviewPointY = 0;
            } else {
                const ratio = newScale / reviewScale;
                reviewPointX = mouseX * (1 - ratio) + reviewPointX * ratio;
                reviewPointY = mouseY * (1 - ratio) + reviewPointY * ratio;
            }

            reviewScale = newScale;
            updateReviewTransform();
        });

        reviewImageContainer.addEventListener('mousedown', (e) => {
            e.preventDefault();
            isReviewDragging = true;
            reviewStartX = e.clientX - reviewPointX;
            reviewStartY = e.clientY - reviewPointY;
            reviewImageContainer.style.cursor = 'grabbing';
        });

        window.addEventListener('mousemove', (e) => {
            if (!isReviewDragging) return;
            e.preventDefault();
            reviewPointX = e.clientX - reviewStartX;
            reviewPointY = e.clientY - reviewStartY;
            updateReviewTransform();
        });

        window.addEventListener('mouseup', (e) => {
            if (!isReviewDragging) return;
            isReviewDragging = false;
            reviewImageContainer.style.cursor = 'grab';

            if (reviewScale === 1) {
                if (Math.abs(reviewPointX) > 50) {
                    if (reviewPointX > 0) {
                        prevReviewImage();
                    } else {
                        nextReviewImage();
                    }
                } else {
                    reviewPointX = 0;
                    reviewPointY = 0;
                    updateReviewTransform();
                }
            }
        });

        reviewImageContainer.addEventListener('touchstart', (e) => {
            if (e.touches.length === 1) {
                isReviewDragging = true;
                reviewStartX = e.touches[0].clientX - reviewPointX;
                reviewStartY = e.touches[0].clientY - reviewPointY;
            }
        });

        window.addEventListener('touchmove', (e) => {
            if (!isReviewDragging) return;
            if (reviewScale > 1 || Math.abs(reviewPointX) > 10) e.preventDefault();

            reviewPointX = e.touches[0].clientX - reviewStartX;
            reviewPointY = e.touches[0].clientY - reviewStartY;
            updateReviewTransform();
        }, {
            passive: false
        });

        window.addEventListener('touchend', () => {
            if (!isReviewDragging) return;
            isReviewDragging = false;

            if (reviewScale === 1) {
                if (Math.abs(reviewPointX) > 50) {
                    if (reviewPointX > 0) {
                        prevReviewImage();
                    } else {
                        nextReviewImage();
                    }
                } else {
                    reviewPointX = 0;
                    reviewPointY = 0;
                    updateReviewTransform();
                }
            }
        });

        window.addEventListener('keydown', (e) => {
            if (reviewModal.classList.contains('hidden')) return;
            if (e.key === 'Escape') closeReviewModal();
            if (e.key === 'ArrowRight') nextReviewImage();
            if (e.key === 'ArrowLeft') prevReviewImage();
        });

        reviewModal.addEventListener('click', (e) => {
            if (e.target === reviewModal || e.target === reviewImageContainer) {
                closeReviewModal();
            }
        });
    </script>
    @endpush
</div>