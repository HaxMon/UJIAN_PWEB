<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $namaArray = $_POST['nama'];
    $emailArray = $_POST['email'];
    $teleponArray = $_POST['telepon'];

    $koneksi = mysqli_connect("localhost", "root", "", "cafe_db");

    for ($i = 0; $i < count($namaArray); $i++) {
        $nama = mysqli_real_escape_string($koneksi, $namaArray[$i]);
        $email = mysqli_real_escape_string($koneksi, $emailArray[$i]);
        $telepon = mysqli_real_escape_string($koneksi, $teleponArray[$i]);
    
        $query = "INSERT INTO pelanggan (nama, email, telepon) VALUES ('$nama', '$email', '$telepon')";
        $result = mysqli_query($koneksi, $query);
    
        if (!$result) {
            die("Query error: " . mysqli_error($koneksi));
        }
    }

    mysqli_close($koneksi);

    header("Location: index.php");
    exit;
}
?>