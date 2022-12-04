<form action="" method="post">
    nama:
    <input type="text" name="nama">
    alamat:
    <input type="text" name="alamat">
    asal sekolah:
    <input type="text" name="asal">
    <input type="submit" value="simpan" name="simpan">
</form>

<?php
    require_once "db.php";

    if (isset($_POST['simpan'])) {
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $asal = $_POST['asal'];
        $sql = "INSERT INTO tblteman (nama,alamat,asal) VALUES ($nama,$alamat,$asal)";
        $hasil = $koneksi->query($sql);
    }
    $sql = "SELECT * FROM tblteman";
    $hasil = $koneksi->query($sql);

    echo "<table>";
    echo "<th>
            <tr>No</tr>
            <tr>Nama</tr>
             <tr>Alamat</tr>
            <tr>Asal Sekolah</tr>
        </th>";

    if ($hasil->num_rows) {
        while ($r=$hasil->fetch_array($sql)) {
        echo "<th>";
        echo '<td>'.$r[0].'</td>';
        echo '<td>'.$r[1].'</td>';
        echo '<td>'.$r[2].'</td>';
        echo '<td>'.$r[3].'</td>';
        echo "</th>";
        }
    }

    echo "</table>";
?>
