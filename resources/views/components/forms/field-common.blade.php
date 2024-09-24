@props([
    'name',
    'label',
    'autocomplete'=>'',
    'value'=>'',
    'containerFieldClass'=>'',
    'type'=>'text',
    'placeholder'=>'',
    'design' => 'default',
    'beforeIcon' => false,
    'afterIcon' => false,
])
<div
    {{ $attributes->class(['relative z-0'])->merge(['class'=> $containerFieldClass ]) }}
>
    @if($design === 'default')
        @if(isset($label))
            <x-forms.label for="{{$name}}" :$design >
                {{$label}}
            </x-forms.label>
        @endif
        <x-forms.text-input {{ $attributes->whereStartsWith('wire:model') }} id="{{$name}}" :$type :$name :$placeholder :$value :$autocomplete :$design />
        @if($beforeIcon || $afterIcon)
            @if($beforeIcon)
                <div>
                    {{ $beforeIcon }}
                </div>
            @endif
            @if($afterIcon)
                <span class="absolute top-9 end-0 px-2 py-[9px] text-sm font-medium rounded-e-lg">
                    {{ $afterIcon }}
                </span>
            @endif
        @endif
    @else
        <x-forms.text-input {{ $attributes->whereStartsWith('wire:model') }} id="{{$name}}" :$type :$name :$placeholder :$value :$autocomplete :$design />
        @if(isset($label))
            <x-forms.label for="{{$name}}" :$design >
                {{$label}}
            </x-forms.label>
        @endif
        @if($beforeIcon || $afterIcon)
            @if($beforeIcon)
                <div>
                    {{ $beforeIcon }}
                </div>
            @endif
            @if($afterIcon)
                <span class="absolute top-0 end-0 px-2 py-3 text-sm font-medium rounded-e-lg">
                    {{ $afterIcon }}
                </span>
            @endif
        @endif
    @endif
    <x-forms.error-input  field="{{$name}}" />
</div>
