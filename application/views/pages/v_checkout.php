<main>
	<div class="container text-center width-form-25">
		<form class="form py-5" autocomplete="off" action="<?php echo base_url();?>order/buy" method="post">
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
			<div class="input-group">
				<input 
					type="text"
					name="datepicker"
					id="datepicker"
					required
				/>
				<label for="datepicker" class="input-label">
					<span class="label-content">Tanggal Pickup</span>
				</label>
			</div>
			<div class="input-group">
				<div class="form-border-bottom">
					<select name="pay" id="pay" class="pay" required>
						<option>Pilih metode pembayaran:</option>
						<option value="Transfer">Transfer</option>
						<option value="COD">COD</option>
					</select>
				</div>
			</div>
			<div class="input-group">
				<input
					type="text"
					name="catatan"
					id="catatan"
					autocomplete="off"
				/>
				<label for="catatan" class="input-label">
					<span class="label-content">Catatan</span>
				</label>
			</div>
			<button
				type="submit"
				class="btn btn-block bg-default-sky text-default-white btn-auth"
			>
				SEND ORDER <i class="fas fa-shopping-cart"></i>
			</button>
		</form>
	</div>
	<script 
		type="text/javascript" 
		src="<?php echo base_url().'assets/js/jquery-3.3.1.js'?>"
	></script>
	<script src="<?php echo base_url()?>assets/js/bootstrap/bootstrap-datepicker.js"></script>
	<script type="text/javascript">
		$(document).ready(function () {
            var startdate = new Date(); 
            startdate.setDate(startdate.getDate() + 1); 

            $('#datepicker').datepicker({
                setDate: new Date(),
                autoclose:true,
                format: "yyyy-mm-dd"
            });

            $("#datepicker").datepicker("setDate", startdate);
            $("#datepicker").datepicker("setStartDate", startdate);
        });
	</script>
</main>