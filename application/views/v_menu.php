<?php
include "v_header.php"
?>
	<center><h1> DAFTAR MENU</h1></center>
	<center><?php echo anchor('crud/tambahmenu','Tambah Data'); ?></center>
	<table class="table table-dark table-striped" style="margin:20px auto;" border="1">
		<tr>
			<th>ID</th>
			<th>Nama Menu</th>
			<th>Harga</th>
			<th>Kategori</th>
			<th>Action</th>
		</tr>
		<?php 
		$no = 1;
		foreach($menu as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->nama ?></td>
			<td><?php echo $u->harga ?></td>
			<td><?php echo $u->kategori ?></td>
			<td>
                <?php echo anchor('crud/editmenu/'.$u->id,'Edit'); ?>
				<?php echo anchor('crud/hapusmenu/'.$u->id,'Hapus'); ?>		
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>