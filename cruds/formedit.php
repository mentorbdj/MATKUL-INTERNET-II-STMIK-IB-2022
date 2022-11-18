<?php

include 'koneksi.php';

$id = $_GET['id'];

$sql = "SELECT * FROM tb_user WHERE id='".$id."'";
$query = $koneksi->query($sql);

$result = $query->fetch_assoc();

?>

<h1>Form Tambah User</h1>
<hr>

<form action="updateuser.php" method="post">
    
    <input type="hidden" name="id" value="<?= $result['id'] ?>">

    <label for="">Username</label>
    <input type="text" name="username" value="<?= $result['username'] ?>">

    <label for="">Password</label>
    <input type="password" name="password">

    <input type="submit" value="Update Data">
</form>