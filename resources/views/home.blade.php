<x-layouts.general>
    @php
        function localUrls($route)
        {
            $loc = 'en';
            if (Str::contains(url()->current(), '/es')) {
                $loc = 'es';
            }
            return route($route, $loc);
        }
    @endphp
    <div class="lg:grid lg:gap-0 lg:grid-cols-12">
        <x-slider.slider></x-slider.slider>
        {{-- -------------------------------About section --}}
        <section id="about" class="lg:col-start-9 bg-black lg:bg-transparent lg:h-full lg:col-span-4">

            <div class="bg-black bg-center px-5 lg:pl-0 lg:pr-12 h-full lg:flex lg:flex-col">
                <picture class="ml-auto flex pt-9">
                    <img class="mr-auto lg:hidden" src="{{ Vite::asset('resources/img/logo.png') }}" width="70%"
                        alt="">
                    <img class="ml-auto hidden lg:block" src="{{ Vite::asset('resources/img/logoComplete.png') }}"
                        width="30%" alt="">
                </picture>
                <h3
                    class="uppercase font-normal text-white mt-10 text-2xl  lg:ml-auto lg:text-[42px] font-lemon lg:mb-4 ">
                    {{ __('Strong concrete') }}</h3>
                <p
                    class="hidden lg:block text-grey-light font-normal text-lg lg:ml-auto font-jost leading-tight col-span-4 ">
                    <!-- Texto desktop -->
                    {{ __('home.infoStrong') }}
                </p>

            </div>

            <div class="px-5 lg:pl-0 pt-5 grid grid-cols-5 gap-[15px]">

                <p class="lg:hidden font-jost text-grey-light leading-tight pr-7 col-span-full">
                    <!-- Texto mobile -->
                    {{ __('home.infoStrong') }}
                </p>

                <div class="col-span-full lg:col-span-4 pt-20 lg:pt-0">
                    <h3 class="font-lemon text-2xl text-right lg:text-left font-medium text-white lg:text-grey pb-4">
                        {{ __('Service') }}</h3>
                    <!-- Title mobile -->
                    <p class="font-jost font-normal lg:text-lg text-grey-light lg:text-black !leading-tight pt-0 pb-3">
                        {{ __('home.infoService') }}</p>
                </div>
            </div>
        </section>
        {{-- ----CLOSE ----------------------About section --}}

        <section id="Services" class="col-span-10 col-start-2 px-5 lg:mt-40 justify-center">
            <div class="flex my-10 flex-row items-center">
                <picture class="w-full lg:w-[unset]"><img src="{{ Vite::asset('resources/img/icons/REUNION.svg') }}"
                        alt=""></picture>
                <p class="p-3 lg:w-1/3 ml-5">{{ __('home.Service1') }}</p>
            </div>
            <div class="flex my-10 flex-row-reverse items-center">
                <picture class=" w-full lg:w-[unset]"><img src="{{ Vite::asset('resources/img/icons/MANO.svg') }}"
                        alt=""></picture>
                <p class="p-3 lg:w-1/3 mr-5">{{ __('home.Service2') }}</p>
            </div>
            <div class="flex my-10 flex-row items-center">
                <picture class=" w-full lg:w-[unset]"><img src="{{ Vite::asset('resources/img/icons/BOMBILLO.svg') }}"
                        alt=""></picture>
                <p class="p-3 lg:w-1/3 ml-5">{{ __('home.Service3') }}</p>
            </div>
            <div class="flex my-10 flex-row-reverse items-center">
                <picture class=" w-full lg:w-[unset]"><img src="{{ Vite::asset('resources/img/icons/CHECKLIST.svg') }}"
                        alt=""></picture>
                <p class="p-3 lg:w-1/3 mr-5">{{ __('home.Service4') }}</p>
            </div>
        </section>
    </div>

    {{-- ------------------------------------------------Fiber Engineer --}}
    <section id="fiber-engineering" class="pb-28">
        <div class="bg-yellow grid grid-cols-5 lg:grid-cols-12 gap-[15px]">
            <div class="col-span-full lg:col-span-5 lg:col-start-2 h-fit px-5 lg:px-0 pt-20">
                <x-titles.yellowPrincipal>
                    @if (app()->getLocale() == 'es')
                        {{ __('engineering') }}
                        <br>
                        {{ __('Fiber') }}
                    @else
                        {{ __('Fiber') }} <br> {{ __('engineering') }}
                    @endif
                </x-titles.yellowPrincipal>
                <x-titles.subGrey>
                    {{ __('Create your own matriz') }}
                </x-titles.subGrey>
                <p class="pt-5 pb-10 leading-tight">
                    {{ __('home.infoFiberIg') }}
                    <br>
                    <br>
                    {{ __('home.infoFiberIg2') }}
                </p>
            </div>
            <picture class="col-span-full lg:col-span-6 lg:col-start-7">
                <source media="(min-width: 1000px)" srcset="{{ Vite::asset('resources/img/en-desktop.png') }}">
                <img class="h-full w-auto" src="{{ Vite::asset('resources/img/en-mobile.png') }}" alt=""
                    srcset="">
            </picture>
        </div>

        <div class="grid grid-cols-5 lg:grid-cols-12 gap-[15px] lg:pt-16">

            <div class="flex flex-col col-span-5 lg:col-start-2 my-auto px-5">
                <h4
                    class="my-auto py-20 lg:py-0 lg:px-10 text-xl leading-relaxed text-center normal-case font-light text-grey-light">
                    {{ __('Leading the Market with Quality and Competitive Prices') }}
                </h4>
                <a href="{{ localUrls('engineer') }}"
                    class="hidden lg:inline mx-auto mt-5 bg-grey-light px-8 py-[2px] rounded-sm text-xl shadow-btn text-white">{{ __('See more') }}</a>
            </div>
            <div class="px-5 lg:px-0 col-span-full lg:col-span-5 lg:col-start-7">
                <h6 class="pb-4 ml-auto text-grey text-xl text-right lg:text-left">{{ __('What it is?') }}</h6>
                <p class="pb-5 leading-tight">
                    {{ __('home.whatIs1') }}
                </p>
                <p class="col-span-full leading-tight">
                    {{ __('home.whatIs2') }}
                </p>
                <div class="lg:hidden flex mt-10">
                    <a href="{{ localUrls('engineer') }}"
                        class="mx-auto bg-grey-light px-8 py-[2px] rounded-sm shadow-btn text-white">{{ __('See more') }}</a>
                </div>
            </div>
        </div>
    </section>
    {{-- --- _____CLOSE ---------------------------------------Fiber Engineer --}}

    <section id="How-work" class="flex flex-col relative">
        <h6 class="col-span-2 ml-auto lg:ml-32 text-grey text-xl text-right lg:!text-left px-5 pb-4">
            {{ __('How we work?') }}
        </h6>
        <x-steps></x-steps>
        <div class="col-span-full flex">
            <a href="#contact"
                class="text-yellow uppercase font-bold text-sm mt-20 lg:mt-0 mx-5 lg:mx-auto bg-grey shado-afp px-16 py-2 rounded-[3px]">{{ __('Design your own reinforcement') }}</a>
        </div>
    </section>

    <section id="general-imgs" class="my-40">
        <picture class="">
            {{-- <source media="(min-width: 1000px)" srcset="{{ Vite::asset('resources/img/how-work-img-pc.png') }}"> --}}
            <img class="w-full" src="{{ Vite::asset('resources/img/PISOS.png') }}" alt="">
        </picture>
    </section>

    <section id="fibers" class="mt-32 bg-black relative pt-10 lg:py-10">
        <x-titles.yellowPrincipal class="!text-yellow ml-32">{{ __('Fibers') }} </x-titles.yellowPrincipal>
        {{-- component --}}
        <x-fiber-card></x-fiber-card>
    </section>
    <h6 class="text-center text-grey-light opacity-50 font-light text-2xl normal-case lg:text-3xl mt-10 lg:mt-24 pb-10">
        {{ __('More fibers coming!') }}</h6>

    <section id="projects" class="mt-36">
        {{-- <h6 class="text-center text-grey font-medium text-xl mb-5">{{ __('Projects with our fibers') }}</h6>
        <x-slider.thmbnail></x-slider.thmbnail> --}}
        <div class="flex flex-col lg:flex-row lg:justify-center items-center my-20">
            <a href="{{localUrls('engineer')}}"
                class="text-yellow uppercase font-bold text-sm mx-auto lg:mx-0 bg-grey shado-afp px-16 py-2 rounded-[3px]">{{ __('Create fibers') }}</a>
            <span class="py-4 font-thin text-xl lg:mx-20">or</span>
            <a class="mb-auto lg:my-auto underline font-bold text-base text-grey"
                href="{{localUrls('fibers')}}">{{ __('See Armor fiber') }} PF 54</a>
        </div>
    </section>

    <section id="why-us" class="grid grid-cols-5 lg:grid-cols-12 lg:mt-36 px-5 mb-36">
        <h3 class="text-grey-light text-xl col-span-2 lg:col-start-2 lg:mb-5">{{ __('Why us?') }}</h3>
        <p class="col-span-4 lg:col-start-2 my-5 lg:my-0 text-base text-black leading-tight">
            {{ __('home.Us1') }}
        </p>
        <p class="col-span-4 col-start-2 lg:col-start-7 text-base text-black leading-tight">
            {{ __('home.Us2') }}
        </p>

        <div class="col-span-full lg:col-span-4 lg:col-start-5 mt-20">
            <h6 class="text-grey-light font-jost normal-case font-normal text-lg text-center">
                {{ __('Stay in contact') }}</h6>
            <a href="https://wa.me/18132852287"
                class="text-center block underline text-grey font-bold my-5">{{ __('Say hi') }}</a>
            <div class="flex flex-row justify-around">
                <a href="">
                    <iconify-icon class="text-blue-400" icon="bi:linkedin" height="24"></iconify-icon>
                </a>
            </div>
            {{-- ---------------------------------- Info de contacto --}}
            <div class="">
                <div class="flex my-5">
                    <span class="font-normal text-base text-black opacity-50 lg:mr-0 lg:pr-11">Email</span>
                    <div class="hidden lg:block">
                        <a href="mailto:grover.vargas@americanflooringproducts.com"
                            class="font-normal text-base text-black hover:text-yellow mb-2 ml-28 items-center flex flex-row">
                            <iconify-icon class="text-2xl mr-3 opacity-25" icon="ic:outline-email"></iconify-icon>
                            grover.vargas@<span class="opacity-40">americanflooringproducts.com</span>
                        </a>
                        <a href="mailto:sales@americanflooringproducts.com"
                            class="font-normal text-base text-black hover:text-yellow mb-2 ml-28 items-center flex flex-row">
                            <iconify-icon class="text-2xl mr-3 opacity-0" icon="ic:outline-email"></iconify-icon>
                            sales@<span class="opacity-40">americanflooringproducts.com</span>
                        </a>
                        <a href="mailto:solutions@americanflooringproducts.com"
                            class="font-normal text-base text-black hover:text-yellow mb-2 ml-28 items-center flex flex-row">
                            <iconify-icon class="text-2xl mr-3 opacity-0" icon="ic:outline-email"></iconify-icon>
                            solutions@<span class="opacity-40">americanflooringproducts.com</span>
                        </a>
                    </div>
                    <div class="lg:hidden flex flex-col w-full">
                        <a href="mailto:grover.vargas@americanflooringproducts.com"
                            class="text-black hover:text-yellow ml-20 leading-tight mb-5 flex flex-col">
                            <div class="flex flex-row">
                                <iconify-icon class="text-2xl mr-3 opacity-25" icon="ic:outline-email"></iconify-icon>
                                grover.vargas@
                            </div>
                            <br>
                            <span class="opacity-25">americanflooringproducts.com</span>
                        </a>
                        <a href="mailto:sales@americanflooringproducts.com"
                            class="text-black hover:text-yellow ml-20 leading-tight mb-5 flex flex-col">
                            <div class="flex flex-row">
                                <iconify-icon class="text-2xl mr-3 opacity-25" icon="ic:outline-email"></iconify-icon>
                                sales@
                            </div>
                            <br>
                            <span class="opacity-25">americanflooringproducts.com</span>
                        </a>
                        <a href="mailto:solutions@americanflooringproducts.com"
                            class="text-black hover:text-yellow ml-20 leading-tight mb-5 flex flex-col">
                            <div class="flex flex-row">
                                <iconify-icon class="text-2xl mr-3 opacity-25" icon="ic:outline-email"></iconify-icon>
                                solutions@
                            </div>
                            <br>
                            <span class="opacity-25">americanflooringproducts.com</span>
                        </a>
                    </div>
                </div>
                <div class="flex flex-row">
                    <span class="lg:mr-0 ">
                        <span
                            class="block font-normal text-base text-black opacity-50 lg:pr-11">{{ __('Phone') }}</span>
                        <span class="block font-normal text-base text-black opacity-50">Whatsapp</span>
                    </span>
                    <a href="https://wa.me/18132852287"
                        class="font-normal text-base text-black hover:text-yellow my-2 mx-auto items-center flex flex-row">
                        <iconify-icon class="text-2xl mr-3 opacity-25" icon="ic:baseline-whatsapp"></iconify-icon>+1
                        (813) 285 2287
                    </a>
                </div>
            </div>
            {{-- -------------------------------------------------------- Cierre --}}
        </div>
    </section>

    <section id="contact">
        <h6 class="text-grey-light font-jost normal-case font-normal text-2xl text-center">
            {{ __('Im interested in') }}</h6>
        <div id="formsContainer" class="flex bg-grey shadow-afp px-5 py-3 justify-center">
            <span id="formSelectorEng"
                class="cursor-pointer duration-300 uppercase text-grey-light font-bold text-base">{{ __('Engineering') }}</span>
            <div class="h-[17px] w-[2px] my-auto bg-grey-light  mx-5"></div>
            <span id="formSelectorArmorFiber"
                class="cursor-pointer duration-300 uppercase text-yellow font-bold text-lg">{{ __('Buy Fibers') }}</span>
        </div>
        <div id="formArmorFiber" class="formContainer">
            <x-forms.form></x-forms.form>
        </div>
        </div> {{-- div nesesario funciona como un escape, hay algo mal cerrado arriba o doble cerrado --}}
        <div id="formEngineering" class="hidden formContainer">
            <x-forms.details></x-forms.details>
        </div>
    </section>
</x-layouts.general>
