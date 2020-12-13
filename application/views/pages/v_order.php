<main>
	<div class="container text-center width-form-25">
		<form class="form py-5" autocomplete="off">
			<div class="input-group">
				<div class="form-border-bottom">
					<select name="service" id="service" required>
						<option value="" selected>Pilih layanan:</option>
						<?php foreach($service as $row):?>
						<option value="<?php echo $row->id_service;?>"><?php echo $row->nama_service;?></option>
						<?php endforeach;?>
					</select>
				</div>
			</div>
			<div class="input-group">
				<div class="form-border-bottom">
					<select name="service_item" id="service_item" required>
					<option>Pilih sub layanan:</option>
					</select>
				</div>
			</div>
			<div class="input-group">
				<div class="form-border-bottom">
					<div class="def-number-input number-input safari_only mb-0 w-100">
						<input class="quantity" min="1" id="quantity" name="quantity" value="1" type="number">
					</div>
				</div>
			</div>

			<button
				type="submit"
				class="btn btn-block bg-default-sky text-default-white btn-auth"
				name="add_service"
				id="add_service"
			>
				ADD
			</button>
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
					<th></th>
				</tr>
			</thead>

			<tbody>
				<tr>
					<td>Blazer/Sweater</td>
					<td class="text-center">12000</td>
					<td class="text-center">Laundry Satuan</td>
					<td class="text-center">1</td>
					<td class="text-center">12000</td>
					<td class="text-center">
						<div class="btn-group" role="group" aria-label="Basic example">
							<a
								class="btn btn-sm bg-default-blue text-default-white btn-blue-hover"
								href=""
							>
								<i class="fas fa-trash-alt mx-2"></i>
							</a>
						</div>
					</td>
				</tr>

				<tr>
					<td>Long Dress Pendek</td>
					<td class="text-center">20000</td>
					<td class="text-center">Laundry Satuan</td>
					<td class="text-center">2</td>
					<td class="text-center">40000</td>
					<td class="text-center">
						<div class="btn-group" role="group" aria-label="Basic example">
							<a
								class="btn btn-sm bg-default-blue text-default-white btn-blue-hover"
								href=""
							>
								<i class="fas fa-trash-alt mx-2"></i>
							</a>
						</div>
					</td>
				</tr>
			</tbody>
		</table>
		<div class="container text-center width-form-25">
			<a 
				href="<?php echo base_url();?>viewonly/checkout"
				class="btn btn-block bg-default-sky text-default-white btn-auth"
				type="submit"
			>
				CHECKOUT <i class="fas fa-shopping-cart"></i>
			</a>
		</div>
	</div>
	<script 
		type="text/javascript" 
		src="<?php echo base_url().'assets/js/jquery-3.3.1.js'?>"
	></script>
	<script
		type="text/javascript"
		src="https://cdn.datatables.net/v/bs4/dt-1.10.22/datatables.min.js"
	></script>
	<script 
		src="<?php echo base_url()?>assets/js/admin-page.js"
	></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#service').change(function(){ 
				var id=$(this).val();
				$.ajax({
					url : "<?php echo site_url('viewonly/get_service_item');?>",
					method : "POST",
					data : {id: id},
					async : true,
					dataType : 'json',
					success: function(data){
						var html = '';
						var i;
						for(i=0; i<data.length; i++){
							html += '<option value='+data[i].id_serviceitem+'>'+data[i].nama_serviceitem+'</option>';
						}
						$('#service_item').html(html);
					}
				});
				return false;
			});
		});
	</script>
</main>