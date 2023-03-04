<?php

namespace App\Http\Livewire\Admin;


use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class AdminCategoriesComponent extends Component
{


    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public function deleteCategory($id)
    {
        $category = Category::find($id);
        $category->delete();
        session()->flash('message','Category has been deleted seccessfully!');
    }

    public function render()
    {
        $categories = Category::orderBy('name','ASC')->paginate(5);
        return view('livewire.admin.admin-categories-component',['categories'=>$categories])->layout('layouts.admin-app');
    }
}
