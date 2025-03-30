@extends('layouts.app')

@section('content')
<div class="py-12 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Hero Section -->
        <div class="bg-gradient-to-r from-purple-500 to-blue-500 rounded-lg shadow-xl p-8 mb-16 text-white overflow-hidden relative">
            <!-- Background decorative elements -->
            <div class="absolute w-64 h-64 rounded-full bg-white opacity-10 -top-20 -right-20"></div>
            <div class="absolute w-32 h-32 rounded-full bg-white opacity-10 bottom-10 right-20"></div>

            <div class="flex flex-col md:flex-row items-center relative z-10">
                <div class="relative mb-8 md:mb-0 md:mr-10">
                    <div class="absolute inset-0 bg-white opacity-10 rounded-full transform scale-110 animate-pulse"></div>
                    <img src="{{ asset('images/logo.png') }}" alt="Seraphxx Logo" class="w-40 h-40 rounded-full object-cover border-2 border-white relative z-10">
                </div>

                <div>
                    <h1 class="text-4xl md:text-5xl font-bold mb-4 hero-title">Hello, I'm <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-200 to-yellow-400">Seraphxx</span></h1>
                    <div class="typewriter-container mb-8">
                        <p class="text-xl md:text-2xl">Digital Artist | <span id="typewriter" class="text-purple-200"></span></p>
                    </div>
                    <a href="{{ route('portfolio') }}" class="inline-block btn btn-primary bg-white text-purple-700 hover:bg-gray-100 px-8 py-3 rounded-full transform hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-xl">View My Work</a>
                </div>
            </div>
        </div>

        <!-- Text scroll section -->
        <div class="relative overflow-hidden py-10 mb-16 bg-purple-700 w-screen -ml-[50vw] left-1/2 conveyer">
            <div class="text-scroll-container whitespace-nowrap">
                <div class="inline-block text-scroll">
                    <span class="text-white text-4xl md:text-5xl font-bold mx-4">DIGITAL ART</span>
                    <span class="text-yellow-300 text-4xl md:text-5xl font-bold mx-4">●</span>
                    <span class="text-white text-4xl md:text-5xl font-bold mx-4">CHARACTER DESIGN</span>
                    <span class="text-yellow-300 text-4xl md:text-5xl font-bold mx-4">●</span>
                    <span class="text-white text-4xl md:text-5xl font-bold mx-4">ILLUSTRATIONS</span>
                    <span class="text-yellow-300 text-4xl md:text-5xl font-bold mx-4">●</span>
                    <span class="text-white text-4xl md:text-5xl font-bold mx-4">COMMISSIONS</span>
                    <span class="text-yellow-300 text-4xl md:text-5xl font-bold mx-4">●</span>
                </div>
                <div class="inline-block text-scroll">
                    <span class="text-white text-4xl md:text-5xl font-bold mx-4">DIGITAL ART</span>
                    <span class="text-yellow-300 text-4xl md:text-5xl font-bold mx-4">●</span>
                    <span class="text-white text-4xl md:text-5xl font-bold mx-4">CHARACTER DESIGN</span>
                    <span class="text-yellow-300 text-4xl md:text-5xl font-bold mx-4">●</span>
                    <span class="text-white text-4xl md:text-5xl font-bold mx-4">ILLUSTRATIONS</span>
                    <span class="text-yellow-300 text-4xl md:text-5xl font-bold mx-4">●</span>
                    <span class="text-white text-4xl md:text-5xl font-bold mx-4">COMMISSIONS</span>
                    <span class="text-yellow-300 text-4xl md:text-5xl font-bold mx-4">●</span>
                </div>
            </div>
        </div>


        <!-- About Section Preview -->
        <section id="about" class="mb-16 scroll-reveal">
            <h2 class="text-3xl md:text-4xl font-bold mb-8 text-center">About <span class="text-purple-600">Me</span></h2>
            <div class="bg-white p-8 rounded-lg shadow-md transform hover:scale-[1.02] transition-all duration-500">
                <div class="relative overflow-hidden pb-3">
                    <p class="text-lg mb-4 leading-relaxed">Hello! My name is <span class="font-semibold text-purple-600">Sera</span>. I am a college student, musician, and artist with a passion for creating memorable digital art.</p>
                    <p class="text-lg mb-6 leading-relaxed">I specialize in character illustrations and music covers, bringing imagination to life through my work.</p>
                    <div class="absolute w-full h-1 bottom-0 left-0 bg-gradient-to-r from-purple-500 to-blue-500"></div>
                </div>
                <div class="text-center mt-6">
                    <a href="{{ route('about') }}" class="inline-block text-purple-700 hover:text-purple-900 font-medium border-b-2 border-transparent hover:border-purple-700 transition-all duration-300 px-4 py-2">Learn more about me →</a>
                </div>
            </div>
        </section>

        <!-- Commissions Preview -->
        <section class="mb-16 scroll-reveal">
            <h2 class="text-3xl md:text-4xl font-bold mb-8 text-center">Commission <span class="text-purple-600">Services</span></h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white p-8 rounded-lg shadow-md group hover:shadow-xl transition-all duration-500 image-hover">
                    <h3 class="text-2xl font-semibold mb-3 group-hover:text-purple-600 transition-colors duration-300">Icons</h3>
                    <p class="text-gray-700 mb-4">Simple Coloring: <span class="font-bold">200php / $5</span></p>
                    <div class="aspect-square rounded-md overflow-hidden group-hover:rounded-xl transition-all duration-300">
                        <img src="{{ asset('images/icons/profile pic for insta and youtube.png') }}" alt="Icon Commission Example" class="w-full h-full object-cover transform group-hover:scale-105 transition-all duration-500">
                    </div>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-md group hover:shadow-xl transition-all duration-500 image-hover">
                    <h3 class="text-2xl font-semibold mb-3 group-hover:text-purple-600 transition-colors duration-300">Body Shots</h3>
                    <p class="text-gray-700 mb-4">Simple Coloring: <span class="font-bold">400php / $8</span></p>
                    <div class="aspect-square rounded-md overflow-hidden group-hover:rounded-xl transition-all duration-300">
                        <img src="{{ asset('images/bodyShots/VANILLA OR CHOCOLATE Esme Insta.png') }}" alt="Body Shot Commission Example" class="w-full h-full object-cover transform group-hover:scale-105 transition-all duration-500">
                    </div>
                </div>
            </div>
            <div class="text-center mt-8">
                <a href="{{ route('commissions') }}" class="inline-block px-8 py-3 bg-purple-600 text-white rounded-full hover:bg-purple-700 transform hover:scale-105 transition-all duration-300 shadow-md hover:shadow-lg">View all commission options →</a>
            </div>
        </section>

        <!-- Portfolio Preview -->
        <section class="scroll-reveal">
            <h2 class="text-3xl md:text-4xl font-bold mb-10 text-center">Recent <span class="text-purple-600">Work</span></h2>

            <div class="grid grid-cols-2 md:grid-cols-3 gap-6 perspective-container">
                <!-- Body Shots -->
                <div class="aspect-square rounded-md overflow-hidden portfolio-item">
                    <img src="{{ asset('images/bodyShots/30 min challenge Final with credits Final.png') }}" alt="Body Shot Artwork" class="w-full h-full object-cover hover:scale-110 transition-transform duration-500">
                    <div class="portfolio-overlay">
                        <span class="text-white font-medium">Body Shot</span>
                    </div>
                </div>
                <div class="aspect-square rounded-md overflow-hidden portfolio-item">
                    <img src="{{ asset('images/bodyShots/Christmass special Layla PS.png') }}" alt="Body Shot Artwork" class="w-full h-full object-cover hover:scale-110 transition-transform duration-500">
                    <div class="portfolio-overlay">
                        <span class="text-white font-medium">Body Shot</span>
                    </div>
                </div>
                <div class="aspect-square rounded-md overflow-hidden portfolio-item">
                    <img src="{{ asset('images/bodyShots/Guinivere Lingire effects file.png') }}" alt="Body Shot Artwork" class="w-full h-full object-cover hover:scale-110 transition-transform duration-500">
                    <div class="portfolio-overlay">
                        <span class="text-white font-medium">Body Shot</span>
                    </div>
                </div>

                <!-- Icons -->
                <div class="aspect-square rounded-md overflow-hidden portfolio-item">
                    <img src="{{ asset("images/icons/baby chang'e.png") }}" alt="Icon Artwork" class="w-full h-full object-cover hover:scale-110 transition-transform duration-500">
                    <div class="portfolio-overlay">
                        <span class="text-white font-medium">Icon</span>
                    </div>
                </div>
                <div class="aspect-square rounded-md overflow-hidden portfolio-item">
                    <img src="{{ asset('images/icons/hatkid nana.png') }}" alt="Icon Artwork" class="w-full h-full object-cover hover:scale-110 transition-transform duration-500">
                    <div class="portfolio-overlay">
                        <span class="text-white font-medium">Icon</span>
                    </div>
                </div>
                <div class="aspect-square rounded-md overflow-hidden portfolio-item">
                    <img src="{{ asset('images/icons/Royal cavalry.png') }}" alt="Icon Artwork" class="w-full h-full object-cover hover:scale-110 transition-transform duration-500">
                    <div class="portfolio-overlay">
                        <span class="text-white font-medium">Icon</span>
                    </div>
                </div>
            </div>

            <div class="text-center mt-10">
                <a href="{{ route('portfolio') }}" class="inline-block relative overflow-hidden group px-8 py-3 bg-white text-purple-700 font-medium rounded-full shadow-md">
                    <span class="relative z-10 group-hover:text-white transition-colors duration-300">View my full portfolio →</span>
                    <span class="absolute inset-0 w-full h-full bg-gradient-to-r from-purple-500 to-blue-500 -translate-x-full group-hover:translate-x-0 transition-transform duration-300"></span>
                </a>
            </div>
        </section>
    </div>
</div>

<style>
    /* Text scrolling animation */
    .conveyer {
        mask-image: linear-gradient(to right, transparent, #000 20%, #000 80%, transparent);
    }

    .text-scroll-container {
        overflow: hidden;
    }

    .text-scroll {
        display: inline-block;
        animation: textScroll 20s linear infinite;

    }

    @keyframes textScroll {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-100%);
        }
    }

    /* Portfolio item overlay effect */
    .portfolio-item {
        position: relative;
        overflow: hidden;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        transition: transform 0.5s ease, box-shadow 0.5s ease;
    }

    .portfolio-item:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    }

    .portfolio-overlay {
        position: absolute;
        inset: 0;
        background: rgba(79, 38, 114, 0.7);
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .portfolio-item:hover .portfolio-overlay {
        opacity: 1;
    }

    /* Hero title animation */
    .hero-title {
        opacity: 0;
        animation: fadeUp 1s ease forwards 0.5s;
    }

    @keyframes fadeUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Perspective container for 3D effect */
    .perspective-container {
        perspective: 1000px;
    }

    .perspective-container>div {
        transition: transform 0.5s ease;
    }

    .perspective-container>div:hover {
        transform: translateY(-10px) rotateY(10deg);
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Fix for typewriter effect
        const textArray = ["Musician", "College Student", "Character Designer"];
        let textIndex = 0;
        let charIndex = 0;
        let isDeleting = false;
        const typewriterElement = document.getElementById('typewriter');

        if (typewriterElement) {
            function typeWriter() {
                const currentText = textArray[textIndex];

                if (isDeleting) {
                    typewriterElement.textContent = currentText.substring(0, charIndex - 1);
                    charIndex--;
                } else {
                    typewriterElement.textContent = currentText.substring(0, charIndex + 1);
                    charIndex++;
                }

                // Speed control
                let typingSpeed = isDeleting ? 50 : 150;

                // If completed typing word
                if (!isDeleting && charIndex === currentText.length) {
                    isDeleting = true;
                    typingSpeed = 1000; // Pause at end
                } else if (isDeleting && charIndex === 0) {
                    isDeleting = false;
                    textIndex = (textIndex + 1) % textArray.length;
                    typingSpeed = 500; // Pause before typing next
                }

                setTimeout(typeWriter, typingSpeed);
            }

            // Start the typewriter effect
            typeWriter();
        }

        // Simpler scroll reveal animation without GSAP
        const revealOnScroll = function() {
            const elements = document.querySelectorAll('.scroll-reveal');
            const windowHeight = window.innerHeight;

            elements.forEach(function(element) {
                const elementTop = element.getBoundingClientRect().top;

                if (elementTop < windowHeight - 100) {
                    element.classList.add('active');
                }
            });

            // Add simple fade-in for portfolio items
            const portfolioItems = document.querySelectorAll('.portfolio-item');
            portfolioItems.forEach(function(item, index) {
                const itemTop = item.getBoundingClientRect().top;

                if (itemTop < windowHeight - 50) {
                    item.style.opacity = '1';
                    item.style.transform = 'translateY(0)';
                    item.style.transitionDelay = (index * 0.1) + 's';
                }
            });
        };

        // Apply initial styles to portfolio items
        const portfolioItems = document.querySelectorAll('.portfolio-item');
        portfolioItems.forEach(function(item) {
            item.style.opacity = '0';
            item.style.transform = 'translateY(30px)';
            item.style.transition = 'opacity 0.8s ease, transform 0.8s ease';
        });

        // Run once on load and then on scroll
        window.addEventListener('scroll', revealOnScroll);
        revealOnScroll();
    });
</script>
@endsection