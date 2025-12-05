<div>
    <section class="min-h-screen flex items-center justify-center relative bg-gray-50 overflow-hidden">

        <!-- background image -->
        <img 
            src="{{ asset('images/Background_Pattern.png') }}" 
            alt="background image"
            class="absolute inset-0 w-full h-full object-cover"
        >

        <!-- glass card -->
        <div class="relative w-full max-w-md backdrop-blur-md bg-white/40 shadow-lg border border-white/30 rounded-xl p-8">
            <a href="/" class="block text-center mb-6">
                <img src="{{ asset('images/bitehublogo.png') }}" alt="BiteHUB Logo" class="h-16 w-auto mx-auto drop-shadow-md transition-transform duration-300 hover:scale-105">
            </a>

            <h1 class="text-xl font-semibold text-gray-800 mb-6 text-center">
                Sign in to your account
            </h1>

            <form wire:submit.prevent="login" class="space-y-5">

                <div>
                    <label class="block mb-1 text-sm text-gray-700">Email</label>
                    <input
                        type="email"
                        wire:model="email"
                        class="w-full p-2.5 rounded-lg border border-gray-300 bg-white/60 text-gray-800 focus:ring-2 focus:ring-gray-400"
                        placeholder="name@company.com"
                        required
                    >
                </div>

                <div>
                    <label class="block mb-1 text-sm text-gray-700">Password</label>
                    <input
                        type="password"
                        wire:model="password"
                        class="w-full p-2.5 rounded-lg border border-gray-300 bg-white/60 text-gray-800 focus:ring-2 focus:ring-gray-400"
                        placeholder="••••••••"
                        required
                    >
                </div>

                @if (session()->has('error'))
                    <div class="p-3 rounded-lg bg-red-50 border border-red-300 text-red-600 text-sm font-medium">
                        {{ session('error') }}
                    </div>
                @endif

                <div class="flex items-center justify-between">
                    <label class="flex items-center space-x-2 text-sm text-gray-700">
                        <input
                            type="checkbox"
                            wire:model="remember"
                            class="w-4 h-4 rounded border-gray-300 focus:ring-gray-400"
                        >
                        <span>Remember me</span>
                    </label>

                    <a href="/forgot-password" class="text-sm text-blue-600 hover:underline">
                        Forgot password?
                    </a>
                </div>

                <button
                    type="submit"
                    class="w-full py-2.5 rounded-lg bg-red-400 text-white font-medium hover:bg-red-500 transition"
                >
                    Sign in
                </button>

                <p class="text-sm text-gray-700 text-center">
                    Don’t have an account?
                    <a href="/register" class="text-blue-600 hover:underline">Sign up</a>
                </p>

            </form>

        </div>

    </section>
</div>
