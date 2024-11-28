<?= $this->extend('admin/layout.php') ?>
<?= $this->section('content') ?>
<a href="<?= base_url('admin/firextinguisher/create')?>" class="btn btn-primary"><i class="lni lni-circle-plus"></i> Add Data</a>

<table class="table table-striped" id="datatables">
    <thead>
       <tr>
        <th>No</th>
        <th>Nomor Apar</th>
        <th>Plant</th>
        <th>Brand</th>
        <th>Tipe</th>
        <th>Berat</th>
        <th>Lokasi</th>
        <th>Expired</th>
        <th>Date Insert</th>
        <th>Images</th>
        <!-- <th>Status</th> -->
        <th>Aksi</th>
       </tr> 
    </thead>
    <tbody>
    <?php $no = 1;
    foreach($firextinguisher as $fire) : ?>
       
            <tr>
               <td><?= $no++ ?></td> 
               <td><?= $fire['nomor_apar'] ?></td>
               <td><?= $fire['plant'] ?></td>
               <td><?= $fire['brand'] ?></td>
               <td><?= $fire['tipe'] ?></td>
               <td><?= $fire['berat'] ?></td>
               <td><?= $fire['lokasi'] ?></td>
               <td><?= $fire['expired'] ?></td>
               <td><?= $fire['record_date'] ?></td>
               <td>
               <img src="<?= base_url('images/'.$fire['img']) ?>" class="img-thumbnail" alt="Image" style="width: 100px; height: auto;" data-toggle="modal" data-target="#imageModal">
               </td>
               <!-- <td><?= $fire['status'] ?></td> -->
               <td>
               <a href="<?= base_url('admin/firextinguisher/detail/'.$fire['id'])?>" class="badge bg-primary">Detail</a>
                <a href="<?= base_url('admin/firextinguisher/edit/'.$fire['id'])?>" class="badge bg-primary">Edit</a>
                <a href="<?= base_url('admin/firextinguisher/delete/'.$fire['id'])?>" class="badge bg-danger tombol-hapus">Delete</a>
               </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
</table>
<?= $this->endSection() ?>


