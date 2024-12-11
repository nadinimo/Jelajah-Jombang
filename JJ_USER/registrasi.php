<?php
session_start();
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("INSERT INTO user (nama_user, usn_user, email_user, pass_user) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $username, $email, $password);

    if ($stmt->execute()) {
        echo "Registration successful!";
        $_SESSION['id_user'] = $user['id_user'];
        $_SESSION['nama_user'] = $user['nama_user'];
        $_SESSION['usn_user'] = $user['usn_user'];
        echo "<script>alert('Registrasi berhasil. Silahkan login kembali'); window.location.href='home.php';</script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>