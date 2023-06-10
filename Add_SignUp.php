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
       <h4>Add Sign Up</h4>

    <form class="add-sign_up-form" action="Save_Signup.php" method="POST">
        <input type="text" name="no_hp" placeholder="No Hp" required>
        <input type="text" name="gmail" placeholder="Gmail" required>
        <input type="text" name="password" placeholder="Password" required>
        <input type="submit" value="Submit" name="submit">
    </form>
    </body>
    <html>