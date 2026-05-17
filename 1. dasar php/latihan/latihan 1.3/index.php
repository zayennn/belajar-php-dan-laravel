<?php
    /*
        Buat array data siswa:
        • nama
        • umur
        • kelas
        Lalu tampilkan semuanya pakai foreach
    */
        
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

//     for($i = 0; $i < count($siswa); $i++) {
//         echo "
// ========= siswa ke " . ($i + 1) . " =========
// nama siswa      : {$siswa[$i]['nama']}
// umur siswa      : {$siswa[$i]['umur']}
// kelas siswa     : {$siswa[$i]['kelas']}
//         ";
//     }

    foreach($siswa as $dataSiswa) {
        echo "
========= siswa ke " . ($i + 1) . " =========
nama siswa      : {$siswa[$i]['nama']}
umur siswa      : {$siswa[$i]['umur']}
kelas siswa     : {$siswa[$i]['kelas']}
        ";
    }
?>