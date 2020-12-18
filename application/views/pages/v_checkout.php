<main>
	<div class="container text-center width-form-25">
		<form class="form py-5" autocomplete="off">
			<div class="input-group">
				<input type="text" name="name" id="name" autocomplete="off" required />
				<label for="name" class="input-label">
					<span class="label-content">Nama</span>
				</label>
			</div>
			<div class="input-group">
				<input
					type="email"
					name="email"
					id="email"
					autocomplete="off"
					required
				/>
				<label for="email" class="input-label">
					<span class="label-content">Email</span>
				</label>
			</div>
			<div class="input-group">
				<input
					type="text"
					name="phone-number"
					id="phone-number"
					autocomplete="off"
					required
				/>
				<label for="phone-number" class="input-label">
					<span class="label-content">Nomor Telepon (Whatsapp)</span>
				</label>
			</div>
			<div class="input-group">
				<input
					type="text"
					name="alamat"
					id="alamat"
					autocomplete="off"
					required
				/>
				<label for="alamat" class="input-label">
					<span class="label-content">Alamat</span>
				</label>
			</div>
			<!-- <button
				type="submit"
				href="<?php echo base_url();?>viewonly/buy"
				class="btn btn-block bg-default-sky text-default-white btn-auth"
			>
				SEND ORDER <i class="fas fa-shopping-cart"></i>
			</button> -->
			<div class="container text-center">
				<a 
					href="<?php echo base_url();?>viewonly/buy"
					class="btn btn-block bg-default-sky text-default-white btn-auth"
					type="submit"
				>
					SEND ORDER <i class="fas fa-shopping-cart"></i>
				</a>
			</div>
		</form>
	</div>
	<div class="container">
		<div class="text-24 text-default-medium">Daftar Pesanan</div>
		<table
			id="order-table"
			class="table table-striped table-sm dt-responsive table-responsive-sm"
			style="width: 100%"
		>
			<thead>
				<tr class="text-center">
					<th>Nama Layanan</th>
					<th>Harga</th>
					<th>Jenis Layanan</th>
					<th>Jumlah</th>
					<th>Total</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					$max=sizeof($_SESSION['cart']);
					for($i=0; $i<$max; $i++) {
				?>
				<tr>
					<td class="text-center"><?php echo $_SESSION['cart'][$i]['serviceitem_name'];?></td>
					<td class="text-center"><?php echo $_SESSION['cart'][$i]['price'];?></td>
					<td class="text-center"><?php echo $_SESSION['cart'][$i]['service_name'];?></td>
					<td class="text-center"><?php echo $_SESSION['cart'][$i]['qty'];?></td>
					<td class="text-center"><?php echo $_SESSION['cart'][$i]['qty'];?></td>
				</tr>
				<?php
					}
				?>
			</tbody>
		</table>
	</div>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.3.1.js'?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap/bootstrap.js'?>"></script>
</main>