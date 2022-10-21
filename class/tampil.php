<?php

include 'Models/Mahasiswa.php';

$budi  = new Mahasiswa('budi wahyudi', '123456', 'Jl Trans Kalimantan');

$yudi  = new Mahasiswa();
$yudi->nama = 'Yudi Santoso';
$yudi->nim  = '121212';
$yudi->nama = 'Jl. Gatot Subroto';


echo "Budi = ";
print_r($budi);
echo "<br>";
echo "Yudi = ";
print_r($yudi);

