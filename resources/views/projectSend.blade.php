<x-layouts.general>

    <section id="whatitIs" class="lg:grid lg:grid-cols-12">
        <picture class="col-span-7 overflow-hidden">
            <img class="w-full" src="{{ Vite::asset('resources/img/engineering.png') }}" alt="banner fiber engineering">
        </picture>
        <div class="col-span-4 col-start-8 px-5">
            <div class="my-5">
                <x-titles.yellowPrincipal class="!text-yellow">Fiber <br> engineering</x-titles.yellowPrincipal>
                <x-titles.subGrey>Your project, your matrix</x-titles.subGrey>
            </div>
            <article class="">
                <h3 class="text-black font-jost text-xl normal-case font-normal"><span
                        class="font-medium text-grey text-2x">We appreciate you sharing your project details with
                        us.</span> <br>
                    <br> Our team will review your submission and be in touch shortly to discuss how we can best support
                    your construction needs.
                </h3>
                <p class="mt-20 text-lg">Meanwhile, explore our web page:</p>
                <div class="mt-1">
                    <a class="mx-5 text-grey hover:text-yellow hover:underline text-xl font-medium" href="{{ route('tempHome') }}">Home</a>
                    <a class="mx-5 text-grey hover:text-yellow hover:underline text-xl font-medium" href="{{ route('fibers') }}">Armor Fiber</a>
                    <a class="mx-5 text-grey hover:text-yellow hover:underline text-xl font-medium" href="{{ route('tempHome') }}/#projects">Projects</a>
                </div>
            </article>
</x-layouts.general>
