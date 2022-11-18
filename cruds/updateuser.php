<?php

include 'koneksi.php';

$id = $_POST['id'];
$username = $_POST['username'];


$sql  = "UPDATE tb_user SET username='".$username."'";

if ($_POST['password']) {
    $sql .= " , password='MD5($_POST[password])'";
}

$sql .= " WHERE id='".$id."' ";

$data  = $koneksi->query($sql);

if ($data) {
    echo "<script>
        alert('Data Berhasil Diperbarui');
        
        setTimeout(() => { window.location.href = window.location.origin + '/cruds/tampil.php' }, 500);
    </script>";
} else { 

    echo "<script>
        alert('Data Gagal Diperbarui');
        
        setTimeout(() => { window.location.href = window.location.origin + '/cruds/formedit.php' }, 500);
    </script>";
}