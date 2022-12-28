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
        <a href="" class="text-sm uppercase font-jost font-medium underline">
            Go to Whatsapp
        </a>
        <button class="">English</button>
    </div>

    <section id="slider" class="swiper">
        <div class="swiper-wrapper">
            {{-- Slide --}}
            <div
                class="px-5 swiper-slide bg-[url('@/img/img-hero-sm.png')] bg-cover bg-center h-full grid grid-cols-5 gap-[15px]">
                <article class="pt-11 pb-12 text-white col-span-3 col-start-3">
                    <h1 class="uppercase font-lemon"><span class="text-lg">Macrosynthetic</span> <br><span
                            class="text-5xl">fibers</span></h1>
                    <p class="font-jost font-normal text-base leading-none">Control the propagation of cracks in the
                        concrete, make your projects withstand the past of time.</p>
                </article>
                <div id="hero-buttons" class="col-span-full text-white pb-14">
                    <div class="flex flex-row justify-between pb-7">
                        <a href="" class="text-lg underline font-lemon">Fibers</a>
                        <div class="h-[1px] w-10 bg-white my-auto"></div> <span>Explore the reinforcements</span>
                    </div>
                    <div class="flex flex-row justify-between">
                        <a href="" class="text-lg underline font-lemon">Engeniering</a>
                        <div class="h-[1px] w-10 bg-white my-auto"></div> <span>Create your own</span>
                    </div>
                </div>
            </div>
            {{-- -----------------close Slide --}}
            {{-- Slider --}}
            <div
                class="px-5 swiper-slide bg-[url('@/img/img-hero-sm.png')] bg-cover bg-center h-full grid grid-cols-5 gap-[15px]">
                <article class="pt-11 pb-12 text-white col-span-3 col-start-3">
                    <h1 class="uppercase font-lemon"><span class="text-lg">Macrosynthetic</span> <br><span
                            class="text-5xl">fibers</span></h1>
                    <p class="font-jost font-normal text-base leading-none">Control the propagation of cracks in the
                        concrete, make your projects withstand the past of time.</p>
                </article>
                <div id="hero-buttons" class="col-span-full text-white pb-14">
                    <div class="flex flex-row justify-between pb-7">
                        <a href="" class="text-lg underline font-lemon">Fibers</a>
                        <div class="h-[1px] w-10 bg-white my-auto"></div> <span>Explore the reinforcements</span>
                    </div>
                    <div class="flex flex-row justify-between">
                        <a href="" class="text-lg underline font-lemon">Engeniering</a>
                        <div class="h-[1px] w-10 bg-white my-auto"></div> <span>Create your own</span>
                    </div>
                </div>
            </div>
            {{-- -----------------close Slider --}}

        </div>
    </section>

    <section id="about" class="pb-32">
        <div class="bg-black px-5">
            <picture class="ml-auto flex py-9">
                <img class="ml-auto" src="{{ Vite::asset('resources/img/logo.png') }}" width="50%" alt="">
            </picture>
            <h3 class="uppercase font-medium text-white text-2xl font-lemon">strong concrete</h3>
        </div>
        <div class=" px-5 pt-3 pb-16 grid grid-cols-5 gap-[15px]">
            <p class="font-jost leading-tight pr-7 col-span-full">The concrete matrix without macro synthetic fiber
                reinforcement present brittle behavior, with low bearing capacity and low deformations when subjected to
                tensile stresses (flexural tensile), presenting practically no plastic deformations.</p>
            <picture class="col-span-2 mt-auto mb-2">
                <img src="{{ Vite::asset('resources/img/circle-img-space.png') }}" alt="">
            </picture>
            <div class="col-span-3 col-start-3 pt-20">
                <h3 class="font-lemon text-2xl font-medium text-grey pb-4">Process</h3>
                <p class="font-jost leading-tight pr-7">The concrete matrix without macro synthetic fiber reinforcement
                    present brittle behavior, with low bearing capacity and low deformations</p>
            </div>
        </div>
        <div id="usaMAde" class="shadow-afp px-5 py-4 flex justify-center bg-white-bg">
            <picture>
                <img src="{{ Vite::asset('resources/img/USAlogo.png') }}" alt="">
            </picture>
        </div>
    </section>

    <section id="fiber-engineering" class="px-5 pb-32">
        <h2 class="uppercase text-yellow font-lemon font-medium text-4xl">Fiber <br> engineering</h2>
        <h5 class="uppercase font-lemon text-lg text-grey">Create your oun matrix</h5>
        <div class="grid grid-cols-5 gap-[15px]">
            <p class="pt-5 pb-8 col-span-4">
                Each project need special requirements, speak with us for a Fiber unique as your project
            </p>
            <h6 class="col-span-2 ml-auto text-grey text-xl text-right col-start-4">What it is?</h6>
            <p class="pt-5 pb-8 col-span-4">
                The concrete matrix without macro synthetic fiber reinforcement present brittle behavior, with low
                bearing capacity and low deformations
            </p>
            <div class="col-span-3 flex">
                <a href="" class="mx-auto bg-grey-light px-8 py-[2px] rounded-sm shadow-btn text-white">See
                    more</a>
            </div>
        </div>
    </section>

    <section id="How-work" class="flex flex-col">
        <h6 class="col-span-2 ml-auto text-grey text-xl text-right px-5 pb-2">How we work?</h6>
        <x-steps></x-steps>
        <div class="col-span-full flex">
            <button
                class="text-yellow uppercase font-bold text-sm font-me mx-auto bg-grey shado-afp px-16 py-2 rounded-[3px]">Create
                fibers</button>
        </div>
    </section>

    <section id="general-imgs" class="grid gap-[15px] grid-cols-5 mt-20">
        <picture class="col-span-4">
            <img src="{{ Vite::asset('resources/img/img-1.png') }}" alt="">
        </picture>
        <picture class="col-span-4 col-start-2">
            <img src="{{ Vite::asset('resources/img/img-2.png') }}" alt="">
        </picture>
    </section>

    <section id="fibers" class="mt-32">
        <h2 class="px-5 uppercase text-yellow font-lemon font-medium text-4xl mb-16">Fibers</h2>
        {{-- component --}}
        <x-fiber-card></x-fiber-card>
        <div class="flex">
            <a href=""
            class="shadow-btn uppercase text-white bg-grey-light px-9 py-2 rounded-2 mx-auto my-36 font-bold">See
            all Fibers</a>
        </div>
        <x-fiber-card></x-fiber-card>
    </section>
    <section id="contact">
        <div class="flex bg-grey shadow-afp px-5 py-1 justify-around">
            <span class="uppercase text-white font-bold text-lg">Engineering</span>
            <div class="h-[17px] w-[2px] my-auto bg-grey-light"></div>
            <span class="uppercase text-grey-light font-bold text-base">Buy Fibers</span>
        </div>
        <form id="engineering" class="flex flex-col mx-auto py-5 px-16" action="{{Vite::asset('resources/php/emailSender.php')}}" method="post">
            <label for="inputName" class="text-grey-light pl-1 border-none">Name</label>
            <input class="mb-2 shadow-afp rounded-sm focus:!border-yellow focus:border-[1px] focus:bg-white-true focus:shadow-btn border-none bg-white" type="text" name="name" id="inputName">
            <label for="inputEmail" class="text-grey-light pl-1">Email</label>
            <input class="mb-2 shadow-afp rounded-sm focus:!border-yellow focus:border-[1px] focus:bg-white-true focus:shadow-btn bg-white" type="mail" name="email" id="inputEmail">
            <label for="inputPhone" class="text-grey-light pl-1">Phone</label>
            <input class="mb-2 shadow-afp rounded-sm focus:!border-yellow focus:border-[1px] focus:bg-white-true focus:shadow-btn bg-white" type="phone" name="phone" id="inputPhone">
            <label for="inputNotes" class="text-grey-light pl-1">Notes</label>
            <textarea class="mb-2 shadow-afp rounded-sm focus:!border-yellow focus:border-[1px] focus:bg-white-true focus:shadow-btn border-none  bg-white" name="notes" id="inputNotes" cols="30" rows="10"></textarea>
            <button class="uppercase font-bold text-yellow bg-white-true w-40 py-1 my-16 mx-auto shadow-btn rounded" type="submit">send</button>
        </form>
    </section>
</body>

</html>
