<?php

namespace App\Livewire\Examples;

use Livewire\Attributes\Lazy;
use Livewire\Component;

class NavBar extends Component
{
    // public function placeholder()
    // {
    //     return <<< 'HTML'
    //     <div class="placeholder-glow">
    //         <div class="placeholder c0l-12"></div>
    //     </div>
    //     HTML;
    // }
    public function render()
    {
        return view('livewire.examples.nav-bar');
    }
}
