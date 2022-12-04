<?php

$db='dbnama';
$host='localhost';
$user='root';
$password='';
$koneksi=new mysqli($host,$user,$password,$db);

$sql = "SELECT * FROM tblteman";

$hasil = $koneksi->query($sql);

echo "<table border='1' cellpadding='10''>";
echo "<tr>
        <th>Idteman</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Asal Sekolah</th>
    </tr>";


if ($hasil->num_rows > 0) {
    while ($row=$hasil->fetch_array()) {
        echo "<tr>";
        echo '<td>' .$row[0]. '</td>'; 
        echo '<td>' .$row[1]. '</td>'; 
        echo '<td>' .$row[2]. '</td>';  
        echo '<td>' .$row[3]. '</td>';  
        echo "</tr>";
    }
}
else {
    echo "ha kosonggggg......";
}

echo "</table>";

?>


