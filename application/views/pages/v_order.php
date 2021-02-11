<main>
	<div class="container text-center width-form-25 py-5">
		<div class="card px-3 bg-default-white">
			<form class="form py-3" autocomplete="off">
				<div class="input-group">
					<input
						type="text"
						name="name"
						id="name"
						autocomplete="off"
						placeholder=" "
						required
					/>
					<label for="name" class="input-label">
						<span class="label-content">Nama</span>
					</label>
				</div>
				<div class="input-group">
					<input
						type="text"
						name="email"
						id="email"
						autocomplete="off"
						placeholder=" "
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
						placeholder=" "
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
					<select required>
						<option value="">Pilih layanan:</option>
						<option value="0">Cuci satuan</option>
						<option value="1">Cuci normal</option>
						<option value="2">Cuci 2 hari</option>
						<option value="3">Setrika normal</option>
						<option value="4">Cuci kering</option>
						<option value="5">Special express 1 hari</option>
						<option value="6">Paket member smart</option>
						<option value="7">Paket masjid/mushola</option>
					</select>
					<div class="form-border-bottom"></div>
				</div>

				<button
					type="submit"
					class="btn btn-block bg-default-sky text-default-white btn-auth"
				>
					SEND ORDER <i class="fas fa-shopping-cart"></i>
				</button>
			</form>
		</div>
	</div>
</main>
