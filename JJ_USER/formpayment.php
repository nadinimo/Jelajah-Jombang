<?php
session_start();
include 'config.php';
$id_wisata = $_POST['id_wisata'];
$jumlahDewasa = $_POST['jumlahDewasa'];
$jumlahAnak = $_POST['jumlahAnak'];

$sql = "SELECT w.nama_wisata, h_dewasa.harga AS harga_dewasa, h_anak.harga AS harga_anak
        FROM wisata w
        LEFT JOIN harga_tiket h_dewasa ON w.id_wisata = h_dewasa.id_wisata AND h_dewasa.jenis = 'Dewasa'
        LEFT JOIN harga_tiket h_anak ON w.id_wisata = h_anak.id_wisata AND h_anak.jenis = 'Anak-anak' 
        WHERE w.id_wisata = ?"; //error typo h_ank seharusnya h_anak
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $id_wisata); //error kurang i
$stmt->execute();
$result = $stmt->get_result();
$wisata = $result->fetch_assoc(); //seharusnya fetch_assoc

$nama_wisata = $wisata['nama_wisata'];
$harga_dewasa = $wisata['harga_dewasa'];
$harga_anak = $wisata['harga_anak'];

$total_harga = ($jumlahDewasa * $harga_dewasa) + ($jumlahAnak * $harga_anak);

$id_user = $_SESSION['id_user']; //ada spasi
$username = $_SESSION['usn_user']; //ada spasi
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pembayaran</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous" />
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container pt-5">
        <div class="row mt-5">
            <div class="col-1">
                <a class="btn btn-warning btn-sm" href="formorder.php?id=<?php echo $id_wisata; ?>">Sebelumnya</a>
            </div>
            <div class="col-6">
                <h4>Form Pembayaran</h4>
            </div>
        </div>
        <div class="row mt-3">
            <form action="prosespayment.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="namaWisata" class="form-label">Nama Wisata</label>
                    <input type="text" id="namaWisata" class="form-control" value="<?php echo $nama_wisata; ?>" disabled>
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" id="username" class="form-control" value="<?php echo $username; ?>" disabled>
                </div>
                <div class="mb-3">
                    <label for="totalHarga" class="form-label">Total Harga</label>
                    <input type="text" id="totalHarga" class="form-control" value="Rp <?php echo number_format($total_harga, 0, ',', '.'); ?>" disabled>
                </div>
                <div class="mb-3">
                    <label for="tanggal" class="form-label">Tanggal</label>
                    <input type="text" id="tanggal" class="form-control" value="<?php echo date('Y-m-d H:i:s'); ?>" disabled>
                </div>
                <div class="mb-3">
                    <div class="mb-1">
                    <label for="qris" class="form-label">Scan Qris Pembayaran</label>
                    </div>
                    <div class="mb-2 text-center">
                    <img src="assets/Icon/qris.png" width="300px">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="buktiPembayaran" class="form-label">Bukti Pembayaran</label>
                    <input type="file" id="buktiPembayaran" name="buktiPembayaran" class="form-control" accept="image/.jpeg" required>
                </div>
                <div class="mb-3">
                    <p>*Tiket ini hanya berlaku di hari pemesanan tiket (hari ini).</p>
                </div>
                <input type="hidden" name="id_wisata" value="<?php echo $id_wisata; ?>">
                <input type="hidden" name="total_harga" value="<?php echo $total_harga; ?>">
                <input type="hidden" name="jumlahDewasa" value="<?php echo $jumlahDewasa; ?>">
                <input type="hidden" name="jumlahAnak" value="<?php echo $jumlahAnak; ?>">
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>

</html>
