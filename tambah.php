<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pelanggan</title>
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
    <h1>Tambah Pelanggan</h1>

    <form action="proses_tambah.php" method="post">

        <label for="nama">Nama:</label>
        <input type="text" name="nama[]" required>

        <label for="email">Email:</label>
        <input type="email" name="email[]" required>

        <label for="telepon">Telepon:</label>
        <input type="tel" name="telepon[]" required>

        <button type="submit">Tambah Pelanggan</button>
    </form>

<a href="index.php">Kembali</a>
</body>
</html>