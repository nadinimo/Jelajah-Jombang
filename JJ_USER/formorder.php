<?php
include 'ceksession.php';
include 'config.php';

$id_wisata = $_GET['id'];

$sql = "SELECT w.nama_wisata, h_dewasa.harga AS harga_dewasa, h_anak.harga AS harga_anak
        FROM wisata w
        LEFT JOIN harga_tiket h_dewasa ON w.id_wisata = h_dewasa.id_wisata AND h_dewasa.jenis = 'Dewasa'
        LEFT JOIN harga_tiket h_anak ON w.id_wisata = h_anak.id_wisata AND h_anak.jenis = 'Anak-anak'
        WHERE w.id_wisata = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $id_wisata); //kurang i
$stmt->execute();
$result = $stmt->get_result();
$wisata = $result->fetch_assoc(); //seharusnya fetch_assoc bukan fetch
$nama_wisata = $wisata['nama_wisata'];
$harga_dewasa = $wisata['harga_dewasa'];
$harga_anak = $wisata['harga_anak'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pemesanan</title>
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
                <a class="btn btn-warning btn-sm btnback">Back</a>
            </div>
            <div class="col-6">
                <h4>Form Pemesanan</h4>
            </div>
        </div>
        <div class="row mt-3">
            <form action="formpayment.php" method="POST">
                <div class="mb-3">
                    <label for="namaWisata" class="form-label">Nama Wisata</label>
                    <input type="text" id="namaWisata" class="form-control" value="<?php echo htmlspecialchars($nama_wisata); ?>" disabled>
                </div>
                <div class="mb-3">
                    <label for="jumlahDewasa" class="form-label">Jumlah Tiket Dewasa</label>
                    <input type="number" id="jumlahDewasa" class="form-control" name="jumlahDewasa" min="0" value="0" required> 
                    <small>Harga tiket dewasa: Rp <?php echo number_format($harga_dewasa, 0, ',', '.'); ?></small>
                </div>
                <?php if (!empty($harga_anak)): ?>
                <div class="mb-3">
                    <label for="jumlahAnak" class="form-label">Jumlah Tiket Anak</label>
                    <input type="number" id="jumlahAnak" class="form-control" name="jumlahAnak" min="0" value="0">
                    <small>Harga tiket anak: Rp <?php echo number_format($harga_anak, 0, ',', '.'); ?></small>
                </div>
                <?php endif; ?>
                <input type="hidden" name="id_wisata" value="<?php echo htmlspecialchars($id_wisata); ?>"> 
                <button type="submit" class="btn btn-success">Selanjutnya</button>
            </form>
            
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(".btnback").on("click", function(e) {
            e.preventDefault();
            window.history.back(); //kurang back
        });
    </script>
</body>
</html>
