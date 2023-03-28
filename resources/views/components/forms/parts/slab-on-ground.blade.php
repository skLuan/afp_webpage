<div id="slapGround" class="flex lg:flex-row justify-center mb-5">
    <label for="slapPosition" class="">Type of Slap:</label>
    <div class="">
        <label class="!text-grey !font-medium" for="slapExt">External</label>
        <input id="slapExt" type="checkbox" value="External" name="slapPosition[]">
    </div>
    <div>
        <label class="!text-grey !font-medium " for="slapIn">Internal</label>
        <input class="" id="slapIn" type="checkbox" value="Internal" name="slapPosition[]">
    </div>
</div>
{{-- -------------------------------------------------------------------------- --}}
<div id="slapJoints" class="flex flex-row lg:grid grid-cols-2 gap-5 justify-between mb-5">
    <label class=" text-right" for="slapJoint">Slap Joints:</label>
    <div class="">
        <label class="!text-grey !font-medium" for="greenCut">Green Cut</label>
        <input class="" id="greenCut" type="checkbox" value="Green cut" name="slapJoint[]">
        <label class="!text-grey !font-medium" for="without">Without Joints</label>
        <input class="" id="without" type="checkbox" value="Without joints" name="slapJoint[]">
    </div>
</div>
{{-- -------------------------------------------------------------------------- --}}
<h5 class="text-grey-light text-center my-5">Joint Spacing</h5>
<div id="JointSpacing" class="flex flex-row justify-between mb-5">
    <div class="">
        <label for="shortSlabs">Short slabs</label>
        <input class="" id="shortSlabs" type="radio" value="Short slabs" name="slapSpace">
    </div>
    <div>
        <label class="" for="controlJoints">Slabs with control joints</label>
        <input class="focus:!bg-black" id="controlJoints" type="radio" value="Slabs with control joints"
            name="slapSpace">
    </div>
    <div>
        <label class="" for="slabsWithoutJoint">Slabs without joints</label>
        <input class="" id="slabsWithoutJoint" type="radio" value="Slabs without joints" name="slapSpace">
    </div>
</div>
<div class="mx-auto mb-5">
    <label class="block text-center" for="mxm">M x M</label>
    <input type="number" name="mxm" id="mxm">
</div>
