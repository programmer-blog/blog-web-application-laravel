@props(['active' => false, 'link'])

@php
    $classes = "block text-left px-3 text-sm leading-6 hover:bg-blue-500 hover:text-white focus:text-white";
    if($active) $classes .= ' bg-blue-500 text-white'; 
@endphp

<a {{ $attributes(['class' => $classes, 'href' => $link]) }}>
    {{ $slot }}
</a>
