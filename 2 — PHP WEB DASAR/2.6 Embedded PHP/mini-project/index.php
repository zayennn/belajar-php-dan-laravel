<?php

/*
====================================================

MINI PROJECT 2.6

====================================================

Buat halaman "Profil PC Impian"

Data:

- Nama PC
- Processor
- VGA
- RAM
- SSD
- Monitor
- Estimasi Harga

Gunakan:

- Embedded PHP
- HTML
- <?= ?>

Tidak boleh memakai:

echo "<h1>...."

Semua HTML harus ditulis langsung.

BONUS

Tambahkan:

Daftar Aksesoris

Gunakan array.

Tampilkan memakai:

foreach

dengan Alternative Syntax.

====================================================
*/

$namaPc = "PC Gaming Ultra";
$processor = "Intel Core Ultra 200V";
$vga = "RTX 5090 TI SUPER 64GB";
$ram = "256gb";
$ssd = "5000gb";
$monitor = "ASUS ROG Swift PG27UQ 4K IPS";
$harga = 2200000000;

$aksesoris = ["Headset Sennheiser HE 1", "Mouse Razer Boomslang 20th Anniversary Edition", "Kursi Gaming Acer Predator Thronos", "Meja Lian Li DK series", "Facecame Elgato Facecam Pro", "Mic Shure SM7B"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Profil PC Impian</h1>
    <hr>

    <p>Nama PC : <?= $namaPc ?></p>
    <p>Processor PC : <?= $processor ?></p>
    <p>VGA PC : <?= $vga ?></p>
    <p>RAM PC : <?= $ram ?></p>
    <p>Monitor PC : <?= $monitor ?></p>
    <p>Harga PC : Rp <?= number_format($harga,0,",",".") ?></p>
    <ul>
        List aksesoris lainnya :
        <?php foreach ($aksesoris as $i) : ?>
            <li><?= $i ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>