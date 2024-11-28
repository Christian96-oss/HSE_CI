<?= $this->extend('admin/layout.php') ?>
<?= $this->section('content') ?>
<div class="card col-md-6">
    <div class="card-body">
    <form method="POST" action="<?= base_url('admin/jabatan/update/'.$jabatan['id'])?>">
<div class="input-style-1">
   <label>Nama Jabatan</label>
     <input type="text" class="form-control <?= ($validation->hasError('jabatan')) ? 'is-invalid' :  '' ?>" name="jabatan" value="<?=$jabatan['jabatan']?>" placeholder="Nama Jabatan" />
     <div class="invalid-feedback"><?= $validation->getError('jabatan')?></div>
   </div>
   <button type="submit" class="btn btn-primary">Save</button>
</form>
    </div>
</div>
<?= $this->endSection() ?>