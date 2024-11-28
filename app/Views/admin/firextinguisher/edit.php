<?= $this->extend('admin/layout.php') ?>
<?= $this->section('content') ?>
<div class="card col-md-6">
    <div class="card-body">
    <form method="POST" action="<?= base_url('admin/firextinguisher/update/' . $firextinguisher ['id'])?>">
<div class="input-style-1">
   <label>Nomor Apar</label>
     <input type="text" value="<?= $firextinguisher['nomor_apar']?>" class="form-control <?= ($validation->hasError('nomor_apar')) ? 'is-invalid' :  '' ?>" name="nomor_apar" placeholder="Nomor Apar" />
     <div class="invalid-feedback"><?= $validation->getError('nomor_apar')?></div>
   </div>
   <div class="input-style-1">
   <label>Brand</label>
   <input type="text" value="<?= $firextinguisher['brand']?>" class="form-control <?= ($validation->hasError('brand')) ? 'is-invalid' :  '' ?>" name="brand" placeholder="Brand" />
     <div class="invalid-feedback"><?= $validation->getError('brand')?></div>
   </div>
   <div class="input-style-1">
   <label>Tipe</label>
     <select name="tipe" class="form-control <?= ($validation->hasError('zona_waktu')) ? 'is-invalid' :  '' ?>">
     <option value="" disabled selected>---pilih tipe---</option>
      <option <?php if($firextinguisher['tipe'] =='CO2'){
        echo 'selected';
      }?> value="CO2">CO2</option>
      <option <?php if($firextinguisher['tipe'] =='POWDER'){
        echo 'selected';
      }?> value="POWDER">POWDER</option>
      <option <?php if($firextinguisher['tipe'] =='FOAM'){
        echo 'selected';
      }?> value="FOAM">FOAM</option>
     </select>
     <div class="invalid-feedback"><?= $validation->getError('tipe')?></div>
   </div>
   <div class="input-style-1">
   <label>Berat</label>
     <input type="text" value="<?= $firextinguisher['berat']?>" class="form-control <?= ($validation->hasError('berat')) ? 'is-invalid' :  '' ?>" name="berat" placeholder="Berat" />
     <div class="invalid-feedback"><?= $validation->getError('berat')?></div>
   </div>
   <div class="input-style-1">
   <label>Plant</label>
     <select name="plant" class="form-control <?= ($validation->hasError('plant')) ? 'is-invalid' :  '' ?>">
     <option value="" disabled selected>---pilih plant---</option>
      <option <?php if($firextinguisher['plant'] =='PEM'){
        echo 'selected';
      }?> value="PEM">PEM</option>
      <option <?php if($firextinguisher['plant'] =='PEL'){
        echo 'selected';
      }?> value="PEL">PEL</option>
      <option <?php if($firextinguisher['plant'] =='BLP'){
        echo 'selected';
      }?> value="BLP">BLP</option>
     </select>
     <div class="invalid-feedback"><?= $validation->getError('plant')?></div>
   </div>
   <div class="input-style-1">
   <label>Lokasi</label>
     <input type="text" value="<?= $firextinguisher['lokasi']?>" class="form-control <?= ($validation->hasError('lokasi')) ? 'is-invalid' :  '' ?>" name="lokasi" placeholder="Lokasi" />
     <div class="invalid-feedback"><?= $validation->getError('lokasi')?></div>
   </div>
   <div class="input-style-1">
   <label>Expired</label>
     <input type="date" value="<?= $firextinguisher['expired']?>" class="form-control <?= ($validation->hasError('expired')) ? 'is-invalid' :  '' ?>" name="expired" placeholder="Expired" />
     <div class="invalid-feedback"><?= $validation->getError('expired')?></div>
   </div>
   <button type="submit" class="btn btn-primary">Update</button>
</form>
    </div>
</div>
<?= $this->endSection() ?>