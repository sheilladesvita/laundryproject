<html>
<head>
	<title>Input Data Mahasiswa</title>
</head>
<body>
	
	<form action="<?php echo base_url(). 'index.php/c_mahasiswa2/simpan'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Nim</td>
				<td><input type="text" name="Nim"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="Nama"></td>
			</tr>
			<tr>
				<td>Umur</td>
				<td><input type="text" name="Umur"></td>
			</tr>
            <tr>
				<td>Foto</td>
				<td><input type="file" name="Foto"></td>
			</tr>
			<tr>
				<td>kodejurusan</td>
				<td><input type="text" name="kodejurusan"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Submit"></td>
			</tr>
		</table>
	</form>	
</body>
</html>