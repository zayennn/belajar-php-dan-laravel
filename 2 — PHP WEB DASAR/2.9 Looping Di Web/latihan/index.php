<?php

/*
=====================================================

LATIHAN 2.9

=====================================================

Buat halaman "Daftar Film"

Gunakan array multidimensi.

Minimal 5 film.

Data:

Judul
Genre
Tahun
Rating

Gunakan:

foreach

Tampilkan ke dalam table.

BONUS

Tambahkan kolom:

Status

Jika rating >= 8

"Recommended"

Selain itu

"Not Recommended"

=====================================================
*/

$movies = [
    [
        "nama" => "Deadpool",
        "genre" => ["action", "thriller"],
        "tahun" => 2012,
        "rating" => 9
    ],
    [
        "nama" => "John Wick",
        "genre" => ["action"],
        "tahun" => 2021,
        "rating" => 10
    ],
    [
        "nama" => "The Equalizer",
        "genre" => ["action"],
        "tahun" => 2015,
        "rating" => 9
    ],
    [
        "nama" => "Venom",
        "genre" => ["action", "thriller"],
        "tahun" => 2012,
        "rating" => 7
    ],
    [
        "nama" => "Marvel: End Game",
        "genre" => ["action"],
        "tahun" => 2023,
        "rating" => 8
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
    <h1>Daftar film</h1>
    <hr>

    <table border="1">
        <thead>
            <tr>
                <th style="padding: 1rem;">No</th>
                <th style="padding: 1rem;">Nama</th>
                <th style="padding: 1rem;">Genre</th>
                <th style="padding: 1rem;">Tahun</th>
                <th style="padding: 1rem;">Rating</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($movies as $i => $movie) : ?>
                <tr >
                    <td style="padding: 1rem;"><?= $i + 1 ?></td>
                    <td style="padding: 1rem;">
                        <?= $movies[$i]["nama"] ?> <?= ($movies[$i]["rating"] > 8) ? "(Recommended)" : "(Not Recommended)" ?>
                    </td>
                    <td style="padding: 1rem;"><?= implode(", ", $movies[$i]["genre"]) ?></td>
                    <td style="padding: 1rem;"><?= $movies[$i]["tahun"] ?></td>
                    <td style="padding: 1rem;"><?= $movies[$i]["rating"] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>