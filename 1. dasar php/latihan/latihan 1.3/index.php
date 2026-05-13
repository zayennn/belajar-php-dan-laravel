<?php
    $siswa = [
        [
            "nama" => "capypoter",
            "umur" => 13,
            "kelas" => 8
        ],
        [
            "nama" => "capytanic",
            "umur" => 12,
            "kelas" => 7
        ],
        [
            "nama" => "capypoter",
            "umur" => 12,
            "kelas" => 6
        ]
    ];

    for($i = 0; $i < count($siswa); $i++) {
        echo "nama : $siswa[$i]";
    }
?>