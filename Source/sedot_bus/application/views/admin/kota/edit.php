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

<form action="<?php echo base_url('index.php/admin/kota/edit/'.$kota['id_kota']) ?>" method="post" enctype="multipart/form-data">
	<div class="form-group">
    	<label>Nama Kota</label>
        <input type="text" name="nama_kota" class="form-control" value="<?php echo $kota['nama_kota'] ?>" required placeholder="Nama Kota">
    </div>                    
    <div class="form-group">
        <label>Kode Kota</label>
        <input type="text" name="kd_kota" class="form-control" value="<?php echo $kota['kd_kota'] ?>" placeholder="Kode Kota">
    </div>    
    <div class="form-group">
        <label>Map Kota</label>
        <input type="text" name="maps" class="form-control" value="<?php echo $kota['maps'] ?>" placeholder="Map Kota">
    </div>                
    <div class="form-group">
    	<input type="submit" name="submit" value="Update" class="btn btn-primary">
        <input type="reset" name="reset" value="Reset" class="btn btn-default">
    </div>
</form>
