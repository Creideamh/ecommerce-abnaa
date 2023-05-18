<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class DetailsComponent extends Component
{
    public $product_id;

    public function mount($product_id)
    {
        $this->product_id = $product_id;
    }

    public function render()
    {
        $product = Product::where('id',$this->product_id)->first();
        return view('livewire.details-component', ['product' => $product])->layout('layouts.base');
    }
}
