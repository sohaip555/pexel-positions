@props(['tag', 'size' => 'base'])

@php
    $classes = "bg-white/10 hover:bg-white/25 rounded-xl font-bold transition-colors duration-300";
    if ($size === 'base')
        {
            $classes = $classes . " px-5 py-1 text-sm";
        }

    if ($size === 'small')
        {
            $classes = $classes ." px-3 py-1 text-2xs";
        }
@endphp

<a href="/tags/{{ strtolower($tag->name) }}" {{$attributes(['class' => $classes]) }} >{{ucwords($tag->name)}}</a>
