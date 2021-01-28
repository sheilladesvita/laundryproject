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
                    <th class="text-default-medium-important">Nama Layanan</th>
                    <th class="text-default-medium-important">Harga</th>
                    <th class="text-default-medium-important">Jenis Layanan</th>
                    <th class="text-default-medium-important">Ubah/Hapus</th>
                </tr>
            </thead>

            <tbody>
                <?php 
                    foreach($serviceitem as $item){
                ?>
                <tr id=<?php echo $item->id_serviceitem;?>;>
                    <td><?php echo $item->nama_serviceitem;?></td>
                    <td class="text-right"><?php echo $item->harga;?></td>
                    <td class="text-center"><?php echo $item->nama_service;?></td>
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
                <?php 
                    }
                ?>
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
