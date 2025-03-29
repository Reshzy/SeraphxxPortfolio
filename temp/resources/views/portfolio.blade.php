@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold mb-8 text-center text-purple-800">Portfolio</h1>
        
        <!-- Art Gallery -->
        <div class="mb-12">
            <h2 class="text-2xl font-semibold mb-6 text-center">Art Gallery</h2>
            
            <!-- Categories -->
            <div class="flex justify-center mb-6 space-x-4">
                <button class="px-4 py-2 bg-purple-700 text-white rounded-full">All</button>
                <button class="px-4 py-2 bg-gray-200 text-gray-700 rounded-full hover:bg-purple-200">Character Art</button>
                <button class="px-4 py-2 bg-gray-200 text-gray-700 rounded-full hover:bg-purple-200">Portraits</button>
                <button class="px-4 py-2 bg-gray-200 text-gray-700 rounded-full hover:bg-purple-200">Icons</button>
            </div>
            
            <!-- Gallery Grid -->
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                @for ($i = 1; $i <= 12; $i++)
                    <div class="aspect-square bg-gray-200 rounded-lg overflow-hidden shadow-md hover:shadow-lg transition">
                        <div class="h-full w-full flex items-center justify-center">
                            <span class="text-gray-500">Artwork {{ $i }}</span>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
        
        <!-- Music Covers -->
        <div>
            <h2 class="text-2xl font-semibold mb-6 text-center">Music Covers</h2>
            
            <!-- Simple Carousel -->
            <div class="relative overflow-hidden mb-8">
                <div class="flex space-x-4 overflow-x-auto pb-4 snap-x">
                    @for ($i = 1; $i <= 6; $i++)
                        <div class="snap-start flex-shrink-0 w-full md:w-1/2 lg:w-1/3">
                            <div class="bg-white p-4 rounded-lg shadow-md">
                                <div class="aspect-video bg-gray-200 rounded flex items-center justify-center mb-3">
                                    <span class="text-gray-500">Video Cover {{ $i }}</span>
                                </div>
                                <h3 class="font-medium">Song Title {{ $i }}</h3>
                                <p class="text-sm text-gray-600">Original Artist</p>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
            
            <!-- YouTube Embed Example -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold mb-4">Latest Music Cover</h3>
                <div class="aspect-video bg-gray-200 rounded-lg flex items-center justify-center mb-3">
                    <span class="text-gray-500">YouTube Embed Placeholder</span>
                </div>
                <p class="text-gray-700">This is where I would embed my latest music cover from YouTube. I create vocal covers of my favorite songs, primarily focusing on anime and pop music.</p>
                <div class="mt-4">
                    <a href="#" class="text-purple-700 hover:text-purple-900">View more on my YouTube channel →</a>
                </div>
            </div>
        </div>
        
        <!-- Download Portfolio -->
        <div class="mt-12 text-center">
            <a href="#" class="btn btn-primary">Download Full Portfolio (PDF)</a>
        </div>
    </div>
</div>
@endsection 