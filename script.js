// Script contoh untuk tombol beli
document.addEventListener("DOMContentLoaded", function () {
  const buttons = document.querySelectorAll(".produk button");

  buttons.forEach((button) => {
    button.addEventListener("click", () => {
      alert("Produk berhasil ditambahkan ke keranjang!");
    });
  });
});
