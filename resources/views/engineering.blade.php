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
                <x-titles.subGrey> {{__('Create your oun matrix')}}</x-titles.subGrey>
            </div>
            <x-titles.guideGrey>{{__('What it is?')}}</x-titles.guideGrey>
            <p>{{__('engineer.banner1')}}</p>
            <p class="my-1">
                {{__('engineer.banner2')}}
            </p>
            <p>
                {{__('engineer.banner3')}}
            </p>
            <h4 class="my-10 mb-20 text-left normal-case font-medium !font-jost text-grey-light">
                {{__('Get the Ultimate Concrete Reinforcement with')}} <br class="hidden lg:inline">
                {{__('Macro Synthetic Fibers')}}: <br>
                <span class="text-grey font-bold">{{__('Stronger, More Resilient, and Zero Maintenance')}}</span>
            </h4>
        </div>
    </section>
    <h6 class="col-span-2 ml-auto lg:ml-32 text-grey text-xl text-right lg:!text-left px-5 pb-4">{{__('How we work?')}}
    </h6>
    <x-steps></x-steps>
    <h4
        class=" px-5 col-span-full lg:col-span-4 lg:col-start-8 mt-14 mb-20 text-[22px] text-center normal-case font-normal !font-jost text-grey-light">
        {{__('Each project need special requirements,')}} <span class="underline font-semibold">{{__('speak with us')}}</span> {{__('for a Fiber unique as your project')}}
    </h4>
    <section class="px-5">
        <x-titles.guideGrey class="ml-32">{{__('Advantage of macro synthetic fibers')}}</x-titles.guideGrey>
        <x-section.advantage></x-section.advantage>
    </section>
    <h4 class="text-center my-5 mt-20 block">{{__('Speak with us About your project')}}</h4>
    <x-forms.details></x-forms.details>
</x-layouts.general>
