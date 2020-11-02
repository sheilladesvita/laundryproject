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
			<a class="navbar-brand" href="#">
				<img
					class="logo-image"
					src="<?php echo base_url();?>assets/images/als logo.png"
					class="img-fluid"
			/></a>
			<!-- <div class="collapse navbar-collapse"></div> -->
			<div class="collapse navbar-collapse" id="navbar-link">
				<ul class="navbar-nav text-default-white navbar-center text-uppercase">
					<li class="nav-item nav-item-bg active">
						<a class="nav-link nav-btn" href="#">Beranda</a>
					</li>
					<li class="nav-item nav-item-bg dropdown">
						<a
							class="nav-link nav-btn dropdown-toggle"
							href="#"
							id="navbarDropdown"
							role="button"
							data-toggle="dropdown"
							aria-haspopup="true"
							aria-expanded="false"
						>
							Layanan
						</a>
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

		<!-- <div class="container">
			<h3>On Scroll Sticky Header</h3>
			<p>
				The header will stick to the top when you reach its scroll position.
			</p>
			<p>Scroll back up to remove the sticky effect.</p>
			<p>
				Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum
				definitiones no quo, maluisset concludaturque et eum, altera fabulas ut
				quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert
				laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no
				molestiae voluptatibus.
			</p>
		</div> -->

		<footer class="text-12 text-default-white">
			<div class="container-fluid">
				<div class="row text-default-black m-0">
					<div class="col-sm-3 text-left">
						<div
							class="footer-segment-header text-default-black text-14 text-capitalize text-semi-bold"
						>
							contact us
						</div>
						<div class="footer-segment-body text-default-black">
							<ul class="p-0">
								<li class="unstyled-list my-3">
									<i class="far fa-map"></i>
									<span
										>Ruko Jl. Babakan Laksana No. 121 (Depan Resto d'DSL)</span
									>
								</li>
								<li class="unstyled-list my-3">
									<i class="fas fa-phone-alt"></i>
									<span>+62 815 8413 6637</span>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 text-left">
						<div
							class="footer-segment-header text-default-black text-14 text-capitalize text-semi-bold"
						>
							location
						</div>
						<div class="footer-segment-body">
							<div id="map"></div>
						</div>
					</div>
					<div class="col-sm-3 text-left">
						<div
							class="footer-segment-header text-default-black text-14 text-capitalize text-semi-bold"
						>
							instagram's image
						</div>
						<div class="footer-segment-body text-default-black">Address</div>
					</div>
					<div class="col-sm-3text-left">
						<div
							class="footer-segment-header text-default-black text-14 text-capitalize text-semi-bold"
						>
							menu
						</div>
						<div class="footer-segment-body text-default-black">
							<ul class="p-0">
								<li class="unstyled-list my-3"><a class="" href="">News</a></li>
								<li class="unstyled-list my-3"><a class="" href="">Blog</a></li>
								<li class="unstyled-list my-3"><a class="" href="">FAQs</a></li>
								<li class="unstyled-list my-3">
									<a class="" href="">About Us</a>
								</li>
								<li class="unstyled-list my-3">
									<a class="" href="">Terms of Service</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="copyright bg-default-blue text-center">
				&copy; Company 2017-2018
			</div>
		</footer>

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
		<script
			src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCaX28G01ffhZrkfjj4mq4NgQofSncL-9w&callback=initMap&libraries=&v=weekly"
			defer
		></script>

		<script src="<?php echo base_url()?>assets/js/maps.js"></script>
		<script src="<?php echo base_url()?>assets/js/script.js"></script>
		<!-- <script src="<?php echo base_url();?>assets/js/bootstrap/bootstrap.min.js"></script> -->
	</body>
</html>
