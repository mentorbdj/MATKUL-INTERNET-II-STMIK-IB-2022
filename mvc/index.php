<?php

require __DIR__ . '\app\config.php';
require __DIR__ . '\models\Database.php';
require __DIR__ . '\models\Mahasiswa.php';

use Models\Mahasiswa;

$mahasiswa = new Mahasiswa('luthfy');

print_r($mahasiswa->koneksi);
