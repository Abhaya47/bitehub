{{-- Reviews and Ratings Section --}}
<div class="w-full max-w-full mx-auto px-4 py-6">
    <div class="bg-white rounded-xl p-8 shadow-sm">
        {{-- Section Title --}}
        <h2 class="text-[22px] font-normal leading-[28px] text-[#004225] mb-5">
            Reviews and Ratings
        </h2>

        {{-- Divider --}}
        <hr class="border-t border-[rgba(197,197,197,0.5)] mb-5">

        {{-- Main Content --}}
        <div class="flex flex-col lg:flex-row items-center justify-center gap-[60px]">
            {{-- Left Side: Overall Rating --}}
            <div class="flex flex-col items-center w-[262px]">
                {{-- Label --}}
                <p class="text-sm font-medium leading-4 text-[#5F5F5F] text-center mb-7">
                    Overall Rating & Reviews
                </p>

                {{-- Large Rating Number --}}
                <div class="text-[57px] font-normal leading-[67px] text-[#F6433F] text-center mb-3">
                    {{$averageRating}}
                </div>

                {{-- Stars --}}
                <div class="flex items-center gap-1 mb-6">
                    {{-- Star 1 - Filled --}}
                    @for($i=1;$i<=floor($averageRating);$i++)

                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"
                                fill="#DFB300"/>
                        </svg>
                    @endfor
                    {{-- Star - Half Filled --}}

                    @if(fmod($averageRating,1) != 0.00)
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"
                                fill="#F2F2F2"/>
                            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557V0Z"
                                  fill="rgba(0, 126, 71, 0.2)"/>
                        </svg>
                    @endif
                </div>

                {{-- Review Count --}}
                <p class="text-sm font-medium leading-4 text-[#5F5F5F] text-center">
                    Based on {{$count}} reviews <a href="#" class="text-[#F6433F] hover:underline">Rate now</a>
                </p>
            </div>

            {{-- Right Side: Rating Bars --}}
            <div class="flex flex-col justify-center gap-8 flex-1 max-w-[985px]">
                {{-- Rating Row 1 --}}
                <div class="flex items-center gap-3">
                    {{-- Category Label --}}
                    <span class="text-xs font-normal leading-[14px] text-[#004225] w-[41px] text-center">
                        5 stars
                    </span>

                    {{-- 5 Stars --}}
                    <div class="flex items-center gap-1">
                        @for($i=1;$i<=5;$i++)
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"
                                    fill="#DFB300"/>
                            </svg>
                        @endfor
                    </div>

                    {{-- Progress Bar --}}
                    <div
                        class="relative flex-1 h-2.5 bg-[rgba(0,66,37,0.4)] rounded-[12px] overflow-hidden hidden md:block">
                        <div class="absolute top-0 left-0 h-full bg-[#F6433F] rounded-[12px]"
                             style="width: {{($five/$count)*100}}%">
                        </div>
                    </div>

                    {{-- Count --}}
                    <span class="text-xs font-normal leading-[14px] text-[#F6433F] w-[14px] text-center">
                        {{$five}}
                    </span>
                </div>

                {{-- Rating Row 4 --}}
                <div class="flex items-center gap-3">
                    {{-- Category Label --}}
                    <span class="text-xs font-normal leading-[14px] text-[#004225] w-[41px] text-center">
                        4 stars
                    </span>

                    {{-- Stars --}}
                    <div class="flex items-center gap-1">
                        @for($i=1;$i<=4;$i++)
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"
                                    fill="#DFB300"/>
                            </svg>
                        @endfor
                    </div>

                    {{-- Progress Bar --}}
                    <div
                        class="relative flex-1 h-2.5 bg-[rgba(0,66,37,0.4)] rounded-[12px] overflow-hidden hidden md:block">
                        <div class="absolute top-0 left-0 h-full bg-[#F6433F] rounded-[12px]"
                             style="width: {{($four/$count)*100}}%;">
                        </div>
                    </div>

                    {{-- Count --}}
                    <span class="text-xs font-normal leading-[14px] text-[#F6433F] w-[14px] text-center">
                        {{$four}}
                    </span>
                </div>

                {{-- Rating Row 3 --}}
                <div class="flex items-center gap-3">
                    {{-- Category Label --}}
                    <span class="text-xs font-normal leading-[14px] text-[#004225] w-[41px] text-center">
                        3 stars
                    </span>

                    {{-- Stars --}}
                    <div class="flex items-center gap-1">
                        @for($i=1;$i<=3;$i++)
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"
                                    fill="#DFB300"/>
                            </svg>
                        @endfor
                    </div>

                    {{-- Progress Bar --}}
                    <div
                        class="relative flex-1 h-2.5 bg-[rgba(0,66,37,0.4)] rounded-[12px] overflow-hidden hidden md:block">
                        <div class="absolute top-0 left-0 h-full bg-[#F6433F] rounded-[12px]"
                             style="width: {{($three/$count)*100}}%;">
                        </div>
                    </div>

                    {{-- Count --}}
                    <span class="text-xs font-normal leading-[14px] text-[#F6433F] w-[14px] text-center">
                        {{$three}}
                    </span>
                </div>


                {{-- Rating Row 2 --}}
                <div class="flex items-center gap-3">
                    {{-- Category Label --}}
                    <span class="text-xs font-normal leading-[14px] text-[#004225] w-[41px] text-center">
                        2 stars
                    </span>

                    {{-- Stars --}}
                    <div class="flex items-center gap-1">
                        @for($i=1;$i<=2;$i++)
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"
                                    fill="#DFB300"/>
                            </svg>
                        @endfor
                    </div>

                    {{-- Progress Bar --}}
                    <div
                        class="relative flex-1 h-2.5 bg-[rgba(0,66,37,0.4)] rounded-[12px] overflow-hidden hidden md:block">
                        <div class="absolute top-0 left-0 h-full bg-[#F6433F] rounded-[12px]"
                             style="width: {{($two/$count)*100}}%;">
                        </div>
                    </div>

                    {{-- Count --}}
                    <span class="text-xs font-normal leading-[14px] text-[#F6433F] w-[14px] text-center">
                        {{$two}}
                    </span>
                </div>

                {{-- Rating Row 1 --}}
                <div class="flex items-center gap-3">
                    {{-- Category Label --}}
                    <span class="text-xs font-normal leading-[14px] text-[#004225] w-[41px] text-center">
                        1 stars
                    </span>

                    {{-- Stars --}}
                    <div class="flex items-center gap-1">
                        @for($i=1;$i<=2;$i++)
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z"
                                    fill="#DFB300"/>
                            </svg>
                        @endfor
                    </div>

                    {{-- Progress Bar --}}
                    <div
                        class="relative flex-1 h-2.5 bg-[rgba(0,66,37,0.4)] rounded-[12px] overflow-hidden hidden md:block">
                        <div class="absolute top-0 left-0 h-full bg-[#F6433F] rounded-[12px]"
                             style="width: {{($one/$count)*100}}%;">
                        </div>
                    </div>

                    {{-- Count --}}
                    <span class="text-xs font-normal leading-[14px] text-[#F6433F] w-[14px] text-center">
                        {{$one}}
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
