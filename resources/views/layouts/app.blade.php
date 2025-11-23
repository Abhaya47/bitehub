<!DOCTYPE html>
<html lang="en" class="font-raleway">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>{{ $title ?? 'BiteHub - Discover Restaurants and Delicious Food' }}</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Import Lato and Raleway fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">


    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles

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
    </div>

    @stack('scripts')
</body>

</html>
