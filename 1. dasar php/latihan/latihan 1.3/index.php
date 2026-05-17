<?php
    $siswa = [
        [
            "nama" => "capytanic",
            "umur" => 10,
            "kelas" => 4
        ],
        [
            "nama" => "capypoter",
            "umur" => 10,
            "kelas" => 4
        ],
        [
            "nama" => "capyking",
            "umur" => 10,
            "kelas" => 4
        ],
    ];

    for($i = 0; $i < count($siswa); $i++) {
        echo "========= siswa ke $i =========";
        echo "
            nama siswa  : $siswa[$nama]
        ";
    }
?>