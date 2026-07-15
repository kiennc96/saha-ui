import { FaqToggle } from './lib/faq-toggle.js';
import { SiliconeCalculator } from './lib/silicone-calc.js';
import { ChoiceGroup, changeQty, addCart } from './lib/pdp-purchase.js';
import { ProductGallery, ScrollSpy } from './lib/pdp-gallery.js';

new FaqToggle(document).bind();

new ChoiceGroup(document, {
  onColorChange: (value) => {
    const el = document.getElementById('selectedColor');
    if (el) el.textContent = value;
  },
}).bind();

window.changeQty = (delta) => changeQty(document.getElementById('qty'), delta);
window.addCart = () =>
  addCart(document.getElementById('qty'), document.querySelector('.bubble'), {
    onAdded: (qty) => window.showToast?.(`Đã thêm ${qty} sản phẩm vào giỏ`),
  });

new SiliconeCalculator({
  length: document.getElementById('length'),
  width: document.getElementById('width'),
  depth: document.getElementById('depth'),
  result: document.getElementById('calcResult'),
}).bind();

new ProductGallery(
  { visual: document.getElementById('productVisual') },
  {
    front: '<div class="tube"><div class="tube-label">APOLLO<small>A500</small><span>Neutral Silicone</span></div></div>',
    side: '<div class="tube"><div class="tube-label" style="border-color:#64748b;color:#334155">THÔNG SỐ<span>300ml</span></div></div>',
    box: '<div style="width:270px;height:190px;background:#c79b62;border:5px solid #9b6a35;border-radius:7px;display:grid;place-items:center;color:#fff;font-size:25px;font-weight:800;text-align:center">APOLLO A500<br><small>THÙNG 24 CHAI</small></div>',
    application:
      '<img src="https://images.unsplash.com/photo-1505693416388-ac5ce068fe85?auto=format&fit=crop&w=900&q=80" alt="Ứng dụng nhôm kính" style="width:100%;height:510px;object-fit:cover">',
  }
).bind(document);

const anchors = [...document.querySelectorAll('.anchor-inner a')];
new ScrollSpy(anchors).bind();
