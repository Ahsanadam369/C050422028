<?php
    $r = 9;
    $s = 5;
    $luasalas = M_PI * pow($r, 2);
    $luaspermukaan = (M_PI * pow($r, 2)) + (M_PI * $r * $s);

    echo "Luas alas dengan jari - jari 9 adalah ".$luasalas." <br>";
    echo "luas permukaan dengan " . $r . "dan tinggi" .$s. "adalah" .$luaspermukaan. "<br>";
?>