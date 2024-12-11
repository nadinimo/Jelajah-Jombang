<?php
session_start(); 
$activePage = 'wishlist'; 
if (isset($_SESSION['id_user'])) {
    include 'navbarafter.php';
} else {
    include 'navbarbefore.php'; 
}
include 'config.php';
$id_user = $_SESSION['id_user'];

$sql = "SELECT w.id_wisata, w.nama_wisata, w.lokasi_wisata, w.gambar_wisata, h_dewasa.harga as harga_dewasa
        FROM wlwisata wl
        JOIN wisata w ON wl.id_wisata = w.id_wisata
        LEFT JOIN harga_tiket h_dewasa ON w.id_wisata = h_dewasa.id_wisata AND h_dewasa.jenis = 'Dewasa'
        WHERE wl.id_user = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $id_user);
$stmt->execute();
$result = $stmt->get_result();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Wishlist</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />
    <style>
        .nav-link {
            color: black;
        }
        .nav-link.active {
            color: #198754;
        }
        .nav-link:hover {
            color: #198754;
        }
    </style>
</head>
<body>
    <div class="container mt-4 text-center">
        <div class="row p-2">
            <h4>My Wishlist</h4>
        </div>
        <div class="row p-2 justify-content-center">
            <ul class="nav nav-underline justify-content-center">
                <li class="nav-item col-5">
                    <a class="nav-link active" aria-current="page" href="#">Wisata</a>
                </li>
                <li class="nav-item col-5">
                    <a class="nav-link" href="wlkuliner.php">Kuliner</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="container mt-4 mb-4">
        <div class="row">
            <?php if ($result->num_rows > 0) : ?>
                <?php while ($row = $result->fetch_assoc()) : ?>
                    <div class="card m-2" style="width: 18rem;">
                        <?php
                        if (!empty($row['gambar_wisata'])) {
                            $base64_image = base64_encode($row['gambar_wisata']);
                            echo "<img class='img img-2 pt-2 d-flex justify-content-center align-items-center' src='data:image/jpeg;base64,$base64_image' width=260px height=200px>";
                        } else {
                            echo "Tidak ada gambar";
                        }
                        ?>
                        <div class="text p-3">
                            <h3><?php echo $row['nama_wisata']; ?></h3>
                            <p class="text-success font-weight-bold" id="" style="margin-right:40px; font-weight:bolder;">Rp<?php echo $row['harga_dewasa']; ?></p>
                            <p class="icon-map-o"><span><?php echo $row['lokasi_wisata']; ?></span></p>
                            <hr>
                            <div class="d-flex flex-row w-auto">
                                <div class="col-6">
                                    <a href="#" class="m-2 btn-warning btn w-75">Hapus</a>
                                </div>
                                <div class="col-6">
                                    <a href="detailwisata.php?id=<?php echo $row['id_wisata']; ?>" class="m-2 btn btn-success w-75">Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else : ?>
                <div class="col-12 text-center">
                    <p>Tidak ada wishlist.</p>
                </div>
            <?php endif; ?>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-qE1I2UIJoE2rDsS07Xz74Amu05jgjqXc/vdFFp4U4LMOr2hz1M64JME3dJEKExxL" crossorigin="anonymous"></script>
</body>

</html>