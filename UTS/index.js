const btn = document.getElementById('startBtn');

// Klik → animasi "pressed", lalu pindah ke halaman photobooth
btn.addEventListener('click', () => {
  btn.classList.add('pressed');
  setTimeout(() => {
    window.location.href = 'photobooth.html';
  }, 180);
});

// Sentuh (mobile) → efek timbul saat ditekan
btn.addEventListener('touchstart', () => btn.classList.add('pressed'), { passive: true });
btn.addEventListener('touchend', () => btn.classList.remove('pressed'), { passive: true });
