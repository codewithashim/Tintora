/**
 * Tintora Scroll Animations & Statistics Counter
 *
 * @package Tintora
 * @version 1.0.0
 */

document.addEventListener('DOMContentLoaded', () => {
  // Check reduced motion preference
  const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  if (prefersReducedMotion) return;

  // Scroll Reveal Observer
  const revealElements = document.querySelectorAll('.reveal-on-scroll');
  if (revealElements.length > 0 && 'IntersectionObserver' in window) {
    const revealObserver = new IntersectionObserver((entries, observer) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-revealed');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.15 });

    revealElements.forEach((el) => revealObserver.observe(el));
  }

  // Statistic Counter Animation
  const statNumbers = document.querySelectorAll('.stat-number');
  if (statNumbers.length > 0 && 'IntersectionObserver' in window) {
    const counterObserver = new IntersectionObserver((entries, observer) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          const target = entry.target;
          const rawVal = target.getAttribute('data-count') || target.innerText;
          const numericVal = parseInt(rawVal.replace(/[^0-9]/g, ''), 10);
          const suffix = rawVal.replace(/[0-9]/g, '');

          if (!isNaN(numericVal)) {
            let current = 0;
            const step = Math.max(1, Math.ceil(numericVal / 40));
            const timer = setInterval(() => {
              current += step;
              if (current >= numericVal) {
                target.innerText = numericVal + suffix;
                clearInterval(timer);
              } else {
                target.innerText = current + suffix;
              }
            }, 30);
          }
          observer.unobserve(target);
        }
      });
    }, { threshold: 0.3 });

    statNumbers.forEach((stat) => counterObserver.observe(stat));
  }
});
