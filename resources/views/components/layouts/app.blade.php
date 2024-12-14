<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
{{--      class="dark"--}}
>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $title ?? 'Page Title' }}</title>
        @livewireStyles
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
    <div class="bg-gray-100 dark:bg-gradient-to-r dark:from-slate-900 dark:to-slate-800">
        <main class="container mx-auto min-h-screen flex flex-col w-full relative">
            {{ $slot }}
        </main>
    </div>
        @livewireScripts
    </body>
</html>
