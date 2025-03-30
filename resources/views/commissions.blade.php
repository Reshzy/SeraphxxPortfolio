@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold mb-8 text-center text-purple-800">Commissions</h1>
        
        <!-- Commission Introduction -->
        <div class="bg-white p-6 rounded-lg shadow-md mb-8">
            <h2 class="text-2xl font-semibold mb-4">Commission Information</h2>
            <p class="mb-4">I'm currently open for commissions! Below you'll find my pricing and examples of my work. If you're interested in commissioning me, please reach out via <a href="https://ngl.link/seraphxx" class="text-purple-600 hover:text-purple-800">ngl.link</a> with details about what you'd like.</p>
            <p>I specialize in character illustrations, icons, and portraits in a colorful, anime-inspired style.</p>
        </div>
        
        <!-- Pricing Table -->
        <h2 class="text-2xl font-semibold mb-4 text-center">Pricing</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
            <!-- Icons -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold mb-2 text-purple-700">Icons</h3>
                <div class="aspect-square bg-gray-200 rounded-md flex items-center justify-center mb-4">
                    <span class="text-gray-500">Sample Image</span>
                </div>
                <div class="space-y-2">
                    <p class="flex justify-between">
                        <span>Sketch</span>
                        <span class="font-medium">100php / $2</span>
                    </p>
                    <p class="flex justify-between">
                        <span>Lineart</span>
                        <span class="font-medium">150php / $3</span>
                    </p>
                    <p class="flex justify-between">
                        <span>Simple Coloring</span>
                        <span class="font-medium">200php / $5</span>
                    </p>
                    <p class="flex justify-between">
                        <span>Full Render</span>
                        <span class="font-medium">300php / $7</span>
                    </p>
                </div>
            </div>
            
            <!-- Busts/Portraits -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold mb-2 text-purple-700">Busts/Portraits</h3>
                <div class="aspect-square bg-gray-200 rounded-md flex items-center justify-center mb-4">
                    <span class="text-gray-500">Sample Image</span>
                </div>
                <div class="space-y-2">
                    <p class="flex justify-between">
                        <span>Sketch</span>
                        <span class="font-medium">150php / $3</span>
                    </p>
                    <p class="flex justify-between">
                        <span>Lineart</span>
                        <span class="font-medium">250php / $5</span>
                    </p>
                    <p class="flex justify-between">
                        <span>Simple Coloring</span>
                        <span class="font-medium">300php / $6</span>
                    </p>
                    <p class="flex justify-between">
                        <span>Full Render</span>
                        <span class="font-medium">450php / $9</span>
                    </p>
                </div>
            </div>
            
            <!-- Body Shots -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold mb-2 text-purple-700">Body Shots</h3>
                <div class="aspect-square bg-gray-200 rounded-md flex items-center justify-center mb-4">
                    <span class="text-gray-500">Sample Image</span>
                </div>
                <div class="space-y-2">
                    <p class="flex justify-between">
                        <span>Sketch</span>
                        <span class="font-medium">200php / $4</span>
                    </p>
                    <p class="flex justify-between">
                        <span>Lineart</span>
                        <span class="font-medium">300php / $6</span>
                    </p>
                    <p class="flex justify-between">
                        <span>Simple Coloring</span>
                        <span class="font-medium">400php / $8</span>
                    </p>
                    <p class="flex justify-between">
                        <span>Full Render</span>
                        <span class="font-medium">600php / $12</span>
                    </p>
                </div>
            </div>
        </div>
        
        <!-- Terms of Service -->
        <div class="bg-white p-6 rounded-lg shadow-md mb-8">
            <h2 class="text-2xl font-semibold mb-4">Terms of Service</h2>
            <div class="space-y-4">
                <div>
                    <h3 class="text-lg font-medium text-purple-700">What I will draw:</h3>
                    <ul class="list-disc list-inside ml-4">
                        <li>Original characters</li>
                        <li>Fan art</li>
                        <li>Humans, humanoids, kemonomimi</li>
                        <li>Simple backgrounds</li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-medium text-purple-700">What I won't draw:</h3>
                    <ul class="list-disc list-inside ml-4">
                        <li>NSFW content</li>
                        <li>Gore or extreme violence</li>
                        <li>Hateful or discriminatory content</li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-medium text-purple-700">Process:</h3>
                    <ul class="list-disc list-inside ml-4">
                        <li>50% payment upfront, 50% upon completion</li>
                        <li>I'll provide sketch approval before proceeding to final rendering</li>
                        <li>Minor revisions included, major changes may incur additional fees</li>
                        <li>Completion time: 1-2 weeks depending on complexity</li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-medium text-purple-700">Usage Rights:</h3>
                    <ul class="list-disc list-inside ml-4">
                        <li>You may use the commissioned art for personal use</li>
                        <li>Commercial use requires additional discussion and fees</li>
                        <li>I retain the right to use the art in my portfolio</li>
                    </ul>
                </div>
            </div>
        </div>
        
        <!-- Contact Information -->
        <div class="bg-white p-6 rounded-lg shadow-md text-center">
            <h2 class="text-2xl font-semibold mb-4">Ready to Commission?</h2>
            <p class="mb-4">Contact me through <a href="https://ngl.link/seraphxx" class="text-purple-600 hover:text-purple-800">ngl.link</a> with the following information:</p>
            <ul class="text-left inline-block mb-6">
                <li>1. Type of commission (icon, bust, full body)</li>
                <li>2. Level of rendering desired</li>
                <li>3. Brief description or reference images</li>
                <li>4. Deadline (if applicable)</li>
            </ul>
            <p>I'll respond as soon as possible to discuss your commission in more detail!</p>
        </div>
    </div>
</div>
@endsection 