<?php
session_start(); 

$activePage = 'kontak'; 
if (isset($_SESSION['id_user'])) {
    include 'navbarafter.php';
} else {
    include 'navbarbefore.php'; 
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="contact-container">
        <form name="contactForm" action="https://api.web3forms.com/submit" method="POST" class="contact-left" onsubmit="return validateForm()">
            <div class="mt-6 mb-1">
                <h2>Hubungi Kami</h2>
                <hr>
            </div>
            <input type="hidden" name="access_key" value="3a6bd65d-63ea-43bb-82ff-41def00b2759">
            <input type="text" name="name" placeholder="Your Name" class="contact-inputs" required>
            <input type="email" name="email" placeholder="Your Email" class="contact-inputs" required>
            <textarea name="message" placeholder="Your Message" class="contact-input" required></textarea>
            <button type="submit" >Submit <img src="assets/Icon/arrow_icon.png" alt=""></button>
        </form>
        <div class="contact-right">
            <img src="assets/Icon/icon_contact_us.png">
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
              <a href="wisata.php" class="text-white" style="text-decoration: none">Wisata</a>
            </p>
            <p>
              <a href="kuliner.php" class="text-white" style="text-decoration: none">Kuliner</a>
            </p>
            <p>
              <a href="panduan.php" class="text-white" style="text-decoration: none">Panduan</a>
            </p>
          </div>
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
            <h5 class="text-uppercase mb-4 font-weight-bold text-warning">
              Perusahaan
            </h5>
            <p>
              <a href="tentangkami.php" class="text-white" style="text-decoration: none">Tentang Kami</a>
            </p>
            <p>
              <a href="timpengembang.php" class="text-white" style="text-decoration: none">Tim Pengembang</a>
            </p>
            <p>
              <a href="#" class="text-white" style="text-decoration: none">Tanya Jawab</a>
            </p>
          </div>
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
            <h5 class="text-uppercase mb-4 font-weight-bold text-warning">
              Sosial Media
            </h5>
            <a href="https://www.instagram.com/disporaparjombang/">
              <img src="assets/Icon/ig.png" width="40px" style="padding-right: 8px">
            </a>
            <a href="">
              <img src="assets/Icon/gmail.png" width="38px">
            </a>
          </div>
        </div>
      </div>
    </footer>
    <script>
        function validateForm() {
            var email = document.forms["contactForm"]["email"].value;
            var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
            var registeredEmails = ["example1@gmail.com", "example2@yahoo.com", "example3@outlook.com"]; // Daftar email terdaftar (contoh)
            
            if (!emailPattern.test(email)) {
                alert("Email yang dimasukkan tidak valid.");
                return false;
            }
            
            if (!registeredEmails.includes(email)) {
                alert("Email tidak terdaftar.");
                return false;
            }
            
            return true;
        } </script>
</body>
</html>