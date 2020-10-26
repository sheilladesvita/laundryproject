<!DOCTYPE html>
<html>
<head>
	<title>Menghubungkan codeigniter dengan database mysql</title>
</head>
<body>
	<h1>TABLE EMPLOYEE</h1>
	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Pekerjaan</th>
		</tr>
		<?php foreach($users as $u){ ?>
		<tr>
			<td><?php echo $u->nama ?></td>
			<td><?php echo $u->alamat ?></td>
			<td><?php echo $u->pekerjaan ?></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>