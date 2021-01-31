<main class="my-4">
    <div class="container">
        
        <div class="text-24 text-default-medium">Daftar Pesanan</div>

        <table
            id="service-table"
            class="table table-striped table-sm dt-responsive table-responsive-sm"
            style="width: 100%"
        >
            <thead>
                <tr class="text-center">
                    <th class="text-default-medium-important align-middle">No Pesanan</th>
                    <th class="text-default-medium-important align-middle">Pembayaran</th>
                    <th class="text-default-medium-important align-middle">Total Bayar</th>
                    <th class="text-default-medium-important align-middle">Tanggal Pesan</th>
                    <th class="text-default-medium-important align-middle">Status</th>
                    <th class="text-default-medium-important align-middle">Detail</th>
                </tr>
            </thead>

            <tbody>
                <?php 
                    foreach($order as $item){
                ?>
                <tr>
                    <td><?php echo $item->id_order;?></td>
                    <td class="text-center"><?php echo $item->pembayaran;?></td>
                    <td class="text-right"><?php echo "Rp ".number_format($item->total_price);?></td>
                    <td class="text-center"><?php echo $item->tanggal_pesan;?></td>
                    <td class="text-center">
                        <div class="btn-group" role="group">
                        <a
                                class="btn bg-default-red text-default-white btn-red-hover text-8"
                                href=""
                            >
                            <?php echo $item->status;?>
                        </a>
                        </div>
                    </td>
                    <td class="text-center">
                        <div class="btn-group" role="group">
                            <a
                                data-id=<?php echo $item->id_order;?>
                                data-customer=<?php echo $item->id_customer;?>
                                class="orderDetail btn btn-sm bg-default-yellow text-default-white btn-yellow-hover"
                                
                            >
                                <i class="fas fa-eye mx-2"></i>
                            </a>
                        </div>
                    </td>
                </tr>
                <?php 
                    }
                ?>
            </tbody>
        </table>
    <!-- </main> -->

    <!-- Modal -->
    <div
        class="modal fade bd-example-modal-lg"
        id="orderDetailModal"
        tabindex="-1"
        aria-labelledby="orderDetailLabelModal"
        aria-hidden="true"
    >
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Detail Pesanan</h4>
                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                </div>
                <div class="modal-body">
                    <div id="detail_result"></div>
                </div>
                <div class="d-inline-block text-right mr-4 my-4">
                    <button
                        type="button"
                        class="btn bg-transparent border-default-yellow text-default-yellow btn-outline-yellow-hover"
                        data-dismiss="modal"
                    >
                        Back
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script 
		type="text/javascript" 
		src="<?php echo base_url().'assets/js/jquery-3.3.1.js'?>"
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
</main>
