<?php

/*
====================================================

LATIHAN 2.6

====================================================

Buat halaman "Profil Mobil"

Data:

- merk
- tipe
- mesin
- tenaga
- harga

Gunakan:

- Embedded PHP
- <?= ?>
- HTML
- Jangan gunakan echo untuk menampilkan HTML.

BONUS

Harga tampil menggunakan number_format().

====================================================
*/

$merk = "BMW M4";
$tipe = "Sport";
$mesin = "M TwinPower Turbo";
$tenaga = "431 hp";
$harga = 3490000000;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Profil Mobil</h1>
    <hr>

    <p>Merk mobil : <?= $merk ?></p>
    <p>Tipe mobil : <?= $tipe ?></p>
    <p>Mesin mobil : <?= $mesin ?></p>
    <p>Tenaga mobil : <?= $tenaga ?></p>
    <p>Harga mobil : <?= number_format($harga,0,",",".") ?></p>
</body>
</html>