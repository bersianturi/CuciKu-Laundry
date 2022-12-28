<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <div class="row mb-2">
                        <div class="col-md-10 button-tbl">
                            <h6>Pelanggan</h6>
                        </div>
                        <div class="col-md-1 button-table">
                            <button type="button" class="btn btn-primary btn-xs btn-edit" data-bs-toggle="modal" data-bs-target="#tambah-cust">Tambah</button>
                            <div class="modal fade" id="tambah-cust" tabindex="-1" role="dialog" aria-labelledby="tambah-cust" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body p-0">
                                            <div class="card card-plain">
                                                <div class="card-header pb-0 text-left">
                                                    <h3 class="font-weight-bolder text-info text-gradient">Tambah Pengguna</h3>
                                                    <p class="mb-0">Masukkan data pelanggan baru</p>
                                                </div>
                                                <div class="card-body my-2">
                                                    <form role="form text-left">
                                                        <label>Nama Pelanggan</label>
                                                        <div class="input-group mb-1">
                                                            <div class="input-group mb-1">
                                                                <input class="form-control" type="text" name="Nama Pengguna" id="nama-cust-baru">
                                                            </div>
                                                        </div>
                                                        <label>No. Telp</label>
                                                        <div class="no-telp">
                                                            <div class="input-group mb-1" id="no-telp">
                                                                <span class=" input-group-text font-weight-bold">+62</span>
                                                                <input class="phone form-control" type="text" name="No. Telp" id="no-telp-cust-baru">
                                                            </div>
                                                        </div>
                                                        <label>E-mail</label>
                                                        <div class="input-group mb-1">
                                                            <div class="input-group mb-1">
                                                                <input class="form-control" type="email" name="E-mail" id="e-mail-cust-baru">
                                                            </div>
                                                        </div>
                                                        <label>E-mail</label>
                                                        <div class="input-group mb-1">
                                                            <div class="input-group mb-1">
                                                                <textarea class="form-control" name="alamat" id="alamat-cust-baru"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="text-center">
                                                            <button type="button" class="btn btn-round bg-gradient-info btn-lg w-100 mt-4 mb-0">Simpan</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1 button-table">
                            <button type="button" class="btn btn-primary btn-xs btn-edit" data-bs-toggle="modal" data-bs-target="#edit-cust">Edit</button>
                            <div class="modal fade" id="edit-cust" tabindex="-1" role="dialog" aria-labelledby="edit-paket" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body p-0">
                                            <div class="card card-plain">
                                                <div class="card-header pb-0 text-left">
                                                    <h3 class="font-weight-bolder text-info text-gradient">Edit Pengguna</h3>
                                                    <p class="mb-0">Masukkan data baru untuk pengguna yang ingin di edit</p>
                                                </div>
                                                <div class="card-body my-2">
                                                    <form role="form text-left">
                                                        <label>Nama Pengguna</label>
                                                        <div class="input-group mb-1">
                                                            <select class="form-control select-w-icon" id="nama-cust-edit">
                                                                <option>John Michael</option>
                                                                <option>Alexa Liras</option>
                                                                <option>Laurent Perrier</option>
                                                                <option>Michael Levi</option>
                                                                <option>Richard Gran</option>
                                                                <option>Miriam Eric</option>
                                                            </select>
                                                        </div>
                                                        <label>No. Telp</label>
                                                        <div class="no-telp">
                                                            <div class="input-group mb-1" id="no-telp">
                                                                <span class=" input-group-text font-weight-bold">+62</span>
                                                                <input class="phone form-control" type="text" name="No. Telp" id="no-telp-cust-edit">
                                                            </div>
                                                        </div>
                                                        <label>E-mail</label>
                                                        <div class="input-group mb-1">
                                                            <div class="input-group mb-1">
                                                                <input class="form-control" type="email" name="E-mail" id="e-mail-cust-edit">
                                                            </div>
                                                        </div>
                                                        <label>E-mail</label>
                                                        <div class="input-group mb-1">
                                                            <div class="input-group mb-1">
                                                                <textarea class="form-control" name="alamat" id="alamat-cust-edit"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="text-center">
                                                            <button type="button" class="btn btn-round bg-gradient-info btn-lg w-100 mt-4 mb-0">Simpan</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Pelanggan</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">No. Telp</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">E-mail</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Alamat</th>
                                    <!-- <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Sejak</th> -->
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex px-3 py-1">
                                            <div>
                                                <img src="<?= base_url('assets') ?>/dashboard/img/team-3.jpg" class="avatar avatar-sm me-3" alt="user4">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">Michael Levi</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">+62 812-3456-7890</p>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">michael@creative-tim.com</p>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">Jalan Veteran</p>
                                    </td>
                                    <td class="align-middle">
                                        <a href="javascript:;" class="text-warning font-weight-bolder text-xs" data-toggle="tooltip" data-original-title="Hapus user">
                                            Hapus
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex px-3 py-1">
                                            <div>
                                                <img src="<?= base_url('assets') ?>/dashboard/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user5">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">Richard Gran</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">+62 812-3456-7890</p>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">richard@creative-tim.com</p>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">Jalan Veteran</p>
                                    </td>
                                    <td class="align-middle">
                                        <a href="javascript:;" class="text-warning font-weight-bolder text-xs" data-toggle="tooltip" data-original-title="Hapus user">
                                            Hapus
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex px-3 py-1">
                                            <div>
                                                <img src="<?= base_url('assets') ?>/dashboard/img/team-4.jpg" class="avatar avatar-sm me-3" alt="user6">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">Miriam Eric</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">+62 812-3456-7890</p>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">miriam@creative-tim.com</p>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">Jalan Veteran</p>
                                    </td>
                                    <td class="align-middle">
                                        <a href="javascript:;" class="text-warning font-weight-bolder text-xs" data-toggle="tooltip" data-original-title="Hapus user">
                                            Hapus
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>