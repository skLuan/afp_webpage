@php
    function localUrl($route)
    {
        $loc = 'en';
        if (Str::contains(url()->current(), '/es')) {
            $loc = 'es';
        }
        return route($route, $loc);
    }
    function breadCrumbLink($route) {
        return Request::url() === route($route) || Request::url() === route($route, 'es') || Request::url() === route($route, 'en');
    };
@endphp
<nav
    class="bg-black w-full sticky top-0 z-50 items-center hidden lg:flex flex-row p-5 border-b border-yellow border-opacity-20">
    <a href="{{ localUrl('home') }}">
        <picture class="h-11">
            <img class="h-10" src="{{ Vite::asset('resources/img/LogoSmall.svg') }}" alt="Logo afp">
        </picture>
    </a>
    <ul class="flex flex-row text-white-bg">
        <li class="hover:text-yellow mx-14"><a href="{{ localUrl('home') }}" @if (breadCrumbLink('home')) class="text-yellow"  @endif>
                {{ __('Home') }}
            </a>
        </li>
        <li class="hover:text-yellow mx-10"><a href="{{ localUrl('engineer') }}" @if (breadCrumbLink('engineer')) class="text-yellow"  @endif>
                {{ __('Fiber engineering') }}
            </a>
        </li>
        <li class="hover:text-yellow mx-10"><a href="{{ localUrl('fibers') }}" @if (breadCrumbLink('fibers')) class="text-yellow"  @endif>
                {{ __('Armor fiber') }}
            </a>
        </li>
        <li class="hover:text-yellow mx-10"><a href="{{ localUrl('home') . '/#contact' }}">
                {{ __('Contact us') }}
            </a>
        </li>
    </ul>
    <div class="flex flex-row ml-auto text-white-bg text-sm font-jost font-medium uppercase lg:mr-10">
        <iconify-icon class="animate__animated animate__flash animate__repeat-3 animate__slower m-auto text-xl" icon="logos:whatsapp"></iconify-icon> <iconify-icon class="text-xl" icon="ic:round-arrow-right-alt"></iconify-icon>
            <div class="flex flex-row">
                <a class="mx-5 hover:text-yellow" href="https://wa.me/18132852287">Us</a>
                <a href="https://wa.me/573178801796" class="hover:text-yellow" >Latam</a>
            </div>
            <div class="w-[1px] bg-white mx-5"></div>
        @if (app()->getLocale() === 'es')
            <a href="{{ route(Route::currentRouteName()) . '/en' }}" class="hover:text-yellow">English</a>
        @else
            <a href="{{ route(Route::currentRouteName()) . '/es' }}" class="hover:text-yellow">Español</a>
        @endif
    </div>
</nav>
