<?php
session_start();
include 'ceksession.php';
include 'config.php'; 
if (isset($_GET['id'])) {
    $id_kuliner = $_GET['id'];
    $id_user = $_SESSION['id_user']; 
    $query_check = "SELECT id_wlkuliner FROM wlkuliner WHERE id_user = ? AND id_kuliner = ?";
    $stmt_check = $conn->prepare($query_check);
    $stmt_check->bind_param('ii', $id_user, $id_kuliner);
    $stmt_check->execute();
    $stmt_check->store_result();

    if ($stmt_check->num_rows > 0) {
        echo "<script>alert('Kuliner sudah ada di dalam wishlist'); window.location.href='wlkuliner.php';</script>";
    } else {
        $query_insert = "INSERT INTO wlkuliner (id_user, id_kuliner) VALUES (?, ?)";
        $stmt_insert = $conn->prepare($query_insert);
        $stmt_insert->bind_param('ii', $id_user, $id_kuliner);

        if ($stmt_insert->execute()) {
            echo "<script>alert('Wishlist wisata berhasil ditambah'); window.location.href='wlkuliner.php';</script>";
        } else {
            
            echo "Gagal menambahkan wishlist: " . $conn->error;
        }

        $stmt_insert->close();
    }

    $stmt_check->close();
    $conn->close();
} else {
    
    echo "ID kuliner tidak ditemukan";
}
?>
