@props(['value'])

<label {{ $attributes->merge(['class' => 'text-muted']) }}>
    {{ $value ?? $slot }}
</label>
