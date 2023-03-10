<div class="bg-black grid lg:grid-cols-5 p-5 pt-10">
    <div class="col-span-1 lg:col-start-2">
        <a href="{{ route('tempHome') }}">
            <picture class="h-11">
                <img class="h-[45%] lg:h-[unset]" src="{{ Vite::asset('resources/img/logo.png') }}" alt="Logo afp">
            </picture>
        </a>
        <div class="flex lg:hidden flex-col w-2/3 mt-5 text-xl">
            <div class="text-white mx-5 mb-2 items-center flex flex-row">
                <iconify-icon class="text-2xl mr-3" icon="ic:outline-email"></iconify-icon>correo@correo.com
            </div>
            <div class="text-white mx-5 my-2 items-center flex flex-row">
                <iconify-icon class="text-2xl mr-3" icon="ic:baseline-whatsapp"></iconify-icon>1234567890
            </div>
        </div>
    </div>
    <div class="flex">

        <ul class="lg:ml-auto text-grey-light text-xl">
            <li class="hover:text-yellow mx-5"><a href="{{ route('tempHome') }}">
                    Home
                </a>
            </li>
            <li class="hover:text-yellow m-5"><a href="{{ route('engineer') }}">
                    Fiber engineering
                </a>
            </li>
            <li class="hover:text-yellow m-5"><a href="{{ route('fibers') }}">
                    Armor fiber
                </a>
            </li>
            <li class="hover:text-yellow m-5"><a href="#contact">
                    Contact us
                </a>
            </li>
        </ul>
    </div>
    <div class="lg:flex hidden flex-col w-2/3 lg:w-full mt-5 lg:mt-0 text-xl">
        <div class="text-white mx-5 mb-2 items-center flex flex-row">
            <iconify-icon class="text-2xl mr-3" icon="ic:outline-email"></iconify-icon>correo@correo.com
        </div>
        <div class="text-white mx-5 my-2 items-center flex flex-row">
            <iconify-icon class="text-2xl mr-3" icon="ic:baseline-whatsapp"></iconify-icon>1234567890
        </div>
    </div>
</div>
