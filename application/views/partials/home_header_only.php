<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, shrink-to-fit=no"
		/>
		<meta name="description" content="" />
		<meta name="author" content="" />
		<link
			rel="icon"
			href="<?php echo base_url();?>assets/images/als-icon.ico"
		/>

		<title>ALS Laundry Pickup Delivery</title>

		<!-- Bootstrap core CSS -->
		<!-- <link href="<?php echo base_url();?>assets/css/bootstrap/bootstrap.min.css" rel="stylesheet"/> -->
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
			href="<?php echo base_url();?>assets/css/style.css"
			rel="stylesheet"
		/>

		<!-- Bootstrap core CSS -->
		<!-- <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->

		<!-- Custom styles for this template -->
		<!-- <link href="jumbotron.css" rel="stylesheet"> -->
	</head>

	<body>
		<nav
			class="navbar navbar-expand-lg fixed-top bg-transparent text-default-white"
		>
			<button
				class="navbar-toggler"
				type="button"
				data-toggle="collapse"
				data-target="#navbar-link"
				aria-controls="navbar-link"
				aria-expanded="false"
				aria-label="Toggle navigation"
			>
				<i class="fas fa-bars"></i>
			</button>
			<a class="navbar-brand" href="/laundryproject">
				<img
					class="logo-image"
					src="<?php echo base_url();?>assets/images/als logo.png"
					class="img-fluid"
			/></a>
			<div class="collapse navbar-collapse" id="navbar-link">
				<ul class="navbar-nav text-default-white navbar-center text-uppercase">
					<li class="nav-item nav-item-bg active">
						<a class="nav-link nav-btn" href="/laundryproject">Beranda</a>
					</li>
					<li class="nav-item nav-item-bg dropdown">
						<a
							class="nav-link nav-btn d-inline-block active"
							href="<?php echo base_url();?>viewonly/layanan"
							>Layanan
						</a>
						<a
							class="dropdown-toggle text-default-white d-inline-block padding-r-1-rem"
							id="navbarDropdown"
							role="button"
							data-toggle="dropdown"
							aria-haspopup="true"
							aria-expanded="false"
						></a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="#">Kiloan</a>
							<a class="dropdown-item" href="#">Satuan</a>
						</div>
					</li>
					<li class="nav-item nav-item-bg">
						<a class="nav-link nav-btn" href="contact">Promo</a>
					</li>
					<li class="nav-item nav-item-bg">
						<a class="nav-link nav-btn" href="contact">Bantuan</a>
					</li>
				</ul>
			</div>
			<div
				class="btn-group text-uppercase"
				role="group"
				aria-label="Basic example"
			>
				<a class="btn btn-success">Masuk</a>
				<a class="btn btn-outline-success bg-default-white">Daftar Member</a>
			</div>
		</nav>

		<div class="bg-image">
			<div class="main-banner">
				<div class="d-block text-center">
					<div class="text-default-white text-32 text-bold font-italic">
						Super Fast. Super Clean. Super Fresh.
					</div>
					<div class="text-default-yellow text-14">Some short slogan</div>
				</div>
				<a
					class="btn-banner text-decoration-none text-default-yellow font-italic text-18 text-semi-bold"
					href="#"
					>LAUNDRY NOW</a
				>
			</div>
		</div>