<div id="tabs-work"
    class="swiper-pagination !relative bg-grey flex flex-row justify-evenly py-2 shadow-afp top-0 bottom-0">
</div>
<div class="swiperSteps overflow-hidden">
    <div class="swiper-wrapper">
        {{-- -------------------------cut of divs 1 Materials --}}
        <div class="swiper-slide">
            <div class="how-work-div grid grid-cols-5 lg:grid-cols-12 bg-yellow-dark">
                <picture class="col-span-3 lg:col-span-7">
                    <source media="(min-width: 1000px)" srcset="{{ Vite::asset('resources/img/m-small.png') }}">
                    <img class="h-full w-auto" src="{{ Vite::asset('resources/img/how-work-img.png') }}" alt="">
                </picture>
                {{-- --------------Information --}}
                <div
                    class="col-start-4 col-span-2 lg:col-start-8 lg:col-span-5 mt-8 mb-auto lg:my-auto lg:mx-auto lg:w-5/6 pr-5 lg:pr-0">
                    <picture class="">
                        <img class="mx-auto !w-[unset]"
                            src="{{ Vite::asset('resources/img/icons/steps/MATERIALS.svg') }}" alt="">
                    </picture>
                    <h5 class="text-white text-center pt-3">{{ __('Materials') }}</h5>
                    {{-- ----------------------- text desktop --}}
                    <p class="hidden lg:block leading-tight text-white pl-3 pr-5 pt-5">
                        {{ __('howWeWork.materials1') }}</p>
                    <p class="hidden lg:block leading-tight text-white pb-8 pl-3 pr-5 pt-2">
                        {{ __('howWeWork.materials2') }}</p>
                    </p>
                </div>
                {{-- ------------------- text mobile --}}
                <div class="col-span-full pt-5 lg:hidden bg-white-bg">
                    <p class="leading-tight px-5">
                        {{ __('howWeWork.materials1') }}
                    </p>
                    <p class=" leading-tight pb-8 px-5 pt-5">
                        {{ __('howWeWork.materials2') }}
                    </p>
                </div>
            </div>
        </div>

        {{-- -------------------------cut of divs 2 Design --}}
        <div class="swiper-slide">
            <div class="how-work-div grid gap-[15px] grid-cols-5 lg:grid-cols-12 bg-yellow-dark">
                <div class="col-span-2 lg:col-span-4 lg:col-start-2 mt-8 mb-auto lg:my-auto pl-5 lg:pl-0">
                    <picture class="">
                        <img class="mx-auto !w-[unset]" src="{{ Vite::asset('resources/img/icons/steps/DESIGN.svg') }}"
                            alt="">
                    </picture>

                    <h5 class="text-white text-center pt-3">{{ __('Design') }}</h5>
                    <p class="hidden lg:block leading-tight text-white pl-3 pr-5 pt-5">
                        {{ __('howWeWork.design1') }}
                    </p>
                    <p class="hidden lg:block leading-tight text-white pb-8 pl-3 pr-5 pt-5">
                        {{ __('howWeWork.design2') }}</p>
                </div>
                <picture class="col-span-3 lg:col-start-7 lg:col-span-6 mt-auto mb-2">
                    <source media="(min-width: 1000px)"
                        srcset="{{ Vite::asset('resources/img/how-work-img-pc.png') }}">
                    <img width="100%" src="{{ Vite::asset('resources/img/how-work-img.png') }}" alt="">
                </picture>
                {{-- -------------------------------------- Text mobile --}}
                <div class="col-span-full lg:hidden pt-5 bg-white-bg">
                    <p class="leading-tight px-5">
                        {{ __('howWeWork.design1') }}
                    </p>
                    <p class=" leading-tight pb-8 px-5 pt-5">
                        {{ __('howWeWork.design2') }}
                    </p>
                </div>
            </div>
        </div>

        {{-- -------------------------cut of divs 3 Aplication --}}
        <div class="swiper-slide">
            <div class="how-work-div grid gap-[15px] grid-cols-5 lg:grid-cols-12 bg-yellow-dark">
                <picture class="col-span-3 lg:col-span-6 mt-auto mb-2">
                    <source media="(min-width: 1000px)"
                        srcset="{{ Vite::asset('resources/img/how-work-img-pc.png') }}">
                    <img width="100%" src="{{ Vite::asset('resources/img/how-work-img.png') }}" alt="">
                </picture>
                <div class="col-start-4 col-span-2 lg:col-start-8 lg:col-span-4 mt-8 mb-auto lg:my-auto">
                    <picture class="">
                        <img class="mx-auto !w-[unset]"
                            src="{{ Vite::asset('resources/img/icons/steps/APLICATION.svg') }}" alt="">
                    </picture>
                    <h5 class="text-white text-center pt-3">{{ __('Aplication') }}</h5>
                    <p class="hidden lg:block leading-tight text-white pl-3 pr-5 pt-5">
                        {{ __('howWeWork.aplication1') }}
                    </p>
                    <p class="hidden lg:block leading-tight text-white pb-8 pl-3 pr-5 pt-5">
                        {{ __('howWeWork.aplication2') }}
                    </p>
                </div>
                <div class="col-span-full lg:hidden p-5 bg-white-bg">
                    <p class="leading-tight px-5">
                        {{ __('howWeWork.aplication1') }}
                    </p>
                    <p class=" leading-tight pb-8 px-5 pt-5">
                        {{ __('howWeWork.aplication2') }}
                    </p>
                </div>
            </div>
        </div>
        {{-- -------------------------cut of divs 4 Follow up --}}
        <div class="swiper-slide">
            <div class="how-work-div grid gap-[15px] grid-cols-5 lg:grid-cols-12 bg-yellow-dark">
                <div class="col-span-2 lg:col-span-4 lg:col-start-2 mt-8 mb-auto lg:my-auto pl-5 lg:pl-5">
                    <picture class="">
                        <img class="mx-auto !w-[unset]"
                            src="{{ Vite::asset('resources/img/icons/steps/FOLLOWUP.svg') }}" alt="">
                    </picture>
                    <h5 class="text-white text-center pt-3">{{ __('Follow up') }}</h5>
                    <p class="hidden lg:block leading-tight text-white pl-3 pr-5 pt-5">
                        {{ __('howWeWork.follow1') }}
                    </p>
                    <p class="hidden lg:block leading-tight text-white pb-8 pl-3 pr-5 pt-5">
                        {{ __('howWeWork.follow2') }}
                    </p>
                </div>
                <picture class="col-span-3 lg:col-start-7 lg:col-span-6 mt-auto mb-2">
                    <source media="(min-width: 1000px)"
                        srcset="{{ Vite::asset('resources/img/how-work-img-pc.png') }}">
                    <img width="100%" src="{{ Vite::asset('resources/img/how-work-img.png') }}" alt="">
                </picture>
                {{-- -------------------------------------- Text mobile --}}
                <div class="col-span-full lg:hidden bg-white-bg pt-5">
                    <p class="leading-tight px-5">
                        {{ __('howWeWork.follow1') }}

                    </p>
                    <p class=" leading-tight pb-8 px-5 pt-5">
                        {{ __('howWeWork.follow2') }}
                    </p>
                </div>
            </div>
        </div>
        {{-- -------------------------cut of divs --}}
    </div>
</div>
