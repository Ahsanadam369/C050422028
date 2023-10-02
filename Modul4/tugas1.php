<?php
// Jumlah lembar fotocopy
$jumlah_lembar = 200;

// Harga per lembar fotocopy
if ($jumlah_lembar < 100) {
    $harga_per_lembar = 150;
}elseif ($jumlah_lembar >= 100 && $jumlah_lembar <= 200) {
    $harga_per_lembar = 100;
}else {
    $harga_per_lembar = 80;
}

// Menghitung biaya total
$biaya_total = $jumlah_lembar * $harga_per_lembar;

// Menampilkan hasil
echo "Jumlah Lembar Fotocopy        : $jumlah_lembar lembar<br>";
echo "Harga per Lembar Fotocopy     : Rp. $harga_per_lembar<br>";
echo "Biaya Total                   : Rp. $biaya_total";
?> 