<div class="bg-black grid lg:grid-cols-5 p-5 pt-10 pb-16">
    <div class="col-span-1 lg:col-start-2 mb-20">
        <a href="{{ route('tempHome') }}">
            <picture class="h-11">
                <img class="h-[30%] lg:h-[unset]" src="{{ Vite::asset('resources/img/logo.png') }}" alt="Logo afp">
            </picture>
        </a>
        <span class="text-white block mt-4">14527 Mirasol Manor Ct, Tampa, FL 33626</span>
        <div class="flex lg:hidden flex-col mt-5 text-lg">
            <a href="mailto:grover.vargas@americanflooringproducts.com"
                class="text-white hover:text-yellow ml-5 leading-tight mb-5 flex flex-col">
                <div class="flex flex-row">
                    <iconify-icon class="text-2xl mr-3 opacity-25" icon="ic:outline-email"></iconify-icon>
                    grover.vargas@
                </div>
                <br>
                <span class="opacity-25">americanflooringproducts.com</span>
            </a>
            <a href="mailto:sales@americanflooringproducts.com"
                class="text-white hover:text-yellow ml-5 leading-tight mb-5 flex flex-col">
                <div class="flex flex-row">
                    <iconify-icon class="text-2xl mr-3 opacity-25" icon="ic:outline-email"></iconify-icon>
                    sales@
                </div>
                <br>
                <span class="opacity-25">americanflooringproducts.com</span>
            </a>
            <a href="mailto:solutions@americanflooringproducts.com"
                class="text-white hover:text-yellow ml-5 leading-tight mb-5 flex flex-col">
                <div class="flex flex-row">
                    <iconify-icon class="text-2xl mr-3 opacity-25" icon="ic:outline-email"></iconify-icon>
                    solutions@
                </div>
                <br>
                <span class="opacity-25">americanflooringproducts.com</span>
            </a>
            <a href="https://wa.me/18132852287"
                class="text-white hover:text-yellow ml-5 my-2 items-center flex flex-row">
                <iconify-icon class="text-2xl mr-3 opacity-25" icon="ic:baseline-whatsapp"></iconify-icon>+1 (813) 285
                2287
            </a>
        </div>
    </div>
    <div class="flex">
        <ul class="lg:ml-auto text-grey-light text-xl">
            <li class="hover:text-yellow mx-5"><a href="{{ route('tempHome') }}">
                    {{ __('Home') }}
                </a>
            </li>
            <li class="hover:text-yellow m-5"><a href="{{ route('engineer') }}">
                    {{__('Fiber engineering')}}
                </a>
            </li>
            <li class="hover:text-yellow m-5"><a href="{{ route('fibers') }}">
                    {{__('Armor fiber')}}
                </a>
            </li>
            <li class="hover:text-yellow m-5"><a href="#contact">
                    {{__('Contact us')}}
                </a>
            </li>
        </ul>
    </div>
    <div class="lg:flex hidden flex-col w-2/3 lg:w-full mt-5 lg:mt-0 text-lg">
        <a href="mailto:grover.vargas@americanflooringproducts.com"
            class="text-white hover:text-yellow mx-5 mb-2 items-center flex flex-row">
            <iconify-icon class="text-2xl mr-3 opacity-25" icon="ic:outline-email"></iconify-icon>
            grover.vargas@<span class="opacity-40">americanflooringproducts.com</span>
        </a>
        <a href="mailto:sales@americanflooringproducts.com"
            class="text-white hover:text-yellow mx-5 mb-2 items-center flex flex-row">
            <iconify-icon class="text-2xl mr-3 opacity-0" icon="ic:outline-email"></iconify-icon>
            sales@<span class="opacity-40">americanflooringproducts.com</span>
        </a>
        <a href="mailto:solutions@americanflooringproducts.com"
            class="text-white hover:text-yellow mx-5 mb-2 items-center flex flex-row">
            <iconify-icon class="text-2xl mr-3 opacity-0" icon="ic:outline-email"></iconify-icon>
            solutions@<span class="opacity-40">americanflooringproducts.com</span>
        </a>
        <a href="https://wa.me/18132852287" class="text-white hover:text-yellow mx-5 my-2 items-center flex flex-row">
            <iconify-icon class="text-2xl mr-3 opacity-25" icon="ic:baseline-whatsapp"></iconify-icon>+1 (813) 285 2287
        </a>
    </div>
</div>
