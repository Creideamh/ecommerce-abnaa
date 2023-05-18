<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Cart;

class DetailsComponent extends Component
{
    public $product_id;

    public function mount($product_id)
    {
        $this->product_id = $product_id;
    }

    public function store($product_id, $product_name, $product_price, $product_size)
    {
        Cart::add($product_id, $product_name, $product_price, $product_size)->associate('Apps\Models\Product');
        session()->flash('success_message', 'Product Item Added');
        return redirect()->route('product.cart');
    }



    public function render()
    {
        $product = Product::where('id',$this->product_id)->first();
        return view('livewire.details-component', ['product' => $product])->layout('layouts.base');
    }
}
