<style>
    .nav-link.active {
        color: #45832d !important;
        font-weight: bold;
    }
</style>
<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
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
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://d17ivq9b7rppb3.cloudfront.net/small/avatar/pp.jpg" alt="Avatar" class="rounded-circle" width="20px">
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item <?php echo ($activePage == 'profile') ? 'active' : ''; ?>" href="profile.php">Profil</a></li>
                        <li><a class="dropdown-item <?php echo ($activePage == 'wishlist') ? 'active' : ''; ?>" href="wlwisata.php">Wishlist</a></li>
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- ini carousel itu kaya header yg bagian foto slide-->
<div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="assets/Wisata/AirTerjunTretes.webp" class="d-block w-100" alt="..." />
            <div class="carousel-caption">
                <h5>JELAJAH JOMBANG</h5>
                <p>Jombang Beriman : Kota bersih dengan pesona istimewa</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="assets/Wisata/KedungCinet.jpg" class="d-block w-100" alt="..." />
            <div class="carousel-caption">
                <h5>JELAJAH JOMBANG</h5>
                <p>Jombang Beriman : Eksplor keindahan di setiap sudut kota</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="assets/Wisata/CandiRimbi.jpg" class="d-block w-100" alt="..." />
            <div class="carousel-caption">
                <h5>JELAJAH JOMBANG</h5>
                <p>Jombang Beriman : Suasana yang nyaman dan ramah</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
