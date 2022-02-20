@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center border-b border-white px-1 pt-1 text-sm font-medium leading-5 text-gray-200 focus:outline-none focus:border-gray-200 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1  text-sm font-medium leading-5 text-white hover:text-gray-300 focus:outline-none focus:text-gray-300  transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
