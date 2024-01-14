<?php

namespace App\Livewire\Examples;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Pagination extends Component
{
    use WithPagination;

    public $query;

    public $pagination = 10;

    public function render()
    {
        if (!$this->query) {
            $users = User::paginate($this->pagination);
        } else {
            $users = User::where('name', 'like', '%' . $this->query . '%')
                ->orWhere('name', 'like', '%' . $this->query . '%')->simplePaginate($this->pagination);
        }
        return view('livewire.examples.pagination', [
            'users' => $users
        ]);
    }

    public function updatequery()
    {
        $this->resetPage();
    }
}
