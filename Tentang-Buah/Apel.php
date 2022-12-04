<?php
    require_once "content.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./tentang buah.css">
    <title>tentangbuah.com - Apel</title>
</head>
<body class="content1">
    <div id="buah">
        <header>
        <img src= "../Tentang-Buah/images/765ea5eab7bf44f786056452838111e5.png">
            <h1>tentangbuah.com</h1>
            <nav>
            <ul>
                <li><a href="tentang buah.php"><?= $menu[0] ?></a></li>
                <li><?= $menu[1]?>
                    <ul>
                        <li><a href="#"><?= $judul[0] ?></a></li>
                        <li><a href="Jeruk.php"><?= $judul[1]?></a></li>
                        <li><a href="Mangga.php"><?= $judul[2] ?></a></li>
                        <li><a href="Pisang.php"><?= $judul[3] ?></a></li>
                    </ul>
                </li>
                <li><a href="kontak.php"><?= $menu[2]?></a></li>
            </ul>
            </nav>
        </header>
        <section>
        <h2><?= $judul[0] ?></h2>
        <img src= "../Tentang-Buah/images/manfaat-apel.png" widht="200" height="200" alt="">                               
       <p> <?= $deskripsi[1] ?> </p>
       <h2><?= $khasiat1[0] ?></h2>
            <ol>
                <li><?= $khasiat1[1] ?></li>
                <li><?= $khasiat1[2] ?></li>
                <li><?= $khasiat1[3] ?></li>
                <li><?= $khasiat1[4] ?></li>
                <li><?= $khasiat1[5] ?></li>
                <li><?= $khasiat1[6] ?></li>
            </ol>
        <h2>Daftar Harga</h2>
            <table border="1" cellpadding="10" >
                <tr>
                    <th rowspan="2"><?= $jenis1[0] ?></th>
                    <th colspan="2">Harga</th>
                </tr>
                <tr>
                    <th>Per Kilo</th>
                    <th>Per Biji</th>
                </tr>
                <tr>
                    <td><?= $jenis1[1] ?></td>
                    <td><?= $harga[0] ?></td>
                    <td><?= $harga[1] ?></td>
                </tr>
                <tr>
                    <td><?= $jenis1[2]?></td>
                    <td><?= $harga[2]?></td>
                    <td><?= $harga[3]?></td>
                </tr>
                <tr>
                    <td><?= $jenis1[3] ?></td>
                    <td><?= $harga[4] ?></td>
                    <td><?= $harga[5] ?></td>
                </tr>
                <tr>
                    <td><?= $jenis1[4] ?></td>
                    <td><?= $harga[6] ?></td>
                    <td><?= $harga[7]?></td>
                </tr>
        
            </table>
        <h2><?= $judul[5] ?></h2>
            <p><a href="../pages/kontak.html"><?= $pemesanan ?></a></p>
        </section>
        <footer>
            Copyright 2003-2022
        </footer>
</body>
</div>
</html>