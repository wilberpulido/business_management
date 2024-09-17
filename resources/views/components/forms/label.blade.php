@props(['design' => 'default',
    'classes' => [
        'default' => 'block mb-2 text-sm font-medium text-gray-900 dark:text-white',
        'floating-standard' => 'absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto',
        'secondary' => 'bg-green-500 text-white',

    ]])

<label {{ $attributes->merge(['class' => $classes[$design] ?? $classes['default']]) }} >
    {{ $slot ?? '' }}
</label>
