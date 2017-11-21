<script src="<?php echo base_url() ?>assets/tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
	file_browser_callback: function(field, url, type, win) {
        tinyMCE.activeEditor.windowManager.open({
            file: '<?php echo base_url() ?>assets/kcfinder/browse.php?opener=tinymce4&field=' + field + '&type=' + type,
            title: 'KCFinder',
            width: 700,
            height: 500,
            inline: true,
            close_previous: false
        }, {
            window: win,
            input: field
        });
        return false;
    },
    selector: "#isi",
	height: 250,
    plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
});
</script>

<style>
#imagePreview {
    margin-top: 7px;
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

<form action="<?php echo base_url('index.php/admin/users/edit_member/'.$member['id_member']) ?>" method="post" enctype="multipart/form-data">

<div class="col-md-6">
	<div class="form-group">
    	<label>Nama Depan</label>
        <input type="text" name="nama_depan" class="form-control" value="<?php echo $member['nama_depan'] ?>" required placeholder="Nama depan">
    </div>
    <div class="form-group">
        <label>Nama Belakang</label>
        <input type="text" name="nama_belakang" class="form-control" value="<?php echo $member['nama_belakang'] ?>" required placeholder="Nama Belakang">
    </div>
    <div class="form-group">
        <label>Telepone</label>
        <input type="number" name="telepone" class="form-control" value="<?php echo $member['telepone'] ?>" required placeholder="Telepone">
    </div>
    <div class="form-group">
        <label>Tangga Lahir</label>
        <input type="text" name="ttl" class="form-control" value="<?php echo $member['ttl'] ?>" required placeholder="Tanggal Lahir">
    </div>   
    <div class="form-group">
        <label>Alamat</label>
        <textarea name="alamat" class="form-control" required placeholder="Alamat"><?php echo $member['alamat'];?></textarea>
    </div>                      
</div>
<div class="col-md-6">
    <div class="form-group">
        <label>Upload Cover</label>
      <input type="file" name="avatar" class="form-control" id="file">
        <div id="imagePreview"></div>
    </div>
    <h3>Data login</h3>
    <hr>
    <div class="form-group">
        <label>Username</label>
        <input type="text" name="username" class="form-control" value="<?php echo $member['username'] ?>" required placeholder="Username">
    </div> 
    <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" class="form-control" value="<?php echo $member['username'] ?>" required placeholder="Username">
    </div>      
    <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" class="form-control" value="<?php echo set_value('password') ?>" placeholder="Password">
    </div>        
</div>

<div class="col-md-12">
    
    <div class="form-group">
	<input type="submit" name="submit" value="Create" class="btn btn-primary">
    <input type="reset" name="reset" value="Reset" class="btn btn-default">
    </div>
</div>

</form>
