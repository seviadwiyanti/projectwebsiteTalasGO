const searchButton = document.getElementById("search-button");
const searchInput = document.getElementById("search-input");

searchButton.addEventListener("click", () => {
  const inputValue = searchInput.value.toLowerCase();

  // Mengambil semua baris data pada tabel
  const rows = document.querySelectorAll("tbody tr");

  // Iterasi melalui setiap baris dan menentukan apakah harus ditampilkan atau disembunyikan
  rows.forEach((row) => {
    const cells = row.getElementsByTagName("td");

    // Flag untuk menentukan apakah baris harus ditampilkan atau disembunyikan
    let showRow = false;

    // Iterasi melalui setiap sel dalam baris
    for (let i = 0; i < cells.length; i++) {
      const cellText = cells[i].textContent.toLowerCase();

      // Jika teks dalam sel mengandung kata kunci pencarian, set showRow menjadi true
      if (cellText.includes(inputValue)) {
        showRow = true;
        break; // Hentikan iterasi jika sudah ditemukan satu sel yang cocok
      }
    }

    // Menampilkan atau menyembunyikan baris berdasarkan nilai showRow
    row.style.display = showRow ? "" : "none";
  });
});
