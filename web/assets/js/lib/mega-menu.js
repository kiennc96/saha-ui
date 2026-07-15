/**
 * Mega menu — mở/đóng .nav-menu-item, xử lý Escape + click ngoài.
 */
export class MegaMenu {
  /**
   * @param {ParentNode|null} root
   * @param {{ itemSelector?: string, openClass?: string }} [options]
   */
  constructor(root, options = {}) {
    this.root = root ?? document;
    this.itemSelector = options.itemSelector ?? '.nav-menu-item';
    this.openClass = options.openClass ?? 'is-open';
  }

  bind() {
    const items = [...this.root.querySelectorAll(this.itemSelector)];
    items.forEach((item) => {
      const btn = item.querySelector('.nav-menu-button');
      if (!btn) return;
      btn.addEventListener('click', (e) => {
        e.preventDefault();
        e.stopPropagation();
        const willOpen = !item.classList.contains(this.openClass);
        this.closeAll(items);
        if (willOpen) this.open(item, btn);
      });
    });

    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') this.closeAll(items);
    });

    document.addEventListener('click', (e) => {
      if (!e.target.closest(this.itemSelector)) this.closeAll(items);
    });
  }

  /** @param {Element} item @param {Element} btn */
  open(item, btn) {
    item.classList.add(this.openClass);
    btn.setAttribute('aria-expanded', 'true');
  }

  /** @param {Element[]} items */
  closeAll(items) {
    items.forEach((el) => {
      el.classList.remove(this.openClass);
      el.querySelector('.nav-menu-button')?.setAttribute('aria-expanded', 'false');
    });
  }
}
