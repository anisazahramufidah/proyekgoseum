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
       <h4>Add Pembelian</h4>

    <form class="add-pembelian-form" action="Save_Pembelian.php" method="POST">
        <input type="text" name="tiket_kunjungan" placeholder="Tiket Kunjungan" required>
        <input type="text" name="tujuan_kunjungan" placeholder="Tujuan Kunjungan" required>
        <input type="text" name="tanggal_pembelian" placeholder="Tanggal Pembelian" required>
        <input type="text" name="daftar_harga" placeholder="Daftar Harga" required>
        <input type="text" name="metode_transaksi" placeholder="Metode Transaksi" required>
        <input type="submit" value="Submit" name="submit">
    </form>
    </body>
    <html>