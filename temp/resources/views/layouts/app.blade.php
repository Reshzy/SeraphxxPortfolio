<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Seraphxx Portfolio') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        <!-- Navigation -->
        <nav class="sticky top-0 bg-purple-700 text-white p-4 shadow-md z-10">
            <div class="container mx-auto flex flex-col md:flex-row items-center justify-between">
                <div class="text-xl font-bold mb-2 md:mb-0">Seraphxx</div>
                <div class="space-x-4">
                    <a href="/" class="hover:text-purple-200 transition">Home</a>
                    <a href="#about" class="hover:text-purple-200 transition">About Me</a>
                    <a href="/commissions" class="hover:text-purple-200 transition">Commissions</a>
                    <a href="/portfolio" class="hover:text-purple-200 transition">Portfolio</a>
                    <a href="/contact" class="hover:text-purple-200 transition">Contact</a>
                </div>
            </div>
        </nav>

        <!-- Page Content -->
        <main>
            @yield('content')
        </main>

        <!-- Footer -->
        <footer class="bg-purple-800 text-white p-6">
            <div class="container mx-auto text-center">
                <p>© {{ date('Y') }} Seraphxx. All rights reserved.</p>
                <div class="mt-2">
                    <a href="https://ngl.link/seraphxx" class="text-purple-200 hover:text-white transition mr-4">ngl.link</a>
                    <!-- Add social media links here -->
                </div>
            </div>
        </footer>
    </div>
</body>
</html> 