<?php get_header(); ?>
<!-- Background Pattern -->
<svg class="bg-pattern" viewBox="0 0 1000 1000" preserveAspectRatio="xMidYMid slice">
    <defs>
        <pattern id="jungle-pattern" x="0" y="0" width="200" height="200" patternUnits="userSpaceOnUse">
            <path d="M20 100 Q50 60, 80 100 T140 100" stroke="#2d5a3d" fill="none" stroke-width="1.5" opacity="0.6" />
            <path d="M60 40 Q90 80, 120 40" stroke="#8b6914" fill="none" stroke-width="1" opacity="0.4" />
            <circle cx="150" cy="150" r="3" fill="#2d5a3d" opacity="0.5" />
            <path d="M10 180 Q40 160, 70 180 T130 180" stroke="#2d5a3d" fill="none" stroke-width="1" opacity="0.3" />
            <path d="M180 20 L180 80" stroke="#8b6914" stroke-width="1" opacity="0.3" />
            <circle cx="30" cy="30" r="2" fill="#8b6914" opacity="0.4" />
        </pattern>
    </defs>
    <rect width="100%" height="100%" fill="url(#jungle-pattern)" />
</svg>

<div class="content-wrapper">
    <!-- Hero Section -->
    <section class="hero" id="hero">
        <div class="hero-content">
            <p>Welcome to my digital garden. I'm a junior web developer cultivating code at the intersection of Asian-African heritage, where diverse perspectives bloom into creative solutions.</p>
            <p>I embrace the beautiful chaos of modern web development, finding harmony in complexity just as nature thrives in the jungle's intricate ecosystem.</p>
            <p>Inspired by SINIC theory's vision of humanity's dance with chaos, I build digital experiences that celebrate the unpredictable beauty of our interconnected world.</p>
            <div class="scroll-indicator">
                <span>Scroll to explore</span>
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M12 5v14M19 12l-7 7-7-7" />
                </svg>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section class="blog-section" id="blog">
        <h2 class="section-title">Journal</h2>

        <div class="filter-buttons">
            <button class="filter-btn active" data-filter="all">🌿 All</button>
            <button class="filter-btn" data-filter="code">💻 Code</button>
            <button class="filter-btn" data-filter="life">🌍 Life</button>
            <button class="filter-btn" data-filter="design">✨ Design</button>
        </div>

        <div class="timeline" id="timeline">
            <article class="timeline-item" data-category="code">
                <div class="timeline-date">December 2024</div>
                <span class="timeline-category">💻 Code</span>
                <h3 class="timeline-title">Building My First Vue Application</h3>
                <p class="timeline-excerpt">Exploring the reactive ecosystem of Vue.js and how it mirrors the organic growth patterns I see in nature...</p>
            </article>

            <article class="timeline-item" data-category="life">
                <div class="timeline-date">November 2024</div>
                <span class="timeline-category">🌍 Life</span>
                <h3 class="timeline-title">Embracing Chaos in Creative Work</h3>
                <p class="timeline-excerpt">Reflections on how accepting uncertainty has transformed my approach to problem-solving and design...</p>
            </article>

            <article class="timeline-item" data-category="design">
                <div class="timeline-date">October 2024</div>
                <span class="timeline-category">✨ Design</span>
                <h3 class="timeline-title">The Aesthetics of Urban Jungle</h3>
                <p class="timeline-excerpt">Finding inspiration in the chaotic beauty of city life and translating it into digital experiences...</p>
            </article>

            <article class="timeline-item" data-category="code">
                <div class="timeline-date">September 2024</div>
                <span class="timeline-category">💻 Code</span>
                <h3 class="timeline-title">CSS Grid: Taming the Wild Layout</h3>
                <p class="timeline-excerpt">How modern CSS techniques help create order from the chaos of responsive design requirements...</p>
            </article>

            <article class="timeline-item" data-category="life">
                <div class="timeline-date">August 2024</div>
                <span class="timeline-category">🌍 Life</span>
                <h3 class="timeline-title">Cultural Roots in Digital Soil</h3>
                <p class="timeline-excerpt">Exploring how my Asian-African heritage influences my perspective on technology and creativity...</p>
            </article>
        </div>
    </section>

    <!-- Contact Section -->
	<section class="contact-section custom-cf7" id="contact">
        <h2 class="section-title">Get in Touch</h2>
        <?php echo do_shortcode('[contact-form-7 id="25fc8ae" title="Contact form 1"]'); ?>
	</section>

    <!-- Footer -->
    <footer class="footer">
        <div class="social-links">
            <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5" />
                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5" />
                </svg>
            </a>
            <a href="https://github.com" target="_blank" rel="noopener noreferrer" aria-label="GitHub">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22" />
                </svg>
            </a>
            <a href="https://pinterest.com" target="_blank" rel="noopener noreferrer" aria-label="Pinterest">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M8 12a4 4 0 1 1 8 0c0 4-3 6-3 9" />
                    <path d="M11.5 16.5l-2 6" />
                    <circle cx="12" cy="12" r="10" />
                </svg>
            </a>
        </div>
        <p class="footer-text">© 2026 — Crafted with chaos and care</p>
    </footer>
</div>

<!-- Floating Button -->
<button class="floating-btn" id="floating-btn">
    <span id="btn-text">Contact</span>
    <svg id="btn-icon-down" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
        <path d="M12 5v14M19 12l-7 7-7-7" />
    </svg>
    <svg id="btn-icon-up" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="display: none;">
        <path d="M12 19V5M5 12l7-7 7 7" />
    </svg>
</button>

<script>
    // Filter functionality
    const filterBtns = document.querySelectorAll('.filter-btn');
    const timelineItems = document.querySelectorAll('.timeline-item');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const filter = btn.dataset.filter;

            filterBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            timelineItems.forEach(item => {
                if (filter === 'all' || item.dataset.category === filter) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });

    // Floating button functionality
    const floatingBtn = document.getElementById('floating-btn');
    const btnText = document.getElementById('btn-text');
    const btnIconDown = document.getElementById('btn-icon-down');
    const btnIconUp = document.getElementById('btn-icon-up');
    const contactSection = document.getElementById('contact');

    let isContactMode = true;

    function updateFloatingButton() {
        const contactRect = contactSection.getBoundingClientRect();
        const windowHeight = window.innerHeight;

        // Switch to "Top" mode when contact section is visible
        if (contactRect.top < windowHeight * 0.8) {
            if (isContactMode) {
                isContactMode = false;
                btnText.textContent = 'Top';
                btnIconDown.style.display = 'none';
                btnIconUp.style.display = 'block';
            }
        } else {
            if (!isContactMode) {
                isContactMode = true;
                btnText.textContent = 'Contact';
                btnIconDown.style.display = 'block';
                btnIconUp.style.display = 'none';
            }
        }
    }

    floatingBtn.addEventListener('click', () => {
        if (isContactMode) {
            contactSection.scrollIntoView({
                behavior: 'smooth'
            });
        } else {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }
    });

    window.addEventListener('scroll', updateFloatingButton);
    updateFloatingButton();

    // Form submission
    document.getElementById('contact-form').addEventListener('submit', (e) => {
        e.preventDefault();
        alert('Thank you for your message! I will get back to you soon.');
        e.target.reset();
    });
</script>
<?php get_footer(); ?>
