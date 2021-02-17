<main class="my-4">
    <div class="container">
        <div class="row m-0">
            <div class="col-6 pl-2 pr-0">
                <a
                    id="add-promo"
                    class="btn btn-block bg-transparent border-dashed-yellow text-default-yellow btn-outline-yellow-hover"
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

        <div class="collapse no-border pt-6 mb-6" id="promo-form">
            <div class="card card-body bg-default-white">
            <div class="text-18 text-default-semi-bold">Buat Promo Baru</div>
                <hr />
                <form autocomplete="off" enctype="multipart/form-data" action="<?php echo base_url();?>admin/tambah_aksipromo" method="post">
                    <div class="form-column">
                        <div class="col-sm-12 col-lg-4 py-1">
                            <input
                                type="text"
                                name="kode_promo"
                                class="form-control mr-sm-2"
                                id="kode_promo"
                                placeholder="Kode Promo"
                                required
                            />
                        </div>
                        <div class="col-sm-12 col-lg-4 py-1">
                            <input
                                type="number"
                                name="diskon"
                                class="form-control mr-sm-2"
                                id="diskon"
                                min=0
                                max=100
                                placeholder="Diskon (%)"
                                required
                            />
                        </div>
                        <div class="col-sm-12 col-lg-6 py-2">
                            <textarea
                                type="text"
                                name="desc"
                                class="form-control mr-sm-2"
                                id="desc"
                                placeholder="Deskripsi Promo"
                                required
                            ></textarea>
                        </div>
                        <div class="col-sm-12 col-lg-4 py-1">
                            <input
                                type="date"
                                name="tgl_berakhir"
                                class="form-control mr-sm-2"
                                id="tgl_berakhir"
                                placeholder="29/01/2021"
                                required
                            />
                        </div>
                        <div class="col-sm-12 col-lg-4 py-1">
                            <input
                                type="number"
                                name="qty"
                                class="form-control mr-sm-2"
                                id="qty"
                                placeholder="Batas jumlah pemakaian"
                            />
                        </div>
                        <div class="col-sm-12 col-lg-4 py-1">
                            <input
                                type="number"
                                name="batas_harga"
                                class="form-control mr-sm-2"
                                id="batas_harga"
                                placeholder="Batas minimal harga"
                            />
                        </div>
                        <div class="col-sm-12 col-lg-4 py-1">
                            <input
                                type="file"
                                name="userfile"
                                class="form-control-file mr-sm-2"
                                placeholder="Gambar"
                                required
                            />
                        </div>
                        <div class="col-sm-12 col-lg-3 py-1">
                            <button
                                type="submit"
                                class="btn btn-block text-default-white bg-default-yellow btn-yellow-hover"
                            >
                                Tambah Promo
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


        <div class="text-24 text-default-medium mt-5">Daftar Promo</div>

        <table
            id="promo-table"
            class="table table-striped table-sm dt-responsive table-responsive-sm"
            style="width: 100%"
        >
            <thead>
                <tr class="text-center">
                    <th>Kode Promo</th>
                    <th>Diskon</th>
                    <th>Tanggal Berakhir</th>
                    <th>Qty</th>
                    <th>Batas Harga</th>
                    <th>Detail/Hapus</th>
                </tr>
            </thead>

            <tbody>
                <?php 
                    foreach($promo as $item){
                ?>
                <tr>
                    <td><?php echo $item->kode_promo;?></td>
                    <td class="text-center"><?php echo $item->diskon*100 . "%";?></td>
                    <td class="text-center"><?php echo date("d-m-Y", strtotime($item->tanggal_berakhir));;?></td>
                    <td class="text-center">
                        <?php if(isset($item->qty)){
                            echo $item->qty;
                        }else{
                            echo "-";
                        }
                        ?>
                    </td>
                    <td class="text-center">
                        <?php if(isset($item->batas_harga)){
                            echo $item->batas_harga;
                        }else{
                            echo "-";
                        }
                        ?>
                    </td>
                    <td class="text-center">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a
                                data-kode=<?php echo $item->kode_promo;?> 
                                data-gambar=" <?php echo base_url('assets/images/promo/'.$item->gambar);?>"
                                data-desc="<?php echo $item->deskripsi;?>" 
                                class="btn btn-sm bg-transparent text-default-yellow btn-outline-yellow-hover border-default-yellow"
                                href="#promoDetailModal"
                                id="promoId"
                                data-toggle="modal"
                            >
                                <i class="fas fa-eye mx-2"></i>
                            </a>
                            <a
                                class="btn btn-sm bg-default-yellow text-default-white btn-yellow-hover"
                                onclick="deleteConfirm('<?php echo site_url('admin/hapus_promo/'.$item->id_promo) ?>')"
                            >
                                <i class="fas fa-trash-alt mx-2"></i>
                            </a>
                        </div>
                    </td>
                </tr>
                <?php 
                    }
                ?>                
            </tbody>
        </table>
    </div>
    <!-- </main> -->

    <!-- Modal -->
    <div
        class="modal fade"
        id="deleteModal"
        tabindex="-1"
        aria-labelledby="deleteModalLabel"
        aria-hidden="true"
    >
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    Anda yakin <b>menghapus</b> layanan ini?
                </div>
                <div class="d-inline-block text-right mr-4 my-4">
                    <button
                        type="button"
                        class="btn bg-transparent border-default-yellow text-default-yellow btn-outline-yellow-hover"
                        data-dismiss="modal"
                    >
                        Cancel
                    </button>
                    <a
                        type="button"
                        id="btn-delete"
                        class="btn bg-default-yellow text-default-white btn-yellow-hover"

                        >Delete</a
                    >
                </div>
            </div>
        </div>
    </div>
    <div
        class="modal fade bd-example-modal-lg"
        id="promoDetailModal"
        tabindex="-1"
        aria-labelledby="promoDetailLabelModal"
        aria-hidden="true"
    >
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Preview Promo</h4>
                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <table width="100%" style="font-size:14px">
                            <tr>
                                <td class="text-center">
                                    <img id="gambar" class="promo-image rounded">
                                </td>
                            </tr>
                            <tr>
                                <td class="align-top">
                                    <div class="container text-16 text-center width-form-50 text-default-semi-bold py-3"
                                        id="kode_promo"
                                    >
                                        
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-top">
                                    <div class="container text-14 text-left width-form-50"
                                        id="desc"
                                    >
                                    
                                    </div>
                                </td>
                            </tr>
                        </table>
                        <!-- <div class="container text-center width-form-25 py-3">
                            <a 
                                href="#"
                                class="btn btn-block bg-default-sky text-default-white btn-auth"
                                type="button"
                            >
                                MAU
                            </a>
                        </div> -->
                    </div>
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
