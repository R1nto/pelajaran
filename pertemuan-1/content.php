<?php
    $menu =  ["home","contact","sejarah","jurusan"];
    $judul = ["Apel","Jeruk","Mangga","Duren"];
    $deskripsi = [
        "Apel adalah buah",
        "Jeruk adalah buah",
        "Mangga adalah buah",
        "Duren adalah buah",
    ];
    for ($i=0; $i < 4 ; $i++) { 
        echo "<li> $menu[$i]</li>";
    }

    $link = [
        "home" => "<a href='#'>home</a>",
        "kontak" => "<a href='#'>kontak</a>",
        "sejarah" => "<a href='#'>sejarah</a>",
        "jurusan" => "<a href='#'>jurusan</a>" 
    ];

    echo $link["home"];
    foreach ($link as $key => $value) {
        echo "<li> $value </li>";

    }

    $nilai = 100;
    echo "nilai = $nilai <br>" ;
    if ($nilai >=0 and $nilai <=100) {
        if ($nilai > 70) {
            if ($nilai == 71 ){
                echo "kkm";
            }
            if ($nilai > 71 and $nilai < 80){
                echo "C";
            }
            if ($nilai > 80 and $nilai < 90) {
                echo "B";
            }
            if ($nilai > 90 and $nilai <=100){
                echo "A";
            }
        }

        else {
            echo "kamu tidak lulus";
        }
    }

    else {
        echo "nilai anda tidak valid";
    }
echo "<br>";

function zodiak($t,$b){
$tanggal = $t;
$bulan = $b;
if ($tanggal > 0 and $tanggal < 32 && $bulan > 0 and $bulan < 13){
   if ($bulan == 1) {
    if ($tanggal >=1 and $tanggal <= 20){
        echo "zodiak anda capricorn";
   }
   else{
    echo "zodiak anda aquarius";
   }
    }

    if ($bulan == 2){
        if ($tanggal >= 1 and $tanggal <=20){
            echo "zodiak anda aquarius";
        }
        else {
            echo "zodiak anda pisces";
        }
    }

    if ($bulan == 3){
        if ($tanggal >=1 and $tanggal <=20){
            echo "zodiak anda pisces";
        }
        else {
            echo "zodiak anda aries";
        }
    }

    if ($bulan == 4){
        if ($tanggal >=1 and $tanggal <=20){
            echo "zodiak anda aries";
        }
        else{
            echo "zodiak anda taurus";
        }
    }

    if ($bulan == 5){
        if ($tanggal >=1 and $tanggal <=20) {
            echo "zodiak anda taurus";
        }
        else {
            echo "zodiak anda gemini";       
        }
    }

    if ($bulan == 6){
        if ($tanggal >=1 and $tanggal <=20){
            echo "zodiak anda gemini";
        }
        else{
            echo "zodiak anda cancer";
        }
    }

    if ($bulan == 7){
        if ($tanggal >=1 and $tanggal <=20){
            echo "zodiak anda cancer";
        }
        else{
            echo "zodiak anda leo";
        }
    }

    if ($bulan == 8){
        if ($tanggal >=1 and $tanggal <=20){
            echo "zodiak anda leo";
        }
        else{
            echo "zodiak anda virgo";
        }
    }

    if ($bulan == 9){
        if ($tanggal >=1 and $tanggal <=20){
            echo "zodiak anda virgo";
        }
        else{
            echo "zodiak anda libra";
        }
    }

    if ($bulan == 10){
        if ($tanggal >=1 and $tanggal <=20){
            echo "zodiak anda libra";
        }
        else{
            echo "zodiak anda scorpio";
        }
    }

    if ($bulan == 11){
        if ($tanggal >=1 and $tanggal <=20){
            echo "zodiak anda scorpio";
        }
        else{
            echo "zodiak anda sagitarius";
        }
    }

    if ($bulan == 12){
        if ($tanggal >=1 and $tanggal <=20){
            echo "zodiak anda sagitarius";
        }
        else{
            echo "zodiak anda capricorn";
        }
    }


}

else {
    echo "tanggal dan bulan tidak benar";
}

}

echo zodiak (2,4);
for ($i=1; $i < 13; $i++) { 
    zodiak(25,$i);
    echo "<br>";
}
?>