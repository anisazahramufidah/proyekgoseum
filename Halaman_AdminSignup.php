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
        .sign_up {
            margin: 20px auto;
            width: 80%;
            border-collapse: collapse;
        }

        .sign_up th,
        .sign_up td {
            padding: 10px;
        }

        .sign_up th {
            background-color: #333;
            color: #fff;
        }

        .sign_up tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .sign_up tr:hover {
            background-color: #ddd;
        }

        /* Form style */
        h4 {
            text-align: center;
            color: #333;
        }

        .add-sign_up-form {
            width: 80%;
            margin: 20px auto;
        }

        .add-sign_up-form input[type="text"],
        .add-sign_up-form input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .add-sign_up-form input[type="submit"] {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            font-weight: bold;
        }

        .add-sign_up-form input[type="submit"]:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <h1>Menampilkan Form Sign Up Pengunjung</h1>

    <table border="1" class="sign_up">
        <tr>
            <th>No Hp</th>
            <th>Gmail</th>
            <th>Password</th>
            <th>Aksi</th>
        </tr>
        <?php
            include "Koneksi.php";
            $query_mysql = mysqli_query($host, "SELECT * FROM sign_up")or die(mysqli_error($host));
            while($data = mysqli_fetch_array($query_mysql)){
        ?>
        <tr>
            <td><?php echo $data['no_hp']; ?></td>
            <td><?php echo $data['gmail']; ?></td>
            <td><?php echo $data['password']; ?></td>
            <td>
                <a href="Update_Signup.php?update=<?php echo $data['id_signup']; ?>">Update</a> |
                <a href="Delete_Signup.php?delete=<?php echo $data['id_signup']; ?>">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>

</body>
</html>
