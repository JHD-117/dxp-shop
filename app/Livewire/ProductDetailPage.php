<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\Product;
use App\Helpers\CartMangement;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;
use App\Livewire\Partials\Navbar;

#[Title('Product Detail - Ecommerce')]
class ProductDetailPage extends Component
{
    public $slug;
    public $quantity = 1;

    public function mount($slug)
    {
        $this->slug = $slug;
    }

    public function incrementQty()
    {
        $this->quantity++;
    }

    public function decrementQty()
    {
        if ($this->quantity > 1) {
            $this->quantity--;
        }
    }

    public function addToCart($product_id){
        $total_count = CartMangement::addItemToCart($product_id);
        $this->dispatch('update-cart-count', total_count: $total_count)->to(Navbar::class);
        LivewireAlert::title('Product added to cart successfully!')->success()->toast()->position('bottom-end')->timer(3000)->show();
     }
    
    public function render()
    {
        return view('livewire.product-detail-page', [
            'product' => Product::where('slug', $this->slug)->where('is_active', 1)->firstOrFail()
        ]);
    }
}
