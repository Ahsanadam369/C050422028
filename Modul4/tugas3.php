<?php
// Mendapatkan bulan saat ini
$bulan = date('m');
// Menampilkan hari dalam bulan 
switch ($bulan) 
{
  case 1;
    echo "Januari memiliki 31 hari.";
    break;
  case 2;
    echo "Februari memiliki 28 hari.";
    break;
  case 3;
    echo "Maret memiliki 31 hari.";
    break;
  case 4;
    echo "April memiliki 30 hari.";
    break;
  case 5;
    echo "Mei memiliki 31 hari.";
    break;
  case 6;
    echo "Juni memiliki 30 hari.";
    break;
  case 7;
    echo "Juli memiliki 31 hari.";
    break;
  case 8;
    echo "Agustus memiliki 31 hari.";
    break; 
  case 9;
    echo "September memiliki 30 hari.";
    break;
  case 10;
    echo "Oktober memiliki 31 hari.";
    break;
  case 11;
    echo "November memiliki 30 hari.";
    break;
  case 12;
    echo "Desember memiliki 31 hari.";
    break;
}
?>