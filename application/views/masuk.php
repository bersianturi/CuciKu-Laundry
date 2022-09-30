<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>
        Masuk | cuciKu Laundry
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
    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
                <!-- Navbar -->
                <nav class="navbar navbar-expand-lg border-radius-lg top-0 z-index-3 position-absolute mt-4 start-0 end-0 mx-">
                    <div class="container-fluid">
                        <a class="navbar-brand font-weight-bolder " href="welcome">
                            <!-- Argon Dashboard 2 -->
                            <img style="width: 150px; margin-left:0%;" src="<?= base_url('assets') ?>/welcome/img/brand/blue.png" alt="">
                        </a>
                    </div>
                </nav>
                <!-- End Navbar -->
            </div>
        </div>
    </div>
    <main class="main-content  mt-0">
        <section>
            <div class="page-header min-vh-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
                            <div class="card card-plain">
                                <div class="card-header pb-0 text-start">
                                    <h4 class="font-weight-bolder">Masuk</h4>
                                    <p class="mb-0">Masukkan e-mail dan password anda</p>
                                </div>
                                <div class="card-body">
                                    <form role="form">
                                        <div class="mb-3">
                                            <input type="email" class="form-control form-control-lg" placeholder="Email" aria-label="E-mail">
                                        </div>
                                        <div class="mb-3">
                                            <input type="email" class="form-control form-control-lg" placeholder="Password" aria-label="Password">
                                        </div>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="rememberMe">
                                            <label class="form-check-label" for="rememberMe">Ingat saya</label>
                                        </div>
                                        <div class="text-center">
                                            <button type="button" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Masuk</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <p class="mb-4 text-sm mx-auto">
                                        Tidak mempunyai akun?
                                        <a href="<?= base_url('daftar') ?>" class="text-primary text-gradient font-weight-bold">Daftar</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
                            <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden" style="background-image: url('<?= base_url('assets') ?>/dashboard/img/illustrations/ill.png');
          background-size: cover;">
                                <span class="mask bg-gradient-primary opacity-6"></span>
                                <h4 class="mt-5 text-white font-weight-bolder position-relative">"Kebersihan sebagian dari iman"</h4>
                                <p class="text-white position-relative">The more effortless the writing looks, the more effort the writer actually put into the process.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!--   Core JS Files   -->
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
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
    <script src="../assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>