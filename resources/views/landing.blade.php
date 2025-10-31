@extends('layouts.app')

@section('title', 'BiteHub - Discover Restaurants and Delicious Food')

@section('content')
    <div class="relative w-full min-h-screen bg-[#ffffff]">

        <!-- Header Component -->
        {{-- @include('components.header') --}}

        <!-- Hero Section Component -->
        @include('landing_components.hero')

        <!-- About Us Section Component -->
        @include('landing_components.aboutus')

        <!--Service Section Component -->
        @include('landing_components.service')

        <!--Offers Section Component-->
        @include('landing_components.offers')

        <!-- Latest Blog Section Component -->
        @include('landing_components.latestblog')

        <!-- Footer Section Component -->
        @include('landing_components.footer')
    </div>
@endsection
