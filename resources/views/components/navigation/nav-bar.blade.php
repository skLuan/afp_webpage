@php
    function localUrl($route)
    {
        $loc = 'en';
        if (Str::contains(url()->current(), '/es')) {
            $loc = 'es';
        }
        return route($route, $loc);
    }
@endphp
<nav
    class="bg-black w-full sticky top-0 z-50 items-center hidden lg:flex flex-row p-5 border-b border-yellow border-opacity-20">
    <a href="{{ localUrl('home') }}">
        <picture class="h-11">
            <img class="h-10" src="{{ Vite::asset('resources/img/LogoSmall.svg') }}" alt="Logo afp">
        </picture>
    </a>
    <ul class="flex flex-row text-white-bg">
        <li class="hover:text-yellow mx-14"><a href="{{ localUrl('home') }}">
                {{ __('Home') }}
            </a>
        </li>
        <li class="hover:text-yellow mx-10"><a href="{{ localUrl('engineer') }}">
                {{ __('Fiber engineering') }}
            </a>
        </li>
        <li class="hover:text-yellow mx-10"><a href="{{ localUrl('fibers') }}">
                {{ __('Armor fiber') }}
            </a>
        </li>
        <li class="hover:text-yellow mx-10"><a href="{{ localUrl('home') . '/#contact' }}">
                {{ __('Contact us') }}
            </a>
        </li>
    </ul>
    <div class="ml-auto text-white-bg">
        <a href="https://wa.me/18132852287"
            class="hover:text-yellow text-sm uppercase font-jost font-medium underline lg:mr-10">
            {{ __('Go to Whatsapp') }}
        </a>
        @if (app()->getLocale() === 'es')
            <a href="{{ route(Route::currentRouteName()) . '/en' }}" class="">English</a>
        @else
            <a href="{{ route(Route::currentRouteName()) . '/es' }}" class="">Español</a>
        @endif
    </div>
</nav>
