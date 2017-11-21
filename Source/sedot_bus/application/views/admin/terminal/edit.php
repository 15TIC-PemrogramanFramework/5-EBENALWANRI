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

        <form action="<?php echo base_url('index.php/admin/terminal/edit/'.$terminal['id_terminal']) ?>" method="post">           
        <div class="col-md-6">
        <div class="form-group">
          <label>Nama Terminal</label>
          <input type="text" class="form-control" name="nama_terminal" value="<?php echo $terminal['nama_terminal'];?>">
        </div>
          <div class="form-group">
            <label>Kota</label>
              <select name="id_kota" class="form-control">
                <?php foreach($kota as $kota) { ?>
                  <option value="<?php echo $kota['id_kota'] ?>">
                      <?php echo $kota['nama_kota'];?>
                  </option>
                  <?php } ?>
              </select>
          </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
        <label>Keberangkatan</label>
          <input type="text" class="form-control" name="berangkat" value="<?php echo $terminal['berangkat'];?>">
        </div>      
        <div class="form-group">
        <label>Map keberangkatan</label>
          <input type="text" class="form-control" name="berangkat_map" value="<?php echo $terminal['berangkat_map'];?>">
        </div>                  
        <div class="form-group">
        <label>Tujuan</label>
          <input type="text" class="form-control" name="tujuan" value="<?php echo $terminal['tujuan'];?>">
        </div>
        <div class="form-group">
          <label>Map Tujuan</label>
          <input type="text" class="form-control" name="tujuan_map" value="<?php echo $terminal['tujuan_map'];?>">
        </div>        
        </div>          
        <div class="col-md-12">
            <div class="form-group input-group">
              <input type="submit" name="submit" value="Simpan" class="btn btn-primary btn-md">
            </div>        
        </div>                                                
    </form>