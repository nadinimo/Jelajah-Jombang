<?php
session_start();

$activePage = 'kontak';

if (isset($_SESSION['id_user'])) {
    include 'navbarafter.php';
} else {
    include 'navbarbefore.php';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tim Pengembang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="team-section">
        <div class="team-container">
            <h2 class="team-title">Dosen Penasihat</h2>
            <div class="team-members">
                <div class="team-member">
                    <div class="team-member-image-container">
                        <img src="assets/fototim/buek.png" alt="Member 1" class="team-member-image">
                    </div>
                    <h3 class="team-member-name">Eka Dyar Wahyuni, S. Kom., M. Kom</h3>
                    <p class="team-member-info">Dosen Sistem Informasi</p>
                </div>
                <div class="team-member">
                    <div class="team-member-image-container">
                        <img src="assets/fototim/buan.png" alt="Member 2" class="team-member-image">
                    </div>
                    <h3 class="team-member-name">Anita Wulansari, S. Kom., M. Kom</h3>
                    <p class="team-member-info">Dosen Sistem Informasi</p>
                </div>
            </div>
        </div>

        <div class="team-container pt-5">
            <h2 class="team-title">Tim Pengembang</h2>
            <div class="team-members">
                <div class="team-member">
                    <div class="team-member-image-container">
                        <img src="assets/fototim/fara.png" alt="Member 1" class="team-member-image">
                    </div>
                    <h3 class="team-member-name">Safna Faradillah</h3>
                    <p class="team-member-info">Sistem Informasi, 22082010095</p>
                </div>
                <div class="team-member">
                    <div class="team-member-image-container">
                        <img src="assets/fototim/layla.png" alt="Member 2" class="team-member-image">
                    </div>
                    <h3 class="team-member-name">Layla Mazidatus S.</h3>
                    <p class="team-member-info">Sistem Informasi, 22082010105</p>
                </div>
                <div class="team-member">
                    <div class="team-member-image-container">
                        <img src="assets/fototim/imo.png" alt="Member 3" class="team-member-image">
                    </div>
                    <h3 class="team-member-name">Nadin Isna Monica</h3>
                    <p class="team-member-info">Sistem Informasi, 22082010118</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
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
              <a href="wisata.php" class="text-white" style="text-decoration: none"
                >Wisata</a
              >
            </p>
            <p>
              <a href="kuliner.php" class="text-white" style="text-decoration: none"
                >Kuliner</a
              >
            </p>
            <p>
              <a href="panduan.php" class="text-white" style="text-decoration: none"
                >Panduan</a
              >
            </p>
          </div>
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
            <h5 class="text-uppercase mb-4 font-weight-bold text-warning">
              Perusahaan
            </h5>
            <p>
              <a href="tentangkami.php" class="text-white" style="text-decoration: none"
                >Tentang Kami</a
              >
            </p>
            <p>
              <a href="timpengembang.php" class="text-white" style="text-decoration: none"
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
