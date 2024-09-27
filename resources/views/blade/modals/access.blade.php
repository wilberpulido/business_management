<button
    x-data x-on:click="$dispatch('open-modal',{ name: 'login'})"
    class="rounded-md px-3 py-1 bg-green-500 text-white"
>
    Access
</button>
<x-modals.modal name="login" >
    {{--                    @slot('body')--}}
    {{--                        <span class="p-5"> Body tag test </span>--}}
    {{--                    @endslot--}}
    <x-slot:body>
        <form method="POST" class=" px-8 py-6 bg-violet-400">
            @csrf
            <h1 class="mb-4 text-xl text-center font-bold">
                Login
            </h1>
            <div class="flex flex-col gap-6 mb-6">
                <x-forms.field-common type="text" name="email" label="Your email" value="{{old('email')}}" design="floating-standard" />
                <x-forms.field-common type="password" name="password" label="Password" design="floating-standard" />
            </div>
            <div class="flex justify-center">
                <button type="submit" class="text-white bg-slate-800 hover:bg-slate-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </div>
        </form>
    </x-slot:body>
    <x-slot:footer>
        <span>FOOTER</span>
    </x-slot:footer>
</x-modals.modal>
