<?php
include "v_header.php"
?>
<body>
	<center>
		<h3>Edit Data</h3>
	</center>
	<?php foreach($tenan as $u){ ?>
	<form action="<?php echo base_url(). 'index.php/crud/update'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Nama Tenan</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $u->id ?>">
					<input type="text" name="nama" value="<?php echo $u->nama_tenan ?>">
				</td>
			</tr>
			<tr>
				<td>Nama Pemilik</td>
				<td><input type="text" name="nama" value="<?php echo $u->nama_pemilik ?>"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $u->alamat ?>"></td>
			</tr>
			<tr>
				<td>No Telepon</td>
				<td><input type="text" name="telepon" value="<?php echo $u->nomor_telepon ?>"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email" value="<?php echo $u->email ?>"></td>
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