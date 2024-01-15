<?php

namespace App\Livewire\Products;

use App\Models\Product;
use Livewire\Attributes\On;
use Livewire\Attributes\Rule;
use Livewire\Component;


class CreateProducts extends Component
{


    public $formTitle = 'Add Product';
    public $editProduct = false;

    public $product;


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
        $product = $this->validate();
        Product::create($product);
        session()->flash('status', 'Product created');
        $this->reset();
    }

    public function UpdateProduct()
    {
        $updatedProduct = $this->validate();

        $product = Product::findOrfail($this->product->id);
        $product->update($updatedProduct);
        session()->flash('status', 'Product Updated Successfully');
    }

    #[On('edit-product')]
    public function Edit($id)
    {
        $this->formTitle = 'Update Product';
        $this->editProduct = true;

        $this->product = Product::findOrfail($id);

        $this->title = $this->product->title;
        $this->description = $this->product->description;
        $this->price = $this->product->price;
    }

    public function close()
    {
        $this->dispatch('Product_Added');
        $this->reset();
    }
}
