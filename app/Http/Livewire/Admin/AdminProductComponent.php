<?php

namespace App\Http\Livewire\Admin;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
class AdminProductComponent extends Component
{

    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public function deleteProduct($id)
    {
        $product = Product::find($id);
        unlink('assets/imgs/products/'.$product->image);
        $product->delete();
        session()->flash('message','Product has been deleted seccessfully!');
    }
    public function render()
    {
        $products = Product::orderBy('created_at','DESC')->paginate(10);
        return view('livewire.admin.admin-product-component',['products'=>$products])->layout('layouts.admin-app');
    }
}
