<?php
    $array1 = array
    ("arman", "bayu", "feri");
    echo "array awal ialah : <br/>";
    for ($i=0; $i<count($array1); $i++) {
        echo "data ke-", $i, " : ",$array1[$i], "<br/>";
    }
    echo "<br/>setelah ditambahkan \" herni, gita, & dewi\" menggunakan fungsi array_push() : <br/>";
    array_push($array1, "herni", "gita", "dewi");
    for ($i=0; $i<count($array1); $i++){
        echo"data ke-", $i," : ",$array1[$i], "<br/>";
    }

    echo "<br/> setelah bagian awal array dihapus menggunakan fungsi array_shift() : <br/>";
    array_shift($array1);
    for ($i=0; $i<count($array1); $i++){
        echo"data ke-", $i," : " ,$array1[$i], "<br/>";
    }

    echo "<br/> dan setelah isi array diurutkan menggunakan fungsi sort() : <br/>";
    sort($array1);
    for ($i=0; $i<count($array1); $i++){
        echo"data ke-", $i," : ",$array1[$i], "<br/>";
    }
?>
