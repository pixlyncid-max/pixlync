import './bootstrap';

// ============================================================
// PIXLYNC.ID — Main JavaScript
// ============================================================

/**
 * Scroll Reveal
 * Observes elements with .reveal class and adds .active when in viewport.
 */
function initScrollReveal() {
    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                }
            });
        },
        { threshold: 0.1 }
    );

    document.querySelectorAll('.reveal').forEach((el) => observer.observe(el));
}

/**
 * Neo-Shadow Active Press Effect
 * Adds active press state on mousedown/touchstart for all neo-shadow-hover elements.
 */
function initNeoShadowPress() {
    document.querySelectorAll('.neo-shadow-hover').forEach((el) => {
        el.addEventListener('mousedown', () => el.classList.add('neo-shadow-active'));
        el.addEventListener('mouseup',   () => el.classList.remove('neo-shadow-active'));
        el.addEventListener('mouseleave',() => el.classList.remove('neo-shadow-active'));

        // Touch support
        el.addEventListener('touchstart', () => el.classList.add('neo-shadow-active'),  { passive: true });
        el.addEventListener('touchend',   () => el.classList.remove('neo-shadow-active'), { passive: true });
    });
}

/**
 * Active Navigation Highlight
 * Marks the nav link whose section is currently in view.
 */
function initActiveNav() {
    const sections  = document.querySelectorAll('section[id]');
    const navLinks  = document.querySelectorAll('.nav-link');
    if (!sections.length || !navLinks.length) return;

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    navLinks.forEach((link) => {
                        link.classList.remove('text-secondary', 'underline', 'decoration-4');
                        if (link.getAttribute('href') === `#${entry.target.id}`) {
                            link.classList.add('text-secondary', 'underline', 'decoration-4');
                        }
                    });
                }
            });
        },
        { threshold: 0.4 }
    );

    sections.forEach((section) => observer.observe(section));
}

/**
 * Mobile Menu Toggle
 */
function initMobileMenu() {
    const toggle = document.getElementById('mobile-menu-toggle');
    const menu   = document.getElementById('mobile-menu');
    if (!toggle || !menu) return;

    toggle.addEventListener('click', () => {
        const isOpen = !menu.classList.contains('hidden');
        menu.classList.toggle('hidden', isOpen);
        menu.classList.toggle('flex', !isOpen);
        toggle.setAttribute('aria-expanded', String(!isOpen));
    });

    // Close on mobile link click
    menu.querySelectorAll('a').forEach((link) => {
        link.addEventListener('click', () => {
            menu.classList.add('hidden');
            menu.classList.remove('flex');
            toggle.setAttribute('aria-expanded', 'false');
        });
    });
}

/**
 * Smooth Scroll for anchor links
 */
function initSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
        anchor.addEventListener('click', (e) => {
            const target = document.querySelector(anchor.getAttribute('href'));
            if (!target) return;
            e.preventDefault();
            target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        });
    });
}

// ============================================================
// Bootstrap on DOM ready
// ============================================================
document.addEventListener('DOMContentLoaded', () => {
    initScrollReveal();
    initNeoShadowPress();
    initActiveNav();
    initMobileMenu();
    initSmoothScroll();
});
