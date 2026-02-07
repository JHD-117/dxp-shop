<div>
    <div class="mx-auto w-full max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8">
        <h1 class="mb-4 text-2xl font-bold text-gray-800 dark:text-white">
            Checkout
        </h1>
        <form wire:submit="placeOrder">
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-12 md:col-span-12 lg:col-span-8">
                    <!-- Card -->
                    <div class="rounded-xl bg-white p-4 shadow dark:bg-slate-900 sm:p-7">
                        <!-- Shipping Address -->
                        <div class="mb-6">
                            <h2 class="mb-2 text-xl font-bold text-gray-700 underline dark:text-white">
                                Shipping Address
                            </h2>
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label class="mb-1 block text-gray-700 dark:text-white" for="first_name">
                                        First Name
                                    </label>
                                    <input wire:model="first_name"
                                        class="@error('first_name') border-red-500 @enderror w-full rounded-lg border px-3 py-2 dark:border-none dark:bg-gray-700 dark:text-white"
                                        id="first_name" type="text">
                                    </input>
                                    @error('first_name')
                                        <span class="text-sm text-red-500">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <div>
                                    <label class="mb-1 block text-gray-700 dark:text-white" for="last_name">
                                        Last Name
                                    </label>
                                    <input wire:model="last_name"
                                        class="@error('last_name') border-red-500 @enderror w-full rounded-lg border px-3 py-2 dark:border-none dark:bg-gray-700 dark:text-white"
                                        id="last_name" type="text">
                                    </input>
                                    @error('last_name')
                                        <span class="text-sm text-red-500">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mt-4">
                                <label class="mb-1 block text-gray-700 dark:text-white" for="phone">
                                    Phone
                                </label>
                                <input wire:model="phone"
                                    class="@error('phone') border-red-500 @enderror w-full rounded-lg border px-3 py-2 dark:border-none dark:bg-gray-700 dark:text-white"
                                    id="phone" type="text">
                                </input>
                                @error('phone')
                                    <span class="text-sm text-red-500">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="mt-4">
                                <label class="mb-1 block text-gray-700 dark:text-white" for="address">
                                    Address
                                </label>
                                <input wire:model="street_address"
                                    class="@error('street_address') border-red-500 @enderror w-full rounded-lg border px-3 py-2 dark:border-none dark:bg-gray-700 dark:text-white"
                                    id="address" type="text">
                                </input>
                                @error('street_address')
                                    <span class="text-sm text-red-500">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="mt-4">
                                <label class="mb-1 block text-gray-700 dark:text-white" for="city">
                                    City
                                </label>
                                <input wire:model="city"
                                    class="@error('city') border-red-500 @enderror w-full rounded-lg border px-3 py-2 dark:border-none dark:bg-gray-700 dark:text-white"
                                    id="city" type="text">
                                </input>
                                @error('city')
                                    <span class="text-sm text-red-500">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="mt-4 grid grid-cols-2 gap-4">
                                <div>
                                    <label class="mb-1 block text-gray-700 dark:text-white" for="state">
                                        State
                                    </label>
                                    <input wire:model="state"
                                        class="@error('state') border-red-500 @enderror w-full rounded-lg border px-3 py-2 dark:border-none dark:bg-gray-700 dark:text-white"
                                        id="state" type="text">
                                    </input>
                                    @error('state')
                                        <span class="text-sm text-red-500">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <div>
                                    <label class="mb-1 block text-gray-700 dark:text-white" for="zip">
                                        ZIP Code
                                    </label>
                                    <input wire:model="zip_code"
                                        class="@error('zip_code') border-red-500 @enderror w-full rounded-lg border px-3 py-2 dark:border-none dark:bg-gray-700 dark:text-white"
                                        id="zip" type="text">
                                    </input>
                                    @error('zip_code')
                                        <span class="text-sm text-red-500">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="mb-4 text-lg font-semibold">
                            Select Payment Method
                        </div>
                        <ul class="grid w-full gap-6 md:grid-cols-2">
                            <li>
                                <input wire:model="payment_method" class="peer hidden" id="hosting-small" required=""
                                    type="radio" value="cod" />
                                <label
                                    class="inline-flex w-full cursor-pointer items-center justify-between rounded-lg border border-gray-200 bg-white p-5 text-gray-500 hover:bg-gray-100 hover:text-gray-600 peer-checked:border-blue-600 peer-checked:text-blue-600 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:peer-checked:text-blue-500"
                                    for="hosting-small">
                                    <div class="block">
                                        <div class="w-full text-lg font-semibold">
                                            Cash on Delivery
                                        </div>
                                    </div>
                                    <svg aria-hidden="true" class="ms-3 h-5 w-5 rtl:rotate-180" fill="none"
                                        viewbox="0 0 14 10" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 5h12m0 0L9 1m4 4L9 9" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2">
                                        </path>
                                    </svg>
                                </label>
                            </li>
                            <li>
                                <input wire:model="payment_method" class="peer hidden" id="hosting-big" type="radio"
                                    value="stripe">
                                <label
                                    class="inline-flex w-full cursor-pointer items-center justify-between rounded-lg border border-gray-200 bg-white p-5 text-gray-500 hover:bg-gray-100 hover:text-gray-600 peer-checked:border-blue-600 peer-checked:text-blue-600 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:peer-checked:text-blue-500"
                                    for="hosting-big">
                                    <div class="block">
                                        <div class="w-full text-lg font-semibold">
                                            Stripe
                                        </div>
                                    </div>
                                    <svg aria-hidden="true" class="ms-3 h-5 w-5 rtl:rotate-180" fill="none"
                                        viewbox="0 0 14 10" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 5h12m0 0L9 1m4 4L9 9" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2">
                                        </path>
                                    </svg>
                                </label>
                                </input>
                            </li>
                        </ul>
                        @error('payment_method')
                            <span class="text-sm text-red-500">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <!-- End Card -->
                </div>
                <div class="col-span-12 md:col-span-12 lg:col-span-4">
                    <div class="rounded-xl bg-white p-4 shadow dark:bg-slate-900 sm:p-7">
                        <div class="mb-2 text-xl font-bold text-gray-700 underline dark:text-white">
                            ORDER SUMMARY
                        </div>
                        <div class="mb-2 flex justify-between font-bold">
                            <span>
                                Subtotal
                            </span>
                            <span>
                                {{ Number::currency($grand_total) }}
                            </span>
                        </div>
                        <div class="mb-2 flex justify-between font-bold">
                            <span>
                                Taxes
                            </span>
                            <span>
                                {{ Number::currency(0) }}
                            </span>
                        </div>
                        <div class="mb-2 flex justify-between font-bold">
                            <span>
                                Shipping Cost
                            </span>
                            <span>
                                {{ Number::currency(0) }}
                            </span>
                        </div>
                        <hr class="my-4 h-1 rounded bg-slate-400">
                        <div class="mb-2 flex justify-between font-bold">
                            <span>
                                Grand Total
                            </span>
                            <span>
                                {{ Number::currency($grand_total) }}
                            </span>
                        </div>
                        </hr>
                    </div>
                    <button type="submit"
                        class="mt-4 w-full rounded-lg bg-green-500 p-3 text-lg text-white hover:bg-green-600">
                        Place Order
                    </button>
                    <div class="mt-4 rounded-xl bg-white p-4 shadow dark:bg-slate-900 sm:p-7">
                        <div class="mb-2 text-xl font-bold text-gray-700 underline dark:text-white">
                            BASKET SUMMARY
                        </div>
                        <ul class="divide-y divide-gray-200 dark:divide-gray-700" role="list">
                            @foreach ($cart_items as $item)
                                <li class="py-3 sm:py-4">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0">
                                            <img alt="{{ $item['name'] }}" class="h-12 w-12 rounded-full"
                                                src="{{ url('storage', $item['image']) }}">
                                            </img>
                                        </div>
                                        <div class="ms-4 min-w-0 flex-1">
                                            <p class="truncate text-sm font-medium text-gray-900 dark:text-white">
                                                {{ $item['name'] }}
                                            </p>
                                            <p class="truncate text-sm text-gray-500 dark:text-gray-400">
                                                Quantity: {{ $item['quantity'] }}
                                            </p>
                                        </div>
                                        <div
                                            class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                            {{ Number::currency($item['total_amount']) }}
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
