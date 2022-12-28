<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <?= $this->session->flashdata('message'); ?>
                    <div class="row py-2">
                        <div class="col-md-10 button-tbl">
                            <h6>Paket</h6>
                        </div>
                        <div class="col-md-1 button-table">
                            <a href="<?= base_url('paket/tambahpaket') ?>" class="btn btn-primary btn-xs btn-edit">Tambah</a>
                        </div>
                    </div>
                </div>

                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Paket</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tipe Paket</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Harga</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($paket as $pkt) : ?>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-3 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm"><?= $pkt['nama_paket'] ?></h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0"><?= $pkt['tipe_paket'] ?></p>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="money text-secondary text-xs font-weight-bold"><?= $pkt['harga'] ?></span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <a href="<?= base_url(); ?>paket/editpaket/<?= $pkt['id_paket']; ?>" class="text-primary px-1 font-weight-bolder text-xs">
                                                Edit
                                            </a>
                                            <a href="<?= base_url(); ?>paket/hapuspaket/<?= $pkt['id_paket']; ?>" class="text-warning px-1 font-weight-bolder text-xs" onclick="return confirm('Apakah anda yakin?');">
                                                Hapus
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</main>