// ambil element yang diperlukan
const keyword = document.getElementById("keyword");
const containerArtikel = document.getElementById("container-artikel");

// tambahkan event ketika keyword ditulis
keyword.addEventListener("keyup", function () {
  // buat object ajax
  const xhr = new XMLHttpRequest();

  // cek kesiapan ajax
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      containerArtikel.innerHTML = xhr.responseText;
    }
  };

  // eksekusi ajax
  xhr.open("GET", "ajax/data-artikel.php?keyword=" + keyword.value, true);
  xhr.send();
});
