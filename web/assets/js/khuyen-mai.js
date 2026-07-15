import { FaqToggle } from './lib/faq-toggle.js';
import { CountdownTicker } from './lib/countdown.js';
import { copyCode as copyVoucherCode, PromoStatusFilter } from './lib/clipboard-code.js';

new FaqToggle(document).bind();
new PromoStatusFilter(document).bind();
new CountdownTicker(document).start();

window.copyCode = (code) => {
  copyVoucherCode(code, {
    onCopied: (c) => window.showToast?.('Đã sao chép mã ' + c),
  });
};
