{{-- <ul id="tabs-work" class="tabs bg-grey flex flex-row justify-evenly py-2 shadow-afp">
    <li class=" text-xl text-grey-light active"><button>Step1</button></li>
    <li class=" text-xl text-grey-light"><button>Step2</button></li>
    <li class=" text-xl text-grey-light"><button>Step3</button></li>
    <li class=" text-xl text-grey-light"><button>Step4</button></li>
</ul> --}}
<div id="tabs-work" class="swiper-pagination !relative bg-grey flex flex-row justify-evenly py-2 shadow-afp">
</div>
<div class="swiperSteps overflow-hidden">
    <div class="swiper-wrapper">
        {{-- -------------------------cut of divs 1 --}}
        <div class="swiper-slide">
            <div class="how-work-div grid gap-[15px] grid-cols-5 lg:grid-cols-12">
                <picture class="col-span-3 lg:col-span-6">
                    <source media="(min-width: 1000px)" srcset="{{ Vite::asset('resources/img/how-work-img-pc.png') }}">
                    <img width="100%" src="{{ Vite::asset('resources/img/how-work-img.png') }}" alt="">
                </picture>
                {{-- --------------Information --}}
                <div class="col-start-4 col-span-2 lg:col-start-8 lg:col-span-4 mt-8 mb-auto lg:my-auto pr-5 lg:pr-0">
                    <picture class="">
                        <img class="mx-auto !w-[unset]" src="{{ Vite::asset('resources/img/circle-img-space.png') }}"
                            alt="">
                    </picture>
                    <h5 class="text-grey text-center pt-3">Materials</h5>
                    {{-- ----------------------- text desktop --}}
                    <p class="hidden lg:block leading-tight pl-3 pr-5 pt-5">
                        We strive for excellence by choosing only reliable and high-quality raw material suppliers
                        to
                        guarantee consistent product quality.
                    </p>
                    <p class="hidden lg:block leading-tight pb-8 pl-3 pr-5 pt-5">
                        Our rigorous quality systems ensure compliance with technical specifications and industry
                        standards
                        for superior results.
                    </p>
                </div>
                {{-- ------------------- text mobile --}}
                <div class="col-span-full lg:hidden">
                    <p class="leading-tight px-5">
                        We strive for excellence by choosing only reliable and high-quality raw material suppliers
                        to
                        guarantee consistent product quality.
                    </p>
                    <p class=" leading-tight pb-8 px-5 pt-5">
                        Our rigorous quality systems ensure compliance with technical specifications and industry
                        standards
                        for superior results.
                    </p>
                </div>
            </div>
        </div>

        {{-- -------------------------cut of divs 2 --}}
        <div class="swiper-slide">
            <div class="how-work-div grid gap-[15px] grid-cols-5 lg:grid-cols-12">
                <div class="col-span-2 lg:col-span-4 lg:col-start-2 mt-8 mb-auto lg:my-auto pl-5 lg:pl-0">
                    <picture class="">
                        <img class="mx-auto !w-[unset]" src="{{ Vite::asset('resources/img/circle-img-space.png') }}"
                            alt="">
                    </picture>

                    <h5 class="text-grey text-center pt-3">Materials</h5>
                    <p class="hidden lg:block leading-tight pl-3 pr-5 pt-5">
                        We strive for excellence by choosing only reliable and high-quality raw material suppliers
                        to
                        guarantee consistent product quality.
                    </p>
                    <p class="hidden lg:block leading-tight pb-8 pl-3 pr-5 pt-5">
                        Our rigorous quality systems ensure compliance with technical specifications and industry
                        standards
                        for superior results.
                    </p>
                </div>
                <picture class="col-span-3 lg:col-start-7 lg:col-span-6 mt-auto mb-2">
                    <source media="(min-width: 1000px)" srcset="{{ Vite::asset('resources/img/how-work-img-pc.png') }}">
                    <img width="100%" src="{{ Vite::asset('resources/img/how-work-img.png') }}" alt="">
                </picture>
                {{-- -------------------------------------- Text mobile --}}
                <div class="col-span-full lg:hidden">
                    <p class="leading-tight px-5">
                        We strive for excellence by choosing only reliable and high-quality raw material suppliers
                        to
                        guarantee consistent product quality.
                    </p>
                    <p class=" leading-tight pb-8 px-5 pt-5">
                        Our rigorous quality systems ensure compliance with technical specifications and industry
                        standards
                        for superior results.
                    </p>
                </div>
            </div>
        </div>

        {{-- -------------------------cut of divs 3 --}}
        <div class="swiper-slide">
            <div class="how-work-div grid gap-[15px] grid-cols-5 lg:grid-cols-12">
                <picture class="col-span-3 lg:col-span-6 mt-auto mb-2">
                    <source media="(min-width: 1000px)" srcset="{{ Vite::asset('resources/img/how-work-img-pc.png') }}">
                    <img width="100%" src="{{ Vite::asset('resources/img/how-work-img.png') }}" alt="">
                </picture>
                <div class="col-start-4 col-span-2 lg:col-start-8 lg:col-span-4 mt-8 mb-auto lg:my-auto">
                    <picture class="">
                        <img class="mx-auto !w-[unset]" src="{{ Vite::asset('resources/img/circle-img-space.png') }}"
                            alt="">
                    </picture>
                    <h5 class="text-grey text-center pt-3">Materials</h5>
                    <p class="hidden lg:block leading-tight pl-3 pr-5 pt-5">
                        We strive for excellence by choosing only reliable and high-quality raw material suppliers
                        to
                        guarantee consistent product quality.
                    </p>
                    <p class="hidden lg:block leading-tight pb-8 pl-3 pr-5 pt-5">
                        Our rigorous quality systems ensure compliance with technical specifications and industry
                        standards
                        for superior results.
                    </p>
                </div>
                <div class="col-span-full lg:hidden">
                    <p class="leading-tight px-5">
                        We strive for excellence by choosing only reliable and high-quality raw material suppliers
                        to
                        guarantee consistent product quality.
                    </p>
                    <p class=" leading-tight pb-8 px-5 pt-5">
                        Our rigorous quality systems ensure compliance with technical specifications and industry
                        standards
                        for superior results.
                    </p>
                </div>
            </div>
        </div>
        {{-- -------------------------cut of divs 4 --}}
        <div class="swiper-slide">
            <div class="how-work-div grid gap-[15px] grid-cols-5 lg:grid-cols-12">
                <div class="col-span-2 lg:col-span-4 lg:col-start-2 mt-8 mb-auto lg:my-auto pl-5 lg:pl-5">
                    <picture class="">
                        <img class="mx-auto !w-[unset]" src="{{ Vite::asset('resources/img/circle-img-space.png') }}"
                            alt="">
                    </picture>
                    <h5 class="text-grey text-center pt-3">Materials</h5>
                    <p class="hidden lg:block leading-tight pl-3 pr-5 pt-5">
                        We strive for excellence by choosing only reliable and high-quality raw material suppliers
                        to
                        guarantee consistent product quality.
                    </p>
                    <p class="hidden lg:block leading-tight pb-8 pl-3 pr-5 pt-5">
                        Our rigorous quality systems ensure compliance with technical specifications and industry
                        standards
                        for superior results.
                    </p>
                </div>
                <picture class="col-span-3 lg:col-start-7 lg:col-span-6 mt-auto mb-2">
                    <source media="(min-width: 1000px)"
                        srcset="{{ Vite::asset('resources/img/how-work-img-pc.png') }}">
                    <img width="100%" src="{{ Vite::asset('resources/img/how-work-img.png') }}" alt="">
                </picture>
                {{-- -------------------------------------- Text mobile --}}
                <div class="col-span-full lg:hidden">
                    <p class="leading-tight px-5">
                        We strive for excellence by choosing only reliable and high-quality raw material suppliers
                        to
                        guarantee consistent product quality.
                    </p>
                    <p class=" leading-tight pb-8 px-5 pt-5">
                        Our rigorous quality systems ensure compliance with technical specifications and industry
                        standards
                        for superior results.
                    </p>
                </div>
            </div>
        </div>
        {{-- -------------------------cut of divs --}}
    </div>
</div>
