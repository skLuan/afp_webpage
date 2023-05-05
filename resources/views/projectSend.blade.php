<x-layouts.general>

    <section id="whatitIs" class="lg:grid lg:grid-cols-12">
        <picture class="col-span-7 overflow-hidden">
            <img class="w-full" src="{{ Vite::asset('resources/img/engineering.png') }}" alt="banner fiber engineering">
        </picture>
        <div class="col-span-4 col-start-8 px-5">
            <div class="my-5">
                <x-titles.yellowPrincipal class="!text-yellow">
                    @if (app()->getLocale() == 'es')
                {{__('engineering')}}
                <br>
                {{__('Fiber')}}
                @else

                {{__('Fiber')}} <br> {{__('engineering')}}
                @endif
                </x-titles.yellowPrincipal>
                <x-titles.subGrey>{{__('Your project, your matrix')}}</x-titles.subGrey>
            </div>
            <article class="">
                <h3 class="text-black font-jost text-xl normal-case font-normal"><span
                        class="font-medium text-grey text-2x">{{__('We appreciate you sharing your project details with us.')}}</span> <br>
                    <br> {{__('Our team will review your submission and be in touch shortly to discuss how we can best support your construction needs.')}}
                </h3>
                <p class="mt-20 text-lg">{{__('Meanwhile, explore our web page')}}:</p>
                <div class="mt-1">
                    <a class="mx-5 text-grey hover:text-yellow hover:underline text-xl font-medium" href="{{ route('tempHome') }}">{{__('Home')}}</a>
                    <a class="mx-5 text-grey hover:text-yellow hover:underline text-xl font-medium" href="{{ route('fibers') }}">{{__('Armor Fiber')}}</a>
                    <a class="mx-5 text-grey hover:text-yellow hover:underline text-xl font-medium" href="{{ route('tempHome') }}/#projects">{{__('Projects')}}</a>
                </div>
            </article>
</x-layouts.general>
