<section id="slider" class="swiper lg:col-span-8 h-full">
    <div class="swiper-wrapper ">
        {{-- Slide --}}
        <div
            class="px-5 swiper-slide bg-black bg-[url('@/img/homesmall.png')] bg-cover bg-center h-full grid grid-cols-5 gap-[15px]">
            <article class="pt-11 pb-12 text-white col-span-3 col-start-3 lg:col-span-3 lg:col-start-1">
                <h1 class="uppercase font-lemon">
                    @if (app()->getLocale() == 'es')
                        <span class="text-5xl lg:text-7xl">{{ __('Fibers') }}</span>
                        <br>
                        <span class=" text-lg lg:text-2xl">{{ __('Macrosynthetic') }}</span>
                    @else
                        <span class=" text-lg lg:text-2xl">{{ __('Macrosynthetic') }}</span>
                        <br>
                        <span class="text-5xl lg:text-7xl">{{ __('Fibers') }}</span>
                    @endif
                </h1>
                <p class="font-jost text-lg lg:text-[22px] pt-5 leading-tight">{{ __('home.GetMoreOut') }}</p>
            </article>
            <div id="hero-buttons" class="col-span-full text-white pb-14">
                <div class="flex flex-row-reverse justify-between lg:justify-end pb-7">
                    <a href="#fibers" class="text-lg underline font-lemon">{{ __('Fibers') }}</a>
                    <div class="h-[1px] w-10 lg:w-1/4 bg-white my-auto lg:mx-12"></div> <span
                        class="font-light text-lg lg:text-2xl">{{ __('home.Explore') }}</span>
                </div>
                <div class="flex flex-row-reverse justify-between lg:justify-end">
                    <a href="#fiber-engineering" class="text-lg underline font-lemon">{{ __('Engeniering') }}</a>
                    <div class="h-[1px] w-10 lg:w-1/3 bg-white my-auto lg:mx-12"></div> <span
                        class="font-light text-lg lg:text-2xl">{{ __('home.Create') }}</span>
                </div>
            </div>
        </div>
        {{-- -----------------close Slide --}}
        {{-- Slider --}}
        <div
            class="px-5 swiper-slide bg-[url('@/img/img-hero-sm.png')] bg-cover bg-center h-full grid grid-cols-5 gap-[15px]">
            <article class="pt-11 pb-12 text-white col-span-3 col-start-3">
                <h1 class="uppercase font-lemon"><span class="text-lg">{{ __('Macrosynthetic') }}</span> <br><span
                        class="text-5xl">{{ __('Fibers') }}</span></h1>
                <p class="font-jost font-normal text-base leading-none">Control the propagation of cracks in the
                    concrete, make your projects withstand the past of time.</p>
            </article>
            <div id="hero-buttons" class="col-span-full text-white pb-14">
                <div class="flex flex-row justify-between pb-7">
                    <a href="" class="text-lg underline font-lemon">{{ __('Fibers') }}</a>
                    <div class="h-[1px] w-10 bg-white my-auto"></div> <span>{{ __('home.Explore') }}</span>
                </div>
                <div class="flex flex-row justify-between">
                    <a href="" class="text-lg underline font-lemon">{{ __('Engeniering') }}</a>
                    <div class="h-[1px] w-10 bg-white my-auto"></div> <span>{{ __('home.Create') }}</span>
                </div>
            </div>
        </div>
        {{-- -----------------close Slider --}}

    </div>
</section>
