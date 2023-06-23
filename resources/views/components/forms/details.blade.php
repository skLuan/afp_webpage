<form id="engineering" name="engine" action="sendProject" method="POST" onsubmit="//formGoing()"
    class="flex flex-col px-5 py-10 mx-auto lg:px-0 lg:max-w-3xl">
    @csrf
    <h4 class="my-5 text-center text-grey">{{ __('General Information') }}</h4>
    <x-forms.parts.gen-info></x-forms.parts.gen-info>

    <p class="my-10 text-xl font-medium leading-tight text-center text-grey-light">
        {{ __('Feel free to give us the information you have, but the more we have, the most relatiable we can be') }}
    </p>

    <x-forms.misc.container title="{{ __('Information for slab on ground') }}">
        <x-forms.parts.slab-on-ground />
        <div class="grid grid-cols-1 gap-5 lg:grid-cols-2">
            <div>
                <h5 class="my-5 text-center text-grey-light">{{ __('Supporting Structure') }}</h5>
                <div class="flex relative !appearance-none">
                    <label for="kValue">K-Value (at grade)</label>
                    <input class="!appearance-none ml-auto w-52" type="number" placeholder="" name="kValue"
                        id="kValue">
                    <span class="absolute right-0 pr-9 translate-y-[30%]">N/mm³</span>
                </div>
            </div>
            <div>
                {{-- --------------------------------------------- Concrete --}}
                <h5 class="my-5 text-center text-grey-light">{{ __('Concrete') }}</h5>
                <div class="flex relative !appearance-none">
                    <label for="fckCube">F'c</label>
                    <input class="!appearance-none ml-auto w-52" type="number" placeholder="" name="fckCube"
                        id="fckCube">
                    <span class="absolute right-0 pr-9 translate-y-[30%]">kg/cm²</span>
                </div>
                <div class="flex relative !appearance-none">
                    <label for="fct">F'ct</label>
                    <input class="!appearance-none ml-auto w-52" type="number" placeholder="" name="fct"
                        id="fct">
                    <span class="absolute right-0 pr-9 translate-y-[30%]">kg/cm²</span>
                </div>
                <div class="flex relative !appearance-none">
                    <label class="leading-tight" for="shrinkage">{{ __('90 days concrete shrinkage value') }}:</label>
                    <input class="!appearance-none ml-auto w-52" type="number" placeholder="" name="shrinkage"
                        id="shrinkage">
                    <span class="absolute right-0 pr-9 translate-y-[30%]">%</span>
                </div>
            </div>
        </div>
    </x-forms.misc.container>
    {{-- -------------------------------------------------------- Pallet Rancking --}}

    <x-forms.misc.container title="{{ __('Pallet racking, Static Point load') }}">
        <x-forms.parts.pallet-racking />
    </x-forms.misc.container>

    {{-- -------------------------------------------------------- Forklift truck - light Vehicle --}}
    <x-forms.misc.container title="{{ __('Forklift truck - light Vehicle') }}">
        <x-forms.parts.light-vehicle />
    </x-forms.misc.container>

    {{-- -------------------------------------------------------- heavy truck --}}
    <x-forms.misc.container title="{{ __('Heavy truck') }}">
        <x-forms.parts.truck></x-forms.parts.truck>
    </x-forms.misc.container>

    {{-- -------------------------------------------------------- Uniformly distributed static loads, U.D.L. --}}
    <x-forms.misc.container title="{{ __('Uniformly distributed static loads') }}, U.D.L.">
        <div class="grid grid-cols-1 gap-5 lg:grid-cols-2">
            <div>
                <picture class="flex p-3 bg-white-true">
                    <img class="m-auto" src="{{ Vite::asset('resources/img/formImgs/GRAFICO1.png') }}" alt="">
                </picture>
            </div>
            <div>
                <div class="flex relative !appearance-none">
                    <label class="my-auto" for="loadPerSquare">{{ __('Load per square meter') }}</label>
                    <input class="!appearance-none ml-auto w-52" type="number" placeholder="" name="loadPerSquare"
                        id="loadPerSquare">
                    <span class="absolute right-0 pr-9 translate-y-[30%]">KN/m²</span>
                </div>
                <div class="flex relative !appearance-none">
                    <label class="my-auto" for="loadSeparation">{{ __('Load separation') }} (s)</label>
                    <input class="!appearance-none ml-auto w-52" type="number" placeholder="" name="loadSeparation"
                        id="loadSeparation">
                    <span class="absolute right-0 pr-9 translate-y-[30%]">mm</span>
                </div>
            </div>
        </div>
    </x-forms.misc.container>
    {{-- -------------------------------------------------------- Linearly distributed static loads, L.D.L. --}}
    <x-forms.misc.container title="{{ __('Linearly distributed static loads') }}, L.D.L.">
        <div class="grid grid-cols-1 gap-5 lg:grid-cols-2">
            <div>
                <picture class="flex p-3 bg-white-true">
                    <img class="m-auto" width="50%" src="{{ Vite::asset('resources/img/formImgs/GRAFICO2.png') }}"
                        alt="">
                </picture>
            </div>
            <div>
                <div class="flex relative !appearance-none">
                    <label class="my-auto" for="loadPerLinearM">{{ __('Load per linear meter') }}</label>
                    <input class="!appearance-none ml-auto w-52" type="number" placeholder="" name="loadPerLinearM"
                        id="loadPerLinearM">
                    <span class="absolute right-0 pr-9 translate-y-[30%]">KN/m</span>
                </div>
                <div class="flex relative !appearance-none">
                    <label class="my-auto" for="loadX">{{ __('Load Width') }} (x)</label>
                    <input class="!appearance-none ml-auto w-52" type="number" placeholder="" name="loadX"
                        id="loadX">
                    <span class="absolute right-0 pr-9 translate-y-[30%]">mm</span>
                </div>
            </div>
        </div>
    </x-forms.misc.container>

    {{-- -------------------------------------------------------- Mezzanine --}}
    <x-forms.misc.container title="{{ __('Mezzanine') }}">
        <div class="grid grid-cols-1 gap-5 mb-10 lg:grid-cols-2">
            <div>
                <picture class="flex p-3 bg-white-true">
                    <img class="m-auto" width="50%"
                        src="{{ Vite::asset('resources/img/formImgs/GRAFICO3.png') }}" alt="">
                </picture>
            </div>
            <div>
                <div class="flex relative !appearance-none">
                    <label class="my-auto" for="mezzanineSupport">{{ __('Mezzanine support load') }}</label>
                    <input class="!appearance-none ml-auto w-52" type="number" placeholder=""
                        name="mezzanineSupport" id="mezzanineSupport">
                    <span class="absolute right-0 pr-9 translate-y-[30%]">KN</span>
                </div>
                <div class="flex relative !appearance-none">
                    <label class="my-auto" for="SupportSpacing">{{ __('Support spacing') }}</label>
                    <input class="!appearance-none ml-auto w-52" type="number" placeholder="" name="SupportSpacing"
                        id="SupportSpacing">
                    <span class="absolute right-0 pr-9 translate-y-[30%]">mm x mm</span>
                </div>
            </div>
        </div>
    </x-forms.misc.container>

    {{-- --------------------------------------------------------------------------------------------- --}}

    <x-forms.parts.notes></x-forms.parts.notes>
    <x-forms.misc.re-capcha-g></x-forms.misc.re-capcha-g>


    <h3 id="formResponse" class="hidden mt-10 text-lg font-lemon text-grey">
        {{ __('Thanks for your time! we wil reach soon!') }}</h3>
    <button class="w-40 py-1 mx-auto my-16 font-bold uppercase rounded btn-sender text-yellow bg-white-true shadow-btn"
        type="submit">{{ __('Send') }}</button>

</form>
