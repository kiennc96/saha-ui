/** Gallery thumb → cập nhật vùng visual (map view → html inject). */
export class ProductGallery {
  /**
   * @param {{ visual: HTMLElement|null, thumbSelector?: string }} deps
   * @param {Record<string, string>} viewHtml
   */
  constructor(deps, viewHtml) {
    this.visual = deps.visual;
    this.thumbSelector = deps.thumbSelector ?? '.thumb';
    this.viewHtml = viewHtml;
  }

  bind(root = document) {
    root.querySelectorAll(this.thumbSelector).forEach((btn) => {
      btn.addEventListener('click', () => {
        root.querySelectorAll(this.thumbSelector).forEach((x) => x.classList.remove('active'));
        btn.classList.add('active');
        const view = btn.dataset.view;
        if (this.visual && view && this.viewHtml[view] != null) {
          this.visual.innerHTML = this.viewHtml[view];
        }
      });
    });
  }
}

/** Scroll spy cho anchor nav — passive scroll, không block. */
export class ScrollSpy {
  /**
   * @param {HTMLAnchorElement[]} anchors
   * @param {{ offset?: number }} [options]
   */
  constructor(anchors, options = {}) {
    this.anchors = anchors;
    this.offset = options.offset ?? 120;
    this.targets = anchors
      .map((a) => document.querySelector(a.getAttribute('href')))
      .filter(Boolean);
  }

  bind() {
    const onScroll = () => {
      let current = this.targets[0]?.id;
      this.targets.forEach((t) => {
        if (window.scrollY >= t.offsetTop - this.offset) current = t.id;
      });
      this.anchors.forEach((a) => {
        a.classList.toggle('active', a.getAttribute('href') === '#' + current);
      });
    };
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
  }
}
