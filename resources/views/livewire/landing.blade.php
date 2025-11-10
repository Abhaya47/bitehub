@section('title', 'BiteHub - Discover Restaurants and Delicious Food')

    <div class="relative w-full min-h-screen bg-[#ffffff]">

        <!-- Header Component -->
        {{-- @include('components.header') --}}

        <!-- Hero Section Component -->
        @include('livewire.landing_components.hero')

        <!-- About Us Section Component -->
        @include('livewire.landing_components.aboutus')

        <!--Service Section Component -->
        @include('livewire.landing_components.service')

        <!--Offers Section Component-->
        @include('livewire.landing_components.offers')

        <!-- Latest Blog Section Component -->
        @include('livewire.landing_components.latestblog')

        <!-- Footer Section Component -->
        @include('livewire.landing_components.footer')
    </div>

