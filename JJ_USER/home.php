<?php
session_start();

$activePage = 'beranda';

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
    <title>Beranda</title>
    
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    
    <section id="about" class="about section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-12 col-12">
            <div class="about-img">
              <img
                src="assets/Icon/logo-JJ.png"
                alt="logo Jelajah Jombang"
                class="img-fluid"
              />
            </div>
          </div>
          <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
            <h2>Tentang Kami</h2>
            <p style="text-align: justify">
              Sistem Informasi Jelajah Jombang adalah sebuah platform berbasis
              website yang bertujuan untuk memberikan informasi lengkap dan
              terkini mengenai destinasi wisata dan tempat kuliner yang ada di
              Kabupaten Jombang, Indonesia.
            </p>
            <a href="tentangkami.php" class="btn btn-warning">Ketahui Lebih Lanjut</a>
          </div>
        </div>
      </div>
    </section>
    <div class="konten" id="top5">
      <section id="section-swipe">
        <div class="swiper">
          <h2 id="tag">Tempat Wisata Populer</h2>
          <div class="swiper-wrapper">
            <div class="swiper-slide swiper-slide--one">
              <span>Rp5.000</span>
              <div>
                <h2>Kedung Cinet</h2>
                <p>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="w-6 h-6"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"
                    />
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"
                    />
                  </svg>
                  Pojok, Plandaan
                </p>
              </div>
            </div>
            <div class="swiper-slide swiper-slide--two">
              <span>Rp10.000</span>
              <div>
                <h2>Air Terjun Tretes</h2>
                <p>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="w-6 h-6"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"
                    />
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"
                    />
                  </svg>
                  Galengdowo, Wonosalam
                </p>
              </div>
            </div>
            <div class="swiper-slide swiper-slide--three">
              <span>Rp5.000</span>
              <div>
                <h2>Candi Rimbi</h2>
                <p>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="w-6 h-6"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"
                    />
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"
                    />
                  </svg>
                  Ngrimbi, Bareng
                </p>
              </div>
            </div>
            <div class="swiper-slide swiper-slide--four">
              <span>Rp10.000</span>
              <div>
                <h2>Bale Tani</h2>
                <p>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="w-6 h-6"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"
                    />
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"
                    />
                  </svg>
                  Banjaragung, Bareng
                </p>
              </div>
            </div>
            <div class="swiper-slide swiper-slide--five">
              <span>Rp15.000</span>
              <div>
                <h2>Duran Duren</h2>
                <p>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="w-6 h-6"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"
                    />
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"
                    />
                  </svg>
                  Notorejo, Wonosalam
                </p>
              </div>
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </section>
    </div>
    <div class="konten" id="top5">
      <section id="section-swipe">
        <div class="swiper">
          <h2 id="tag">Tempat Kuliner Populer</h2>
          <div class="swiper-wrapper">
            <div class="swiper-slide kul-slide--one">
              <div>
                <h2>Sate Slamet</h2>
                <p>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="w-6 h-6"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"
                    />
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"
                    />
                  </svg>
                  Pojok, Plandaan
                </p>
              </div>
            </div>
            <div class="swiper-slide kul-slide--two">
              <div>
                <h2>Soto Kadar</h2>
                <p>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="w-6 h-6"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"
                    />
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"
                    />
                  </svg>
                  Galengdowo, Wonosalam
                </p>
              </div>
            </div>
            <div class="swiper-slide kul-slide--three">
              <div>
                <h2>Bakso Mama</h2>
                <p>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="w-6 h-6"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"
                    />
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"
                    />
                  </svg>
                  Ngrimbi, Bareng
                </p>
              </div>
            </div>
            <div class="swiper-slide kul-slide--four">
              <div>
                <h2>Ayam Panggang Bu Tris</h2>
                <p>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="w-6 h-6"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"
                    />
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"
                    />
                  </svg>
                  Banjaragung, Bareng
                </p>
              </div>
            </div>
            <div class="swiper-slide kul-slide--five">
              <div>
                <h2>Pecel Dijah</h2>
                <p>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="w-6 h-6"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"
                    />
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"
                    />
                  </svg>
                  Notorejo, Wonosalam
                </p>
              </div>
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </section>
    </div>
    <section id="persuasif" class="persuasif section-padding">
      <div class="container">
        <div class="card text-bg-dark">
          <img src="assets/home/bg-persuasi.jpg" class="card-img" alt="..." />
          <div class="card-img-overlay">
            <div class="row">
              <div class="col-lg-8 col-md-12 col-12">
                <h1 class="card-title">
                  YUK, <br />
                  JELAJAHI JOMBANG!
                </h1>
              </div>
              <div class="col-lg-4 col-md-12 col-12 ps-lg-5 mt-md-4">
                <div class="panah">
                  <a href="home.php">
                    <img src="assets/Icon/panah.png" width="80px" />
                  </a>
                </div>
              </div>
            </div>
          </div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
  </body>
</html>
