<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
{{--      class="dark"--}}
>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @livewireStyles
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="font-sans antialiased">
<div class="dark:bg-gray-100 dark:bg-gradient-to-r dark:from-slate-900 dark:to-slate-800">
{{--    @include('layouts.navigation')--}}

    <!-- Page Content -->
    <main id="guest-container" class="container mx-auto min-h-screen flex flex-col">
        {{ $slot }}
    </main>
</div>
@livewireScripts
</body>
</html>
