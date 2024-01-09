<?php

namespace App\Livewire\Examples;

use Livewire\Component;

class Counter extends Component
{
    public $count = 0;

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
