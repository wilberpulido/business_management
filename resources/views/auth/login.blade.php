<x-layouts.guest>
    <div class="min-h-screen flex justify-center items-center bg-gray-300">
        <form method="POST" class="max-w-sm w-full px-8 py-6 rounded-md bg-primary-50 shadow-[15px_15px_20px_-15px_rgba(0,0,0,5)]">
            @csrf
            <h1 class="mb-4 text-xl text-center font-bold">
                Login
            </h1>
            <div class="flex flex-col gap-6 mb-6">
                <x-forms.field-common type="text" name="email" label="Your email" value="{{old('email')}}" design="floating-standard" />
                <x-forms.field-common type="password" name="password" label="Password" design="floating-standard" />
            </div>
            <div class="flex justify-center">
                <button type="submit" class="text-white bg-slate-800 hover:bg-slate-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">

                </button>
            </div>
        </form>
    </div>
</x-layouts.guest>
