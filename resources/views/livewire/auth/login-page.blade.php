<div>
    <div class="mx-auto w-full max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8">
        <div class="flex h-full items-center">
            <main class="mx-auto w-full max-w-md p-6">
                <div class="rounded-xl border border-gray-200 bg-white shadow-sm dark:border-gray-700 dark:bg-gray-800">
                    <div class="p-4 sm:p-7">
                        <div class="text-center">
                            <h1 class="block text-2xl font-bold text-gray-800 dark:text-white">Sign in</h1>
                            <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                                Don't have an account yet?
                                <a wire:navigate
                                    class="font-medium text-blue-600 decoration-2 hover:underline dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                    href="/register">
                                    Sign up here
                                </a>
                            </p>
                        </div>

                        <hr class="my-5 border-slate-300">

                        <!-- Form -->
                        <form wire:submit="save">
                            @if (session('error'))
                                <div class="mb-4 rounded-lg bg-red-500 p-4 text-sm text-white" role="alert">
                                    {{ session('error') }}
                                </div>q
                            @endif
                            <div class="grid gap-y-4">
                                <!-- Form Group -->
                                <div>
                                    <label for="email" class="mb-2 block text-sm dark:text-white">Email
                                        address</label>
                                    <div class="relative">
                                        <input type="email" id="email" wire:model="email"
                                            class="block w-full rounded-lg border border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-slate-900 dark:text-gray-400 dark:focus:ring-gray-600"
                                            aria-describedby="email-error">
                                        @error('email')
                                            <div
                                                class="pointer-events-none absolute inset-y-0 end-0 flex items-center pe-3">
                                                <svg class="h-5 w-5 text-red-500" width="16" height="16"
                                                    fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                                                    <path
                                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                                </svg>
                                            </div>
                                        @enderror
                                    </div>
                                    @error('email')
                                        <p class="mt-2 text-xs text-red-600" id="email-error">{{ $message }}</p>
                                    @enderror
                                </div>
                                <!-- End Form Group -->

                                <!-- Form Group -->
                                <div>
                                    <div class="flex items-center justify-between">
                                        <label for="password"
                                            class="mb-2 block text-sm dark:text-white">Password</label>
                                        <a wire:navigate
                                            class="text-sm font-medium text-blue-600 decoration-2 hover:underline dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                            href="/forgot">Forgot password?</a>
                                    </div>
                                    <div class="relative">
                                        <input type="password" id="password" wire:model="password"
                                            class="block w-full rounded-lg border border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-700 dark:bg-slate-900 dark:text-gray-400 dark:focus:ring-gray-600"
                                            aria-describedby="password-error">
                                        @error('password')
                                            <div
                                                class="pointer-events-none absolute inset-y-0 end-0 flex items-center pe-3">
                                                <svg class="h-5 w-5 text-red-500" width="16" height="16"
                                                    fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                                                    <path
                                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                                </svg>
                                            </div>
                                        @enderror
                                    </div>
                                    @error('password')
                                        <p class="mt-2 text-xs text-red-600" id="password-error">{{ $message }}</p>
                                    @enderror
                                </div>
                                <!-- End Form Group -->
                                <button type="submit"
                                    class="inline-flex w-full items-center justify-center gap-x-2 rounded-lg border border-transparent bg-blue-600 px-4 py-3 text-sm font-semibold text-white hover:bg-blue-700 disabled:pointer-events-none disabled:opacity-50 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">Sign
                                    in</button>
                            </div>
                        </form>
                        <!-- End Form -->
                    </div>
                </div>
        </div>
    </div>
</div>
