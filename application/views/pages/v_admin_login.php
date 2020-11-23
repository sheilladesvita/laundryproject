<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Login</title>

		<!-- Bootstrap core CSS -->
		<link
			rel="stylesheet"
			href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
			integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
			crossorigin="anonymous"
		/>

		<!-- Google font -->
		<link
			href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
			rel="stylesheet"
		/>
		<!-- Fontawesome -->
		<link
			rel="stylesheet"
			href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
			integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp"
			crossorigin="anonymous"
		/>

		<!-- Custom styles for this template -->
		<link
			href="<?php echo base_url();?>assets/css/admin.css"
			rel="stylesheet"
		/>
		<link
			href="<?php echo base_url();?>assets/css/style.css"
			rel="stylesheet"
		/>
	</head>

	<body>
		<div class="h-10 align-items-center justify-content-center">
			<div class="card d-flex bg-default-blue mt-9" style="width: 25rem">
				<div class="d-flex p-absolute justify-content-center w-100">
					<div class="circle-8rem"></div>
				</div>
				<form class="form mb-5 mx-4 mt-9" autocomplete="off">
					<div class="input-group">
						<input
							type="text"
							name="email"
							id="email-login"
							autocomplete="off"
							class="bg-default-blue admin"
							required
						/>
						<label for="email" class="input-label">
							<span class="label-content">Alamat Email</span>
						</label>
					</div>
					<div class="input-group">
						<input
							type="password"
							name="password"
							id="password-login"
							class="bg-default-blue admin"
							autocomplete="off"
							required
						/>
						<label for="password" class="input-label">
							<span class="label-content">Kata Sandi</span>
						</label>
					</div>
					<button
						type="submit"
						class="btn btn-block bg-default-yellow text-default-white btn-auth"
					>
						LOG IN
					</button>
				</form>
				<div class="text-center text-10 text-default-white mb-5">
					<a href="#" class="color-inherit">Forgot password?</a>
				</div>
			</div>
		</div>

		<script
			src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
			integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
			crossorigin="anonymous"
		></script>
		<script
			src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
			integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
			crossorigin="anonymous"
		></script>

		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
			integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
			crossorigin="anonymous"
		></script>
	</body>
</html>
