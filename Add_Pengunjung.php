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
        .pengunjung {
            margin: 20px auto;
            width: 80%;
            border-collapse: collapse;
        }

        .pengunjung th,
        .pengunjung td {
            padding: 10px;
        }

        .pengunjung th {
            background-color: #333;
            color: #fff;
        }

        .pengunjung tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .pengunjung tr:hover {
            background-color: #ddd;
        }

        /* Form style */
        h4 {
            text-align: center;
            color: #333;
        }

        .add-pengunjung-form {
            width: 80%;
            margin: 20px auto;
        }

        .add-pengunjung-form input[type="text"],
        .add-pengunjung-form input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .add-pengunjung-form input[type="submit"] {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            font-weight: bold;
        }

        .add-pengunjung-form input[type="submit"]:hover {
            background-color: #555;
        }
    </style>
</head>
    <body>
       <h4>Add Form Pengunjung</h4>

    <form class="add-pengunjung-form" action="Save_Pengunjung.php" method="POST">
        <input type="text" name="nama_pengunjung" placeholder="Nama Pengunjung" required>
        <input type="text" name="tanggal_kunjungan" placeholder="Tanggal Kunjungan" required>
        <input type="text" name="alamat_pengunjung" placeholder="Alamat Pengunjung" required>
        <input type="text" name="no_hp" placeholder="Ho Hp" required>
        <input type="text" name="kunjungan_museum" placeholder="Kunjungan Museum" required>
        <input type="submit" value="Submit" name="submit">
    </form>
    </body>
    <html>
