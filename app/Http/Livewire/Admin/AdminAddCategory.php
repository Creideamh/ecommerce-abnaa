<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;
use Illuminate\Support\Str;


class AdminAddCategory extends Component
{
    public $name;
    public $description;


    public function generateDescription()
    {
        $this->description = Str::slug($this->name);
    }


    public function storeCategory()
    {
        $category = new Category();
        $category->name = $this->name;
        $category->description = $this->description;
        $category->save();
        session()->flash('message', 'Category has been created successfully');
    }
    
    public function render()
    {
        return view('livewire.admin.admin-add-category')->layout('layouts.base');
    }
}
