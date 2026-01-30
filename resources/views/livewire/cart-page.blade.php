<div>
    <div class="mx-auto w-full max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8">
        <div class="container mx-auto px-4">
            <h1 class="mb-4 text-2xl font-semibold">Shopping Cart</h1>
            <div class="flex flex-col gap-4 md:flex-row">
                <div class="md:w-3/4">
                    <div class="mb-4 overflow-x-auto rounded-lg bg-white p-6 shadow-md">
                        <table class="w-full">
                            <thead>
                                <tr>
                                    <th class="text-left font-semibold">Product</th>
                                    <th class="text-left font-semibold">Price</th>
                                    <th class="text-left font-semibold">Quantity</th>
                                    <th class="text-left font-semibold">Total</th>
                                    <th class="text-left font-semibold">Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($cart_items as $item)
                                    <tr wire:key='{{ $item['product_id'] }}'>
                                        <td class="py-4">
                                            <div class="flex items-center">
                                                <img class="mr-4 h-16 w-16" src="{{ url('storage', $item['image']) }}"
                                                    alt="Product image">
                                                <span class="font-semibold">{{ $item['name'] }}</span>
                                            </div>
                                        </td>
                                        <td class="py-4">{{ Number::currency($item['unit_amount'], 'USD') }}</td>
                                        <td class="py-4">
                                            <div class="flex items-center">
                                                <button wire:click="decrementQty({{ $item['product_id'] }})"
                                                    class="mr-2 rounded-md border px-4 py-2">-</button>
                                                <span class="w-8 text-center">{{ $item['quantity'] }}</span>
                                                <button wire:click="incrementQty({{ $item['product_id'] }})"
                                                    class="ml-2 rounded-md border px-4 py-2">+</button>
                                            </div>
                                        </td>
                                        <td class="py-4">{{ Number::currency($item['total_amount'], 'USD') }}</td>
                                        <td><button wire:click="removeItem({{ $item['product_id'] }})"
                                                class="rounded-lg border-2 border-slate-400 bg-slate-300 px-3 py-1 hover:border-red-700 hover:bg-red-500 hover:text-white">
                                                <span wire:loading.remove
                                                    wire:target="removeItem({{ $item['product_id'] }})">Remove</span><span
                                                    wire:loading
                                                    wire:target="removeItem({{ $item['product_id'] }})">Removing...</span>
                                            </button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="py-4 text-center">Your cart is empty.</td>
                                    </tr>
                                @endforelse

                                <!-- More product rows -->
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="md:w-1/4">
                    <div class="rounded-lg bg-white p-6 shadow-md">
                        <h2 class="mb-4 text-lg font-semibold">Summary</h2>
                        <div class="mb-2 flex justify-between">
                            <span>Subtotal</span>
                            <span>{{ Number::currency($grand_total, 'USD') }}</span>
                        </div>
                        <div class="mb-2 flex justify-between">
                            <span>Taxes</span>
                            <span>{{ Number::currency(0, 'USD') }}</span>
                        </div>
                        <div class="mb-2 flex justify-between">
                            <span>Shipping</span>
                            <span>{{ Number::currency(0, 'USD') }}</span>
                        </div>
                        <hr class="my-2">
                        <div class="mb-2 flex justify-between">
                            <span class="font-semibold">Grand Total</span>
                            <span class="font-semibold">{{ Number::currency($grand_total, 'USD') }}</span>
                        </div>
                        @if ($cart_items)
                            <a href="/checkout"
                                class="mt-4 block w-full rounded-lg bg-blue-500 px-4 py-2 text-center text-white">Checkout</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
