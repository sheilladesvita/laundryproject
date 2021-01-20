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
					<th>Jenis Layanan</th>
					<th>Harga</th>
					<th>Jumlah</th>
					<th>Subtotal</th>
					<th></th>
				</tr>
			</thead>
			<tbody id="detail_cart">
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
					url : "<?php echo site_url('order/get_service_item');?>",
					method : "POST",
					data : {id: id},
					async : true,
					dataType : 'json',
					success: function(data){
						var html = '';
						var i;
						for(i=0; i<data.length; i++){
                            html += '<option value='+data[i].id_serviceitem+' data-price="'+data[i].harga+'">'+data[i].nama_serviceitem+'</option>';
						}
                        $('#service_item').html(html);
					}
				});
				return false;
			});
			
			$("#add_service").click(function(){
				var id_service = $("select.service").children("option:selected").val();
				var name_service = $("select.service").children("option:selected").text();
				var id_serviceitem = $("select.service_item").children("option:selected").val();
				var name_serviceitem = $("select.service_item").children("option:selected").text();
				var price = $("select.service_item").children("option:selected").data("price");
                var qty = $("#quantity").val();
				
				$.ajax({
					url : "<?php echo base_url();?>order/add_to_cart",
					method : "POST",
					data : {
                        id_service: id_service,
                        name_service: name_service,
                        id_serviceitem: id_serviceitem,
                        name_serviceitem: name_serviceitem,
                        price: price,
						qty: qty
					},
					success: function(data){
                        $('#detail_cart').html(data);
					}
				});
			});
            
            $('#detail_cart').load("<?php echo base_url();?>order/load_cart");

			$(document).on('click','.delete_cart',function(){
                var row_id=$(this).attr("id");
                $.ajax({
                    url : "<?php echo base_url();?>order/delete_cart",
                    method : "POST",
                    data : {row_id : row_id},
                    success :function(data){
                        $('#detail_cart').html(data);
                    }
                });
            });

            $("#checkout").click(function(){
                $.ajax({
                    url: "<?php echo base_url();?>order/check_cart",
                    type: "GET",
                    dataType: 'json',
                    success: function(response){
                        if (response.success){
                            var link = "<?php echo site_url('order/checkout');?>";
                            document.location.href = link;
                        }else{
                            $("#myModal").modal();
                        }
                    }
                });
            });
		});
	</script>
</main>