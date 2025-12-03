<div>
    @include('livewire.home_components.header')

    <div class="min-h-screen bg-white flex flex-col">

        <div class="relative w-full h-[306px] rounded-b-[50px] overflow-hidden group">
            <img src="{{asset('images/profile_background.jpg')}}"
                alt="Food Background"
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
                        <svg class="w-4 h-4 text-white group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z">
                            </path>
                        </svg>
                    </a>
                </div>

                <div class="flex flex-col items-center gap-1 text-center">
                    <h2 class="text-white text-xl font-bold font-lato tracking-wider drop-shadow-md">{{ $user->name }}</h2>
                    <p class="text-white/90 text-sm font-medium font-lato tracking-wide drop-shadow-sm">
                        {{ $user->email }}
                    </p>
                </div>
            </div>
        </div>

        <div class="w-full max-w-[430px] mx-auto px-[22px] mt-[15px]">
            <div class="bg-[#F5F4F8] rounded-full p-1 flex items-center justify-center gap-[7px]">
                <button wire:click="setActiveTab('reviews')"
                    class="w-1/2 py-2.5 rounded-full text-[12px] font-semibold font-lato transition-all duration-300 {{ $activeTab === 'reviews' ? 'bg-white text-[#252B5C] shadow-sm' : 'text-[#A1A5C1] hover:text-[#252B5C]' }}">
                    Reviews
                </button>
                <button wire:click="setActiveTab('favorites')"
                    class="w-1/2 py-2.5 rounded-full text-[12px] font-semibold font-lato transition-all duration-300 {{ $activeTab === 'favorites' ? 'bg-white text-[#252B5C] shadow-sm' : 'text-[#A1A5C1] hover:text-[#252B5C]' }}">
                    Favorites
                </button>
            </div>
        </div>

        <div class="w-full max-w-[430px] mx-auto px-6 mt-[20px] pb-10 flex-grow">

            @if($activeTab === 'reviews')
            <div class="animate-fade-in">
                <div class="flex items-center justify-between mb-[15px]">
                    <div class="flex items-center gap-[5px]">
                        <span class="text-lg font-bold font-lato tracking-wider text-[#252B5C]">{{ $reviews->count() }}</span>
                        <span class="text-lg font-medium font-lato tracking-wider text-[#252B5C]">Reviews</span>
                    </div>
                </div>

                @if ($reviews->count() > 0)
                <div class="space-y-4">
                    @foreach ($reviews as $review)
                    <div class="bg-[#F5F4F8] rounded-[15px] p-4 hover:shadow-md transition-shadow duration-300">
                        <div class="flex items-start gap-3">
                            <div class="flex-1">
                                <h4 class="text-sm font-bold font-lato text-[#252B5C] mb-1">
                                    {{ $review->restaurant->name ?? 'Restaurant' }}
                                </h4>
                                <div class="flex items-center gap-1 mb-2">
                                    @for ($i = 1; $i <= 5; $i++)
                                        <svg class="w-3 h-3 {{ $i <= $review->rating ? 'text-[#FFC42D]' : 'text-gray-300' }}"
                                        fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                                        </svg>
                                        @endfor
                                </div>
                                <p class="text-xs font-raleway text-[#53587A]">{{ $review->comment }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @else
                <div class="text-center py-10">
                    <div class="bg-[#F5F4F8] w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-[#A1A5C1]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                        </svg>
                    </div>
                    <p class="text-[#A1A5C1] font-lato">No reviews yet</p>
                </div>
                @endif
            </div>
            @endif

            @if($activeTab === 'favorites')
            <div class="animate-fade-in">
                <div class="flex items-center justify-between mb-[15px]">
                    <div class="flex items-center gap-[5px]">
                        <span class="text-lg font-bold font-lato tracking-wider text-[#252B5C]">0</span>
                        <span class="text-lg font-medium font-lato tracking-wider text-[#252B5C]">Favorites</span>
                    </div>
                </div>
                <div class="text-center py-10">
                    <div class="bg-[#F5F4F8] w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-[#A1A5C1]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </div>
                    <p class="text-[#A1A5C1] font-lato">No favorites yet</p>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>