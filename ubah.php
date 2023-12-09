<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Pelanggan</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            color: #495057;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            text-align: center;
        }

        h1 {
            color: #343a40;
        }

        form {
            margin-top: 20px;
            width: 80%;
            max-width: 400px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-top: 10px;
            color: #343a40;
        }

        input {
            width: 100%;
            padding: 12px;
            margin-top: 5px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ced4da;
            border-radius: 4px;
        }

        button {
            padding: 12px 16px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #0056b3;
        }

        a {
            text-decoration: none;
            padding: 8px 16px;
            background-color: #28a745;
            color: #fff;
            border-radius: 4px;
            transition: background-color 0.3s;
            margin-top: 10px;
            display: inline-block;
        }

        a:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <?php
    $id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

    $koneksi = mysqli_connect("localhost", "root", "", "cafe_db");

if (!$koneksi) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}

    $query = "SELECT * FROM pelanggan WHERE id=$id";
    $result = mysqli_query($koneksi, $query);
    $pelanggan = mysqli_fetch_assoc($result);

    mysqli_close($koneksi);
    ?>

    <h1>Ubah Pelanggan</h1>

    <form action="proses_ubah.php" method="post">
        <input type="hidden" name="id" value="<?php echo $pelanggan['id']; ?>">

        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" value="<?php echo $pelanggan['nama']; ?>" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $pelanggan['email']; ?>" required>

        <label for="telepon">Telepon:</label>
        <input type="tel" id="telepon" name="telepon" value="<?php echo $pelanggan['telepon']; ?>" required>

        <button type="submit">Simpan Perubahan</button>
    </form>

    <a href="index.php">Kembali</a>
</body>
</html>