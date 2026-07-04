(function () {
    'use strict';

    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    function initNavbar() {
        const navbar = document.getElementById('mainNavbar');
        if (!navbar) return;

        const onScroll = () => navbar.classList.toggle('scrolled', window.scrollY > 40);
        window.addEventListener('scroll', onScroll, { passive: true });
        onScroll();

        const navLinks = navbar.querySelectorAll('.nav-anchor');
        const sections = [];

        navLinks.forEach(link => {
            const id = link.getAttribute('href')?.slice(1);
            if (id) {
                const section = document.getElementById(id);
                if (section) sections.push({ link, section, id });
            }
        });

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const id = entry.target.id;
                    navLinks.forEach(l => {
                        l.classList.toggle('active', l.getAttribute('href') === '#' + id);
                    });
                }
            });
        }, { rootMargin: '-40% 0px -50% 0px', threshold: 0 });

        sections.forEach(({ section }) => observer.observe(section));

        navLinks.forEach(link => {
            link.addEventListener('click', (e) => {
                const href = link.getAttribute('href');
                if (href?.startsWith('#')) {
                    e.preventDefault();
                    const target = document.querySelector(href);
                    if (target) {
                        target.scrollIntoView({ behavior: prefersReducedMotion ? 'auto' : 'smooth' });
                        navbar.querySelector('.navbar-collapse.show')?.classList.remove('show');
                    }
                }
            });
        });
    }

    function initReveal() {
        const els = document.querySelectorAll('.reveal');
        if (!els.length) return;

        if (prefersReducedMotion || !('IntersectionObserver' in window)) {
            els.forEach(el => el.classList.add('visible'));
            return;
        }

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.15 });

        els.forEach(el => observer.observe(el));
    }

    function initStatsCounter() {
        const stats = document.querySelectorAll('[data-stat-value]');
        if (!stats.length || prefersReducedMotion) return;

        const animateValue = (el) => {
            const raw = el.dataset.statValue;
            const suffix = el.dataset.statSuffix || '';
            const target = parseFloat(raw);
            const isDecimal = raw.includes('.');
            const duration = 1200;
            const start = performance.now();

            const step = (now) => {
                const progress = Math.min((now - start) / duration, 1);
                const eased = 1 - Math.pow(1 - progress, 3);
                const current = target * eased;
                el.textContent = (isDecimal ? current.toFixed(1) : Math.floor(current)) + suffix;
                if (progress < 1) requestAnimationFrame(step);
            };
            requestAnimationFrame(step);
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateValue(entry.target);
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        stats.forEach(el => observer.observe(el));
    }

    function initDashboardMock() {
        const mock = document.getElementById('dashboardMock');
        if (!mock) return;

        const sidebarLines = mock.querySelectorAll('.tb-mock-sidebar-line');
        const cards = mock.querySelectorAll('.tb-mock-card');
        const bars = mock.querySelectorAll('.tb-mock-bar');
        const barHeights = [45, 72, 58, 85, 63, 78, 52, 90, 68, 55, 82, 48];

        function setBarHeights(heights) {
            bars.forEach((bar, i) => { bar.style.height = (heights[i] || 50) + '%'; });
        }

        function runEntrance() {
            if (prefersReducedMotion) {
                sidebarLines.forEach(l => l.classList.add('active'));
                cards.forEach(c => c.classList.add('visible'));
                setBarHeights(barHeights);
                return;
            }
            sidebarLines.forEach((line, i) => setTimeout(() => line.classList.add('active'), i * 60));
            cards.forEach((card, i) => setTimeout(() => card.classList.add('visible'), 200 + i * 100));
            bars.forEach((bar, i) => setTimeout(() => { bar.style.height = barHeights[i] + '%'; }, 500 + i * 150));
        }

        function randomizeBars() {
            if (prefersReducedMotion) return;
            const indices = [];
            while (indices.length < 3) {
                const r = Math.floor(Math.random() * bars.length);
                if (!indices.includes(r)) indices.push(r);
            }
            indices.forEach(i => {
                const newH = 30 + Math.floor(Math.random() * 60);
                bars[i].style.transition = 'height 400ms ease-in-out';
                bars[i].style.height = newH + '%';
                barHeights[i] = newH;
            });
        }

        runEntrance();
        if (!prefersReducedMotion) setInterval(randomizeBars, 6000);
    }

    function initUseCaseTabs() {
        const tabs = document.querySelectorAll('.tb-usecase-tab');
        const panels = document.querySelectorAll('.tb-usecase-panel');
        if (!tabs.length) return;

        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                const target = tab.dataset.target;
                tabs.forEach(t => t.classList.toggle('active', t === tab));
                panels.forEach(p => p.classList.toggle('active', p.id === target));
            });
        });
    }

    document.addEventListener('DOMContentLoaded', () => {
        initNavbar();
        initReveal();
        initStatsCounter();
        initDashboardMock();
        initUseCaseTabs();
    });
})();
