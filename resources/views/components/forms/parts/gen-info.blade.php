<div id="gen-info" class="flex flex-col">
    {{-- ----------------------------- Text name --}}
    <label for="inputProjectName" class="text-grey-light pl-1 border-none">Project name*</label>
    <input
        class="py-2 mb-2 shadow-afp rounded-sm focus:!border-yellow focus:border-[1px] focus:bg-white-true focus:shadow-btn border-none bg-white"
        type="text" name="projectName" id="inputProjectName">
    {{-- -------------------------------------------------------------------------------------------------- END --}}

    {{-- ----------------------------- City state --}}
    <x-forms.misc.country-select></x-forms.misc.country-select>


    {{-- ----------------------------- Project dimentions --}}
    <label for="dimentions" class="text-grey-light pl-1 border-none">Proyect dimentions in m^2*</label>
    <input type="number" name="dimentions" id="dimentions"
        class="py-2 mb-2 shadow-afp rounded-sm focus:!border-yellow focus:border-[1px] focus:bg-white-true focus:shadow-btn border-none bg-white">
    {{-- -------------------------------------------------------------------------------------------------- END --}}

    {{-- ----------------------------- Text name --}}
    <label for="inputName" class="text-grey-light pl-1 border-none">Customer's, company name*</label>
    <input
        class="py-2 mb-2 shadow-afp rounded-sm focus:!border-yellow focus:border-[1px] focus:bg-white-true focus:shadow-btn border-none bg-white"
        type="text" name="name" id="inputName">
    {{-- -------------------------------------------------------------------------------------------------- END --}}

    {{-- ----------------------------- email email --}}
    <label for="inputEmail" class="text-grey-light pl-1 border-none">Email*</label>
    <input
        class="py-2 mb-2 shadow-afp rounded-sm focus:!border-yellow focus:border-[1px] focus:bg-white-true focus:shadow-btn bg-white border-none"
        type="email" name="email" id="inputEmail">
    {{-- -------------------------------------------------------------------------------------------------- END --}}

    <label for="inputPhone" class="text-grey-light pl-1 border-none">Phone</label>
    <input
        class="py-2 mb-2 shadow-afp rounded-sm focus:!border-yellow focus:border-[1px] focus:bg-white-true focus:shadow-btn bg-white border-none"
        type="tel" name="phone" id="inputPhone">
</div>
