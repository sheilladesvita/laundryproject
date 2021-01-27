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

        <div class="collapse pt-3 mb-3" id="service-form">
            <div class="card card-body bg-default-white">
                <div class="text-18 text-default-semi-bold">Buat Layanan Baru</div>
                <hr />
                <form autocomplete="off" action="<?php echo base_url();?>admin/tambah_aksilayanan" method="post">
                    <div class="form-row">
                        <div class="col-sm-12 col-lg-3 py-1">
                            <input
                                type="text"
                                name="nama_serviceitem"
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

                        <div class="col-sm-12 col-lg-2 py-2">
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

        <div class="text-24 text-default-medium">Daftar Layanan</div>

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
                <tr id="1">
                    <td>Blazer/Sweater</td>
                    <td class="text-right">12000</td>
                    <td class="text-center">Laundry Satuan</td>
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
                                href=""
                                data-toggle="modal"
                                data-target="#serviceDeleteModal"
                            >
                                <i class="fas fa-trash-alt mx-2"></i>
                            </a>
                        </div>
                    </td>
                </tr>
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
                <tr>
                    <td>Blazer/Sweater</td>
                    <td class="text-right">12000</td>
                    <td class="text-center">Laundry Satuan</td>
                    <td class="text-center">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a
                                class="btn btn-sm bg-transparent text-default-blue btn-outline-blue-hover border-default-blue"
                                href=""
                            >
                                <i class="fas fa-pencil-alt mx-2"></i>
                            </a>
                            <a
                                class="btn btn-sm bg-default-blue text-default-white btn-blue-hover"
                                href=""
                            >
                                <i class="fas fa-trash-alt mx-2"></i>
                            </a>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>Long Dress Pendek</td>
                    <td class="text-right">20000</td>
                    <td class="text-center">Laundry Satuan</td>
                    <td class="text-center">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a
                                class="btn btn-sm bg-transparent text-default-blue btn-outline-blue-hover border-default-blue"
                                href=""
                            >
                                <i class="fas fa-pencil-alt mx-2"></i>
                            </a>
                            <a
                                class="btn btn-sm bg-default-blue text-default-white btn-blue-hover"
                                href=""
                            >
                                <i class="fas fa-trash-alt mx-2"></i>
                            </a>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>Helm</td>
                    <td class="text-right">15000</td>
                    <td class="text-center">Laundry Satuan</td>
                    <td class="text-center">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a
                                class="btn btn-sm bg-transparent text-default-blue btn-outline-blue-hover border-default-blue"
                                href=""
                            >
                                <i class="fas fa-pencil-alt mx-2"></i>
                            </a>
                            <a
                                class="btn btn-sm bg-default-blue text-default-white btn-blue-hover"
                                href=""
                            >
                                <i class="fas fa-trash-alt mx-2"></i>
                            </a>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>Kemeja Tangan Pendek</td>
                    <td class="text-right">9000</td>
                    <td class="text-center">Laundry Satuan</td>
                    <td class="text-center">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a
                                class="btn btn-sm bg-transparent text-default-blue btn-outline-blue-hover border-default-blue"
                                href=""
                            >
                                <i class="fas fa-pencil-alt mx-2"></i>
                            </a>
                            <a
                                class="btn btn-sm bg-default-blue text-default-white btn-blue-hover"
                                href=""
                            >
                                <i class="fas fa-trash-alt mx-2"></i>
                            </a>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>Bed Cover King</td>
                    <td class="text-right">40000</td>
                    <td class="text-center">Laundry Satuan</td>
                    <td class="text-center">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a
                                class="btn btn-sm bg-transparent text-default-blue btn-outline-blue-hover border-default-blue"
                                href=""
                            >
                                <i class="fas fa-pencil-alt mx-2"></i>
                            </a>
                            <a
                                class="btn btn-sm bg-default-blue text-default-white btn-blue-hover"
                                href=""
                            >
                                <i class="fas fa-trash-alt mx-2"></i>
                            </a>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>Sprei Double</td>
                    <td class="text-right">15000</td>
                    <td class="text-center">Laundry Satuan</td>
                    <td class="text-center">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a
                                class="btn btn-sm bg-transparent text-default-blue btn-outline-blue-hover border-default-blue"
                                href=""
                            >
                                <i class="fas fa-pencil-alt mx-2"></i>
                            </a>
                            <a
                                class="btn btn-sm bg-default-blue text-default-white btn-blue-hover"
                                href=""
                            >
                                <i class="fas fa-trash-alt mx-2"></i>
                            </a>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>Kemeja Tangan Panjang</td>
                    <td class="text-right">10000</td>
                    <td class="text-center">Laundry Satuan</td>
                    <td class="text-center">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a
                                class="btn btn-sm bg-transparent text-default-blue btn-outline-blue-hover border-default-blue"
                                href=""
                            >
                                <i class="fas fa-pencil-alt mx-2"></i>
                            </a>
                            <a
                                class="btn btn-sm bg-default-blue text-default-white btn-blue-hover"
                                href=""
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
        class="modal fade"
        id="serviceDeleteModal"
        tabindex="-1"
        aria-labelledby="serviceDeleteModalLabel"
        aria-hidden="true"
    >
        <div class="modal-dialog modal-dialog-centered">
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
                        Cancel
                    </button>
                    <a
                        type="button"
                        class="btn bg-default-yellow text-default-white btn-yellow-hover"
                        >Delete</a
                    >
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
