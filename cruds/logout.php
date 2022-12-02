<?php
    session_start();

    $_SESSION['telah_login'] = FALSE;

    session_destroy();

    header("location: login.php");
?>