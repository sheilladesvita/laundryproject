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
		<link
			href="<?php echo base_url();?>assets/css/style.css"
			rel="stylesheet"
		/>
	</head>

	<body>
		<nav
			class="navbar sticky-top navbar-expand-lg navbar-light bg-default-white shadow"
		>
			<a
				class="navbar-brand mr-auto"
				href="<?php echo base_url(); ?>viewonly/admin"
			>
				<img
					class="logo-image"
					src="<?php echo base_url();?>assets/images/als logo.png"
					class="img-fluid"
			/></a>

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
					<a class="dropdown-item text-default-light-important" href="#"
						><i class="fas fa-user-plus"></i> Buat Akun Admin</a
					>
					<a class="dropdown-item text-default-light-important" href="#"
						><i class="fas fa-sign-out-alt" href="<?php echo base_url('c_login_admin/logout') ?>"></i> Keluar</a
					>
				</div>
			</div>
		</nav>

		<main class="my-4">
			<div class="container">
				<div class="row m-0">
					<div class="col-6 pl-0 pr-2">
						<a
							id="add-service"
							class="btn btn-block bg-transparent border-dashed-yellow text-default-yellow btn-outline-yellow-hover"
							data-toggle="collapse"
							href="#service-form"
							role="button"
							aria-expanded="false"
							aria-controls="service-form"
						>
							<i class="fas fa-plus"></i> Tambah Item Layanan
						</a>
					</div>
					<div class="col-6 pl-2 pr-0">
						<a
							id="add-promo"
							class="btn btn-block bg-transparent border-dashed-blue text-default-blue btn-outline-blue-hover"
							data-toggle="collapse"
							href="#promo-form"
							role="button"
							aria-expanded="false"
							aria-controls="promo-form"
						>
							<i class="fas fa-plus"></i> Tambah Item Promo
						</a>
					</div>
				</div>

				<div class="collapse pt-3 mb-3" id="service-form" action="<?php echo base_url(). 'index.php/ViewOnly/tambah_aksilayanan'; ?>" method="post">
					<div class="card card-body bg-default-white">
						<div class="text-18 text-default-semi-bold">Buat Layanan Baru</div>
						<hr />
						<form>
							<div class="form-row">
								<div class="col-sm-12 col-lg-3 py-1">
									<input
										type="text"
										name="nama_seviceitem"
										class="form-control mr-sm-2"
										id="inlineFormInputName2"
										placeholder="Nama Layanan"
									/>
								</div>

								<div class="col-sm-12 col-lg-3 py-1">
									<div class="input-group mr-sm-2">
										<div class="input-group-prepend">
											<div class="input-group-text">Harga</div>
										</div>
										<input
											type="number"
											name="harga"
											class="form-control"
											id="inlineFormInputGroupUsername2"
											step="500"
											placeholder="0"
											min="0"
											onkeypress="return onlyNumberKey(event)"
										/>
									</div>
								</div>

								<div class="col-sm-12 col-lg-3 py-1">
									<!-- <select id="inputState" class="form-control"> -->
										<!-- <option selected>Kategori Layanan</option> -->
										<select name="service" id="service" class="form-control" required>
										<option value="" selected>Kategori Layanan</option>
										<?php foreach($service as $row):?>
										<option value="<?php echo $row->id_service;?>"><?php echo $row->nama_service;?></option>
										<?php endforeach;?> 
									</select>
								</div>

								<div class="col-sm-12 col-lg-3 py-1">
									<button
										type="submit"
										class="btn btn-block text-default-white bg-default-yellow btn-yellow-hover"
									>
										Tambah Layanan
									</button>
								</div>
							</div>
						</form>
						<!-- <hr class="m-0 mt-3" /> -->
					</div>
				</div>

				<div class="collapse no-border pt-3 mb-3" id="promo-form">
					<div class="card card-body bg-default-white">
						<div class="text-18 text-default-semi-bold">Buat Promo Baru</div>
						<hr />
						pariatur cliche reprehenderit, enim eiusmod high life accusamus
						terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer
						labore wes anderson cred nesciunt sapiente ea proident.
					</div>
				</div>

				<div class="text-24 text-default-medium" >Daftar Layanan</div>
				
				<table
					id="service-table"
					class="table table-striped table-sm dt-responsive table-responsive-sm"
					style="width: 100%"
				>
					<thead>
						<tr class="text-center">
							<th class="text-default-medium-important">Nama Layanan</th>
							<th class="text-default-medium-important">Harga</th>
							<th class="text-default-medium-important">Jenis Layanan</th>
							<th class="text-default-medium-important">Ubah/Hapus</th>
						</tr>
					</thead>

					<tbody>
					<?php 
						// $no = 1;
						foreach($service as $u){ 
						?>
						<tr>
		
							<td><?php echo $u->nama_serviceitem ?></td>
							<td><?php echo $u->harga?></td>
							<td><?php echo $u->nama_service?></td>
						
						
						
							<td class="text-center">
								<div class="btn-group" role="group">
									<a
										class="btn btn-sm bg-transparent text-default-yellow btn-outline-yellow-hover border-default-yellow"
										href=""
									>
										<i class="fas fa-pencil-alt mx-2"></i>
									</a>
									<a
										class="btn btn-sm bg-default-yellow text-default-white btn-yellow-hover"
										<?php echo anchor ('viewonly/hapuslayanan/'.$u->id_serviceitem,'DELETE'); ?>
									>
										<!-- <i class="fas fa-trash-alt mx-2" ></i> -->
									</a>
								</div>
							</td>
						</tr>
						<?php } ?>
					</tbody> 
				</table>

				<div class="text-24 text-default-medium mt-5">Daftar Promo</div>

				<table
					id="promo-table"
					class="table table-striped table-sm dt-responsive table-responsive-sm"
					style="width: 100%"
				>
					<thead>
						<tr class="text-center">
							<th>Nama Layanan</th>
							<th>Harga</th>
							<th>Jenis Layanan</th>
							<th>Ubah/Hapus</th>
						</tr>
					</thead>

					<tbody>
						
					</tbody>
				</table>
			</div>
		</main>

	

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
			type="text/javascript"
			src="https://cdn.datatables.net/v/bs4/dt-1.10.22/datatables.min.js"
		></script>

		<script src="<?php echo base_url()?>assets/js/admin-page.js"></script>
	</body>
</html>
