/* ============================================================
   DZD AD NETWORK — front-end interactions (vanilla JS)
   ============================================================ */
(function () {
    'use strict';

    /* ----- Sticky nav shadow ----- */
    const nav = document.getElementById('site-nav');
    const onScroll = () => nav && nav.classList.toggle('is-scrolled', window.scrollY > 12);
    onScroll();
    window.addEventListener('scroll', onScroll, { passive: true });

    /* ----- Mobile menu ----- */
    const burger = document.getElementById('nav-burger');
    const links  = document.getElementById('nav-links');
    if (burger && links) {
        burger.addEventListener('click', () => {
            const open = links.classList.toggle('is-open');
            burger.classList.toggle('is-open', open);
            burger.setAttribute('aria-expanded', open ? 'true' : 'false');
            document.body.style.overflow = open ? 'hidden' : '';
        });
        // close menu when a link is tapped
        links.querySelectorAll('a').forEach((a) =>
            a.addEventListener('click', () => {
                links.classList.remove('is-open');
                burger.classList.remove('is-open');
                document.body.style.overflow = '';
            })
        );
    }

    /* ----- Scroll reveal ----- */
    const revealEls = document.querySelectorAll('.reveal');
    if ('IntersectionObserver' in window && revealEls.length) {
        const io = new IntersectionObserver((entries) => {
            entries.forEach((entry, i) => {
                if (entry.isIntersecting) {
                    const delay = Math.min(i * 70, 280);
                    setTimeout(() => entry.target.classList.add('in-view'), delay);
                    io.unobserve(entry.target);
                }
            });
        }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
        revealEls.forEach((el) => io.observe(el));
    } else {
        revealEls.forEach((el) => el.classList.add('in-view'));
    }

    /* ----- Animated counters ----- */
    const animateCount = (el) => {
        const target   = parseFloat(el.dataset.count || '0');
        const suffix   = el.dataset.suffix || '';
        const prefix   = el.dataset.prefix || '';
        const decimals = parseInt(el.dataset.decimals || '0', 10);
        const dur      = 1400;
        const start    = performance.now();

        const tick = (now) => {
            const p = Math.min((now - start) / dur, 1);
            const eased = 1 - Math.pow(1 - p, 3); // ease-out cubic
            const val = target * eased;
            el.textContent = prefix + val.toLocaleString('en-US', {
                minimumFractionDigits: decimals,
                maximumFractionDigits: decimals,
            }) + suffix;
            if (p < 1) requestAnimationFrame(tick);
        };
        requestAnimationFrame(tick);
    };

    const counters = document.querySelectorAll('[data-count]');
    if ('IntersectionObserver' in window && counters.length) {
        const cio = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    animateCount(entry.target);
                    cio.unobserve(entry.target);
                }
            });
        }, { threshold: 0.4 });
        counters.forEach((el) => cio.observe(el));
    }

    /* ----- FAQ: one open at a time ----- */
    document.querySelectorAll('.faq').forEach((faq) => {
        const items = faq.querySelectorAll('details');
        items.forEach((item) =>
            item.addEventListener('toggle', () => {
                if (item.open) items.forEach((other) => { if (other !== item) other.open = false; });
            })
        );
    });

    /* ----- Auto year ----- */
    const year = document.getElementById('year');
    if (year) year.textContent = new Date().getFullYear();
})();
