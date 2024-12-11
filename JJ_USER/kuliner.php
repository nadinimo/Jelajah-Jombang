<?php
session_start();

$activePage = 'kuliner';

if (isset($_SESSION['id_user'])) {
    include 'navbarafter.php';
} else {
    include 'navbarbefore.php';
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kuliner</title>
   
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
    </head>
    <body>
    <section id="about" class="about section-padding bg-light p-4">
        <div class="container">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Wisata</li>
                </ol>
            </nav>
        </div>
    </section>
        </section>
         <section class="ftco-section bg-light">
          <div class="container">
            <div class="row justify-content-start mb-2 pb-2">
              <div class="col-md-7 heading-section ftco-animate">
                <h2 class="mb-4"><strong>Ayo,</strong> Jelajahi Wisata di Jombang!</h2>
              </div>
            </div>
          </div>
          <div class="container-fluid" style="margin: 0 60px 60px 60px">
            <div class="row" id="kulinerContainer">
              
            </div>
          </div>
        </section>

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
      <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"
      ></script>
      <script src="script.js"></script>
      <script>
        fetch('listkuliner.php')
        .then(response => response.text())
        .then(data => {
          document.getElementById('kulinerContainer').innerHTML = data;
        })
      </script>
    </body>
</html>