<?php
    /*
        Bikin:
            • "Aplikasi Biodata"

        Fitur:
            • input nama
            • input umur
            • tampilkan hasil
            • kasih status dewasa / belum
    */

    echo "masukan nama : ";
    $nama = trim(fgets(STDIN));

    echo "masukan umur : ";
    $umur = trim(fgets(STDIN));

    $status = "";
    if ($umur >= 17) {
        $status = "dewasa";
    } else {
        $status = "belum dewasa";
    }

    echo "nama : $nama\numur : $umur\nstatus : $status";
?>