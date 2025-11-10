{{-- Latest Reviews Section --}}
<div class="w-full max-w-full mx-auto px-4 py-6">
    <div class="flex flex-col gap-4">
        {{-- Row 1: Two Review Cards --}}
        <div class="flex flex-wrap justify-center gap-4">
            {{-- Review Card 1 --}}
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
                    If you wanna take a break from Varanasi you find a great location and hospitality in this rooftop in
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
                    If you wanna take a break from Varanasi you find a great location and hospitality in this rooftop in
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
        </div>

        {{-- Row 2: Two Review Cards --}}
        <div class="flex flex-wrap justify-center gap-4">
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
                    If you wanna take a break from Varanasi you find a great location and hospitality in this rooftop in
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
                    If you wanna take a break from Varanasi you find a great location and hospitality in this rooftop in
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
        </div>
    </div>
</div>
