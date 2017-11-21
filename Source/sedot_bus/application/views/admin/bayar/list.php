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
<p><button class="btn btn-primary" data-toggle="modal" data-target="#tambah"><i class="fa fa-plus"></i> Tambah pembayaran</button>
<a href="<?php echo base_url('admin/pembayaran/cetak_pdf');?>" target="_blank" class="btn btn-success"><i class="fa fa-print"></i> Cetak PDF</a>
</p>

<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel">Tambah pembayaran Baru</h4>
      </div>
      <div class="modal-body">
          <form action="<?php echo base_url('index.php/admin/pembayaran/') ?>" method="post">
           
          <div class="form-group">
            <label>Member</label>
              <select name="id_member" class="form-control">
                <?php foreach($member as $member) { ?>
                  <option value="<?php echo $member['id_member'] ?>">
                    <?php echo $member['nama_depan'].' '.$member['nama_belakang'] ?>
                  </option>
                  <?php } ?>
              </select>
          </div>

          <div class="form-group">
            <label>Tiket</label>
              <select name="id_tiket" class="form-control">
                <?php foreach($tiket as $tiket) { ?>
                  <option value="<?php echo $tiket['id_tiket'] ?>">
                    <?php echo $tiket['nama_tiket'].' - '.$tiket['harga_tiket'] ?>
                  </option>
                  <?php } ?>
              </select>
          </div>                                      
            <div class="form-group">
                <label>Status</label>
                <select name="status" class="form-control">
                    <option value="lunas">Lunas</option>                
                    <option value="belum_lunas">Belum Lunas</option>                           
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
        <th>Nama Member</th>
        <th>Tiket</th>
        <th>Status</th>
        <th>Tanggal Bayar</th>
        <th>Keterangan</th>        
        <th>Aksi</th>
    </tr>
</thead>
<tbody>
	<?php $i=1; foreach($bayar as $bayar) { ?>
    <tr class="odd gradeX">
        <td><?php echo $i; ?></td>
        <td><?php echo $bayar['nama_depan'].' '.$bayar['nama_belakang'] ?></td>
        <td><a href="<?php echo base_url('admin/tiket');?>"><?php echo $bayar['nama_tiket'] ?></a></td>
        <td><?php echo $bayar['status'] ?></td>
        <td><?php echo $bayar['tanggal_bayar'] ?></td>
        <td><?php echo $bayar['keterangan'] ?></td>
        <td class="center">
        <a href="<?php echo base_url('index.php/admin/pembayaran/edit/'.$bayar['id_bayar']) ?>" class="btn btn-primary"><i class="fa fa-pencil"></i></a>

        <a href="<?php echo base_url('index.php/admin/pembayaran/delete/'.$bayar['id_bayar']) ?>" class="btn btn-danger" onClick="return confirm('Yakin ingin menghapus kota ini?')"><i class="fa fa-trash"></i></a>
       
        </td>
    </tr>
    <?php $i++; } ?>
</tbody>
</table>