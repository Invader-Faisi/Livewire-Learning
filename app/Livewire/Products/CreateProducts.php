<?php

namespace App\Livewire\Products;

use Livewire\Attributes\Rule;
use Livewire\Component;


class CreateProducts extends Component
{
    #[Rule('required')]
    public $title;
    #[Rule('required')]
    public $description;
    #[Rule('required')]
    public $price;

    public function render()
    {
        return view('livewire.products.create-products');
    }

    public function AddProduct()
    {
        $this->validate();
        session()->flash('status', 'Product created');
        $this->reset();
    }

    public function close()
    {
        $this->reset();
    }
}
