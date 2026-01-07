<div>
    <div class="relative mx-auto h-screen w-full px-4 py-32 sm:px-6 lg:px-8">
        <img src="https://images.pexels.com/photos/27522197/pexels-photo-27522197.jpeg" alt="Image Description"
            class="absolute inset-0 z-0 h-full w-full object-cover object-center" />
        <div class="relative z-10 mx-auto max-w-[85rem] px-4 sm:px-6 lg:px-8">
            <div class="grid gap-4 md:grid-cols-2 md:items-center md:gap-8 xl:gap-20">
                <div>
                    <h1
                        class="block text-3xl font-bold text-gray-800 dark:text-white sm:text-4xl lg:text-6xl lg:leading-tight">
                        Start your journey with <span class="text-blue-600">{{ $title ?? 'Ecommerce' }}</span></h1>
                    <p class="mt-3 text-lg text-gray-800 dark:text-gray-400">Purchase wide varities of electronics
                        products like Smartphones, Laptops, Smartwatches, Television and many more.</p>
                    <div class="mt-7 grid w-full gap-3 sm:inline-flex">
                        <a class="inline-flex items-center justify-center gap-x-2 rounded-lg border border-transparent bg-blue-600 px-4 py-3 text-sm font-semibold text-white hover:bg-blue-700 disabled:pointer-events-none disabled:opacity-50 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                            href="/register">
                            Get started
                            <svg class="h-4 w-4 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="m9 18 6-6-6-6" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="absolute inset-0 z-0 bg-white/70 dark:bg-slate-900/70"></div>
    </div>
    <section class="py-20">
        <div class="mx-auto max-w-xl">
            <div class="text-center">
                <div class="relative flex flex-col items-center">
                    <h1 class="text-5xl font-bold dark:text-gray-200"> Browse Popular<span class="text-blue-500">
                            Brands
                        </span> </h1>
                    <div class="mb-6 mt-2 flex w-40 overflow-hidden rounded">
                        <div class="h-2 flex-1 bg-blue-200">
                        </div>
                        <div class="h-2 flex-1 bg-blue-400">
                        </div>
                        <div class="h-2 flex-1 bg-blue-600">
                        </div>
                    </div>
                </div>
                <p class="mb-12 text-center text-base text-gray-500">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus magni eius eaque?
                    Pariatur
                    numquam, odio quod nobis ipsum ex cupiditate?
                </p>
            </div>
        </div>
        <div class="mx-auto max-w-6xl justify-center px-4 py-4 lg:py-0">
            <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-4">
                @foreach ($brands as $brand)
                    <div class="rounded-lg bg-white shadow-md dark:bg-gray-800" wire:key="{{ $brand->id }}">
                        <a href="/products?selected_brands[0]={{ $brand->id }}" class="">
                            <img src="{{ url('storage', $brand->image) }}" alt="{{ $brand->name }}"
                                class="h-64 w-full rounded-t-lg object-cover">
                        </a>
                        <div class="p-5 text-center">
                            <a href=""
                                class="text-2xl font-bold tracking-tight text-gray-900 dark:text-gray-300">
                                {{ $brand->name }}
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <div class="bg-orange-200 py-20">
        <div class="mx-auto max-w-xl">
            <div class="text-center">
                <div class="relative flex flex-col items-center">
                    <h1 class="text-5xl font-bold dark:text-gray-200"> Browse <span class="text-blue-500"> Categories
                        </span> </h1>
                    <div class="mb-6 mt-2 flex w-40 overflow-hidden rounded">
                        <div class="h-2 flex-1 bg-blue-200">
                        </div>
                        <div class="h-2 flex-1 bg-blue-400">
                        </div>
                        <div class="h-2 flex-1 bg-blue-600">
                        </div>
                    </div>
                </div>
                <p class="mb-12 text-center text-base text-gray-500">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus magni eius eaque?
                    Pariatur
                    numquam, odio quod nobis ipsum ex cupiditate?
                </p>
            </div>
        </div>

        <div class="mx-auto max-w-[85rem] px-4 sm:px-6 lg:px-8">
            <div class="grid gap-3 sm:grid-cols-2 sm:gap-6 md:grid-cols-3 lg:grid-cols-4">

                @foreach ($categories as $category)
                    <a class="group flex flex-col rounded-xl border bg-white shadow-sm transition hover:shadow-md dark:border-gray-800 dark:bg-slate-900 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                        href="/products?selected_categories[0]={{ $category->id }}" wire:key="{{ $category->id }}">
                        <div class="p-4 md:p-5">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <img class="h-[2.375rem] w-[2.375rem] rounded-full"
                                        src="{{ url('storage', $category->image) }}" alt="{{ $category->name }}">
                                    <div class="ms-3">
                                        <h3
                                            class="font-semibold text-gray-800 group-hover:text-blue-600 dark:text-gray-200 dark:group-hover:text-gray-400">
                                            {{ $category->name }}
                                        </h3>
                                    </div>
                                </div>
                                <div class="ps-3">
                                    <svg class="h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m9 18 6-6-6-6" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>

</div>
