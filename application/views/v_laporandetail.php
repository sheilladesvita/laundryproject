<head>
	<title>KELOLA DATA</title>
<?php
include "v_header.php"
?>
</head>
<body>
	<center><h1> LAPORAN TENAN </h1></center>
	<!-- <center><?php echo anchor('crud/join'); ?></center> -->
	<table class="table table-striped" style="margin:20px auto;" border="1">
		<tr>
			<th>ID Pemesanan</th>
			<th>Nama Menu</th>
			<th>Qty</th>
			<th>harga</th>
			<th>Nama Kasir</th>
			<th>Tanggal Pesan</th>
			<th>Tanggal Bayar</th>
			<th>Status</th>
		</tr>       
		<?php 
		// $no = 1;
		foreach($pemesanan as $u){ 
		?>
         
		<tr>
		<td><?php echo $u['pemesanan_id']?></td>
		<td><?php echo $u['menu_id']?></td>
		<td><?php echo $u['qty']?></td>
        <td><?php echo $u['harga']?></td>
		<td><?php echo $u['kasir_id']?></td>
		<td><?php echo $u['tgl_bayar']?></td>
		<td><?php echo $u['tgl_pesan']?></td>
        <td><?php echo $u['status']?></td>
			<!-- <td>
                <?php echo anchor('crud/join/'.$u->id,'DETAIL'); ?>
			</td> -->
		</tr>
		<?php } ?>
	</table>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>