<?php
    require_once "content.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tentang buah.css">
    <title>tentangbuah.com - website tentang buah</title>
</head>
<body>
    <div class="wrapper">
        <header>
        <img src= "../Tentang-Buah/images/765ea5eab7bf44f786056452838111e5.png">
        <h1>tentangbuah.com</h1>
        <nav>   
                <ul>
                <li><a href="tentang buah.php"><?= $menu[0] ?></a></li>
                    <li><?= $menu[1] ?>
                        <ul>
                            <li><a href="apel.php"><?= $judul[0] ?></a></li>
                            <li><a href="#"><?= $judul[1] ?></a></li>
                            <li><a href="mangga.php"><?= $judul[2] ?></a></li>
                            <li><a href="pisang.php"><?= $judul[3]?></a></li>
                        </ul>
                        </li>
                    <li><a href="kontak.php"><?= $menu[2] ?></a></li>
                </ul>
            </nav>
        </header>
        <section>    
        <h2><a id="kontak">Kontak Kami</a></h2>
            <form action="Apel.html" method="get">
                <fieldset>
                    <legend>Informasi Pemesanan</legend>
                    <label for="nama">Nama :</label>
                    <input type="text" name="nama" id="" placeholder="nama anda !" required>
                    <br><br>
                    <label for="email">Email :</label>
                    <input type="email" name="email" id="" placeholder="email anda !" required>
                    <br><br>
                    <label for="alamat">Alamat :</label>
                    <br>
                    <textarea name="Alamat" id="" cols="30" rows="10"></textarea> 
                    <br>
                    <input type="submit" name="kirim" value="kirim" id="" />
                </fieldset>
            </form>
        </section>
        <footer>
            Copyright 2003-2022
        </footer>   
</body>
    </div>
</html>