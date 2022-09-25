    @props(['name', 'value'])

<div class="shadow-sm trumbowyg-dark bg-black mb-3 border border-primary border-opacity-25">
    <textarea class="text-light" type="text" id="content" name="{{ $name }}">
        {{ $value ?? ''}}
    </textarea>
</div>
