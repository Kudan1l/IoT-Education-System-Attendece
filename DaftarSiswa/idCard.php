<?php 
    include "Koneksi.php";

    // Ambil data ID kartu dari tabel tmprfid
    $sql = mysqli_query($conn, "SELECT * FROM tmprfid");
    $data = mysqli_fetch_array($sql);
    $nokartu = isset($data['no_card']) ? $data['no_card'] : '';

    $cek_id = mysqli_query($conn, "SELECT * FROM siswa WHERE ID_Kartu = '$nokartu'");
    $id_terdaftar = mysqli_num_rows($cek_id) > 0;

    if ($id_terdaftar && $nokartu != '') {
        echo "<script>alert('ID Kartu sudah terdaftar.');</script>";
        mysqli_query($conn, "DELETE FROM tmprfid");
    }
?>

<div class="form-group">
    <label> ID Kartu </label>
    <input type="text" name="ID_Kartu" placeholder="Nomor Kartu RFID" class="form-control" style="width :200 px" value="<?php echo $nokartu; ?>" <?php echo $id_terdaftar ? 'readonly' : ''; ?>>
</div>
