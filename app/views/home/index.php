<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kelompok 7 Home User</title>

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?=BASEURL?>/js/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?=BASEURL?>/js/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?=BASEURL?>/js/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?=BASEURL?>/js/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?=BASEURL?>/js/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?=BASEURL?>/js/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?=BASEURL?>/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope-fill"></i><a href="#">tapasan2023@gmail.com</a>
        <i class="bi bi-phone-fill phone-icon"></i> 085834568723
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">TAPASAN LAUNDRY</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="nav-link scrollto" href="<?=BASEURL?>/sign_pilih">Sign In</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="500">
      <h1>Welcome to Tapasan Laundry</h1>
      <h2>Apakah Anda memerlukan pick-up atau drop-off dry cleaning?</h2>
      <h2>Anda dapat mengandalkan layanan berkualitas profesional kami!</h2>
      <a href="#about" class="btn-get-started scrollto">Mulai</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left">
            <img src="<?=BASEURL?>/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
            <!-- <h3><b>About Us</b></h3><br><br> -->
            <div class="container">

              <div class="section-title">
                <span>About Us</span>
                <h2>About Us</h2>
              </div>
            </div>
            <p>
              <br>
              Tidak punya waktu mencuci sendiri? Mau laundry tapi takut baju hilang dan hasilnya berantakan? Tenang,
              <b>Tapasan Laundry</b> bisa bantu kamu ngelaundry sambil menikmati waktu istirahatmu dirumah dengan mesin
              cuci kualitas di kelasnya. Semua jenis baju, tas, dan sepatu kesayanganmu, let us handle it! Dijamin
              hasilnya rapi, bersih, plus wangi.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row ">

          <div class="col-6" data-aos="fade-up">
            <div class="box">
              <span>Ngelaundry? <br> Cepat, Bersih, Rapi.</span>
              <h6><br>Tapasan Laundry <br> Cara Cepat Menghemat Waktu dan Tenagamu. </h6>
            </div>
          </div>

          <div class="col-6" data-aos="fade-up" data-aos-delay="150">
            <div class="box">
              <span>The Reason</span>
              <h5><br>5 Alasan Untuknya Pilih Tapasan Laundry</h5>
              <ul>
                <li>Service Berkualitas</li>
                <li>Layanan Terlengkap</li>
                <li>One Privacy</li>
                <li>High Quality Plastic</li>
                <li>Free Tapasan Car Pickup & Delivery</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->


    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <span>Services</span>
          <h2>Services</h2>
          <h3>Kami memberikan anda kepuasan dalam service kami.</h3>
        </div>

        <div class="container1">
          <article style="background-image: url('/public/img/bg.jpg');" class="card">
            <div class="card__body">
              <h2 class="card__title">Express1</h2>
              <p>1 hari selesai <br> Biaya 13 ribu satu kilo
              </p>
            </div>
          </article>
          <article style="background-image: url('/public/img/bg.jpg');" class="card">
            <div class="card__body">
              <h2 class="card__title">Express2</h2>
              <p>
                2 hari selesai <br> Biaya 9 ribu satu kilo
              </p>
            </div>
          </article>
          <article style="background-image: url('/public/img/bg.jpg');" class="card">
            <div class="card__body">
              <h2 class="card__title">Express3</h2>
              <p>
                2 hari selesai <br> Biaya 9 ribu satu kilo
              </p>
            </div>
          </article>
          <article style="background-image: url('<?=BASEURL?>/img/service/tas.png');" class="card">
            <div class="card__body">
              <h2 class="card__title">TAS</h2>
              <p>
                2 hari selesai <br> Biaya 9 ribu satu kilo
              </p>
            </div>
          </article>
          <article style="background-image: url('<?=BASEURL?>/img/service/ambal.png');" class="card">
            <div class="card__body">
              <h2 class="card__title">KARPET</h2>
              <p>
                2 hari selesai<br> Biaya 9 ribu satu kilo
              </p>
            </div>
          </article>
          <article style="background-image: url('<?=BASEURL?>/img/service/badcover.png');" class="card">
            <div class="card__body">
              <h2 class="card__title">BEDCOVER</h2>
              <p>
                2 hari selesai <br> Biaya 9 ribu satu kilo
              </p>
            </div>
          </article>
          <article style="background-image: url('<?=BASEURL?>/img/service/selimut.png');" class="card">
            <div class="card__body">
              <h2 class="card__title">SELIMUT</h2>
              <p>
                2 hari selesai <br> Biaya 9 ribu satu kilo
              </p>
            </div>
          </article>
          <article style="background-image: url('<?=BASEURL?>/img/service/sepatu.png');" class="card">
            <div class="card__body">
              <h2 class="card__title">SEPATU</h2>
              <p>
                2 hari selesai <br> Biaya 9 ribu satu kilo
              </p>
            </div>
          </article>
        </div>

        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
          <div class="container" data-aos="zoom-in">

            <div class="text-center">
              <h3>Kembali ke Halaman Utama</h3>
              <p>Kami tunggu cucian kalian!</p>
              <a class="cta-btn" href="#">Halaman Utama</a>
            </div>

          </div>
        </section><!-- End Cta Section -->


        <!-- ======= Team Section ======= -->
        <section id="team" class="team">
          <div class="container">

            <div class="section-title">
              <span>Team</span>
              <h2>Team</h2>
              <h3>Kelompok 7 Pemrogaman Web 2</h3>
            </div>

            <div class="row">
              <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in">
                <div class="member"><br><br>
                  <img src="<?=BASEURL?>/img/team/team-2.jpg" alt="">
                  <h4>Adelia Erlyn Nor Candra Prasetyana</h4>
                  <span>2110131320010</span>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in">
                <div class="member"><br><br>
                  <img src="<?=BASEURL?>/img/team/team-1.jpg" alt="">
                  <h4>M.Gymnastiar</h4>
                  <span>2110131210004</span>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in">
                <div class="member"><br><br>
                  <img src="<?=BASEURL?>/img/team/team-2.jpg" alt="">
                  <h4>Yuliana</h4>
                  <span>2110131220001</span>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in">
                <div class="member"><br><br>
                  <img src="<?=BASEURL?>/img/team/team-2.jpg" alt="">
                  <h4>Alfika Nurfadia</h4>
                  <span>2110131220016</span>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in">
                <div class="member"><br><br>
                  <img src="<?=BASEURL?>/img/team/team-2.jpg" alt="">
                  <h4>Misna Yanti</h4>
                  <span>1810131120011</span>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in">
                <div class="member"><br><br>
                  <img src="<?=BASEURL?>/img/team/team-1.jpg" alt="">
                  <h4>M. Gilang Ramadhan</h4>
                  <span>2010131310005</span>
                </div>
              </div>

            </div>

          </div>
        </section><!-- End Team Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
          <div class="container">

            <div class="section-title">
              <span>Contact</span>
              <h2>Contact</h2>
              <h3>Jika ingin mencuci, kalian tau kan harus kemana?</h3>
            </div>

            <div class="row" data-aos="fade-up">
              <div class="col-lg-6">
                <div class="info-box mb-4">
                  <i class="bx bx-map"></i>
                  <h3>Alamat</h3>
                  <p>Jl. Brigjen Jalan Hasan Basri, Pangeran, Kec. Banjarmasin Utara, <br>Kota Banjarmasin, Kalimantan
                    Selatan 70123</p>
                </div>
              </div>

              <div class="col-lg-3 col-md-6">
                <div class="info-box  mb-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email</h3>
                  <p>tapasan2023@gmail.com</p>
                </div>
              </div>

              <div class="col-lg-3 col-md-6">
                <div class="info-box  mb-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>No.Telp</h3>
                  <a href="https://wa.me/6287780625677" class="btn-get-wa">0877-8062-5677</a>
                </div>
              </div>

            </div>

          </div>
        </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        <strong><span>Universitas Lambung Mangkurat</span></strong>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="<?=BASEURL?>/js/vendor/aos/aos.js"></script>
  <script src="<?=BASEURL?>/js/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?=BASEURL?>/js/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?=BASEURL?>/js/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?=BASEURL?>/js/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?=BASEURL?>/js/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?=BASEURL?>/js/main.js"></script>

</body>

</html>