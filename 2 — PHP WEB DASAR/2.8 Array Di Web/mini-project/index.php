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
        "rating" => "10/10",
        "harga" => number_format(599000,0,",",".")
    ],
    [
        "nama" => "Assassin's Creed IV Black Flag Resynced",
        "genre" => ["Action", "Adventure", "Fantasy"],
        "developer" => "Ubisoft",
        "rating" => "10/10",
        "harga" => number_format(1084500,0,",",".")
    ],
    [
        "nama" => "Valorant",
        "genre" => ["Action", "FPS"],
        "developer" => "Riot",
        "rating" => "8.5/10",
        "harga" => number_format(0,0,",",".")
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Game</h1>
    <hr>

    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Genre</th>
                <th>Developer</th>
                <th>Rating</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            <?php for($i = 0; $i < count($games); $i++) : ?>
                <tr>
                    <td><?= $i + 1 ?></td>
                    <td><?= $games[$i]["nama"] ?></td>
                    <td>
                        <?php foreach ($games[$i]["genre"] as $genre) : ?>
                            <?= $genre ?>,
                        <?php endforeach; ?>
                    </td>
                    <td><?= $games[$i]["developer"] ?></td>
                    <td><?= $games[$i]["rating"] ?></td>
                    <td><?= $games[$i]["harga"] ?></td>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table>
</body>
</html>