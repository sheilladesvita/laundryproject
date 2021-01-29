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
                    <th class="text-default-medium-important align-middle">Nama</th>
                    <th class="text-default-medium-important align-middle">No.Telepon</th>
                    <th class="text-default-medium-important align-middle">Pembayaran</th>
                    <th class="text-default-medium-important align-middle">Total Bayar</th>
                    <th class="text-default-medium-important align-middle">Tanggal Pesan</th>
                    <th class="text-default-medium-important align-middle">Status</th>
                    <th class="text-default-medium-important align-middle">Detail</th>
                </tr>
            </thead>

            <tbody>
                <!-- <?php 
                    foreach($serviceitem as $item){
                ?> -->
                <tr>
                    <td>12345678910</td>
                    <td class="text-center">Lisa</td>
                    <td class="text-center">087321443211</td>
                    <td class="text-center">Transfer</td>
                    <td class="text-center">Rp 27000</td>
                    <td class="text-center">29/01/2021</td>
                    <td class="text-center">
                        <div class="btn-group" role="group">
                        <a
                                class="btn bg-default-red text-default-white btn-red-hover text-8"
                                href=""
                            >
                                Belum bayar
                        </a>
                        </div>
                    </td>
                    <td class="text-center">
                        <div class="btn-group" role="group">
                            <a
                                class="btn btn-sm bg-default-yellow text-default-white btn-yellow-hover"
                                href=""
                                data-toggle="modal"
                                data-target="#orderDetail"
                            >
                                <i class="fas fa-eye mx-2"></i>
                            </a>
                        </div>
                    </td>
                </tr>
                <!-- <?php 
                    }
                ?> -->
            </tbody>
        </table>
    <!-- </main> -->

    <!-- Modal -->
    <div
        class="modal fade bd-example-modal-lg"
        id="orderDetail"
        tabindex="-1"
        aria-labelledby="orderDetailLabel"
        aria-hidden="true"
    >
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Detail Pesanan</h4>
                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                </div>
                <div class="modal-body">
                    <table class="table-form" border="0" width="100%" cellpadding="0" cellspacing="0">
                        <tr>
                            <td width="20%">No Pesanan</td>
                            <td width="1%">:</td>
                            <td>12345678910</td>
                        </tr>
                        <tr>
                            <td>Tanggal Pesan</td>
                            <td width="1%">:</td>
                            <td>29 Januari 2021</td>
                        </tr>
                        <tr>
                            <td width="20%">Nama</td>
                            <td width="1%">:</td>
                            <td>Lisa</td>
                        </tr>
                        <tr> 
                            <td>Alamat</td>
                            <td width="1%">:</td>
                            <td>Jl. Raya Indonesia Indah, Tangerang, Indonesia 15213</td>
                        </tr>
                        <tr>
                            <td>No. HP</td>
                            <td width="1%">:</td>
                            <td>087321443211</td>
                        </tr>
                        <tr>
                            <td>Catatan</td>
                            <td width="1%">:</td>
                            <td>Ambil depan rumah kuning cuciannya</td>
                        </tr>
                        <tr>
                            <td>Tanggal Bayar</td>
                            <td width="1%">:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Pembayaran</td>
                            <td width="1%">:</td>
                            <td>Transfer</td>
                        </tr>
                        <tr> 
                            <td>Total Item</td>
                            <td width="1%">:</td>
                            <td>10</td>
                        </tr>
                        <tr>
                            <td>Total Bayar</td>
                            <td width="1%">:</td>
                            <td>Rp 27000</td>
                        </tr>
                    </table>

                    <div class='alert alert-info' role='alert'>
                        <center>Daftar item yang dipesan</center>
                    </div>

                    <table
                        class="table table-striped table-sm dt-responsive table-responsive-sm"
                        style="width: 100%"
                    >
                        <thead>
                            <tr class="text-center">
                                <th>Nama Layanan</th>
                                <th>Jenis Layanan</th>
                                <th>Harga</th>
                                <th>Jumlah</th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Baju</td>
                                <td>Layanan Satuan</td>
                                <td>Rp 3000</td>
                                <td>10</td>
                                <td>Rp 30000</td>
                            </tr>
                        </tbody>
                    </table>

                    <div class='alert alert-info' role='alert'>
                        <table class="table-form" border="0" width="100%" cellpadding="0" cellspacing="0">
                            <tr>
                                <td width="20%">Kode Promo</td>
                                <td width="1%">:</td>
                                <td>G1B1</td>
                            </tr>
                            <tr>
                                <td>Potongan</td>
                                <td width="1%">:</td>
                                <td>10%</td>
                            </tr>
                            <tr>
                                <td>Total</td>
                                <td width="1%">:</td>
                                <td>Rp 30000 - Rp 3000</td>
                            </tr>
                            <tr> 
                                <td></td>
                                <td width="1%"></td>
                                <td>Rp 27000</td>
                            </tr>
                        </table>
                    </div>
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
</main>
