<?php
session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <title>informasi</title>
    <link rel="stylesheet" href="istyle.css">
</head>

<body>
    <div id="header">
        <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
            <div class="container-fluid" style="margin: 0px 50px 0px 50px; padding: 15px;">
                <a href="" style="display: flex; align-items: center;">
                    <img src="Gambar/Senku kafe.png" alt="Logo Senku Coffee" class="navbar-logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto me-2 mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Menu.php">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="ulasan.php">Ulasan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="informasi.php">About Us</a>
                        </li>
                    </ul>
                    <div class="d-flex align-items-center">
                        <?php if (isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] === true): ?>
                        <div class="nav-item dropdown" style="color: rgb(70, 47, 5);">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <?php echo htmlspecialchars($_SESSION['username']); ?>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Account</a></li>
                                <li><a class="dropdown-item" href="#about">Settings</a></li>
                                <li><a href="logout.php" class="btn text-danger">Logout</a></li>
                            </ul>
                        </div>
                        <?php else: ?>
                        <a href="login.php" class="btn btn-dark me-2">Masuk</a>
                        <a href="daftar.php" class="btn btn-light">Daftar</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <section id="about" class="bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Tentang Kami</h2>
            <div class="row align-items-center">
                <div class="col-md-6 mb-4">
                    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                                <img src="https://asset.kompas.com/crops/s6tT7L5RZpNCJp-WiMhjx6WfNtc=/0x0:1000x667/1200x800/data/photo/2023/06/11/648558734e431.jpeg" class="d-block w-100" style="height: 308px;" alt="...">
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="https://static.promediateknologi.id/crop/0x0:0x0/0x0/webp/photo/p2/238/2024/04/27/RT-CAFE-N-CUT-15-2746554560.jpeg" class="d-block w-100" style="height: 308px;" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="https://nibble-images.b-cdn.net/nibble/original_images/cafe-view-danau-di-jakarta-00.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <!-- <img src="Gambar/about-us.jpg" class="img-fluid rounded" alt="Tentang Senku Coffee"> -->
                </div>
                <div class="col-md-6">
                    <h3>Selamat Datang di Senku Coffee</h3>
                    <p>Senku Coffee lahir dari kecintaan kami terhadap kopi berkualitas dan keinginan untuk menciptakan
                        ruang yang nyaman bagi komunitas.</p>
                    <p>Kami percaya bahwa secangkir kopi yang nikmat dapat mencerahkan hari Anda. Oleh karena itu, kami
                        hanya menggunakan biji kopi pilihan terbaik dan menyajikannya dengan sepenuh hati oleh barista
                        kami yang berpengalaman.</p>
                    <p>Lebih dari sekadar kedai kopi, Senku Coffee adalah tempat Anda bertemu teman, bekerja, atau
                        sekadar menikmati waktu santai. Datang dan rasakan pengalaman ngopi yang berbeda!</p>
                </div>
            </div>
        </div>
    </section>

    <section id="kualitas" class="bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Kenapa Memilih Senku Coffee?</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center" style="background-color: burlywood;">
                        <div class="card-body d-flex flex-column align-items-center">
                            <i class="bi bi-house-door-fill fs-1 mb-3"></i> <!-- Ikon untuk Tempat Nyaman -->
                            <h5 class="card-title">Tempat Nyaman</h5>
                            <p class="card-text">Desain menarik, suasana cozy, dan fasilitas lengkap membuat pelanggan betah.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center" style="background-color: burlywood;">
                        <div class="card-body d-flex flex-column align-items-center">
                            <i class="bi bi-emoji-smile-fill fs-1 mb-3"></i> <!-- Ikon untuk Pelayanan Ramah -->
                            <h5 class="card-title">Pelayanan Ramah</h5>
                            <p class="card-text">Staf sopan, sigap, berpengetahuan, dan menciptakan pengalaman positif.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center" style="background-color: burlywood;">
                        <div class="card-body d-flex flex-column align-items-center">
                            <i class="bi bi-wifi fs-1 mb-3"></i> <!-- Ikon untuk Wi-Fi Kencang -->
                            <h5 class="card-title">Wi-Fi Kencang</h5>
                            <p class="card-text">Koneksi internet stabil dan cepat mendukung berbagai kebutuhan pelanggan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="kontak">
        <div class="container">
            <h2 class="text-center mb-5">Hubungi Kami</h2>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.179561534431!2d112.78574977476117!3d-7.333721192674722!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fab87edcad15%3A0xb26589947991eea1!2sUniversitas%20Pembangunan%20Nasional%20%22Veteran%22%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1745070842463!5m2!1sid!2sid"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade" class="w-100 rounded-5"></iframe>
                    <h4>Informasi Kontak</h4>
                    <p><i class="bi bi-geo-alt-fill"></i> Jl. Kopi Nikmat No. 10, Jakarta, Indonesia</p>
                    <p><i class="bi bi-telephone-fill"></i> (021) 123-4567</p>
                    <p><i class="bi bi-envelope-fill"></i> info@senkucoffee.com</p>
                    <p><i class="bi bi-clock-fill"></i> Buka Setiap Hari: 08:00 - 22:00 WIB</p>
                    <h4 class="mt-4">Ikuti Kami</h4>
                    <a href="#" class="text-dark me-2 fs-4"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="text-dark me-2 fs-4"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="text-dark fs-4"><i class="bi bi-twitter-x"></i></a>
                </div>
    </section>
    
    <footer class="text-center">
        <div class="container">
            <p>&copy; 2025 Senku Coffee. All Rights Reserved.</p>
            <p>
                <a href="#home" class="text-white-50 mx-2">Home</a> |
                <a href="#menu" class="text-white-50 mx-2">Menu</a> |
                <a href="#about" class="text-white-50 mx-2">About Us</a> |
                <a href="#kontak" class="text-white-50 mx-2">Kontak</a>
            </p>
        </div>
    </footer>
</body>
</html>
