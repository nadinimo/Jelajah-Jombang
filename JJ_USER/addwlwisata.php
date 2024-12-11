<?php
session_start();
include 'ceksession.php';
include 'config.php'; 

if (isset($_GET['id'])) {
    $id_wisata = $_GET['id'];
    $id_user = $_SESSION['id_user'];

    $query_check = "SELECT id_wlwisata FROM wlwisata WHERE id_user = ? AND id_wisata = ?";
    $stmt_check = $conn->prepare($query_check);
    $stmt_check->bind_param('ii', $id_user, $id_wisata);
    $stmt_check->execute();
    $stmt_check->store_result();

    if ($stmt_check->num_rows > 0) {
        echo "<script>alert('Wisata sudah ada di dalam wishlist'); window.location.href='wlwisata.php';</script>";
    } else {
        $query_insert = "INSERT INTO wlwisata (id_user, id_wisata) VALUES (?, ?)";
        $stmt_insert = $conn->prepare($query_insert);
        $stmt_insert->bind_param('ii', $id_user, $id_wisata);

        if ($stmt_insert->execute()) {
            echo "<script>alert('Wishlist wisata berhasil ditambah'); window.location.href='wlwisata.php';</script>";
        } else {
            echo "Gagal menambahkan wishlist: " . $conn->error;
        }

        $stmt_insert->close();
    }

    $stmt_check->close();
    $conn->close();
} else {
    echo "ID wisata tidak ditemukan";
}
?>
