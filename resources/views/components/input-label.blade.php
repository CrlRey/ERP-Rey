@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-semibold text-sm text-gray-700 uppercase']) }}>
    {{ $value ?? $slot }}
</label>
