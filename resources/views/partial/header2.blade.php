<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1673821464465525"
    crossorigin="anonymous"></script>
<link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />

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
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                            <ul id="nav" class="navbar-nav ms-auto">

                                <li class="nav-item">
                                    <a class="page-scroll" href="{{ route('home') }}">Home</a>
                                </li>

                                <!-- Produk dengan Submenu -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="produkDropdown" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
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
                                    <a class="nav-link dropdown-toggle page-scroll active" href="#" id="produkDropdown"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Kalkulator MLBB
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="produkDropdown">
                                        <li>
                                            <a class="dropdown-item" href="magicwheel.php">
                                                <i class="lni lni-diamond"></i> Hitung Magic Wheel
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="{{ route('zodiak_ml') }}">
                                                <i class="lni lni-star"></i> Hitung Zodiak
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="{{ route('wr_ml') }}">
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