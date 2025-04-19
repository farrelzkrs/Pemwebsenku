/* Hendrico Edhent Surya Pratama (23081010070) */

<?php section_start(); ?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <title>Program Ulasan Terhubung</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="ulasan.css">
  <style>
        body {
            padding-top: 90px;
        }

        section {
            padding: 60px 0;
            min-height: 400px;
        }

        .carousel-item img {
            max-height: 500px;
            object-fit: cover;
        }

        .menu-item img {
            height: 200px;
            object-fit: cover;
        }

        footer {
            background-color: #343a40;
            color: white;
            padding: 30px 0;
        }

        .navbar-custom {
            background-color: burlywood !important;
        }

        .navbar-brand,
        .nav-link {
            color: rgb(0, 100, 0) !important;
        }

        .nav-link.active {
            font-weight: bold;
        }

        .btn-outline-success {
            color: rgb(0, 100, 0);
            border-color: rgb(0, 100, 0);
            margin-left: 5px;
        }

        .btn-outline-success:hover {
            background-color: rgb(0, 100, 0);
            color: white;
        }

        .btn-success {
            background-color: rgb(0, 100, 0);
            border-color: rgb(0, 100, 0);
            color: white;
            margin-left: 5px;
        }

        .btn-success:hover {
            background-color: darkgreen;
            border-color: darkgreen;
        }

        .btn-outline-danger {
            margin-left: 5px;
        }
    </style>
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
  <!-- Ulasan Kritikus -->
  <section class="kritikus-section" style="margin-top: 120px;">
    <div class="carousel-bg" style="object-fit: cover; width: 105%;">
      <img src="bgsenku.png" alt="Background 1">
      <img src="bgsenku.png" alt="Background 2">
      <img src="bgsenku.png" alt="Background 3">
    </div>
    <div class="container kritikus-content">
      <h1 class="text-center mb-4" data-aos="fade-up">ULASAN KRITIKUS</h1>
      <div id="carouselKritikus" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active text-center" data-aos="fade-right">
            <img src="naufal.jpeg" class="kritikus-img" alt="Kritikus 1">
            <h5>Ardiansyah</h5>
            <p>"Pelayanan yang sangat memuaskan, suasana nyaman!"</p>
          </div>
          <div class="carousel-item text-center" data-aos="fade-up">
            <img src="ler.jpeg" class="kritikus-img" alt="Kritikus 2">
            <h5>Zikri</h5>
            <p>"Menu beragam dan cita rasa konsisten, mantap!"</p>
          </div>
          <div class="carousel-item text-center" data-aos="fade-left">
            <img src="edhent ganteng.jpeg" class="kritikus-img" alt="Kritikus 3">
            <h5>Pratama</h5>
            <p>"Kebersihan dan keramahan staf sangat luar biasa."</p>
          </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselKritikus" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselKritikus" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </section>

  <!-- Judul -->
  <section class="judul-section">
    <h2 data-aos="zoom-in">BERSAMA PELANGGAN, KAMI BANGKIT<br>
        TERIMAKASIH CUSTOMER TERCINTA, MWUACH</h2>
  </section>

  <!-- Ulasan Pengguna -->
  <section class="ulasan-container">
    <div class="container" id="daftarUlasan"></div>
  </section>

  <!-- Form Ulasan -->
  <section class="form-section">
    <div class="container">
      <h3 class="mb-4">Berikan Ulasan Anda</h3>
      <form id="formUlasan">
        <div class="mb-3">
          <label class="form-label">Nama</label>
          <input type="text" class="form-control" id="nama" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" class="form-control" id="email" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Pesan Ulasan</label>
          <textarea class="form-control" id="pesan" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Kirim Ulasan</button>
      </form>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();

    const form = document.getElementById("formUlasan");
    const daftarUlasan = document.getElementById("daftarUlasan");

    const dataUlasan = [];

    form.addEventListener("submit", function (e) {
      e.preventDefault();

      const nama = document.getElementById("nama").value;
      const email = document.getElementById("email").value;
      const pesan = document.getElementById("pesan").value;

      dataUlasan.push({ nama, email, pesan });
      renderUlasan();
      form.reset();
    });

    function renderUlasan() {
      daftarUlasan.innerHTML = "";

      dataUlasan.forEach((ulasan, i) => {
        const ulasanDiv = document.createElement("div");
        ulasanDiv.classList.add("ulasan-item");
        ulasanDiv.setAttribute("data-aos", "fade-up");
        ulasanDiv.innerHTML = `
          <strong>${ulasan.nama}</strong><br>
          <small>${ulasan.email}</small>
          <p class="mt-2">${ulasan.pesan}</p>
        `;
        daftarUlasan.appendChild(ulasanDiv);
      });
    }
  </script>
</body>

</html>
