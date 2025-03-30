@extends('layouts.app')

@section('styles')
<style>
    /* Modern scrolling animations */
    .fade-up {
        opacity: 0;
        transform: translateY(40px);
        transition: opacity 0.8s cubic-bezier(0.5, 0, 0, 1), transform 0.8s cubic-bezier(0.5, 0, 0, 1);
    }
    
    .fade-up.active {
        opacity: 1;
        transform: translateY(0);
    }
    
    .stagger-delay-1 { transition-delay: 0.1s; }
    .stagger-delay-2 { transition-delay: 0.2s; }
    .stagger-delay-3 { transition-delay: 0.3s; }
    .stagger-delay-4 { transition-delay: 0.4s; }
    
    /* Text reveal effect */
    .text-reveal {
        overflow: hidden;
    }
    
    .text-reveal span {
        display: block;
        transform: translateY(100%);
        transition: transform 1s cubic-bezier(0.77, 0, 0.175, 1);
    }
    
    .text-reveal.active span {
        transform: translateY(0);
    }
    
    /* Profile image effects */
    .profile-image-container {
        position: relative;
        overflow: hidden;
        border-radius: 1rem;
        box-shadow: 0 15px 30px -10px rgba(91, 33, 182, 0.3);
    }
    
    .profile-image {
        transition: transform 0.7s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }
    
    .profile-image-container:hover .profile-image {
        transform: scale(1.05);
    }
    
    .profile-image-container::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(to bottom right, rgba(126, 34, 206, 0.2), rgba(55, 48, 163, 0.2));
        opacity: 0;
        transition: opacity 0.7s ease;
    }
    
    .profile-image-container:hover::after {
        opacity: 1;
    }
    
    /* Modern link styling */
    .hover-link {
        position: relative;
        display: inline-block;
    }
    
    .hover-link::after {
        content: '';
        position: absolute;
        bottom: -2px;
        left: 0;
        width: 100%;
        height: 1px;
        background: currentColor;
        transform: scaleX(0);
        transform-origin: right;
        transition: transform 0.4s cubic-bezier(0.76, 0, 0.24, 1);
    }
    
    .hover-link:hover::after {
        transform: scaleX(1);
        transform-origin: left;
    }
    
    /* Button hover effect */
    .btn-modern {
        position: relative;
        overflow: hidden;
        transition: color 0.3s ease;
        z-index: 1;
    }
    
    .btn-modern::before {
        content: '';
        position: absolute;
        top: 0;
        left: -10%;
        width: 0;
        height: 100%;
        background: rgba(126, 34, 206, 0.8);
        transform: skew(-25deg);
        transition: all 0.4s cubic-bezier(0.3, 0.8, 0.2, 1);
        z-index: -1;
    }
    
    .btn-modern:hover::before {
        width: 120%;
    }
    
    /* Subtle section separators */
    .section-divider {
        height: 1px;
        width: 100%;
        background: linear-gradient(90deg, transparent, rgba(126, 34, 206, 0.3), transparent);
        margin: 2.5rem 0;
    }
    
    /* Floating elements */
    .floating {
        animation: floating 6s ease-in-out infinite;
    }
    
    .floating-slow {
        animation: floating 8s ease-in-out infinite;
    }
    
    .floating-fast {
        animation: floating 4s ease-in-out infinite;
    }
    
    @keyframes floating {
        0% { transform: translateY(0px); }
        50% { transform: translateY(-15px); }
        100% { transform: translateY(0px); }
    }
    
    /* Skill bars */
    .skill-bar {
        height: 8px;
        border-radius: 4px;
        margin-bottom: 1.5rem;
        background: rgba(243, 244, 246, 0.5);
        overflow: hidden;
    }
    
    .skill-progress {
        height: 100%;
        border-radius: 4px;
        background: linear-gradient(90deg, #9333ea, #4f46e5);
        transform-origin: left;
        transform: scaleX(0);
        transition: transform 1.5s cubic-bezier(0.17, 0.67, 0.43, 0.99);
    }
    
    .skill-progress.animated {
        transform: scaleX(1);
    }
    
    /* Highlighted text */
    .highlight {
        position: relative;
        display: inline-block;
        color: #9333ea;
        z-index: 1;
    }
    
    .highlight::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: -2px;
        right: -2px;
        height: 0.4em;
        background: rgba(147, 51, 234, 0.15);
        z-index: -1;
        transform: rotate(-1deg);
    }
</style>
@endsection

@section('content')
<div class="py-12 sm:py-16 lg:py-20 relative overflow-hidden">
    <!-- Background decoration elements -->
    <div class="absolute -top-20 -right-20 w-72 h-72 bg-gradient-to-b from-purple-200 to-indigo-100 rounded-full opacity-20 blur-3xl floating-slow"></div>
    <div class="absolute top-1/3 left-0 w-40 h-40 bg-gradient-to-tr from-indigo-300 to-blue-200 rounded-full opacity-10 blur-2xl floating"></div>
    <div class="absolute -bottom-32 -left-32 w-96 h-96 bg-gradient-to-tr from-purple-300 to-pink-200 rounded-full opacity-10 blur-3xl floating-fast"></div>
    <div class="absolute right-10 bottom-20 w-24 h-24 bg-gradient-to-tr from-yellow-300 to-amber-200 rounded-full opacity-10 blur-xl floating"></div>
    
    <!-- Decorative line elements -->
    <div class="absolute top-32 right-10 w-32 h-px bg-gradient-to-r from-transparent via-purple-400 to-transparent"></div>
    <div class="absolute bottom-40 left-10 w-32 h-px bg-gradient-to-r from-transparent via-purple-400 to-transparent"></div>
    
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="text-reveal mb-16 text-center fade-up">
            <span>
                <h1 class="text-4xl sm:text-5xl lg:text-7xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-purple-800 via-fuchsia-600 to-indigo-600">About Me</h1>
            </span>
        </div>
        
        <div class="bg-white/80 backdrop-blur-sm p-8 sm:p-10 rounded-2xl shadow-xl fade-up">
            <div class="flex flex-col md:flex-row gap-10 mb-12">
                <div class="md:w-2/5 fade-up stagger-delay-1">
                    <div class="profile-image-container tilt-card">
                        <div class="tilt-card-inner">
                            <img src="{{ asset('images/logo.png') }}" alt="Seraphxx Profile" class="profile-image w-full h-full object-cover">
                            
                            <!-- Floating badges -->
                            <div class="absolute -top-3 -right-3 bg-gradient-to-r from-purple-600 to-indigo-600 text-white px-3 py-1 rounded-full text-sm font-medium shadow-lg transform rotate-3 z-100">Artist</div>
                            <div class="absolute -bottom-3 -left-3 bg-gradient-to-r from-fuchsia-500 to-pink-500 text-white px-3 py-1 rounded-full text-sm font-medium shadow-lg transform -rotate-3 z-100">Musician</div>
                        </div>
                    </div>
                    
                    <!-- Social presence indicators -->
                    <div class="mt-6 flex justify-center gap-3">
                        <div class="flex items-center bg-gray-100 px-3 py-1 rounded-full">
                            <div class="w-2 h-2 bg-green-500 rounded-full mr-2"></div>
                            <span class="text-sm text-gray-600">Available for commissions</span>
                        </div>
                    </div>
                </div>
                
                <div class="md:w-3/5 fade-up stagger-delay-2">
                    <div class="text-reveal mb-4">
                        <span>
                            <h2 class="text-3xl font-semibold mb-6 text-purple-800"><span class="highlight">Hello, I'm Sera!</span></h2>
                        </span>
                    </div>
                    <p class="mb-4 text-lg text-gray-700 leading-relaxed">I am a digital artist, musician, and college student who enjoys creating famous illustrations and character designs. </p>
                    <p class="text-lg text-gray-700 leading-relaxed">When I was still in high school, I started experimenting with various styles and techniques in digital art. I have developed my own distinct style over time, using aspects of anime with my own unique style.</p>
                    
                    <!-- Quick stats -->
                    <div class="grid grid-cols-3 gap-4 mt-8">
                        <div class="text-center group hover:bg-purple-50 p-3 rounded-lg transition-colors duration-300">
                            <span class="block text-3xl font-bold text-purple-600 group-hover:scale-110 transition-transform duration-300">3+</span>
                            <span class="text-sm text-gray-600">Years Experience</span>
                        </div>
                        <div class="text-center group hover:bg-purple-50 p-3 rounded-lg transition-colors duration-300">
                            <span class="block text-3xl font-bold text-purple-600 group-hover:scale-110 transition-transform duration-300">50+</span>
                            <span class="text-sm text-gray-600">Projects</span>
                        </div>
                        <div class="text-center group hover:bg-purple-50 p-3 rounded-lg transition-colors duration-300">
                            <span class="block text-3xl font-bold text-purple-600 group-hover:scale-110 transition-transform duration-300">100%</span>
                            <span class="text-sm text-gray-600">Passion</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="section-divider fade-up"></div>
            
            <div class="mb-12 fade-up stagger-delay-1">
                <div class="text-reveal mb-4">
                    <span>
                        <h3 class="text-2xl font-semibold mb-6 text-purple-700">My Background</h3>
                    </span>
                </div>
                <p class="mb-4 text-lg text-gray-700 leading-relaxed">Currently pursuing a degree in multimedia arts, I balance my academic studies with freelance art commissions and music covers. My education has helped me refine my technical skills, while my passion projects allow me to express my creativity.</p>
                <p class="mb-8 text-lg text-gray-700 leading-relaxed">When I'm not drawing or studying, you can find me creating music covers of my favorite songs or exploring new digital art techniques.</p>
                
                <!-- Skills section -->
                <div class="mt-8 mb-6">
                    <h4 class="text-xl font-semibold text-purple-600 mb-5">My Skills</h4>
                    
                    <div class="mb-4">
                        <div class="flex justify-between mb-2">
                            <span class="font-medium text-gray-700">Digital Illustration</span>
                            <span class="text-sm text-purple-600">95%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" style="width: 95%"></div>
                        </div>
                    </div>
                    
                    <div class="mb-4">
                        <div class="flex justify-between mb-2">
                            <span class="font-medium text-gray-700">Character Design</span>
                            <span class="text-sm text-purple-600">90%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" style="width: 90%"></div>
                        </div>
                    </div>
                    
                    <div class="mb-4">
                        <div class="flex justify-between mb-2">
                            <span class="font-medium text-gray-700">Music</span>
                            <span class="text-sm text-purple-600">85%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" style="width: 85%"></div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="section-divider fade-up"></div>
            
            <div class="mb-12 fade-up stagger-delay-2">
                <div class="text-reveal mb-4">
                    <span>
                        <h3 class="text-2xl font-semibold mb-6 text-purple-700">My Art Style</h3>
                    </span>
                </div>
                
                <!-- Style showcase with tags -->
                <div class="flex flex-wrap gap-3 mb-6">
                    <span class="px-3 py-1 bg-purple-100 text-purple-800 rounded-full text-sm">Anime-inspired</span>
                    <span class="px-3 py-1 bg-purple-100 text-purple-800 rounded-full text-sm">Colorful</span>
                    <span class="px-3 py-1 bg-purple-100 text-purple-800 rounded-full text-sm">Character-focused</span>
                    <span class="px-3 py-1 bg-purple-100 text-purple-800 rounded-full text-sm">Expressive</span>
                    <span class="px-3 py-1 bg-purple-100 text-purple-800 rounded-full text-sm">Clean lines</span>
                    <span class="px-3 py-1 bg-purple-100 text-purple-800 rounded-full text-sm">Vibrant colors</span>
                </div>
                
                <p class="mb-4 text-lg text-gray-700 leading-relaxed">My art style can be described as colorful, expressive, and character-focused. I enjoy creating emotive portraits and dynamic full-body illustrations that tell a story.</p>
                <p class="text-lg text-gray-700 leading-relaxed">I primarily work with digital tools, specializing in character design, icons, and illustrations with clean lines and vibrant colors.</p>
                
                <!-- Art process steps -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
                    <div class="bg-purple-50 p-5 rounded-xl">
                        <div class="w-12 h-12 bg-purple-600 text-white rounded-full flex items-center justify-center mb-3 font-bold">1</div>
                        <h5 class="font-semibold text-purple-800 mb-2">Sketch</h5>
                        <p class="text-gray-600">I start with rough sketches to explore compositions and poses.</p>
                    </div>
                    
                    <div class="bg-purple-50 p-5 rounded-xl">
                        <div class="w-12 h-12 bg-purple-600 text-white rounded-full flex items-center justify-center mb-3 font-bold">2</div>
                        <h5 class="font-semibold text-purple-800 mb-2">Line Art</h5>
                        <p class="text-gray-600">I create clean, expressive lines that define the character's form.</p>
                    </div>
                    
                    <div class="bg-purple-50 p-5 rounded-xl">
                        <div class="w-12 h-12 bg-purple-600 text-white rounded-full flex items-center justify-center mb-3 font-bold">3</div>
                        <h5 class="font-semibold text-purple-800 mb-2">Color & Polish</h5>
                        <p class="text-gray-600">I add vibrant colors, shading and final details to bring the piece to life.</p>
                    </div>
                </div>
            </div>
            
            <div class="section-divider fade-up"></div>
            
            <div class="fade-up stagger-delay-3">
                <div class="text-reveal mb-4">
                    <span>
                        <h3 class="text-2xl font-semibold mb-6 text-purple-700">Let's Connect!</h3>
                    </span>
                </div>
                <p class="mb-4 text-lg text-gray-700 leading-relaxed">I'm always open to new commission opportunities and collaborations. Whether you need character art, illustrations, or icons, I'd love to bring your ideas to life.</p>
                <p class="text-lg text-gray-700 leading-relaxed">Feel free to reach out via <a href="https://ngl.link/seraphxx" class="hover-link text-purple-600 hover:text-purple-800">ngl.link</a> or check out my commission information for details on working together.</p>
                
                <!-- Contact options -->
                <div class="flex flex-wrap gap-4 mt-8 justify-center">
                    <a href="{{ route('contact') }}" class="inline-block relative overflow-hidden group px-8 py-3 bg-white text-purple-700 font-medium rounded-full shadow-md border border-purple-200">
                        <span class="relative z-10 group-hover:text-white transition-colors duration-300">Send Message →</span>
                        <span class="absolute inset-0 w-full h-full bg-gradient-to-r from-purple-500 to-blue-500 -translate-x-full group-hover:translate-x-0 transition-transform duration-300"></span>
                    </a>
                    
                    <a href="https://ngl.link/seraphxx" class="inline-block relative overflow-hidden group px-8 py-3 bg-white text-purple-700 font-medium rounded-full shadow-md border border-purple-200">
                        <span class="relative z-10 group-hover:text-white transition-colors duration-300">ngl.link →</span>
                        <span class="absolute inset-0 w-full h-full bg-gradient-to-r from-purple-500 to-blue-500 -translate-x-full group-hover:translate-x-0 transition-transform duration-300"></span>
                    </a>
                </div>
            </div>
        </div>
        
        <div class="mt-12 text-center fade-up stagger-delay-4">
            <a href="{{ route('commissions') }}" class="inline-block px-8 py-3 bg-purple-600 text-white rounded-full hover:bg-purple-700 transform hover:scale-105 transition-all duration-300 shadow-md hover:shadow-lg">View Commission Services →</a>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize animations on page load
        const fadeElements = document.querySelectorAll('.fade-up');
        const textRevealElements = document.querySelectorAll('.text-reveal');
        const skillBars = document.querySelectorAll('.skill-progress');
        
        // Activate initial animations with slight delay
        setTimeout(() => {
            fadeElements.forEach(el => el.classList.add('active'));
            textRevealElements.forEach(el => el.classList.add('active'));
        }, 300);
        
        // Animate skill bars when visible
        const skillObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animated');
                    skillObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });
        
        skillBars.forEach(bar => {
            skillObserver.observe(bar);
        });
        
        // Scroll animations
        const handleScroll = () => {
            fadeElements.forEach(el => {
                const rect = el.getBoundingClientRect();
                const windowHeight = window.innerHeight;
                
                if (rect.top <= windowHeight * 0.85 && !el.classList.contains('active')) {
                    el.classList.add('active');
                }
            });
            
            textRevealElements.forEach(el => {
                const rect = el.getBoundingClientRect();
                const windowHeight = window.innerHeight;
                
                if (rect.top <= windowHeight * 0.85 && !el.classList.contains('active')) {
                    el.classList.add('active');
                }
            });
        };
        
        window.addEventListener('scroll', handleScroll);
        handleScroll(); // Trigger on initial load
        
        // Initialize tilt effect for profile image if on desktop
        if (window.innerWidth > 768) {
            const tiltElements = document.querySelectorAll('.tilt-card');
            
            tiltElements.forEach(element => {
                const inner = element.querySelector('.tilt-card-inner');
                
                element.addEventListener('mousemove', (e) => {
                    const rect = element.getBoundingClientRect();
                    const x = e.clientX - rect.left;
                    const y = e.clientY - rect.top;
                    
                    const centerX = rect.width / 2;
                    const centerY = rect.height / 2;
                    
                    const rotateX = (y - centerY) / 15;
                    const rotateY = (centerX - x) / 15;
                    
                    inner.style.transform = `rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
                });
                
                element.addEventListener('mouseleave', () => {
                    inner.style.transition = 'transform 0.5s ease';
                    inner.style.transform = 'rotateX(0) rotateY(0)';
                    
                    setTimeout(() => {
                        inner.style.transition = '';
                    }, 500);
                });
            });
        }
        
        // GSAP animations if available
        if (typeof gsap !== 'undefined') {
            gsap.to('.profile-image-container', {
                scrollTrigger: {
                    trigger: '.profile-image-container',
                    start: 'top bottom-=100',
                    toggleActions: 'play none none none'
                },
                duration: 1,
                clipPath: 'inset(0% 0% 0% 0%)',
                ease: 'power3.out',
                opacity: 1,
                y: 0,
                stagger: 0.2,
                from: {
                    clipPath: 'inset(5% 5% 5% 5%)',
                    opacity: 0,
                    y: 50
                }
            });
        }
    });
</script>
@endsection 