<?php
    /*
        Buat looping 1-100

        Kalau angka genap tampil:
        *Genap

        Kalau ganjil:
        *Ganjil
    */

    for ($i = 1; $i <= 10; $i++) {
        if ($i % 2 == 0) {
            echo "$i angka genap\n";
        } else {
            echo "$i angka ganjil\n";
        }
    }
?>