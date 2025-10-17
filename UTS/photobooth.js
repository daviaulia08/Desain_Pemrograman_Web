const video = document.getElementById("video"); //tangkapan kamera
const captureBtn = document.getElementById("capture-btn"); //menjepret foto
const timerInput = document.getElementById("timer"); //berapa lama hitung mundur
const photosContainer = document.getElementById("photos"); //hasil foto
const colorStrip = document.getElementById("color-strip"); //aturan rubah warna border
const root = document.documentElement; // mau ngubah border dan color

let currentBorderColor = getComputedStyle(root).getPropertyValue('--border-color').trim();
                                                                
// Akses kamera
navigator.mediaDevices.getUserMedia({ video: true }).then((stream) => {
  video.srcObject = stream;
});

// Ganti warna border
colorStrip.addEventListener("click", (e) => { // e itu event object (berisi informasi klik)
  const btn = e.target.closest(".color-btn");
  if (!btn) return;

  [...colorStrip.querySelectorAll(".color-btn")].forEach(b => b.setAttribute("aria-pressed", "false"));
  btn.setAttribute("aria-pressed", "true");

  currentBorderColor = btn.dataset.color;
  root.style.setProperty("--border-color", currentBorderColor);
  video.style.borderColor = currentBorderColor;
});

// Capture photo
captureBtn.addEventListener("click", () => {
  let timer = Number(timerInput.value) - 1;

  if (timer > 0) {
    captureBtn.disabled = true; // Saat hitung mundur berjalan, tombol Capture dinonaktifkan
    //  agar tidak bisa ditekan berkali-kali dan menimbulkan error.

    const countdown = setInterval(() => { // menjalankan fungsi per detik
      captureBtn.textContent = `Capture (${Math.max(timer, 0)})`; // mengubah 4 - 3 - 2 // tetp sampai0 x-

      if (timer <= 0) {
        clearInterval(countdown);
        captureBtn.textContent = "Capture";
        captureBtn.disabled = false;
        capturePhoto();
      }
      timer--;
    }, 1000); // 1000 milidetik = 1 detik
  } else {
    capturePhoto();
  }
});

// bnr bnr menangkap // video live - gambar diam //menggambar di kanvas
function capturePhoto() {
  const canvas = document.createElement("canvas");
  const ctx = canvas.getContext("2d"); //menggambar kertas gambar
  //resolusi penuh
  canvas.width = video.videoWidth;
  canvas.height = video.videoHeight;

  ctx.drawImage(video, 0, 0, canvas.width, canvas.height); //menggambar satu frame dr sumber

  const strokeWidth = Math.max(8, Math.round(canvas.width * 0.012)); //tetap proporsional
  ctx.lineWidth = strokeWidth;
  ctx.strokeStyle = currentBorderColor;
  //strokerect(x,y,width,height) //menggambar garis tepi
  ctx.strokeRect(
    strokeWidth / 2,
    strokeWidth / 2,
    canvas.width - strokeWidth,
    canvas.height - strokeWidth
  );

  const dataURL = canvas.toDataURL("image/png"); //canvas - gambar digital

  const photoDiv = document.createElement("div");
  photoDiv.classList.add("photo"); //kelas foto

  const img = document.createElement("img");
  img.src = dataURL;
  img.style.borderColor = currentBorderColor;
  photoDiv.appendChild(img); // memasukkan img ke dalam foto

  const downloadBtn = document.createElement("button");
  downloadBtn.textContent = "Download";
  downloadBtn.addEventListener("click", () => {
    const a = document.createElement("a");
    a.href = dataURL;
    a.download = "photo.png";
    a.click();
  });

  photoDiv.appendChild(downloadBtn);
  photosContainer.appendChild(photoDiv);
}
