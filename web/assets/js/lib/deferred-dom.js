/**
 * Render HTML không chặn lâu — xếp vào frame kế tiếp / idle.
 */

/**
 * @param {HTMLElement|null} el
 * @param {string} html
 * @param {{ schedule?: (fn:()=>void)=>void }} [options]
 */
export function setHtmlDeferred(el, html, options = {}) {
  if (!el) return;
  const schedule =
    options.schedule ??
    ((fn) => {
      if (typeof requestAnimationFrame === 'function') requestAnimationFrame(fn);
      else setTimeout(fn, 0);
    });
  schedule(() => {
    el.innerHTML = html;
  });
}

/**
 * Render lần lượt nhiều section — mỗi section một frame (không block UI).
 * @param {Array<{ el: HTMLElement|null, html: string }>} jobs
 * @param {{ schedule?: (fn:()=>void)=>void }} [options]
 */
export function setHtmlQueue(jobs, options = {}) {
  const schedule =
    options.schedule ??
    ((fn) => {
      if (typeof requestAnimationFrame === 'function') requestAnimationFrame(fn);
      else setTimeout(fn, 0);
    });

  let i = 0;
  const step = () => {
    if (i >= jobs.length) return;
    const { el, html } = jobs[i++];
    if (el) el.innerHTML = html;
    schedule(step);
  };
  schedule(step);
}
