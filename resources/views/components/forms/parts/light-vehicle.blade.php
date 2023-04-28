<div class="grid grid-cols-1 lg:grid-cols-2 gap-5">
    <picture class="bg-white-true p-3 flex">
        <img class="m-auto" src="{{ Vite::asset('resources/img/formImgs/CARROESTIBAS.png') }}" alt="">
    </picture>
    <div>
        <div class="flex relative !appearance-none">
            <label class="my-auto" for="brand">{{__('Brand/model')}}</label>
            <input class="!appearance-none ml-auto w-52" type="text" placeholder="" name="brand" id="brand">
        </div>
        <div class="flex relative !appearance-none">
            <label class="my-auto" for="staticWheel">{{__('Maximum Static Wheel Load')}}</label>
            <input class="!appearance-none ml-auto w-52" type="number" placeholder="" name="staticWheel"
                id="staticWheel">
            <span class="absolute right-0 pr-9 translate-y-[30%]">KN</span>
        </div>
        <div id="tirePressure" class="flex flex-row justify-between mb-5">
            <label class="my-auto" for="tirePressure">{{__('Tire (inflation) pressure')}}</label>
            <select class="w-52" name="tirePressure" id="tirePressure">
                <option value="Trilateral">Trilateral</option>
                <option value="Freight elevator">{{__('Freight elevator')}}</option>
                <option value="V. liviano">{{__('V. light')}}</option>
            </select>
        </div>
        <div id="" class="flex flex-row justify-between mb-5">
            <label for="wheelConfig">{{__('Wheel Configuration')}}</label>
            <div class="flex flex-col items-center">
                <label class="" for="twoWheels">
                    <picture class="mx-auto"><img class="mx-auto" width="70%"
                            src="{{ Vite::asset('resources/img/formImgs/EJE1.png') }}" alt=""></picture>
                </label>
                <input class="" id="twoWheels" type="radio" value="Two wheels" name="wheelConfig">
            </div>
            <div class="flex flex-col items-center">
                <label class="" for="fourWheels">
                    <picture class="mx-auto"><img class="mx-auto" width="70%"
                            src="{{ Vite::asset('resources/img/formImgs/EJE2.png') }}" alt=""></picture>
                </label>
                <input class="" id="fourWheels" type="radio" value="Four wheels" name="wheelConfig">
            </div>
        </div>
        <div class="flex relative !appearance-none">
            <label class="my-auto" for="wheelDistance">{{__('Wheel Distance')}} Sd =</label>
            <input class="!appearance-none ml-auto w-52" type="number" placeholder="" name="wheelDistance"
                id="wheelDistance">
            <span class="absolute right-0 pr-9 translate-y-[30%]">mm</span>
        </div>
        <div class="flex relative !appearance-none">
            <label class="my-auto" for="wheelBase">{{__('Wheelbase')}} sa =</label>
            <input class="!appearance-none ml-auto w-52" type="number" placeholder="" name="wheelBase" id="wheelBase">
            <span class="absolute right-0 pr-9 translate-y-[30%]">mm</span>
        </div>
        <div id="tireMaterial" class="flex flex-row justify-between mb-5">
            <label class="my-auto" for="tireMaterial">{{__('Wheel type')}}</label>
            <select class="w-52" name="tireMaterial" id="tireMaterial">
                <option value="Neumatic">{{__('Neumatic')}}</option>
                <option value="Gum">{{__('Gum')}}</option>
                <option value="Metalic">{{__('Metalic')}}</option>
            </select>
        </div>
    </div>
</div>
