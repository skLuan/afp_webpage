@php
    $fiberId = $fiber->id;
    $table = $fiber->table;
    $values = $table->values()->get();
    $name = $values->first()->physicalName->value('name');
@endphp
<table class="w-full">
    <thead>
        <tr class="items-center">
            <th colspan="3" class="w-full py-2 text-center mx-auto font-semibold bg-grey rounded-sm text-white-true">
                {{__('Physical propertires')}}</th>
        </tr>
    </thead>
    <tbody>
        <pre>
            {{-- {{print_r($values)}} --}}
        </pre>
        @foreach ($values as $value)
        <tr class="border-y border-white-bg">
            <td colspan="2" class="pl-3 py-1 bg-yellow text-black">
                {{ $value->physicalName->name }}
            </td>
            <td colspan="2" class="pl-3 py-1 bg-[#a37021] text-white"> {{$value->value}}
                @if (isset($value->metricSystem->name) && !is_null($value->metricSystem->name))
                {{$value->metricSystem->name}}
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
