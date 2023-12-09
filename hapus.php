<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $koneksi = mysqli_connect("localhost", "root", "", "cafe_db");

    $query = "DELETE FROM pelanggan WHERE id=?";
    $stmt = mysqli_prepare($koneksi, $query);
    mysqli_stmt_bind_param($stmt, 'i', $id);
    $result = mysqli_stmt_execute($stmt);

    mysqli_close($koneksi);

    if ($result) {
        header("Location: index.php?delete_success=1");
        exit;
    } else {
        header("Location: index.php?delete_error=1");
        exit;
    }
}
?>