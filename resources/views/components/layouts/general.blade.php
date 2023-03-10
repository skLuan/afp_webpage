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

<body class="bg-white-bg">
    <div class="topbar px-5 text-white bg-black flex lg:hidden sticky top-0 z-50 border-b border-yellow border-opacity-20 justify-between lg:justify-end h-11 items-center lg:col-span-full">
        <a href="" class="text-sm uppercase font-jost font-medium underline lg:mr-10">
            Go to Whatsapp
        </a>
        <button class="">English</button>
    </div>
    <x-navigation.nav-bar></x-navigation.nav-bar>
    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>
    <x-navigation.tab-bar></x-navigation.tab-bar>
    <x-footer></x-footer>
</body>

</html>
