<div class="container-fluid py-4">
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-xl-5 mb-xl-0 mb-4">
                    <div class="card bg-transparent shadow-xl">
                        <div class="overflow-hidden position-relative border-radius-xl" style="background-image: url('https://wallpaperaccess.com/full/3580783.jpg');">
                            <span class="mask "></span>
                            <div class="card-body position-relative z-index-1 p-3">
                                <i class="fas fa-wifi text-white p-2"></i>
                                <h5 class="text-white mt-4 mb-5 pb-2">1234&nbsp;&nbsp;&nbsp;5678&nbsp;&nbsp;&nbsp;9012&nbsp;&nbsp;&nbsp;3456</h5>
                                <div class="d-flex">
                                    <div class="d-flex">
                                        <div class="">
                                            <p class="text-white text-sm opacity-8 mb-0">Nama Member</p>
                                            <h6 class="text-white mb-0"><?= $user['nama']; ?></h6>
                                        </div>
                                        <!-- <div>
                                            <p class="text-white text-sm opacity-8 mb-0">Kedaluwarsa</p>
                                            <h6 class="text-white mb-0">11/24</h6>
                                        </div> -->
                                    </div>
                                    <div class="ms-auto w-20 d-flex align-items-end justify-content-end">
                                        <img class="w-60 mt-2" src="<?= base_url('assets') ?>/dashboard/img/logos/mastercard.png" alt="logo">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="row">
                        <div class="col-md-12">
                            <div>
                                <div class="card">
                                    <div class="card-body  p-3">
                                        <div class="row">
                                            <div class="col-8">
                                                <div class="numbers">
                                                    <p class="text-xs mt-2 mb-0 text-uppercase font-weight-bold">Saldo</p>
                                                    <h5 class="font-weight-bolder">
                                                        Rp. 530,000
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="col-4 text-end">
                                                <div class="icon mt-1 icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                                                    <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="card mt-2">
                                        <div class="card-header pb-0 p-3">
                                            <div class="row">
                                                <div class="col-6 d-flex align-items-middle">
                                                    <h6 class="mb-0">Payment Method</h6>
                                                </div>
                                                <div class="col-6 text-end">
                                                    <a class="btn bg-gradient-dark mb-0" href="javascript:;"><i class="fas fa-plus"></i>&nbsp;&nbsp;Tambahkan Kartu</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body p-3 pt-0">
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <div class="card card-body card-edit border card-plain border-radius-lg d-flex align-items-center flex-row">
                                                        <img class="w-10 me-4 mb-0" src="<?= base_url('assets') ?>/dashboard/img/logos/visa.png" alt="logo">
                                                        <h6 class="mb-0">****&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;5248</h6>
                                                        <i class="fas fa-pencil-alt ms-auto text-dark cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Card"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header pb-0 px-3">
                    <h6 class="mb-0">Daftar Alamat</h6>
                </div>
                <div class="card-body pt-4 p-3">
                    <ul class="list-group">
                        <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                            <div class="d-flex flex-column">
                                <h6 class="mb-3 text-sm">Rumah</h6>
                                <span class="mb-2 text-xs">Nama Penerima: <span class="text-dark font-weight-bold ms-sm-2">Jack Peterson</span></span>
                                <span class="mb-2 text-xs">No. Hp: <span class="text-dark ms-sm-2 font-weight-bold">+62 812-3456-7890</span></span>
                                <span class="text-xs">Alamat: <span class="text-dark ms-sm-2 font-weight-bold">Jalan Pabuaran</span></span>
                            </div>
                            <div class="ms-auto text-end">
                                <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete</a>
                                <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                            </div>
                        </li>
                        <li class="list-group-item border-0 d-flex p-4 mb-2 mt-3 bg-gray-100 border-radius-lg">
                            <div class="d-flex flex-column">
                                <h6 class="mb-3 text-sm">Kantor</h6>
                                <span class="mb-2 text-xs">Nama Penerima: <span class="text-dark font-weight-bold ms-sm-2">Jack Peterson</span></span>
                                <span class="mb-2 text-xs">No. Hp: <span class="text-dark ms-sm-2 font-weight-bold">+62 812-3456-7890</span></span>
                                <span class="text-xs">Alamat: <span class="text-dark ms-sm-2 font-weight-bold">Jalan Pabuaran</span></span>
                            </div>
                            <div class="ms-auto text-end">
                                <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete</a>
                                <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>