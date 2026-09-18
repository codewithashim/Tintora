/**
 * Tintora Header & Mobile Drawer Navigation
 *
 * @package Tintora
 * @version 1.0.0
 */

document.addEventListener('DOMContentLoaded', () => {
  const header = document.querySelector('.site-header');
  const menuToggle = document.querySelector('.menu-toggle');
  const drawer = document.querySelector('.mobile-drawer');
  const drawerClose = document.querySelector('.drawer-close');
  const drawerOverlay = document.querySelector('.mobile-drawer-overlay');

  // Sticky Header Observer
  if (header) {
    let lastScrollY = window.scrollY;
    window.addEventListener('scroll', () => {
      if (window.scrollY > 40) {
        header.classList.add('is-sticky');
      } else {
        header.classList.remove('is-sticky');
      }
      lastScrollY = window.scrollY;
    }, { passive: true });
  }

  // Mobile Drawer Toggle
  function openDrawer() {
    if (drawer && drawerOverlay && menuToggle) {
      drawer.classList.add('is-open');
      drawerOverlay.classList.add('is-active');
      menuToggle.setAttribute('aria-expanded', 'true');
      document.body.style.overflow = 'hidden';
      if (drawerClose) drawerClose.focus();
    }
  }

  function closeDrawer() {
    if (drawer && drawerOverlay && menuToggle) {
      drawer.classList.remove('is-open');
      drawerOverlay.classList.remove('is-active');
      menuToggle.setAttribute('aria-expanded', 'false');
      document.body.style.overflow = '';
      menuToggle.focus();
    }
  }

  if (menuToggle) {
    menuToggle.addEventListener('click', () => {
      const isExpanded = menuToggle.getAttribute('aria-expanded') === 'true';
      if (isExpanded) {
        closeDrawer();
      } else {
        openDrawer();
      }
    });
  }

  if (drawerClose) {
    drawerClose.addEventListener('click', closeDrawer);
  }

  if (drawerOverlay) {
    drawerOverlay.addEventListener('click', closeDrawer);
  }

  // Keyboard Escape Key Handler
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && drawer && drawer.classList.contains('is-open')) {
      closeDrawer();
    }
  });
});
