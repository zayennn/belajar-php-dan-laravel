<?php

/*
=========================================

LATIHAN 2.5

=========================================

Buat halaman "Kasir Sederhana"

Data:

Nama Barang
Harga Barang
Jumlah Beli

Hitung:

Subtotal

Lalu tampilkan:

Nama Barang
Harga
Jumlah
Subtotal

Gunakan:

- operator aritmatika
- assignment
- interpolation
- concatenation
- number_format()

=========================================

BONUS

Tambahkan:

Diskon Rp25.000

Gunakan:

-=

Contoh:

$total -= 25000;

=========================================
*/

$product = "Asus TUF F15";
$harga = 12000000;
$jumlahBeli = 2;
$diskon = 25000;
$subtotal = $harga * $jumlahBeli;

$total = $subtotal - $diskon;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Nama product <?= $product ?> </h2>
    <h2>Harga <?= number_format($product, 0, ",", ".") ?> </h2>
    <h2>Jumlah beli <?= $jumlahBeli ?> </h2>
    <h2>Total harga <?= number_format($total,0,",",".") ?> </h2>
</body>
</html>