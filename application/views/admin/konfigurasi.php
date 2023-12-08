<div id="menghilang">
    <?php echo $this->session->flashdata('alert', true); ?>
</div>

<form action="<?= base_url('admin/konfigurasi/update') ?>" method="post">
    <div class="modal-content">
        <div class="modal-body">
            <p>
            <div class="card">
                <div class="card-header">
                    <strong>KONFIGURASI</strong>
                </div>
                <div class="card-body card-block">
                    <form action="#" method="post" class="form-horizontal">
                        <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Judul Website</label></div>
                            <div class="col-12 col-md-9"><input type="text" name="judul_website" class="form-control" value="<?= $konfig->judul_website; ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Profile</label>
                            </div>
                            <textarea class="col-9 col-md-9" name="profil_website" class="form-control"><?= $konfig->profil_website; ?></textarea>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Tiktok</label></div>
                            <div class="col-12 col-md-9"><input type="text" name="tiktok" class="form-control" value="<?= $konfig->tiktok; ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Instagram</label></div>
                            <div class="col-12 col-md-9"><input type="text" name="instagram" class="form-control" value="<?= $konfig->instagram; ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Email</label></div>
                            <div class="col-12 col-md-9"><input type="email" name="email" class="form-control" value="<?= $konfig->email; ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Alamat</label></div>
                            <div class="col-12 col-md-9"><input type="text" name="alamat" class="form-control" value="<?= $konfig->alamat; ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Telegram</label></div>
                            <div class="col-12 col-md-9"><input type="text" name="telegram" class="form-control" value="<?= $konfig->telegram; ?>">
                            </div>
                        </div>
                </div>
</form>
<div class="modal-footer">
    <button type="submit" class="btn btn-primary">Confirm</button>
</div>