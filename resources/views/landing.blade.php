@extends('layouts.app')

@section('title', 'BiteHub - Discover Restaurants and Delicious Food')

@section('content')
<div class="relative w-full min-h-screen bg-[#313131]">
    
    <!-- Header Component -->
    @include('components.header')

    <!-- Hero Section Component -->
    @include('components.hero')

    <!-- About Us Section Component -->
    @include('components.aboutus')

</div>
@endsection
