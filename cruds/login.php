<?php

    include "koneksi.php";

    session_start();

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM tb_user WHERE username = '$username' AND password = MD5('$password') LIMIT 1";

        $query = $koneksi->query($sql);

        $result = $query->fetch_assoc();

        if ($query->num_rows == 1) {
            // jika username dan password ditemukan
            $_SESSION['telah_login'] = TRUE;

            header("location: index.php");
        } else {
            echo "<script>alert('username dan password salah')</script>";
        }
    }

?>
<!-- User Interface Untuk Form Login -->
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">

    Username :
    <input type="text" name="username" placeholder="Masukan Username"> 
    <br>
    Password : 
    <input type="password" name="password" placeholder="Masukan Password">
    <br>

    <button type="submit">Login</button>
</form>