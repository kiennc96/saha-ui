/**
 * Toast thông báo — một trách nhiệm: hiện/ẩn message.
 */
export class Toast {
  /**
   * @param {HTMLElement|null} el
   * @param {{ durationMs?: number, schedule?: (fn:()=>void, ms:number)=>number, clearSchedule?: (id:number)=>void }} [options]
   */
  constructor(el, options = {}) {
    this.el = el;
    this.durationMs = options.durationMs ?? 2200;
    this.schedule = options.schedule ?? ((fn, ms) => window.setTimeout(fn, ms));
    this.clearSchedule = options.clearSchedule ?? ((id) => window.clearTimeout(id));
    this._timer = null;
  }

  /** @param {string} message */
  show(message) {
    if (!this.el) return;
    this.el.textContent = message;
    this.el.classList.add('show');
    if (this._timer != null) this.clearSchedule(this._timer);
    this._timer = this.schedule(() => {
      this.el.classList.remove('show');
    }, this.durationMs);
  }
}
