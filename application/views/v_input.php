<?php
include "v_header.php"
?>
	<center>
		<h3>Tambah data baru</h3>
	</center>
	<form action="<?php echo base_url(). 'index.php/crud/tambah_aksi'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>ID Tenan</td>
				<td><input type="text" name="id"></td>
			</tr>
			<tr>
				<td>Nama Tenan</td>
				<td><input type="text" name="nama_tenan"></td>
			</tr>
			<tr>
				<td>Nama Pemilik</td>
				<td><input type="text" name="nama_pemilik"></td>
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
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>	
</body>
</html>