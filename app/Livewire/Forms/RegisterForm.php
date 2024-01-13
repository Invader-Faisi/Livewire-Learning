<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class RegisterForm extends Form
{
    #[Rule('required', as: 'Full Name')]
    public $name;
    #[Rule('required|unique:users|email', message: 'New Email')]
    public $email;
    #[Rule('required|min:5')]
    public $password;
}
