document.addEventListener('DOMContentLoaded', function() {
    // Typewriter effect
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

    // Scroll reveal animation
    const revealOnScroll = function() {
        const elements = document.querySelectorAll('.scroll-reveal');
        const windowHeight = window.innerHeight;

        elements.forEach(function(element) {
            const elementTop = element.getBoundingClientRect().top;

            if (elementTop < windowHeight - 100) {
                element.classList.add('visible');
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
    
    // Add auto-scroll class to images that are taller than their containers
    const allImages = document.querySelectorAll('.portfolio-item img, .image-hover .aspect-square img');
    allImages.forEach(img => {
        // When image is loaded, check if it needs auto-scrolling
        img.onload = function() {
            // If the natural height is significantly larger than the displayed height
            if (this.naturalHeight > this.offsetHeight * 1.2) {
                this.classList.add('auto-scroll');
                
                // Randomize animation delay for more natural feel
                const delay = Math.random() * 5; // Random delay between 0-5s
                this.style.animationDelay = `-${delay}s`;
            }
        };
        
        // If image is already loaded
        if (img.complete) {
            img.onload();
        }
    });
    
    // Image Modal Functionality
    const modal = document.getElementById('imageModal');
    const modalImg = document.getElementById('modalImage');
    const closeBtn = document.getElementById('closeModal');
    const modalTriggers = document.querySelectorAll('.modal-trigger');
    
    // Open modal when clicking on an image
    modalTriggers.forEach(img => {
        img.addEventListener('click', function() {
            modalImg.src = this.src;
            modal.classList.add('active');
            modal.classList.remove('hidden');
            document.body.style.overflow = 'hidden'; // Prevent scrolling when modal is open
        });
    });
    
    // Close modal when clicking the close button
    closeBtn.addEventListener('click', function() {
        closeModal();
    });
    
    // Close modal when clicking outside the image
    modal.addEventListener('click', function(e) {
        if (e.target === modal || e.target.classList.contains('absolute')) {
            closeModal();
        }
    });
    
    // Close modal with escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && modal.classList.contains('active')) {
            closeModal();
        }
    });
    
    function closeModal() {
        modal.classList.remove('active');
        setTimeout(() => {
            modal.classList.add('hidden');
            document.body.style.overflow = ''; // Re-enable scrolling
        }, 300);
    }
}); 