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
			<div class="input-group">
				<div class="form-border-bottom">
					<select>
						<option value="-1" selected>Pilih layanan:</option>
						<option value="0">Volvo</option>
						<option value="1">Audi</option>
						<option value="2">BMW</option>
						<option value="3">Citroen</option>
						<option value="4">Ford</option>
						<option value="5">Honda</option>
						<option value="6">Jaguar</option>
						<option value="7">Land Rover</option>
						<option value="8">Mercedes</option>
						<option value="9">Mini</option>
						<option value="10">Nissan</option>
						<option value="11">Toyota</option>
					</select>
				</div>
			</div>

			<button
				type="submit"
				class="btn btn-block bg-default-sky text-default-white btn-auth"
			>
				SEND ORDER <i class="fas fa-shopping-cart"></i>
			</button>
		</form>
	</div>
</main>
