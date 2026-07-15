/**
 * Countdown — core thuần + ticker gắn DOM (inject now).
 */

/** @param {number} nowMs @param {number} endMs */
export function getRemainingMs(nowMs, endMs) {
  return Math.max(0, endMs - nowMs);
}

/** @param {number} ms */
export function splitCountdown(ms) {
  return {
    days: Math.floor(ms / 86400000),
    hours: Math.floor(ms / 3600000) % 24,
    minutes: Math.floor(ms / 60000) % 60,
    seconds: Math.floor(ms / 1000) % 60,
  };
}

/** @param {number} n */
export function pad2(n) {
  return String(n).padStart(2, '0');
}

/**
 * @param {HTMLElement} root
 * @param {{ days:number, hours:number, minutes:number, seconds:number }} parts
 */
export function renderCountdownParts(root, parts) {
  const map = {
    '[data-days]': pad2(parts.days),
    '[data-hours]': pad2(parts.hours),
    '[data-minutes]': pad2(parts.minutes),
    '[data-seconds]': pad2(parts.seconds),
  };
  Object.entries(map).forEach(([sel, text]) => {
    const el = root.querySelector(sel);
    if (el) el.textContent = text;
  });
}

export class CountdownTicker {
  /**
   * @param {ParentNode} root
   * @param {{ selector?: string, now?: () => number, intervalMs?: number, schedule?: typeof setInterval, clearSchedule?: typeof clearInterval }} [options]
   */
  constructor(root, options = {}) {
    this.root = root;
    this.selector = options.selector ?? '.countdown';
    this.now = options.now ?? (() => Date.now());
    this.intervalMs = options.intervalMs ?? 1000;
    this.schedule = options.schedule ?? ((fn, ms) => window.setInterval(fn, ms));
    this.clearSchedule = options.clearSchedule ?? ((id) => window.clearInterval(id));
    this._id = null;
  }

  tick() {
    this.root.querySelectorAll(this.selector).forEach((c) => {
      const end = new Date(c.dataset.end).getTime();
      const parts = splitCountdown(getRemainingMs(this.now(), end));
      renderCountdownParts(c, parts);
    });
  }

  start() {
    this.tick();
    this._id = this.schedule(() => this.tick(), this.intervalMs);
    return this;
  }

  stop() {
    if (this._id != null) this.clearSchedule(this._id);
    this._id = null;
  }
}
