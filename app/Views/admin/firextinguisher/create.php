<?= $this->extend('admin/layout.php') ?>
<?= $this->section('content') ?>
<div class="card col-md-6">
    <div class="card-body">
    <form method="POST" action="<?= base_url('admin/firextinguisher/store')?>" enctype="multipart/form-data">
<div class="input-style-1">
   <label>Nomor Apar</label>
     <input type="text" class="form-control <?= ($validation->hasError('nomor_apar')) ? 'is-invalid' :  '' ?>" name="nomor_apar" placeholder="Nomor Apar" />
     <div class="invalid-feedback"><?= $validation->getError('nomor_apar')?></div>
   </div>
   <div class="input-style-1">
   <label>Brand</label>
   <input type="text" class="form-control <?= ($validation->hasError('brand')) ? 'is-invalid' :  '' ?>" name="brand" placeholder="Brand" />
     <div class="invalid-feedback"><?= $validation->getError('brand')?></div>
   </div>
   <div class="input-style-1">
   <label>Tipe</label>
     <select name="tipe" class="form-control <?= ($validation->hasError('tipe')) ? 'is-invalid' :  '' ?>" name="tipe">
     <option value="" disabled selected>---pilih tipe---</option>
      <option value="CO2">CO2</option>
      <option value="POWDER">POWDER</option>
      <option value="FOAM">FOAM</option>
     </select>
     <div class="invalid-feedback"><?= $validation->getError('tipe')?></div>
   </div>
   <div class="input-style-1">
   <label>Berat</label>
     <input type="text" class="form-control <?= ($validation->hasError('berat')) ? 'is-invalid' :  '' ?>" name="berat" placeholder="Berat" />
     <div class="invalid-feedback"><?= $validation->getError('berat')?></div>
   </div>
   <div class="input-style-1">
   <label>Plant</label>
     <select name="plant" class="form-control <?= ($validation->hasError('plant')) ? 'is-invalid' :  '' ?>" name="plant">
     <option value="" disabled selected>---pilih plant---</option>
      <option value="PEM">PEM</option>
      <option value="PEL">PEL</option>
      <option value="BLP">BLP</option>
     </select>
     <div class="invalid-feedback"><?= $validation->getError('plant')?></div>
   </div>
   <div class="input-style-1">
   <label>Lokasi</label>
     <input type="text" class="form-control <?= ($validation->hasError('lokasi')) ? 'is-invalid' :  '' ?>" name="lokasi" placeholder="Lokasi" />
     <div class="invalid-feedback"><?= $validation->getError('lokasi')?></div>
   </div>
   <div class="input-style-1">
   <label>Expired</label>
     <input type="date" class="form-control <?= ($validation->hasError('expired')) ? 'is-invalid' :  '' ?>" name="expired" placeholder="Expired" />
     <div class="invalid-feedback"><?= $validation->getError('expired')?></div>
   </div>
   <div class="input-style-1">
      <label>Upload Gambar</label>
      <input type="file" class="form-control <?= ($validation->hasError('img')) ? 'is-invalid' : '' ?>" name="img" accept=".jpg,.jpeg,.png" />
      <div class="invalid-feedback"><?= $validation->getError('img') ?></div>
   </div>
   <button type="submit" class="btn btn-primary">Save</button>
</form>
    </div>
</div>
<?= $this->endSection() ?>