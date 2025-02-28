@php
    $clases = "underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500"
@endphp

<div>
    <a {{ $attributes->merge(['class' => $clases]) }}>
        {{ $slot }}
    </a>
</div>
