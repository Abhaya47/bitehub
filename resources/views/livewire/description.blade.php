@section('title', 'Description')

<div class="relative w-full min-h-screen bg-[#ffffff]">
    @include('livewire.home_components.header')
    @include('livewire.description_components.hero')
    @include('livewire.description_components.available_offers')
    @include('livewire.description_components.restaurant_menu')
    @include('livewire.description_components.reviews')
    <livewire:latest_reviews :restaurant="$restaurant"/>
{{--    @include('livewire.description_components.latest_reviews' {{restaurants}})--}}
    @include('livewire.description_components.footer')
</div>
