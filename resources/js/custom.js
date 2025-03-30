/**
 * Modern animations and interactions for awwwards-style website
 */

document.addEventListener('DOMContentLoaded', function () {
    // Initialize all animations and interactions
    initTextSplit();
    initScrollAnimations();
    initParallaxEffects();
    initMagneticButtons();
    initTiltEffect();
    initPageTransitions();
});

/**
 * Text split animation
 * Splits text elements into individual spans for character-by-character animations
 */
function initTextSplit() {
    const splitTextElements = document.querySelectorAll('.split-text');

    splitTextElements.forEach(element => {
        const text = element.textContent;
        element.textContent = '';

        // Split text into individual characters with staggered delays
        Array.from(text).forEach((char, index) => {
            const span = document.createElement('span');
            span.textContent = char === ' ' ? '\u00A0' : char; // Replace spaces with non-breaking spaces
            span.style.transitionDelay = `${index * 0.03}s`;
            element.appendChild(span);
        });

        // Create intersection observer to reveal text when in viewport
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('reveal');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.2 });

        observer.observe(element);
    });
}

/**
 * Scroll-based animations using Intersection Observer
 */
function initScrollAnimations() {
    const animatedElements = document.querySelectorAll('.appear-left, .appear-right, .appear-bottom, .scale-in');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('in-view');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.15, rootMargin: '0px 0px -10% 0px' });

    animatedElements.forEach(element => {
        observer.observe(element);
    });
}

/**
 * Parallax scroll effects for images and background elements
 */
function initParallaxEffects() {
    const parallaxElements = document.querySelectorAll('.parallax-image, .deco-circle');

    // Early return if no parallax elements found
    if (parallaxElements.length === 0) return;

    // Enable only on desktop
    if (window.innerWidth <= 768) return;

    window.addEventListener('scroll', () => {
        const scrollPosition = window.pageYOffset;

        parallaxElements.forEach(element => {
            const elementTop = element.getBoundingClientRect().top + scrollPosition;
            const elementBottom = elementTop + element.offsetHeight;

            // Only apply parallax if element is in viewport
            if (scrollPosition + window.innerHeight > elementTop && scrollPosition < elementBottom) {
                const distance = (scrollPosition - elementTop) * 0.15;
                const speed = element.dataset.speed || 0.1;

                if (element.classList.contains('parallax-image')) {
                    const translateY = distance * speed;
                    element.querySelector('img').style.transform = `scale(1.05) translateY(${translateY}px)`;
                } else if (element.classList.contains('deco-circle')) {
                    const translateY = distance * speed;
                    element.style.transform = `translateY(${translateY}px)`;
                }
            }
        });
    });
}

/**
 * Magnetic effect for buttons
 */
function initMagneticButtons() {
    const buttons = document.querySelectorAll('.magnetic-btn');

    // Early return if no magnetic buttons or on mobile
    if (buttons.length === 0 || window.innerWidth <= 768) return;

    buttons.forEach(button => {
        button.addEventListener('mousemove', (e) => {
            const rect = button.getBoundingClientRect();
            const centerX = rect.left + rect.width / 2;
            const centerY = rect.top + rect.height / 2;

            const distanceX = e.clientX - centerX;
            const distanceY = e.clientY - centerY;

            // Calculate strength based on distance from center
            const strength = 15; // Maximum pixel movement
            const moveX = distanceX / rect.width * strength;
            const moveY = distanceY / rect.height * strength;

            button.style.transform = `translate3d(${moveX}px, ${moveY}px, 0)`;
        });

        button.addEventListener('mouseleave', () => {
            // Reset position with transition
            button.style.transition = 'transform 0.3s ease';
            button.style.transform = 'translate3d(0, 0, 0)';

            // Remove transition after animation completes
            setTimeout(() => {
                button.style.transition = '';
            }, 300);
        });
    });
}

/**
 * Tilt effect for cards
 */
function initTiltEffect() {
    const cards = document.querySelectorAll('.tilt-card');

    // Early return if no tilt cards or on mobile
    if (cards.length === 0 || window.innerWidth <= 768) return;

    cards.forEach(card => {
        const inner = card.querySelector('.tilt-card-inner');

        card.addEventListener('mousemove', (e) => {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;

            const centerX = rect.width / 2;
            const centerY = rect.height / 2;

            const rotateX = (y - centerY) / 10;
            const rotateY = (centerX - x) / 10;

            inner.style.transform = `rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
        });

        card.addEventListener('mouseleave', () => {
            inner.style.transition = 'transform 0.5s ease';
            inner.style.transform = 'rotateX(0) rotateY(0)';

            setTimeout(() => {
                inner.style.transition = '';
            }, 500);
        });
    });
}

/**
 * Page transition effects
 */
function initPageTransitions() {
    // Create page transition wrapper if it doesn't exist
    let transitionWrapper = document.querySelector('.page-transition-wrapper');

    if (!transitionWrapper) {
        transitionWrapper = document.createElement('div');
        transitionWrapper.classList.add('page-transition-wrapper');
        document.body.appendChild(transitionWrapper);
    }

    // Listen for internal link clicks to trigger page transition
    document.querySelectorAll('a').forEach(link => {
        // Only apply to internal links
        if (link.href && link.href.indexOf(window.location.origin) === 0 && !link.target) {
            link.addEventListener('click', (e) => {
                const destination = link.href;

                // Don't capture if modifier keys are pressed
                if (e.metaKey || e.ctrlKey) return;

                e.preventDefault();

                // Trigger transition animation
                transitionWrapper.classList.add('active');

                // Navigate to new page after animation
                setTimeout(() => {
                    window.location.href = destination;
                }, 600); // Half the animation time
            });
        }
    });

    // On page load, handle back button navigation
    window.addEventListener('pageshow', (e) => {
        // If navigating via back button, remove active class
        if (e.persisted) {
            transitionWrapper.classList.remove('active');
        }
    });
}

/**
 * Custom cursor follower with attraction effect
 * This is an enhanced version of the existing cursor follower
 */
function initEnhancedCursor() {
    const cursor = document.querySelector('.cursor-follower');

    if (!cursor || window.innerWidth <= 768) return;

    // Variables for smooth movement
    let clientX = -100;
    let clientY = -100;
    let lastX = -100;
    let lastY = -100;

    // Update cursor position with smooth interpolation
    const updateCursor = () => {
        // Interpolate position for smoother movement
        lastX = lerp(lastX, clientX, 0.16);
        lastY = lerp(lastY, clientY, 0.16);

        cursor.style.transform = `translate(${lastX}px, ${lastY}px) translate(-50%, -50%)`;

        requestAnimationFrame(updateCursor);
    };

    // Linear interpolation function for smooth movement
    function lerp(start, end, factor) {
        return start + (end - start) * factor;
    }

    document.addEventListener('mousemove', (e) => {
        clientX = e.clientX;
        clientY = e.clientY;
    });

    // Handle link hover states
    document.querySelectorAll('a, button').forEach(el => {
        el.addEventListener('mouseenter', () => {
            cursor.classList.add('link-hover');
        });

        el.addEventListener('mouseleave', () => {
            cursor.classList.remove('link-hover');
        });
    });

    // Start animation loop
    requestAnimationFrame(updateCursor);
}