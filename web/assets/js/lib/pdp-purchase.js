export class ChoiceGroup {
  /**
   * @param {ParentNode} [root]
   * @param {{ onColorChange?: (value:string)=>void }} [handlers]
   */
  constructor(root = document, handlers = {}) {
    this.root = root;
    this.onColorChange = handlers.onColorChange;
  }

  bind() {
    this.root.querySelectorAll('.choice').forEach((btn) => {
      btn.addEventListener('click', () => {
        const group = btn.closest('[data-choice-group]');
        if (!group) return;
        group.querySelectorAll('.choice').forEach((x) => x.classList.remove('active'));
        btn.classList.add('active');
        if (group.dataset.choiceGroup === 'color' && btn.dataset.value) {
          this.onColorChange?.(btn.dataset.value);
        }
      });
    });
  }
}

/**
 * @param {HTMLInputElement|null} input
 * @param {number} delta
 * @returns {number}
 */
export function changeQty(input, delta) {
  if (!input) return 1;
  const next = Math.max(1, (parseInt(input.value, 10) || 1) + delta);
  input.value = String(next);
  return next;
}

/**
 * @param {HTMLInputElement|null} qtyInput
 * @param {HTMLElement|null} bubble
 * @param {{ onAdded?: (qty:number)=>void }} [handlers]
 */
export function addCart(qtyInput, bubble, handlers = {}) {
  const qty = Math.max(1, parseInt(qtyInput?.value ?? '1', 10) || 1);
  if (bubble) bubble.textContent = String(qty);
  handlers.onAdded?.(qty);
  return qty;
}
