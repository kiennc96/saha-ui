/**
 * Mobile nav toggle — chỉ mở/đóng nav trên mobile.
 */
export class MobileNav {
  /**
   * @param {{ toggle: HTMLElement|null, nav: HTMLElement|null }} deps
   */
  constructor({ toggle, nav }) {
    this.toggle = toggle;
    this.nav = nav;
  }

  bind() {
    if (!this.toggle || !this.nav) return;
    this.toggle.addEventListener('click', () => {
      this.nav.classList.toggle('open');
    });
  }
}
