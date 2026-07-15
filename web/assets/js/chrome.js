import { Toast } from './lib/toast.js';
import { MobileNav } from './lib/mobile-nav.js';
import { MegaMenu } from './lib/mega-menu.js';

const toast = new Toast(document.getElementById('toast'));

/** API global mỏng cho onclick inline trong HTML. */
window.showToast = (msg) => toast.show(msg);

new MobileNav({
  toggle: document.getElementById('mobileToggle'),
  nav: document.getElementById('mainNav'),
}).bind();

new MegaMenu(document.getElementById('mainNav')).bind();
