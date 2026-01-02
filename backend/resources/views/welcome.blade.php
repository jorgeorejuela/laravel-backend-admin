<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel Admin') }}</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-100 font-sans">
        <div class="relative min-h-screen flex flex-col justify-center items-center selection:bg-indigo-500 selection:text-white">
            
            <!-- Navbar -->
            @if (Route::has('login'))
                <div class="absolute top-0 right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-indigo-600 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-indigo-500 transition-colors">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-indigo-600 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-indigo-500 transition-colors">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-indigo-600 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-indigo-500 transition-colors">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <!-- Hero Section -->
            <div class="max-w-7xl mx-auto p-6 lg:p-8 w-full text-center">
                <div class="flex justify-center mb-8">
                   <div class="p-4 bg-white dark:bg-gray-800 rounded-full shadow-xl">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-16 w-16 text-indigo-600 dark:text-indigo-400">
                            <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                        </svg>
                   </div>
                </div>

                <h1 class="text-5xl font-extrabold tracking-tight text-gray-900 dark:text-white sm:text-6xl mb-4">
                    <span class="block text-indigo-600 dark:text-indigo-400">Laravel Admin</span>
                    <span class="block text-3xl sm:text-4xl mt-2 font-medium text-gray-600 dark:text-gray-300">Modern Management System</span>
                </h1>

                <p class="mt-6 text-lg leading-8 text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
                    A robust, secure, and scalable administration panel built with Laravel, featuring role-based access control, user management, and internal API integration.
                </p>

                <div class="mt-10 flex items-center justify-center gap-x-6">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="rounded-md bg-indigo-600 px-6 py-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 transition-all transform hover:scale-105">
                            Go to Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="rounded-md bg-indigo-600 px-6 py-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 transition-all transform hover:scale-105">
                            Get Started
                        </a>
                        <a href="{{ route('register') }}" class="text-sm font-semibold leading-6 text-gray-900 dark:text-white hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">
                            Create Account <span aria-hidden="true">→</span>
                        </a>
                    @endauth
                </div>
            </div>

            <!-- Features Grid -->
            <div class="mt-16 max-w-7xl mx-auto px-6 lg:px-8 pb-16">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Feature 1 -->
                    <div class="p-6 bg-white dark:bg-gray-800 rounded-2xl shadow-md border border-gray-100 dark:border-gray-700 hover:shadow-lg transition-shadow">
                        <div class="w-10 h-10 rounded-lg bg-indigo-100 dark:bg-indigo-900/50 flex items-center justify-center mb-4 text-indigo-600 dark:text-indigo-400">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">User Management</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">Full CRUD capabilities for managing system users with role-based permissions.</p>
                    </div>

                    <!-- Feature 2 -->
                    <div class="p-6 bg-white dark:bg-gray-800 rounded-2xl shadow-md border border-gray-100 dark:border-gray-700 hover:shadow-lg transition-shadow">
                        <div class="w-10 h-10 rounded-lg bg-indigo-100 dark:bg-indigo-900/50 flex items-center justify-center mb-4 text-indigo-600 dark:text-indigo-400">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Secure API</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">Protected internal API endpoints using Laravel Sanctum for secure data consumption.</p>
                    </div>

                    <!-- Feature 3 -->
                    <div class="p-6 bg-white dark:bg-gray-800 rounded-2xl shadow-md border border-gray-100 dark:border-gray-700 hover:shadow-lg transition-shadow">
                        <div class="w-10 h-10 rounded-lg bg-indigo-100 dark:bg-indigo-900/50 flex items-center justify-center mb-4 text-indigo-600 dark:text-indigo-400">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Fast Performance</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">Optimized backend with modern frontend stack using Tailwind CSS.</p>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <div class="text-center text-sm text-gray-500 dark:text-gray-400 py-6">
                Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
            </div>
        </div>
    </body>
</html>