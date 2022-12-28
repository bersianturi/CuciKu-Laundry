<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <div class="row py-2">
                        <div class="col-md-10 button-tbl">
                            <h6>Transaksi</h6>
                        </div>
                        <div class="col-md-1 button-table">
                            <button type="button" class="btn btn-primary btn-xs btn-edit" data-bs-toggle="modal" data-bs-target="#tambah-paket">Tambah</button>
                            <div class="modal fade" id="tambah-paket" tabindex="-1" role="dialog" aria-labelledby="tambah-paket" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body p-0">
                                            <div class="card card-plain">
                                                <div class="card-header pb-0 text-left">
                                                    <h3 class="font-weight-bolder text-info text-gradient">Tambah Paket</h3>
                                                    <p class="mb-0">Masukkan data transaksi baru</p>
                                                </div>
                                                <div class="card-body my-2">
                                                    <form role="form text-left">
                                                        <label>Nama Paket</label>
                                                        <div class="input-group mb-1">
                                                            <div class="input-group mb-1">
                                                                <input class="form-control" type="text" name="Nama Paket" id="nama-paket">
                                                            </div>
                                                        </div>
                                                        <label>Tipe Paket</label>
                                                        <div class="input-group mb-1">
                                                            <select class="form-control select-w-icon" id="tipe">
                                                                <option>Standar</option>
                                                                <option>Premium</option>
                                                                <option>Ekslusif</option>
                                                            </select>
                                                        </div>
                                                        <label>Harga</label>
                                                        <div class="form-group">
                                                            <div class="input-group mb-1" id="form-harga">
                                                                <span class=" input-group-text font-weight-bold">Rp</span>
                                                                <input class="money form-control" type="text" name="Harga" id="harga">
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
                            <button type="button" class="btn btn-primary btn-xs btn-edit" data-bs-toggle="modal" data-bs-target="#edit-paket">Edit</button>
                            <div class="modal fade" id="edit-paket" tabindex="-1" role="dialog" aria-labelledby="edit-paket" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body p-0">
                                            <div class="card card-plain">
                                                <div class="card-header pb-0 text-left">
                                                    <h3 class="font-weight-bolder text-info text-gradient">Edit Paket</h3>
                                                    <p class="mb-0">Masukkan data baru untuk paket yang ingin di edit</p>
                                                </div>
                                                <div class="card-body my-2">
                                                    <form role="form text-left">
                                                        <label>Nama Paket</label>
                                                        <div class="input-group mb-1">
                                                            <select class="form-control select-w-icon" id="paket">
                                                                <option>Paket A</option>
                                                                <option>Paket B</option>
                                                                <option>Paket C</option>
                                                                <option>Paket D</option>
                                                                <option>Paket E</option>
                                                            </select>
                                                        </div>
                                                        <label>Tipe Paket</label>
                                                        <div class="input-group mb-1">
                                                            <select class="form-control select-w-icon" id="tipe">
                                                                <option>Standar</option>
                                                                <option>Premium</option>
                                                                <option>Ekslusif</option>
                                                            </select>
                                                        </div>
                                                        <label>Harga</label>
                                                        <div class="form-group">
                                                            <div class="input-group mb-1" id="form-harga">
                                                                <span class=" input-group-text font-weight-bold">Rp</span>
                                                                <input class="money form-control" type="text" name="Harga" id="harga">
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
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID Transaksi</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama Pelanggan</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Pembayaran</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Total</th>
                                    <th class="text-center text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex px-3 py-1">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">AAA111</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">Michael Levi</p>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold">Selesai</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold">Tunai</span>
                                    </td>
                                    <td class="">
                                        <span class="text-secondary text-xs font-weight-bold">Rp 10.000</span>
                                    </td>
                                    <td class="px-0">
                                        <div class="btn-table text-center">
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-xs btntbl bg-gradient-primary" data-bs-toggle="modal" data-bs-target="#t-1">
                                                Rincian
                                            </button>
                                            <button type="button" class="btn btn-xs btntbl bg-gradient-primary">
                                                Cetak
                                            </button>
                                        </div>

                                        <!-- Modal -->
                                        <div class="modal fade" id="t-1" tabindex="-1" role="dialog" aria-labelledby="t-1" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h3 class="font-weight-bolder text-info text-gradient">Rincian Transaksi</h3>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div>
                                                            <small>ID Transaksi</small>
                                                            <h5>AAA111</h5>
                                                        </div>
                                                        <div>
                                                            <small>Nama Pelanggan</small>
                                                            <h5>Michael Levi</h5>
                                                        </div>
                                                        <div>
                                                            <small>Alamat</small>
                                                            <h5>Jalan Veteran</h5>
                                                        </div>
                                                        <div>
                                                            <small>Paket</small>
                                                            <h5>Standar</h5>
                                                        </div>
                                                        <div>
                                                            <small>Status</small>
                                                            <h5 class="text-success">Selesai</h5>
                                                        </div>
                                                        <div>
                                                            <small>Pembayaran</small>
                                                            <h5>Tunai</h5>
                                                        </div>
                                                        <div>
                                                            <small>Total Pembayaran</small>
                                                            <h5 class="text-primary">Rp 10.000</h5>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex px-3 py-1">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">AAA112</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">Richard Gran</p>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold">Menunggu Pembayaran</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold">Transfer</span>
                                    </td>
                                    <td class="">
                                        <span class="text-secondary text-xs font-weight-bold">Rp 25.000</span>
                                    </td>
                                    <td class="px-0">
                                        <div class="btn-table text-center">
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-xs btntbl bg-gradient-primary" data-bs-toggle="modal" data-bs-target="#t-2">
                                                Rincian
                                            </button>
                                            <button type="button" class="btn btn-xs btntbl bg-gradient-primary">
                                                Cetak
                                            </button>
                                        </div>

                                        <!-- Modal -->
                                        <div class="modal fade" id="t-2" tabindex="-1" role="dialog" aria-labelledby="t-2" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h3 class="font-weight-bolder text-info text-gradient">Rincian Transaksi</h3>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div>
                                                            <small>ID Transaksi</small>
                                                            <h5>AAA112</h5>
                                                        </div>
                                                        <div>
                                                            <small>Nama Pelanggan</small>
                                                            <h5>Richard Gran</h5>
                                                        </div>
                                                        <div>
                                                            <small>Alamat</small>
                                                            <h5>Jalan Veteran</h5>
                                                        </div>
                                                        <div>
                                                            <small>Paket</small>
                                                            <h5>Premium</h5>
                                                        </div>
                                                        <div>
                                                            <small>Status</small>
                                                            <h5 class="text-secondary">Menunggu Pembayaran</h5>
                                                        </div>
                                                        <div>
                                                            <small>Pembayaran</small>
                                                            <h5>Tunai</h5>
                                                        </div>
                                                        <div class="text-primary">
                                                            <small>Total Pembayaran</small>
                                                            <h5>Rp 25.000</h5>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex px-3 py-1">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">AAA113</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">Miriam Eric</p>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold">Selesai</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold">Tunai</span>
                                    </td>
                                    <td class="">
                                        <span class="text-secondary text-xs font-weight-bold">Rp 65.000</span>
                                    </td>
                                    <td class="px-0">
                                        <div class="btn-table text-center">
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-xs btntbl bg-gradient-primary" data-bs-toggle="modal" data-bs-target="#t-3">
                                                Rincian
                                            </button>
                                            <button type="button" class="btn btn-xs btntbl bg-gradient-primary">
                                                Cetak
                                            </button>
                                        </div>

                                        <!-- Modal -->
                                        <div class="modal fade" id="t-3" tabindex="-1" role="dialog" aria-labelledby="t-3" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h3 class="font-weight-bolder text-info text-gradient">Rincian Transaksi</h3>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div>
                                                            <small>ID Transaksi</small>
                                                            <h5>AAA113</h5>
                                                        </div>
                                                        <div>
                                                            <small>Nama Pelanggan</small>
                                                            <h5>Miriam Eric</h5>
                                                        </div>
                                                        <div>
                                                            <small>Alamat</small>
                                                            <h5>Jalan Veteran</h5>
                                                        </div>
                                                        <div>
                                                            <small>Paket</small>
                                                            <h5>Eksklusif</h5>
                                                        </div>
                                                        <div>
                                                            <small>Status</small>
                                                            <h5 class="text-success">Selesai</h5>
                                                        </div>
                                                        <div>
                                                            <small>Pembayaran</small>
                                                            <h5>Tunai</h5>
                                                        </div>
                                                        <div>
                                                            <small>Total Pembayaran</small>
                                                            <h5 class="text-primary">Rp 65.000</h5>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
</main>