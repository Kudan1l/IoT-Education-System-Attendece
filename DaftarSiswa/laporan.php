<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />

    <link rel="stylesheet" href="../style.css" />
  </head>
  <body>
    <div id="sidebar">
      <i class="bi bi-x-circle-fill" id="close-menu"></i>
      <div id="sidebar-header">
        <h3 id="welcome">Selamat Datang</h3>
        <h3 id="UserName">SMA Darul Hikmah</h3>
      </div>
      <nav id="sidebar-menu">
        <a href="">
          <i class="bi bi-grid-1x2-fill"></i>
          <span class="typography"> Dashboard </span>
        </a>
        <a href="DaftarSiswa/DaftarSiswa.php">
          <i class="bi bi-people-fill"></i>
          <span class="typography"> Daftar Siswa </span>
        </a>
        <a href="">
          <i class="bi bi-person-fill-check"></i>
          <span class="typography"> Absensi </span>
        </a>
        <a href="DaftarSiswa/laporan.php" class="active">
          <i class="bi bi-file-earmark-bar-graph-fill"></i>
          <span class="typography"> Laporan </span>
        </a>
      </nav>

      <!-- <a href="" id="logout">
        <i class="bi bi-box-arrow-right"></i>
        <span>Log Out</span>
      </a> -->

      <button id="logout">
        <i class="bi bi-box-arrow-right"></i>
        <span>Log Out</span>
      </button>
    </div>

    <div class="content" id="main-content">
      <div class="action">
        <i class="bi bi-list" id="hamburger-menu"></i>
        <h2>Laporan</h2>
      </div>
    <div class="date-input mb-1" style="float:right">
        <form action="">
            <input type="date"></input>
        </form>
    </div>
      <table class="table text-center table-bordered">
        <thead class="table-dark">
            <th>No</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Tanggal</th>
            <th colspan="3">Status</th>
        </thead>
        <tr>
            <form action="">
            <td>1</td>
            <td>Ujang</td>
            <td>IT-46-02</td>
            <td>10-02-2004</td>
            <td> <input type="radio" name="absen" >Hadir</input> </td>
            <td><input type="radio" name="absen">Alpa</input></td>
            <td><input type="radio" name="absen">Izin</input></td>
            </form>
        </tr>
        <tr>
            <form action="">
            <td>2</td>
            <td>Ujang</td>
            <td>IT-46-02</td>
            <td>10-02-2004</td>
            <td> <input type="radio" name="absen" >Hadir</input> </td>
            <td><input type="radio" name="absen">Alpa</input></td>
            <td><input type="radio" name="absen">Izin</input></td>
            </form>
        </tr>
        <tr>
            <form action="">
            <td>3</td>
            <td>Ujang</td>
            <td>IT-46-02</td>
            <td>10-02-2004</td>
            <td> <input type="radio" name="absen" >Hadir</input> </td>
            <td><input type="radio" name="absen">Alpa</input></td>
            <td><input type="radio" name="absen">Izin</input></td>
            </form>
        </tr>
        <tr>
            <form action="">
            <td>4</td>
            <td>Ujang</td>
            <td>IT-46-02</td>
            <td>10-02-2004</td>
            <td> <input type="radio" name="absen" >Hadir</input> </td>
            <td><input type="radio" name="absen">Alpa</input></td>
            <td><input type="radio" name="absen">Izin</input></td>
            </form>
        </tr>
        <tr>
            <form action="">
            <td>5</td>
            <td>Ujang</td>
            <td>IT-46-02</td>
            <td>10-02-2004</td>
            <td> <input type="radio" name="absen" >Hadir</input> </td>
            <td><input type="radio" name="absen">Alpa</input></td>
            <td><input type="radio" name="absen">Izin</input></td>
            </form>
        </tr>
</table>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script type="module" src="JS/navbar.js"></script>
  </body>
</html>