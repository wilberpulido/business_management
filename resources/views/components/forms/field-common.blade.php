@props(['name','label','containerFieldClass','type'=>'text','placeholder'=>'','design' => 'default'])
<div class="relative z-0"
{{--     @if(isset($containerFieldClass)) class="relative {{$containerFieldClass}}" @endif--}}
>
    @if(isset($label))
        @if($design === 'default')
            <x-forms.label for="{{$name}}" :$design >
                {{$label}}
            </x-forms.label>
            <x-forms.text-input {{ $attributes->whereStartsWith('wire:model') }} :$type :$name :$placeholder :$design />
        @else
            <x-forms.text-input :$type :$name :$placeholder :$design />
            <x-forms.label for="{{$name}}" :$design >
                {{$label}}
            </x-forms.label>
        @endif
    @endif
    <x-forms.error-input  field="{{$name}}" />
</div>
