@extends('layouts.app')

@section('title', 'BiteHub - Discover Restaurants and Delicious Food')

@section('content')
    <div class="relative w-full min-h-screen bg-[#ffffff]">

        <!-- Header Component -->
        {{-- @include('components.header') --}}

        <!-- Hero Section Component -->
        @include('components.hero')

        <!-- About Us Section Component -->
        @include('components.aboutus')

        <!--Service Section Component -->
        @include('components.service')

        <!--Offers Section Component-->
        @include('components.offers')

        <!-- Latest Blog Section Component -->
        @include('components.latestblog')

        <!-- Footer Section Component -->
        @include('components.footer')
    </div>
@endsection
