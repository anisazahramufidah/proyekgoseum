<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Museum Theme</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        /* Body style */
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        /* Header style */
        h1 {
            text-align: center;
            color: #333;
        }

        /* Table style */
        .museum {
            margin: 20px auto;
            width: 80%;
            border-collapse: collapse;
        }

        .museum th,
        .museum td {
            padding: 10px;
        }

        .museum th {
            background-color: #333;
            color: #fff;
        }

        .museum tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .museum tr:hover {
            background-color: #ddd;
        }

        /* Form style */
        h4 {
            text-align: center;
            color: #333;
        }

        .add-museum-form {
            width: 80%;
            margin: 20px auto;
        }

        .add-museum-form input[type="text"],
        .add-museum-form input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .add-museum-form input[type="submit"] {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            font-weight: bold;
        }

        .add-museum-form input[type="submit"]:hover {
            background-color: #555;
        }
    </style>
</head>
    <body>
       <h4>Add Museum</h4>

    <form class="add-museum-form" action="Save2_Museum.php" method="POST">
        <input type="text" name="nama_museum" placeholder="Nama Museum" required>
        <input type="text" name="deskripsi_museum" placeholder="Deskripsi Museum" required>
        <input type="text" name="lokasi_museum" placeholder="Lokasi Museum" required>
        <input type="number" name="harga_tiket" placeholder="Harga Tiket" required>
        <input type="submit" value="Submit" name="submit">
    </form>
    </body>
<body>
    <h1>Menampilkan Tabel Museum</h1>

    <h3>Daftar Museum</h3>

    <table border="1" class="museum">
        <tr>
            <th>Nama Museum</th>
            <th>Deskripsi Museum</th>
            <th>Lokasi Museum</th>
            <th>Harga Tiket</th>
            <th>Aksi</th>
        </tr>
        <?php
            include "Koneksi.php";
            $query_mysql = mysqli_query($host, "SELECT * FROM museum")or die(mysqli_error());
            while($data = mysqli_fetch_array($query_mysql)){
        ?>
        <tr>
            <td><?php echo $data['nama_museum']; ?></td>
            <td><?php echo $data['deskripsi_museum']; ?></td>
            <td><?php echo $data['lokasi_museum']; ?></td>
            <td><?php echo $data['harga_tiket']; ?></td>
            <td>
                <a href="Update_Museum.php?update=<?php echo $data['id_museum']; ?>">Update</a> |
                <a href="Delete_Museum.php?delete=<?php echo $data['id_museum']; ?>">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>

</body>
</html>
