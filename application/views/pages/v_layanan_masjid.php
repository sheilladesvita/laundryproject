<main role="main">
	<h1 class="my-5">LAUNDRY MASJID / MUSHOLA</h1>
	<div class="container text-default-black mb-5">
		<!-- Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc volutpat nisl
		eget eros varius varius id ut nisl. Sed auctor leo eu dui molestie
		convallis. Suspendisse rhoncus mattis velit id blandit. Vivamus neque
		tellus, volutpat at elit et, rutrum convallis lectus. Maecenas erat ipsum,
		ullamcorper et velit a, efficitur varius nunc. Nulla ante risus, sagittis at
		ultricies pretium, consequat ac erat. Nam hendrerit eros et neque dictum, ut
		fermentum diam rhoncus. Donec nec augue consectetur, varius velit at,
		placerat tellus. Suspendisse ullamcorper sem non ex imperdiet, vel venenatis
		lacus pulvinar. Maecenas eu tristique orci. Vestibulum tincidunt cursus arcu
		vel laoreet. Sed vestibulum, urna vel ultrices varius, lorem dui semper
		sapien, vitae congue ipsum nisl et leo. Sed porttitor tortor massa, rhoncus
		sodales nisi luctus a. Pellentesque at diam vitae orci vehicula
		pellentesque. -->
	</div>
	<div class="container-table mb-5">
		<table class="table table-bordered modules-table">
			<thead>
				<tr>
					<th scope="col">Barang</th>
					<th scope="col">Harga (Rp)</th>
				</tr>
			</thead>
			<tbody>
			<?php
				$no = 1; 
				foreach($service_item as $s) {
			?>
				<tr>
				<td><?php echo $s->nama_serviceitem ?></td>
					<td><?php echo $s->harga ?></td>
				</tr>
			<?php 
				}
			?>
			</tbody>
		</table>
	</div>
</main>
