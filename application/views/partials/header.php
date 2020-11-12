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

	</head>

	<body>
		<nav
			class="navbar navbar-expand-lg <?php if($active_link == "home") { echo "fixed-top bg-transparent text-default-white"; } else { echo "sticky-top bg-default-white text-default-black shadow-sm"; }?>"
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
			<a class="navbar-brand" href="<?php echo base_url();?>">
				<img
					class="logo-image"
					src="<?php echo base_url();?>assets/images/als logo.png"
					class="img-fluid"
			/></a>
			<div class="collapse navbar-collapse" id="navbar-link">
				<ul class="navbar-nav navbar-center text-uppercase">
					<li class="nav-item nav-item-bg <?php if($active_link == "home") echo "active" ?>">
						<a class="nav-link nav-btn color-inherit" href="<?php echo base_url();?>">Beranda</a>
					</li>
					<li class="nav-item nav-item-bg dropdown <?php if($active_link == "layanan") echo "active" ?>">
						<a
							class="nav-link nav-btn color-inherit d-inline-block"
							href="<?php echo base_url();?>viewonly/layanan"
							>Layanan
						</a>
						<a
							class="dropdown-toggle color-inherit d-inline-block padding-r-1-rem"
							id="navbarDropdown"
							role="button"
							data-toggle="dropdown"
							aria-haspopup="true"
							aria-expanded="false"
						></a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item text-default-light" href="<?php echo base_url();?>viewonly/layanan_satuan">Satuan</a>
							<a class="dropdown-item text-default-light" href="<?php echo base_url();?>viewonly/layanan_kiloan">Kiloan</a>
							<a class="dropdown-item text-default-light" href="<?php echo base_url();?>viewonly/layanan_member">Paket Member</a>
							<a class="dropdown-item text-default-light" href="<?php echo base_url();?>viewonly/layanan_masjid">Paket Masjid</a>
						</div>
					</li>
					<li class="nav-item nav-item-bg <?php if($active_link == "promo") echo "active" ?>">
						<a class="nav-link nav-btn color-inherit" href="<?php echo base_url();?>viewonly/promo">Promo</a>
					</li>
					<li class="nav-item nav-item-bg <?php if($active_link == "bantuan") echo "active" ?>">
						<a class="nav-link nav-btn color-inherit" href="<?php echo base_url();?>viewonly/about_us">Tentang Kami</a>
					</li>
				</ul>
			</div>
			<div
				class="btn-group text-uppercase"
				role="group"
				aria-label="Basic example"
			>
				<a class="btn btn-success btn-auth=modal" id="login-modal-btn" data-toggle="modal" data-target="#authModal">Masuk</a>
				<a class="btn btn-outline-success bg-default-white btn-auth=modal" id="register-modal-btn" data-toggle="modal" data-target="#authModal">Daftar Member</a>
			</div>
    </nav>
    
    <div class="modal fade" id="authModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <ul class="nav nav-tabs nav-fill nav-justified" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link auth-form" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">LOG IN</a>
              </li>
              <li class="nav-item">
                <a class="nav-link auth-form" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">REGISTER</a>
              </li>
            </ul>

            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade" id="login" role="tabpanel" aria-labelledby="login-tab">
                <form class="form m-3"  autocomplete="off">
                  <div class="input-group">
                    <input type="text" name="email" id="email" autocomplete="off" required/>
                    <label for="email" class="input-label">
                      <span class="label-content">Alamat Email</span>
                    </label>
                  </div>
                  <div class="input-group">
                    <input type="password" name="password" id="password" autocomplete="off" required/>
                    <label for="password" class="input-label">
                      <span class="label-content">Kata Sandi</span>
                    </label>
                  </div>
                  <button type="submit" class="btn btn-block bg-default-sky text-default-white btn-auth">LOG IN</button>
                </form>
              </div>

              <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                <form class="form m-3">
                  <div class="input-group">
                    <input type="text" name="nama" id="nama" autocomplete="off" required/>
                    <label for="nama" class="input-label">
                      <span class="label-content">Nama</span>
                    </label>
                  </div>
                  <div class="input-group">
                    <input type="text" name="email" id="email" autocomplete="off" required/>
                    <label for="email" class="input-label">
                      <span class="label-content">Alamat Email</span>
                    </label>
                  </div>
                  <div class="input-group">
                    <input type="password" name="password" id="password" autocomplete="off" required/>
                    <label for="pssword" class="input-label">
                      <span class="label-content">Kata Sandi</span>
                    </label>
                  </div>
                  <div class="input-group">
                    <input type="text" name="phone" id="phone" autocomplete="off" required/>
                    <label for="phone" class="input-label">
                      <span class="label-content">Nomor Telepon (Whatsapp)</span>
                    </label>
                  </div>
                  <div class="input-group">
                    <input type="text" name="address" id="address" autocomplete="off" required/>
                    <label for="address" class="input-label">
                      <span class="label-content">Alamat Rumah</span>
                    </label>
                  </div>
                  <button type="submit" class="btn btn-block bg-default-sky text-default-white btn-auth">REGISTER</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>