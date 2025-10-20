<div class="flex items-center h-[90vh] justify-center py-12 px-4 sm:px-6 lg:px-8 pointed_background">
    <div class="max-w-md w-full space-y-8">
        <div>
            <h2 class="mt-6 text-center text-3xl font-bold text-gray-900">Sign in to your account</h2>
        </div>
        <form wire:submit="login" class="mt-8 space-y-6 p-4 py-10 bg-gray-100 rounded-md shadow-sm">
            <div class="space-y-5">
                <div>
                    <x-form.input
                    label="Email address"
                        id="email"
                        wire:model="email"
                        type="email"
                        autocomplete="email"
                        class="appearance-none relative block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-gray-500 focus:border-gray-500 focus:z-10 sm:text-sm"
                        placeholder="Email address"
                    />
                </div>
                <div>
                    <x-form.input
                    label="Password"
                        id="password"
                        wire:model="password"
                        type="password"
                        autocomplete="current-password"
                        class="appearance-none relative block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-gray-500 focus:border-gray-500 focus:z-10 sm:text-sm"
                        placeholder="Password"
                    />
                </div>
            </div>

            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <x-form.input
                        id="remember"
                        wire:model="remember"
                        label=""
                        type="checkbox"
                        class="h-4 w-4 text-gray-900 focus:ring-gray-500 border-gray-300 rounded"
                    />
                    <x-form.label for="remember" class="ml-2 block text-sm text-gray-900">Remember me</x-form.label>
                </div>

                <div class="text-sm">
                    <a href="#" class="font-medium text-gray-900 hover:text-gray-700">Forgot your password?</a>
                </div>
            </div>

            <div>
                <button
                    type="submit"
                    class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-gray-900 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500"
                >
                    Sign in
                </button>
            </div>
        </form>
    </div>
</div>
