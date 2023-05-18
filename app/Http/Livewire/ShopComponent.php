<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use App\Models\subCategory;
use Illuminate\Support\Collection;
use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart as Cart;

class ShopComponent extends Component
{
    public $products;
    public $pageNumber = 1;
    public $hasMorePages;

    public function  mount()
    {
        $this->products = new Collection();

        $this->loadProducts();
    }

    public function store($product_id, $product_name, $product_price, $product_size)
    {
        Cart::add($product_id, $product_name, $product_price, $product_size)->associate('Apps\Models\Product');
        session()->flash('success_message', 'Product Item Added');
        return redirect()->route('product.cart');
    }

    public function loadProducts()
    {
        $products = Product::paginate(12, ['*'], 'page', $this->pageNumber);

        $this->pageNumber += 1;

        $this->hasMorePages = $products->hasMorePages();

        $this->products->push(...$products->items());
    }



    public function render()
    {
        $categories = Category::all();
  

        return view('livewire.shop-component',['categories' => $categories])->layout('layouts.base');
    }
}
