<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\WithPagination;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Category;

#[Title('Products - Ecommerce')]
class ProductsPage extends Component
{
    use WithPagination;
    
    public function render()
    {
        return view('livewire.products-page',[
            'products' => Product::where('is_active', 1)->paginate(6),
            'brands' => Brand::where('is_active', 1)->get(['id', 'name', 'slug']),
            'categories' => Category::where('is_active', 1)->get(['id', 'name', 'slug'])
        ]);
    }
}
