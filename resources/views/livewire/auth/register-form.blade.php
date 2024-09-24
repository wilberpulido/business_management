<div class="max-w-sm mx-auto min-w-[260px] p-6 rounded-md bg-primary-50 shadow-[15px_15px_20px_-15px_rgba(0,0,0,5)]" >
    <form method="POST" autocomplete="off" >
        @csrf
        <h1 class="mb-4 text-xl text-center font-bold">
           Registrar
        </h1>
        <div class="flex flex-col gap-1 mb-5">
            <x-forms.field-common type="text" name="name" label="{{__('user.fields.name.label')}}" design="floating-standard" />
            <x-forms.field-common type="text" name="email" label="Your email" design="floating-standard" />
            <x-forms.field-common type="{{$passwordInputType}}" name="password" label="Password" autocomplete="new-password" design="floating-filled" >
                <x-slot:afterIcon >
                    <x-icons.eye-eye-off :$showPassword />
                </x-slot>
            </x-forms.field-common>
            <x-forms.field-common type="{{$passwordInputType}}" name="password_confirmation" label="Repeat password" autocomplete="new-password" design='floating-outlined' >
                <x-slot:afterIcon >
                    <x-icons.eye-eye-off :$showPassword />
                </x-slot>
            </x-forms.field-common>
{{--            <i data-feather="eye" ></i>--}}
{{--            <i data-feather="eye-off" ></i>--}}
        </div>

        <div class="flex justify-center">
            <button type="submit" class="text-white bg-primary-800 hover:bg-primary-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Register new account</button>
        </div>
    </form>
</div>
