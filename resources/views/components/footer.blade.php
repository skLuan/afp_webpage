<div class="bg-black grid lg:grid-cols-5 p-5 pt-10 pb-16">
    <div class="col-span-1 lg:col-start-2">
        <a href="{{ route('home') }}">
            <picture class="h-11">
                <img class="h-[60%] lg:h-[unset]" src="{{ Vite::asset('resources/img/logo.png') }}" alt="Logo afp">
            </picture>
        </a>
        <span class="text-white block mt-4">14527 Mirasol Manor Ct, Tampa, FL 33626</span>
    </div>
    <div class="flex">
        <ul class="lg:ml-auto text-grey-light text-xl mb-5">
            <li class="hover:text-yellow mx-5"><a href="{{ localUrl('home') }}">
                    {{ __('Home') }}
                </a>
            </li>
            <li class="hover:text-yellow m-5"><a href="{{ localUrl('engineer') }}">
                    {{ __('Fiber engineering') }}
                </a>
            </li>
            <li class="hover:text-yellow m-5"><a href="{{ localUrl('fibers') }}">
                    {{ __('Armor fiber') }}
                </a>
            </li>
            <li class="hover:text-yellow m-5"><a href="{{ localUrl('home') . '/#contact' }}">
                    {{ __('Contact us') }}
                </a>
            </li>
        </ul>
    </div>
    <div class="flex lg:hidden flex-col mt-5 text-lg mb-8">
        <p class="text-white mx-6 text-xs opacity-25">US</p>
        <a href="mailto:grover.vargas@americanflooringproducts.com"
            class="text-white hover:text-yellow ml-5 leading-tight mb-2 flex flex-col">
            <div class="flex flex-row">
                <iconify-icon class="text-2xl mr-3 opacity-25" icon="ic:outline-email"></iconify-icon>
                grover.vargas@
            </div>
            <br>
            <span class="opacity-25">americanflooringproducts.com</span>
        </a>
        <a href="mailto:sales@americanflooringproducts.com"
            class="text-white hover:text-yellow ml-5 leading-tight mb-2 flex flex-col">
            <div class="flex flex-row">
                <iconify-icon class="text-2xl mr-3 opacity-25" icon="ic:outline-email"></iconify-icon>
                sales@
            </div>
            <br>
            <span class="opacity-25">americanflooringproducts.com</span>
        </a>
        <a href="mailto:solutions@americanflooringproducts.com"
            class="text-white hover:text-yellow ml-5 leading-tight mb-2 flex flex-col">
            <div class="flex flex-row">
                <iconify-icon class="text-2xl mr-3 opacity-25" icon="ic:outline-email"></iconify-icon>
                solutions@
            </div>
            <br>
            <span class="opacity-25">americanflooringproducts.com</span>
        </a>
        <a href="https://wa.me/18132852287" class="text-white hover:text-yellow ml-5 my-2 items-center flex flex-row">
            <iconify-icon class="text-2xl mr-3 opacity-25" icon="ic:baseline-whatsapp"></iconify-icon>+1 (813) 285
            2287
        </a>
        {{-- -------------------------------------------------------------LATAM --}}
        <p class="text-white mx-6 text-xs mt-7 opacity-25">LATAM</p>
        <a href="mailto:grover.vargas@americanflooringproducts.com"
            class="text-white hover:text-yellow ml-5 leading-tight mb-2 flex flex-col">
            <div class="flex flex-row">
                <iconify-icon class="text-2xl mr-3 opacity-25" icon="ic:outline-email"></iconify-icon>
                Latam1@
            </div>
            <br>
            <span class="opacity-25">americanflooringproducts.com</span>
        </a>
        <a href="mailto:sales@americanflooringproducts.com"
            class="text-white hover:text-yellow ml-5 leading-tight mb-2 flex flex-col">
            <div class="flex flex-row">
                <iconify-icon class="text-2xl mr-3 opacity-25" icon="ic:outline-email"></iconify-icon>
                Latam2@
            </div>
            <br>
            <span class="opacity-25">americanflooringproducts.com</span>
        </a>
        <a href="mailto:solutions@americanflooringproducts.com"
            class="text-white hover:text-yellow ml-5 leading-tight mb-2 flex flex-col">
            <div class="flex flex-row">
                <iconify-icon class="text-2xl mr-3 opacity-25" icon="ic:outline-email"></iconify-icon>
                Latam3@
            </div>
            <br>
            <span class="opacity-25">americanflooringproducts.com</span>
        </a>
        <a href="https://wa.me/573178801796" class="text-white hover:text-yellow mx-5 my-2 items-center flex flex-row">
            <iconify-icon class="text-2xl mr-3 opacity-25" icon="ic:baseline-whatsapp"></iconify-icon>+57 (317) 880 1796
        </a>
    </div>
    {{-- -------------------------------- Desktop --}}
    {{--  --}}
    <div class="lg:flex hidden flex-col w-2/3 lg:w-full mt-5 lg:mt-0 text-md">
        <p class="text-white mx-6 text-xs opacity-25">US</p>
        <a href="mailto:grover.vargas@americanflooringproducts.com"
            class="text-white hover:text-yellow mx-5 mb-1 items-center flex flex-row">
            <iconify-icon class="text-2xl mr-3 opacity-25" icon="ic:outline-email"></iconify-icon>
            grover.vargas@<span class="opacity-40">americanflooringproducts.com</span>
        </a>
        <a href="mailto:sales@americanflooringproducts.com"
            class="text-white hover:text-yellow mx-5 mb-1 items-center flex flex-row">
            <iconify-icon class="text-2xl mr-3 opacity-0" icon="ic:outline-email"></iconify-icon>
            sales@<span class="opacity-40">americanflooringproducts.com</span>
        </a>
        <a href="mailto:solutions@americanflooringproducts.com"
            class="text-white hover:text-yellow mx-5 mb-1 items-center flex flex-row">
            <iconify-icon class="text-2xl mr-3 opacity-0" icon="ic:outline-email"></iconify-icon>
            solutions@<span class="opacity-40">americanflooringproducts.com</span>
        </a>
        <a href="https://wa.me/18132852287" class="text-white hover:text-yellow mx-5 my-2 items-center flex flex-row">
            <iconify-icon class="text-2xl mr-3 opacity-25" icon="ic:baseline-whatsapp"></iconify-icon>+1 (813) 285 2287
        </a>
        {{-- -------------------------------------------------------------LATAM --}}
        <p class="text-white mx-6 text-xs mt-3 opacity-25">LATAM</p>
        <a href="mailto:a@americanflooringproducts.com"
            class="text-white hover:text-yellow mx-5 mb-1 items-center flex flex-row">
            <iconify-icon class="text-2xl mr-3 opacity-25" icon="ic:outline-email"></iconify-icon>
            @<span class="opacity-40">americanflooringproducts.com</span>
        </a>
        <a href="mailto:sales@americanflooringproducts.com"
            class="text-white hover:text-yellow mx-5 mb-1 items-center flex flex-row">
            <iconify-icon class="text-2xl mr-3 opacity-0" icon="ic:outline-email"></iconify-icon>
            @<span class="opacity-40">americanflooringproducts.com</span>
        </a>
        <a href="mailto:solutions@americanflooringproducts.com"
            class="text-white hover:text-yellow mx-5 mb-1 items-center flex flex-row">
            <iconify-icon class="text-2xl mr-3 opacity-0" icon="ic:outline-email"></iconify-icon>
            @<span class="opacity-40">americanflooringproducts.com</span>
        </a>
        <a href="https://wa.me/573178801796"
            class="text-white hover:text-yellow mx-5 my-2 items-center flex flex-row">
            <iconify-icon class="text-2xl mr-3 opacity-25" icon="ic:baseline-whatsapp"></iconify-icon>+57 (317) 880
            1796
        </a>
    </div>
</div>
