<main>
	<div class="container text-center width-form-25">
		<form class="form py-5" autocomplete="off" action="<?php echo base_url();?>viewonly/buy" method="post">
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
					placeholder="MM/DD/YYYY"
					required
				/>
				<label for="datepicker" class="input-label">
					<span class="label-content">Tanggal Pickup</span>
				</label>
			</div>
			<div class="input-group">
				<input
					type="text"
					name="catatan"
					id="catatan"
					autocomplete="off"
					required
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
	<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
	<script type="text/javascript">
		$(function() {
            $('input[name="datepicker"]').daterangepicker({
                singleDatePicker: true,
                showDropdowns: true,
                minYear: 1901,
                maxYear: parseInt(moment().format('YYYY'),10)
            }, function(start, end, label) {
                var years = moment().diff(start, 'years');
                alert("You are " + years + " years old!");
            });
        });
	</script>
</main>