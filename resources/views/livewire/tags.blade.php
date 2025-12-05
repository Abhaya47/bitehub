<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">

    @foreach($restaurants as $restaurant)
        @php
            $r = $restaurant->restaurant;
            $rating=$r->rating;
            $average_rating=$rating->rating;
            $count= $rating->five_star + $rating->four_star + $rating->three_star + $rating->two_star + $rating->one_star;
        @endphp
        <a href="{{ route('description', ['restaurant' => $r->id]) }}" class="block">

            <div class="bg-white shadow-md rounded-xl p-4 flex flex-col gap-2">

                <h2 class="text-lg font-semibold">
                    {{ $r->name }}
                </h2>

                <div class="flex items-center gap-2 text-yellow-500 font-medium">
                    ⭐ {{ $average_rating }}
                    <span class="text-gray-500 text-sm">
                    ({{ $count }} reviews)
                </span>
                </div>
            </div>
        </a>
    @endforeach

</div>

