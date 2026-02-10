<?php

namespace App\Livewire;

use App\Models\Order;
use App\Models\OrderItem;
use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\Address;

#[Title('My Order Detail')]
class MyOrderDetailPage extends Component
{
    public Order $order;

    public function mount(Order $order)
    {
        $this->order = $order;
    }

    public function render()
    {
        if ($this->order->user_id !== auth()->id()) {
            abort(403, 'No tienes permiso para ver este pedido');
        }

        $order_items = OrderItem::with('product')->where('order_id', $this->order->id)->get();
        $address = Address::where('order_id', $this->order->id)->first();

        return view('livewire.my-order-detail-page', [
            'order_items' => $order_items,
            'address' => $address,
            'order' => $this->order,
        ]);
    }
}