<?php

namespace App\Livewire;

use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\Component;

class RegisterUser extends Component
{
    #[Title('Register')]


    #[Rule('required', as: 'Full Name')]
    public $name;
    #[Rule('required|unique:users|email', message: 'New Email')]
    public $email;
    #[Rule('required|min:5')]
    public $password;


    public function render()
    {
        return view('livewire.register-user');
    }

    public function RegisterUser()
    {
        $this->validate();
        dd(123);
    }
}
