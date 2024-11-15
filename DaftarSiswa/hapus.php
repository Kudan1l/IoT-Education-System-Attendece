<?php
    include "Koneksi.php";

    //baca id data yang akan di hapus
    $id = $_GET['id'];

    //hapus data
    $hapus = mysqli_query($konek, "delete from siswa where id='$id'");

    //jika berhasil terhapus tampilan pesan Terhapus
    //kemudia kembali ke data siswa

    if($hapus){
        echo "<script>
                alert('Terhapus');
                location.replace('DaftarSiswa.php');
              </script>";
    }else {
        echo "<script>
                alert('Gagal Terhapus');
                location.replace('DaftarSiswa.php');
              </script>";

    }
?>