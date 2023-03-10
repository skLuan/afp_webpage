<div id="sideBar"
    class="bg-black flex flex-col p-5 pb-20 pt-16 top-0 fixed -translate-x-full duration-500 w-2/3 h-full border-r border-yellow border-opacity-20">
    <a href="{{ route('tempHome') }}">
        <picture class="h-11">
            <img class="w-1/2 lg:h-[unset]" src="{{ Vite::asset('resources/img/logo.png') }}" alt="Logo afp">
        </picture>
    </a>
    <ul class="text-white-bg my-auto text-xl">
        <li class="hover:text-yellow my-5"><a href="{{ route('tempHome') }}">
                Home
            </a>
        </li>
        <li class="hover:text-yellow my-5"><a href="{{ route('engineer') }}">
                Fiber engineering
            </a>
        </li>
        <li class="hover:text-yellow my-5"><a href="{{ route('fibers') }}">
                Armor fiber
            </a>
        </li>
        <li class="hover:text-yellow my-5"><a href="#contact">
                Contact us
            </a>
        </li>
    </ul>
</div>
