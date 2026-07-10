<?php

/*
==================================================

MINI PROJECT 2.5

==================================================

Buat halaman "Slip Gaji Karyawan"

Data:

Nama
Gaji Pokok
Bonus
Potongan

Hitung:

Total Gaji

Rumus:

Total =
Gaji Pokok
+ Bonus
- Potongan

Gunakan:

+
-
+=
-=

Tampilkan:

Nama
Gaji Pokok
Bonus
Potongan
Total Gaji

Gunakan HTML.

==================================================

CHALLENGE

Tambahkan:

Pajak 5%

Hint:

$total -= ($total * 5 / 100);

==================================================
*/

$nama = "capypoter";
$gajiPokok = 500000;
$bonus = 500000;
$potongan = 250000;
$totalGaji = $gajiPokok + $bonus - $potongan;
$totalGaji -= ($totalGaji * 5 / 100);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Slip Gaji Karyawan</h1>
    <hr>

    <p>Nama karyawan : <?= $nama ?></p>
    <p>Gaji pokok : <?= number_format($gajiPokok,0,",",".") ?></p>
    <p>Bonus : <?= number_format($bonus,0,",",".") ?></p>
    <p>Potongan : <?= number_format($potongan,0,",",".") ?></p>
    <p>Total gaji : <?= number_format($totalGaji,0,",",".") ?></p>
</body>
</html>