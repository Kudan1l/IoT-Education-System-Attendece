<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link rel="stylesheet" href="DaftarSiswa.css">
    
</head>
<body>
    <div id="sidebar">
      <i class="bi bi-x-circle-fill" id="close-menu"></i>
      <div id="sidebar-header">
        <h3 id="welcome">Selamat Datang</h3>
        <h3 id="UserName">Agung Laksono Putra</h3>
      </div>
      <nav id="sidebar-menu">
        <a href="../dashboard.html">
          <i class="bi bi-grid-1x2-fill"></i>
          <span class="typography"> Dashboard </span>
        </a>
        <a href="DaftarSiswa/DaftarSiswa.php" class="active">
          <i class="bi bi-people-fill"></i>
          <span class="typography"> Daftar Siswa </span>
        </a>
        <a href="../satu.html">
          <i class="bi bi-person-fill-check"></i>
          <span class="typography"> Absensi </span>
        </a>
        <a href="">
          <i class="bi bi-file-earmark-bar-graph-fill"></i>
          <span class="typography"> Laporan </span>
        </a>
      </nav>


      <button id="logout">
        <i class="bi bi-box-arrow-right"></i>
        <span>Log Out</span>
      </button>
    </div>    

    <div class="container">
        <h1>Daftar Siswa</h1>
        
        <table style="margin-bottom: 15px;">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NISN</th>
                    <th>Nama Siswa</th>
                    <th>Kelas</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    //koneksi ke database
                    include "Koneksi.php";
                    
                    //baca data karyawan
                    $sql = mysqli_query($conn, "select * from siswa");
                    $no = 0;
                    while($data = mysqli_fetch_array($sql)){
                        $no++;
                ?>
                <tr>
                    <td> <?php echo "$no."; ?></td>
                    <td><?php echo $data['NISN'];?></td>
                    <td><?php echo $data['Nama_Siswa'];?></td>
                    <td><?php echo $data['Kelas'];?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $data['id']; ?>" >
                            Edit </a> | <a href="hapus.php?id=<?php echo $data['id']; ?>"> Hapus </a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            
            
            <!-- tombol tambah data karyawan -->
             <a href="tambah.php"><button class="btn btn-primary" style="float: left; ">+ Tambah Data</button></a>
        </div>
        
    </body>
    </html>
    