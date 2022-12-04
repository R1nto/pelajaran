<?php
    require_once "content.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Tentang-Buah/tentang buah.css">
    <title>tentangbuah.com - website tentang buah</title>
</head>
<body>
    <div class="content">
        <div class="wrapper">
        <header>
            <img src="<?= $img[0] ?>">
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
        <section class="def">
            <h2><?= $judul[4] ?></h2>
                <p><?= $deskripsi[0] ?></p>
        </section>
        <footer>
            Copyright 2003-2022
        </footer>
</body>
</div>
</div>
</html>