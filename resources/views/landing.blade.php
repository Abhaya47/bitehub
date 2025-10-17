@extends('layouts.app')

@section('content')

<div class="min-h-screen bg-gradient-to-b from-slate-900 via-slate-900 to-slate-800">
    <!-- Navigation -->
    <nav class="flex items-center justify-between px-6 md:px-12 py-6 bg-slate-900 bg-opacity-95 sticky top-0 z-50">
        <div class="flex items-center gap-2">
            <div class="w-10 h-10 bg-red-500 rounded-full flex items-center justify-center">
                <span class="text-white font-bold text-lg">B</span>
            </div>
            <span class="text-white font-bold text-xl hidden sm:inline">BiteHub</span>
        </div>
        
        <div class="hidden md:flex items-center gap-8">
            <a href="#home" class="text-gray-300 hover:text-white transition">Home</a>
            <a href="#reels" class="text-gray-300 hover:text-white transition">Reels</a>
            <a href="#chat" class="text-gray-300 hover:text-white transition">Chat</a>
            <a href="#about" class="text-gray-300 hover:text-white transition">About us</a>
        </div>
                
        <button class="bg-red-500 hover:bg-red-600 text-white px-6 py-2 rounded-full font-semibold transition">
            Get started
        </button>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="px-6 md:px-12 py-16 md:py-24">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center max-w-7xl mx-auto">
            <!-- Left Content -->
            <div class="space-y-8">
                <div>
                    <p class="text-red-500 font-semibold text-sm md:text-base mb-4 tracking-widest">WELCOME TO BITEHUB</p>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white leading-tight">
                        Discover Restaurants and <span class="text-red-500">Delicious Food.</span>
                    </h1>
                </div>
                
                <p class="text-gray-400 text-lg md:text-xl leading-relaxed max-w-lg">
                    Explore the latest food hotspots in your city through curated videos by top influencers and bloggers. Bite clubs all the buzz from social media directly to your fingertips!
                </p>
                
                <div class="flex flex-col sm:flex-row gap-4 pt-4">
                    <button class="bg-red-500 hover:bg-red-600 text-white px-8 py-3 rounded-full font-semibold transition flex items-center justify-center gap-2">
                        About Us
                        <span class="text-lg">→</span>
                    </button>
                    <button class="border-2 border-gray-600 hover:border-gray-400 text-gray-300 hover:text-white px-8 py-3 rounded-full font-semibold transition">
                        Learn More
                    </button>
                </div>
            </div>

            <!-- Right Images -->
            <div class="relative h-96 md:h-[500px] hidden lg:block">
                <div class="absolute inset-0 flex items-center justify-center">
                    <!-- Left Image -->
                    <div class="absolute left-0 w-48 h-72 rounded-3xl overflow-hidden shadow-2xl transform -rotate-6 hover:rotate-0 transition duration-300" style="box-shadow: 0 0 40px rgba(239, 68, 68, 0.4);">
                        <div class="w-full h-full bg-gradient-to-br from-yellow-600 to-orange-700 flex items-center justify-center">
                            <div class="text-center">
                                <div class="text-6xl mb-4">🍜</div>
                                <p class="text-white font-semibold">Fresh Noodles</p>
                            </div>
                        </div>
                    </div>

                    <!-- Center Image -->
                    <div class="absolute z-10 w-56 h-80 rounded-3xl overflow-hidden shadow-2xl transform scale-105" style="box-shadow: 0 0 50px rgba(239, 68, 68, 0.6);">
                        <div class="w-full h-full bg-gradient-to-br from-orange-600 to-red-700 flex items-center justify-center">
                            <div class="text-center">
                                <div class="text-7xl mb-4">🍲</div>
                                <p class="text-white font-semibold">Premium Cuisine</p>
                            </div>
                        </div>
                    </div>

                    <!-- Right Image -->
                    <div class="absolute right-0 w-48 h-72 rounded-3xl overflow-hidden shadow-2xl transform rotate-6 hover:rotate-0 transition duration-300" style="box-shadow: 0 0 40px rgba(239, 68, 68, 0.4);">
                        <div class="w-full h-full bg-gradient-to-br from-green-600 to-orange-600 flex items-center justify-center">
                            <div class="text-center">
                                <div class="text-6xl mb-4">🍤</div>
                                <p class="text-white font-semibold">Seafood Delight</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile Images -->
            <div class="lg:hidden flex justify-center gap-4">
                <div class="w-32 h-48 rounded-2xl overflow-hidden shadow-lg" style="box-shadow: 0 0 30px rgba(239, 68, 68, 0.4);">
                    <div class="w-full h-full bg-gradient-to-br from-orange-600 to-red-700 flex items-center justify-center">
                        <div class="text-4xl">🍲</div>
                    </div>
                </div>
                <div class="w-32 h-48 rounded-2xl overflow-hidden shadow-lg" style="box-shadow: 0 0 30px rgba(239, 68, 68, 0.4);">
                    <div class="w-full h-full bg-gradient-to-br from-green-600 to-orange-600 flex items-center justify-center">
                        <div class="text-4xl">🍤</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Wave Divider -->
    <div class="relative">
        <svg class="w-full" viewBox="0 0 1200 100" preserveAspectRatio="none">
            <path d="M0,30 Q300,0 600,30 T1200,30 L1200,100 L0,100 Z" fill="rgba(30, 41, 59, 0.5)"/>
        </svg>
    </div>
</div>
@endsection