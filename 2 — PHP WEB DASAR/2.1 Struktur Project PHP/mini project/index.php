<?php

    /*
        MINI PROJECT 2.1

        Bikin halaman profile sederhana.

        Tampilkan:

        - nama
        - umur
        - role
        - cita-cita
        - deskripsi singkat

        Gunakan HTML + PHP.

        Contoh tampilan:

        ====================
        PROFILE ELANG
        ====================

        Nama: Elang
        Umur: 20
        Role: Junior Fullstack Developer
        Cita-cita: Software Engineer

        Tentang Saya:
        Saya suka ngoding web dan sedang belajar PHP.
    */

    $nama = "elang";
    $umur = 19;
    $role = "fullstack";
    $cita_cita = "programmer";
    $deskripsi = "Saya suka ngoding web dan sedang belajar PHP";
?>

<!doctype html>
<html>
    <head>
        <title>mini project</title>
    </head>
    <body>
        <h1>================</h1>
        <h1>profile <?= $nama ?></h1>
        <h1>================</h1>

        <p>nama: <?= $nama ?></p>
        <p>umur: <?= $umur ?></p>
        <p>role: <?= $role ?></p>
        <p>cita cita: <?= $cita_cita ?></p>
        <h1>tentang saya :</h1>
        <p><?= $deskripsi ?></p>
    </body>
</html>