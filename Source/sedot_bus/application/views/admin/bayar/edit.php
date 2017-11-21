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

        <form action="<?php echo base_url('index.php/admin/pembayaran/edit/'.$bayar['id_bayar']) ?>" method="post">           
        <div class="col-md-6">
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
                    <?php echo $tiket['berangkat'].' '.$tiket['tujuan'].' - '.$tiket['harga_tiket'] ?>
                  </option>
                  <?php } ?>
              </select>
          </div> 
          </div>
          <div class="col-md-6">                                     
            <div class="form-group">
                <label>Status</label>
                <select name="status" class="form-control">
                    <option value="lunas">Lunas</option>                
                    <option value="belum_lunas">Belum Lunas</option>                           
                </select>
            </div>
            <div class="form-group">
              <label>Tanggal Bayar</label>
              <input class="form-control" readonly type="text" name="tanggal_bayar" value="<?php echo $bayar['tanggal_bayar'];?>">
            </div>   
            </div>
            <div class="col-md-12">                                 
            <div class="form-group">
            <label>Keterangan</label>
              <textarea name="keterangan" class="form-control" placeholder="Keterangan"></textarea>
            </div>            
            <div class="form-group input-group">
              <input type="submit" name="submit" value="Simpan" class="btn btn-primary btn-md">
            </div>       
            </div>                                                   
          </form>