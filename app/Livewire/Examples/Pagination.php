<?php

namespace App\Livewire\Examples;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Pagination extends Component
{
    use WithPagination;
    public function render()
    {
        return view('livewire.examples.pagination', [
            'users' => User::paginate(5)
        ]);
    }
}
