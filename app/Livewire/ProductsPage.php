<?php

namespace App\Livewire;

use App\Livewire\Partials\Navbar;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\WithPagination;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Category;
use Livewire\Attributes\Url;
use App\Helpers\CartMangement;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;

#[Title('Products - Ecommerce')]
class ProductsPage extends Component
{
    // use LivewireAlert;
    use WithPagination;

    #[Url]
    public $selected_categories = [];
    
    #[Url]
    public $selected_brands = [];
    
    #[Url]
    public $featured, $on_sale;
    
    #[Url]
    public $price_range = 500000; 

    #[Url]
    public $sort = 'latest'; 

    public function addToCart($product_id){
        $total_count = CartMangement::addItemToCart($product_id);
        $this->dispatch('update-cart-count', total_count: $total_count)->to(Navbar::class);
        LivewireAlert::title('Product added to cart successfully!')->success()->toast()->position('bottom-end')->timer(3000)->show();
     }
    
    public function render()
    {
        $productQuery = Product::where('is_active', 1);    
        if(!empty($this->selected_categories)){
            $productQuery->whereIn('category_id', $this->selected_categories);
        }
        if(!empty($this->selected_brands)){
            $productQuery->whereIn('brand_id', $this->selected_brands);
        }
        if($this->featured){
            $productQuery->where('is_featured', 1);
        }
        if($this->on_sale){
            $productQuery->where('on_sale', 1);
        }
        if($this->price_range){
            $productQuery->whereBetween('price', [0, $this->price_range]);
        }
        if($this->sort == 'latest'){
            $productQuery->latest();
        }
        if($this->sort == 'price'){
            $productQuery->orderBy('price');
        }

        return view('livewire.products-page', [
            'products' => $productQuery->paginate(6),
            'brands' => Brand::where('is_active', 1)->get(['id', 'name', 'slug']),
            'categories' => Category::where('is_active', 1)->get(['id', 'name', 'slug'])
        ]);
    }
}