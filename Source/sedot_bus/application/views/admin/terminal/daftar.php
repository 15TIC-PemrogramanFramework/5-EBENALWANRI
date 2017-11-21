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
<p><a class="btn btn-primary" href="<?php echo base_url('index.php/admin/terminal/tambah');?>"><i class="fa fa-plus"></i> Tambah Terminal</a></p>
</div>
<!-- End Modals-->

<table class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>
    <tr>
        <th>#</th>
        <th>Nama Terminal</th>
        <th>Kota</th>
        <th>Keberangkatan</th>
        <th>Tujuan</th>
        <th>Aksi</th>
    </tr>
</thead>
<tbody>
	<?php $i=1; foreach($terminal as $terminal) { ?>
    <tr class="odd gradeX">
        <td><?php echo $i; ?></td>
        <td><?php echo $terminal['nama_terminal']?></td>
        <td><?php echo $terminal['nama_kota']?></td>
        <td>
            <?php echo $terminal['berangkat'];?><br>
            <small><a href="<?php echo $terminal['berangkat_map'];?>">Lihat Map</a></small> 
        </td>
        <td>
            <?php echo $terminal['tujuan'];?><br>
            <small><a href="<?php echo $terminal['tujuan_map'];?>">Lihat Map</a></small> 
        </td>        
        <td class="center">
        <a href="<?php echo base_url('index.php/admin/terminal/edit/'.$terminal['id_terminal']) ?>" class="btn btn-primary"><i class="fa fa-pencil"></i></a>

        <a href="<?php echo base_url('index.php/admin/terminal/delete/'.$terminal['id_terminal']) ?>" class="btn btn-danger" onClick="return confirm('Yakin ingin menghapus kota ini?')"><i class="fa fa-trash"></i></a>
       
        </td>
    </tr>
    <?php $i++; } ?>
</tbody>
</table>