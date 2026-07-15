/**
 * Định mức silicone — core thuần, dễ unit test.
 */

/**
 * @param {number} length
 * @param {number} width
 * @param {number} depth
 * @param {{ mlPerBottle?: number, wasteFactor?: number }} [options]
 */
export function estimateBottles(length, width, depth, options = {}) {
  const mlPerBottle = options.mlPerBottle ?? 300;
  const wasteFactor = options.wasteFactor ?? 1.1;
  const ml = length * width * depth;
  return Math.max(1, Math.ceil((ml / mlPerBottle) * wasteFactor));
}

export class SiliconeCalculator {
  /**
   * @param {{ length: HTMLInputElement|null, width: HTMLInputElement|null, depth: HTMLInputElement|null, result: HTMLElement|null }} els
   * @param {{ mlPerBottle?: number, wasteFactor?: number }} [options]
   */
  constructor(els, options = {}) {
    this.els = els;
    this.options = options;
  }

  calculate() {
    const l = +(this.els.length?.value || 0);
    const w = +(this.els.width?.value || 0);
    const d = +(this.els.depth?.value || 0);
    const bottles = estimateBottles(l, w, d, this.options);
    if (this.els.result) this.els.result.textContent = bottles + ' chai';
    return bottles;
  }

  bind() {
    ['length', 'width', 'depth'].forEach((key) => {
      this.els[key]?.addEventListener('input', () => this.calculate());
    });
    this.calculate();
  }
}
