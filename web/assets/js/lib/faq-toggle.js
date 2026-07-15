/**
 * FAQ accordion — chỉ toggle .faq-item.
 */
export class FaqToggle {
  /**
   * @param {ParentNode} [root]
   * @param {{ questionSelector?: string, itemSelector?: string, openClass?: string }} [options]
   */
  constructor(root = document, options = {}) {
    this.root = root;
    this.questionSelector = options.questionSelector ?? '.faq-q';
    this.itemSelector = options.itemSelector ?? '.faq-item';
    this.openClass = options.openClass ?? 'open';
  }

  bind() {
    this.root.querySelectorAll(this.questionSelector).forEach((btn) => {
      btn.addEventListener('click', () => {
        btn.closest(this.itemSelector)?.classList.toggle(this.openClass);
      });
    });
  }
}
