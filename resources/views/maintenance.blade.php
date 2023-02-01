<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Concrete fibers AFP</title>

    <!-- Fonts -->
    {{-- <link rel="stylesheet" href="/resources/css/fonts.css"> --}}
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/css/fonts.css', 'resources/js/app.js'])
</head>

<body id="maintenance" class="bg-black">
    <div class="topbar px-5 text-white bg-black flex justify-between h-11 items-center">
        <a href="" class="text-sm uppercase font-jost font-medium underline">
            Go to Whatsapp
        </a>
        <button class="">English</button>
    </div>
    <main class="flex h-full w-full flex-col lg:max-w-lg lg:mx-auto">
        <div class="mx-auto mt-32 mb-auto px-5">
            <picture class="">
                <img width="100%" src="{{ Vite::asset('resources/img/logo.png') }}" alt="">
            </picture>
            <h2 class="mx-auto text-center pt-10 text-white-bg">Page in development</h2>
        </div>
    </main>
</body>

</html>
