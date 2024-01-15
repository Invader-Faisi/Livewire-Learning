<?php

namespace App\Livewire\Products;

use App\Models\Product;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Computed;

class Products extends Component
{
    use WithPagination;

    #[Computed]
    public function products()
    {
        return Product::paginate(5);
    }

    public function render()
    {
        return view('livewire.products.products');
    }

    #[On('Product_Added')]
    public function ProductAdded()
    {
        $this->render();
    }

    #[On('Product_Deleted')]
    public function ProductDeleted()
    {
        $this->render();
    }
}
