<?php
session_start();
if (!isset($_SESSION['id_user'])) { //error seharusnya id_user bukan idUser
    $error_message = "Anda harus login terlebih dahulu";
    echo "<script>alert('$error_message'); window.location.href='home.php';</script>";
    exit();
}
?>