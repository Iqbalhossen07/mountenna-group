/**
 * ==========================================================================
 * Mountenna Group - Main JavaScript File
 *
 * This file handles all the interactivity for the website.
 * ==========================================================================
 */

// --------------------------------------------------------------------------
// Global State & Variables
// --------------------------------------------------------------------------

let currentSlide = 0;
let isAutoplay = true;
let autoplayInterval;
let activeTimeline = 0;
let touchStartX = 0;
let touchEndX = 0;
let currentTestimonial = 0;

// --------------------------------------------------------------------------
// Initialization
// --------------------------------------------------------------------------

/**
 * Main entry point. Fires when the DOM is fully loaded.
 */
document.addEventListener('DOMContentLoaded', () => {
    // Initialize all interactive components
    initializeSlider();
    initializeCounters();
    initializeScrollAnimations();
    initializeContactForm();
    initializeLazyLoading();
    initializeImageHandling();
    initializeSmoothScrolling();
    initializeTestimonialSlider();

    // Attach global event listeners
    attachEventListeners();

    console.log('Mountenna Group website loaded successfully!');
});


// --------------------------------------------------------------------------
// Section 1: Hero Slider
// --------------------------------------------------------------------------

function initializeSlider() {
    const slides = document.querySelectorAll('#slider-container .slide');
    if (slides.length > 0) {
        showSlide(currentSlide);
        startAutoplay();
    }
}

function showSlide(index) {
    const slides = document.querySelectorAll('#slider-container .slide');
    slides.forEach((slide, i) => {
        if (i === index) {
            slide.classList.add('active');
            const animatedContent = slide.querySelector('.animate-fade-in-up');
            if (animatedContent) {
                animatedContent.classList.remove('animate-fade-in-up');
                void animatedContent.offsetWidth; // Trigger reflow
                animatedContent.classList.add('animate-fade-in-up');
            }
        } else {
            slide.classList.remove('active');
        }
    });
    updateSlideIndicators(index);
}

function nextSlide() {
    const totalSlides = document.querySelectorAll('#slider-container .slide').length;
    currentSlide = (currentSlide + 1) % totalSlides;
    showSlide(currentSlide);
}

function prevSlide() {
    const totalSlides = document.querySelectorAll('#slider-container .slide').length;
    currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
    showSlide(currentSlide);
}

function goToSlide(index) {
    currentSlide = index;
    showSlide(currentSlide);
}

function updateSlideIndicators(activeIndex) {
    const indicators = document.querySelectorAll('.slide-indicator');
    indicators.forEach((indicator, index) => {
        if (index === activeIndex) {
            indicator.classList.add('bg-white', 'scale-125');
            indicator.classList.remove('bg-white/50');
        } else {
            indicator.classList.remove('bg-white', 'scale-125');
            indicator.classList.add('bg-white/50');
        }
    });
}

function startAutoplay() {
    if (autoplayInterval) clearInterval(autoplayInterval);
    autoplayInterval = setInterval(nextSlide, 6000);
}

function stopAutoplay() {
    if (autoplayInterval) {
        clearInterval(autoplayInterval);
        autoplayInterval = null;
    }
}

function toggleAutoplay() {
    isAutoplay = !isAutoplay;
    const icon = document.getElementById('playPauseIcon');
    if (isAutoplay) {
        if (icon) icon.className = 'fas fa-pause';
        startAutoplay();
    } else {
        if (icon) icon.className = 'fas fa-play';
        stopAutoplay();
    }
}

// --------------------------------------------------------------------------
// Section 2: Other Sliders & Tabs
// --------------------------------------------------------------------------

function initializeTestimonialSlider() {
    const track = document.getElementById('testimonial-track');
    if (track) {
        updateTestimonialPosition();
    }
}

function updateTestimonialPosition() {
    const track = document.getElementById('testimonial-track');
    const offset = -currentTestimonial * 100;
    track.style.transform = `translateX(${offset}%)`;
}

function nextTestimonial() {
    const totalSlides = document.querySelectorAll('.testimonial-slide').length;
    currentTestimonial = (currentTestimonial + 1) % totalSlides;
    updateTestimonialPosition();
}

function prevTestimonial() {
    const totalSlides = document.querySelectorAll('.testimonial-slide').length;
    currentTestimonial = (currentTestimonial - 1 + totalSlides) % totalSlides;
    updateTestimonialPosition();
}

function changeTab(index) {
    const tabs = document.querySelectorAll('.case-study-tab');
    const contents = document.querySelectorAll('.case-study-content');
    tabs.forEach((tab, i) => {
        tab.classList.toggle('active-tab', i === index);
    });
    contents.forEach((content, i) => {
        content.classList.toggle('hidden', i !== index);
        content.classList.toggle('opacity-0', i !== index);
    });
}


// --------------------------------------------------------------------------
// Section 3: General UI & Interactivity
// --------------------------------------------------------------------------

function toggleMobileMenu() {
    const mobileMenu = document.getElementById('mobile-menu');
    const menuBtn = document.getElementById('mobile-menu-btn');
    const icon = menuBtn.querySelector('i');

    mobileMenu.classList.toggle('active');
    icon.className = mobileMenu.classList.contains('active') ? 'fas fa-times text-xl' : 'fas fa-bars text-xl';
}

function initializeScrollAnimations() {
    const animatedElements = document.querySelectorAll('.card-hover, .icon-hover');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-fade-in');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });
    animatedElements.forEach(element => observer.observe(element));
}

function initializeCounters() {
    const counters = document.querySelectorAll('.animate-counter[data-count]');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const counter = entry.target;
                const target = parseInt(counter.dataset.count, 10);
                animateCounter(counter, target);
                observer.unobserve(counter);
            }
        });
    }, { threshold: 0.5, rootMargin: '0px 0px -50px 0px' });
    counters.forEach(counter => observer.observe(counter));
}

function animateCounter(element, target) {
    let current = 0;
    const increment = target / 60;
    const timer = setInterval(() => {
        current += increment;
        if (current >= target) {
            clearInterval(timer);
            element.textContent = target;
        } else {
            element.textContent = Math.floor(current);
        }
    }, 16);
}

function setActiveTimeline(index) {
    activeTimeline = index;
    const timelineItems = document.querySelectorAll('.timeline-item');
    timelineItems.forEach((item, i) => {
        item.style.opacity = (i === index) ? '1' : '0.75';
    });
}

function initializeContactForm() {
    const form = document.getElementById('contactForm');
    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Thank you for your message! We will get back to you soon.');
            form.reset();
        });
    }
}

function initializeSmoothScrolling() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                targetElement.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    });
}

function scrollToSection(sectionId) {
    const element = document.getElementById(sectionId);
    if (element) {
        element.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }
}

// --------------------------------------------------------------------------
// Section 4: Global Event Listeners & Performance
// --------------------------------------------------------------------------

function attachEventListeners() {
    window.addEventListener('scroll', () => {
        const nav = document.querySelector('nav');
        if (nav) nav.classList.toggle('shadow-lg', window.scrollY > 100);
    });

    document.addEventListener('keydown', (e) => {
        if (e.key === 'ArrowLeft') prevSlide();
        if (e.key === 'ArrowRight') nextSlide();
    });

    document.addEventListener('touchstart', (e) => { touchStartX = e.changedTouches[0].screenX; });
    document.addEventListener('touchend', (e) => {
        touchEndX = e.changedTouches[0].screenX;
        handleSwipe();
    });
}

function handleSwipe() {
    const swipeThreshold = 50;
    const diff = touchStartX - touchEndX;
    if (Math.abs(diff) > swipeThreshold) {
        if (diff > 0) nextSlide();
        else prevSlide();
    }
}

function initializeLazyLoading() {
    const images = document.querySelectorAll('img[data-src]');
    const imageObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.classList.remove('opacity-0');
                imageObserver.unobserve(img);
            }
        });
    });
    images.forEach(img => imageObserver.observe(img));
}

function initializeImageHandling() {
    document.querySelectorAll('img').forEach(img => {
        img.addEventListener('load', () => img.classList.add('loaded'));
        img.addEventListener('error', () => img.classList.add('error'));
    });
}


/**
 * Toggles the mobile services sub-menu.
 * @param {Event} event - The click event.
 */
function toggleServiceMenu(event) {
    // Prevent the link from navigating
    event.preventDefault();
    // Stop the click from bubbling up to parent elements
    event.stopPropagation();
    
    const menu = document.getElementById('mobile-service-menu');
    const icon = event.currentTarget.querySelector('i');
    
    // Check if the menu is open by checking its maxHeight
    if (menu.style.maxHeight) {
        menu.style.maxHeight = null; // Close the menu
        icon.classList.remove('rotate-180');
    } else {
        menu.style.maxHeight = menu.scrollHeight + "px"; // Open the menu
        icon.classList.add('rotate-180');
    }
}
