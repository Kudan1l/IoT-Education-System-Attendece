<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "absensi";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "SELECT * FROM biodata_siswa";
    $result = $conn->query($sql);
    
    $rows = [];

    if ($result->num_rows > 0) {
        // Ambil data per baris dan masukkan ke dalam array
        while($row = $result->fetch_assoc()) {
            $rows[] = $row ;
        }
    }

    // Menutup koneksi database
    $conn->close();

    // Mengubah data menjadi format JSON
    echo json_encode($rows);
?>