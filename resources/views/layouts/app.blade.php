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

    <!-- GSAP for animations -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

    <!-- Custom styles -->
    <style>
        .nav-link {
            position: relative;
            padding: 0.5rem 0;
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: white;
            transition: width 0.3s ease;
        }
        
        .nav-link:hover::after {
            width: 100%;
        }
        
        .scroll-reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease;
        }
        
        .scroll-reveal.active {
            opacity: 1;
            transform: translateY(0);
        }
        
        .image-hover {
            transition: transform 0.5s ease, box-shadow 0.5s ease;
        }
        
        .image-hover:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        
        .cursor-follower {
            position: fixed;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(138, 43, 226, 0.15);
            pointer-events: none;
            z-index: 9999;
            mix-blend-mode: difference;
            transition: all 0.1s ease;
            display: none;
            top: 0;
            left: 0;
            transform: translate(-50%, -50%);
        }
        
        @media (min-width: 768px) {
            .cursor-follower {
                display: block;
            }
        }
    </style>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Page specific styles -->
    @yield('styles')
</head>
<body class="font-sans antialiased">
    <!-- Progress Bar -->
    <div class="progress-bar" id="scrollProgressBar"></div>
    
    <div class="cursor-follower"></div>
    
    <div class="min-h-screen bg-gray-100">
        <!-- Navigation -->
        <nav class="sticky top-0 bg-purple-700 text-white p-4 shadow-md z-10">
            <div class="container mx-auto flex flex-col md:flex-row items-center justify-between">
                <div class="flex items-center">
                    <img src="{{ asset('images/logo.png') }}" alt="Seraphxx Logo" class="w-8 h-8 rounded-full object-cover mr-2 hover:scale-110 transition-all duration-300">
                    <div class="text-xl font-bold">Seraphxx</div>
                </div>
                <div class="space-x-6">
                    <a href="{{ route('home') }}" class="nav-link hover:text-purple-200 transition">Home</a>
                    <a href="{{ route('about') }}" class="nav-link hover:text-purple-200 transition">About Me</a>
                    <a href="{{ route('commissions') }}" class="nav-link hover:text-purple-200 transition">Commissions</a>
                    <a href="{{ route('portfolio') }}" class="nav-link hover:text-purple-200 transition">Portfolio</a>
                    <a href="{{ route('contact') }}" class="nav-link hover:text-purple-200 transition">Contact</a>
                </div>
            </div>
        </nav>

        <!-- Page Content -->
        <main>
            @yield('content')
        </main>

        <!-- Footer -->
        <footer class="bg-gray-800 text-white p-6">
            <div class="container mx-auto text-center">
                <p>© {{ date('Y') }} Seraphxx. All rights reserved.</p>
                <div class="mt-2">
                    <a href="https://ngl.link/seraphxx" class="text-purple-200 hover:text-white transition mr-4">ngl.link</a>
                    <!-- Add social media links here -->
                </div>
            </div>
        </footer>
    </div>

    <script>
        // Custom cursor follower - simplified to avoid cross-origin issues
        document.addEventListener('DOMContentLoaded', function() {
            try {
                // Scroll progress bar
                const progressBar = document.getElementById('scrollProgressBar');
                
                function updateScrollProgress() {
                    const scrollHeight = document.documentElement.scrollHeight - window.innerHeight;
                    const scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
                    const scrollPercentage = (scrollTop / scrollHeight) * 100;
                    
                    progressBar.style.height = scrollPercentage + '%';
                    
                    // Add a glow effect when scrolling
                    progressBar.style.boxShadow = `0 0 ${10 + scrollPercentage/10}px rgba(255, 140, 0, ${0.3 + scrollPercentage/200})`;
                }
                
                window.addEventListener('scroll', updateScrollProgress);
                updateScrollProgress(); // Initialize on page load
                
                const cursor = document.querySelector('.cursor-follower');
                
                if (cursor) {
                    document.addEventListener('mousemove', function(e) {
                        requestAnimationFrame(function() {
                            cursor.style.left = e.clientX + 'px';
                            cursor.style.top = e.clientY + 'px';
                        });
                    });
                    
                    // Add subtle animation to cursor on hover over links
                    const links = document.querySelectorAll('a, button');
                    links.forEach(function(link) {
                        link.addEventListener('mouseenter', function() {
                            cursor.style.transform = 'translate(-50%, -50%) scale(1.5)';
                            cursor.style.opacity = '0.5';
                        });
                        
                        link.addEventListener('mouseleave', function() {
                            cursor.style.transform = 'translate(-50%, -50%) scale(1)';
                            cursor.style.opacity = '1';
                        });
                    });
                }
                
                // Initialize GSAP animations if available
                if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
                    // Register ScrollTrigger plugin
                    gsap.registerPlugin(ScrollTrigger);
                    
                    // Simple animation for navigation
                    gsap.from('nav', {
                        y: -100,
                        opacity: 0,
                        duration: 1,
                        ease: 'power3.out'
                    });
                }
                
                // Scroll reveal effect - simplified
                const revealElements = document.querySelectorAll('.scroll-reveal');
                
                function checkReveal() {
                    revealElements.forEach(function(element) {
                        const elementTop = element.getBoundingClientRect().top;
                        const windowHeight = window.innerHeight;
                        
                        if (elementTop < windowHeight - 100) {
                            element.classList.add('active');
                        }
                    });
                }
                
                window.addEventListener('scroll', checkReveal);
                checkReveal(); // Check on load
            } catch (error) {
                console.log("Animation error:", error);
            }
        });
    </script>
    
    <!-- Page specific scripts -->
    @yield('scripts')
</body>
</html> 