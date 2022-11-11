<?php

include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = "INSERT INTO tb_user (username, password) VALUES ('".$username."', MD5('".$password."'))";

$data  = $koneksi->query($query);

if ($data) {
    echo "<script>
        alert('Data Berhasil Disimpan');
        
        setTimeout(() => { window.location.href = window.location.origin + '/cruds/tampil.php' }, 500);
    </script>";
} else { 
    // http://localhost/cruds/formtambah.php
    // cruds adalah nama project kalian

    echo "<script>
        alert('Data Gagal Disimpan');
        
        setTimeout(() => { window.location.href = window.location.origin + '/cruds/formtambah.php' }, 500);
    </script>";
}