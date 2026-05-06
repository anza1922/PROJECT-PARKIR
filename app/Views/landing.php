<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SiParkir - Sistem Parkir</title>

    <link rel="icon" type="image/x-icon" href="<?= base_url('logo.ico') ?>">
    <link href="<?= base_url('startbootstrap-sb-admin-2-gh-pages/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
    <link href="<?= base_url('startbootstrap-sb-admin-2-gh-pages/css/sb-admin-2.min.css') ?>" rel="stylesheet">

    <style>
        body { font-family: 'Nunito', sans-serif; }

        .navbar-custom {
            background: #4e73df;
            padding: 12px 0;
        }
        .navbar-custom .navbar-brand {
            color: #fff;
            font-weight: 800;
            font-size: 1.3rem;
        }
        .navbar-custom .nav-link {
            color: rgba(255,255,255,.85) !important;
            font-weight: 600;
            font-size: .9rem;
        }
        .navbar-custom .nav-link:hover { color: #fff !important; }
        .btn-masuk {
            background: #fff;
            color: #4e73df;
            font-weight: 700;
            border-radius: 20px;
            padding: 6px 22px;
            font-size: .85rem;
        }
        .btn-masuk:hover { background: #f0f0f0; color: #2e59d9; }

        /* Hero */
        .hero-section {
            background: linear-gradient(135deg, #4e73df, #224abe);
            color: #fff;
            padding: 80px 0 60px;
        }
        .hero-section h1 {
            font-weight: 800;
            font-size: 2.2rem;
            margin-bottom: 16px;
        }
        .hero-section p {
            font-size: 1rem;
            color: rgba(255,255,255,.8);
            max-width: 500px;
        }
        .btn-hero {
            background: #fff;
            color: #4e73df;
            font-weight: 700;
            padding: 10px 30px;
            border-radius: 5px;
            margin-top: 20px;
            display: inline-block;
        }
        .btn-hero:hover { background: #eee; color: #2e59d9; text-decoration: none; }

        /* Fitur */
        .fitur-section { padding: 60px 0; background: #f8f9fc; }
        .fitur-section h2 { font-weight: 700; margin-bottom: 10px; }
        .fitur-card {
            background: #fff;
            border: 1px solid #e3e6f0;
            border-radius: 8px;
            padding: 28px 20px;
            text-align: center;
            height: 100%;
        }
        .fitur-card i {
            font-size: 2rem;
            color: #4e73df;
            margin-bottom: 14px;
        }
        .fitur-card h5 { font-weight: 700; font-size: .95rem; }
        .fitur-card p { font-size: .85rem; color: #858796; }

        /* Info */
        .info-section { padding: 50px 0; }
        .info-section h2 { font-weight: 700; margin-bottom: 10px; }

        /* Footer */
        .footer-section {
            background: #2e3a4e;
            color: rgba(255,255,255,.6);
            padding: 30px 0;
            font-size: .85rem;
        }
        .footer-section a { color: rgba(255,255,255,.7); }
        .footer-section a:hover { color: #fff; text-decoration: none; }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url('/') ?>">
            <i class="fas fa-parking mr-2"></i>SiParkir
        </a>
        <button class="navbar-toggler text-white" type="button" data-toggle="collapse" data-target="#navMenu">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav ml-auto align-items-center">
                <li class="nav-item"><a class="nav-link" href="#fitur">Fitur</a></li>
                <li class="nav-item"><a class="nav-link" href="#tentang">Tentang</a></li>
                <li class="nav-item ml-lg-3">
                    <a class="btn btn-masuk" href="<?= base_url('/login') ?>">Masuk</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero -->
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <h1>Sistem Parkir Cerdas</h1>
                <p>Kelola parkir kendaraan secara mudah. Cek slot kosong, lihat riwayat, dan bayar secara digital dalam satu aplikasi.</p>
                <a href="<?= base_url('/login') ?>" class="btn-hero">
                    <i class="fas fa-sign-in-alt mr-2"></i>Masuk ke Sistem
                </a>
            </div>
            <div class="col-lg-5 d-none d-lg-block text-center">
                <i class="fas fa-car-alt" style="font-size:8rem;opacity:.2"></i>
            </div>
        </div>
    </div>
</section>

<!-- Fitur -->
<section class="fitur-section" id="fitur">
    <div class="container">
        <div class="text-center mb-5">
            <h2>Fitur Utama</h2>
            <p class="text-muted">Beberapa fitur yang tersedia di SiParkir</p>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="fitur-card">
                    <i class="fas fa-th-large"></i>
                    <h5>Peta Slot Parkir</h5>
                    <p>Lihat ketersediaan slot parkir secara langsung melalui dashboard.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="fitur-card">
                    <i class="fas fa-credit-card"></i>
                    <h5>Pembayaran Digital</h5>
                    <p>Bayar parkir melalui QRIS, transfer bank, atau e-wallet.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="fitur-card">
                    <i class="fas fa-history"></i>
                    <h5>Riwayat Parkir</h5>
                    <p>Akses riwayat parkir dan transaksi kapan saja.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Tentang -->
<section class="info-section" id="tentang">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h2>Tentang SiParkir</h2>
                <p class="text-muted">SiParkir adalah sistem informasi parkir berbasis web yang dirancang untuk mempermudah pengelolaan area parkir. Dengan sistem ini, pengguna dapat melihat ketersediaan slot, melakukan pembayaran digital, serta memantau riwayat parkir.</p>
                <p class="text-muted">Dibangun menggunakan framework CodeIgniter 4 dengan template SB Admin 2.</p>
            </div>
            <div class="col-lg-6">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <div class="row text-center">
                            <div class="col-4">
                                <h3 class="font-weight-bold text-primary">500+</h3>
                                <small class="text-muted">Slot Parkir</small>
                            </div>
                            <div class="col-4">
                                <h3 class="font-weight-bold text-success">24/7</h3>
                                <small class="text-muted">Layanan</small>
                            </div>
                            <div class="col-4">
                                <h3 class="font-weight-bold text-info">4</h3>
                                <small class="text-muted">Metode Bayar</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="footer-section">
    <div class="container text-center">
        <p class="mb-1">&copy; 2026 SiParkir - Sistem Informasi Parkir</p>
        <small>
            <a href="<?= base_url('/login') ?>">Login</a> &middot;
            <a href="<?= base_url('/dashboard') ?>">Dashboard</a>
        </small>
    </div>
</footer>

<!-- Scripts -->
<script src="<?= base_url('startbootstrap-sb-admin-2-gh-pages/vendor/jquery/jquery.min.js') ?>"></script>
<script src="<?= base_url('startbootstrap-sb-admin-2-gh-pages/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<script>
// Smooth scroll
$('a[href^="#"]').on('click', function(e) {
    e.preventDefault();
    var target = $(this.getAttribute('href'));
    if (target.length) {
        $('html,body').animate({ scrollTop: target.offset().top - 60 }, 500);
    }
});
</script>

</body>
</html>
