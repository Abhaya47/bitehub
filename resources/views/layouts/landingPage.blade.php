<!DOCTYPE html>
<html lang="en" class="font-raleway">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>@yield('title', 'BiteHub - Discover Restaurants and Delicious Food')</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Import Lato and Raleway fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

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

        /* Class for Lato (headings) */
        .font-lato {
            font-family: 'Lato', sans-serif;
        }

        /* Class for Raleway (body text) */
        .font-raleway {
            font-family: 'Raleway', sans-serif;
        }

        /* This automatically applies Lato to all headings */
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Lato', sans-serif;
        }
    </style>
</head>

<body class="bg-[#ffffff] overflow-x-hidden min-h-screen flex flex-col"
    style="padding-top:var(--safe-top); padding-bottom:var(--safe-bottom);">
    <div id="app" class="flex-1 flex flex-col">
        <main class="flex-1 w-full">
            {{ $slot }}
        </main>
    </div>
</body>

</html>
