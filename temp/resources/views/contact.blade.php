@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold mb-8 text-center text-purple-800">Contact Me</h1>
        
        <div class="bg-white p-8 rounded-lg shadow-md">
            <p class="text-lg text-center mb-8">I'd love to hear from you! Reach out for commissions, collaborations, or just to say hello.</p>
            
            <!-- Primary Contact Method -->
            <div class="bg-purple-100 p-6 rounded-lg mb-8 text-center">
                <h2 class="text-2xl font-semibold mb-4">Direct Message</h2>
                <p class="mb-4">The best way to reach me is through my ngl.link:</p>
                <a href="https://ngl.link/seraphxx" class="inline-block bg-purple-700 text-white px-6 py-3 rounded-lg text-lg font-medium hover:bg-purple-800 transition">
                    ngl.link/seraphxx
                </a>
            </div>
            
            <!-- Social Media Links -->
            <div class="mb-8">
                <h2 class="text-2xl font-semibold mb-4 text-center">Connect on Social Media</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <!-- Instagram -->
                    <a href="#" class="bg-gradient-to-r from-purple-500 to-pink-500 text-white p-4 rounded-lg flex flex-col items-center hover:shadow-lg transition">
                        <div class="h-12 w-12 rounded-full bg-white/20 flex items-center justify-center mb-2">
                            <span class="text-2xl">📷</span>
                        </div>
                        <span class="font-medium">Instagram</span>
                        <span class="text-sm">@seraphxx_art</span>
                    </a>
                    
                    <!-- Twitter/X -->
                    <a href="#" class="bg-black text-white p-4 rounded-lg flex flex-col items-center hover:shadow-lg transition">
                        <div class="h-12 w-12 rounded-full bg-white/20 flex items-center justify-center mb-2">
                            <span class="text-2xl">𝕏</span>
                        </div>
                        <span class="font-medium">Twitter/X</span>
                        <span class="text-sm">@seraphxx_art</span>
                    </a>
                    
                    <!-- YouTube -->
                    <a href="#" class="bg-red-600 text-white p-4 rounded-lg flex flex-col items-center hover:shadow-lg transition">
                        <div class="h-12 w-12 rounded-full bg-white/20 flex items-center justify-center mb-2">
                            <span class="text-2xl">▶️</span>
                        </div>
                        <span class="font-medium">YouTube</span>
                        <span class="text-sm">Seraphxx Covers</span>
                    </a>
                </div>
            </div>
            
            <!-- Commission Reminder -->
            <div class="bg-gray-100 p-6 rounded-lg">
                <h2 class="text-xl font-semibold mb-2">Looking for a Commission?</h2>
                <p class="mb-4">Please include the following information when reaching out about commission work:</p>
                <ul class="list-disc list-inside space-y-1 mb-4 ml-4">
                    <li>Type of commission (icon, bust, full body)</li>
                    <li>Level of rendering desired</li>
                    <li>Brief description or reference images</li>
                    <li>Deadline (if applicable)</li>
                </ul>
                <a href="/commissions" class="text-purple-700 hover:text-purple-900 font-medium">
                    View detailed commission information →
                </a>
            </div>
        </div>
        
        <!-- Response Time -->
        <div class="mt-8 text-center text-gray-600">
            <p>I typically respond to messages within 24-48 hours.</p>
            <p>For urgent inquiries, please mention "URGENT" in your message.</p>
        </div>
    </div>
</div>
@endsection 