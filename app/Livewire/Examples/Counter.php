<?php

namespace App\Livewire\Examples;

use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Counter extends Component
{
    public $count = 0;

    #[Layout('components.layouts.app')] // This attributes will force this component to use the app.blade.php layout.

    #[Title('Counter Page')]
    public function add()
    {
        $this->count++;

        if ($this->count > 10) {
            session()->flash('status', 'Going to high');
        }
    }
    public function decre()
    {

        $this->count--;

        if ($this->count < 1) {
            session()->flash('status', 'Going to high');
        }
    }
    public function render()
    {
        return view('livewire.examples.counter');
    }
}
