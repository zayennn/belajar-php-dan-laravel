<?php

    // todo Buat function hitung luas persegi panjang

    function hitungPersegiPanjang($panjang, $lebar) {
        return $panjang * $lebar;
    }

    echo "masukan panjang persegi panjang : ";
    $panjang = trim(fgets(STDIN));

    echo "masukan lebar persegi panjang : ";
    $lebar = trim(fgets(STDIN));

    echo "luas dari panjang dengan panjang $panjang dan lebar $lebar adalah : " . hitungPersegiPanjang($panjang, $lebar);
?>