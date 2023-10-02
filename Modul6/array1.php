<?php
    $kelompok1 =
    array("andi","budi","chika","david","erna");
        echo "Nama kelompok 1 : <br/>";
    for ($i=0; $i<+4; $i++)
    {
        echo " + ", $kelompok1[$i], "<br/>";
    }

    echo "<br /><br />";

    $kelompok2[] = "fera";
    $kelompok2[] = "gani";
    $kelompok2[] = "hery";
    $kelompok2[] = "intan";
    $kelompok2[] = "jaka";

    echo "Nama kelompok 2 :<br/>";
    for ($i=0; $i<=4; $i++){
        echo "+",$kelompok2[$i],"<br/>";
    }
?>