<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>
    <link rel="stylesheet" href="DaftarSiswa.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    
</head>
<body>
    
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
                    include "koneksi.php";
                    
                    //baca data karyawan
                    $sql = mysqli_query($konek, "select * from siswa");
                    $no = 0;
                    while($data = mysqli_fetch_array($sql)){
                        $no++;
                        ?>
                <tr>
                    <td> <?php echo $no; ?></td>
                    <td><?php echo $data['NISN'];?></td>
                    <td><?php echo $data['Nama_Siswa'];?></td>
                    <td><?php echo $data['Kelas'];?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $data['id']; ?>">
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
    