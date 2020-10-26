<?php
include "v_header.php"
?>	
<center>
		<h3>Edit Menu</h3>
	</center>
	<?php foreach($menu as $u){ ?>
	<form action="<?php echo base_url(). 'index.php/crud/updatemenu'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Nama</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $u->id ?>">
					<input type="text" name="nama" value="<?php echo $u->nama ?>">
				</td>
			</tr>
			<tr>
				<td>Harga</td>
				<td><input type="text" name="harga" value="<?php echo $u->harga ?>"></td>
			</tr>
			<tr>
				<td>Kategori</td>
				<td><input type="text" name="kategori" value="<?php echo $u->kategori ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>	
	<?php } ?>
</body>
</html>