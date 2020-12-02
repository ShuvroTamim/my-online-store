<?php
    session_start();

    if (empty($_SESSION['email']) and empty($_SESSION['password'])) {
        header('location: adminlogin.php');
    }
?>