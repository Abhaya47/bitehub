<div>
    <div class="bg-[#ffffff]">
        @include('livewire.home_components.header')
        @include('livewire.description_components.hero')
        @include('livewire.description_components.restaurant_menu')
        @include('livewire.description_components.available_offers')

        <!-- Review Form Section -->
        <!-- Review Form Section -->
        <div class="w-full px-4 py-6">
            @livewire('review-form', ['restaurant_id' => $restaurant->id])
        </div>

        @include('livewire.description_components.rating-slider')
        @include('livewire.description_components.latest_reviews')

    </div>
</div>