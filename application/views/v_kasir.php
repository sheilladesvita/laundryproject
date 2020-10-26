<html>
<head>
	<title>KELOLA DATA</title>
<?php

include "v_header.php"
?>
</head>
<body>

	<center><h1> DATA KASIR</h1></center>
	<center><?php echo anchor('crud/tambahkasir','Tambah Data'); ?></center>
	<table class="table table-dark table-striped" style="margin:20px auto;" border="1">
		<tr>
			<th>No</th>
            <th>Nama Kasir</th>
			<th>Alamat</th>
            <th>No Telepon</th>
            <th>Email</th>
			<th>Status</th>
			<th>Action</th>
		</tr>
		<?php 
		$no = 1;
		foreach($kasir as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
            <td><?php echo $u->nama_kasir ?></td>
			<td><?php echo $u->alamat ?></td>
            <td><?php echo $u->nomor_telepon ?></td>
            <td><?php echo $u->email ?></td>
			<td><?php echo $u->status ? 'active' : 'inactive'; ?></td>
			<td>
                <?php echo anchor('crud/editkasir/'.$u->id,'Edit'); ?>
				<!-- <?php echo anchor('crud/hapus/'.$u->id,'Hapus'); ?> -->
				<a href="<?php echo site_url('crud/updatestatus/'.$u->id); ?>" onclick="return confirm('Are you sure?')">Hapus</a>		
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>
