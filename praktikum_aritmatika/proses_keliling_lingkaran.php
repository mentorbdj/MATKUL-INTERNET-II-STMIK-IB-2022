<?php

// melakukan validasi
if ($_POST['jari_jari'] == null) {
    header('location:form_keliling_lingkaran.php');
}

$jarijari = $_POST['jari_jari'];

$hasil = pi() * $jarijari * 2;

echo "<h3>Keliling Lingaran dengan r = $jarijari adalah $hasil</h3>";
