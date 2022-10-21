<?php

include 'Models/Mahasiswa.php';

$mahasiswa1  = new Mahasiswa('budi wahyudi', '123456', 'Jl Trans Kalimantan');
$mahasiswa2  = new Mahasiswa('M. Salah', '123456', 'Jl Trans Kalimantan');

$yudi  = new Mahasiswa();
$yudi->nama = 'Yudi Santoso';
$yudi->nim  = '121212';
$yudi->nama = 'Jl. Gatot Subroto';


echo "Budi = ";
print_r($mahasiswa1);
echo "<br>";
echo "Yudi = ";
print_r($yudi);

echo "<br>";

echo $mahasiswa2->getDeskripsiAlamatMahasiswa();

