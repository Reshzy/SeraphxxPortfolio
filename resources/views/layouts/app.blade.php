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

        /* Modern mobile menu */
        .mobile-menu-btn {
            display: none;
            flex-direction: column;
            justify-content: space-around;
            width: 2rem;
            height: 2rem;
            background: transparent;
            border: none;
            cursor: pointer;
            padding: 0;
            z-index: 10;
        }

        .mobile-menu-btn:focus {
            outline: none;
        }

        .menu-line {
            width: 2rem;
            height: 0.25rem;
            background-color: white;
            border-radius: 10px;
            transition: all 0.3s linear;
            position: relative;
            transform-origin: 1px;
        }

        .mobile-menu {
            position: fixed;
            top: 0;
            right: -100%;
            width: 100%;
            height: 100vh;
            background: rgba(91, 33, 182, 0.98);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            transition: right 0.3s ease-in-out;
            z-index: 1001;
            backdrop-filter: blur(10px);
        }

        .mobile-menu.open {
            right: 0;
        }

        .mobile-menu a {
            margin: 1.5rem 0;
            font-size: 1.5rem;
            text-align: center;
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease, transform 0.6s ease;
            transition-delay: calc(var(--i) * 0.1s);
        }

        .mobile-menu.open a {
            opacity: 1;
            transform: translateY(0);
        }

        /* Mobile menu button animation */
        .mobile-menu-btn.open .menu-line:first-child {
            transform: rotate(45deg);
        }

        .mobile-menu-btn.open .menu-line:nth-child(2) {
            opacity: 0;
        }

        .mobile-menu-btn.open .menu-line:nth-child(3) {
            transform: rotate(-45deg);
        }

        @media (max-width: 768px) {
            .desktop-menu {
                display: none;
            }

            .mobile-menu-btn {
                display: flex;
            }
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

        /* Custom cursor styles */
        .custom-cursor {
            pointer-events: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: rgba(147, 51, 234, 0.3);
            mix-blend-mode: difference;
            transform: translate(-50%, -50%);
            transition: width 0.2s, height 0.2s, background-color 0.2s, transform 0.1s;
            z-index: 9999;
            display: none;
        }
        
        .cursor-dot {
            position: fixed;
            top: 0;
            left: 0;
            width: 4px;
            height: 4px;
            border-radius: 50%;
            background-color: #9333ea;
            transform: translate(-50%, -50%);
            pointer-events: none;
            z-index: 10000;
            transition: transform 0.1s;
            display: none;
        }
        
        a, button {
            cursor: none;
        }
        
        @media (min-width: 768px) {
            .custom-cursor, .cursor-dot {
                display: block;
            }
        }
        
        @media (max-width: 768px) {
            a, button {
                cursor: pointer;
            }
        }
    </style>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Page specific styles -->
    @yield('styles')
</head>

<body class="font-sans antialiased">
    <!-- Custom cursor elements -->
    <div class="custom-cursor"></div>
    <div class="cursor-dot"></div>
    
    <!-- Progress Bar -->
    <div class="progress-bar" id="scrollProgressBar"></div>

    <div class="min-h-screen bg-gray-100">
        <!-- Navigation -->
        <nav class="sticky top-0 bg-purple-700 text-white p-4 shadow-md z-50">
            <div class="container mx-auto flex items-center justify-between">
                <div class="flex items-center z-20">
                    <img src="{{ asset('images/logo.png') }}" alt="Seraphxx Logo" class="w-8 h-8 rounded-full object-cover mr-2 hover:scale-110 transition-all duration-300">
                    <div class="text-xl font-bold">Seraphxx</div>
                </div>

                <!-- Desktop Navigation -->
                <div class="desktop-menu space-x-6">
                    <a href="{{ route('home') }}" class="nav-link hover:text-purple-200 transition">Home</a>
                    <a href="{{ route('about') }}" class="nav-link hover:text-purple-200 transition">About Me</a>
                    <a href="{{ route('commissions') }}" class="nav-link hover:text-purple-200 transition">Commissions</a>
                    <a href="{{ route('portfolio') }}" class="nav-link hover:text-purple-200 transition">Portfolio</a>
                    <a href="{{ route('contact') }}" class="nav-link hover:text-purple-200 transition">Contact</a>
                </div>

                <!-- Mobile Menu Button -->
                <button class="mobile-menu-btn" aria-label="Toggle menu">
                    <div class="menu-line"></div>
                    <div class="menu-line"></div>
                    <div class="menu-line"></div>
                </button>

                <!-- Mobile Navigation -->
                <div class="mobile-menu">
                    <a href="{{ route('home') }}" class="text-white font-medium hover:text-purple-200 transition" style="--i: 0">Home</a>
                    <a href="{{ route('about') }}" class="text-white font-medium hover:text-purple-200 transition" style="--i: 1">About Me</a>
                    <a href="{{ route('commissions') }}" class="text-white font-medium hover:text-purple-200 transition" style="--i: 2">Commissions</a>
                    <a href="{{ route('portfolio') }}" class="text-white font-medium hover:text-purple-200 transition" style="--i: 3">Portfolio</a>
                    <a href="{{ route('contact') }}" class="text-white font-medium hover:text-purple-200 transition" style="--i: 4">Contact</a>
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
        document.addEventListener('DOMContentLoaded', function() {
            try {
                // Mobile menu toggle
                const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
                const mobileMenu = document.querySelector('.mobile-menu');
                const mobileMenuLinks = document.querySelectorAll('.mobile-menu a');

                if (mobileMenuBtn && mobileMenu) {
                    mobileMenuBtn.addEventListener('click', function() {
                        mobileMenuBtn.classList.toggle('open');
                        mobileMenu.classList.toggle('open');
                        
                        // Prevent body scrolling when menu is open
                        if (mobileMenu.classList.contains('open')) {
                            document.body.style.overflow = 'hidden';
                        } else {
                            document.body.style.overflow = '';
                        }
                    });
                    
                    // Close menu when clicking on a link
                    mobileMenuLinks.forEach(link => {
                        link.addEventListener('click', function() {
                            mobileMenuBtn.classList.remove('open');
                            mobileMenu.classList.remove('open');
                            document.body.style.overflow = '';
                        });
                    });
                }
                
                // Custom cursor functionality
                const cursor = document.querySelector('.custom-cursor');
                const cursorDot = document.querySelector('.cursor-dot');
                
                // Only initialize on desktop
                if (window.innerWidth > 768 && cursor && cursorDot) {
                    // Track mouse movement
                    document.addEventListener('mousemove', (e) => {
                        // Use requestAnimationFrame for smoother performance
                        requestAnimationFrame(() => {
                            cursor.style.left = e.clientX + 'px';
                            cursor.style.top = e.clientY + 'px';
                            
                            cursorDot.style.left = e.clientX + 'px';
                            cursorDot.style.top = e.clientY + 'px';
                        });
                    });
                    
                    // Apply hover effects for all interactive elements
                    const interactiveElements = document.querySelectorAll('a, button');
                    
                    interactiveElements.forEach(el => {
                        el.addEventListener('mouseenter', () => {
                            cursor.style.width = '50px';
                            cursor.style.height = '50px';
                            cursor.style.backgroundColor = 'rgba(147, 51, 234, 0.15)';
                            
                            cursorDot.style.transform = 'translate(-50%, -50%) scale(2)';
                            cursorDot.style.backgroundColor = 'rgba(147, 51, 234, 0.8)';
                            cursorDot.style.mixBlendMode = 'difference';
                        });
                        
                        el.addEventListener('mouseleave', () => {
                            cursor.style.width = '40px';
                            cursor.style.height = '40px';
                            cursor.style.backgroundColor = 'rgba(147, 51, 234, 0.3)';
                            
                            cursorDot.style.transform = 'translate(-50%, -50%) scale(1.5)';
                            cursorDot.style.backgroundColor = '';
                            cursorDot.style.mixBlendMode = '';
                        });
                    });
                    
                    // Add click effect
                    document.addEventListener('mousedown', () => {
                        cursor.style.transform = 'translate(-50%, -50%) scale(0.9)';
                        cursorDot.style.transform = 'translate(-50%, -50%) scale(0.9)';
                    });
                    
                    document.addEventListener('mouseup', () => {
                        cursor.style.transform = 'translate(-50%, -50%) scale(1)';
                        cursorDot.style.transform = 'translate(-50%, -50%) scale(1)';
                    });
                }
                
                // Scroll progress bar
                const progressBar = document.getElementById('scrollProgressBar');
                
                function updateScrollProgress() {
                    const scrollHeight = document.documentElement.scrollHeight - window.innerHeight;
                    const scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
                    const scrollPercentage = (scrollTop / scrollHeight) * 100;
                    
                    if (progressBar) {
                        progressBar.style.height = scrollPercentage + '%';
                        
                        // Add a glow effect when scrolling
                        progressBar.style.boxShadow = `0 0 ${10 + scrollPercentage/10}px rgba(255, 140, 0, ${0.3 + scrollPercentage/200})`;
                    }
                }
                
                window.addEventListener('scroll', updateScrollProgress);
                updateScrollProgress(); // Initialize on page load
                
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