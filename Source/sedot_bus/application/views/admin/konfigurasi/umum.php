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
    selector: "#about",
    height: 250,
    plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
});
</script>

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

<form action="<?php echo base_url('index.php/admin/konfigurasi/umum') ?>" method="post">

<input type="hidden" name="id_konfigurasi" value="<?php echo $site['id_konfigurasi'] ?>">


<div class="col-md-6">
	<h3>General Settings</h3><hr>
    <div class="form-group">
        <label>Website Name</label>
        <input type="text" name="nama_website" placeholder="Nama Website" value="<?php echo $site['nama_website'] ?>" required class="form-control">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" placeholder="Email" value="<?php echo $site['email'] ?>" required class="form-control">
    </div>
    <div class="form-group">
        <label>Telepon</label>
        <input type="number" name="telepone" placeholder="Telepon" value="<?php echo $site['telepone'] ?>" required class="form-control">
    </div>
    <div class="form-group">
        <label>Alamat</label>
        <textarea name="alamat" class="form-control"><?php echo $site['alamat'];?></textarea>        
    </div>        
</div>

<div class="col-md-6">
	<h3>Modul SEO (Search Engine Optimization)</h3><hr>
	<div class="form-group">
    <label>Keywords (Google search keywords)</label>
    <textarea name="keywords" rows="3" class="form-control" placeholder="Kata kunci / keywords"><?php echo $site['keywords'] ?></textarea>
    </div>
    
    <div class="form-group">
    <label>Metatext (Ex : Description)</label>
    <textarea name="metatext" rows="5" class="form-control" placeholder="Kode metatext"><?php echo $site['metatext'] ?></textarea>
    </div>

</div>
<div class="col-md-12">
    <div class="form-group">
    <label>About</label>
        <textarea name="tentang" placeholder="Tentang Website" class="form-control" value="about" id="about"><?php echo $site['tentang']; ?></textarea>
    </div>
</div>

<div class="col-md-12">
	<input type="submit" name="submit" value="Save" class="btn btn-primary">
    <input type="reset" name="reset" value="Reset" class="btn btn-default">
</div>

</form>