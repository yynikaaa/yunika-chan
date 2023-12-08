<div id="menghilang">
    <?php echo $this->session->flashdata('alert', true); ?>
</div>

<button type="button" class="btn btn-outline-primary mb-4" data-toggle="modal" data-target="#largeModal">
    Tambah Kategori
</button>

<div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <form action="<?= base_url('admin/kategori/simpan') ?>" method="post">
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
                            <strong>TAMBAH KATEGORI </strong>
                        </div>
                        <div class="card-body card-block">
                            <form action="#" method="post" class="form-horizontal">
                                <div class="row form-group">
                                    <div class="col col-md-3"><label class=" form-control-label">Nama</label></div>
                                    <div class="col-12 col-md-9"><input type="text" name="nama_kategori" placeholder="Nama Kategori" class="form-control" required></div>
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
        <strong class="card-title">Data Pengguna</strong>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Kategori Konten</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($kategori as $aa) { ?>
                    <tr>
                        <th scope="row"><?= $no; ?></th>
                        <td><?= $aa['nama_kategori'] ?></td>
                        <td>
                            <a class="btn btn-sm btn-danger" onClick="return confirm('Apakah anda yakin ingin menghapus data ini?')" href="<?= base_url('admin/kategori/delete_data/' . $aa['id_kategori']) ?>">
                                <i class="fa fa-trash"></i>
                            </a>
                            <button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#edit<?= $aa['id_kategori'] ?>">
                                <i class="fa fa-pencil"></i>
                            </button>

                            <div class="modal fade" id="edit<?= $aa['id_kategori'] ?>" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <form action="<?= base_url('admin/kategori/update') ?>" method="post">
                                        <input type="hidden" name="id_kategori" value="<?= $aa['id_kategori'] ?>">
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
                                                        <strong>EDIT KATEGORI</strong>
                                                    </div>
                                                    <div class="card-body card-block">
                                                        <form action="#" method="post" class="form-horizontal">
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label class=" form-control-label">Nama Kategori</label></div>
                                                                <div class="col-12 col-md-9"><input type="text" name="nama_kategori" value="<?= $aa['nama_kategori'] ?>" class="form-control"></div>
                                                            </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                        <button type="submit" class="btn btn-primary">Confirm</button>
                                                    </div>
                                    </form>
                                </div>
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