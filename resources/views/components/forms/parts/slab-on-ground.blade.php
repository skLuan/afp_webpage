<div id="slapGround" class="flex lg:flex-row lg:w-1/2 mb-5 pr-5">
    <label for="slapPosition" class="">Type of Slab:</label>
    <div class="ml-auto mr-3">
        <label class="!text-grey !font-medium" for="slapExt">External</label>
        <input id="slapExt" type="checkbox" value="External" name="slapPosition[]">
    </div>
    <div>
        <label class="!text-grey !font-medium " for="slapIn">Internal</label>
        <input class="" id="slapIn" type="checkbox" value="Internal" name="slapPosition[]">
    </div>
</div>
{{-- -------------------------------------------------------------------------- --}}
<div id="JointSpacing" class="lg:grid grid-cols-2 gap-5 mb-5">
    <div class="flex">
        <label class="" for="slapSpace">Joint Spacing:</label>
        <select class="ml-auto" id="shortSlabs" value="Short slabs" name="slapSpace">
            <option value="Slabs with control joints">Short slabs</option>
            <option value="Slabs with control joints">Slabs with control joints</option>
            <option value="Slabs without joints">Slabs without joints</option>
        </select>
    </div>
    <div class="flex relative">
        <label class="text-center" for="mxm">mxm:</label>
        <input class="ml-auto" type="number" name="mxm" id="mxm">
        <span class="absolute right-0 pr-9 translate-y-[30%]">mm</span>
    </div>
</div>
