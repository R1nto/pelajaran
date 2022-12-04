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
<body class="content2">
    <div id="buah">
     <!-- judul -->
     <header>
     <img src= "../Tentang-Buah/images/765ea5eab7bf44f786056452838111e5.png">
        <h1>tentangbuah.com</h1>
         <!-- menu -->
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
     <!-- isi 2 -->
    <section>
        <h2><?= $judul[1]?></h2>
            <img src="../Tentang-Buah/images/manfaat-jeruk-sunkist-doktersehat.png" widht="200" height="200" alt="">
                <p> <?= $deskripsi[2] ?> </p>
        
        <h2><?= $khasiat2[0] ?></h2>
            <ol>
                <li><?= $khasiat2[1] ?></li>
                <li><?= $khasiat2[2] ?></li>
                <li><?= $khasiat2[3] ?></li>
                <li><?= $khasiat2[4] ?></li>
                <li><?= $khasiat2[5] ?></li>
                <li><?= $khasiat2[6] ?></li>
            </ol>
        <h2>Daftar Harga</h2>
            <table border="1" cellpadding="10" >
                <tr>
                    <th rowspan="2"><?= $jenis2[0] ?></th>
                    <th colspan="2">Harga</th>
                </tr>
                <tr>
                    <th>Per Kilo</th>
                    <th>Per Biji</th>
                </tr>
                <tr>
                    <td><?= $jenis2[1] ?></td>
                    <td><?= $harga[0] ?></td>
                    <td><?= $harga[1] ?></td>
                </tr>
                <tr>
                    <td><?= $jenis2[2]?></td>
                    <td><?= $harga[2]?></td>
                    <td><?= $harga[3]?></td>
                </tr>
                <tr>
                    <td><?= $jenis2[3] ?></td>
                    <td><?= $harga[4] ?></td>
                    <td><?= $harga[5] ?></td>
                </tr>
                <tr>
                    <td><?= $jenis2[4] ?></td>
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