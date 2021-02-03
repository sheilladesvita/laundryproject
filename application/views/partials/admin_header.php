<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<link
			rel="icon"
			href="<?php echo base_url();?>assets/images/als-icon.ico"
		/>

		<title>ALS Admin</title>

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

		<!-- Datatable -->
		<link
			rel="stylesheet"
			type="text/css"
			href="https://cdn.datatables.net/v/bs4/dt-1.10.22/datatables.min.css"
		/>

		<!-- Custom styles for this template -->
		<link
			href="<?php echo base_url();?>assets/css/admin.css"
			rel="stylesheet"
		/>
	</head>

	<body>
		<nav class="navbar navbar-expand-lg
			<?php if($active_link == "home" || $active_link == "tentang_kami") { echo 'fixed-top bg-transparent text-default-white'; } else { echo 'sticky-top bg-default-white text-default-black shadow-sm'; }?> justify-content-start" >
		<button
			class="navbar-toggler inherit-color"
			type="button"
			data-toggle="collapse"
			data-target="#navbar-link"
			aria-controls="navbar-link"
			aria-expanded="false"
			aria-label="Toggle navigation"
		>
			<i id="collapse-bar-btn" class="fas fa-bars"></i>
		</button>
		<a
			class="navbar-brand hideable-brand p-0 m-0"
			href="<?php echo base_url();?>"
		>
			<img
			class="logo-image"
			src="<?php echo base_url();?>assets/images/als logo.png"
			class="img-fluid"
		/></a>

		<div class="collapse navbar-collapse inherit-bg" id="navbar-link">
			<div class="flex-c justify-content-center">
			<ul class="navbar-nav text-center text-uppercase">
				<li
				class="nav-item nav-item-bg <?php if($active_link == 'pesanan') echo 'active' ?>"
				>
				<a
					class="nav-link nav-btn color-inherit"
					href="<?php echo base_url();?>admin/index"
					>Pesanan</a
				>
				</li>
				<li
				class="nav-item nav-item-bg <?php if($active_link == 'member') echo 'active' ?>"
				>
				<a
					class="nav-link nav-btn color-inherit"
					href="<?php echo base_url();?>admin/member"
					>Member</a
				>
				</li>
				<li class="nav-item nav-item-bg
				<?php if($active_link == "layanan") echo "active" ?>">
					<a
					class="nav-link nav-btn color-inherit"
					href="<?php echo base_url();?>admin/layanan"
					>Layanan</a
					>
				</li>
				<li class="nav-item nav-item-bg
				<?php if($active_link == "promo") echo "active" ?>">
					<a
					class="nav-link nav-btn color-inherit"
					href="<?php echo base_url();?>admin/promo"
					>Promo</a
					>
				</li>
			</ul>
			</div>
			<div class="dropdown">
				<button
					class="btn bg-transparent dropdown-toggle"
					type="button"
					id="dropdownMenuButton"
					data-toggle="dropdown"
					aria-haspopup="true"
					aria-expanded="false"
				>
					<i class="fas fa-user-circle"></i>
				</button>
				<div
					class="dropdown-menu dropdown-menu-right"
					aria-labelledby="dropdownMenuButton"
				>
					<a class="dropdown-item text-default-light-important" href="#"
						><i class="fas fa-user-cog"></i> Ganti Password</a
					>
					<!-- <a class="dropdown-item text-default-light-important" href="#"
						><i class="fas fa-user-plus"></i> Buat Akun Admin</a
					> -->
					<a class="dropdown-item text-default-light-important" href="<?php echo base_url('admin/logout')?>"
						><i class="fas fa-sign-out-alt"></i> Keluar</a
					>
				</div>
			</div>
		</nav>
	</body>
</html>