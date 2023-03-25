<div id="gen-info" class="flex flex-col">
    {{-- ----------------------------- Text name --}}
    <div class="lg:grid grid-cols-2 gap-5 mb-5">
        <label for="inputProjectName" class="text-grey-light pl-1 border-none text-right my-auto">Project name*</label>
        <input
            class="py-2 w-full mb-2 shadow-afp rounded-sm focus:!border-yellow focus:border-[1px] focus:bg-white-true focus:shadow-btn border-none bg-white"
            type="text" name="projectName" id="inputProjectName">
    </div>
    {{-- -------------------------------------------------------------------------------------------------- END --}}

    {{-- ----------------------------- City state --}}
    <div class="lg:grid grid-cols-2 gap-5 mb-5">
        <x-forms.misc.country-select></x-forms.misc.country-select>
    </div>
    <div id="selectState" class="hidden grid-cols-2 gap-5 mb-5">
        <x-forms.misc.state-select></x-forms.misc.state-select>
    </div>

    {{-- ----------------------------- Project dimentions --}}
    <div class="lg:grid grid-cols-2 gap-5 mb-5">
        <label for="dimentions" class="text-grey-light text-right my-auto pl-1 border-none">Proyect dimentions in
            m²*</label>
        <input type="number" name="dimentions" id="dimentions"
            class="py-2 mb-2 w-full shadow-afp rounded-sm focus:!border-yellow focus:border-[1px] focus:bg-white-true focus:shadow-btn border-none bg-white">
    </div>
    {{-- -------------------------------------------------------------------------------------------------- END --}}

    {{-- ----------------------------- Text name --}}
    <div class="lg:grid grid-cols-2 gap-5 mb-5">
        <label for="inputName" class="text-grey-light text-right my-auto pl-1 border-none">Customer's, company
            name*</label>
        <input
            class="py-2 mb-2 w-full shadow-afp rounded-sm focus:!border-yellow focus:border-[1px] focus:bg-white-true focus:shadow-btn border-none bg-white"
            type="text" name="name" id="inputName">
    </div>
    {{-- -------------------------------------------------------------------------------------------------- END --}}

    {{-- ----------------------------- email email --}}
    <div class="lg:grid grid-cols-2 gap-5 mb-5">
        <label for="inputEmail" class="text-grey-light text-right my-auto pl-1 border-none">Email*</label>
        <input
            class="py-2 mb-2 shadow-afp rounded-sm w-full focus:!border-yellow focus:border-[1px] focus:bg-white-true focus:shadow-btn bg-white border-none"
            type="email" name="email" id="inputEmail">
    </div>
    {{-- -------------------------------------------------------------------------------------------------- END --}}
    <div class="lg:grid grid-cols-2 gap-5 mb-5">
    <label for="inputPhone" class="text-grey-light text-right my-auto pl-1 border-none">Phone</label>
    <input
        class="py-2 mb-2 shadow-afp w-full rounded-sm focus:!border-yellow focus:border-[1px] focus:bg-white-true focus:shadow-btn bg-white border-none"
        type="tel" name="phone" id="inputPhone">
</div>
