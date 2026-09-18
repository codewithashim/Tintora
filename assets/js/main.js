/**
 * Tintora Main Interactive Initializer
 *
 * @package Tintora
 * @version 1.0.0
 */

document.addEventListener('DOMContentLoaded', () => {
  // -------------------------------------------------------------
  // 1. FAQ ACCORDION
  // -------------------------------------------------------------
  const faqButtons = document.querySelectorAll('.faq-accordion .faq-button');

  faqButtons.forEach((btn) => {
    btn.addEventListener('click', () => {
      const item = btn.closest('.faq-item');
      const panel = item ? item.querySelector('.faq-panel') : null;
      const isExpanded = btn.getAttribute('aria-expanded') === 'true';

      if (panel) {
        if (isExpanded) {
          btn.setAttribute('aria-expanded', 'false');
          panel.setAttribute('hidden', '');
          item.classList.remove('is-open');
        } else {
          btn.setAttribute('aria-expanded', 'true');
          panel.removeAttribute('hidden');
          item.classList.add('is-open');
        }
      }
    });
  });

  // -------------------------------------------------------------
  // 2. SMOOTH ANCHOR SCROLLING WITH STICKY HEADER OFFSET
  // -------------------------------------------------------------
  document.querySelectorAll('a[href^="#"]:not([href="#"])').forEach((anchor) => {
    anchor.addEventListener('click', function (e) {
      const targetId = this.getAttribute('href');
      const targetElement = document.querySelector(targetId);

      if (targetElement) {
        e.preventDefault();
        const headerOffset = 80;
        const elementPosition = targetElement.getBoundingClientRect().top;
        const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

        window.scrollTo({
          top: offsetPosition,
          behavior: 'smooth'
        });
      }
    });
  });
});
