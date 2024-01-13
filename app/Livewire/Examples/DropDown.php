<?php

namespace App\Livewire\Examples;

use App\Models\County;
use App\Models\SubCounty;
use Livewire\Attributes\Title;
use Livewire\Component;

class DropDown extends Component
{
    #[Title('Dropdown')]

    public $counties;

    public $selectedCounty = null;

    public $subCounties = null;

    public function mount()
    {
        $this->counties = County::all();
    }
    public function updatedselectedCounty()
    {
        // dd($this->selectedCounty);

        $this->subCounties = SubCounty::where('county_code', $this->selectedCounty)->get();
    }
    public function render()
    {
        return view('livewire.examples.drop-down');
    }
}
