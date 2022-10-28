<?php

    require 'koneksi.php';

    // lakukan query
    $query  = "SELECT * FROM tb_user";
    $result = $koneksi->query($query);

?>

<!-- ekstrak data -->
<!-- tampilkan data -->
<table border="1">
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Password</th>
        <th>Created At</th>
    </tr>
    <?php while ($fetch = $result->fetch_array()) : ?>
        <tr>
            <td>
                <?= $fetch['id'] ?? '-' ?>
            </td>
            <td>
                <?= $fetch['username'] ?? '-' ?>
            </td>
            <td>
                <?= $fetch['password'] ?? '-' ?>
            </td>
            <td>
                <?= $fetch['created_at'] ?? '-' ?>
            </td>
        </tr>
    <?php endwhile; ?>
</table>