$("#close-menu").click(function () {
  $("#sidebar").addClass("active");
  $("#main-content").addClass("active");
  $("#hamburger-menu").show(); // Show the hamburger button
});

$("#hamburger-menu").click(function () {
  $("#sidebar").removeClass("active");
  $("#main-content").removeClass("active");
  $("#hamburger-menu").hide();
});

$(document).ready(function () {
  $("#hamburger-menu").hide(); // Hide hamburger menu on page load

  // Fungsi untuk mengambil data menggunakan fetch API
  fetch('../iotedu/absen_page.php')
  .then(response => response.json())  // Mengubah response menjadi format JSON
  .then(data => {
      const tbody = document.querySelector('tbody');
      
      // Loop melalui data dan menambahkan baris ke tabel
      data.forEach((item, index) => {
          const tr = document.createElement('tr');
          tr.innerHTML = `
              <td class="number"> ${index + 1}. </td>
              <td>${item. id_siswa} . </td>
              <td>${item.NISN}</td>
              <td>${item.NAMA}</td>
              <td class="keterangan">
                  <input type="radio" name="izin${item. id_siswa}" value="HADIR"> HADIR
                  <input type="radio" name="izin${item. id_siswa}" value="SAKIT"> SAKIT
                  <input type="radio" name="izin${item. id_siswa}" value="IZIN"> IZIN
                  <input type="radio" name="izin${item. id_siswa}" value="ALPHA"> ALPHA
              </td>
          `;
          tbody.appendChild(tr);
      });
  })
  .catch(error => {
      console.error('Error fetching data:', error);
  });

});


