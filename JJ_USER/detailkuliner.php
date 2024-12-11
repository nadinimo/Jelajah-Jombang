<?php

session_start();

$activePage = 'kuliner';

if (isset($_SESSION['id_user'])) {
    include 'navbarafter.php';
} else {
    include 'navbarbefore.php';
}
include 'config.php';

$id_kuliner = $_GET['id'];

$sql = "SELECT nama_kuliner, deskripsi_kuliner, lokasi_kuliner, maps_kuliner, gambar_kuliner from kuliner
        WHERE id_kuliner = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $id_kuliner);
$stmt->execute();
$result = $stmt->get_result();
$kuliner = $result->fetch_assoc();
?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Kuliner</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container mt-5 pt-5">
        <div class="row mt-5">
            <div class="col-1">
                <img src="assets/Icon/back-button.png" type="button" class="btn btnback" alt="" width="60px">
            </div>
            <div class="col-5">
                <?php
                if (!empty($kuliner['gambar_kuliner'])) {
                    $base64_image = base64_encode($kuliner['gambar_kuliner']);
                    echo "<img src='data:image/jpeg;base64,$base64_image' width='400px' height='300px' class='rounded'>";
                } else {
                    echo "Tidak ada gambar";
                }
                ?>
            </div>
            <div class="col-6">
                <div class="row">
                    <h3><?php echo $kuliner['nama_kuliner']; ?></h3>
                </div>
                <div class="row">
                    <p><?php echo $kuliner['lokasi_kuliner']; ?></p>
                </div>
                <div class="row-cols-3">
                    <a href="addwlkuliner.php?id=<?php echo $id_kuliner; ?>" class="btn btn-sm btn-warning">Wishlist</a> 
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <p class="text-justify"><?php echo $kuliner['deskripsi_kuliner']; ?></p>
        </div>
        <div class="row pb-4 mb-2">
            <div class="row">
                <h5>Peta Lokasi</h5>
                <a href="<?php echo $kuliner['maps_kuliner']; ?>" target="_blank">Lihat di Google Maps</a>
            </div>
        </div>
    </div>
    <footer class="text-bg-success pt-5 pb-4">
        <div class="container text-center text-md-left">
            <div class="row text-center text-md-left">
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <img src="assets/Icon/logo-JJ.png" width="120px" />
                </div>
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">
                        Fitur
                    </h5>
                    <p>
                        <a href="#" class="text-white" style="text-decoration: none">Wisata</a>
                    </p>
                    <p>
                        <a href="#" class="text-white" style="text-decoration: none">Kuliner</a>
                    </p>
                    <p>
                        <a href="#" class="text-white" style="text-decoration: none">Panduan</a>
                    </p>
                </div>
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">
                        Perusahaan
                    </h5>
                    <p>
                        <a href="#" class="text-white" style="text-decoration: none">Tentang Kami</a>
                    </p>
                    <p>
                        <a href="#" class="text-white" style="text-decoration: none">Tim Pengembang</a>
                    </p>
                    <p>
                        <a href="#" class="text-white" style="text-decoration: none">Tanya Jawab</a>
                    </p>
                </div>
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">
                        Sosial Media
                    </h5>
                    <a href="https://www.instagram.com/disporaparjombang/"><img src="assets/Icon/ig.png" width="40px" style="padding-right: 8px" /></a>
                    <a href=""><img src="assets/Icon/gmail.png" width="38px" /></a>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".btnback").on("click", function(e) {
                e.preventDefault();
                window.location.href = 'kuliner.php';
            });
        });
    </script>
</body>

</html>