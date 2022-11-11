<?php

include 'koneksi.php';

$id = $_POST['id'];

$query = "DELETE FROM tb_user WHERE id = '".$id."'";

$data  = $koneksi->query($query);

if ($data) {
    echo "<script>
        alert('Data Berhasil Dihapus');
        
        setTimeout(() => { window.location.href = window.location.origin + '/cruds/tampil.php' }, 500);
    </script>";
} else { 
    // http://localhost/cruds/formtambah.php
    // cruds adalah nama project kalian

    echo "<script>
        alert('Data Gagal Dihapus');
        
        setTimeout(() => { window.location.href = window.location.origin + '/cruds/tampil.php' }, 500);
    </script>";
}