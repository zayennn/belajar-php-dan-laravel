<?php

/*
LATIHAN 2.4

Buat halaman "Profil HP"

Tampilkan:

- nama HP
- chipset
- RAM
- storage
- harga

Lalu hitung:

kalau beli 3 HP
berapa total harganya

Gunakan:

- variable
- operasi variable
- output web

Contoh:

Nama HP: iPhone
Harga: 10000000

Jumlah beli: 3

Total:
30000000
*/


$merk_hp = "ROG Phone 9 PRO";
$harga = 12000000;
$jumlah_beli = 3;
$total_harga = $harga * $jumlah_beli;

echo "Nama Hp       : {$merk_hp}";
echo "<br>";
echo "Harga         : {$harga}";
echo "<br>";
echo "Jumlah Beli   : {$jumlah_beli}";
echo "<br>";
echo "Total         : {$total_harga}";

?>