<?php

    /*
        MINI PROJECT 2.2

        Buat halaman profile character game/anime/movie favorit.

        Tampilkan:

        - nama character
        - asal game/anime/movie
        - role
        - kemampuan
        - deskripsi singkat

        Gunakan:

        - HTML
        - PHP variable
        - <?= ?>
        - heading
        - paragraph
        - hr

        Contoh:

        PROFILE CHARACTER

        Nama: Vergil
        Asal: Devil May Cry
        Role: Anti Hero
        Kemampuan: Yamato, teleport, judgement cut

        Tentang Character:
        Vergil adalah karakter dingin yang kuat.
    */

    $nama_karakter = "serana";
    $asal = "the elder scroll v: skyrim (dawnguard dlc)";
    $role = "vampire";
    $kemampuan = ["Spesialis Nekromansi", "Sihir Penghancur & Penguras", "Pertahanan Jarak Dekat", "Spesialisasi Darah (Vampir Lord)", "Penghalang Soul Cairn", "Bisa Menembak Darah (Bloodstone Chalice)", "Konversi Menjadi Manusia"];
    $tentang_karakter = "Serana adalah salah satu pengikut (follower) sekaligus karakter sentral paling populer dalam ekspansi The Elder Scrolls V: Dawnguard. Ia adalah seorang vampir darah murni yang cerdas dan kuat, yang akan menemani Anda dalam petualangan epik mengungkap ramalan kuno";

?>

<!doctype html>
<html>
    <head>
        <title>mini project</title>
    </head>
    <body>
        <h1>profile character</h1>
        <hr>

        <p><strong>nama karakter</strong> : <?= $nama_karakter ?></p>
        <p><strong>asal karakter</strong> : <?= $asal ?></p>
        <p><strong>role</strong> : <?= $role ?></p>
        <p><strong>kemampuan</strong> : </p>
        <ul>
            <?php for ($i = 0; $i < count($kemampuan); $i++) : ?>
                <li><?= $kemampuan[$i] ?></li>
            <?php endfor ?>
        </ul>
        <p>
            <strong>tentang karakter : <br></strong>
            <?= $tentang_karakter ?>
        </p>
    </body>
</html>