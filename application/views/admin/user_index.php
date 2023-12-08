<div id="menghilang">
    <?php echo $this->session->flashdata('alert', true); ?>
</div>

<button type="button" class="btn btn-outline-primary mb-4" data-toggle="modal" data-target="#largeModal">
    Tambah User
</button>

<div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <form action="<?= base_url('admin/user/simpan') ?>" method="post">
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
                            <strong>TAMBAH USER</strong>
                        </div>
                        <div class="card-body card-block">
                            <form action="#" method="post" class="form-horizontal">
                                <div class="row form-group">
                                    <div class="col col-md-3"><label class=" form-control-label">Nama</label></div>
                                    <div class="col-12 col-md-9"><input type="text" name="nama" placeholder="Nama" class="form-control" required><span class="help-block">Please enter your
                                            name </span></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label class=" form-control-label">Username</label>
                                    </div>
                                    <div class="col-12 col-md-9"><input type="text" name="username" placeholder="Username" class="form-control" required><span class="help-block">Please enter your username</span></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label class=" form-control-label">Password</label>
                                    </div>
                                    <div class="col-12 col-md-9"><input type="password" name="password" placeholder="Password" class="form-control" required><span class="help-block">Please enter your password</span></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label class=" form-control-label">Level</label></div>

                                    <div class="col col-md-3"><select name="level" class="form-control"></div>
                                    <option value="Admin">Admin</option>
                                    <option value="Konstributor">Konstributor</option>
                                    </select>
                                </div>
                        </div>
        </form>
    </div>
</div>

</p>
</div>
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
                    <th scope="col">Username</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Level</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($user as $aa) { ?>
                    <tr>
                        <th scope="row"><?= $no; ?></th>
                        <td><?= $aa['username'] ?></td>
                        <td><?= $aa['nama'] ?></td>
                        <td><?= $aa['level'] ?></td>
                        <td>
                            <a class="btn btn-sm btn-danger" onClick="return confirm('Apakah anda yakin ingin menghapus data ini?')" href="<?= base_url('admin/user/delete_data/' . $aa['id_user']) ?>">
                                <i class="fa fa-trash"></i>
                            </a>
                            <button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#edit<?= $aa['id_user'] ?>">
                                <i class="fa fa-pencil"></i>
                            </button>

                            <div class="modal fade" id="edit<?= $aa['id_user'] ?>" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <form action="<?= base_url('admin/user/update') ?>" method="post">
                                        <input type="hidden" name="id_user" value="<?= $aa['id_user'] ?>">
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
                                                        <strong>EDIT USER</strong>
                                                    </div>
                                                    <div class="card-body card-block">
                                                        <form action="#" method="post" class="form-horizontal">
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label class=" form-control-label">Nama</label></div>
                                                                <div class="col-12 col-md-9"><input type="text" name="nama" value="<?= $aa['nama'] ?>" class="form-control"><span class="help-block">Please enter your
                                                                        email</span></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label class=" form-control-label">Username</label>
                                                                </div>
                                                                <div class="col-12 col-md-9"><input type="text" name="username" value="<?= $aa['username'] ?>" class="form-control" readonly><span class="help-block">Please enter your
                                                                        email</span></div>
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