<?php
session_start();

$activePage = 'tentang';

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
    <title>Tentang Kami</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
    </head>
    <body>
  
        <section id="about" class="pd-0">
        <div class="container">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="home.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tentang Kami</li>
            </ol>
        </nav>
        </div>
        </section>
        <section id="about" class="pd-0 mb-4">
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
                  <h2 class="section-tittle">Tentang Kami</h2>
                  <p style="text-align: justify">
                    Sistem Informasi Jelajah Jombang adalah sebuah platform berbasis website yang bertujuan untuk memberikan informasi lengkap dan terkini mengenai destinasi wisata dan tempat kuliner yang ada di Kabupaten Jombang, Indonesia. 
                  </p>
                  <p style="text-align: justify">
                    Platform ini menyediakan berbagai fitur komprehensif untuk memastikan pengalaman pengguna yang optimal. Fitur-fitur tersebut mencakup informasi detail mengenai destinasi wisata dengan deskripsi, foto, peta lokasi, jam buka, dan ulasan pengunjung, serta rekomendasi tempat makan terbaik di Jombang dengan menu, harga, dan ulasan. Selain itu, pengguna dapat memesan tiket wisata secara online dengan konfirmasi instan, melihat detail informasi wisata/kuliner, menyimpan wishlist wisata/kuliner, dan melihat rekomendasi terbaik tempat wisata/ kuliner yang ada di Jombang.
                  </p>
                  <p style="text-align: justify">Dengan adanya Sistem Informasi Jelajah Jombang, diharapkan potensi pariwisata dan budaya di Kabupaten Jombang dapat lebih dikenal luas, memudahkan wisatawan dalam merencanakan perjalanan mereka, serta berkontribusi pada peningkatan ekonomi lokal melalui promosi destinasi wisata dan tempat kuliner.</p>
                </div>
              </div>
            </div>
          </section>

        <section class="our-values">
          <div class="container">
              <h2 class="section-title">Our Values</h2>
              <div class="values">
                  <div class="value-card">
                      <img src="assets/Icon/12.png" alt="Value 1" class="value-image">
                      <div class="value-content">
                          <h4 style="text-align: center;">Relevan dan Terpercaya</h4>
                          <p class="card-text" style="text-align: justify;">Website Jelajah Jombang menyediakan informasi yang akurat dan dapat diandalkan. Setiap konten yang dipublikasikan melalui proses verifikasi yang ketat untuk memastikan kebenarannya, sehingga pengguna bisa mendapatkan informasi yang relevan dan terpercaya mengenai destinasi wisata di Jombang.</p>
                      </div>
                  </div>
                  <div class="value-card">
                      <img src="assets/Icon/13.png" alt="Value 2" class="value-image">
                      <div class="value-content">
                          <h4 style="text-align: center;">Informasi Terupdate</h4>
                    <p class="card-text" style="text-align: justify;">Kami selalu berusaha untuk memberikan informasi yang paling baru dan terkini mengenai berbagai tempat wisata, acara, dan kegiatan di Jombang. Website Jelajah Jombang secara rutin diperbarui untuk memastikan pengunjung tidak ketinggalan berita dan update terbaru tentang Jombang.</p>
                      </div>
                  </div>
                  <div class="value-card">
                      <img src="assets/Icon/15.png" alt="Value 3" class="value-image">
                      <div class="value-content">
                          <h4 style="text-align: center;">Kelestarian Alam dan Budaya</h4>
                    <p class="card-text" style="text-align: justify;">Jelajah Jombang berkomitmen untuk mempromosikan pariwisata yang bertanggung jawab dan berkelanjutan. Kami percaya bahwa keindahan alam Jombang harus dijaga dan dilestarikan untuk generasi mendatang. Oleh karena itu, kami menyediakan informasi untuk melestarikan dan mempromosikan pesona dan warisan budaya lokal.</p>
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
      <script src="script.js"></script>
    </body>
</html>