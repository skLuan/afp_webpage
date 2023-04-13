<div class="grid grid-cols-1 lg:grid-cols-2 gap-5">
    <picture class="bg-white-true p-3 flex">
        <img class="m-auto" width="50%" src="{{ Vite::asset('resources/img/formImgs/GRAFICO5.png') }}" alt="">
    </picture>
    <div>
        <div id="" class="flex flex-row justify-between mb-5">
            <label for="slapJoint">Braced rack</label>
            <div class="">
                <label for="bracedrackYes">Yes</label>
                <input class="" id="bracedrackYes" type="checkbox" value="Yes" name="bracedrack">
            </div>
            <div>
                <label class="" for="bracedrackNO">No</label>
                <input class="" id="bracedrackNO" type="checkbox" value="No" name="bracedrack">
            </div>
        </div>
        <div class="flex relative !appearance-none">
            <label class="my-auto" for="supportLoad">Support Load</label>
            <input class="!appearance-none ml-auto w-52" type="number" placeholder="" name="supportLoad"
                id="supportLoad">
            <span class="absolute right-0 pr-9 translate-y-[30%]">KN</span>
        </div>
        <div class="flex relative !appearance-none">
            <label class="my-auto" for="zz">Back-to-back (Z-Z)</label>
            <input class="!appearance-none ml-auto w-52" type="number" placeholder="" name="zz" id="zz">
            <span class="absolute right-0 pr-9 translate-y-[30%]">mm</span>
        </div>
        <div class="flex relative !appearance-none">
            <label class="my-auto" for="xx">Rack depth (x-x)</label>
            <input class="!appearance-none ml-auto w-52" type="number" placeholder="" name="xx" id="xx">
            <span class="absolute right-0 pr-9 translate-y-[30%]">mm</span>
        </div>
        <div class="flex relative !appearance-none">
            <label class="my-auto" for="yy">Rack length (y-y)</label>
            <input class="!appearance-none ml-auto w-52" type="number" placeholder="" name="yy" id="yy">
            <span class="absolute right-0 pr-9 translate-y-[30%]">mm</span>
        </div>
        <div class="flex relative !appearance-none">
            <label class="my-auto" for="aisle">Aisle width</label>
            <input class="!appearance-none ml-auto w-52" type="number" placeholder="" name="aisle" id="aisle">
            <span class="absolute right-0 pr-9 translate-y-[30%]">mm</span>
        </div>
        <div class="flex relative !appearance-none">
            <label class="my-auto leading-tight" for="footSuport">Foot support dimensions (axb)</label>
            <input class="!appearance-none ml-auto w-52" type="number" placeholder="" name="footSuport"
                id="footSuport">
            <span class="absolute right-0 pr-9 translate-y-[30%]">mm</span>
        </div>
    </div>
</div>
