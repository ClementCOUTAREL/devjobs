@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-lg text-gray-700 uppercase font-bold']) }}>
    {{ $value ?? $slot }}
</label>
