// ambil element yang diperlukan
const keyword = document.getElementById("keyword");
const containerToko = document.getElementById("container-toko");

// tambahkan event ketika keyword ditulis
keyword.addEventListener("keyup", function () {
  // buat object ajax
  const xhr = new XMLHttpRequest();

  // cek kesiapan ajax
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      containerToko.innerHTML = xhr.responseText;
    }
  };

  // eksekusi ajax
  xhr.open("GET", "ajax/data-toko.php?keyword=" + keyword.value, true);
  xhr.send();
});
