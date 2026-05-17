<?php
    /*
        LATIHAN 2.2

        Buat halaman "Profil Game"

        Tampilkan:

        - nama game
        - genre
        - developer
        - tahun rilis
        - alasan suka game itu

        Gunakan:

        - variable PHP
        - HTML
        - <?= ?>

        Contoh output:

        PROFIL GAME

        Nama Game : Valorant
        Genre : FPS
        Developer : Riot Games
        Tahun Rilis : 2020

        Kenapa Suka:
        Saya suka gameplay kompetitifnya.
    */

    $nama_game = "the elder scroll v: skyrim (anniversary edition)";
    $genre = ["action", "adventure", "fantasy"];
    $developer = "Bethesda Game Studios";
    $tahun_rilis = 2011;
    $alasan_suka = "karena dunia yang luas, bebas melakukan apa aja, bisa menjelajahi banyak dungeon, ada banyak jenis role untuk setiap npc/karakter pemain mulai dari vamapire, werewolves, archer, knight, wizard/witch, thief, dll. dan yang terpenting mempunyai komunitas mod yang besar dan itu di dukung oleh developer nya bahkan developer nya juga memberikan features creation untuk para penikmat game skyrim";

?>

<!doctype html>
<html>
    <head>
        <title>latihan</title>
    </head>
    <body>
        <h1>profil game</h1>
        <hr>

        <p>nama game : <?= $nama_game ?></p>
        <p>genre : </p>
        <ul>
            <?php for($i = 0; $i < count($genre); $i++) : ?>
                <li><?= $genre[$i] ?></li>
            <?php endfor ?>
        </ul>
        <p>developer game : <?= $developer ?></p>
        <p>nama game : <?= $nama_game ?></p>
        <p>nama game : <?= $nama_game ?></p>
    </body>
</html>