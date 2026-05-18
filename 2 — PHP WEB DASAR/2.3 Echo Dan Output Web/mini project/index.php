<?php

    /*
        MINI PROJECT 2.3

        Buat halaman profile setup gaming/ngoding kamu.

        Tampilkan:

        - nama setup
        - monitor
        - keyboard
        - mouse
        - processor
        - RAM
        - deskripsi setup

        Gunakan:

        - echo
        - interpolation
        - concatenation
        - HTML output

        Minimal:
        - ada <h1>
        - ada <p>
        - ada <hr>

        Semua output pakai echo.
    */

    $monitor = "ASUS ROG Swift PG65UQ";
    $keyboard = "ASUS ROG Azoth Extreme";
    $mouse = "ASUS ROG Spatha X";
    $processor = "Intel Core i9-14900KS";
    $ram = 128;
    $deskripsi = "siap libas semua game AAA dengan setingan mentok rata kanan dengan path racing + resolusi 8k";
?>

<!doctype html>
<html>
    <head>
        <title>mini project</title>
    </head>
    <body>
        <h1><?= "setup gaming saya" ?></h1>
        <hr>

        <p>monitor : <?= $monitor ?></p>
        <p>keyboard : <?= $keyboard ?></p>
        <p>mouse : <?= $mouse ?></p>
        <p>monitor : <?= $monitor ?></p>
    </body>
</html>