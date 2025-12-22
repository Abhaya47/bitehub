<div>
    @include('livewire.home_components.header')

    <div class="min-h-screen bg-white flex flex-col">

        <div class="relative w-full h-[306px] rounded-b-[50px] overflow-hidden group">
            <img src="{{ asset('images/profile_background.jpg') }}" alt="Food Background"
                class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">

            <div class="absolute inset-0 bg-black/40"></div>

            <div class="absolute top-[120px] left-0 w-full flex justify-center z-10">
                <h1 class="text-white font-bold font-lato text-5xl tracking-wide">Profile</h1>
            </div>

            <div class="absolute top-[180px] left-0 w-full z-20 flex flex-col items-center">

                <div class="relative w-[117px] h-[117px] mb-[10px]">
                    @if ($user->file_path)
                        <img src="{{ Storage::url($user->file_path) }}" alt="{{ $user->name }}"
                            class="w-full h-full rounded-full object-cover border-4 border-white shadow-xl">
                    @else
                        <img src="https://ui-avatars.com/api/?name={{ urlencode($user->name) }}&size=400&background=F9443D&color=fff"
                            alt="{{ $user->name }}"
                            class="w-full h-full rounded-full object-cover border-4 border-white shadow-xl">
                    @endif

                    <a href="{{ route('profile.settings') }}"
                        class="absolute bottom-0 right-0 w-[35px] h-[35px] bg-[#F9443D] rounded-full flex items-center justify-center hover:bg-red-600 transition-all duration-300 shadow-lg border-2 border-white group">
                        <svg class="w-4 h-4 text-white group-hover:scale-110 transition-transform" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z">
                            </path>
                        </svg>
                    </a>
                </div>

                <div class="flex flex-col items-center gap-1 text-center">
                    <h2 class="text-white text-xl font-bold font-lato tracking-wider drop-shadow-md">{{ $user->name }}
                    </h2>
                    <p class="text-white/90 text-sm font-medium font-lato tracking-wide drop-shadow-sm">
                        {{ $user->email }}
                    </p>
                </div>
            </div>
        </div>

        <div class="w-full max-w-[430px] mx-auto px-[22px] mt-[15px]">
            <div class="bg-[#F5F4F8] rounded-full p-1 flex items-center justify-center gap-[7px]">
                <button wire:click="setActiveTab('reviews')"
                    class="w-1/3 py-2.5 rounded-full text-[12px] font-semibold font-lato transition-all duration-300 {{ $activeTab === 'reviews' ? 'bg-white text-[#252B5C] shadow-sm' : 'text-[#A1A5C1] hover:text-[#252B5C]' }}">
                    Reviews
                </button>
                <button wire:click="setActiveTab('favorites')"
                    class="w-1/3 py-2.5 rounded-full text-[12px] font-semibold font-lato transition-all duration-300 {{ $activeTab === 'favorites' ? 'bg-white text-[#252B5C] shadow-sm' : 'text-[#A1A5C1] hover:text-[#252B5C]' }}">
                    Favorites
                </button>
                <button wire:click="setActiveTab('notifications')"
                    class="w-1/3 py-2.5 rounded-full text-[12px] font-semibold font-lato transition-all duration-300 {{ $activeTab === 'notifications' ? 'bg-white text-[#252B5C] shadow-sm' : 'text-[#A1A5C1] hover:text-[#252B5C]' }}">
                    Notifications
                </button>
            </div>
        </div>

        <div class="w-full max-w-[430px] mx-auto px-6 mt-[20px] pb-10 flex-grow">

            @if ($activeTab === 'reviews')
                <div class="animate-fade-in">
                    <div class="flex items-center justify-between mb-[15px]">
                        <div class="flex items-center gap-[5px]">
                            <span
                                class="text-lg font-bold font-lato tracking-wider text-[#252B5C]">{{ $reviews->total() }}</span>
                            <span class="text-lg font-medium font-lato tracking-wider text-[#252B5C]">Reviews</span>
                        </div>
                    </div>

                    @if ($reviews->count() > 0)
                        <div class="space-y-3">
                            @foreach ($reviews as $review)
                                <div
                                    class="bg-white rounded-[18px] p-3 border border-[#ECEDF3] hover:shadow-lg transition-all duration-300">
                                    <div class="flex items-center gap-3">
                                        <!-- Restaurant Image -->
                                        <div class="flex-shrink-0">
                                            @if ($review->restaurant->file_path)
                                                <img src="{{ Storage::url($review->restaurant->file_path) }}"
                                                    alt="{{ $review->restaurant->name }}"
                                                    class="w-[70px] h-[70px] rounded-[12px] object-cover">
                                            @else
                                                <div
                                                    class="w-[70px] h-[70px] rounded-[12px] bg-gradient-to-br from-[#F9443D] to-[#FF6B6B] flex items-center justify-center">
                                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                                        </path>
                                                    </svg>
                                                </div>
                                            @endif
                                        </div>

                                        <!-- Restaurant Details -->
                                        <div class="flex-1 min-w-0">
                                            <h4 class="text-sm font-bold font-lato text-[#252B5C] mb-1 truncate">
                                                {{ $review->restaurant->name ?? 'Restaurant' }}
                                            </h4>
                                            <div class="flex items-center gap-1 mb-1.5">
                                                @for ($i = 1; $i <= 5; $i++)
                                                    <svg class="w-3.5 h-3.5 {{ $i <= $review->rating ? 'text-[#FFC42D]' : 'text-gray-300' }}"
                                                        fill="currentColor" viewBox="0 0 24 24">
                                                        <path
                                                            d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                                        </path>
                                                    </svg>
                                                @endfor
                                            </div>
                                            <p class="text-xs font-raleway text-[#53587A] line-clamp-2">
                                                {{ $review->comment }}</p>
                                        </div>

                                        <!-- Action Buttons -->
                                        <div class="flex flex-col gap-1.5 flex-shrink-0">
                                            <a href="{{ route('description', $review->restaurant->id) }}"
                                                class="w-[32px] h-[32px] bg-[#F5F4F8] rounded-full flex items-center justify-center hover:bg-[#F9443D] hover:text-white transition-all duration-300 group">
                                                <svg class="w-4 h-4 text-[#252B5C] group-hover:text-white transition-colors"
                                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                                    </path>
                                                </svg>
                                            </a>
                                            <button wire:click="deleteReview({{ $review->id }})"
                                                wire:confirm="Are you sure you want to delete this review?"
                                                class="w-[32px] h-[32px] bg-[#F5F4F8] rounded-full flex items-center justify-center hover:bg-red-500 hover:text-white transition-all duration-300 group">
                                                <svg class="w-4 h-4 text-[#252B5C] group-hover:text-white transition-colors"
                                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                    </path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <!-- Pagination for Reviews -->
                        @if ($reviews->hasPages())
                            <div class="mt-6 flex items-center justify-center gap-2">
                                {{-- Previous Button --}}
                                @if ($reviews->onFirstPage())
                                    <span
                                        class="w-9 h-9 rounded-full bg-[#F5F4F8] flex items-center justify-center text-[#A1A5C1] cursor-not-allowed">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 19l-7-7 7-7"></path>
                                        </svg>
                                    </span>
                                @else
                                    <button wire:click="previousPage('reviews')"
                                        class="w-9 h-9 rounded-full bg-white border border-[#ECEDF3] flex items-center justify-center text-[#252B5C] hover:bg-[#F9443D] hover:text-white hover:border-[#F9443D] transition-all duration-300">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 19l-7-7 7-7"></path>
                                        </svg>
                                    </button>
                                @endif

                                {{-- Page Numbers --}}
                                @foreach (range(1, $reviews->lastPage()) as $page)
                                    @if ($page == $reviews->currentPage())
                                        <span
                                            class="w-9 h-9 rounded-full bg-[#F9443D] flex items-center justify-center text-white font-semibold text-sm shadow-md">
                                            {{ $page }}
                                        </span>
                                    @else
                                        <button wire:click="gotoPage({{ $page }}, 'reviews')"
                                            class="w-9 h-9 rounded-full bg-white border border-[#ECEDF3] flex items-center justify-center text-[#252B5C] hover:bg-[#F9443D] hover:text-white hover:border-[#F9443D] transition-all duration-300 font-medium text-sm">
                                            {{ $page }}
                                        </button>
                                    @endif
                                @endforeach

                                {{-- Next Button --}}
                                @if ($reviews->hasMorePages())
                                    <button wire:click="nextPage('reviews')"
                                        class="w-9 h-9 rounded-full bg-white border border-[#ECEDF3] flex items-center justify-center text-[#252B5C] hover:bg-[#F9443D] hover:text-white hover:border-[#F9443D] transition-all duration-300">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </button>
                                @else
                                    <span
                                        class="w-9 h-9 rounded-full bg-[#F5F4F8] flex items-center justify-center text-[#A1A5C1] cursor-not-allowed">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                @endif
                            </div>
                        @endif
                    @else
                        <div class="text-center py-10">
                            <div
                                class="bg-[#F5F4F8] w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-[#A1A5C1]" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                    </path>
                                </svg>
                            </div>
                            <p class="text-[#A1A5C1] font-lato">No reviews yet</p>
                        </div>
                    @endif
                </div>
            @endif

            @if ($activeTab === 'favorites')
                <div class="animate-fade-in">
                    <div class="flex items-center justify-between mb-[15px]">
                        <div class="flex items-center gap-[5px]">
                            <span
                                class="text-lg font-bold font-lato tracking-wider text-[#252B5C]">{{ $favorites->total() }}</span>
                            <span class="text-lg font-medium font-lato tracking-wider text-[#252B5C]">Favorites</span>
                        </div>
                    </div>

                    @if ($favorites->count() > 0)
                        <div class="space-y-3">
                            @foreach ($favorites as $restaurant)
                                <div
                                    class="bg-white rounded-[18px] p-3 border border-[#ECEDF3] hover:shadow-lg transition-all duration-300">
                                    <div class="flex items-center gap-3">
                                        <!-- Restaurant Image -->
                                        <div class="flex-shrink-0">
                                            @if ($restaurant->file_path)
                                                <img src="{{ Storage::url($restaurant->file_path) }}"
                                                    alt="{{ $restaurant->name }}"
                                                    class="w-[80px] h-[80px] rounded-[14px] object-cover">
                                            @else
                                                <div
                                                    class="w-[80px] h-[80px] rounded-[14px] bg-gradient-to-br from-[#F9443D] to-[#FF6B6B] flex items-center justify-center">
                                                    <svg class="w-9 h-9 text-white" fill="none"
                                                        stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                                        </path>
                                                    </svg>
                                                </div>
                                            @endif
                                        </div>

                                        <!-- Restaurant Details -->
                                        <div class="flex-1 min-w-0">
                                            <h4 class="text-base font-bold font-lato text-[#252B5C] mb-1 truncate">
                                                {{ $restaurant->name }}
                                            </h4>

                                            <!-- Location -->
                                            <div class="flex items-center gap-1.5 mb-2">
                                                <svg class="w-3.5 h-3.5 text-[#F9443D] flex-shrink-0"
                                                    fill="currentColor" viewBox="0 0 24 24">
                                                    <path
                                                        d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z">
                                                    </path>
                                                </svg>
                                                <span
                                                    class="text-xs font-raleway text-[#53587A] truncate">{{ $restaurant->address }}</span>
                                            </div>

                                            <!-- Rating -->
                                            <div class="flex items-center gap-1.5">
                                                <div class="flex items-center gap-0.5">
                                                    @for ($i = 1; $i <= 5; $i++)
                                                        <svg class="w-3.5 h-3.5 {{ $i <= round($restaurant->average_rating) ? 'text-[#FFC42D]' : 'text-gray-300' }}"
                                                            fill="currentColor" viewBox="0 0 24 24">
                                                            <path
                                                                d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                                            </path>
                                                        </svg>
                                                    @endfor
                                                </div>
                                                <span class="text-xs font-semibold font-lato text-[#252B5C]">
                                                    {{ number_format($restaurant->average_rating, 1) }}
                                                </span>
                                                <span class="text-xs font-raleway text-[#A1A5C1]">
                                                    ({{ $restaurant->reviews_count }}
                                                    {{ $restaurant->reviews_count == 1 ? 'review' : 'reviews' }})
                                                </span>
                                            </div>
                                        </div>

                                        <!-- Action Buttons -->
                                        <div class="flex flex-col gap-1.5 flex-shrink-0">
                                            <a href="{{ route('description', $restaurant->id) }}"
                                                class="w-[32px] h-[32px] bg-[#F5F4F8] rounded-full flex items-center justify-center hover:bg-[#F9443D] hover:text-white transition-all duration-300 group">
                                                <svg class="w-4 h-4 text-[#252B5C] group-hover:text-white transition-colors"
                                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                                    </path>
                                                </svg>
                                            </a>
                                            <button wire:click="removeFavorite({{ $restaurant->id }})"
                                                wire:confirm="Remove this restaurant from favorites?"
                                                class="w-[32px] h-[32px] bg-[#F5F4F8] rounded-full flex items-center justify-center hover:bg-red-500 hover:text-white transition-all duration-300 group">
                                                <svg class="w-4 h-4 text-[#F9443D] group-hover:text-white transition-colors"
                                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0zM12 7.636V20.364">
                                                    </path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <!-- Pagination for Favorites -->
                        @if ($favorites->hasPages())
                            <div class="mt-6 flex items-center justify-center gap-2">
                                {{-- Previous Button --}}
                                @if ($favorites->onFirstPage())
                                    <span
                                        class="w-9 h-9 rounded-full bg-[#F5F4F8] flex items-center justify-center text-[#A1A5C1] cursor-not-allowed">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 19l-7-7 7-7"></path>
                                        </svg>
                                    </span>
                                @else
                                    <button wire:click="previousPage('favorites')"
                                        class="w-9 h-9 rounded-full bg-white border border-[#ECEDF3] flex items-center justify-center text-[#252B5C] hover:bg-[#F9443D] hover:text-white hover:border-[#F9443D] transition-all duration-300">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 19l-7-7 7-7"></path>
                                        </svg>
                                    </button>
                                @endif

                                {{-- Page Numbers --}}
                                @foreach (range(1, $favorites->lastPage()) as $page)
                                    @if ($page == $favorites->currentPage())
                                        <span
                                            class="w-9 h-9 rounded-full bg-[#F9443D] flex items-center justify-center text-white font-semibold text-sm shadow-md">
                                            {{ $page }}
                                        </span>
                                    @else
                                        <button wire:click="gotoPage({{ $page }}, 'favorites')"
                                            class="w-9 h-9 rounded-full bg-white border border-[#ECEDF3] flex items-center justify-center text-[#252B5C] hover:bg-[#F9443D] hover:text-white hover:border-[#F9443D] transition-all duration-300 font-medium text-sm">
                                            {{ $page }}
                                        </button>
                                    @endif
                                @endforeach

                                {{-- Next Button --}}
                                @if ($favorites->hasMorePages())
                                    <button wire:click="nextPage('favorites')"
                                        class="w-9 h-9 rounded-full bg-white border border-[#ECEDF3] flex items-center justify-center text-[#252B5C] hover:bg-[#F9443D] hover:text-white hover:border-[#F9443D] transition-all duration-300">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </button>
                                @else
                                    <span
                                        class="w-9 h-9 rounded-full bg-[#F5F4F8] flex items-center justify-center text-[#A1A5C1] cursor-not-allowed">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                @endif
                            </div>
                        @endif
                    @else
                        <div class="text-center py-10">
                            <div
                                class="bg-[#F5F4F8] w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-[#A1A5C1]" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                    </path>
                                </svg>
                            </div>
                            <p class="text-[#A1A5C1] font-lato">No favorites yet</p>
                        </div>
                    @endif
                </div>
            @endif

            @if ($activeTab === 'notifications')
                <div class="animate-fade-in">
                    <div class="flex items-center justify-between mb-[15px]">
                        <div class="flex items-center gap-[5px]">
                            <span
                                class="text-lg font-bold font-lato tracking-wider text-[#252B5C]">{{ $notifications->total() }}</span>
                            <span
                                class="text-lg font-medium font-lato tracking-wider text-[#252B5C]">Notifications</span>
                        </div>
                        @if ($notifications->count() > 0)
                            <button wire:click="markAllAsRead"
                                class="text-sm text-blue-600 hover:text-blue-800 transition-colors font-medium">
                                Mark all as read
                            </button>
                        @endif
                    </div>

                    @if ($notifications->count() > 0)
                        <div class="space-y-3">
                            @foreach ($notifications as $notificationRead)
                                <div
                                    class="bg-white rounded-[18px] p-4 border border-[#ECEDF3] hover:shadow-lg transition-all duration-300 {{ !$notificationRead->is_read ? 'bg-blue-50 border-blue-200' : '' }}">
                                    <div class="flex justify-between items-start">
                                        <div class="flex-1">
                                            <div class="flex items-center gap-2 mb-2">
                                                <h4
                                                    class="text-sm font-bold font-lato text-[#252B5C] {{ !$notificationRead->is_read ? 'font-bold' : '' }}">
                                                    {{ $notificationRead->notice->title }}
                                                </h4>
                                                @if (!$notificationRead->is_read)
                                                    <span
                                                        class="bg-blue-500 text-white text-xs px-2 py-0.5 rounded-full">New</span>
                                                @endif
                                            </div>
                                            <p class="text-xs font-raleway text-[#53587A] mb-3 line-clamp-3">
                                                {{ $notificationRead->notice->message }}
                                            </p>
                                            <p class="text-xs font-raleway text-[#A1A5C1]">
                                                {{ $notificationRead->created_at->diffForHumans() }}
                                            </p>
                                        </div>

                                        <!-- Action Buttons -->
                                        <div class="flex flex-col gap-1.5 ml-3">
                                            @if (!$notificationRead->is_read)
                                                <button wire:click="markAsRead({{ $notificationRead->id }})"
                                                    class="w-[32px] h-[32px] bg-[#F5F4F8] rounded-full flex items-center justify-center hover:bg-blue-500 hover:text-white transition-all duration-300 group"
                                                    title="Mark as read">
                                                    <svg class="w-4 h-4 text-[#252B5C] group-hover:text-white transition-colors"
                                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                    </svg>
                                                </button>
                                            @endif
                                            <button wire:click="deleteNotification({{ $notificationRead->id }})"
                                                wire:confirm="Are you sure you want to delete this notification?"
                                                class="w-[32px] h-[32px] bg-[#F5F4F8] rounded-full flex items-center justify-center hover:bg-red-500 hover:text-white transition-all duration-300 group"
                                                title="Delete">
                                                <svg class="w-4 h-4 text-[#252B5C] group-hover:text-white transition-colors"
                                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                    </path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <!-- Pagination for Notifications -->
                        @if ($notifications->hasPages())
                            <div class="mt-6 flex items-center justify-center gap-2">
                                {{-- Previous Button --}}
                                @if ($notifications->onFirstPage())
                                    <span
                                        class="w-9 h-9 rounded-full bg-[#F5F4F8] flex items-center justify-center text-[#A1A5C1] cursor-not-allowed">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 19l-7-7 7-7"></path>
                                        </svg>
                                    </span>
                                @else
                                    <button
                                        wire:click="setPage({{ $notifications->currentPage() - 1 }}, 'notifications')"
                                        class="w-9 h-9 rounded-full bg-white border border-[#ECEDF3] flex items-center justify-center text-[#252B5C] hover:bg-[#F9443D] hover:text-white hover:border-[#F9443D] transition-all duration-300">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 19l-7-7 7-7"></path>
                                        </svg>
                                    </button>
                                @endif

                                {{-- Page Numbers --}}
                                @foreach (range(1, $notifications->lastPage()) as $page)
                                    @if ($page == $notifications->currentPage())
                                        <span
                                            class="w-9 h-9 rounded-full bg-[#F9443D] flex items-center justify-center text-white font-semibold text-sm shadow-md">
                                            {{ $page }}
                                        </span>
                                    @else
                                        <button wire:click="setPage({{ $page }}, 'notifications')"
                                            class="w-9 h-9 rounded-full bg-white border border-[#ECEDF3] flex items-center justify-center text-[#252B5C] hover:bg-[#F9443D] hover:text-white hover:border-[#F9443D] transition-all duration-300 font-medium text-sm">
                                            {{ $page }}
                                        </button>
                                    @endif
                                @endforeach

                                {{-- Next Button --}}
                                @if ($notifications->hasMorePages())
                                    <button
                                        wire:click="setPage({{ $notifications->currentPage() + 1 }}, 'notifications')"
                                        class="w-9 h-9 rounded-full bg-white border border-[#ECEDF3] flex items-center justify-center text-[#252B5C] hover:bg-[#F9443D] hover:text-white hover:border-[#F9443D] transition-all duration-300">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </button>
                                @else
                                    <span
                                        class="w-9 h-9 rounded-full bg-[#F5F4F8] flex items-center justify-center text-[#A1A5C1] cursor-not-allowed">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                @endif
                            </div>
                        @endif
                    @else
                        <div class="text-center py-10">
                            <div
                                class="bg-[#F5F4F8] w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-[#A1A5C1]" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9">
                                    </path>
                                </svg>
                            </div>
                            <p class="text-[#A1A5C1] font-lato">No notifications yet</p>
                        </div>
                    @endif
                </div>
            @endif
        </div>
    </div>
</div>
