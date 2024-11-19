<?php
    include "./DaftarSiswa/Koneksi.php";

    header('Content-Type: application/json'); // Set output sebagai JSON

    // Ambil idCard dari parameter GET
    $nokartu = isset($_GET['idCard']) ? $_GET['idCard'] : '';

    if (empty($nokartu)) {
        // Jika idCard tidak diberikan, kirim pesan error
        echo json_encode([
            "status" => "error",
            "message" => "ID Kartu tidak ditemukan."
        ]);
        exit;
    }

    // Hapus data lama dari tabel sementara
    $delete = mysqli_query($conn, "DELETE FROM tmprfid");

    // Simpan data baru ke tabel sementara
    $save = mysqli_query($conn, "INSERT INTO tmprfid(no_card) VALUES ('$nokartu')");

    if ($save) {
        // Ambil data siswa berdasarkan no_card
        $query = mysqli_query($conn, "SELECT ID_Kartu, Nama_Siswa FROM siswa WHERE ID_Kartu = '$nokartu'");
        $siswa = mysqli_fetch_assoc($query);

        if ($siswa) {
            // Jika siswa ditemukan, kirim respons JSON sukses
            echo json_encode([
                "status" => "success",
                "data" => $siswa
            ]);
        } else {
            // Jika kartu tidak terdaftar pada siswa
            echo json_encode([
                "status" => "error",
                "message" => "Kartu tidak terdaftar."
            ]);
        }
    } else {
        // Jika gagal menyimpan data ke tmprfid
        echo json_encode([
            "status" => "error",
            "message" => "Gagal menyimpan data RFID."
        ]);
    }
?>
