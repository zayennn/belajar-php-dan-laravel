<?php

/*
====================================================

MINI PROJECT 2.8

====================================================

Buat halaman "Daftar Game"

Gunakan:

Array Multidimensi.

Minimal ada 3 game.

Setiap game memiliki:

Nama
Genre
Developer
Harga

Belum menggunakan loop.

Tampilkan satu-satu secara manual.

Bonus:

Tambahkan:

Rating

====================================================
*/

$games = [
    [
        "nama" => "The Elder Scrolls IV: Skyrim AE",
        "genre" => ["Action", "Adventure", "Fantasy"],
        "developer" => "Bethesda Game Studios",
        "harga" => number_format(599000,0,",",".")
    ],
    [
        "nama" => "Assassin's Creed IV Black Flag Resynced",
        "genre" => ["Action", "Adventure", "Fantasy"],
        "developer" => "Ubisoft",
        "harga" => number_format(1084500,0,",",".")
    ],
    [
        "nama" => "Valorant",
        "genre" => ["Action", "FPS"],
        "developer" => "Riot",
        "harga" => number_format(0,0,",",".")
    ],
];

?>