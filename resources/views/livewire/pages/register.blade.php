<div class="flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8 pointed_background">
    <div class="max-w-md w-full space-y-8">
        <div>
            <h2 class="mt-6 text-center text-4xl font-bold text-gray-900">Create your account</h2>
        </div>
        <form wire:submit="register" class="mt-8 space-y-6 p-4 py-10 bg-gray-100 rounded-md shadow-sm">
            <div class="space-y-5">
                <div>
                    <x-form.input
                        label="Full name"
                        id="name"
                        wire:model="name"
                        type="text"
                        autocomplete="name"
                        class="appearance-none relative block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-gray-500 focus:border-gray-500 focus:z-10 sm:text-sm"
                        placeholder="Full name"
                    />
                    @error('name')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
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
                    @error('email')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <x-form.input
                        label="Password"
                        id="password"
                        wire:model="password"
                        type="password"
                        autocomplete="new-password"
                        class="appearance-none relative block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-gray-500 focus:border-gray-500 focus:z-10 sm:text-sm"
                        placeholder="Password"
                    />
                    @error('password')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <x-form.input
                        label="Confirm password"
                        id="password_confirmation"
                        wire:model="password_confirmation"
                        type="password"
                        autocomplete="new-password"
                        class="appearance-none relative block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-gray-500 focus:border-gray-500 focus:z-10 sm:text-sm"
                        placeholder="Confirm password"
                    />
                    @error('password_confirmation')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div>
                <button
                    type="submit"
                    class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-gray-900 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500"
                >
                    Create account
                </button>
            </div>
        </form>
    </div>
</div>
