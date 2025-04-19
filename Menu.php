<?php session_start(); ?>
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
    <title>Menu</title>
    <link rel="stylesheet" href="Menu.css">
</head>

<body>
    <div id="header">
        <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
            <div class="container-fluid" style="margin: 0px 50px 0px 50px; padding: 15px;">
                <a href="" style="display: flex; align-items: center;">
                    <img src="Gambar/Senku kafe.png" alt="Logo Senku Coffee" class="navbar-logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto me-2 mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Menu.html">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="ulasan.html">Ulasan</a>
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

        <section id="poster" class="position-relative text-center">
        <div class="content">
            <img src="https://asset.mediaindonesia.com/news/2023/09/8a5e048b398c2ce7e0cf87d0f8569b33.jpeg" 
                alt="Iklan Senku Coffee" 
                class="img-fluid w-100" 
                style="max-height: 400px; object-fit: cover;">
            <div class="position-absolute top-50 start-50 translate-middle text-white" style="margin-top: 60px;">
                <h1>Daftar Menu Senku Coffee</h1>
                <h3>Get your coffee now!</h3>
            </div>
        </section>
        <section id="iklan">
            <div class="row container-fluid">
                <h1 style="margin-top: 20px; margin-left: 50px;">Promo</h1>
                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner" style="margin-left: 70px;">
                        <!-- Item 1 -->
                        <div class="carousel-item active" data-bs-interval="10000">
                            <div class="row g-0">
                                <!-- Kolom Gambar -->
                                <div class="col-md-4 d-flex align-items-center justify-content-center">
                                    <img src="Gambar/Promo Menu/Promo1.png" class="d-block w-100 bg-light" alt="Promo 1">
                                </div>
                                <!-- Kolom Penjelasan -->
                                <div class="col-md-7 d-flex align-items-center bg-light">
                                    <div class="p-3">
                                        <h2>NEW MENU - Mocca Cheesse Latte</h2>
                                        <h4>Minuman Teman Belajar Di Waktu Ujian</h4>
                                        <p>Dapatkan segera Mocca Cheese Latte mu!, minuman Teman Belajar Di Waktu Ujian, jadi kamu jangan sampai lewati minuman ini yaa.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Item 2 -->
                        <div class="carousel-item" data-bs-interval="2000">
                            <div class="row g-0">
                                <!-- Kolom Gambar -->
                                <div class="col-md-4 d-flex align-items-center justify-content-center">
                                    <img src="Gambar/Promo Menu/Promo2.png" class="d-block w-100 bg-light" alt="Promo 2">
                                </div>
                                <!-- Kolom Penjelasan -->
                                <div class="col-md-7 d-flex align-items-center bg-light">
                                    <div class="p-3">
                                        <h2>More Comfort Coffee</h2>
                                        <h4>Introducing Promo ICE Milk Coffee Senku</h4>
                                        <p>Dapatkan ICE Milk Coffee Senku anda, cocok diminum di cuaca panasnya kota, rasanya pas hati senang dahaga pun hilang.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Item 3 -->
                        <div class="carousel-item">
                            <div class="row g-0">
                                <!-- Kolom Gambar -->
                                <div class="col-md-4 d-flex align-items-center justify-content-center">
                                    <img src="Gambar/Promo Menu/Promo3.png" class="d-block w-100 bg-light" alt="Promo 3">
                                </div>
                                <!-- Kolom Penjelasan -->
                                <div class="col-md-7 d-flex align-items-center bg-light">
                                    <div class="p-3">
                                        <h2>DISCOUNT - Klepon Senku</h2>
                                        <h4>Spesial Klepon Senku sampai tanggal 16 April 2025</h4>
                                        <p>Dapatkan promo spesial Klepon Senku dengan harga RP. 14.000, makanan khas indonesia yang kenyal luarnya manis dalamnya.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Item 4 -->
                        <div class="carousel-item">
                            <div class="row g-0">
                                <!-- Kolom Gambar -->
                                <div class="col-md-4 d-flex align-items-center justify-content-center">
                                    <img src="Gambar/Promo Menu/Promo4.png" class="d-block w-100 bg-light" alt="Promo 3">
                                </div>
                                <!-- Kolom Penjelasan -->
                                <div class="col-md-7 d-flex align-items-center bg-light">
                                    <div class="p-3">
                                        <h2>DISCOUNT - Pancake Senku</h2>
                                        <h4>Spesial promo 20% untuk pembelian 50 pertama</h4>
                                        <p>Dapatkan Pancake Senku dengan discount 20%, nikmati cemilan pancake senku yang manis dan bikin hati riang.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Item 5 -->
                        <div class="carousel-item">
                            <div class="row g-0">
                                <!-- Kolom Gambar -->
                                <div class="col-md-4 d-flex align-items-center justify-content-center">
                                    <img src="Gambar/Promo Menu/Promo5.png" class="d-block w-100 bg-light" alt="Promo 3">
                                </div>
                                <!-- Kolom Penjelasan -->
                                <div class="col-md-7 d-flex align-items-center bg-light">
                                    <div class="p-3">
                                        <h2>DISCOUNT - Klepon Senku</h2>
                                        <h4>Spesial Klepon Senku sampai tanggal 16 April 2025</h4>
                                        <p>Dapatkan promo spesial Klepon Senku dengan harga RP. 14.000, makanan khas indonesia yang kenyal
                                            luarnya manis dalamnya.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Tombol Navigasi -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </section>
        <section id="menuu">
            <div class="row container-fluid">
                <div class="col-12 p-5 mb-2" style="margin-left: 13px;">
                    <!-- artikel -->
                    <h1 style="margin-top: 20px;">Minuman Coffee</h1>
                    <div class="row row-cols-1 row-cols-md-3 g-4" style="margin-top: 20px;">
            
                        <div class="col">
                            <div class="card h-100">
                                <img src="https://tchibo.us/cdn/shop/articles/cappucino.jpg?v=1690196460&width=1440" style="height: 243px;"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Cappucino Senku</h5>
                                    <p class="card-text">Minuman kopi klasik Italia yang terdiri dari espresso, susu kukus (steamed
                                        milk), dan busa susu (milk foam) dalam
                                        proporsi yang seimbang.</p>
                                </div>
                                <div class="card-footer">
                                    <big class="text-body-secondary">Harga Rp. 16.000</big>
                                </div>
                            </div>
                        </div>
            
                        <div class="col">
                            <div class="card h-100">
                                <img src="https://imagedelivery.net/2MtOYVTKaiU0CCt-BLmtWw/68a92d7c-b3b5-464c-606e-7c5bdf476400/w=2560"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Americano Senku</h5>
                                    <p class="card-text">Espresso yang diencerkan dengan air panas. Rasanya lebih mirip kopi hitam
                                        biasa, namun tetap mempertahankan karakter
                                        rasa dari espresso.</p>
                                </div>
                                <div class="card-footer">
                                    <big class="text-body-secondary">Harga Rp. 14.000</big>
                                </div>
                            </div>
                        </div>
            
                        <div class="col">
                            <div class="card h-100">
                                <img src="https://asset.kompas.com/crops/C8Mo8F0gQE6PyXXec9oLxarbh1s=/34x24:475x318/1200x800/data/photo/2021/08/05/610b6ce6b3440.jpg"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">ICE Moccalatte Senku</h5>
                                    <p class="card-text">Kombinasi antara espresso, susu, sirup cokelat, dan es batu. Biasanya
                                        diberi topping whipped cream atau taburan cokelat
                                        bubuk. Rasanya manis, creamy, dan menyegarkan dengan sentuhan cokelat yang kuat.</p>
                                </div>
                                <div class="card-footer">
                                    <big class="text-body-secondary">Harga Rp. 26.000</big>
                                </div>
                            </div>
                        </div>
            
                        <div class="col">
                            <div class="card h-100">
                                <img src="https://static.republika.co.id/uploads/images/inpicture_slide/seni-di-atas-kopi-alias-latte-art-_160914181605-378.jpg"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Chocolatte Senku</h5>
                                    <p class="card-text">Minuman hangat yang dibuat dari cokelat bubuk atau lelehan cokelat yang
                                        dicampur dengan susu panas. Rasanya kaya dan
                                        manis, seringkali ditambahkan topping seperti whipped cream atau marshmallow.</p>
                                </div>
                                <div class="card-footer">
                                    <big class="text-body-secondary">Harga Rp. 18.000</big>
                                </div>
                            </div>
                        </div>
            
                        <div class="col">
                            <div class="card h-100">
                                <img src="https://assets.unileversolutions.com/v1/2005891.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">ICE White Latte Senku</h5>
                                    <p class="card-text">Versi dingin dari white latte. Terdiri dari espresso, susu dingin, dan es
                                        batu. Disebut "white" karena tidak ada
                                        tambahan sirup atau perasa lain, sehingga rasa kopi dan susu menjadi dominan.</p>
                                </div>
                                <div class="card-footer">
                                    <big class="text-body-secondary">Harga Rp. 23.000</big>
                                </div>
                            </div>
                        </div>
            
                        <div class="col">
                            <div class="card h-100">
                                <img src="https://www.putrafarmayogyakarta.co.id/wp-content/uploads/2021/05/Toko-Kopi-Damar5-825x510-1.jpeg" class="card-img-top" style="height: 243px;" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">ICE Milk Coffee Senku</h5>
                                    <p class="card-text">Minuman sederhana yang terdiri dari kopi (biasanya espresso atau kopi yang
                                        diseduh lebih pekat), susu dingin, dan es
                                        batu. Rasanya lebih ringan dan menyegarkan dibandingkan latte karena proporsi susunya lebih
                                        sedikit.</p>
                                </div>
                                <div class="card-footer">
                                    <big class="text-body-secondary">Harga Rp. 19.000</big>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h1 style="margin-top: 50px;">Makanan</h1>
                    <div class="row row-cols-1 row-cols-md-3 g-4" style="margin-top: 20px;">
            
                        <div class="col">
                            <div class="card h-100">
                                <img src="https://asset.kompas.com/crops/QzJ7mkzUuw8Xo1yZf0gpBGxUuAI=/15x9:895x596/1200x800/data/photo/2023/02/01/63d9fbce5a2d2.jpg"
                                    class="card-img-top" style="height: 243px;" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Croissant Senku</h5>
                                    <p class="card-text">Lembut dan renyah di luar, lumer dan manis di dalam. Croissant berlapis-lapis dengan tekstur yang buttery, dipanggang
                                    sempurna dan diisi dengan cokelat leleh yang kaya rasa. Setiap gigitan menghadirkan perpaduan nikmat antara flaky pastry
                                    dan cokelat hangat yang memanjakan lidah. Cocok dinikmati bersama secangkir kopi favoritmu!</p>
                                </div>
                                <div class="card-footer">
                                    <big class="text-body-secondary">Harga Rp. 23.000</big>
                                </div>
                            </div>
                        </div>
            
                        <div class="col">
                            <div class="card h-100">
                                <img src="https://d1vbn70lmn1nqe.cloudfront.net/prod/wp-content/uploads/2023/08/08034327/Mudah-Dibuat-di-Rumah-Ini-Resep-Pancake-Teflon-yang-Lembut-dan-Lezat.jpg.webp"
                                    class="card-img-top" style="height: 243px;" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Pancake Senku</h5>
                                    <p class="card-text">Pancake lembut dan fluffy yang disiram madu murni—manis alami yang meleleh di mulut. Setiap lapisannya memberikan
                                    kenyamanan hangat, cocok dinikmati sebagai teman pagi atau camilan sore yang menenangkan.</p>
                                </div>
                                <div class="card-footer">
                                    <big class="text-body-secondary">Harga Rp. 21.000</big>
                                </div>
                            </div>
                        </div>
            
                        <div class="col">
                            <div class="card h-100">
                                <img src="https://wiratech.co.id/wp-content/uploads/2022/03/Klepon.jpg" class="card-img-top"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Klepon Senku</h5>
                                    <p class="card-text">Camilan tradisional yang meledak manis di mulut! Bola ketan kenyal berisi gula merah cair, dibalut parutan kelapa segar.
                                    Satu gigitan, dan sensasi manis gurihnya langsung bikin nostalgia.</p>
                                </div>
                                <div class="card-footer">
                                    <big class="text-body-secondary">Harga Rp. 19.000</big>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <div id="footer">
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
    </div>
</body>

</html>
