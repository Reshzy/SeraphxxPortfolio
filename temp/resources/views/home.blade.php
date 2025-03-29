@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Hero Section -->
        <div class="bg-gradient-to-r from-purple-500 to-blue-500 rounded-lg shadow-xl p-8 mb-8 text-white">
            <div class="flex flex-col md:flex-row items-center">
                <img src="{{ asset('images/logo.png') }}" alt="Seraphxx Logo" class="w-40 h-40 rounded-full object-cover border-2 border-white mb-4 md:mb-0 md:mr-6">
                <div>
                    <h1 class="text-4xl font-bold mb-4">Hello, I'm Seraphxx</h1>
                    <p class="text-xl mb-6">Digital Artist | Musician | College Student</p>
                    <a href="{{ route('portfolio') }}" class="btn btn-primary bg-white text-purple-700 hover:bg-gray-100">View My Work</a>
                </div>
            </div>
        </div>

        <!-- About Section Preview -->
        <section id="about" class="mb-12">
            <h2 class="text-3xl font-bold mb-4 text-center">About Me</h2>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <p class="mb-4">Hello! My name is Sera. I am a college student, musician, and artist with a passion for creating memorable digital art.</p>
                <p class="mb-4">I specialize in character illustrations and music covers, bringing imagination to life through my work.</p>
                <div class="text-center mt-4">
                    <a href="{{ route('about') }}" class="text-purple-700 hover:text-purple-900 font-medium">Learn more about me →</a>
                </div>
            </div>
        </section>

        <!-- Commissions Preview -->
        <section class="mb-12">
            <h2 class="text-3xl font-bold mb-4 text-center">Commissions</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold mb-2">Icons</h3>
                    <p class="text-gray-700 mb-2">Simple Coloring: 200php / $5</p>
                    <div class="aspect-square rounded-md">
                        <img src="{{ asset('images/icons/profile pic for insta and youtube.png') }}" alt="Icon Commission Example" class="w-full h-full object-cover rounded-md">
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold mb-2">Body Shots</h3>
                    <p class="text-gray-700 mb-2">Simple Coloring: 400php / $8</p>
                    <div class="aspect-square rounded-md">
                        <img src="{{ asset('images/bodyShots/VANILLA OR CHOCOLATE Esme Insta.png') }}" alt="Icon Commission Example" class="w-full h-full object-cover rounded-md">
                    </div>
                </div>
            </div>
            <div class="text-center mt-6">
                <a href="{{ route('commissions') }}" class="text-purple-700 hover:text-purple-900 font-medium">View all commission options →</a>
            </div>
        </section>

        <!-- Portfolio Preview -->
        <section>
            <h2 class="text-3xl font-bold mb-4 text-center">Recent Work</h2>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                <!-- Body Shots -->
                <div class="aspect-square rounded-md">
                    <img src="{{ asset('images/bodyShots/30 min challenge Final with credits Final.png') }}" alt="Body Shot Artwork" class="w-full h-full object-cover rounded-md">
                </div>
                <div class="aspect-square rounded-md">
                    <img src="{{ asset('images/bodyShots/Christmass special Layla PS.png') }}" alt="Body Shot Artwork" class="w-full h-full object-cover rounded-md">
                </div>
                <div class="aspect-square rounded-md">
                    <img src="{{ asset('images/bodyShots/Guinivere Lingire effects file.png') }}" alt="Body Shot Artwork" class="w-full h-full object-cover rounded-md">
                </div>

                <!-- Icons -->
                <div class="aspect-square rounded-md">
                    <img src="{{ asset("images/icons/baby chang'e.png") }}" alt="Icon Artwork" class="w-full h-full object-cover rounded-md">
                </div>
                <div class="aspect-square rounded-md">
                    <img src="{{ asset('images/icons/hatkid nana.png') }}" alt="Icon Artwork" class="w-full h-full object-cover rounded-md">
                </div>
                <div class="aspect-square rounded-md">
                    <img src="{{ asset('images/icons/Royal cavalry.png') }}" alt="Icon Artwork" class="w-full h-full object-cover rounded-md">
                </div>
            </div>
            <div class="text-center mt-6">
                <a href="{{ route('portfolio') }}" class="text-purple-700 hover:text-purple-900 font-medium">View my full portfolio →</a>
            </div>
        </section>
    </div>
</div>
@endsection 