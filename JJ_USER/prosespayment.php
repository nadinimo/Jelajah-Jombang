<?php
session_start();
include 'config.php';

$id_user = $_SESSION['id_user'];
$id_wisata = $_POST['id_wisata'];
$total_harga = $_POST['total_harga'];
$jumlahDewasa = $_POST['jumlahDewasa'];
$jumlahAnak = $_POST['jumlahAnak'];
$tanggal = date('Y-m-d H:i:s');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $target_dir = 'D:/xampp/htdocs/JJ_User/assets/bukti/';
    $target_file = $target_dir . basename($_FILES["buktiPembayaran"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    $check = getimagesize($_FILES["buktiPembayaran"]["tmp_name"]);
    if($check !== false) {
        echo "File adalah gambar - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File bukan gambar.";
        $uploadOk = 0;
    }

    if ($_FILES["buktiPembayaran"]["size"] > 500000) {
        echo "Maaf, ukuran file terlalu besar.";
        $uploadOk = 0;
    }

    if($imageFileType != "jpg" && $imageFileType != "jpeg") {
        echo "Maaf, hanya file JPG & JPEG yang diperbolehkan.";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo "Maaf, file Anda tidak terunggah.";
    } else {
        if (move_uploaded_file($_FILES["buktiPembayaran"]["tmp_name"], $target_file)) {
            echo "File ". htmlspecialchars( basename( $_FILES["buktiPembayaran"]["name"])). " berhasil diunggah.";

            $bukti_pemesanan_base64 = base64_encode(file_get_contents($target_file));

            $query_pemesanan = "INSERT INTO pemesanan (id_user, total_harga, tanggal, status, bukti_pemesanan) VALUES (?, ?, ?, 'menunggu', ?)";
            $stmt_pemesanan = $conn->prepare($query_pemesanan);
            $stmt_pemesanan->bind_param('iiss', $id_user, $total_harga, $tanggal, $bukti_pemesanan_base64);

            if ($stmt_pemesanan->execute()) {
                $id_pemesanan = $stmt_pemesanan->insert_id;
                if ($jumlahDewasa > 0) {
                    $query_detail = "INSERT INTO detail_pemesanan (id_pemesanan, id_harga, jumlah_orang) VALUES (?, (SELECT id_harga FROM harga_tiket WHERE id_wisata = ? AND jenis = 'Dewasa'), ?)";
                    $stmt_detail = $conn->prepare($query_detail);
                    $stmt_detail->bind_param('iii', $id_pemesanan, $id_wisata, $jumlahDewasa);
                    $stmt_detail->execute();
                    $stmt_detail->close();
                }
                
                if ($jumlahAnak > 0) {
                    $query_detail = "INSERT INTO detail_pemesanan (id_pemesanan, id_harga, jumlah_orang) VALUES (?, (SELECT id_harga FROM harga_tiket WHERE id_wisata = ? AND jenis = 'Anak-anak'), ?)";
                    $stmt_detail = $conn->prepare($query_detail);
                    $stmt_detail->bind_param('iii', $id_pemesanan, $id_wisata, $jumlahAnak);
                    $stmt_detail->execute();
                    $stmt_detail->close();
                }

                echo "<script>alert('Pemesanan berhasil dibuat, tunggu verifikasi pembayaran beberapa saat'); window.location.href='profile.php';</script>";
            } else {
                echo "Terjadi kesalahan: " . $stmt_pemesanan->error;
            }

            $stmt_pemesanan->close();
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}

$conn->close();
?>
