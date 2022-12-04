<?php

    class Zodiac{

        public static function zodiak($b,$t)
        {
            if ($b < 1 || $b > 12 || $t < 1 || $t > 31) {
                $hasil = "tanggal/bulan salah ";
            }else  {
                if ($b == 1) {
                    if ($t > 19 && $t < 31) {
                        $hasil = "Aquarius";
                    }
                    if ($t > 0 && $t < 20) {
                        $hasil = "Taurus";
                    }
                }
                else if ($b == 2) {
                    if ($t > 19 && $t < 31) {
                        $hasil = "Taurus";
                    }
                    if ($t > 0 && $t < 20) {
                        $hasil = "Libra";
                    }
                }
                else if ($b == 3) {
                    if ($t > 19 && $t < 31) {
                        $hasil = "Libra";
                    }
                    if ($t > 0 && $t < 20) {
                        $hasil = "Leo";
                    }
                }
                else if ($b == 4) {
                    if ($t > 19 && $t < 31) {
                        $hasil = "Leo";
                    }
                    if ($t > 0 && $t < 20) {
                        $hasil = "Capricorn";
                    }
                }
                else if ($b == 5) {
                    if ($t > 19 && $t < 31) {
                        $hasil = "Capricorn";
                    }
                    if ($t > 0 && $t < 20) {
                        $hasil = "Scorpion";
                    }
                }
                else if ($b == 6) {
                    if ($t > 19 && $t < 31 ) {
                        $hasil = "";
                    }
                    if ($t > 0 && $t < 20 ) {
                        $hasil = "";
                    }
                }
                else if ($b == 7) {
                    if ($t > 19 && $t < 31) {
                        $hasil = "";
                    }
                    if ($t > 0 && $t < 20) {
                        $hasil = "";
                    }

                }
                else {
                    $hasil = "data tidak ada";
                }
            }

            return $hasil;
        }
    }


?>