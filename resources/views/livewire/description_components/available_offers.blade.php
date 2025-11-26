<!-- Available Offers Component -->
<div class="w-full px-4 py-6">
    <div class="bg-white rounded-xl p-6 sm:p-8 flex flex-col gap-5 w-full">
        {{-- Header --}}
        <h2 class="text-lg sm:text-xl md:text-2xl font-normal text-[#004225] leading-7 text-left">
            Available Offers
        </h2>

        {{-- Offers List Container --}}
        <div class="flex flex-col gap-3">
            @if ($offers && $offers->count() > 0)
            @foreach ($offers as $offer)
            {{-- Offer Card --}}
            <div
                class="offer-card border border-[rgba(0,66,37,0.5)] rounded-lg p-3 flex flex-col sm:flex-row items-center justify-between gap-3 bg-gradient-to-r from-[rgba(0,133,74,0.05)] via-[rgba(1,158,89,0.05)] to-[rgba(12,210,123,0.05)]">
                {{-- Time Section --}}
                <div class="flex items-center gap-2.5 min-w-fit">
                    {{-- Info Icon --}}
                    <div class="w-5 h-5 relative flex-shrink-0">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
                            <circle cx="10" cy="10" r="8.33" stroke="#004225"
                                stroke-width="1.5" />
                            <line x1="10" y1="6.77" x2="10" y2="10.8" stroke="#004225"
                                stroke-width="1.5" stroke-linecap="round" />
                            <circle cx="10" cy="13.33" r="1" fill="#004225" />
                        </svg>
                    </div>

                    {{-- Time Text --}}
                    @php
                    $start = \Carbon\Carbon::parse($offer->start_at);
                    $end = \Carbon\Carbon::parse($offer->end_at);
                    @endphp
                    @if($start->isSameDay($end))
                    {{ $start->format('D, h:i A') }} - {{ $end->format('h:i A') }}
                    @else
                    {{ $start->format('D h:i A') }} - {{ $end->format('D h:i A') }}
                    @endif
                    </span>
                </div>

                {{-- Description --}}
                <div class="flex-grow text-center sm:text-left sm:flex-grow-0 sm:ml-4">
                    <span class="text-[#004225] text-sm sm:text-base font-normal tracking-[0.25px]">
                        {{ $offer->description }}
                    </span>
                </div>

                {{-- Discount Section --}}
                <div class="min-w-fit flex items-center justify-center">
                    <span class="text-[#F6433F] text-lg sm:text-xl font-bold tracking-[0.5px]">
                        @if ($offer->discount_type == 'percentage')
                        {{ intval($offer->discount_value) }}% OFF
                        @else
                        Flat {{ intval($offer->discount_value) }} OFF
                        @endif
                    </span>
                </div>
            </div>
            @endforeach
            @else
            <div class="text-center text-gray-500 py-4">
                No active offers available at the moment.
            </div>
            @endif
        </div>
    </div>
</div>