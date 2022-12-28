<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card card-plain">
                    <div class="card-header pb-0 text-left">
                        <h3 class="font-weight-bolder text-info text-gradient">Edit Paket</h3>
                        <p class="mb-0">Masukkan data baru untuk paket yang ingin di edit</p>
                    </div>
                    <div class="card-body my-2">
                        <form role="form text-left" action="" method="POST">
                            <input type="hidden" name="id" value="<?= $paket['id_paket'] ?>">
                            <label for="nama_paket">Nama Paket</label>
                            <div class="input-group mb-1">
                                <div class="input-group mb-1">
                                    <input class="form-control" type="text" name="nama_paket" id="nama_paket" value="<?= $paket['nama_paket'] ?>">
                                </div>
                            </div>
                            <div>
                                <small class="text-danger"><?= validation_errors(); ?></small>
                            </div>
                            <label>Tipe Paket</label>
                            <div class="input-group mb-1">
                                <select class="form-control select-w-icon" id="tipe_paket" name="tipe_paket">
                                    <?php foreach ($tipe_paket as $tipe) : ?>
                                        <?php if ($tipe == $paket['tipe_paket']) : ?>
                                            <option value="<?= $tipe; ?>" selected><?= $tipe; ?></option>
                                        <?php else : ?>
                                            <option value="<?= $tipe; ?>"><?= $tipe; ?></option>
                                        <?php endif; ?>
                                    <?php endforeach ?>
                                </select>
                            </div>
                            <div>
                                <small class="text-danger"><?= validation_errors(); ?></small>
                            </div>
                            <label>Harga</label>
                            <div class="form-group">
                                <div class="input-group mb-1" id="harga">
                                    <span class=" input-group-text font-weight-bold">Rp</span>
                                    <input class="form-control" type="number" name="harga" id="harga" value="<?= $paket['harga'] ?>">
                                </div>
                            </div>
                            <div>
                                <small class="text-danger"><?= validation_errors(); ?></small>
                            </div>
                            <div class="text-center">
                                <button type="submit" name="edit" class="btn btn-round bg-gradient-info btn-lg w-100 mt-4 mb-0">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>