<?php
session_start();
include 'ceksession.php';
$nama_user = $_SESSION['nama_user'];
$usn_user = $_SESSION['usn_user'];
$email_user = $_SESSION['email_user'];
$activePage = 'profile'; 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - Jelajah Jombang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="assets/Icon/logo-JJ.png" width="80px" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-0 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="home.php">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tentangkami.php">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="wisata.php">Wisata</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="kuliner.php">Kuliner</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="panduan.php">Panduan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="kontak.php">Kontak</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://d17ivq9b7rppb3.cloudfront.net/small/avatar/pp.jpg" alt="Avatar" class="rounded-circle" width="20px">
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                        <li><a class="dropdown-item" href="wlwisata.php">Wishlist</a></li>
                        <li><a class="dropdown-item text-danger" href="logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-4">
            <img src="https://d17ivq9b7rppb3.cloudfront.net/small/avatar/pp.jpg" alt="Profile Picture" class="rounded-circle img-fluid">
            <h3><?php echo $nama_user; ?></h3>
            <p>@<?php echo $usn_user; ?></p>
            <p><?php echo $email_user; ?></p>
            <a href="#" class="btn btn-primary">Edit Profile</a>
        </div>
        <div class="col-md-8">
            <h4>Status Pemesanan</h4>
            <div class="mb-3">
                <button class="btn btn-secondary" onclick="showTab('menunggu')">Menunggu</button>
                <button class="btn btn-secondary" onclick="showTab('berhasil')">Berhasil</button>
                <button class="btn btn-secondary" onclick="showTab('gagal')">Gagal</button>
            </div>
            <div id="konten-tab">
                <?php include 'ordermenunggu.php'; ?>
            </div>
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
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybGPSmYYp1ebNxKusVV8LrpQD0+0tgBsks06MO70GGe2d5yM/" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-QFJW5vXwo8cM9c7I1T1x3zXdA3gGV+6dS1lZ8p9aPUghWcF7f8NKL8W8PR5HGVI9" crossorigin="anonymous"></script>

<script>
    function showTab(status) {
        var url = '';
        if (status === 'menunggu') {
            url = 'ordermenunggu.php';
        } else if (status === 'berhasil') {
            url = 'orderberhasil.php';
        } else if (status === 'gagal') {
            url = 'ordergagal.php';
        }
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById('konten-tab').innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", url, true);
        xhttp.send();
    }
    showTab('menunggu');
</script>

</body>
</html>
