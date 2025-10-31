@extends('layouts.app')

@section('title', 'BiteHub - Your Gateway to Culinary Delights')

@section('content')
    {{-- min-h-screen Ensures the element has a minimum height equal to the viewport height (100vh) --}}
    <div class = "relative w-full min-h-screen bg-[#ffffff]">
        <!--Header Component-->
        @include('home_components.header')

        <!-- Hero Section Component --> 
        @include('home_components.hero')

        <!-- Card Slider Secction -->
        @include('home_components.slider')
    </div>
@endsection
