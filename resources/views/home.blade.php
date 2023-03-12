<x-layouts.general>

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
                    strong
                    concrete</h3>
                <p
                    class="hidden lg:block text-grey-light font-normal text-lg lg:ml-auto font-jost leading-tight col-span-4 ">
                    <!-- Texto desktop -->
                    The reinforcement with discontinuous and randomly distributed fibers in the concrete matrix has as
                    its main function to control the propagation of cracks in the concrete, changing its mechanical
                    behavior after the breakage of the matrix, considerably improving the energy absorption capacity of
                    the concrete, that is, its toughness, transforming a material with brittle characteristics into a
                    ductile one.
                </p>

            </div>

            <div class="px-5 lg:pl-0 pt-5 grid grid-cols-5 gap-[15px]">

                <p class="lg:hidden font-jost text-grey-light leading-tight pr-7 col-span-full">
                    <!-- Texto mobile -->
                    The reinforcement with discontinuous and
                    randomly distributed fibers in the concrete matrix has as its main function to control the
                    propagation of cracks in the concrete, changing its mechanical behavior after the breakage of the
                    matrix, considerably improving the energy absorption capacity of the concrete, that is, its
                    toughness, transforming a material with brittle characteristics into a ductile one.
                </p>

                <div class="col-span-full lg:col-span-4 pt-20 lg:pt-0">
                    <h3 class="font-lemon text-2xl text-right lg:text-left font-medium text-white lg:text-grey pb-4">
                        Service</h3>
                    <!-- Title mobile -->
                    <p class="font-jost font-normal lg:text-lg text-grey-light lg:text-black !leading-tight pt-0 pb-3">
                        Our
                        commitment is to deliver exceptional service at the
                        forefront of our operations:</p>
                </div>
            </div>
        </section>
        {{-- ----CLOSE ----------------------About section --}}

        <section id="Services" class="col-span-10 col-start-2 px-5 lg:mt-40 justify-center">
            <div class="flex my-10 flex-row items-center">
                <picture class="w-full lg:w-[unset]"><img src="{{ Vite::asset('resources/img/icons/REUNION.svg') }}"
                        alt=""></picture>
                <p class="p-3 lg:w-1/3 ml-5">We place a strong emphasis on providing high-quality customer care,
                    building customer trust and a positive reputation.</p>
            </div>
            <div class="flex my-10 flex-row-reverse items-center">
                <picture class=" w-full lg:w-[unset]"><img src="{{ Vite::asset('resources/img/icons/MANO.svg') }}"
                        alt=""></picture>
                <p class="p-3 lg:w-1/3 mr-5">To stay ahead in the industry, we adopt advanced technologies and efficient
                    processes to ensure fast and accurate service.</p>
            </div>
            <div class="flex my-10 flex-row items-center">
                <picture class=" w-full lg:w-[unset]"><img src="{{ Vite::asset('resources/img/icons/BOMBILLO.svg') }}"
                        alt=""></picture>
                <p class="p-3 lg:w-1/3 ml-5">Collaboration with customers, suppliers, and market partners is key to
                    deliver innovative solutions and continuous service improvements.</p>
            </div>
            <div class="flex my-10 flex-row-reverse items-center">
                <picture class=" w-full lg:w-[unset]"><img src="{{ Vite::asset('resources/img/icons/CHECKLIST.svg') }}"
                        alt=""></picture>
                <p class="p-3 lg:w-1/3 mr-5">We continuously monitor the performance and quality of our designs to
                    identify areas for improvement and stay ahead of the competition.</p>
            </div>
        </section>
    </div>

    {{-- ------------------------------------------------Fiber Engineer --}}
    <section id="fiber-engineering" class="pb-28">
        <div class="bg-yellow grid grid-cols-5 lg:grid-cols-12 gap-[15px]">
            <div class="col-span-full lg:col-span-5 lg:col-start-2 h-fit px-5 lg:px-0 pt-20">
                <x-titles.yellowPrincipal>
                    Fiber <br> engineering
                </x-titles.yellowPrincipal>
                <x-titles.subGrey>
                    Create your own matriz
                </x-titles.subGrey>
                <p class="pt-5 pb-10 leading-tight">
                    We are committed to providing our customers with the best possible service and products. offering a
                    wide
                    range of high-quality fibers, with different types and specifications to meet the unique needs of
                    each
                    customer.
                    <br>
                    <br>
                    Additionally, we provide customized solutions and technical advice to ensure that our customers
                    select
                    the right products for their requirements.
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
                    Leading the Market with Quality and Competitive Prices
                </h4>
                <a href="/engineering"
                    class="hidden lg:inline mx-auto mt-5 bg-grey-light px-8 py-[2px] rounded-sm text-xl shadow-btn text-white">See
                    more</a>
            </div>
            <div class="px-5 lg:px-0 col-span-full lg:col-span-5 lg:col-start-7">
                <h6 class="pb-4 ml-auto text-grey text-xl text-right lg:text-left">What it is?</h6>
                <p class="pb-5 leading-tight">
                    Macrosynthetic fibers are the secret ingredient for concrete slabs to withstand the design loads
                    required on every project
                </p>
                <p class="col-span-full leading-tight">
                    By improving strength and ductility, these fibers can help prevent cracks and fractures from
                    spreading,
                    giving concrete slabs the endurance they need to withstand repeated stress and loads....
                </p>
                <div class="lg:hidden flex mt-10">
                    <a href="/engineering"
                        class="mx-auto bg-grey-light px-8 py-[2px] rounded-sm shadow-btn text-white">See
                        more</a>
                </div>
            </div>
        </div>
    </section>
    {{-- --- _____CLOSE ---------------------------------------Fiber Engineer --}}

    <section id="How-work" class="flex flex-col relative">
        <h6 class="col-span-2 ml-auto lg:ml-32 text-grey text-xl text-right lg:!text-left px-5 pb-4">How we work?
        </h6>
        <x-steps></x-steps>
        <div class="col-span-full flex">
            <button
                class="text-yellow uppercase font-bold text-sm mt-20 lg:mt-0 mx-5 lg:mx-auto bg-grey shado-afp px-16 py-2 rounded-[3px]">Design
                you own reinforcement</button>
        </div>
    </section>

    <section id="general-imgs" class="my-40">
        <picture class="">
            {{-- <source media="(min-width: 1000px)" srcset="{{ Vite::asset('resources/img/how-work-img-pc.png') }}"> --}}
            <img class="w-full" src="{{ Vite::asset('resources/img/PISOS.png') }}" alt="">
        </picture>
    </section>

    <section id="fibers" class="mt-32 bg-black relative pt-10 lg:py-10">
        <x-titles.yellowPrincipal class="!text-yellow ml-32">Fibers </x-titles.yellowPrincipal>
        {{-- component --}}
        <x-fiber-card></x-fiber-card>
    </section>
    <h6 class="text-center text-grey-light opacity-50 font-light text-2xl normal-case lg:text-3xl mt-10 lg:mt-24 pb-10">
        More
        fibers coming!</h6>

    <section id="projects" class="mt-36">
        <h6 class="text-center text-grey font-medium text-xl mb-5">Projects with our fibers</h6>
        <x-slider.thmbnail></x-slider.thmbnail>
        <div class="flex flex-col lg:flex-row lg:justify-center items-center my-20">
            <button
                class="text-yellow uppercase font-bold text-sm mx-auto lg:mx-0 bg-grey shado-afp px-16 py-2 rounded-[3px]">Create
                fibers</button>
            <span class="py-4 font-thin text-xl lg:mx-20">or</span>
            <a class="mb-auto lg:my-auto underline font-bold text-base text-grey" href="/fibers">See Armor fiber PF
                54</a>
        </div>
    </section>

    <section id="why-us" class="grid grid-cols-5 lg:grid-cols-12 lg:mt-36 px-5 mb-36">
        <h3 class="text-grey-light text-xl col-span-2 lg:col-start-2 lg:mb-5">Why us?</h3>
        <p class="col-span-4 lg:col-start-2 my-5 lg:my-0 text-base text-black leading-tight">Our team of highly trained
            engineers and designers
            are experts in material and slab
            reinforcement techniques. We use advanced technology and our own design software to accurately simulate
            fiber-reinforced slabs.</p>
        <p class="col-span-4 col-start-2 lg:col-start-7 text-base text-black leading-tight">Collaborating closely with
            customers and
            market players, we understand their
            needs and effectively communicate our designs. At the forefront of innovation, we continuously research and
            develop advanced techniques and materials for slab reinforcement.</p>

        <div class="col-span-3 col-start-2 lg:col-span-4 lg:col-start-5 mt-20">
            <h6 class="text-grey-light font-jost normal-case font-normal text-lg text-center">Stay in contact</h6>
            <a href="" class="text-center block underline text-grey font-bold my-5">Say hi</a>
            <div class="flex flex-row justify-around">
                <a href="">
                    <iconify-icon class="text-blue-400" icon="bi:linkedin" height="24"></iconify-icon>
                </a>
            </div>
            <div class="">
                <div class="flex my-5 justify-evenly">
                    <span class="font-normal text-base text-black opacity-50 mr-auto lg:mr-0 lg:pr-11">Email</span><a
                        href="">Mail@mail.com</a>
                </div>
                <div class="flex flex-row justify-evenly">
                    <span class="mr-auto lg:mr-0">
                        <span class="block font-normal text-base text-black opacity-50">Phone</span>
                        <span class="block font-normal text-base text-black opacity-50">Whatsapp</span>
                    </span>
                    <a class="lg:my-auto" href="">+1 000 0000000</a>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <h6 class="text-grey-light font-jost normal-case font-normal text-2xl text-center">Im interested in</h6>
        <div class="flex bg-grey shadow-afp px-5 py-1 justify-around">
            <span class="uppercase text-white font-bold text-lg">Engineering</span>
            <div class="h-[17px] w-[2px] my-auto bg-grey-light"></div>
            <span class="uppercase text-grey-light font-bold text-base">Buy Fibers</span>
        </div>
        <x-forms.form></x-forms.form>
    </section>
</x-layouts.general>
