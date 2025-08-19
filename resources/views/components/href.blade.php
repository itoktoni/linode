@props([
    'href' => '',
    'color' => 'bg-blue-600',
    'label' => '',
])

@php
    if($color == 'primary')
    {
        $color = 'bg-blue-600';
    }
    elseif($color == 'danger')
    {
        $color = 'bg-red-600';
    }
@endphp

<a wire:navigate {{ $attributes->merge(['href' => $href]) }} {{ $attributes->class([
    $color,
    'ext-center inline-block py-2 px-3 text-sm-plus font-normal rounded-md text-white',
]) }}>
    {{ $label ?? $slot }}
</a>