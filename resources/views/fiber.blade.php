<x-layouts.general>
    <section id="principalInfo" class="lg:grid lg:grid-cols-12">
        <picture class="lg:col-span-7 overflow-hidden lg:pr-5">
            <img class="w-full" src="{{ Vite::asset('resources/img/FIBERs_ARMOR.png') }}" alt="">
        </picture>
        <div class="col-span-4 col-start-8 mt-5 px-5 lg:px-0">
            <x-titles.yellowPrincipal class="!text-yellow">Fibers </x-titles.yellowPrincipal>
            <div class="grid grid-cols-5 gap-[15px]">
                <h3 class="font-semibold normal-case !font-jost text-2xl pr-1 col-span-5 lg:col-span-4 text-grey">Armor
                    fiber
                    PF
                    54</h3>
                <div class="flex col-span-4 lg:col-span-3">
                    <h4 class="font-medium text-grey-light lg:my-auto lg:pl-8 capitalize font-jost text-base">
                        Polypropylene
                    </h4>
                    <div class="h-[30px] my-auto mx-5 w-[1px] shadow-btn bg-grey"></div>
                    <h4 class="font-medium text-grey-light lg:my-auto capitalize font-jost text-base">Fibralared</h4>
                </div>
            </div>
            <article class="py-5 flex flex-col">
                <p class="text-grey">
                    {!! nl2br(e($armorFiber->description)) !!}
                </p>
                <a class="text-lg ml-auto underline font-medium mt-3 text-left" href="">See PDF technical data</a>
            </article>
        </div>
    </section>

    <section id="tableProperties" class="px-5">
        <x-table :fiber="$armorFiber"></x-table>
    </section>

    <section id="DetailsInfo" class="p-5">
        <x-titles.guideGrey>Advantages</x-titles.guideGrey>
        <ul class="list-disc px-5">
            <li>
                Improves plastic cracking control, more effective than other steel options including metallic fibers.
            </li>
            <li>
                Reduces segregation
            </li>
            <li>
                Homogenizes and distributes exudation water better (uniform exudation).
            </li>
            <li>
                They are neither alkaline nor conductive.
            </li>
            <li>
                Protects the structure from fire.
            </li>
            <li>
                Restricts warping.
            </li>
            <li>
                They are pumpable.
            </li>
            <li>
                Due to the number of fibers /kg there is a more efficient control of cracking by drying.
            </li>
            <li>
                The surface finish is outstanding.
            </li>
        </ul>
    </section>

</x-layouts.general>
