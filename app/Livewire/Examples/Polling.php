<?php

namespace App\Livewire\Examples;

use Carbon\Carbon;
use Livewire\Component;

class Polling extends Component
{
    public function render()
    {
        return view('livewire.examples.polling', [
            'time' => Carbon::now()
        ]);
    }
}
