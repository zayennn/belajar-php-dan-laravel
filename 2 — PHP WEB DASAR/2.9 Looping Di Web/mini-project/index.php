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

$students = [];
$nilai = 80;

$status = $nilai >= 90 ? "A" : ( $nilai >= 80 ? "B" : "C");

echo $status;

?>