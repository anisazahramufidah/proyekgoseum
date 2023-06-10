<!DOCTYPE html>
<html>
<head>
    <title>Contoh Navbar dengan Gambar Latar Belakang</title>
    <style>
        /* CSS untuk navbar */
        .navbar {
            background-image: url('gambarmuseum/museum.jpg');
            background-size: cover;
            background-position: center;
            height: 200px;
            padding: 200px;
            color: #fff;
        }
        

        .navbar a {
            float: left;
            display: block;
            color: #fff;
            text-align: center;
            padding: 14px 14px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: rgba(255, 255, 255, 0.3);
        }
        .Logo Img {
            /* GOSEUM */
        

        position: absolute;
        width: 255px;
        height: 64px;
        left: 110px;
        top: 97px;

        font-family: 'Philosopher';
        font-style: normal;
        font-weight: 400;
        font-size: 50px;
        line-height: 56px;
        color: #FFFFFF;
        }
    </style>
</head>
<body>
    <header>
    <h1>Goseum</h1>
    </header>
    <!-- HTML untuk navbar -->
    <div class="navbar">
        <a href="#About">About</a>
        <a href="#Service">Service</a>
        <a href="#Sign-In">Sign-In</a>
        <a href="#Log-In">Log-In</a>
    </div>

    <!-- Isi konten lainnya -->
    <div style="padding: 20px">
        <h1>Goseum</h1>
        <h4>Menyugukan berbagai informasi dan pemesanan tiket museum yang berada di Jawa Timur</h4>
    </div>
</body>
</html>