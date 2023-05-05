<div id="sideBar"
    class="bg-black flex flex-col p-5 pb-20 pt-16 top-0 fixed -translate-x-full duration-500 w-2/3 h-full border-r border-yellow border-opacity-20">
    <a href="{{ route('tempHome') }}">
        <picture class="h-11">
            <img class="w-1/2 lg:h-[unset]" src="{{ Vite::asset('resources/img/logo.png') }}" alt="Logo afp">
        </picture>
    </a>
    <ul class="text-white-bg my-auto text-xl">
        <li class="hover:text-yellow my-5"><a href="{{ localUrl('home') }}" @if (breadCrumbLink('home')) class="text-yellow"  @endif>
                {{ __('Home') }}
            </a>
        </li>
        <li class="hover:text-yellow my-5"><a href="{{ localUrl('engineer') }}" @if (breadCrumbLink('engineer')) class="text-yellow"  @endif>
                {{ __('Fiber engineering') }}
            </a>
        </li>
        <li class="hover:text-yellow my-5"><a href="{{ localUrl('fibers') }}" @if (breadCrumbLink('fibers')) class="text-yellow"  @endif>
                {{ __('Armor fiber') }}
            </a>
        </li>
        <li class="hover:text-yellow my-5"><a href="{{ localUrl('home') . '/#contact' }}">
                {{ __('Contact us') }}
            </a>
        </li>
    </ul>
</div>
