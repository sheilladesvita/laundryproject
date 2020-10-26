<?php
include "v_header.php"
?>
<center>
		<h3>Tambah data baru</h3>
	</center>
	<form action="<?php echo base_url(). 'index.php/crud/tambah_aksikasir'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>ID Kasir</td>
				<td><input type="text" name="id"></td>
			</tr>
			<tr>
				<td>Nama Kasir</td>
				<!-- <input type="hidden" name="id" value="<?php echo $u->id ?>"> -->
				<td><input type="text" name="nama_kasir"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td>No Telepon</td>
				<td><input type="text" name="telepon"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email"></td>
				<!-- <td><input type="hidden" name="status"></td> -->
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>	
</body>
</html>