<main role="main">
	<div class="flex-container">
		<div class="flex-row">
			<?php 
				foreach($promo as $item){
			?>
			<div class="flex-column">
				<div class="box-content-promo">
					<img src="<?php echo base_url();?>assets/images/promo/<?php echo $item->gambar;?>"
						class="img-promo width-form-100 rounded"
					>
					<div class="container text-16 text-center width-form-75 text-default-semi-bold padding-t-25">
						<?php echo "#".$item->kode_promo;?>
					</div>
					<div class="container text-12 text-center width-form-100">
						<?php echo $item->deskripsi;?>
                    </div>
				</div>
			</div>
			<?php 
				}
			?>
		</div>
	</div>
</main>
