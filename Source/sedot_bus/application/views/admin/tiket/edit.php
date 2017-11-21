<?php
// Session 
if($this->session->flashdata('sukses')) { 
	echo '<div class="alert alert-success">';
	echo $this->session->flashdata('sukses');
	echo '</div>';
} 

// File upload error
if(isset($error)) {
	echo '<div class="alert alert-success">';
	echo $error;
	echo '</div>';
}

// Error
echo validation_errors('<div class="alert alert-success">','</div>'); 
?>

<form action="<?php echo base_url('index.php/admin/tiket/edit/'.$tiket['id_tiket']) ?>" method="post" enctype="multipart/form-data">

<div class="col-md-12">
	<div class="form-group">
    	<label>Berangkat</label>
        <input type="text" name="berangkat" class="form-control" value="<?php echo $tiket['berangkat'] ?>" required placeholder="Berangkat">
    </div>
    <div class="form-group">
        <label>Tujuan</label>
        <input type="text" name="tujuan" class="form-control" value="<?php echo $tiket['tujuan'] ?>" required placeholder="Tujuan">
    </div> 
    <div class="form-group">
        <label>Harga Tiket </label>
        <input type="text" name="harga_tiket" class="form-control" value="<?php echo $tiket['harga_tiket'] ?>" required placeholder="Harga Tiket">
    </div> 
    <div class="form-group">
        <label>Jumlah Tiket</label>
        <input type="text" name="jumlah_tiket" class="form-control" value="<?php echo $tiket['jumlah_tiket'] ?>" required placeholder="Jumlah Tiket">
    </div>  
    <div class="form-group">
        <label>Jumlah Tiket</label>
        <textarea class="form-control" name="keterangan"><?php echo $tiket['keterangan'];?></textarea>
    </div>  
        <div class="form-group">
            <label>Status</label>
            <select name="status" class="form-control">

              <option value="publish" 
              <?php if($tiket['status']=="publish") { echo "selected"; } ?>
              >Publish</option>}

              <option value="draft" 
              <?php if($tiket['status']=="draft") { echo "selected"; } ?>
              >Draft</option>}                

            </select>
        </div>                                           
</div>

<div class="col-md-12">
    
    <div class="form-group">
    	<input type="submit" name="submit" value="Update" class="btn btn-primary">
        <input type="reset" name="reset" value="Reset" class="btn btn-default">
    </div>
</div>

</form>
