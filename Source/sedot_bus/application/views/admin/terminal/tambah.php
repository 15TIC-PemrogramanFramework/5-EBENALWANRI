<style>
#imagePreview {
    width: 150px;
    height: 150px;
    background-position: center center;
    background-size: cover;
    -webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .3);
    display: inline-block;
}
</style>
<script type="text/javascript">
$(function() {
    $("#file").on("change", function()
    {
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support
        
        if (/^image/.test( files[0].type)){ // only image file
            var reader = new FileReader(); // instance of the FileReader
            reader.readAsDataURL(files[0]); // read the local file
            
            reader.onloadend = function(){ // set image data as background of div
                $("#imagePreview").css("background-image", "url("+this.result+")");
            }
        }
    });
});
</script>

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

      <form action="<?php echo base_url('index.php/admin/terminal/tambah') ?>" method="post">           
         <div class="col-md-6">
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
            <div class="form-group">
            <label>Nama Terminal</label>
              <input type="text" name="nama_terminal" class="form-control" placeholder="Nama Terminal">
            </div>  
            <div class="form-group">
            <label>Berangkat</label>
              <input type="text" name="berangkat" class="form-control" placeholder="Keberangkatan">
            </div>           
            <div class="form-group">
            <label>Tujuan</label>
              <input type="text" name="tujuan" class="form-control" placeholder="Tujuan">
            </div>   
            </div>       
            <div class="col-md-6">   
            <div class="form-group">
              <label>Upload Gambar</label>
                <input type="file" name="gambar" class="form-control" id="file">
                <div id="imagePreview"></div>
            </div>                 
            <div class="form-group">
            <label>Berangkat Map</label>
              <input type="text" name="berangkat_map" class="form-control" placeholder="URL Map Keberangakatan">
            </div>   
            <div class="form-group">
            <label>Tujuan Map</label>
              <input type="text" name="tujuan_map" class="form-control" placeholder="URL Map Tujuan">
            </div>              
            </div>
            <div class="col-md-12">            
            <div class="form-group input-group">
              <input type="submit" name="submit" value="Simpan" class="btn btn-primary btn-md">
            </div>               
            </div>                                           
          </form>