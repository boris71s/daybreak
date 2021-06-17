@props(['disabled' => false])

<textarea {{ $disabled ? 'disabled' : '' }} {!! $attributes !!}>
</textarea>
