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
                                min=0
                                placeholder="Batas jumlah pemakaian"
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
                    <th>Tanggal Berakhir</th>
                    <th>Qty</th>
                    <th>Detail/Hapus</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>PAWALTAHUN</td>
                    <td class="text-center">31/01/2021</td>
                    <td class="text-center">-</td>
                    <td class="text-center">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a
                                class="btn btn-sm bg-transparent text-default-yellow btn-outline-yellow-hover border-default-yellow"
                                href=""
                                data-toggle="modal"
                                data-target="#promoDetail"
                            >
                                <i class="fas fa-eye mx-2"></i>
                            </a>
                            <a
                                class="btn btn-sm bg-default-yellow text-default-white btn-yellow-hover"
                                onclick="deleteConfirm('<?php echo site_url('admin/hapus_promo/') ?>')"
                            >
                                <i class="fas fa-trash-alt mx-2"></i>
                            </a>
                        </div>
                    </td>
                </tr>

                
            </tbody>
        </table>
    </div>
    <!-- </main> -->

    <!-- Modal -->
    <div
        class="modal fade bd-example-modal-lg"
        id="promoDetail"
        tabindex="-1"
        aria-labelledby="promoDetailLabel"
        aria-hidden="true"
    >
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    Anda akan <b>menghapus</b> layanan (bla bla bla). Anda yakin untuk
                    menhapusnya?
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
