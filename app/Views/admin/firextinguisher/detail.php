<?= $this->extend('admin/layout.php') ?>
<?= $this->section('content') ?>

<div class="card col-md-8">
<div class="card-body">
   <table class="table">
      <tr>
         <td>Nomor Apar</td>
         <td>:</td>
         <td><?= $firextinguisher['nomor_apar']?></td>
      </tr>
      <tr>
         <td>Plant</td>
         <td>:</td>
         <td><?= $firextinguisher['plant']?></td>
      </tr>
      <tr>
         <td>Brand</td>
         <td>:</td>
         <td><?= $firextinguisher['brand']?></td>
      </tr>
      <tr>
         <td>Tipe</td>
         <td>:</td>
         <td><?= $firextinguisher['tipe']?></td>
      </tr>
      <tr>
         <td>Berat</td>
         <td>:</td>
         <td><?= $firextinguisher['berat']?></td>
      </tr>
      <tr>
         <td>Lokasi</td>
         <td>:</td>
         <td><?= $firextinguisher['lokasi']?></td>
      </tr>
      <tr>
         <td>Expired</td>
         <td>:</td>
         <td><?= $firextinguisher['expired']?></td>
      </tr>
      <tr>
         <td>Date Insert</td>
         <td>:</td>
         <td><?= $firextinguisher['record_date']?></td>
      </tr>
      <tr>
         <td>Images</td>
         <td>:</td>
         <td><?= $firextinguisher['img']?></td>
      </tr>
      <!-- <tr>
         <td>Status</td>
         <td>:</td>
         <td><?= $firextinguisher['status']?></td>
      </tr> -->
   </table>
</div>
</div>
<?= $this->endSection() ?>