<div class="card shadow-lg mx-4 card-profile-bottom">
    <div class="card-body p-3">
        <div class="row gx-4">
            <div class="col-auto">
                <div class="avatar avatar-xl position-relative">
                    <img src="<?= base_url('Assets/img/profile/') . $user['image']; ?>" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                </div>
            </div>
            <div class="col-auto my-auto">
                <div class="h-100">
                    <h5 class="mb-1">
                        <?= $user['nama']; ?>
                    </h5>
                    <p class="mb-0 font-weight-bold text-sm">
                        Admin
                    </p>
                </div>
            </div>
            <!-- <div class="col-lg-2 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                <div class="nav-wrapper position-relative end-0">
                    <ul class="nav nav-pills nav-fill px-1" role="tablist">
                        <li class="nav-item">
                            <button class="btn btn-primary btn-sm"> 
                                <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                                    <i class="ni ni-settings-gear-65"></i>
                                    Pengaturan
                            </button>
                            </a>
                            <button>
                                Settings
                            </button>
                        </li>
                    </ul>
                </div>
            </div> -->
        </div>
    </div>
</div>
<div class="container-fluid py-4">
    <div class="card">
        <div class="card-header pb-0">
            <div class="d-flex align-items-center">
                <p class="text-uppercase">Informasi Pengguna</p>
                <button type="submit" class="btn btn-primary btn-sm ms-auto">Simpan</button>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group col-md-6">
                        <label for="example-text-input" class="form-control-label">Nama Lengkap</label>
                        <input class="form-control" type="text" value="<?= $user['nama']; ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Alamat E-mail</label>
                        <input class="form-control" type="email" value="<?= $user['email']; ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Username</label>
                        <input class="form-control" type="text" value="lucky.jesse">
                    </div> -->
                </div>

            </div>
            <hr class="horizontal dark">
            <p class="text-uppercase text-sm">Informasi Kontak</p>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Alamat</label>
                        <input class="form-control" type="text" value="<?= $user['alamat']; ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Kota</label>
                        <input class="form-control" type="text" value="<?= $user['kota']; ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Kode Pos</label>
                        <input class="form-control" type="text" value="<?= $user['kodepos']; ?>">
                    </div>
                </div>
            </div>
            <hr class="horizontal dark">
            <p class="text-uppercase text-sm">Tentang Saya</p>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Tentang Saya</label>
                        <input class="form-control" type="text" value="<?= $user['tentang_saya']; ?>">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>