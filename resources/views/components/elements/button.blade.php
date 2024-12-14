@props(['disabled' => 'false'])
<button {{ $attributes->merge(['class' => 'button']) }} {{ ($disabled != 'false' ? 'disabled' : '')}} >
    {{$slot}}
</button>
