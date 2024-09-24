@props(['design' => 'default',
    'classes' => [
        'default' => 'label-default',
        'floating-filled' => 'label-floating-filled',
        'floating-standard' => 'label-floating-standard',
        'floating-outlined' => 'label-floating-outlined',
    ]])

<label {{ $attributes->merge(['class' => $classes[$design] ?? $classes['default']]) }} >
    {{ $slot ?? '' }}
</label>
