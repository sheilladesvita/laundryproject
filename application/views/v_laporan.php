<head>
	<title>KELOLA DATA</title>
<?php
include "v_header.php"
?>
</head>
<body>
	<center><h1> LAPORAN PENJUALAN </h1></center>
	<!-- <center><?php echo anchor('crud/laporan'); ?></center> -->
	<table class="table table-striped" style="margin:20px auto;" border="1">
		<tr>
			<th>No</th>
            <th>Nama Tenan</th>
			<th>Action</th>
		</tr>
		<?php 
		$no = 1;
		foreach($tenan as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
            <td><?php echo $u->nama_tenan ?></td>
			<td>
                <?php echo anchor('crud/join/'.$u->id,'DETAIL'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>