(function () {
  const toast = document.getElementById('toast');
  let toastTimer;

  window.showToast = function (msg) {
    if (!toast) return;
    toast.textContent = msg;
    toast.classList.add('show');
    clearTimeout(toastTimer);
    toastTimer = setTimeout(function () {
      toast.classList.remove('show');
    }, 2200);
  };

  const mobileToggle = document.getElementById('mobileToggle');
  const mainNav = document.getElementById('mainNav');
  if (mobileToggle && mainNav) {
    mobileToggle.addEventListener('click', function () {
      mainNav.classList.toggle('open');
    });
  }

  document.querySelectorAll('.nav-menu-item').forEach(function (item) {
    const btn = item.querySelector('.nav-menu-button');
    if (!btn) return;
    btn.addEventListener('click', function (e) {
      e.preventDefault();
      const open = item.classList.contains('is-open');
      document.querySelectorAll('.nav-menu-item.is-open').forEach(function (el) {
        el.classList.remove('is-open');
        const b = el.querySelector('.nav-menu-button');
        if (b) b.setAttribute('aria-expanded', 'false');
      });
      if (!open) {
        item.classList.add('is-open');
        btn.setAttribute('aria-expanded', 'true');
      }
    });
  });

  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') {
      document.querySelectorAll('.nav-menu-item.is-open').forEach(function (el) {
        el.classList.remove('is-open');
        const b = el.querySelector('.nav-menu-button');
        if (b) b.setAttribute('aria-expanded', 'false');
      });
    }
  });

  document.addEventListener('click', function (e) {
    if (!e.target.closest('.nav-menu-item')) {
      document.querySelectorAll('.nav-menu-item.is-open').forEach(function (el) {
        el.classList.remove('is-open');
        const b = el.querySelector('.nav-menu-button');
        if (b) b.setAttribute('aria-expanded', 'false');
      });
    }
  });
})();
