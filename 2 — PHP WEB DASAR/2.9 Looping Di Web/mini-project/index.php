<?php

/*
=====================================================

MINI PROJECT 2.9

=====================================================

Buat halaman "Daftar Mahasiswa"

Gunakan array multidimensi.

Minimal 5 mahasiswa.

Data:

Nama
Kelas
Nilai

Gunakan:

foreach

Tampilkan ke table.

BONUS

Tambahkan:

Grade

A

B

C

D

Menggunakan if elseif.

=====================================================
*/

$students = [
    [
        "nama" => "Rizky",
        "kelas" => "XII RPL 1",
        "nilai" => 90
    ],
    [
        "nama" => "Dewi",
        "kelas" => "XII RPL 2",
        "nilai" => 85
    ],
    [
        "nama" => "Budi",
        "kelas" => "XII RPL 3",
        "nilai" => 75
    ],
    [
        "nama" => "Siti",
        "kelas" => "XII RPL 4",
        "nilai" => 65
    ],
    [
        "nama" => "Andi",
        "kelas" => "XII RPL 5",
        "nilai" => 55
    ]
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
    <h1>Daftar Mahasiswa</h1>
    <hr>

    <table border="1">
        <thead>
            <tr>
                <th style="padding: 1rem">No</th>
                <th style="padding: 1rem">Nama</th>
                <th style="padding: 1rem">Kelas</th>
                <th style="padding: 1rem">Nilai</th>
                <th style="padding: 1rem">Grade</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($students as $i => $student) : ?>
                <tr>
                    <td style="padding: 1rem"><?= $i+1 ?></td>
                    <td style="padding: 1rem"><?= $student['nama'] ?></td>
                    <td style="padding: 1rem"><?= $student['kelas'] ?></td>
                    <td style="padding: 1rem"><?= $student['nilai'] ?></td>
                    <td style="padding: 1rem">
                        <?= $student['nilai'] >= 90 ? "A" : 
                        ($student['nilai'] >= 80 ? "B" :
                        ($student['nilai'] >= 70 ? "C" :
                        ($student['nilai'] >= 60 ? "D" : "E")))  ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>