<?php
$nilai = 85;
$mata_kuliah = "Matematika";

if ($nilai >= 90 && $nilai <= 100) {
    $grade = 'A';
} elseif ($nilai >= 76 && $nilai < 89) {
    $grade = 'B';
} elseif ($nilai >= 60 && $nilai < 75) {
    $grade = 'C';
} elseif ($nilai >= 50 && $nilai < 59) {
    $grade = 'D';
} elseif ($nilai >= 0 && $nilai < 49)  {
    $grade = 'E';
}

echo "Mata Kuliah: " . $mata_kuliah . "<br>";
echo "Nilai: " . $nilai . "<br>";
echo "Grade: " . $grade . "<br>";

switch ($grade) {
    case 'A':
        echo "Baik sekali";
        break;
    case 'B':
        echo "Baik";
        break;
    case 'C':
        echo "Cukup";
        break;
    case 'D':
        echo "Hampir cukup";
        break;
    case 'E':
        echo "Kurang";
        break;
    default:
        echo "Tidak lulus";
}
?>
