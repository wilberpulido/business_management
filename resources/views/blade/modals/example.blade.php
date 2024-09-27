<button
    x-data x-on:click="$dispatch('open-modal',{ name: 'test'})"
    class="rounded-md px-3 py-1 bg-green-500 text-white"
>
    Open modal
</button>
<x-modals.modal name="test" title="Title modal" >
    {{--                    @slot('body')--}}
    {{--                        <span class="p-5"> Body tag test </span>--}}
    {{--                    @endslot--}}
    <x-slot:body>
        <span class="p-5"> Body tag test </span>
    </x-slot:body>
</x-modals.modal>
