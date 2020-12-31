<main>
	<div class="container text-center width-form-25">
		<form class="form py-5" autocomplete="off">
			<div class="input-group">
				<div class="form-border-bottom">
					<select name="service" id="service" class="service" required>
						<option value="" selected>Pilih layanan:</option>
						<?php foreach($service as $row):?>
						<option value="<?php echo $row->id_service;?>"><?php echo $row->nama_service;?></option>
						<?php endforeach;?>
					</select>
				</div>
			</div>
			<div class="input-group">
				<div class="form-border-bottom">
					<select name="service_item" id="service_item" class="service_item" required>
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
			<input 
				class="btn btn-block bg-default-sky text-white btn-auth"
				style="padding:10px"
				type="button" 
				name="add_service" 
				id="add_service" 
				value="ADD">
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
				<?php 
					$max = null;
					if(isset($_SESSION['cart'])){
						$max=sizeof($_SESSION['cart']);
						$i = 0;
						$count = 0;
						while($count<$max){
							if(isset($_SESSION['cart'][$i])){
				?>
				<tr>
					<td class="text-center"><?php echo $_SESSION['cart'][$i]['serviceitem_name'];?></td>
					<td class="text-center"><?php echo $_SESSION['cart'][$i]['price'];?></td>
					<td class="text-center"><?php echo $_SESSION['cart'][$i]['service_name'];?></td>
					<td class="text-center"><?php echo $_SESSION['cart'][$i]['qty'];?></td>
					<td class="text-center"><?php echo $_SESSION['cart'][$i]['qty']*$_SESSION['cart'][$i]['price'];?></td>
					</td><td class='text-center'><div class='btn-group' role='group' aria-label='Basic example'>
                    <a	class='btn btn-sm bg-default-blue text-default-white btn-blue-hover' href='<?php echo base_url();?>viewonly/delete_cart/<?php echo $_SESSION['cart'][$i]['serviceitem_id'];?>'><i class='fas fa-trash-alt mx-2'></i></a></div>
                    </td>
				</tr>
				<?php
								$count++;
							}
							$i++;
						}
					}
				?>
			</tbody>
		</table>
		<div class="container text-center width-form-25">
			<a 
				href="#"
				class="btn btn-block bg-default-sky text-default-white btn-auth"
				type="button"
				id="checkout"
			>
				CHECKOUT <i class="fas fa-shopping-cart"></i>
			</a>
		</div>
	</div>

	<div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog">
		
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-body">
				<div class="container">
					<p>Isi dulu keranjangnya, yuk.</p>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
		
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
	<!-- <script src="<?php echo base_url()?>assets/js/order-page.js"
	></script> -->
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
			
			$("#add_service").click(function(){
				var service_id = $("select.service").children("option:selected").val();
				var service_name = $("select.service").children("option:selected").text();
				var serviceitem_id = $("select.service_item").children("option:selected").val();
				var serviceitem_name = $("select.service_item").children("option:selected").text();
				var qty = $("#quantity").val();
				
				$.ajax({
					url : "<?php echo site_url('viewonly/cart');?>",
					method : "POST",
					data : {
							service_id: service_id,
							service_name: service_name,
							serviceitem_id: serviceitem_id,
							serviceitem_name: serviceitem_name,
							qty: qty
							},
					async : true,
					dataType : 'json',
					success: function(data){
						location.reload();
					}
				});
				return false;
			});

			$("#checkout").click(function(){
				var myvar='<?php echo $max;?>';;
				if(myvar==null || myvar==0){
					$("#myModal").modal();
				}else{
					var link = "<?php echo site_url('viewonly/checkout');?>";
					document.location.href = link;
				}
			});
		});
	</script>
</main>