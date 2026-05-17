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
        <h1>pofile <?= $nama ?></h1>
        <h1>================</h1>

        <h3>nama: <?= $nama ?></h3>
        <h3>umur: <?= $umur ?></h3>
        <h3>role: <?= $role ?></h3>
        <h3>cita cita: <?= $cita_cita ?></h3>
        <h3>tentang saya :</h3>
        <p><?= $deskripsi ?></p>
    </body>
</html>