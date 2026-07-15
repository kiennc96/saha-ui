function copyCode(code){navigator.clipboard?.writeText(code);showToast('Đã sao chép mã '+code)}
    document.querySelectorAll('.faq-q').forEach(btn=>btn.addEventListener('click',()=>btn.closest('.faq-item').classList.toggle('open')));
    document.querySelectorAll('.filter-btn').forEach(btn=>btn.addEventListener('click',()=>{
      document.querySelectorAll('.filter-btn').forEach(x=>x.classList.remove('active'));btn.classList.add('active');
      const f=btn.dataset.filter;
      document.querySelectorAll('.promo-item').forEach(item=>item.classList.toggle('hidden',f!=='all'&&item.dataset.status!==f));
    }));
    function updateCountdown(){
      document.querySelectorAll('.countdown').forEach(c=>{
        const end=new Date(c.dataset.end).getTime(),diff=Math.max(0,end-Date.now());
        const d=Math.floor(diff/86400000),h=Math.floor(diff/3600000)%24,m=Math.floor(diff/60000)%60,s=Math.floor(diff/1000)%60;
        c.querySelector('[data-days]').textContent=String(d).padStart(2,'0');
        c.querySelector('[data-hours]').textContent=String(h).padStart(2,'0');
        c.querySelector('[data-minutes]').textContent=String(m).padStart(2,'0');
        c.querySelector('[data-seconds]').textContent=String(s).padStart(2,'0');
      });
    }
    updateCountdown();setInterval(updateCountdown,1000);