<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('assets') ?>/img/icon/apple-icon.png">
    <link rel="icon" type="image/png" href="<?= base_url('assets') ?>/img/icon/favicon.png">
    <title>
        <?= $judul; ?>
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- Nucleo Icons -->
    <link href="<?= base_url('assets') ?>/welcome/css/nucleo-icons.css" rel="stylesheet" />
    <link href="<?= base_url('assets') ?>/welcome/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <link href="<?= base_url('assets') ?>/welcome/css/font-awesome.css" rel="stylesheet" />
    <link href="<?= base_url('assets') ?>/welcome/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="<?= base_url('assets') ?>/welcome/css/argon-design-system.css?" rel="stylesheet" />
</head>
<nav id="navbar-main" class="navbar navbar-main navbar-expand-lg bg-white navbar-light position-sticky top-0 shadow py-2">
    <div class="container">
        <a class="navbar-brand mr-lg-5" href="/">
            <img src="<?= base_url('assets') ?>/welcome/img/brand/blue-small.png">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse " id="navbar_global">
            <div class="navbar-collapse-header">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="/">
                            <img src="<?= base_url('assets') ?>/welcome/img/brand/blue.png">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
                <li class="nav-item">
                    <a href="<?= base_url('welcome'); ?>" class="nav-link <?= $home; ?>" role="button">
                        <i class="ni ni-spaceship d-lg-none"></i>
                        <span class="nav-link-inner--text">Home</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('welcome/tentangkami'); ?>" class="nav-link <?= $tentang_kami ?>" role="button">
                        <i class="ni ni-bulb-61 d-lg-none"></i>
                        <span class="nav-link-inner--text">Tentang Kami</span>
                    </a>
                </li>
                <li class="nav-item <?= $faq; ?>" href="#" role="button">
                    <a href="<?= base_url('welcome/faq') ?>" class="nav-link">
                        <i class="ni ni-bullet-list-67 d-lg-none"></i>
                        <span class="nav-link-inner--text">FAQ</span>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav align-items-lg-center ml-lg-auto">
                <li class="nav-item">
                    <a class="btn btn-outline-primary" href="<?= base_url('auth') ?>">
                        <span class="nav-link-inner--text">MASUK</span>
                    </a>
                </li>
                <li class="nav-item d-none d-lg-block">
                    <a href="<?= base_url('auth/registration') ?>" class="btn btn-primary">
                        <span class="nav-link-inner--text">DAFTAR</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>