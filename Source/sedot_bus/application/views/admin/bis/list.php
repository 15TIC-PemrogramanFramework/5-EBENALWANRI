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
<p><button class="btn btn-primary" data-toggle="modal" data-target="#tambah"><i class="fa fa-plus"></i> Tambah Bis</button></p>

<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel">Tambah Bis Baru</h4>
      </div>
      <div class="modal-body">
          <form action="<?php echo base_url('index.php/admin/bis/') ?>" method="post">
          <div class="form-group">
            <label>Terminal</label>
              <select name="id_terminal" class="form-control">
                <?php foreach($terminal as $terminal) { ?>
                  <option value="<?php echo $terminal['id_terminal'] ?>">
                      <?php echo $terminal['nama_terminal'];?>
                  </option>
                  <?php } ?>
              </select>
          </div>             
            <div class="form-group input-group">
              <span class="input-group-addon"><i class="fa fa-list"></i></span>
              <input type="text" name="nama_bis" class="form-control" placeholder="Nama Bis" required value="<?php echo set_value('nama_bis') ?>">
            </div>
            <div class="form-group input-group">
              <span class="input-group-addon"><i class="fa fa-user"></i></span>
              <input type="text" name="plat_nomer" class="form-control" placeholder="Plat Nomer" required value="<?php echo set_value('plat_nomer') ?>">
          	</div>
            <div class="form-group input-group">
              <span class="input-group-addon"><i class="fa fa-wheelchair"></i></span>              
              <input type="number" name="jumlah_bangku" class="form-control" placeholder="Jumlah Bangku" required value="<?php echo set_value('jumlah_bangku') ?>">
          	</div>
            <div class="form-group">
                <label>Kelas</label>
                <select name="kelas" class="form-control">
                    <option value="patas">Patas</option>                
                    <option value="ekonomi">Ekonomi</option>                           
                </select>
            </div> 
            <div class="form-group input-group">
              <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>              
              <input type="text" name="jam_berangkat" class="form-control" placeholder="Jam Berangkat" required value="<?php echo set_value('jam_berangkat') ?>">
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
        <th>Terminal</th>
        <th>Nama Bis</th>
        <th>Plat Nomer</th>
        <th>Jumlah Bangku</th>
        <th>Kelas</th>
        <th>Jam Berangkat</th>
        <th>Aksi</th>
    </tr>
</thead>
<tbody>
	<?php $i=1; foreach($bis as $bis) { ?>
    <tr class="odd gradeX">
        <td><?php echo $i; ?></td>
        <td><?php echo $bis['nama_terminal']; ?></td>
        <td><?php echo $bis['nama_bis']; ?></td>
        <td><?php echo $bis['plat_nomer']; ?></td>
        <td><?php echo $bis['jumlah_bangku'] ?></td>
        <td><?php echo $bis['kelas'] ?></td>
        <td><?php echo $bis['jam_berangkat'] ?></td>
        <td class="center">
        <a href="<?php echo base_url('index.php/admin/bis/edit/'.$bis['id_bis']) ?>" class="btn btn-primary"><i class="fa fa-pencil"></i></a>

        <a href="<?php echo base_url('index.php/admin/bis/delete/'.$bis['id_bis']) ?>" class="btn btn-danger" onClick="return confirm('Yakin ingin menghapus kota ini?')"><i class="fa fa-trash"></i></a>
       
        </td>
    </tr>
    <?php $i++; } ?>
</tbody>
</table>