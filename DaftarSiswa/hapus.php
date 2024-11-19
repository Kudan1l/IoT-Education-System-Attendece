<?php
    include "Koneksi.php";

    //baca id data yang akan di hapus
    $id = $_GET['id'];

    // Jika tombol konfirmasi hapus ditekan
    if (isset($_POST['btnHapus'])) {
        //hapus data
        $hapus = mysqli_query($conn, "delete from biodata_siswa where id='$id'");

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
    }elseif (isset($_POST['btnCancel'])) {
        // Jika tombol cancel diklik, kembali ke halaman daftar siswa tanpa menghapus data
        echo "<script>location.replace('DaftarSiswa.php');</script>";
    } else {
        // Menampilkan konfirmasi sebelum menghapus
        echo '
        <div class="container" style="display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100vh;">
            <h3>Konfirmasi Penghapusan Data</h3>
            <form method="POST" style="text-align: center;">
                <p>Anda yakin ingin menghapus data ini?</p>
                <button type="submit" name="btnHapus" class="btn btn-danger">Simpan</button>
                <button type="submit" name="btnCancel" class="btn btn-secondary">Cancel</button>
            </form>
        </div>';
    }

?>

