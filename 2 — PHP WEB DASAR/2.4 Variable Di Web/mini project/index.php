<?php

/*
MINI PROJECT 2.4

Bikin halaman "Setup Warnet Gaming"

Tampilkan:

- nama warnet
- jumlah PC
- harga per jam
- total pendapatan jika semua PC dipakai 5 jam

Gunakan:

- variable
- operasi matematika
- output HTML
- echo

Minimal:
- ada <h1>
- ada <p>
- ada <hr>

Contoh:

WARNET GAMING

Nama Warnet: CapyNet
Jumlah PC: 20
Harga per jam: 5000

Jika penuh 5 jam:

Total pendapatan:
500000
*/

echo "<h1>WARNET GAMING</h1>";
echo "<hr>";

$nama_warnet = "CapyNet";
$jumlah_pc = 20;
$harga_per_jam = 5000;
$total_pendapatan = $harga_per_jam * $jumlah_pc;

echo "<h2>Nama Warnet       : {$nama_warnet}</h2>";
echo "<h2>Jumlah PC         : {$jumlah_pc}</h2>";
echo "<h2>Harga /Jam        : {$jumlah_pc}</h2>";
echo "<p>Jika penuh 5 jam  : </p>";
echo "<h2>Total pendapatan  : {$total_pendapatan}</h2>";

?>