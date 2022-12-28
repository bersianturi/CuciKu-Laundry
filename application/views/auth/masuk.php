<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('assets') ?>/welcome/img/apple-icon.png">
    <link rel="icon" type="image/png" href="<?= base_url('assets') ?>/welcome/img/favicon.png">
    <title>
        Masuk | cuciKu
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
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Navbar -->

                <!-- End Navbar -->
            </div>
        </div>
    </div>
    <main class="main-content  mt-0">
        <section>
            <div class="page-header min-vh-100">
                <div class="container">
                    <div class="container-fluid mt-4">
                        <a class="navbar-brand " href="<?= base_url(); ?>">
                            <!-- Argon Dashboard 2 -->
                            <img style="width: 150px; padding-left:0%;" src="<?= base_url('assets') ?>/welcome/img/brand/blue-small.png" alt="">
                        </a>
                    </div>
                    <div class="row">
                        <div class="col-xl-5 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
                            <div class="card card-plain">
                                <div class="card-header pb-0 text-start">
                                    <?= $this->session->flashdata('message'); ?>
                                    <h4 class="font-weight-bolder">Masuk</h4>
                                    <p class="mb-3">Masukkan e-mail dan password anda</p>
                                </div>
                                <div class="card-body">
                                    <form role="form" method="POST" action="<?= base_url('auth'); ?>">
                                        <div class="mb-3">
                                            <input type="text" name="email" id="email" class="form-control form-control-lg" placeholder="E-mail" value="<?= set_value('email'); ?>">
                                            <?= form_error('name', '<div class="mx-2"><small class="text-danger">', '</small></div>'); ?>
                                        </div>
                                        <div>
                                            <input type="password" name="password" id="password" class="form-control form-control-lg" placeholder="Password">
                                            <?= form_error('password', '<div class="mx-2"><small class="text-danger">', '</small></div>'); ?>
                                        </div>
                                        <div class="text-center">
                                            <a href="dashboard">
                                                <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Masuk</button>
                                            </a>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <p class="mb-4 text-sm mx-auto">
                                        Tidak mempunyai akun?
                                        <a href="<?= base_url('auth/registration') ?>" class="text-primary text-gradient font-weight-bold">Daftar</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
                            <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden" style="background-image: url('<?= base_url('assets') ?>/dashboard/img/illustrations/ill.jpg');
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