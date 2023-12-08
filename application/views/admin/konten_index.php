<div id="menghilang">
    <?php echo $this->session->flashdata('alert', true); ?>
</div>

<button type="button" class="btn btn-outline-primary mb-4" data-toggle="modal" data-target="#largeModal">
    Tambah Konten
</button>

<div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <form action="<?= base_url('admin/konten/simpan') ?>" method="post" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                    <div class="card">
                        <div class="card-header">
                            <strong>TAMBAH KONTEN </strong>
                        </div>
                        <div class="card-body card-block">
                            <form action="#" method="post" class="form-horizontal">
                                <div class="row form-group">
                                    <div class="col col-md-3"><label class=" form-control-label">Judul</label></div>
                                    <div><input type="text" name="judul" placeholder="Judul" class="form-control" required></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label class=" form-control-label">Kategori</label>
                                    </div>
                                    <select class="col-10 col-md-9" name="id_kategori" class="form-control">
                                        <?php foreach ($kategori as $aa) { ?>
                                            <option value="<?= $aa['id_kategori'] ?>"><?= $aa['nama_kategori'] ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label class=" form-control-label">Keterangan</label>
                                    </div>
                                    <textarea class="col-12 col-md-9" name="keterangan" class="form-control"></textarea>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label class=" form-control-label">Foto</label></div>
                                    <input class="col-12 col-md-9" type="file" name="foto" class="form-control" accept="image/png, image/jpeg">
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label class=" form-control-label">Link</label></div>
                                    <div><input type="text" name="link" placeholder="Link" class="form-control" required></div>
                                </div>
                        </div>
        </form>
    </div>
</div>

</p>

<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
    <button type="submit" class="btn btn-primary">Confirm</button>
</div>
</form>
</div>
</div>
</div>


<div class="card">
    <div class="card-header">
        <strong class="card-title">Kategori Konten</strong>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Kategori Konten</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Kreator</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($konten as $aa) { ?>
                    <tr>
                        <th scope="row"><?= $no; ?></th>
                        <td><?= $aa['judul'] ?></td>
                        <td><?= $aa['nama_kategori'] ?></td>
                        <td><?= $aa['tanggal'] ?></td>
                        <td><?= $aa['nama'] ?></td>
                        <td>
                            <a href="<?= base_url('assets/upload/konten/' . $aa['foto']) ?>" target="_blank">
                                <i class="fa fa-camera"></i>
                            </a>
                        </td>
                        <td>
                            <a class="btn btn-sm btn-danger" onClick="return confirm('Apakah anda yakin ingin menghapus data ini?')" href="<?= base_url('admin/konten/delete_data/' . $aa['foto']) ?>">
                                <i class="fa fa-trash"></i>
                            </a>

                            <button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#largeModal<?= $no; ?>">
                                <i class="fa fa-edit"></i>
                            </button>

                            <div class="modal fade" id="largeModal<?= $no; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <form action="<?= base_url('admin/konten/update') ?>" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="nama_foto" value="<?= $aa['foto'] ?>">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>
                                                <div class="card">
                                                    <div class="card-header">
                                                        <strong><?= $aa['judul'] ?></strong>
                                                    </div>
                                                    <div class="card-body card-block">
                                                        <form action="#" method="post" class="form-horizontal">
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label class=" form-control-label">Judul</label></div>
                                                                <div><input type="text" name="judul" value="<?= $aa['judul'] ?>" class="form-control"></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label class=" form-control-label">Kategori</label>
                                                                </div>
                                                                <select class="col-10 col-md-9" name="id_kategori" class="form-control">
                                                                    <?php foreach ($kategori as $uu) { ?>
                                                                        <option <?php if ($uu['id_kategori'] == $aa['id_kategori']) {
                                                                                    echo "selected";
                                                                                } ?> value="<?= $uu['id_kategori'] ?>">
                                                                            <?= $uu['nama_kategori'] ?>
                                                                        </option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label class=" form-control-label">Keterangan</label>
                                                                </div>
                                                                <textarea class="col-12 col-md-9" name="keterangan" class="form-control"><?= $aa['keterangan'] ?></textarea>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label class=" form-control-label">Foto</label></div>
                                                                <input class="col-12 col-md-9" type="file" name="foto" class="form-control" accept="image/png, image/jpeg">
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label class=" form-control-label">Link</label></div>
                                                                <div><input type="text" name="link" value="<?= $aa['link'] ?>" class="form-control"></div>
                                                            </div>
                                                    </div>

                                    </form>
                                </div>
                            </div>
                            </p>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary">Confirm</button>
                            </div>
                        </td>
                    </tr>
                <?php $no++;
                } ?>
            </tbody>
        </table>
    </div>
</div>
</div>