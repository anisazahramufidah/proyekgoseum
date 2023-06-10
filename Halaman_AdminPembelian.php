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
        .pembelian {
            margin: 20px auto;
            width: 80%;
            border-collapse: collapse;
        }

        .pembelian th,
        .pembelian td {
            padding: 10px;
        }

        .pembelian th {
            background-color: #333;
            color: #fff;
        }

        .pembelian tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .pembelian tr:hover {
            background-color: #ddd;
        }

        /* Form style */
        h4 {
            text-align: center;
            color: #333;
        }

        .add-pembelian-form {
            width: 80%;
            margin: 20px auto;
        }

        .add-pembelian-form input[type="text"],
        .add-pembelian-form input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .add-pembelian-form input[type="submit"] {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            font-weight: bold;
        }

        .add-pembelian-form input[type="submit"]:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <h1>Menampilkan Form Data Pembelian Tiket Museum</h1>

    <table border="1" class="pembelian">
        <tr>
            <th>Tiket Kunjungan</th>
            <th>Tujuan Kunjungan</th>
            <th>Tanggal Pembelian</th>
			<th>Daftar Harga</th>
            <th>Metode Transaksi</th>
            <th>Aksi</th>
        </tr>
        <?php
            include "Koneksi.php";
            $query_mysql = mysqli_query($host, "SELECT * FROM pembelian")or die(mysqli_error($host));
            while($data = mysqli_fetch_array($query_mysql)){
        ?>
        <tr>
            <td><?php echo $data['tiket_kunjungan']; ?></td>
            <td><?php echo $data['tujuan_kunjungan']; ?></td>
            <td><?php echo $data['tanggal_pembelian']; ?></td>
			<td><?php echo $data['daftar_harga']; ?></td>
            <td><?php echo $data['metode_transaksi']; ?></td>
            <td>
                <a href="Update_Pembelian.php?update=<?php echo $data['id_pembelian']; ?>">Update</a> |
                <a href="Delete_Pembelian.php?delete=<?php echo $data['id_pembelian']; ?>">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>

</body>
<html>