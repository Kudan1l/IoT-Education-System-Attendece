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

  for (let i = 1; i <= 5; i++) {
    const colomAbsen = `
                        <tr>
                        <td rowspan="2" class="number">${i}.</td>
                        <td colspan="2" id="nama">${nama}</td>
                        <td rowspan="2" class="keterangan">
                            <input type="radio" name="izin${id}" value="SAKIT"> SAKIT
                            <input type="radio" name="izin${id}" value="IZIN"> IZIN
                            <input type="radio" name="izin${id}" value="ALPHA"> ALPHA
                        </td>
                    </tr>
                    <!-- Baris kedua untuk informasi tambahan -->
                    <tr>
                        <td>XII-MIPA-1</td>
                        <td>1303220156</td>
                    </tr>
    `;
    $("tbody").append(colomAbsen);
  }
});
