<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('assets') ?>/welcome/img/apple-icon.png">
    <link rel="icon" type="image/png" href="<?= base_url('assets') ?>/welcome/img/favicon.png">
    <title>
        Daftar | cuciKu
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="<?= base_url('assets') ?>/dashboard/css/nucleo-icons.css" rel="stylesheet" />
    <link href="<?= base_url('assets') ?>/dashboard/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="<?= base_url('assets') ?>/dashboard/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="<?= base_url('assets') ?>/dashboard/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
</head>

<body class="">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3 navbar-transparent mt-4">
        <div class="container">
            <a class="navbar-brand font-weight-bolder " href="/">
                <!-- Argon Dashboard 2 -->
                <img style="width: 120px; margin-left:0%;" src="<?= base_url('assets') ?>/welcome/img/brand/white-small.png" alt="">
            </a>
        </div>
    </nav>
    <!-- End Navbar -->
    <main class="main-content  mt-0">
        <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('<?= base_url('assets') ?>/dashboard/img/illustrations/ill2.jpg'); background-position: top;">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 text-center mx-auto">
                        <h1 class="text-white mb-2 mt-5">Selamat Datang!</h1>
                        <p class="text-lead text-white">Layanan laundry premium hanya untuk kamu.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
                <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
                    <div class="card z-index-0">
                        <div class="card-header text-center pt-4">
                            <h3>Daftar</h3>
                        </div>
                        <div class="card-body">
                            <form role="form" method="POST" action="<?= base_url('auth/registration') ?>">
                                <div class="mb-3">
                                    <input type="text" id="nama" name="name" class="form-control" placeholder="Nama Lengkap" value="<?= set_value('name'); ?>">
                                    <?= form_error('name', '<div class="mx-2"><small class="text-danger">', '</small></div>'); ?>
                                </div>
                                <div class="mb-3">
                                    <input type="text" id="email" name="email" class="form-control" placeholder="E-mail" value="<?= set_value('email'); ?>">
                                    <?= form_error('email', '<div class="mx-2"><small class="text-danger">', '</small></div>'); ?>

                                </div>
                                <div class="mb-3">
                                    <input type="password" id="password" name="password" class="form-control" placeholder="Kata Sandi" aria-label="Kata Sandi">
                                    <?= form_error('password', '<div class="mx-2"><small class="text-danger">', '</small></div>'); ?>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary w-100 my-4 mb-2">Daftar</button>
                                </div>
                                <p class="text-center mt-3 mb-0">Sudah punya akun? <a href="<?= base_url('auth') ?>" class="text-primary font-weight-bolder">Masuk</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="footer py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg mb-4 text-center">
                    <a href="/" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                        Home
                    </a>
                    <a href="tentang-kami" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                        Tentang Kami
                    </a>
                    <a href="faq" class="text-secondary mb-sm-0 mb-2">
                        FAQ
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg mx-auto text-center mt-1">
                    <p class="mb-0 text-secondary">
                        Copyright © <script>
                            document.write(new Date().getFullYear())
                        </script> by <br>cuciKu Laundry.
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
    <!--   Core JS Files   -->
    <script src="<?= base_url('assets') ?>/dashboard/js/core/popper.min.js"></script>
    <script src="<?= base_url('assets') ?>/dashboard/js/core/bootstrap.min.js"></script>
    <script src="<?= base_url('assets') ?>/dashboard/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="<?= base_url('assets') ?>/dashboard/js/plugins/smooth-scrollbar.min.js"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="<?= base_url('assets') ?>/dashboard/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>