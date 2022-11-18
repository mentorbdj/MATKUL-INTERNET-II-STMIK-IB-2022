<?php 

 include 'koneksi.php';
 
 // lakukan query

 $query  = "SELECT * FROM tb_user";

 if (@$_GET['search']) {
    $query .= " WHERE username LIKE '%".$_GET['search']."%'";
 }

 $result = $koneksi->query($query);
 
?>

<h1>Daftar User</h1>
<hr>

<a href="formtambah.php">Tambah User</a>

<form method="get">
    <input type="search" name="search" id="">
    <input type="submit" value="Cari">
</form>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Password</th>
        <th>Created At</th>
        <th>Aksi</th>
    </tr>
    <?php while ($fetch = $result->fetch_array()) : ?>
        <tr>
            <!-- Menggunakan Nullable Operator (??) -->
            <td><?= $fetch['id'] ?? '-' ?></td>
            <!-- Metode Tenary -->
            <td><?= $fetch['username'] == null ? '-' : $fetch['username'] ?></td>
            <td><?= $fetch['password'] ?? '-' ?></td>
            <td><?= $fetch['created_at'] ?? '-' ?></td>
            <td>
                <a href="formedit.php?id=<?= $fetch['id'] ?>">
                    Edit
                </a>

                <form action="hapususer.php" method="post">
                    <input type="hidden" name="id" value="<?= $fetch['id'] ?>">
                    <input type="submit" value="Hapus User">
                </form>
            </td>
        </tr>
    <?php endwhile ?>
</table>


 
