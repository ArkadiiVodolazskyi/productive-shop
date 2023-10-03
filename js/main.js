import Overlay from './services/Overlay.js';

document.addEventListener(
  'DOMContentLoaded',
  () => {
    const overlay = new Overlay();

    (() => {
      const headerNavBtns = [
        ...document.querySelectorAll('[data-js="toggle-megamenu"]'),
      ];
      if (!headerNavBtns.length) {
        return;
      }
      headerNavBtns.forEach((btn) => {
        btn.addEventListener('click', () => {
          const isActive = btn.hasAttribute('data-active');

          if (isActive) {
            btn.toggleAttribute('data-active', false);
            overlay.hideOverlay();
            return;
          }

          overlay.toggleOffMegamenuButtons();
          btn.toggleAttribute('data-active', true);
          overlay.showOverlay();
        });
      });
    })();

    (() => {
      window.addEventListener('scroll', () => {
        overlay.toggleOffMegamenuButtons();
        overlay.hideOverlay();
      });
    })();
  },
  true,
);
