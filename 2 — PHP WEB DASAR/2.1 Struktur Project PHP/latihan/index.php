<?php

    /*
        LATIHAN 2.1

        Buat halaman biodata sederhana.

        Tampilkan:

        - nama
        - umur
        - hobi
        - makanan favorit

        Gunakan:
        - variable PHP
        - echo HTML

        Contoh output:

        Nama: Elang
        Umur: 20
        Hobi: Ngoding
        Makanan favorit: Nasi Goreng
    */

    $nama = "elang";
    $umur = 19;
    $hobi = "ngoding";
    $fav_makanan = "mie ayam";

?>

<!doctype html>
<html>
    <head>
        <title>latihan</title>
    </head>
    <body>
        <h1>nama : <?= $nama ?></h1>
        <h1>umur : <?= $umur ?></h1>
        <h1>hobi : <?= $hobi ?></h1>
        <h1>makanan favorit : <?= $fav_makanan ?></h1>
    </body>
</html>