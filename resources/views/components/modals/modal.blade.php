{{--@props(['title'])--}}


<div
    x-data = "{ show : true,name:'{{ $name }}' }"
    x-show = "show"
    x-on:open-modal.window = "show = ($event.detail.name === name )"
    x-on:close-modal.window = "show = false"
    x-on:keydown.escape.window = "show = false"
    style="display: none"
    class="fixed z-50 inset-0"
    x-transition
{{--    x-transition:enter="transition ease-out duration-300"--}}
{{--    x-transition:enter-start="opacity-0 scale-90"--}}
{{--    x-transition:enter-end="opacity-100 scale-100"--}}
{{--    x-transition:leave="transition ease-in duration-300"--}}
{{--    x-transition:leave-start="opacity-100 scale-100"--}}
{{--    x-transition:leave-end="opacity-0 scale-90"--}}
>
    {{--  Gray Background  --}}
    <div x-on:click="show = false" class="fixed inset-0 bg-gray-400 opacity-40"></div>
    {{--  Modal contarner  --}}
{{--    landscape:w-screen landscape:max-h-[80vh] landscape:mt-12 --}}
    <div class="fixed inset-0 overflow-y-auto">
        <div class="absolute inset-0 rounded max-h-screen m-auto max-w-[240px] sm:max-w-sm min-h-min h-min p-3 flex flex-col justify-between bg-white dark:bg-slate-800">
            {{-- Header --}}
            <div class="p-1 flex justify-between">
                <div>
                    @if(isset($title))
                        <h1 class="text-xl" >
                            {{ $title }}
                        </h1>
                    @endif
                </div>
                <div>
                    <button class="px-3 py-1 bg-red-500 text-white" x-on:click="$dispatch('close-modal')"> X </button>
                </div>
            </div>
            {{-- Body --}}
            @if(isset($body))
                <div class="h-full">
                    {{ $body }}
                </div>
            @endif
            {{-- Footer --}}
            @if(isset($footer))
                <div class="p-1">
                    {{$footer}}
                </div>
            @endif
        </div>
    </div>
</div>
