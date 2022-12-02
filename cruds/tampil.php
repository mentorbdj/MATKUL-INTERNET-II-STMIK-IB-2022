<?php

 include 'koneksi.php';

 // lakukan query
 $query  = "SELECT * FROM tb_user";

 if (@$_GET['cari']) {
    // query untuk searching
    $query .= " WHERE username LIKE '%".$_GET['cari']."%'";
    $query .= " OR password LIKE '%".$_GET['cari']."%'";
    $query .= " ORDER BY id DESC";
 }

 $result = $koneksi->query($query);

?>

<div class="row justify-content-between">
    <h1>Daftar User</h1>
    <a href="logout.php" class="btn btn-danger btn-sm">Logout</a>    
</div>

<hr>

<a href="formtambah.php" class="my-2 btn btn-primary">Tambah User</a>

<form action="<?= $_SERVER['PHP_SELF'] ?>" method="get" class="row g-3">
    <div  class="col-auto">
        <label for="inputPassword2" class="visually-hidden">Password</label>
        <input type="search" name="cari" value="<?= $_GET['cari'] ?? '' ?>" class="form-control">
    </div>
    <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3">Cari</button>
    </div>
</form>

<div class="table-responsive">
    <table border="1" class="table table-bordered table-hover">
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
                    <a href="formedit.php?id=<?= $fetch['id'] ?>" class="btn btn-success">
                        Edit
                    </a>

                    <form action="hapususer.php" method="post">
                        <input type="hidden" name="id" value="<?= $fetch['id'] ?>">
                        <input type="submit" value="Hapus User" class="btn btn-danger">
                    </form>
                </td>
            </tr>
        <?php endwhile ?>
    </table>
</div>

 
