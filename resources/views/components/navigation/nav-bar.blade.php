@php
    $url = route('tempHome');
    $contact = "#contact";
    if (request()->url !== route('tempHome') || request()->url !== route('home')) {
        $contact = route('tempHome').'#contact';
    }
@endphp
<nav class="bg-black w-full sticky top-0 z-50 items-center hidden lg:flex flex-row p-5 border-b border-yellow border-opacity-20">
    <a href="{{ $url }}">
        <picture class="h-11">
            <img class="h-10" src="{{ Vite::asset('resources/img/LogoSmall.svg') }}" alt="Logo afp">
        </picture>
    </a>
    <ul class="flex flex-row text-white-bg">
        <li class="hover:text-yellow mx-14"><a href="{{$url}}">
                Home
            </a>
        </li>
        <li class="hover:text-yellow mx-10"><a href="{{route('engineer')}}">
                Fiber engineering
            </a>
        </li>
        <li class="hover:text-yellow mx-10"><a href="{{route('fibers')}}">
                Armor fiber
            </a>
        </li>
        <li class="hover:text-yellow mx-10"><a href="{{$contact}}">
                Contact us
            </a>
        </li>
    </ul>
    <div class="ml-auto text-white-bg">
                <a href="" class="text-sm uppercase font-jost font-medium underline lg:mr-10">
            Go to Whatsapp
        </a>
        <button class="">English</button>
    </div>
</nav>
