<?php
session_start();
include 'config.php';

$error_message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT id_user, nama_user, usn_user, email_user FROM user WHERE usn_user = ? AND pass_user = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        $_SESSION['id_user'] = $user['id_user'];
        $_SESSION['nama_user'] = $user['nama_user'];
        $_SESSION['usn_user'] = $user['usn_user'];
        $_SESSION['email_user'] = $user['email_user'];
        echo "<script>alert('Login berhasil'); window.location.href='home.php';</script>";
        exit();
    } else {
        $error_message = "Username atau password salah.";
        echo "<script>alert('$error_message'); window.location.href='home.php';</script>";
    }

    $stmt->close();
    $conn->close();
}
?>
