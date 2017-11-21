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

<table class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>
    <tr>
        <th>#</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Subjek</th>
        <th>Isi</th>
        <th>Aksi</th>
    </tr>
</thead>
<tbody>
	<?php $i=1; foreach($kontak as $kontak) { ?>
    <tr class="odd gradeX">
        <td><?php echo $i; ?></td>
        <td><?php echo $kontak['nama']; ?></td>
        <td><?php echo $kontak['email']; ?></td>
        <td><?php echo $kontak['subjek']; ?></td>
        <td><?php echo $kontak['isi'] ?></td>
        <td class="center">
        <a href="<?php echo base_url('index.php/admin/kontak/lihat/'.$kontak['id_kontak']) ?>" class="btn btn-primary"><i class="fa fa-eye"></i></a>

        <a href="<?php echo base_url('index.php/admin/kontak/delete/'.$kontak['id_kontak']) ?>" class="btn btn-danger" onClick="return confirm('Yakin ingin menghapus pesan ini?')"><i class="fa fa-trash"></i></a>
       
        </td>
    </tr>
    <?php $i++; } ?>
</tbody>
</table>