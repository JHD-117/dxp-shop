<div>
    <div class="mx-auto w-full max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8">
        <h1 class="text-4xl font-bold text-slate-500">My Orders</h1>
        <div class="mt-4 flex flex-col rounded bg-white p-5 shadow-lg">
            <div class="-m-1.5 overflow-x-auto">
                <div class="inline-block min-w-full p-1.5 align-middle">
                    <div class="overflow-hidden">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead>
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500">Order
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500">Date
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500">Order
                                        Status</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500">Payment
                                        Status</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500">Order
                                        Amount</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-end text-xs font-medium uppercase text-gray-500">Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                    @php
                                        $status = '';
                                        $payment_status = '';
                                        if ($order->status == 'new') {
                                            $status =
                                                '<span class="rounded bg-blue-500 px-3 py-1 text-white shadow">New</span>';
                                        }
                                        if ($order->status == 'processing') {
                                            $status =
                                                '<span class="rounded bg-yellow-500 px-3 py-1 text-white shadow">Processing</span>';
                                        }
                                        if ($order->status == 'shipped') {
                                            $status =
                                                '<span class="rounded bg-green-500 px-3 py-1 text-white shadow">Shipped</span>';
                                        }
                                        if ($order->status == 'delivered') {
                                            $status =
                                                '<span class="rounded bg-green-700 px-3 py-1 text-white shadow">Delivered</span>';
                                        }
                                        if ($order->status == 'canceled') {
                                            $status =
                                                '<span class="rounded bg-red-500 px-3 py-1 text-white shadow">Cancelled</span>';
                                        }

                                        if ($order->payment_status == 'paid') {
                                            $payment_status =
                                                '<span class="rounded bg-green-500 px-3 py-1 text-white shadow">Paid</span>';
                                        }
                                        if ($order->payment_status == 'failed') {
                                            $payment_status =
                                                '<span class="rounded bg-red-500 px-3 py-1 text-white shadow">Failed</span>';
                                        }
                                        if ($order->payment_status == 'pending') {
                                            $payment_status =
                                                '<span class="rounded bg-yellow-500 px-3 py-1 text-white shadow">Pending</span>';
                                        }
                                    @endphp
                                    <tr class="odd:bg-white even:bg-gray-100 dark:odd:bg-slate-900 dark:even:bg-slate-800"
                                        wire:key="{{ $order->id }}">
                                        <td
                                            class="whitespace-nowrap px-6 py-4 text-sm font-medium text-gray-800 dark:text-gray-200">
                                            {{ $order->id }}</td>
                                        <td
                                            class="whitespace-nowrap px-6 py-4 text-sm text-gray-800 dark:text-gray-200">
                                            {{ $order->created_at->format('d-m-Y') }}</td>
                                        <td
                                            class="whitespace-nowrap px-6 py-4 text-sm text-gray-800 dark:text-gray-200">
                                            {!! $status !!}
                                        </td>
                                        <td
                                            class="whitespace-nowrap px-6 py-4 text-sm text-gray-800 dark:text-gray-200">
                                            {!! $payment_status !!}
                                        </td>
                                        <td
                                            class="whitespace-nowrap px-6 py-4 text-sm text-gray-800 dark:text-gray-200">
                                            {{ Number::currency($order->grand_total) }}</td>
                                        <td class="whitespace-nowrap px-6 py-4 text-end text-sm font-medium">
                                            <a href="/my-orders/{{ $order->id }}"
                                                class="rounded-md bg-slate-600 px-4 py-2 text-white hover:bg-slate-500">View
                                                Details</a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
                {{ $orders->links() }}
            </div>
        </div>
    </div>
</div>
