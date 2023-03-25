<form id="engineering" name="engine" action="//javascript:;" onsubmit="//formGoing()"
    class="flex flex-col mx-auto py-10 px-10 lg:px-0 lg:max-w-3xl">
    @csrf

    <x-forms.parts.gen-info></x-forms.parts.gen-info>

    <h4 class="text-center my-5 text-grey">Information for slab <br> on ground</h4>
    {{-- ------------------------------------------------------------ --}}
    <x-forms.parts.slab-on-ground></x-forms.parts.slab-on-ground>
    {{-- -------------------------------------------------------------------------- --}}
    <div class="grid grid-cols-2 gap-5">
        <div>
            <h5 class="text-grey-light text-center my-5">Supporting Structure</h5>
            <div class="flex relative !appearance-none">
                <label for="kValue">K-Value (at grade)</label>
                <input class="!appearance-none ml-auto w-52" type="number" placeholder="in Kg/cm2" name="kValue"
                    id="kValue">
                <span class="absolute right-0 pr-9 translate-y-[30%]">Kg/cm2</span>
            </div>
            <div class="flex">
                <label class="leading-tight" for="resilianceModule">Resilience Module (Dynamic load) or type of soil</label>
                <input class="ml-auto w-52" type="string" name="kValue" id="resilianceModule">
            </div>
            <div class="flex">
                <label for="spti">SPT i (golpes/pie)</label>
                <input class="ml-auto w-52" type="number" name="spti" id="spti">
            </div>
            {{-- Estos dos estan acompañados de una imagen redistribuir su aspecto --}}
            <div class="flex">
                <label for="ci">c i (Kg/cm2) =</label>
                <input class="ml-auto w-52" type="number" name="ci" id="spti">
            </div>
            <div class="flex">
                <label for="alfa">Ø i (º) =</label>
                <input class="ml-auto w-52" type="number" name="alfa" id="alfa">
            </div>
        </div>
        <div>
            {{-- --------------------------------------------- Concrete --}}
            <h5 class="text-grey-light text-center my-5">Concrete</h5>
            <div class="flex relative !appearance-none">
                <label for="fckCube">Fck Cube (Mpa)</label>
                <input class="!appearance-none ml-auto w-52" type="number" placeholder="" name="fckCube"
                    id="fckCube">
                <span class="absolute right-0 pr-9 translate-y-[30%]">MR (kg/cm²)</span>
            </div>
            <div class="flex relative !appearance-none">
                <label class="leading-tight" for="shrinkage">Concrete Shrinkage value:</label>
                <input class="!appearance-none ml-auto w-52" type="number" placeholder="" name="shrinkage"
                    id="shrinkage">
                <span class="absolute right-0 pr-9 translate-y-[30%]">%</span>
            </div>
        </div>
    </div>

    {{-- -------------------------------------------------------- Pallet Rancking --}}

    <h5 class="text-grey-light text-center my-5">Pallet racking, Static Point load</h5>
    <x-forms.parts.pallet-racking></x-forms.parts.pallet-racking>

    {{-- -------------------------------------------------------- Forklift truck - light Vehicle --}}

    <h5 class="text-grey-light text-center my-5">Forklift truck - light Vehicle</h5>
    <x-forms.parts.light-vehicle></x-forms.parts.light-vehicle>

    {{-- -------------------------------------------------------- heavy truck --}}
    <h5 class="text-grey-light text-center my-5">Heavy truck</h5>
    <x-forms.parts.truck></x-forms.parts.truck>


    {{-- -------------------------------------------------------- Uniformly distributed static loads, U.D.L. --}}
    <h5 class="text-grey-light text-center my-5">Uniformly distributed static loads, U.D.L.</h5>
    <div class="grid grid-cols-2 gap-5">
        <div>
            <picture class="bg-white-true p-3 flex">
                <img class="m-auto" src="{{ Vite::asset('resources/img/formImgs/GRAFICO1.png') }}" alt="">
            </picture>
        </div>
        <div>
            <div class="flex relative !appearance-none">
                <label class="my-auto" for="loadPerSquare">Load per square meter</label>
                <input class="!appearance-none ml-auto w-52" type="number" placeholder="" name="loadPerSquare"
                    id="loadPerSquare">
                <span class="absolute right-0 pr-9 translate-y-[30%]">KN/m²</span>
            </div>
            <div class="flex relative !appearance-none">
                <label class="my-auto" for="loadSeparation">Load separation (s)</label>
                <input class="!appearance-none ml-auto w-52" type="number" placeholder="" name="loadSeparation"
                    id="loadSeparation">
                <span class="absolute right-0 pr-9 translate-y-[30%]">mm</span>
            </div>
        </div>
    </div>


    {{-- -------------------------------------------------------- Linearly distributed static loads, L.D.L. --}}
    <h5 class="text-grey-light text-center my-5">Linearly distributed static loads, L.D.L.</h5>
    <div class="grid grid-cols-2 gap-5">
        <div>
            <picture class="bg-white-true p-3 flex">
                <img class="m-auto" width="50%" src="{{ Vite::asset('resources/img/formImgs/GRAFICO2.png') }}"
                    alt="">
            </picture>
        </div>
        <div>
            <div class="flex relative !appearance-none">
                <label class="my-auto" for="loadPerLinearM">Load per linear meter</label>
                <input class="!appearance-none ml-auto w-52" type="number" placeholder="" name="loadPerLinearM"
                    id="loadPerLinearM">
                <span class="absolute right-0 pr-9 translate-y-[30%]">KN/m</span>
            </div>
            <div class="flex relative !appearance-none">
                <label class="my-auto" for="loadX">Load Width (x)</label>
                <input class="!appearance-none ml-auto w-52" type="number" placeholder="" name="loadX"
                    id="loadX">
                <span class="absolute right-0 pr-9 translate-y-[30%]">mm</span>
            </div>
        </div>
    </div>

    {{-- -------------------------------------------------------- Mezzanine --}}
    <h5 class="text-grey-light text-center my-5">Mezzanine</h5>
    <div class="grid grid-cols-2 gap-5 mb-10">
        <div>
            <picture class="bg-white-true p-3 flex">
                <img class="m-auto" width="50%" src="{{ Vite::asset('resources/img/formImgs/GRAFICO3.png') }}"
                    alt="">
            </picture>
        </div>
        <div>
            <div class="flex relative !appearance-none">
                <label class="my-auto" for="mezzanineSupport">Mezzanine support load</label>
                <input class="!appearance-none ml-auto w-52" type="number" placeholder="" name="mezzanineSupport"
                    id="mezzanineSupport">
                <span class="absolute right-0 pr-9 translate-y-[30%]">KN</span>
            </div>
            <div class="flex relative !appearance-none">
                <label class="my-auto" for="SupportSpacing">Support spacing</label>
                <input class="!appearance-none ml-auto w-52" type="number" placeholder="" name="SupportSpacing"
                    id="SupportSpacing">
                <span class="absolute right-0 pr-9 translate-y-[30%]">mm x mm</span>
            </div>
            <div class="flex relative !appearance-none">
                <label class="my-auto leading-tight" for="SupportSpacing">Contact plate or supporting foot</label>
                <input class="!appearance-none ml-auto w-52" type="number" placeholder="" name="SupportSpacing"
                    id="SupportSpacing">
                <span class="absolute right-0 pr-9 translate-y-[30%]">mm x mm</span>
            </div>
        </div>
    </div>
    {{-- --------------------------------------------------------------------------------------------- --}}

    <label for="inputNotes" class="text-grey-light pl-1">Notes</label>
    <textarea
        class="py-2 mb-2 shadow-afp rounded-sm focus:!border-yellow focus:border-[1px] focus:bg-white-true focus:shadow-btn border-none  bg-white"
        name="notes" id="inputNotes" cols="30" rows="10"></textarea>
    <h3 id="formResponse" class="hidden mt-10 font-lemon text-lg text-grey">Thanks for your time! we wil reach
        soon!</h3>
    <button class="btn-sender uppercase font-bold text-yellow bg-white-true w-40 py-1 my-16 mx-auto shadow-btn rounded"
        type="submit">send</button>
</form>
{{-- <script>
    //--------------- Form sender ajax
    const form = document.getElementById("engineering");
    const formButton = document.getElementById("engineering").querySelector('.btn-sender');

    const formGoing = async () => {
        console.log('iniciando el envio de email ->');
        const inputs = document.getElementById('engineering').querySelectorAll('input');
        const values = [];
        // --- lectura y guaramos en js los valores
        inputs.forEach(input => {
            let value = input.value;
            if (value != '') {
                values.push(value);
            }
        });
        values.push(document.getElementById('engineering').querySelector('textarea').value);

        console.log(values);

        // await fetch("{{ route('sendForm', []) }}", {
        await fetch(
            "{{ route('sendForm', ['name' => 'nombre', 'email' => 'jpMatutino@gmail.com', 'phone' => 3054396542, 'message' => 'asfjrngjrbg']) }}", {
                method: "POST",
                headers: {
                    'X-CSRF-Token': '{{ csrf_token() }}',
                },
                body: JSON.stringify(
                    "{'name': 'nombre', 'email': 'jpMatutino@gmail.com', 'phone': 3054396542, 'message': 'asfjrngjrbg' }"
                ),
            }).then((msg) => {
            // console.log(msg);

            document.getElementById('formResponse').classList.remove('hidden');
            document.getElementById('engineering').querySelector('textarea').value = '';
            inputs.forEach(input => {
                input.value = '';
            });

        }).catch((err) => {

        });
    }
    // form.setAttribute('action',formGoing)
    // formButton.addEventListener('click', (e) => {
    //     e.preventDefault();
    //     console.log('yikeees!!!');
    // });
</script> --}}
