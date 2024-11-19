<!-- Proses penyimpanan -->

<?php
    include "Koneksi.php";

    //jika tombol simpan diklik
    if (isset($_POST['btnSimpan'])) {
        //baca isi inputan
        $idkartu = $_POST['ID_Kartu'];
        $namasiswa = $_POST['Nama_Siswa'];
        $kelas = $_POST['Kelas'];
        $nisn = $_POST['NISN'];

        //simpan ke tabel siswa
        $simpan = mysqli_query($conn , "insert into siswa(ID_Kartu, Nama_Siswa, Kelas, NISN)values('$idkartu' ,'$namasiswa', '$kelas', '$nisn')");

        //jika berhasil tersimpan, tampilkan pesan tersimpan,
        //kembali ke data siswa
        if($simpan){
            echo "
            <script>
                alert('Tersimpan');
                location.replace('DaftarSiswa.php');
            </script>
            ";
            mysqli_query($conn, "DELETE FROM tmprfid");
        }
        else {
            echo "
            <script>
                alert('Gagal Tersimpan');
                location.replace('DaftarSiswa.php');
            </script>
            ";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Siswa</title>
    <link rel="stylesheet" href="DaftarSiswa.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    
</head>
<body>
    <div class="container-fluid">
        <h3> Tambah Data Siswa </h3>

        <!-- form input -->
        <form method="POST">
            <div id="nocard"></div>
            <div class="form-group">
                <label> Nama Siswa </label>
                <input type="text" name="Nama_Siswa" placeholder="Nama Lengkap" class="form-control" style="width :200 px">
            </div>
            <div class="form-group">
                <label> Kelas </label>
                <input type="text" name="Kelas" placeholder="Kelas" class="form-control" style="width :200 px">
            </div>
            <div class="form-group">
                <label> NISN </label>
                <input type="text" name="NISN" placeholder="NISN" class="form-control" style="width :200 px">
            </div>
            <button class="btn btn-success" name="btnSimpan" id="btnSimpan" style="margin-bottom: 5px;"> Simpan </button>
            <button style="margin-top:-5px;" type="button" class="btn btn-danger" onclick="window.location.href='DaftarSiswa.php'">Cancel</button>
            
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <script>
        $(document).ready(function() {
            setInterval(function(){
                $("#nocard").load('idCard.php')
            }, 500);
        });  
    </script>
</body>
</html>