<?php
    require_once("db.php");
    if (isset($_GET['id']) && isset($_GET['menu'])) {
        $id = $_GET['id'];
        $menu = $_GET['menu'];
        if ($menu=='hapus') {
            $buah='';
            $deskripsi='';
            $harga='';
            $sql = "DELETE FROM tblbuah WHERE idbuah=$id";
            $koneksi->query($sql);   
        } 
        else {
            $sql="SELECT * FROM tblbuah WHERE idbuah = $id";
            $hasil=$koneksi->query($sql);
            $row = $hasil->fetch_array();
            // print_r($row);
            
                $buah=$row[1];
                $deskripsi=$row[2];
                $harga=$row[3];   
            
            // if (isset($_POST['submit'])) {
            //     $buah = $_POST['buah'];
            //     $deskripsi = $_POST['deskripsi'];
            //     $harga = $_POST['harga'];

            //     $sql = "UPDATE * FROM tblbuah SET buah='$buah',deskripsi='$deskripsi',harga='$harga' WHERE idbuah=$id";
            //     $hasil=$koneksi->query($sql);
            //  }

        }

    }else{
        $buah='';
        $deskripsi='';
        $harga='';
    }
?>
<form action="" method="post">
    Nama buah:
    <input type="text" name="buah" value="<?= $buah?>"> <br>
    Deskripsi:
    <input type="text" name="deskripsi" value="<?= $deskripsi?>"> <br>
    Harga:
    <input type="number" name="harga" value="<?= $harga?>"><br>
    <input type="submit" value="simpan" name="submit"><br>
</form>

<?php

    if (isset($_POST['submit'])) {
        if (isset($_GET['menu'])) {
            $id = $_GET['id']; 
            $buah = $_POST['buah'];
            $deskripsi = $_POST['deskripsi'];
            $harga = $_POST['harga'];

            $sql = "UPDATE tblbuah SET buah='$buah',deskripsi='$deskripsi',harga=$harga WHERE idbuah=$id";
            $hasil=$koneksi->query($sql);
            header("location:index.php");
        }
        else{
            $buah = $_POST['buah'];
            $deskripsi = $_POST['deskripsi'];
            $harga = $_POST['harga'];
            $sql = "INSERT INTO tblbuah (buah,deskripsi,harga) VALUES ('$buah','$deskripsi',$harga)";
            $koneksi->query($sql);   
        }
    }

    

    $sql = "SELECT * FROM tblbuah";

    // echo $sql;

    $hasil = $koneksi->query($sql);
    
    // print_r($hasil);

    // echo $hasil->num_rows;

    echo "<table border=1; cellpadding=10; '>";
    echo "<tr>
            <th>Idbuah</th>
            <th>Buah</th>
            <th>Deskripsi</th>
            <th>Harga</th>
            <th>Gambar</th>
            <th>Hapus</th>
            <th>Ubah</th>
        </tr>";

    $n=1;
    if ($hasil->num_rows > 0) {
        while ($row=$hasil->fetch_array()) {
            echo "<tr>";
            echo '<td>' .$n++. '</td>'; 
            echo '<td>' .$row[1]. '</td>'; 
            echo '<td>' .$row[2]. '</td>';  
            echo '<td>' .$row[3]. '</td>';
            echo '<td>' .$row[4]. '</td>';
            echo '<td><a href="?id='.$row[0].'&menu=hapus"> Hapus </a></td>';
            echo '<td><a href="?id='.$row[0].'&menu=ubah"> Ubah </a></td>';  
            echo "</tr>";
        }
    }
    else {
        echo "ha kosonggggg......";
    }

    echo "</table>";

?>
