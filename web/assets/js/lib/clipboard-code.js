/**
 * Copy mã voucher — clipboard inject được để test.
 */

/**
 * @param {string} code
 * @param {{ clipboard?: { writeText:(t:string)=>Promise<void> }, onCopied?: (code:string)=>void }} [deps]
 */
export async function copyCode(code, deps = {}) {
  const clipboard = deps.clipboard ?? navigator.clipboard;
  if (clipboard?.writeText) {
    await clipboard.writeText(code);
  }
  deps.onCopied?.(code);
}

export class PromoStatusFilter {
  /**
   * @param {ParentNode} [root]
   * @param {{ btnSelector?: string, itemSelector?: string, hiddenClass?: string }} [options]
   */
  constructor(root = document, options = {}) {
    this.root = root;
    this.btnSelector = options.btnSelector ?? '.filter-btn';
    this.itemSelector = options.itemSelector ?? '.promo-item';
    this.hiddenClass = options.hiddenClass ?? 'hidden';
  }

  bind() {
    this.root.querySelectorAll(this.btnSelector).forEach((btn) => {
      btn.addEventListener('click', () => {
        this.root.querySelectorAll(this.btnSelector).forEach((x) => x.classList.remove('active'));
        btn.classList.add('active');
        const f = btn.dataset.filter;
        this.root.querySelectorAll(this.itemSelector).forEach((item) => {
          item.classList.toggle(this.hiddenClass, f !== 'all' && item.dataset.status !== f);
        });
      });
    });
  }
}
