import { escapeHtml } from './lib/escape-html.js';
import { setHtmlQueue } from './lib/deferred-dom.js';

/** Data trang chủ — tách khỏi DOM. */
export const homeCategories = [
  ['🧴', 'Keo silicone'],
  ['⚙', 'Keo công nghiệp'],
  ['♜', 'Keo chống thấm'],
  ['🧯', 'Sơn xịt'],
  ['♙', 'Keo khóa ren'],
  ['▥', 'Foam / PU'],
  ['▦', 'Phụ trợ khác'],
];

export const homeProducts = [
  ['Apollo Silicone A500', 'Trung tính', '300ml', '85.000đ', 'https://images.unsplash.com/photo-1583947215259-38e31be8751f?auto=format&fit=crop&w=300&q=80', '-17%'],
  ['Wacker GP-N', 'Keo silicone trung tính', '300ml', '120.000đ', 'https://images.unsplash.com/photo-1620916566398-39f1143ab7be?auto=format&fit=crop&w=300&q=80', ''],
  ['Loctite 243', 'Keo khóa ren', '50ml', '220.000đ', 'https://images.unsplash.com/photo-1600857544200-b2f666a9a2ec?auto=format&fit=crop&w=300&q=80', ''],
  ['Bamboo A300', 'Keo silicone axit', '300ml', '65.000đ', 'https://images.unsplash.com/photo-1608248543803-ba4f8c70ae0b?auto=format&fit=crop&w=300&q=80', ''],
  ["X'traseal MC-808", 'Keo trám đa năng', '450ml', '45.000đ', 'https://images.unsplash.com/photo-1608571423902-eed4a5ad8108?auto=format&fit=crop&w=300&q=80', ''],
  ['Sơn xịt ATM', 'Acrylic', '400ml', '25.000đ', 'https://images.unsplash.com/photo-1571781926291-c477ebfd024b?auto=format&fit=crop&w=300&q=80', ''],
];

export const homeApps = [
  ['Nhôm kính', 'https://images.unsplash.com/photo-1494526585095-c41746248156?auto=format&fit=crop&w=500&q=80'],
  ['Xây dựng', 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=500&q=80'],
  ['Nội thất', 'https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?auto=format&fit=crop&w=500&q=80'],
  ['Quảng cáo', 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?auto=format&fit=crop&w=500&q=80'],
  ['Cơ khí - Chế tạo', 'https://images.unsplash.com/photo-1565043666747-69f6646db940?auto=format&fit=crop&w=500&q=80'],
  ['Công nghiệp', 'https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?auto=format&fit=crop&w=500&q=80'],
];

export const homePromos = [
  ['COMBO SILICONE A500 + AX-100', '15%', 'https://images.unsplash.com/photo-1584302179602-e4c3d3fd629d?auto=format&fit=crop&w=500&q=80'],
  ['COMBO CHỐNG THẤM Sigee + Wacker', '20%', 'https://images.unsplash.com/photo-1586864387967-d02ef85d93e8?auto=format&fit=crop&w=500&q=80'],
  ['COMBO KEO CÔNG NGHIỆP Loctite 243 + 495', '10%', 'https://images.unsplash.com/photo-1604709177225-055f99402ea3?auto=format&fit=crop&w=500&q=80'],
];

export const homeNews = [
  ['Cách chọn keo silicone phù hợp theo từng vật liệu', 'https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?auto=format&fit=crop&w=600&q=80'],
  ['Phân biệt keo trung tính và keo axit', 'https://images.unsplash.com/photo-1586864387967-d02ef85d93e8?auto=format&fit=crop&w=600&q=80'],
  ['Keo chống thấm là gì? Ứng dụng trong xây dựng', 'https://images.unsplash.com/photo-1487958449943-2429e8be8625?auto=format&fit=crop&w=600&q=80'],
];

export function renderCategoryHtml(categories) {
  return categories
    .map(
      ([icon, label]) =>
        `<a class="category" href="#products"><div class="icon">${escapeHtml(icon)}</div><span>${escapeHtml(label)}</span></a>`
    )
    .join('');
}

export function renderProductHtml(products) {
  return products
    .map((p) => {
      const [name, type, size, price, img, discount] = p;
      const badge = discount ? `<span class="discount">${escapeHtml(discount)}</span>` : '';
      return `<article class="product">${badge}<div class="product-image"><img src="${escapeHtml(img)}" alt="${escapeHtml(name)}"></div><h3>${escapeHtml(name)}</h3><div class="meta">${escapeHtml(type)}<br>${escapeHtml(size)}</div><div class="price">${escapeHtml(price)}</div><div class="stock">Còn hàng</div><div class="card-actions"><button type="button" class="cart-btn" data-toast="Đã thêm ${escapeHtml(name)} vào giỏ">🛒</button><button type="button" class="consult-btn" data-toast="Đã gửi yêu cầu tư vấn ${escapeHtml(name)}">Nhận tư vấn</button></div></article>`;
    })
    .join('');
}

export function renderAppHtml(apps) {
  return apps
    .map(
      ([label, img]) =>
        `<a class="app-card"><img src="${escapeHtml(img)}" alt="${escapeHtml(label)}"><div>⌂ ${escapeHtml(label)}</div></a>`
    )
    .join('');
}

export function renderPromoHtml(promos) {
  return promos
    .map(
      ([title, pct, img]) =>
        `<article class="promo"><div><h3>${escapeHtml(title)}</h3><strong>${escapeHtml(pct)}</strong><button type="button" data-toast="Đã chọn mua combo">Mua ngay →</button></div><img src="${escapeHtml(img)}" alt="${escapeHtml(title)}"></article>`
    )
    .join('');
}

export function renderNewsHtml(news) {
  return news
    .map(
      ([title, img], i) =>
        `<article class="news"><img src="${escapeHtml(img)}" alt="${escapeHtml(title)}"><div class="news-copy"><time>0${i + 5}/06/2025</time><h3>${escapeHtml(title)}</h3><p>Hướng dẫn chi tiết giúp lựa chọn đúng sản phẩm và thi công hiệu quả.</p><a href="danh-sach-tin-tuc.php">Đọc tiếp →</a></div></article>`
    )
    .join('');
}

function bindToastButtons(root) {
  root.addEventListener('click', (e) => {
    const btn = e.target.closest('[data-toast]');
    if (!btn) return;
    window.showToast?.(btn.dataset.toast);
  });
}

const jobs = [
  { el: document.getElementById('categories'), html: renderCategoryHtml(homeCategories) },
  { el: document.getElementById('productGrid'), html: renderProductHtml(homeProducts) },
  { el: document.getElementById('applicationGrid'), html: renderAppHtml(homeApps) },
  { el: document.getElementById('promoGrid'), html: renderPromoHtml(homePromos) },
  { el: document.getElementById('newsGrid'), html: renderNewsHtml(homeNews) },
];

setHtmlQueue(jobs);
bindToastButtons(document);
