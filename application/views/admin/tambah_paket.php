<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card card-plain">
                    <div class="card-header pb-0 text-left">
                        <h3 class="font-weight-bolder text-info text-gradient">Tambah Paket</h3>
                        <p class="mb-0">Masukkan data paket baru</p>
                    </div>
                    <div class="card-body my-2">
                        <form role="form text-left" action="" method="POST">
                            <label for="nama_paket">Nama Paket</label>
                            <div class="input-group mb-1">
                                <div class="input-group mb-1">
                                    <input class="form-control" type="text" name="nama_paket" id="nama_paket">
                                </div>
                            </div>
                            <div>
                                <small class="text-danger"><?= validation_errors(); ?></small>
                            </div>
                            <label for="tipe_paket">Tipe Paket</label>
                            <div class="input-group mb-1">
                                <select class="form-control select-w-icon" name="tipe_paket" id="tipe_paket">
                                    <option value="Standar">Standar</option>
                                    <option value="Premium">Premium</option>
                                    <option value="Ekslusif">Ekslusif</option>
                                </select>
                            </div>
                            <label for="harga">Harga</label>
                            <div class="form-group">
                                <div class="input-group mb-1" id="form-harga">
                                    <span class=" input-group-text font-weight-bold">Rp</span>
                                    <input class="form-control" type="number" name="harga" id="harga">
                                </div>
                            </div>
                            <div>
                                <small class="text-danger"><?= validation_errors(); ?></small>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-round bg-gradient-info btn-lg w-100 mt-4 mb-0">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>