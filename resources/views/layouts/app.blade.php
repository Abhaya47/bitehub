<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>@yield('title', 'BiteHub - Discover Restaurants and Delicious Food')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Inter:wght@400;600&family=SF+Pro+Display:wght@400&display=swap"
        rel="stylesheet">

    <style>
        html,
        body,
        #app {
            height: 100%;
        }

        body {
            font-family: 'Poppins', sans-serif;
        }

        .font-inter {
            font-family: 'Inter', sans-serif;
        }

        .font-sf {
            font-family: 'SF Pro Display', sans-serif;
        }
    </style>
</head>

<body class="bg-[#ffffff] overflow-x-hidden min-h-screen flex flex-col"
    style="padding-top:var(--safe-top); padding-bottom:var(--safe-bottom);">
    <div id="app" class="flex-1 flex flex-col">
        <main class="flex-1 w-full">
            @yield('content')
        </main>
    </div>
</body>

</html>
