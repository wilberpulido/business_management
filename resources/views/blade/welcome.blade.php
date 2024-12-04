<x-layouts.guest>
    <div class="p-6 flex justify-between">
        <div>
            <div class="bg-red-300 px-12 py-2">
                LOGO
            </div>
        </div>
        <div class="flex items-center">
            @include('blade.modals.access')
{{--            @if (Route::has('login'))--}}
{{--                <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>--}}
{{--            @endif--}}
{{--            @if (Route::has('register'))--}}
{{--                <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>--}}
{{--            @endif--}}
        </div>
    </div>
    <div
        class="p-6 cover-page flex-grow"
{{--        class="bg-violet-400"--}}
    >
{{--        <livewire:models.company.brand.form-repeater testId="5" />--}}

    </div>
</x-layouts.guest>

