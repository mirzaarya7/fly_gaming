<?php
$noPreloader = true;
?>

<!DOCTYPE html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Fly Gaming Store || @yield('title', 'Cek Win Rate')</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/logo/logo.png') }}"/>
    <!-- Place favicon.ico in the root directory -->

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-5.0.0-beta2.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/LineIcons.2.0.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/tiny-slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet">
  </head>
  <body>
      <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1673821464465525"
     crossorigin="anonymous"></script>
    <link
  href="https://cdn.lineicons.com/4.0/lineicons.css"
  rel="stylesheet"
/>

    <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

    <!-- ========================= preloader start ========================= -->
    <?php if(!isset($noPreloader)) { ?>
    <div class="preloader">
      <div class="loader">
        <div class="spinner">
          <div class="spinner-container">
            <div class="spinner-rotator">
              <div class="spinner-left">
                <div class="spinner-circle"></div>
              </div>
              <div class="spinner-right">
                <div class="spinner-circle"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- preloader end -->
    <?php } ?>
    

    <!-- ========================= header start ========================= -->
    <header class="header">
      <div class="navbar-area">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="index.php">
                  <img src="{{ asset('assets/img/logo/logo2.png') }}" alt="Logo" width="200px" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="toggler-icon"></span>
                  <span class="toggler-icon"></span>
                  <span class="toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
  <ul id="nav" class="navbar-nav ms-auto">

    <li class="nav-item">
      <a class="page-scroll" href="index.php">Home</a>
    </li>

    <!-- Produk dengan Submenu -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="produkDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Produk
      </a>
      <ul class="dropdown-menu" aria-labelledby="produkDropdown">
        <li>
          <a class="dropdown-item" href="perbaikan.php">
            <i class="lni lni-bolt"></i> Top Up Game
          </a>
        </li>
        <li>
          <a class="dropdown-item" href="perbaikan.php">
            <i class="lni lni-wallet"></i> PPOB
          </a>
        </li>
        <li>
          <a class="dropdown-item" href="game/">
            <i class="lni lni-display"></i> Download Game PC
          </a>
        </li>
        <li>
          <a class="dropdown-item" href="game/">
            <i class="lni lni-playstation"></i> Download Game PS2
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle page-scroll active" href="#" id="produkDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    Kalkulator MLBB
  </a>
  <ul class="dropdown-menu" aria-labelledby="produkDropdown">
    <li>
      <a class="dropdown-item" href="magicwheel.php">
        <i class="lni lni-diamond"></i> Hitung Magic Wheel
      </a>
    </li>
    <li>
      <a class="dropdown-item" href="zodiak.php">
        <i class="lni lni-star"></i> Hitung Zodiak
      </a>
    </li>
    <li>
      <a class="dropdown-item" href="wr.php">
        <i class="lni lni-stats-up"></i> Hitung WR
      </a>
    </li>
  </ul>
</li>


    <li class="nav-item">
      <a class="page-scroll" href="promo.php">Promo</a>
    </li>

    <li class="nav-item">
      <a class="page-scroll" href="kontak.php">Kontak</a>
    </li>

    <!-- Login -->
    <li class="nav-item">
      <a href="perbaikan.php" class="btn-login">
        <i class="lni lni-user"></i>
        <span>Login</span>
      </a>
    </li>

  </ul>
</div>

                <!-- navbar collapse -->
              </nav>
              <!-- navbar -->
            </div>
          </div>
          <!-- row -->
        </div>
        <!-- container -->
      </div>
      <!-- navbar area -->
    </header>
    <!-- ========================= header end ========================= -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<div class="wr-wrapper">
  <div class="wr-card text-center">
  <i class="lni lni-bar-chart" style="font-size:60px; color:#0d6efd;"></i>
  <h2 class="mt-3">Hitung Target Win Rate MLBB</h2>
  <p>Hitung berapa match yang harus dimainkan untuk mencapai WR impian</p>

  <div class="mb-3 text-start">
    <label>Total Match Saat Ini</label>
    <input type="number" id="match" class="form-control" placeholder="Contoh: 700">
  </div>

  <div class="mb-3 text-start">
    <label>Win Rate Saat Ini (%)</label>
    <input type="number" id="wr_now" class="form-control" placeholder="Contoh: 70">
  </div>

  <div class="mb-3 text-start">
    <label>Target Win Rate (%)</label>
    <input type="number" id="wr_target" class="form-control" placeholder="Contoh: 75">
  </div>

  <button class="btn btn-primary w-100" onclick="hitungWR()">
    <i class="lni lni-calculator"></i> Hitung
  </button>
</div>
</div>



<script>
function hitungWR() {
  let match = parseInt(document.getElementById("match").value);
  let wrNow = parseFloat(document.getElementById("wr_now").value);
  let wrTarget = parseFloat(document.getElementById("wr_target").value);

  if (
    isNaN(match) || isNaN(wrNow) || isNaN(wrTarget) ||
    match <= 0 || wrNow <= 0 || wrTarget <= 0 ||
    wrTarget <= wrNow || wrTarget >= 100
  ) {
    Swal.fire({
      icon: "error",
      title: "Input Tidak Valid",
      text: "Pastikan semua data diisi dengan benar",
      confirmButtonColor: "#0d6efd"
    });
    return;
  }

  let win = (wrNow / 100) * match;
  let target = wrTarget / 100;

  let x = Math.ceil((target * match - win) / (1 - target));

  Swal.fire({
    icon: "success",
    title: "Hasil Perhitungan",
    html: `
      <b>Total Match Saat Ini:</b> ${match}<br>
      <b>WR Sekarang:</b> ${wrNow}%<br>
      <b>Target WR:</b> ${wrTarget}%<br><br>
      Kamu perlu <b>${x} kemenangan berturut-turut</b><br>
      untuk mencapai <b>${wrTarget}% WR</b>
    `,
    confirmButtonText: "Siap Push Rank 💪",
    confirmButtonColor: "#0d6efd"
  });
}
</script>



</body>
</html>