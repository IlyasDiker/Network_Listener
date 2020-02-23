<?php
    session_start();

    if (!isset($_SESSION['user_id'])) {
        header("Location: login.php?error=goback");
        exit();
    }
    require 'header.php';
    require 'content.php';
?>

