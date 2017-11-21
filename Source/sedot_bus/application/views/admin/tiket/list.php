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
<p><button class="btn btn-primary" data-toggle="modal" data-target="#tambah"><i class="fa fa-plus"></i> Tambah Tiket</button></p>

<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel">Tambah Tiket Baru</h4>
      </div>
      <div class="modal-body">
          <form action="<?php echo base_url('index.php/admin/tiket/') ?>" method="post">
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
          <div class="form-group">
            <label>Bis</label>
              <select name="id_bis" class="form-control">
                <?php foreach($bis as $bis) { ?>
                  <option value="<?php echo $bis['id_bis'] ?>">
                      <?php echo $bis['nama_bis'];?>
                  </option>
                  <?php } ?>
              </select>
          </div>                            
            <div class="form-group">
              <label>Kode Tiket</label>                        
              <input type="text" name="kode_tiket" class="form-control" placeholder="Kode Tiket" required value="<?php echo set_value('kode_tiket') ?>">
            </div>
            <div class="form-group">
              <label>Nama Tiket</label>                        
              <input type="text" name="nama_tiket" class="form-control" placeholder="Nama Tiket" required value="<?php echo set_value('nama_tiket') ?>">
            </div>
            <div class="form-group">
              <label>Harga</label>                        
              <input type="text" name="harga_tiket" class="form-control" placeholder="Harga Tiket" required value="<?php echo set_value('harga_tiket') ?>">
            </div>                        
            <div class="form-group">
              <label>Jumlah Tiket</label>                        
              <input type="number" name="jumlah_tiket" class="form-control" placeholder="Jumlah Tiket" required value="<?php echo set_value('jumlah_tiket') ?>">
            </div>            
            <div class="form-group">
                <label>Status</label>
                <select name="status" class="form-control">
                    <option value="publish">Publish</option>                
                    <option value="draft">Draft</option>                           
                </select>
            </div>             
            <div class="form-group">
              <textarea name="keterangan" class="form-control" placeholder="Keterangan"></textarea>
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
        <th>Nama Tiket</th>
        <th>Keberangkatan</th>
        <th>Tujuan</th>
        <th>Harga Tiket</th>
        <th>Jumlah Tiket</th>
        <th>Status</th>
        <th>Aksi</th>
    </tr>
</thead>
<tbody>
	<?php $i=1; foreach($tiket as $tiket) { ?>
    <tr class="odd gradeX">
        <td><?php echo $i; ?></td>
        <td>
            <?php echo $tiket['nama_tiket']; ?><br>
            <small>Kode : <?php echo $tiket['kode_tiket'];?></small>
        </td>
        <td>
            <?php echo $tiket['berangkat'];?><br>
            <small><a href="<?php echo $tiket['berangkat_map'];?>">Lihat Map</a></small> 
        </td>
        <td>
            <?php echo $tiket['tujuan'];?><br>
            <small><a href="<?php echo $tiket['tujuan_map'];?>">Lihat Map</a></small> 
        </td> 
        <td><?php echo $tiket['harga_tiket'] ?></td>
        <td><?php echo $tiket['jumlah_tiket'] ?></td>
        <td><?php echo $tiket['status'] ?></td>
        <td class="center">
        <a href="<?php echo base_url('index.php/admin/tiket/edit/'.$tiket['id_tiket']) ?>" class="btn btn-primary"><i class="fa fa-pencil"></i></a>

        <a href="<?php echo base_url('index.php/admin/tiket/delete/'.$tiket['id_tiket']) ?>" class="btn btn-danger" onClick="return confirm('Yakin ingin menghapus kota ini?')"><i class="fa fa-trash"></i></a>
       
        </td>
    </tr>
    <?php $i++; } ?>
</tbody>
</table>