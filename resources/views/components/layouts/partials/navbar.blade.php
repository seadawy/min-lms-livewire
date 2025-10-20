<nav class="fixed w-full bg-white border-b border-gray-200 top-0">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="/" class="flex items-center space-x-2">
                    <div class="w-15 h-8 bg-gray-900 rounded-lg flex items-center justify-center">
                        <span class="text-white font-bold text-lg">LMS</span>
                    </div>
                </a>
            </div>

            <!-- Navigation Links -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="/" class="text-gray-900 hover:text-gray-600 transition-colors">Home</a>
                <a href="/courses" class="text-gray-900 hover:text-gray-600 transition-colors">Courses</a>
                <a href="/about" class="text-gray-900 hover:text-gray-600 transition-colors">About</a>
            </div>

            <!-- Auth Links -->
            <div class="flex items-center space-x-4">
                @auth
                    <a href="/dashboard" class="text-gray-900 hover:text-gray-600 transition-colors">Dashboard</a>
                    <form method="POST" action="/logout" class="inline">
                        @csrf
                        <button
                            type="submit"
                            class="px-4 py-2 bg-gray-900 text-white rounded-lg hover:bg-gray-700 transition-colors"
                        >
                            Logout
                        </button>
                    </form>
                @else
                    <a href="/login" class="text-gray-900 hover:text-gray-600 transition-colors">Login</a>
                    <a
                        href="/register"
                        class="px-4 py-2 bg-gray-900 text-white rounded-lg hover:bg-gray-700 transition-colors"
                    >
                        Register
                    </a>
                @endauth
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden">
                <button
                    type="button"
                    class="text-gray-900 hover:text-gray-600 transition-colors"
                    aria-label="Toggle menu"
                >
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"
                        ></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>
