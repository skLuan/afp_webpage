<x-layouts.general>
    <div class="p-5 lg:ml-32">
        <x-titles.yellowPrincipal class="!text-yellow">Fiber <br> engineering</x-titles.yellowPrincipal>
        <x-titles.subGrey> Create your oun matrix</x-titles.subGrey>
    </div>

    <section id="whatitIs" class="lg:grid lg:grid-cols-12">
        <picture class="col-span-7">
            <img src="{{ Vite::asset('resources/img/Armor-fiber.png') }}" alt="">
        </picture>
        <div class="col-span-4 col-start-8 px-5">
            <x-titles.guideGrey>What it is?</x-titles.guideGrey>
            <p>Macro synthetic fibers are the secret ingredient for concrete slabs that can handle the heavy loads of the
                construction industry.</p>
                <p class="my-1">
                    By improving strength and ductility, these fibers can help prevent cracks and fractures from spreading,
                    giving concrete slabs the endurance they need to withstand repeated stress and loads. Plus, with increased
                    tensile and flexural strength, macro synthetic fibers make concrete slabs more suited for demanding
                    applications where high mechanical strength and good deformation capacity are a must.
                </p>
                <p>
                    Why settle for average concrete when you can have concrete that's ready to pour it on?
                </p>
                <h4
                class="col-span-full lg:col-span-4 lg:col-start-8 my-20 text-left normal-case font-medium !font-jost text-grey-light">
                Get the Ultimate Concrete Reinforcement with <br class="hidden lg:inline">
                Macro Synthetic Fibers: <br>
                <span class="text-grey font-bold">Stronger, More Resilient, and Zero Maintenance</span>
            </h4>
        </div>
    </section>
    <x-steps></x-steps>
    <h4
        class=" px-5 col-span-full lg:col-span-4 lg:col-start-8 my-20 text-[22px] text-center normal-case font-normal !font-jost text-grey-light">
        Each project need special requirements, <span class="underline font-semibold">speak with us</span> for a Fiber
        unique as
        your project
    </h4>
    <section class="px-5">
        <x-titles.guideGrey class="ml-32">Advantage of macro synthetic fibers</x-titles.guideGrey>
        <x-section.advantage></x-section.advantage>
    </section>
    <x-forms.details></x-forms.details>
</x-layouts.general>
