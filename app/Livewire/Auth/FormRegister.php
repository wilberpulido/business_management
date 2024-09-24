<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Log;
use Laravel\Fortify\Http\Controllers\RegisteredUserController;
use Livewire\Component;

class FormRegister extends Component
{
    public bool $showPassword = false;
    public string $passwordInputType = 'password';

    public function updatedShowPassword($showPassword): void
    {
        $this->passwordInputType = $showPassword ? 'text' : 'password';
    }
    public function render()
    {
        return view('livewire.auth.register-form');
    }
}
