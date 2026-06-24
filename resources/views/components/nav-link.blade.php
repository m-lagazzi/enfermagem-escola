@props(['active'])

@php
$classes = ($active ?? false)
            ? 'flex items-center w-full px-4 py-2 rounded-md text-sm font-medium bg-indigo-50 text-indigo-700 border-l-4 border-indigo-500 transition duration-150 ease-in-out'
            : 'flex items-center w-full px-4 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-100 hover:text-gray-900 border-l-4 border-transparent transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>