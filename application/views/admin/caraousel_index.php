<div id="menghilang">
    <?php echo $this->session->flashdata('alert', true); ?>
</div>


<form action="<?= base_url('admin/caraousel/simpan') ?>" method="post" enctype="multipart/form-data">
    <div class="row form-group">
        <div class="col col-md-3"><label class=" form-control-label">Judul</label></div>
        <div class="col-12 col-md-9"><input type="text" name="judul" placeholder="Judul Foto" class="form-control" required></div>
    </div>
    <div class="mb-6">
        <label for="formFileMultiple" class="form-label">Pilih Foto dengan ukuran (2:1)</label>
        <input class="form-control" type="file" id="formFileMultiple" name="foto">
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Confirm</button>
    </div>
</form>




<?php foreach ($caraousel as $aa) { ?>
    <div class="col-md-4">
        <div class="card">
            <img class="card-img-top" src="<?= base_url('assets/upload/caraousel/' . $aa['foto']) ?>">
            <div class="card-body">
                <h4 class="card-title mb-3"><?= $aa['judul'] ?></h4>
                <a class="btn btn-sm btn-danger" onClick="return confirm('Apakah anda yakin ingin menghapus data ini?')" href="<?= base_url('admin/caraousel/delete_data/' . $aa['foto']) ?>">
                    <i class="fa fa-trash"></i>
                </a>
            </div>
        </div>
    </div>

<?php } ?>