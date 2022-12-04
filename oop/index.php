<form action="" method="post">
    Bulan:
    <input type="number" name="bulan" id="" placeholder="masukkan bulan">
    Tanggal:
    <input type="number" name="tanggal" id="" placeholder="masukkan tanggal">
    <input type="submit" value="kirim" name="kirim">
</form>
<?php

    // require_once "rumus.php";

    // $rumus = new Rumus;  
    // echo $rumus->luasLingkaran(7);
    // echo '<br>';
    // echo $rumus->kelilingLingkaran(7);
    // echo '<br>';
    // echo $rumus->luasPersegiPanjang(5,3);
    // echo '<br>';
    // echo $rumus->kelilingPersegiPanjang(5,3);
    // echo '<br>';
    // echo $rumus->luasSegitiga(10,6);
    // echo '<br>';
    // echo $rumus->kelilingSegitiga(3,5,6);

    require_once "zodiak.php";
    // $zodiak = new zodiac;
    // echo $zodiak->zodiak(1,21);

    if (isset($_POST['kirim'])) {
        $b = $_POST['bulan'];
        $t = $_POST['tanggal'];
        echo Zodiac::zodiak($b,$t);
    }
?>