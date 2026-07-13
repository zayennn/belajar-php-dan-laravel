<?php

/*
====================================================

MINI PROJECT 2.10

====================================================

Buat function:

movieCard()

Parameter:

Judul
Genre
Rating
Harga

Function menampilkan card HTML.

Panggil minimal 5 kali.

BONUS

Jika rating >= 8

Badge:

Recommended

Selain itu

Normal

Gunakan if.

====================================================
*/

function card($nama) {
    ?>
    <div style="border:1px solid black;padding:10px;margin:10px;">
        <h2><?= $nama ?></h2>
    </div>
    <?php
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        card("capyking");
    ?>
</body>
</html>