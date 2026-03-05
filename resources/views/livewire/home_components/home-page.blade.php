@section('title', 'BiteHub - Your Gateway to Culinary Delights')

<div class = "relative w-full min-h-screen ">
    <!-- Background with minimal opacity -->
    <div class="fixed inset-0 bg-[url('/images/Background_Pattern.png')] bg-cover bg-fixed opacity-[0.03] -z-10"></div>

    <!--Header Component-->
    @include('livewire.home_components.header')

    <!-- Hero Section Component -->
    @include('livewire.home_components.hero')

    <!-- Card Slider Secction -->
    @include('livewire.home_components.slider')
</div>
