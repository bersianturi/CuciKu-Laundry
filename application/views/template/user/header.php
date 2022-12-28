<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('assets') ?>/img/icon/apple-icon.png">
    <link rel="icon" type="image/png" href="<?= base_url('assets') ?>/img/icon/favicon.png">
    <title>
        <?= $judul; ?> | cuciKu
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="<?= base_url('assets') ?>/dashboard/css/nucleo-icons.css" rel="stylesheet" />
    <link href="<?= base_url('assets') ?>/dashboard/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- CSS Files -->
    <link id="pagestyle" href="<?= base_url('assets') ?>/dashboard/css/argon-dashboard.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-latest.min.js"></script>
    <script src="<?= base_url('assets') ?>/dashboard/js/plugins/jquery.mask.min.js"></script>
</head>

<body class="g-sidenav-show   bg-gray-100">
    <div class="min-height-300 bg-primary position-absolute w-100"></div>
    <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="/" target="_blank">
                <img src="<?= base_url('assets') ?>/welcome/img/brand/blue-small.png" class="navbar-brand-img h-100" alt="main_logo">
            </a>
        </div>
        <hr class="horizontal dark mt-0">
        <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link <?= $dashboard ?>" href="<?= base_url('user') ?>">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $order ?>" href="<?= base_url('user/order') ?>">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-box-2 text-warning text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Order</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $d_transaksi ?>" href="<?= base_url('user/d_transaksi') ?>">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-basket text-success text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Daftar Transaksi</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $h_transaksi ?>" href="<?= base_url('user/h_transaksi') ?>">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-bullet-list-67 text-danger text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Histori Transaksi</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
    <main class="main-content position-relative border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="<?= base_url() ?>">cuciKu</a></li>
                        <li class="breadcrumb-item text-sm text-white active" aria-current="page"><?= $page_act; ?></li>
                    </ol>
                    <h6 class="font-weight-bolder text-white mb-0"><?= $page_act; ?></h6>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-2" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        <ul class="navbar-nav justify-content-end">
                            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                                <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                                    <div class="sidenav-toggler-inner">
                                        <i class="sidenav-toggler-line bg-white"></i>
                                        <i class="sidenav-toggler-line bg-white"></i>
                                        <i class="sidenav-toggler-line bg-white"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item dropdown px-3 pe-2 d-flex align-items-center">
                                <a href="javascript:;" class="nav-link text-white font-weight-bold p-0" id="usermenu" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-user me-sm-1"></i>
                                    <span class="d-sm-inline d-none"><?= $user['nama']; ?></span>
                                </a>
                                <ul class="dropdown-menu  dropdown-menu-end px-2" aria-labelledby="usermenu">
                                    <li>
                                        <a class="dropdown-item border-radius-md" href="<?= base_url('user/profil') ?>">
                                            <div class="d-flex py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="text-sm text-primary font-weight-normal">
                                                        <i class="ni ni-single-02"></i>
                                                        Profil
                                                    </h6>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item border-radius-md" href="<?= base_url('auth/logout') ?>">
                                            <div class="d-flex py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="text-sm text-primary font-weight-normal mb-1">
                                                        <i class="ni ni-curved-next"></i>
                                                        Logout
                                                    </h6>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>