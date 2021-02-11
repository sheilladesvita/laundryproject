<div class="container-settings mt-5 width-form-75">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-10 col-xl-8 mx-auto">
            <h2 class="h3 mb-4 page-title">Settings</h2>
            <form autocomplete="off" action="<?php echo base_url();?>viewonly/edit_account" method="post">
                <hr class="my-4" />
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" id="nama" name="nama" class="form-control" value="<?php echo $_SESSION['username'];?>" required/>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $_SESSION['email'];?>" required/>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $_SESSION['alamat'];?>" required/>
                </div>
                <div class="form-group">
                    <label for="phone">Nomor Telepon (WhatsApp)</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $_SESSION['nomor_telepon'];?>" required/>
                </div>
                <button type="submit" class="btn btn-block bg-default-sky text-white btn-auth width-form-25">Save Change</button>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.3.1.js'?>"></script>
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
		<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
		<script src="<?php echo base_url()?>assets/js/bootstrap/bootstrap-datepicker.js"></script>
		<script src="<?php echo base_url()?>assets/js/script.js"></script>