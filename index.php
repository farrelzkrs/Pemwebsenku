<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Senku Coffee</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="header">
        <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
            <div class="container-fluid" style="margin: 0px 50px 0px 50px; padding: 15px;">
                <a href="index.php" style="display: flex; align-items: center;">
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
                                <li><a class="dropdown-item" href="#">Settings</a></li>
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

    <section id="home">
        <div class="content">
            <div class="promo">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="margin: 0px 60px 0px 60px;">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="Gambar/News Menu Utama/News1.png" class="d-block w-100" alt="Promo Banner 1">
                            <div class="carousel-caption d-none d-md-block" style="background: rgba(63, 63, 63, 0.3); padding: 10px; border-radius: 5px;">
                                <h5>Menu Baru Spesial Hanya Minggu Ini</h5>
                                <p>Nikmati Bread Coffee-mu untuk menemani waktu luangmu.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="Gambar/News Menu Utama/News2.png" class="d-block w-100" alt="Promo Banner 2">
                            <div class="carousel-caption d-none d-md-block" style="background: rgba(63, 63, 63, 0.3); padding: 10px; border-radius: 5px;">
                                <h5>Promo New Year Sale</h5>
                                <p>Dapatkan Coffee Impian-mu di Promo New Year Sale</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="Gambar/News Menu Utama/News3.png" class="d-block w-100" alt="Promo Banner 3">
                            <div class="carousel-caption d-none d-md-block" style="background: rgba(63, 63, 63, 0.3); padding: 10px; border-radius: 5px;">
                                <h5>Senku Coffee: Tempat Terbaik untuk Bersantai</h5>
                                <p>Nikmatilah harimu dengan seruput kopi dari senku coffee.</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section id="menu" class="bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Menu Populer</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="https://imagedelivery.net/2MtOYVTKaiU0CCt-BLmtWw/68a92d7c-b3b5-464c-606e-7c5bdf476400/w=2560" class="card-img-top menu-item" alt="Americano"> <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Americano Senku</h5>
                            <p class="card-text">Pahit yang elegan, temani harimu dengan kesegaran dan fokus.</p>
                            <p class="card-text mt-auto"><strong>Rp 14.000</strong></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="https://asset.kompas.com/crops/C8Mo8F0gQE6PyXXec9oLxarbh1s=/34x24:475x318/1200x800/data/photo/2021/08/05/610b6ce6b3440.jpg" class="card-img-top menu-item" alt="Cafe Latte"> <div class="card-body d-flex flex-column">
                            <h5 class="card-title">ICE Moccalatte Senku</h5>
                            <p class="card-text">Perpaduan kopi, cokelat, dan susu yang creamy nikmat dingin yang memanjakan.</p>
                            <p class="card-text mt-auto"><strong>Rp 26.000</strong></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="https://d1vbn70lmn1nqe.cloudfront.net/prod/wp-content/uploads/2023/08/08034327/Mudah-Dibuat-di-Rumah-Ini-Resep-Pancake-Teflon-yang-Lembut-dan-Lezat.jpg.webp" class="card-img-top menu-item" alt="Croissant"> <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Pancake Senku</h5>
                            <p class="card-text">Lembut, manis, dan fluffy, sarapan atau camilan yang selalu juara!</p>
                            <p class="card-text mt-auto"><strong>Rp 21.000</strong></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="Menu.css" class="btn btn-outline-success w-25">Lihat Menu Lengkap</a>
            </div>
        </div>
    </section>

    <section id="ulasan">
        <div class="container">
            <h2 class="text-center mb-5">Apa Kata Mereka?</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <blockquote class="blockquote mb-0">
                                <p>"Kopinya mantap, tempatnya nyaman buat kerja!"</p>
                                <footer class="blockquote-footer">Andi <cite title="Source Title">via Google Review</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <blockquote class="blockquote mb-0">
                                <p>"Latte art nya keren, rasanya juga pas. Recommended!"</p>
                                <footer class="blockquote-footer">Citra <cite title="Source Title">via Instagram</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <blockquote class="blockquote mb-0">
                                <p>"Harga terjangkau, pilihan menunya banyak. Suka banget sama croissantnya."</p>
                                <footer class="blockquote-footer">Budi <cite title="Source Title">Datang Langsung</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="ulasan.php" class="btn btn-outline-success w-50">Lihat Ulasan Lain..</a>
            </div>
        </div>
    </section>

    <section id="about" class="bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Tentang Kami</h2>
            <div class="row align-items-center">
                <div class="col-md-6 mb-4">
                    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                                <img src="https://asset.kompas.com/crops/s6tT7L5RZpNCJp-WiMhjx6WfNtc=/0x0:1000x667/1200x800/data/photo/2023/06/11/648558734e431.jpeg"
                                    class="d-block w-100" style="height: 308px;" alt="...">
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="https://static.promediateknologi.id/crop/0x0:0x0/0x0/webp/photo/p2/238/2024/04/27/RT-CAFE-N-CUT-15-2746554560.jpeg"
                                    class="d-block w-100" style="height: 308px;" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="https://nibble-images.b-cdn.net/nibble/original_images/cafe-view-danau-di-jakarta-00.jpg"
                                    class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <!-- <img src="Gambar/about-us.jpg" class="img-fluid rounded" alt="Tentang Senku Coffee"> -->
                </div>
                <div class="col-md-6" style="text-align: justify;">
                    <h3>Selamat Datang di Senku Coffee</h3>
                    <p>Senku Coffee lahir dari kecintaan kami terhadap kopi berkualitas dan keinginan untuk menciptakan
                        ruang yang nyaman bagi komunitas.</p>
                    <a class="btn btn-outline-success w-25" href="informasi.php">Read More..</a>
                </div>
            </div>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
        crossorigin="anonymous"></script>

    <script>
        const sections = document.querySelectorAll('section');
        const navLi = document.querySelectorAll('.navbar-nav .nav-item .nav-link');

        window.addEventListener('scroll', ()=> {
            let current = '';
            sections.forEach( section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if (pageYOffset >= (sectionTop - sectionHeight / 3)) {
                    current = section.getAttribute('id');
                }
            })

            navLi.forEach( a => {
                a.classList.remove('active');
                if (a.getAttribute('href') == #${current}) {
                    a.classList.add('active');
                }
                if (!current && a.getAttribute('href') === '#home') {
                    a.classList.add('active');
                }
            })
        });
    </script>

</body>
</html>
