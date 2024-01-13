<?php

namespace App\Livewire;

use App\Livewire\Forms\RegisterForm;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\Component;

class RegisterUser extends Component
{
    #[Title('Register')]

    public RegisterForm $form;

    public function render()
    {
        return view('livewire.register-user');
    }

    public function RegisterUser()
    {
        $this->form->validate();
        dd(123);
    }
}
