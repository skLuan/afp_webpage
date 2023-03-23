<div class="grid grid-cols-2 gap-5">
    <div>
        <picture class="bg-white-true p-3 flex">
            <img class="m-auto" src="{{ Vite::asset('resources/img/formImgs/CAMION.png') }}" alt="">
        </picture>
        <picture class="bg-white-true p-3 flex">
            <img class="m-auto" src="{{ Vite::asset('resources/img/formImgs/LLANTAS.png') }}" alt="">
        </picture>
    </div>
    <div>
        <div class="flex relative !appearance-none">
            <label for="truckStatickWheel">Maximum Static Wheel Load</label>
            <input class="!appearance-none ml-auto w-52" type="number" placeholder="" name="truckStatickWheel"
                id="truckStatickWheel">
            <span class="absolute right-0 pr-9 translate-y-[30%]">KN</span>
        </div>
        <div class="flex relative !appearance-none">
            <label class="my-auto" for="truckTirePressure">Tire (inflation) pressure </label>
            <input class="!appearance-none ml-auto w-52" type="number" placeholder="" name="truckTirePressure"
                id="truckTirePressure">
            <span class="absolute right-0 pr-9 translate-y-[30%]">MPa</span>
        </div>
        <div id="" class="flex flex-row justify-between mb-5">
            <label for="truckWheelConfig">Wheel Configuration</label>
            <div class="flex flex-col items-center">
                <label class="" for="truckTwoWheels">
                    <picture class="mx-auto"><img class="mx-auto" width="70%"
                            src="{{ Vite::asset('resources/img/formImgs/EJE1.png') }}" alt=""></picture>
                </label>
                <input class="" id="truckTwoWheels" type="radio" value="Two wheels" name="truckWheelConfig">
            </div>
            <div class="flex flex-col items-center">
                <label class="" for="truckFourWheels">
                    <picture class="mx-auto"><img class="mx-auto" width="70%"
                            src="{{ Vite::asset('resources/img/formImgs/EJE2.png') }}" alt=""></picture>
                </label>
                <input class="" id="truckFourWheels" type="radio" value="Four wheels" name="truckWheelConfig">
            </div>
        </div>
        <div class="flex relative !appearance-none">
            <label class="my-auto" for="truckWheelDistance">Wheel distance Sd =</label>
            <input class="!appearance-none ml-auto w-52" type="number" placeholder="" name="truckWheelDistance"
                id="truckWheelDistance">
            <span class="absolute right-0 pr-9 translate-y-[30%]">mm</span>
        </div>
        <div class="flex relative !appearance-none">
            <label class="my-auto" for="truckWheelDS">Wheel distance S =</label>
            <input class="!appearance-none ml-auto w-52" type="number" placeholder="" name="truckWheelDS"
                id="truckWheelDS">
            <span class="absolute right-0 pr-9 translate-y-[30%]">mm</span>
        </div>
        <div class="flex relative !appearance-none">
            <div>
                <label class="my-auto" for="truckWheelBaseS1">Wheel base S1 =</label>
                <picture>
                    <img class="mx-auto" width="40%" src="{{ Vite::asset('resources/img/formImgs/EJE1.png') }}"
                        alt="">
                </picture>
            </div>
            <input class="!appearance-none ml-auto w-52" type="number" placeholder="" name="truckWheelBaseS1"
                id="truckWheelBaseS1">
            <span class="absolute right-0 pr-9 translate-y-[30%]">mm</span>
        </div>
        <div class="flex relative !appearance-none">
            <div>
                <label class="my-auto" for="truckWheelBaseS2">Wheel base S2 =</label>
                <picture>
                    <img class="mx-auto" width="40%" src="{{ Vite::asset('resources/img/formImgs/EJE2.png') }}"
                        alt="">
                </picture>
            </div>
            <input class="!appearance-none ml-auto w-52" type="number" placeholder="" name="truckWheelBaseS2"
                id="truckWheelBaseS2">
            <span class="absolute right-0 pr-9 translate-y-[30%]">mm</span>
        </div>
        <div class="flex relative !appearance-none">
            <div>
                <label class="my-auto" for="truckWheelBaseS3">Wheel base S3 =</label>
                <picture>
                    <img class="mx-auto" width="40%" src="{{ Vite::asset('resources/img/formImgs/EJE2.png') }}"
                        alt="">
                </picture>
            </div>
            <input class="!appearance-none ml-auto w-52" type="number" placeholder="" name="truckWheelBaseS3"
                id="truckWheelBaseS3">
            <span class="absolute right-0 pr-9 translate-y-[30%]">mm</span>
        </div>
        <div class="flex relative !appearance-none">
            <div>
                <label class="my-auto" for="truckWheelBaseS4">Wheel base S4 =</label>
                <picture>
                    <img class="mx-auto" width="40%" src="{{ Vite::asset('resources/img/formImgs/EJE2.png') }}"
                        alt="">
                </picture>
            </div>
            <input class="!appearance-none ml-auto w-52" type="number" placeholder="" name="truckWheelBaseS4"
                id="truckWheelBaseS4">
            <span class="absolute right-0 pr-9 translate-y-[30%]">mm</span>
        </div>
        <div class="flex relative !appearance-none">
            <div>
                <label class="my-auto" for="truckWheelBaseS5">Wheel base S5 =</label>
                <picture>
                    <img class="mx-auto" width="40%" src="{{ Vite::asset('resources/img/formImgs/EJE2.png') }}"
                        alt="">
                </picture>
            </div>
            <input class="!appearance-none ml-auto w-52" type="number" placeholder="" name="truckWheelBaseS5"
                id="truckWheelBaseS5">
            <span class="absolute right-0 pr-9 translate-y-[30%]">mm</span>
        </div>
    </div>
</div>
