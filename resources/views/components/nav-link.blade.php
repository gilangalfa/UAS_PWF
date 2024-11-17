@props(['active'])

@php
$classes = ($active ?? false)
            ? "w-96 bg-white p-5 font-semibold text-center text-[#7469B6] text-2xl uppercase shadow-md hover:bg-gray-50 transition-all"
            : "w-96 bg-white p-5 font-semibold text-center text-[#7469B6] text-2xl uppercase shadow-md hover:bg-gray-50 transition-all";
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
