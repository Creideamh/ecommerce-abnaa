<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\Component;

class AdminEditCategory extends Component
{
    public $name;
    public $description;
    public $category_id;
    public $category_description;
 
    public function mount($category_id)
    {
        $this->category_id = $category_id;
        $category = Category::find($category_id);
        $this->category_id = $category->id;
        $this->name = $category->name;
        $this->description = $category->description;
    }

    public function generateDescription()
    {
        $this->description = Str::slug($this->name);
    }

    public function updateCategory()
    {
        $category = Category::find($this->category_id);
        $category->name = $this->name;
        $category->description = $this->description;
        $category->save();
        session()->flash('message', 'Category has been updated successfully');
    }

    public function render()
    {
        return view('livewire.admin.admin-edit-category')->layout('layouts.base');
    }


}
