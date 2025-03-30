@extends('layouts.app')

@section('styles')
    @vite('resources/css/home.css')
@endsection

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
            
            <div class="bg-white rounded-lg shadow-xl overflow-hidden">
                <div class="flex flex-col md:flex-row">
                    <!-- Left side - Image with animated overlay -->
                    <div class="md:w-2/5 relative overflow-hidden group">
                        <div class="absolute inset-0 bg-gradient-to-tr from-purple-600/80 to-blue-500/80 z-10 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <img src="{{ asset('images/pfp.jpg') }}" alt="Seraphxx" class="w-full h-full object-cover object-center">
                        <div class="absolute inset-0 z-20 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-500">
                            <div class="text-white text-center p-6 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                                <span class="text-3xl font-bold block mb-2">Seraphxx</span>
                                <span class="px-4 py-1 border border-white rounded-full text-sm">Digital Creator</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Right side - Content with animated skill bars -->
                    <div class="md:w-3/5 p-8 md:p-12">
                        <div class="space-y-6">
                            <div>
                                <h3 class="text-2xl font-bold text-purple-700 mb-4">Hello there!</h3>
                                <p class="text-lg mb-4 leading-relaxed">I'm <span class="font-semibold text-purple-600">Sera</span>, a college student, musician, and artist with a passion for creating memorable digital art.</p>
                                <p class="text-lg mb-6 leading-relaxed">I specialize in character illustrations and music covers, bringing imagination to life through my work.</p>
                            </div>
                            
                            <!-- Skill bars -->
                            <div class="space-y-4">
                                <h4 class="font-semibold text-lg text-gray-700">My Skills</h4>
                                
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="font-medium text-gray-700">Digital Illustration</span>
                                        <span class="text-sm text-purple-600">95%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 h-2 rounded-full overflow-hidden">
                                        <div class="bg-gradient-to-r from-purple-500 to-blue-500 h-full rounded-full w-[95%] animate-skill-bar"></div>
                                    </div>
                                </div>
                                
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="font-medium text-gray-700">Character Design</span>
                                        <span class="text-sm text-purple-600">90%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 h-2 rounded-full overflow-hidden">
                                        <div class="bg-gradient-to-r from-purple-500 to-blue-500 h-full rounded-full w-[90%] animate-skill-bar"></div>
                                    </div>
                                </div>
                                
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="font-medium text-gray-700">Music</span>
                                        <span class="text-sm text-purple-600">85%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 h-2 rounded-full overflow-hidden">
                                        <div class="bg-gradient-to-r from-purple-500 to-blue-500 h-full rounded-full w-[85%] animate-skill-bar"></div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Stats with micro-interactions -->
                            <div class="grid grid-cols-3 gap-4 py-4">
                                <div class="text-center group hover:bg-purple-50 p-3 rounded-lg transition-colors duration-300">
                                    <span class="block text-3xl font-bold text-purple-600 group-hover:scale-110 transition-transform duration-300">50+</span>
                                    <span class="text-sm text-gray-600">Projects</span>
                                </div>
                                <div class="text-center group hover:bg-purple-50 p-3 rounded-lg transition-colors duration-300">
                                    <span class="block text-3xl font-bold text-purple-600 group-hover:scale-110 transition-transform duration-300">3</span>
                                    <span class="text-sm text-gray-600">Years</span>
                                </div>
                                <div class="text-center group hover:bg-purple-50 p-3 rounded-lg transition-colors duration-300">
                                    <span class="block text-3xl font-bold text-purple-600 group-hover:scale-110 transition-transform duration-300">100%</span>
                                    <span class="text-sm text-gray-600">Passion</span>
                                </div>
                            </div>
                            
                            <div class="text-center mt-6">
                                <a href="{{ route('about') }}" class="inline-block relative overflow-hidden group px-8 py-3 bg-white text-purple-700 font-medium rounded-full shadow-md border border-purple-200">
                                    <span class="relative z-10 group-hover:text-white transition-colors duration-300">Learn more about me →</span>
                                    <span class="absolute inset-0 w-full h-full bg-gradient-to-r from-purple-500 to-blue-500 -translate-x-full group-hover:translate-x-0 transition-transform duration-300"></span>
                                </a>
                            </div>
                        </div>
                    </div>
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
                        <img src="{{ asset('images/icons/profile pic for insta and youtube.png') }}" alt="Icon Commission Example" class="w-full h-full object-cover transform group-hover:scale-105 transition-all duration-500 modal-trigger">
                    </div>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-md group hover:shadow-xl transition-all duration-500 image-hover">
                    <h3 class="text-2xl font-semibold mb-3 group-hover:text-purple-600 transition-colors duration-300">Body Shots</h3>
                    <p class="text-gray-700 mb-4">Simple Coloring: <span class="font-bold">400php / $8</span></p>
                    <div class="aspect-square rounded-md overflow-hidden group-hover:rounded-xl transition-all duration-300">
                        <img src="{{ asset('images/bodyShots/VANILLA OR CHOCOLATE Esme Insta.png') }}" alt="Body Shot Commission Example" class="w-full h-full object-cover transform group-hover:scale-105 transition-all duration-500 modal-trigger">
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
                    <img src="{{ asset('images/bodyShots/30 min challenge Final with credits Final.png') }}" alt="Body Shot Artwork" class="w-full h-full object-cover hover:scale-110 transition-transform duration-500 modal-trigger">
                    <div class="portfolio-overlay">
                        <span class="text-white font-medium">Body Shot</span>
                    </div>
                </div>
                <div class="aspect-square rounded-md overflow-hidden portfolio-item">
                    <img src="{{ asset('images/bodyShots/Christmass special Layla PS.png') }}" alt="Body Shot Artwork" class="w-full h-full object-cover hover:scale-110 transition-transform duration-500 modal-trigger">
                    <div class="portfolio-overlay">
                        <span class="text-white font-medium">Body Shot</span>
                    </div>
                </div>
                <div class="aspect-square rounded-md overflow-hidden portfolio-item">
                    <img src="{{ asset('images/bodyShots/Guinivere Lingire effects file.png') }}" alt="Body Shot Artwork" class="w-full h-full object-cover hover:scale-110 transition-transform duration-500 modal-trigger">
                    <div class="portfolio-overlay">
                        <span class="text-white font-medium">Body Shot</span>
                    </div>
                </div>

                <!-- Icons -->
                <div class="aspect-square rounded-md overflow-hidden portfolio-item">
                    <img src="{{ asset("images/icons/baby chang'e.png") }}" alt="Icon Artwork" class="w-full h-full object-cover hover:scale-110 transition-transform duration-500 modal-trigger">
                    <div class="portfolio-overlay">
                        <span class="text-white font-medium">Icon</span>
                    </div>
                </div>
                <div class="aspect-square rounded-md overflow-hidden portfolio-item">
                    <img src="{{ asset('images/icons/hatkid nana.png') }}" alt="Icon Artwork" class="w-full h-full object-cover hover:scale-110 transition-transform duration-500 modal-trigger">
                    <div class="portfolio-overlay">
                        <span class="text-white font-medium">Icon</span>
                    </div>
                </div>
                <div class="aspect-square rounded-md overflow-hidden portfolio-item">
                    <img src="{{ asset('images/icons/Royal cavalry.png') }}" alt="Icon Artwork" class="w-full h-full object-cover hover:scale-110 transition-transform duration-500 modal-trigger">
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

<!-- Image Modal -->
<div id="imageModal" class="fixed inset-0 z-50 flex items-center justify-center p-4 hidden backdrop-blur-sm">
    <div class="absolute inset-0 bg-black opacity-65"></div>
    <div class="relative max-w-5xl max-h-full z-10">
        <!-- Close button -->
        <button id="closeModal" class="absolute -top-4 -right-4 bg-white text-purple-800 rounded-full w-10 h-10 flex items-center justify-center shadow-lg z-10 hover:bg-gray-100 transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
        <!-- Modal content -->
        <div class="bg-white rounded-lg shadow-2xl overflow-hidden">
            <div class="p-1">
                <img id="modalImage" src="" alt="Full size image" class="max-h-[80vh] object-contain">
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
    @vite('resources/js/home.js')
@endsection