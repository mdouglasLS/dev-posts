@props(['value'])

<textarea {{ $attributes->merge(['class' => 'text-light']) }} type="text" id="content" rows="5">
    {{ $value ?? ''}}
</textarea>
