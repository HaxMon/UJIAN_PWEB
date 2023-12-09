<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Pelanggan Cafe</title>
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
        }

        h1 {
            color: #343a40;
            font-size: 2.5em;
            margin-bottom: 20px;
            text-align: center;
            text-shadow: 2px 2px 3px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 80%;
            border-collapse: collapse;
            margin-top: 20px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #dee2e6;
            padding: 12px;
            text-align: center;
        }

        th {
            background-color: #007bff;
            color: #fff;
        }

        .tombol-tengah {
            margin-top: 20px;
            text-align: center;
        }

        a {
            text-decoration: none;
            padding: 8px 16px;
            background-color: #28a745;
            color: #fff;
            border-radius: 4px;
            transition: background-color 0.3s;
            display: inline-block;
        }

        a:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <h1>Data Pelanggan</h1>

    <div class="tombol-tengah">
        <a href="tambah.php">Tambah Pelanggan</a>
    </div>

    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Telepon</th>
            <th>Aksi</th>
        </tr>

        <?php
        $koneksi = mysqli_connect("localhost", "root", "", "cafe_db");

        if (!$koneksi) {
            die("Koneksi ke database gagal: " . mysqli_connect_error());
        }
        $query = "SELECT * FROM pelanggan";
        $result = mysqli_query($koneksi, $query);

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['nama'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['telepon'] . "</td>";
            echo "<td>
                    <a href='hapus.php?id=" . $row['id'] . "'>Hapus</a>
                    <a href='ubah.php?id=" . $row['id'] . "'>Ubah</a>
                  </td>";
            echo "</tr>";
        }

        mysqli_close($koneksi);
        ?>
    </table>
</body>
</html>