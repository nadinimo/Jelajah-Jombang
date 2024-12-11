<?php

session_start(); // Mulai sesi

$activePage = 'wisata'; // Atur halaman aktif

// Periksa apakah sesi akun sudah aktif
if (isset($_SESSION['id_user'])) {
    include 'navbarafter.php'; // Panggil file navbar untuk akun yang sudah login
} else {
    include 'navbarbefore.php'; // Panggil file navbar untuk akun yang belum login
}
include 'config.php';

$id_wisata = $_GET['id'];

$sql = "SELECT w.nama_wisata, w.lokasi_wisata, w.gambar_wisata, w.deskripsi_wisata, w.jam_buka, w.jam_tutup, w.tautan_maps, h_dewasa.harga as harga_dewasa 
        FROM wisata w
        LEFT JOIN harga_tiket h_dewasa ON w.id_wisata = h_dewasa.id_wisata AND h_dewasa.jenis = 'Dewasa'
        WHERE w.id_wisata = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $id_wisata);
$stmt->execute();
$result = $stmt->get_result();
$wisata = $result->fetch_assoc();
?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Wisata</title>
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
                if (!empty($wisata['gambar_wisata'])) {
                    $base64_image = base64_encode($wisata['gambar_wisata']);
                    echo "<img src='data:image/jpeg;base64,$base64_image' width='400px' height='300px' class='rounded'>";
                } else {
                    echo "Tidak ada gambar";
                }
                ?>
            </div>
            <div class="col-6">
                <div class="row">
                    <h3><?php echo $wisata['nama_wisata']; ?></h3>
                </div>
                <div class="row">
                    <p><?php echo $wisata['lokasi_wisata']; ?></p>
                </div>
                <div class="row-cols-3">
                    <a href="addwlwisata.php?id=<?php echo $id_wisata; ?>" class="btn btn-sm btn-warning">Wishlist</a>
                    <a href="formorder.php?id=<?php echo $id_wisata; ?>" class="btn btn-sm btn-success">Pesan</a>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <p class="text-justify"><?php echo $wisata['deskripsi_wisata']; ?></p>
        </div>
        <div class="row justify-content-center text-center mt-4">
            <div class="col-6">
                <div class="row">
                    <h5>Jam Buka</h5>
                </div>
                <div class="row">
                    <h6><?php echo $wisata['jam_buka']; ?></h6>
                </div>
            </div>
            <div class="col-6">
                <div class="row">
                    <h5>Jam Tutup</h5>
                </div>
                <div class="row">
                    <h6><?php echo $wisata['jam_tutup']; ?></h6>
                </div>
            </div>
        </div>
        <div class="row pb-4 mb-2">
    <div class="row">
        <h5>Peta Lokasi</h5>
        <a href="<?php echo $wisata['tautan_maps'];?>" target="_blank">Lihat di Google Maps</a>
    </div>
    </div>
    </div> 
    <!-- ini footernya samain-->
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
              <a href="#" class="text-white" style="text-decoration: none"
                >Wisata</a
              >
            </p>
            <p>
              <a href="#" class="text-white" style="text-decoration: none"
                >Kuliner</a
              >
            </p>
            <p>
              <a href="#" class="text-white" style="text-decoration: none"
                >Panduan</a
              >
            </p>
          </div>
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
            <h5 class="text-uppercase mb-4 font-weight-bold text-warning">
              Perusahaan
            </h5>
            <p>
              <a href="#" class="text-white" style="text-decoration: none"
                >Tentang Kami</a
              >
            </p>
            <p>
              <a href="#" class="text-white" style="text-decoration: none"
                >Tim Pengembang</a
              >
            </p>
            <p>
              <a href="#" class="text-white" style="text-decoration: none"
                >Tanya Jawab</a
              >
            </p>
          </div>
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
            <h5 class="text-uppercase mb-4 font-weight-bold text-warning">
              Sosial Media
            </h5>
            <a href="https://www.instagram.com/disporaparjombang/"
              ><img
                src="assets/Icon/ig.png"
                width="40px"
                style="padding-right: 8px"
            /></a>
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
                window.location.href = 'wisata.php';
            });
        });
    </script>
</body>

</html>