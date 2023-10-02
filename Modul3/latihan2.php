<?php
$a="5";
$b="2.5";
$komentar="selamat datang";
echo ("Nilai variabel a adalah = $a <br>");
//variabel bertipe integer
echo ("Nilai variabel b adalah = $b <br>");
//variabel bertipe real
echo ("variabel komentar adalah = $komentar <br>");
//variabel string
//rumus pengurangan pertambahan perkalian pembagian
$tambah= $a + $b;
$kurang= $a - $b;
$kali= $a * $b;
$bagi= $a / $b;

echo ("hasil penambahan a dan b adalah = $tambah <br>");
echo ("hasil pengurangan a dan b adalah = $kurang <br>");
echo ( "hasil perkalian a dan b adalah = $kali <br>");
echo ("hasil pembagian a dan b adalah = $bagi <br>");

$nama= "POLIBAN";
$garis= "=============================";
echo "<p>";
echo $garis."<br>";
echo $komentar. "Di lab ". $nama. "<br>selamat belajar pemrograman web<br>";
echo $garis."<br>";
?>