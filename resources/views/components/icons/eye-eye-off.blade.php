@props(['showPassword' => false])

<span wire:click.prevent="$toggle('showPassword')" class="@if(!$showPassword) hidden @endif">
    <span wire:ignore >
        <i data-feather="eye" ></i>
    </span>
</span>
<span wire:click.prevent="$toggle('showPassword')" class="@if($showPassword) hidden @endif">
    <span wire:ignore >
        <i data-feather="eye-off" ></i>
    </span>
</span>
