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

<form action="<?php echo base_url('index.php/admin/bis/edit/'.$bis['id_bis']) ?>" method="post" enctype="multipart/form-data">

<div class="col-md-6">
  <div class="form-group">
      <label>Terminal</label>
      <select name="id_terminal" class="form-control">
          <?php foreach($terminal as $terminal) { ?>
          <option value="<?php echo $terminal['id_terminal'] ?>"
           <?php if($terminal['id_terminal']==$bis['id_bis']) { echo "selected"; } ?>>
              <?php echo $terminal['nama_terminal'] ?>
          </option>
          <?php } ?>
      </select>
  </div>
    <div class="form-group">
        <label>Nama Bis</label>
        <input type="text" name="nama_bis" class="form-control" value="<?php echo $bis['nama_bis'] ?>" required placeholder="Nama Bis">
    </div>
	<div class="form-group">
    	<label>Plat Nomer</label>
        <input type="text" name="plat_nomer" class="form-control" value="<?php echo $bis['plat_nomer'] ?>" required placeholder="Plat Nomer">
    </div>                   
</div>
<div class="col-md-6">
    <div class="form-group">
        <label>Jumlah Bangku</label>
        <input type="text" name="jumlah_bangku" class="form-control" value="<?php echo $bis['jumlah_bangku'] ?>" required placeholder="Jumlah Bangku">
    </div>    
    <div class="form-group">
        <label>Kelas</label>
        <select name="kelas" class="form-control">

          <option value="patas" 
          <?php if($bis['kelas']=="patas") { echo "selected"; } ?>
          >Patas</option>}

          <option value="ekonomi" 
          <?php if($bis['kelas']=="ekonomi") { echo "selected"; } ?>
          >Ekonomi</option>}                

        </select>
    </div> 
    <div class="form-group">
        <label>Jam Berangkat</label>
        <input type="text" name="jam_berangkat" class="form-control" value="<?php echo $bis['jam_berangkat'] ?>" placeholder="Jam Berangkat">
    </div>            
</div>

<div class="col-md-12">
    
    <div class="form-group">
	<input type="submit" name="submit" value="Update" class="btn btn-primary">
    <input type="reset" name="reset" value="Reset" class="btn btn-default">
    </div>
</div>

</form>
