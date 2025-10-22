@props(['as' => 'p'])

@php
    $tag = $as;
@endphp

<{{ $tag }} {{ $attributes->twMerge('text-sm text-muted-foreground') }}>
    {{ $slot }}
</{{ $tag }}>
