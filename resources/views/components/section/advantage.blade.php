@php
    function urlSvg($name) {
        return 'resources/img/icons/advantages/'.$name.'.svg';
    }

@endphp
<div class="grid grid-cols-5 lg:max-w-4xl mx-auto">

    <div class="col-span-2 mt-10">
        <div class="mb-3 rounded-full mx-auto w-[102px] h-[102px]"><img class="h-full m-auto" src="{{Vite::asset(urlSvg('MANOFacil'))}}" alt=""></div>
        <p class="text-base leading-tight text-center lg:w-4/6 lg:mx-auto">{{__('Easier to place compared to a steel reinforcement')}}</p>
    </div>
    <div class="col-span-2 mt-10 col-start-4">
        <div class="mb-3 rounded-full mx-auto w-[102px] h-[102px]"><img class="h-full m-auto" src="{{Vite::asset(urlSvg('HORMIGON'))}}" alt=""></div>
        <p class="text-base leading-tight text-center lg:w-4/6 lg:mx-auto">{{__('Less influence on the properties of the concrete')}}</p>
    </div>
    <div class="col-span-2 mt-10 ">
        <div class="mb-3 rounded-full mx-auto w-[102px] h-[102px]"><img class="h-full m-auto" src="{{Vite::asset(urlSvg('LLUVIA'))}}" alt=""></div>
        <p class="text-base leading-tight text-center lg:w-4/6 lg:mx-auto">{{__('Corrotion resistance, perfect for enviromental use')}}</p>
    </div>
    <div class="col-span-2 mt-10  col-start-4">
        <div class="mb-3 rounded-full mx-auto w-[102px] h-[102px]"><img class="h-full m-auto" src="{{Vite::asset(urlSvg('CASCO'))}}" alt=""></div>
        <p class="text-base leading-tight text-center lg:w-4/6 lg:mx-auto">{{__('Require no maintenance')}}</p>
    </div>

</div>
