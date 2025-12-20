/**
 * ========================================
 * MAHIRA TOUR - HOME PAGE JAVASCRIPT
 * Interactive Features & Animations
 * ======================================== */

document.addEventListener('DOMContentLoaded', function() {
    
    // ===== HERO SLIDER WITH 5 SLIDES & SIDE CONTROLS =====
    const slides = document.querySelectorAll('.hero-slide');
    const dots = document.querySelectorAll('.slider-dot');
    const prevBtn = document.querySelector('.slider-prev');
    const nextBtn = document.querySelector('.slider-next');
    let currentSlide = 0;
    const slideInterval = 7000; // 7 seconds per slide
    let isTransitioning = false;
    
    function showSlide(index) {
        if (isTransitioning) return;
        isTransitioning = true;
        
        // Remove active from current slide
        slides[currentSlide].classList.remove('active');
        slides[currentSlide].classList.add('slide-out');
        
        // Update dots
        dots.forEach(dot => dot.classList.remove('active'));
        
        // Smooth transition delay
        setTimeout(() => {
            slides[currentSlide].classList.remove('slide-out');
            
            // Update current slide
            currentSlide = index;
            
            // Show new slide with content animation
            slides[currentSlide].classList.add('active');
            dots[currentSlide].classList.add('active');
            
            setTimeout(() => {
                isTransitioning = false;
            }, 400);
        }, 150);
    }
    
    function nextSlide() {
        if (isTransitioning) return;
        const nextIndex = (currentSlide + 1) % slides.length;
        showSlide(nextIndex);
    }
    
    function prevSlide() {
        if (isTransitioning) return;
        const prevIndex = (currentSlide - 1 + slides.length) % slides.length;
        showSlide(prevIndex);
    }
    
    // Auto slide
    let autoSlide = setInterval(nextSlide, slideInterval);
    
    // Navigation buttons
    if (nextBtn) {
        nextBtn.addEventListener('click', () => {
            nextSlide();
            resetAutoSlide();
        });
    }
    
    if (prevBtn) {
        prevBtn.addEventListener('click', () => {
            prevSlide();
            resetAutoSlide();
        });
    }
    
    // Dot click handlers
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            if (index !== currentSlide && !isTransitioning) {
                showSlide(index);
                resetAutoSlide();
            }
        });
    });
    
    // Keyboard navigation
    document.addEventListener('keydown', (e) => {
        if (e.key === 'ArrowLeft') {
            prevSlide();
            resetAutoSlide();
        } else if (e.key === 'ArrowRight') {
            nextSlide();
            resetAutoSlide();
        }
    });
    
    // Reset auto slide interval
    function resetAutoSlide() {
        clearInterval(autoSlide);
        autoSlide = setInterval(nextSlide, slideInterval);
    }
    
    // Pause on hover for better UX
    const heroSection = document.querySelector('.hero-section');
    if (heroSection) {
        heroSection.addEventListener('mouseenter', () => {
            clearInterval(autoSlide);
        });
        
        heroSection.addEventListener('mouseleave', () => {
            autoSlide = setInterval(nextSlide, slideInterval);
        });
    }
    
    // Touch swipe support for mobile
    let touchStartX = 0;
    let touchEndX = 0;
    
    if (heroSection) {
        heroSection.addEventListener('touchstart', (e) => {
            touchStartX = e.changedTouches[0].screenX;
        }, { passive: true });
        
        heroSection.addEventListener('touchend', (e) => {
            touchEndX = e.changedTouches[0].screenX;
            handleSwipe();
        }, { passive: true });
    }
    
    function handleSwipe() {
        const swipeThreshold = 50;
        const diff = touchStartX - touchEndX;
        
        if (Math.abs(diff) > swipeThreshold) {
            if (diff > 0) {
                // Swipe left - next slide
                nextSlide();
            } else {
                // Swipe right - previous slide
                prevSlide();
            }
            resetAutoSlide();
        }
    }
    
    // ===== FILTER TABS =====
    const filterTabs = document.querySelectorAll('.filter-tab');
    
    filterTabs.forEach(tab => {
        tab.addEventListener('click', function() {
            filterTabs.forEach(t => t.classList.remove('active'));
            this.classList.add('active');
            
            // Add filter animation
            const cards = document.querySelectorAll('.schedule-card');
            cards.forEach((card, index) => {
                card.style.animation = 'none';
                setTimeout(() => {
                    card.style.animation = `fadeInUp 0.5s ease-out ${index * 0.1}s forwards`;
                }, 10);
            });
        });
    });
    
    // ===== SCROLL ANIMATIONS =====
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);
    
    document.querySelectorAll('.schedule-card, .feature-card, .stat-item').forEach(card => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(30px)';
        card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(card);
    });
    
    // ===== COUNTER ANIMATION =====
    const counters = document.querySelectorAll('.stat-number');
    const counterSpeed = 200;
    
    const countObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const counter = entry.target;
                const target = counter.textContent.replace(/[^0-9]/g, '');
                const isPercentage = counter.textContent.includes('%');
                const isKFormat = counter.textContent.includes('K');
                let count = 0;
                
                const updateCount = () => {
                    const increment = target / counterSpeed;
                    
                    if (count < target) {
                        count += increment;
                        if (isPercentage) {
                            counter.textContent = Math.ceil(count) + '%';
                        } else if (isKFormat) {
                            counter.textContent = Math.ceil(count / 1000) + 'K+';
                        } else {
                            counter.textContent = Math.ceil(count) + '+';
                        }
                        setTimeout(updateCount, 10);
                    } else {
                        counter.textContent = counter.getAttribute('data-original');
                    }
                };
                
                counter.setAttribute('data-original', counter.textContent);
                updateCount();
                countObserver.unobserve(counter);
            }
        });
    }, { threshold: 0.5 });
    
    counters.forEach(counter => countObserver.observe(counter));
    
    // ===== REAL-TIME SEAT COUNTER =====
    const seatCounters = document.querySelectorAll('.schedule-seats-count');
    
    function updateSeatCounters() {
        seatCounters.forEach(counter => {
            const text = counter.textContent;
            if (text.includes('/')) {
                const [current, total] = text.split('/').map(num => parseInt(num));
                
                // Randomly decrease available seats (simulate bookings)
                if (Math.random() > 0.97 && current > 5) {
                    const newCurrent = current - 1;
                    counter.textContent = `${newCurrent}/${total}`;
                    
                    // Add pulse animation
                    counter.parentElement.style.animation = 'pulse 0.5s ease';
                    setTimeout(() => {
                        counter.parentElement.style.animation = '';
                    }, 500);
                    
                    // Update color based on availability
                    const percentage = (newCurrent / total) * 100;
                    if (percentage < 30) {
                        counter.classList.add('limited');
                        counter.classList.remove('available');
                    }
                }
            }
        });
    }
    
    // Update seat counters every 10 seconds
    setInterval(updateSeatCounters, 10000);
    
    // ===== SMOOTH SCROLL FOR ANCHORS =====
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
    
    // ===== PARALLAX EFFECT =====
    window.addEventListener('scroll', () => {
        const scrolled = window.pageYOffset;
        const parallaxElements = document.querySelectorAll('.islamic-pattern');
        
        parallaxElements.forEach(el => {
            const speed = 0.5;
            el.style.transform = `translateY(${scrolled * speed}px)`;
        });
    });
});