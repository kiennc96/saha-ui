/**
 * Lọc card sản phẩm theo checkbox [data-filter] — core thuần tách riêng.
 */

/** @param {string[]} active @param {string} productTags */
export function productMatchesFilters(active, productTags) {
  if (!active.length) return true;
  return active.some((x) => productTags.includes(x));
}

export class ProductFilter {
  /**
   * @param {ParentNode} [root]
   * @param {{ filterSelector?: string, cardSelector?: string }} [options]
   */
  constructor(root = document, options = {}) {
    this.root = root;
    this.filterSelector = options.filterSelector ?? '[data-filter]';
    this.cardSelector = options.cardSelector ?? '[data-product]';
  }

  bind() {
    const inputs = [...this.root.querySelectorAll(this.filterSelector)];
    const apply = () => {
      const active = inputs.filter((x) => x.checked).map((x) => x.value);
      this.root.querySelectorAll(this.cardSelector).forEach((card) => {
        const tags = card.dataset.product ?? '';
        card.style.display = productMatchesFilters(active, tags) ? 'block' : 'none';
      });
    };
    inputs.forEach((input) => input.addEventListener('change', apply));
  }
}
