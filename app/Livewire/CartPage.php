<?php

namespace App\Livewire;

use Livewire\Component;
use App\Helpers\CartMangement;

#[Title('Cart - Ecommerce')]
class CartPage extends Component
{
    public $cart_items = [];
    public $grand_total = 0;

    public function mount(){
        $this->cart_items = CartMangement::getCartItemsFromCookie();
        $this->grand_total = CartMangement::calculateGrandTotal($this->cart_items);
    }

    public function render()
    {
        return view('livewire.cart-page');
    }

    public function removeItem($product_id){
        CartMangement::removeCartItem($product_id);
        $this->cart_items = CartMangement::getCartItemsFromCookie();
        $this->grand_total = CartMangement::calculateGrandTotal($this->cart_items);
        $this->dispatch('update-cart-count', total_count: count($this->cart_items))->to(Navbar::class);
    }

    public function incrementQty($product_id){
    $this->cart_items = CartMangement::incrementQuantityToCartItem($product_id);
        $this->grand_total = CartMangement::calculateGrandTotal($this->cart_items);
    }

    public function decrementQty($product_id){
        $this->cart_items = CartMangement::decrementQuantityToCartItem($product_id);
        $this->grand_total = CartMangement::calculateGrandTotal($this->cart_items);
    }
}
