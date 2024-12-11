<style>
    .nav-link.active {
        color: #45832d !important;
        font-weight: bold;
    }
</style>
<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top shadow">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="assets/Icon/logo-JJ.png" width="80px" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link <?php echo ($activePage == 'beranda') ? 'active' : ''; ?>" aria-current="page" href="home.php">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($activePage == 'tentang') ? 'active' : ''; ?>" href="tentangkami.php">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($activePage == 'wisata') ? 'active' : ''; ?>" href="wisata.php">Wisata</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($activePage == 'kuliner') ? 'active' : ''; ?>" href="kuliner.php">Kuliner</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($activePage == 'panduan') ? 'active' : ''; ?>" href="panduan.php">Panduan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($activePage == 'kontak') ? 'active' : ''; ?>" href="kontak.php">Kontak</a>
                </li>
                <li>
                    <button class="btn btn-success bt-sm" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="loginForm" method="post" action="login.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="loginEmail">Username</label>
                        <input type="text" class="form-control" id="loginEmail" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="loginPassword">Password</label>
                        <input type="password" class="form-control" id="loginPassword" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Login</button>
                </form>
                <p class="mt-2">Belum memiliki akun? <a href="registrasi.php" data-bs-toggle="modal" data-bs-target="#registerModal">Daftar</a></p>
            </div>
        </div>
    </div>
</div>

<!-- Register Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="registerModalLabel">Register</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="registerForm" method="post" action="registrasi.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="registerName">Name</label>
                        <input type="text" class="form-control" id="registerName" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="registerUsername">Username</label>
                        <input type="text" class="form-control" id="registerUsername" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="registerEmail">Email address</label>
                        <input type="email" class="form-control" id="registerEmail" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="registerPassword">Password</label>
                        <input type="password" class="form-control" id="registerPassword" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div id="carouselExampleCaptions" class="carousel slide">
      <div class="carousel-indicators">
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide-to="0"
          class="active"
          aria-current="true"
          aria-label="Slide 1"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide-to="1"
          aria-label="Slide 2"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide-to="2"
          aria-label="Slide 3"
        ></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img
            src="assets/Wisata/AirTerjunTretes.webp"
            class="d-block w-100"
            alt="..."
          />
          <div class="carousel-caption">
            <h5>JELAJAH JOMBANG</h5>
            <p>Jombang Beriman : Kota bersih dengan pesona istimewa</p>
            <p>
              <a href="login.php" class="btn btn-outline-success mt-3">Get Started</a>
            </p>
          </div>
        </div>
        <div class="carousel-item">
          <img
            src="assets/Wisata/KedungCinet.jpg"
            class="d-block w-100"
            alt="..."
          />
          <div class="carousel-caption">
            <h5>JELAJAH JOMBANG</h5>
            <p>Jombang Beriman : Eksplor keindahan di setiap sudut kota</p>
            <p>
              <a href="login.php" class="btn btn-outline-success mt-3">Get Started</a>
            </p>
          </div>
        </div>
        <div class="carousel-item">
          <img
            src="assets/Wisata/CandiRimbi.jpg"
            class="d-block w-100"
            alt="..."
          />
          <div class="carousel-caption">
            <h5>JELAJAH JOMBANG</h5>
            <p>Jombang Beriman : Suasana yang nyaman dan ramah</p>
            <p>
              <a href="login.php" class="btn btn-outline-success mt-3">Get Started</a>
            </p>
          </div>
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>