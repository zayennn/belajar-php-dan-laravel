<?php

    /*
        LATIHAN 2.3

        Buat halaman "Profil Laptop"

        Tampilkan:

        - nama laptop
        - processor
        - RAM
        - VGA
        - alasan suka laptop itu

        Gunakan:

        - echo
        - variable PHP
        - double quote
        - concatenation (.)

        Minimal:
        1 bagian pakai interpolation
        1 bagian pakai concatenation

        Contoh output:

        PROFIL LAPTOP

        Nama Laptop: ASUS TUF
        Processor: Ryzen 7
        RAM: 16GB
        VGA: RTX 4060

        Kenapa suka:
        Karena performanya bagus.
    */

    $namaLaptop = "asus tuf f15";
    $processor = "intel core i5 12500h";
    $ram = 16;
    $vga = "RTX 3050 4GB Laptop GPU";
    $alasanSuka = "karena mempunyai performa yang bagus";

    echo "
<h1>Profil Laptop</h1>
<hr>
<p>nama laptop : $namaLaptop</p>
<p>processor   : $processor</p>
<p>ram         : $ram</p>
<p>vga         : $vga</p>
<p>alasan suka : $alasanSuka</p>
    ";
?>