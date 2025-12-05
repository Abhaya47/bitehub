<div>
    <section class="min-h-screen flex items-center justify-center relative bg-gray-50 overflow-hidden">

        <!-- background image -->
        <img src="{{ asset('images/Background_Pattern.png') }}" alt="background image"
            class="absolute inset-0 w-full h-full object-cover">

        <!-- glass card -->
        <div
            class="relative w-full max-w-md backdrop-blur-md bg-white/40 shadow-lg border border-white/30 rounded-xl p-8">

            <a href="/" class="block text-center mb-6">
                <img src="{{ asset('images/bitehublogo.png') }}" alt="BiteHUB Logo"
                    class="h-16 w-auto mx-auto drop-shadow-md transition-transform duration-300 hover:scale-105">
            </a>

            <h1 class="text-xl font-semibold text-gray-800 mb-6 text-center">
                Create an account
            </h1>

            <form wire:submit.prevent="register" class="space-y-5">

                <div>
                    <label class="block mb-1 text-sm text-gray-700">Your Name</label>
                    <input type="text" wire:model="name"
                        class="w-full p-2.5 rounded-lg border border-gray-300 bg-white/60 text-gray-800 focus:ring-2 focus:ring-gray-400"
                        placeholder="Peekaboo pobo" required>
                </div>

                <div>
                    <label class="block mb-1 text-sm text-gray-700">Your Email</label>
                    <input type="email" wire:model="email"
                        class="w-full p-2.5 rounded-lg border border-gray-300 bg-white/60 text-gray-800 focus:ring-2 focus:ring-gray-400"
                        placeholder="name@company.com" required>
                </div>

                <div>
                    <label class="block mb-1 text-sm text-gray-700">Password</label>
                    <input type="password" wire:model="password"
                        class="w-full p-2.5 rounded-lg border border-gray-300 bg-white/60 text-gray-800 focus:ring-2 focus:ring-gray-400"
                        placeholder="••••••••" required>
                </div>

                @if (session()->has('message'))
                    <div class="p-3 rounded-lg bg-red-50 border border-red-300 text-red-600 text-sm font-medium">
                        {{ session('message') }}
                    </div>
                @endif

                <button type="submit"
                    class="w-full py-2.5 rounded-lg bg-red-400 text-white font-medium hover:bg-red-500 transition">
                    Create an account
                </button>

                <p class="text-sm text-gray-700 text-center">
                    Already have an account?
                    <a href="/login" class="text-blue-600 hover:underline">
                        Login here
                    </a>
                </p>

            </form>

        </div>

    </section>
</div>
