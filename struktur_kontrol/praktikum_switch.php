<?php

    $nilai = 86;

    // if ($nilai <= 30) {
    //     echo "Nilai anda adalah D";
    // } elseif ($nilai > 30 && $nilai <= 60) {
    //     echo "Nilai anda adalah C";
    // } elseif ($nilai > 60 && $nilai <= 85) {
    //     echo "Nilai anda adalah B";
    // } elseif ($nilai > 85 && $nilai <= 100) {
    //     echo "Nilai anda adalah A";
    // } else {
    //     echo "Nilai anda salah input";
    // }

    switch ($nilai) {
        case $nilai <= 30:
            echo "Nilai anda adalah D";
            break;
        case $nilai > 30 && $nilai <= 60:
            echo "Nilai anda adalah C";
            break;
        case $nilai > 60 && $nilai <= 85:
            echo "Nilai anda adalah B";
            break;
        case $nilai > 85 && $nilai <= 100:
            echo "Nilai anda adalah A";
            break;
        default:
            echo "Nilai anda salah input";
            break;
    }

    $huruf = "A";

    switch ($huruf) {
        case 'A':
            echo "Sangat Baik";
            break;

        case 'B':
            echo "Baik";
            break;

        case 'C':
            echo "Cukup";
            break;

        case 'D':
            echo "Kurang";
            break;

        case 'E':
            echo "Sangat Kurang";
            break;

        default:
            echo "Huruf tidak diketahui";
            break;
    }
?>