<?php

namespace App\Livewire\Products;

use App\Models\Product;
use Livewire\Attributes\On;
use Livewire\Component;

class DeleteProduct extends Component
{
    public $productID;

    public function render()
    {
        return view('livewire.products.delete-product');
    }

    #[On('delete-product')]
    public function DeleteProduct($id)
    {
        $this->productID = $id;
    }

    public function delete()
    {
        $deleteProduct = Product::find($this->productID);
        $deleteProduct->delete();

        $this->dispatch('Product_Deleted');
        $this->reset();
    }
}
