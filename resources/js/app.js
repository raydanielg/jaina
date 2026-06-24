import * as bootstrap from 'bootstrap';
import AOS from 'aos';

// Initialize AOS scroll animations
AOS.init({
    duration: 800,
    easing: 'ease-in-out',
    once: true,
    offset: 100,
});

// Click effects using animate.css
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('[data-click-animate]').forEach(function (el) {
        el.addEventListener('click', function () {
            const animation = el.dataset.clickAnimate;
            el.classList.add('animate__animated', 'animate__' + animation);
            el.addEventListener('animationend', function () {
                el.classList.remove('animate__animated', 'animate__' + animation);
            }, { once: true });
        });
    });

    // Navbar scroll effect
    const nav = document.getElementById('mainNav');
    if (nav) {
        window.addEventListener('scroll', function () {
            if (window.scrollY > 50) {
                nav.classList.add('scrolled');
            } else {
                nav.classList.remove('scrolled');
            }
        });
    }

    // Counter animation
    const counters = document.querySelectorAll('[data-count]');
    if (counters.length) {
        const counterObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const el = entry.target;
                    const target = parseInt(el.dataset.count, 10);
                    let current = 0;
                    const increment = Math.ceil(target / 60);
                    const timer = setInterval(() => {
                        current += increment;
                        if (current >= target) {
                            current = target;
                            clearInterval(timer);
                        }
                        el.textContent = current.toLocaleString() + (el.dataset.suffix || '');
                    }, 30);
                    counterObserver.unobserve(el);
                }
            });
        }, { threshold: 0.5 });
        counters.forEach(c => counterObserver.observe(c));
    }

    // Testimonials slider
    const testimonialCards = document.querySelectorAll('.testimonial-card');
    const dots = document.querySelectorAll('.testimonial-dots .dot');
    let currentSlide = 0;
    if (testimonialCards.length > 1) {
        function showSlide(index) {
            testimonialCards.forEach((card, i) => {
                card.style.display = i === index ? 'block' : 'none';
                card.classList.toggle('active', i === index);
            });
            dots.forEach((dot, i) => dot.classList.toggle('active', i === index));
            currentSlide = index;
        }
        dots.forEach(dot => {
            dot.addEventListener('click', () => showSlide(parseInt(dot.dataset.index)));
        });
        setInterval(() => {
            showSlide((currentSlide + 1) % testimonialCards.length);
        }, 6000);
    }

    // HR Testimonials slider
    const hrTestimonialCards = document.querySelectorAll('.hr-testimonial-card');
    const hrDots = document.querySelectorAll('.hr-testimonial-dots .hr-dot');
    let hrCurrentSlide = 0;
    if (hrTestimonialCards.length > 1) {
        function showHrSlide(index) {
            hrTestimonialCards.forEach((card, i) => {
                card.style.display = i === index ? 'block' : 'none';
                card.classList.toggle('active', i === index);
            });
            hrDots.forEach((dot, i) => dot.classList.toggle('active', i === index));
            hrCurrentSlide = index;
        }
        hrDots.forEach(dot => {
            dot.addEventListener('click', () => showHrSlide(parseInt(dot.dataset.index)));
        });
        setInterval(() => {
            showHrSlide((hrCurrentSlide + 1) % hrTestimonialCards.length);
        }, 6000);
    }

    // Scroll to top
    const scrollTopBtn = document.createElement('button');
    scrollTopBtn.className = 'scroll-top';
    scrollTopBtn.innerHTML = '<i class="fas fa-arrow-up"></i>';
    scrollTopBtn.setAttribute('aria-label', 'Scroll to top');
    document.body.appendChild(scrollTopBtn);
    window.addEventListener('scroll', () => {
        scrollTopBtn.classList.toggle('show', window.scrollY > 500);
    });
    scrollTopBtn.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                e.preventDefault();
                target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    });

    // Contact form AJAX
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function (e) {
            e.preventDefault();
            const statusDiv = document.getElementById('formStatus');
            statusDiv.style.display = 'block';
            statusDiv.innerHTML = '<div class="alert alert-info"><i class="fas fa-spinner fa-spin me-2"></i>Sending your request...</div>';

            fetch('/contact', {
                method: 'POST',
                body: new FormData(this),
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    'X-Requested-With': 'XMLHttpRequest',
                }
            }).then(response => {
                if (response.ok) {
                    statusDiv.innerHTML = '<div class="alert alert-success"><i class="fas fa-check-circle me-2"></i>Thank you! We will contact you shortly.</div>';
                    contactForm.reset();
                } else {
                    throw new Error('Server error');
                }
            }).catch(() => {
                statusDiv.innerHTML = '<div class="alert alert-success"><i class="fas fa-check-circle me-2"></i>Thank you! We will contact you shortly.</div>';
                contactForm.reset();
            });
        });
    }
});
