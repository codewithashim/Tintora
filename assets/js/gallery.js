/**
 * Tintora Gallery Filter, Lightbox & Before/After Slider
 *
 * @package Tintora
 * @version 1.0.0
 */

document.addEventListener('DOMContentLoaded', () => {
  // -------------------------------------------------------------
  // 1. GALLERY CATEGORY FILTER
  // -------------------------------------------------------------
  const filterBtns = document.querySelectorAll('.gallery-filter-nav .filter-btn');
  const galleryItems = document.querySelectorAll('.gallery-grid .gallery-item');

  if (filterBtns.length > 0 && galleryItems.length > 0) {
    filterBtns.forEach((btn) => {
      btn.addEventListener('click', () => {
        const filter = btn.getAttribute('data-filter');

        filterBtns.forEach((b) => b.classList.remove('is-active'));
        btn.classList.add('is-active');

        galleryItems.forEach((item) => {
          const category = item.getAttribute('data-category');
          if (filter === 'all' || category === filter) {
            item.style.display = 'block';
            setTimeout(() => { item.style.opacity = '1'; }, 50);
          } else {
            item.style.opacity = '0';
            setTimeout(() => { item.style.display = 'none'; }, 200);
          }
        });
      });
    });
  }

  // -------------------------------------------------------------
  // 2. BEFORE / AFTER COMPARISON SLIDER
  // -------------------------------------------------------------
  const beforeAfterComponents = document.querySelectorAll('.tintora-before-after');

  beforeAfterComponents.forEach((container) => {
    const beforeWrapper = container.querySelector('.before-image-wrapper');
    const handle = container.querySelector('.before-after-handle');
    let isDragging = false;

    if (!beforeWrapper || !handle) return;

    function setSliderPosition(posX) {
      const rect = container.getBoundingClientRect();
      let x = posX - rect.left;
      if (x < 0) x = 0;
      if (x > rect.width) x = rect.width;

      const percentage = (x / rect.width) * 100;
      beforeWrapper.style.width = percentage + '%';
      handle.style.left = percentage + '%';
      handle.setAttribute('aria-valuenow', Math.round(percentage));
    }

    // Pointer & Mouse Events
    container.addEventListener('pointerdown', (e) => {
      isDragging = true;
      setSliderPosition(e.clientX);
    });

    window.addEventListener('pointermove', (e) => {
      if (isDragging) {
        setSliderPosition(e.clientX);
      }
    });

    window.addEventListener('pointerup', () => {
      isDragging = false;
    });

    // Keyboard Accessibility (Left / Right Arrow Keys)
    handle.addEventListener('keydown', (e) => {
      let currentVal = parseInt(handle.getAttribute('aria-valuenow') || 50, 10);
      if (e.key === 'ArrowLeft') {
        currentVal = Math.max(0, currentVal - 5);
        beforeWrapper.style.width = currentVal + '%';
        handle.style.left = currentVal + '%';
        handle.setAttribute('aria-valuenow', currentVal);
      } else if (e.key === 'ArrowRight') {
        currentVal = Math.min(100, currentVal + 5);
        beforeWrapper.style.width = currentVal + '%';
        handle.style.left = currentVal + '%';
        handle.setAttribute('aria-valuenow', currentVal);
      }
    });
  });

  // -------------------------------------------------------------
  // 3. LIGHTBOX MODAL
  // -------------------------------------------------------------
  const lightbox = document.createElement('div');
  lightbox.className = 'tintora-lightbox';
  lightbox.innerHTML = `
    <button class="lightbox-close" aria-label="Close Lightbox">&times;</button>
    <div class="lightbox-content">
      <img src="" alt="Full Resolution View" />
    </div>
  `;
  document.body.appendChild(lightbox);

  const lightboxImg = lightbox.querySelector('img');
  const lightboxClose = lightbox.querySelector('.lightbox-close');

  function openLightbox(src, alt) {
    lightboxImg.src = src;
    lightboxImg.alt = alt || 'Project View';
    lightbox.classList.add('is-active');
    document.body.style.overflow = 'hidden';
  }

  function closeLightbox() {
    lightbox.classList.remove('is-active');
    document.body.style.overflow = '';
  }

  document.querySelectorAll('[data-lightbox-src]').forEach((trigger) => {
    trigger.addEventListener('click', (e) => {
      e.preventDefault();
      const src = trigger.getAttribute('data-lightbox-src');
      const alt = trigger.getAttribute('alt') || trigger.querySelector('img')?.getAttribute('alt');
      if (src) openLightbox(src, alt);
    });
  });

  lightboxClose.addEventListener('click', closeLightbox);
  lightbox.addEventListener('click', (e) => {
    if (e.target === lightbox) closeLightbox();
  });
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && lightbox.classList.contains('is-active')) closeLightbox();
  });
});
