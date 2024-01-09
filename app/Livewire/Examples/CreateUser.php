<?php

namespace App\Livewire\Examples;

use App\Models\User;
use Livewire\Component;

class CreateUser extends Component
{
    public $name = 'Faisal';
    public $users;

    public function mount()
    {
        // it will fetch all users from the database.
        $this->users = User::all();
    }

    public function render()
    {
        return view('livewire.examples.create-user')->with(
            [
                'email' => 'faisal@gmail.com',
                'address' => 'Sardogha'
            ]
        );
    }
}
