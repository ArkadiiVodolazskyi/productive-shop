export default class Overlay {
  constructor() {
    this.overlay = document.querySelector('[data-js="overlay"]');
    this.megamenuButtons = [
      ...document.querySelectorAll('[data-js="toggle-megamenu"]'),
    ];
    this.initListeners();
  }

  initListeners() {
    this.overlay?.addEventListener('click', () => {
      this.hideOverlay();
      this.toggleOffMegamenuButtons();
    });
  }

  showOverlay() {
    this.overlay?.toggleAttribute('data-active', true);
  }

  hideOverlay() {
    this.overlay?.toggleAttribute('data-active', false);
  }

  toggleOffMegamenuButtons() {
    if (!this.megamenuButtons.length) {
      return;
    }
    this.megamenuButtons.forEach((btn) =>
      btn.toggleAttribute('data-active', false),
    );
  }
}
