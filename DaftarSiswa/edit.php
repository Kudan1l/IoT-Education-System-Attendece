<!-- Proses penyimpanan -->

<?php
    include "koneksi.php";
    
    //baca ID data yang akan di edit

    $id = $_GET['id'];

    //baca data siswa berdasarkan id
    $cari = mysqli_query($konek, "select * from siswa where id='$id'");
    $hasil = mysqli_fetch_array($cari);


    //jika tombol simpan diklik
    if (isset($_POST['btnSimpan'])) {
        //baca isi inputan
        $idkartu = $_POST['ID_Kartu'];
        $namasiswa = $_POST['Nama_Siswa'];
        $kelas = $_POST['Kelas'];
        $nisn = $_POST['NISN'];

        //simpan ke tabel siswa
        $simpan = mysqli_query($konek , "update siswa set ID_Kartu ='$idkartu' , Nama_Siswa='$namasiswa', Kelas='$kelas', NISN='$nisn' where id='$id'");

        //jika berhasil tersimpan, tampilkan pesan tersimpan,
        //kembali ke data siswa
        if($simpan){
            echo "
            <script>
                alert('Tersimpan');
                location.replace('DaftarSiswa.php');
            </script>
            ";
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
        <h3> Edit Data Siswa </h3>

        <!-- form input -->
        <form method="POST">
            <div class="form-group">
                <label> ID Kartu </label>
                <input type="text" name="ID_Kartu" placeholder="Nomor Kartu RFID" class="form-control" style="width :200 px" value="<?php echo $hasil['ID_Kartu']; ?>">
            </div>
            <div class="form-group">
                <label> Nama Siswa </label>
                <input type="text" name="Nama_Siswa" placeholder="Nama Lengkap" class="form-control" style="width :200 px" value="<?php echo $hasil['Nama_Siswa']; ?>">
            </div>
            <div class="form-group">
                <label> Kelas </label>
                <input type="text" name="Kelas" placeholder="Kelas" class="form-control" style="width :200 px" value="<?php echo $hasil['Kelas']; ?>">
            </div>
            <div class="form-group">
                <label> NISN </label>
                <input type="text" name="NISN" placeholder="NISN" class="form-control" style="width :200 px" value="<?php echo $hasil['NISN']; ?>">
            </div>

            <button class="btn btn-success" name="btnSimpan" id="btnSimpan" style="margin-bottom: 5px;"> Simpan </button>
            <button style="margin-top:-5px;" type="button" class="btn btn-danger" onclick="window.location.href='DaftarSiswa.php'">Cancel</button>
            
        </form>
    </div>
</body>
</html>