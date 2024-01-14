<?php

namespace App\Livewire\Products;

use Livewire\Attributes\On;
use Livewire\Component;

class Products extends Component
{

    public function render()
    {
        return view('livewire.products.products');
    }

    #[On('product')]
    public function SaveProduct($product)
    {
    }
}
