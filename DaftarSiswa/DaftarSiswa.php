<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>
    <link rel="stylesheet" href="DaftarSiswa.css">
</head>
<body>

    <div class="container">
        <h1>Daftar Siswa</h1>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>NISN</th>
                    <th>Nama Siswa</th>
                    <th>Kelas</th>
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
                    <td><?php echo $data['Nama Siswa'];?></td>
                    <td><?php echo $data['Kelas'];?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

</body>
</html>
