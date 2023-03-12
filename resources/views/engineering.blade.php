<x-layouts.general>

    <section id="whatitIs" class="lg:grid lg:grid-cols-12">
        <picture class="col-span-7 overflow-hidden">
            <img class="w-full" src="{{ Vite::asset('resources/img/engineering.png') }}" alt="banner fiber engineering">
        </picture>
        <div class="col-span-4 col-start-8 px-5">
            <div class="my-5">
                <x-titles.yellowPrincipal class="!text-yellow">Fiber <br> engineering</x-titles.yellowPrincipal>
                <x-titles.subGrey> Create your oun matrix</x-titles.subGrey>
            </div>
            <x-titles.guideGrey>What it is?</x-titles.guideGrey>
            <p>Macro synthetic fibers are the secret ingredient for concrete slabs that can handle the heavy loads of
                the
                construction industry.</p>
            <p class="my-1">
                By improving strength and ductility, these fibers can help prevent cracks and fractures from spreading,
                giving concrete slabs the endurance they need to withstand repeated stress and loads. Plus, with
                increased
                tensile and flexural strength, macro synthetic fibers make concrete slabs more suited for demanding
                applications where high mechanical strength and good deformation capacity are a must.
            </p>
            <p>
                Why settle for average concrete when you can have concrete that's ready to pour it on?
            </p>
            <h4 class="my-10 mb-20 text-left normal-case font-medium !font-jost text-grey-light">
                Get the Ultimate Concrete Reinforcement with <br class="hidden lg:inline">
                Macro Synthetic Fibers: <br>
                <span class="text-grey font-bold">Stronger, More Resilient, and Zero Maintenance</span>
            </h4>
        </div>
    </section>
    <h6 class="col-span-2 ml-auto lg:ml-32 text-grey text-xl text-right lg:!text-left px-5 pb-4">How we work?
    </h6>
    <x-steps></x-steps>
    <h4
        class=" px-5 col-span-full lg:col-span-4 lg:col-start-8 mt-14 mb-20 text-[22px] text-center normal-case font-normal !font-jost text-grey-light">
        Each project need special requirements, <span class="underline font-semibold">speak with us</span> for a Fiber
        unique as
        your project
    </h4>
    <section class="px-5">
        <x-titles.guideGrey class="ml-32">Advantage of macro synthetic fibers</x-titles.guideGrey>
        <x-section.advantage></x-section.advantage>
    </section>
    <h4 class="text-center my-5 mt-20 block">Speak with us About your project</h4>
    <x-forms.details></x-forms.details>
</x-layouts.general>
