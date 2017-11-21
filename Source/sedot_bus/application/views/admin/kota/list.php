<?php
// Session 
if($this->session->flashdata('sukses')) { 
	echo '<div class="alert alert-success">';
	echo $this->session->flashdata('sukses');
	echo '</div>';
} 
// Error
echo validation_errors('<div class="alert alert-success">','</div>'); 
?>

<!--  Modals-->
<div class="panel-body">
<p><button class="btn btn-primary" data-toggle="modal" data-target="#tambah"><i class="fa fa-plus"></i> Tambah Kota</button></p>

<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel">Tambah Kota Baru</h4>
      </div>
      <div class="modal-body">
          <form action="<?php echo base_url('index.php/admin/kota/') ?>" method="post">
            <div class="form-group">
            <label>Nama Kota</label>
              <input type="text" name="nama_kota" class="form-control" placeholder="Nama Kota" required value="<?php echo set_value('nama_kota') ?>">
          	</div>
            <div class="form-group">
            <label>Kode Kota</label>            
              <input type="text" name="kd_kota" class="form-control" placeholder="Kode Kota" required value="<?php echo set_value('kd_kota') ?>">
          	</div>
            <div class="form-group">
            <label>Maps Kota</label>            
              <input type="text" name="maps" class="form-control" placeholder="Map Kota" required value="<?php echo set_value('maps') ?>">
            </div>            
            <div class="form-group input-group">
            	<input type="submit" name="submit" value="Simpan" class="btn btn-primary btn-md">
            </div>
          </form>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
  </div>
</div>
</div>
</div>
<!-- End Modals-->

<table class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>
    <tr>
        <th>#</th>
        <th>Nama Kota</th>
        <th>Kode Kota</th>
        <th>Map Kota</th>
        <th>Aksi</th>
    </tr>
</thead>
<tbody>
	<?php $i=1; foreach($kota as $kota) { ?>
    <tr class="odd gradeX">
        <td><?php echo $i; ?></td>
        <td><?php echo $kota['nama_kota']; ?></td>
        <td><?php echo $kota['kd_kota'] ?></td>
        <td><a href="<?php echo $kota['maps'];?>" target="_blank">Klik disini untuk lihat peta</a></td>
        <td class="center">
        <a href="<?php echo base_url('index.php/admin/kota/edit/'.$kota['id_kota']) ?>" class="btn btn-primary"><i class="fa fa-pencil"></i></a>

        <a href="<?php echo base_url('index.php/admin/kota/delete/'.$kota['id_kota']) ?>" class="btn btn-danger" onClick="return confirm('Yakin ingin menghapus kota ini?')"><i class="fa fa-trash"></i></a>
       
        </td>
    </tr>
    <?php $i++; } ?>
</tbody>
</table>