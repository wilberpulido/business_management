@props(['design' => 'default',
    'classes' => [
        'default' => 'input-default',
        'floating-filled' => 'input-floating-filled peer',
        'floating-standard' => 'input-floating-standard peer',
        'floating-outlined' => 'input-floating-outlined peer',
    ]])
<input {{ $attributes->merge(['class' => $classes[$design] ?? $classes['default']])  }} />

