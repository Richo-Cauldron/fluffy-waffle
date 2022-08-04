@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-smdm text-gray-700 mb-1']) }}>
    {{ $value ?? $slot }}
</label>
