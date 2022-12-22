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
    <div class="topbar px-5 text-white bg-black flex justify-between h-11 items-center">
        <a href="" class="text-sm uppercase font-jost underline">
        Go to Whatsapp
        </a>
        <button class="">English</button>
    </div>

    <section id="slider" class="swiper">
        <div class="swiper-wrapper">
            <div class="px-5 swiper-slide bg-[url('@/img/img-hero-sm.png')] h-full grid grid-cols-5 gap-[15px]">
                <article class="pt-11 pb-16 text-white col-span-3 col-start-3">
                    <h1 class="uppercase font-lemon"><span class="text-lg">Macrosynthetic</span> <br><span class="text-5xl">fibers</span></h1>
                    <p class="font-jost font-normal text-base leading-none">Control the propagation of cracks in the concrete, make your projects withstand the past of time.</p>
                </article>
                <div id="hero-buttons" class="col-span-full text-white">
                    <div>
                        <a href="" class="text-lg underline font-lemon">Fibers</a> <span>Explore the reinforcements</span>
                    </div>
                    <div>
                        <a href="" class="text-lg underline font-lemon">Engeniering</a> <span>Create your own</span>
                    </div>
                </div>
            </div>
            <div class="swiper-slide"> other slider</div>
        </div>
        {{-- <picture>
            <img src="/img/img-hero-sm.png" alt="">
        </picture> --}}
    </section>

    <section id="about" class="">
        <div class="bg-black px-5">
            <h3 class="uppercase font-medium text-white text-2xl font-lemon">strong concrete</h3>
        </div>
    </section>

</body>

</html>
