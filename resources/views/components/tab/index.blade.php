{{-- format-ignore-start --}}
@props([
    'name' => defaultBladewindName('bw-tab-group-') ,
    'headings' => '',
    'color' => config('bladewind.tab.group.color', 'primary'),
    'style' => config('bladewind.tab.group.style', 'simple'),
])
{{-- format-ignore-end --}}

<div class="bw-tab bw-tab-{{ $name }} {{$style}} {{$color}}">
    <ul class="flex flex-wrap -mb-px {{$name}}-headings" data-name="{{$name}}">
        {{ $headings }}
    </ul>
</div>
{{$slot}}