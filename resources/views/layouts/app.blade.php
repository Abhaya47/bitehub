<!DOCTYPE html>
<html lang="en" class="font-raleway">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>{{ $restaurant->name ?? 'BiteHub' }}</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Import Lato and Raleway fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">


    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    <script src="{{ asset('js/notifications.js') }}" defer></script>

    <style>
        html,
        body,
        #app {
            height: 100%;
        }

        /* Sets Raleway as default body font */

        body {
            font-family: 'Raleway', sans-serif;
        }

        .font-lato {
            font-family: 'Lato', sans-serif;
        }

        .font-raleway {
            font-family: 'Raleway', sans-serif;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Lato', sans-serif;
        }
    </style>

    @stack('styles')
</head>

<body class="bg-[url('/images/background_pattern.png')] bg-cover bg-center overflow-x-hidden min-h-screen flex flex-col"
    style="padding-top:var(--safe-top); padding-bottom:var(--safe-bottom);">

    <div id="app" class="flex-1 flex flex-col">
        <main class="flex-1 w-full">
            {{ $slot }}
            @vite('resources/js/app.js')
            @livewireScripts
        </main>
        @include('livewire.description_components.footer')
    </div>

    <!-- Toast Notification Container -->
    <div id="toast-container" class="fixed bottom-5 right-5 z-50 flex flex-col gap-3 pointer-events-none"></div>

    <script>
        document.addEventListener('livewire:init', () => {
            Livewire.on('show-toast', (event) => {
                const data = event[0] || event;
                const message = data.message;
                const type = data.type || 'success';

                const toast = document.createElement('div');
                toast.className = `
                pointer-events-auto flex items-center gap-2 px-4 py-3 rounded-lg shadow-lg text-white transform transition-all duration-300 translate-y-10 opacity-0
                ${type === 'success' ? 'bg-green-500' : 'bg-red-400'}
            `;

                toast.innerHTML = `
                <span class="font-lato text-sm font-medium tracking-wide">${message}</span>
            `;

                const container = document.getElementById('toast-container');
                container.appendChild(toast);

                // Animate in
                requestAnimationFrame(() => {
                    toast.classList.remove('translate-y-10', 'opacity-0');
                });

                // Remove after 2 seconds
                setTimeout(() => {
                    toast.classList.add('opacity-0', 'translate-y-4');
                    setTimeout(() => {
                        toast.remove();
                    }, 300);
                }, 2000);
            });
        });
    </script>

    @stack('scripts')
</body>

</html>