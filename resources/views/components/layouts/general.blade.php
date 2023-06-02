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
    <div
        class="topbar px-5 text-white bg-black flex lg:hidden sticky top-0 z-50 border-b border-yellow border-opacity-20 justify-between lg:justify-end h-11 items-center lg:col-span-full">
        <div class="flex flex-row">
            <iconify-icon class="animate__animated animate__flash animate__repeat-3 animate__slower m-auto text-xl" icon="logos:whatsapp"></iconify-icon>
            <iconify-icon class="text-xl m-auto" icon="ic:round-arrow-right-alt"></iconify-icon>
            <div class="flex flex-row items-center">
                <a class="mx-5 hover:text-yellow" href="https://wa.me/18132852287">Us</a>
                <a href="https://wa.me/573178801796" class="hover:text-yellow" >Latam</a>
            </div>
        </div>
        @if (app()->getLocale() === 'es')
            <a href="{{ route(Route::currentRouteName()) . '/en' }}" class="">English</a>
        @else
            <a href="{{ route(Route::currentRouteName()) . '/es' }}" class="">Español</a>
        @endif
    </div>
    <x-navigation.nav-bar></x-navigation.nav-bar>
    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>
    <x-navigation.tab-bar></x-navigation.tab-bar>
    <x-footer></x-footer>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</body>

</html>
