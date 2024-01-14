<?php

namespace App\Livewire\Examples;

use App\Models\User;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithPagination;

class Pagination extends Component
{
    use WithPagination;

    public $query;

    public $pagination = 10;


    #[Computed(persist: true, seconds: 3600)]
    public function users()
    {
        if (!$this->query) {
            return User::simplePaginate($this->pagination);
        } else {
            return User::where('name', 'like', '%' . $this->query . '%')
                ->orWhere('name', 'like', '%' . $this->query . '%')->simplePaginate($this->pagination);
        }
    }

    public function render()
    {
        return view('livewire.examples.pagination');
    }

    public function updatequery()
    {
        $this->resetPage();
    }
}
