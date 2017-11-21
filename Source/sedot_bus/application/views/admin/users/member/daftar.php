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


<div class="panel-body">
<p><a href="<?php echo base_url('index.php/admin/users/tambah_member');?>" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Admin</a></p>

<table class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>
    <tr>
        <th>#</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Username</th>
        <th>Telepone</th>
        <th>Tanggal Lahir</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
	<?php $i=1; foreach($member as $member) { ?>
    <tr class="odd gradeX">
        <td><?php echo $i; ?></td>
        <td><?php echo $member['nama_depan'].' '.$member['nama_belakang']; ?></td>
        <td><?php echo $member['email'] ?></td>
        <td><?php echo $member['username'] ?></td>
        <td><?php echo $member['telepone'] ?></td>
        <td><?php echo $member['ttl'] ?></td>

        <td class="center">
        <a href="<?php echo base_url('index.php/admin/users/edit_member/'.$member['id_member']) ?>" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
        <a href="<?php echo base_url('index.php/admin/users/hapus_member/'.$member['id_member']) ?>" class="btn btn-danger" onClick="return confirm('Yakin ingin menghapus member ini?')"><i class="fa fa-trash"></i></a>
       
        </td>
    </tr>
    <?php $i++; } ?>
</tbody>
</table>