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
                                <tr>
                                    <td class="py-4">
                                        <div class="flex items-center">
                                            <img class="mr-4 h-16 w-16" src="https://via.placeholder.com/150"
                                                alt="Product image">
                                            <span class="font-semibold">Product name</span>
                                        </div>
                                    </td>
                                    <td class="py-4">$19.99</td>
                                    <td class="py-4">
                                        <div class="flex items-center">
                                            <button class="mr-2 rounded-md border px-4 py-2">-</button>
                                            <span class="w-8 text-center">1</span>
                                            <button class="ml-2 rounded-md border px-4 py-2">+</button>
                                        </div>
                                    </td>
                                    <td class="py-4">$19.99</td>
                                    <td><button
                                            class="rounded-lg border-2 border-slate-400 bg-slate-300 px-3 py-1 hover:border-red-700 hover:bg-red-500 hover:text-white">Remove</button>
                                    </td>
                                </tr>
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
                            <span>$19.99</span>
                        </div>
                        <div class="mb-2 flex justify-between">
                            <span>Taxes</span>
                            <span>$1.99</span>
                        </div>
                        <div class="mb-2 flex justify-between">
                            <span>Shipping</span>
                            <span>$0.00</span>
                        </div>
                        <hr class="my-2">
                        <div class="mb-2 flex justify-between">
                            <span class="font-semibold">Total</span>
                            <span class="font-semibold">$21.98</span>
                        </div>
                        <button class="mt-4 w-full rounded-lg bg-blue-500 px-4 py-2 text-white">Checkout</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
