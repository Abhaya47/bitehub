<div id="card-slider"
     class="flex gap-[15px] overflow-x-auto overflow-y-hidden h-[180px] md:h-[200px] lg:h-[220px] scroll-smooth scrollbar-hide"
     style="scrollbar-width: none; -ms-overflow-style: none;">
    @foreach($tags as $tag)
        <div
            class="relative flex-none w-[270px] md:w-[320px] lg:w-[350px] h-[180px] md:h-[200px] lg:h-[220px] rounded-[25px] overflow-hidden group">
            <div class="absolute inset-0 bg-gradient-to-b from-black/20 to-black/20">
                <img src="{{ asset('images/non_veg_items.png') }}" alt="Non-Veg Food"
                     class="w-full h-full object-cover -scale-x-1000" draggable="false"/>
            </div>
            <div
                class="absolute top-[29px] md:top-[35px] lg:top-[40px] left-[19px] md:left-[24px] lg:left-[28px] flex flex-col items-start h-full">
                <a href="{{ route('tags', ['tag' => $tag->id]) }}" class="block group/link">
                    <h3
                        class="font-raleway font-bold text-[22px] md:text-[26px] lg:text-[30px] leading-[26px] md:leading-[30px] lg:leading-[35px] tracking-[0.03em] text-white drop-shadow-[0_4px_4px_rgba(0,0,0,0.5)] group-hover/link:underline">
                        {{$tag->name}}
                    </h3>
                    <p
                        class="font-raleway font-bold text-[13px] md:text-[15px] lg:text-[17px] leading-[15px] md:leading-[18px] lg:leading-[20px] text-white drop-shadow-[0_4px_4px_rgba(0,0,0,0.5)] mt-[11px] md:mt-[13px] lg:mt-[15px]">
                        All discount up to 60%
                    </p>
                </a>
                <a href="{{ route('tags', ['tag' => $tag->id]) }}" 
                   class="inline-flex mt-6 px-5 py-2.5 bg-white text-[#0f172a] text-xs font-black uppercase tracking-widest rounded-full transition-all duration-300 hover:bg-[#F9443D] hover:text-white shadow-lg hover:shadow-[#F9443D]/40 opacity-0 transform translate-y-4 group-hover:opacity-100 group-hover:translate-y-0">
                    View Offers
                </a>
            </div>
        </div>
    @endforeach
</div>
