@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold mb-8 text-center text-purple-800">About Me</h1>
        
        <div class="bg-white p-8 rounded-lg shadow-md">
            <div class="flex flex-col md:flex-row gap-8 mb-8">
                <div class="md:w-1/3">
                    <img src="{{ asset('images/logo.png') }}" alt="Seraphxx Profile" class="w-full h-full object-cover rounded-md">
                </div>
                <div class="md:w-2/3">
                    <h2 class="text-2xl font-semibold mb-4">Hello, I'm Sera!</h2>
                    <p class="mb-4">I am a college student, musician, and digital artist with a passion for creating memorable character designs and illustrations.</p>
                    <p class="mb-4">My journey in digital art began when I was in high school, experimenting with different styles and techniques. Over time, I've developed my own unique style that combines anime-inspired elements with a personal touch.</p>
                </div>
            </div>
            
            <div class="mb-8">
                <h3 class="text-xl font-semibold mb-4 text-purple-700">My Background</h3>
                <p class="mb-4">Currently pursuing a degree in multimedia arts, I balance my academic studies with freelance art commissions and music covers. My education has helped me refine my technical skills, while my passion projects allow me to express my creativity.</p>
                <p>When I'm not drawing or studying, you can find me creating music covers of my favorite songs or exploring new digital art techniques.</p>
            </div>
            
            <div class="mb-8">
                <h3 class="text-xl font-semibold mb-4 text-purple-700">My Art Style</h3>
                <p class="mb-4">My art style can be described as colorful, expressive, and character-focused. I enjoy creating emotive portraits and dynamic full-body illustrations that tell a story.</p>
                <p>I primarily work with digital tools, specializing in character design, icons, and illustrations with clean lines and vibrant colors.</p>
            </div>
            
            <div>
                <h3 class="text-xl font-semibold mb-4 text-purple-700">Let's Connect!</h3>
                <p class="mb-4">I'm always open to new commission opportunities and collaborations. Whether you need character art, illustrations, or icons, I'd love to bring your ideas to life.</p>
                <p>Feel free to reach out via <a href="https://ngl.link/seraphxx" class="text-purple-600 hover:text-purple-800">ngl.link</a> or check out my commission information for details on working together.</p>
            </div>
        </div>
        
        <div class="mt-8 text-center">
            <a href="{{ route('commissions') }}" class="btn btn-primary">View Commission Info</a>
        </div>
    </div>
</div>
@endsection 