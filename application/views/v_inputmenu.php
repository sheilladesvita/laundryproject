<?php
include "v_header.php"
?>
<center>
		<h3>Tambah data menu</h3>
	</center>
	<form action="<?php echo base_url(). 'index.php/crud/tambah_aksimenu'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>ID Menu</td>
				<td><input type="text" name="id"></td>
			</tr>
			<tr>
				<td>Nama Menu</td>
				<!-- <input type="hidden" name="id" value="<?php echo $u->id ?>"> -->
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td><input type="text" name="harga"></td>
			</tr>
			<tr>
				<td>Kategori</td>
				<td><input type="text" name="kategori"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>	
</body>
</html>