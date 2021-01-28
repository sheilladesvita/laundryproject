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
                                required
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
                                    required
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

        <div class="text-24 text-default-medium pl-0 pt-4">Daftar Layanan</div>

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
                    <td><?php echo $item->nama_serviceitem; ?></span></td>
                    <td class="text-right"><?php echo $item->harga;?></td>
                    <td class="text-center"><?php echo $item->nama_service;?></td>
                    <td class="text-center">
                        <div class="btn-group" role="group">
                            <a
                                data-id=<?php echo $item->id_serviceitem;?>
                                data-nama=<?php echo $item->nama_serviceitem;?>
                                data-harga=<?php echo $item->harga;?>
                                data-kategori=<?php echo $item->id_service;?>
                                class="btn btn-sm bg-transparent text-default-yellow btn-outline-yellow-hover border-default-yellow" 
                                href="#serviceUpdateModal"
                                id="serviceId" 
                                data-toggle="modal"
                                >
                                <i class="fas fa-pencil-alt mx-2"></i>
                            </a>
                            <a
                                class="btn btn-sm bg-default-yellow text-default-white btn-yellow-hover"
                                onclick="deleteConfirm('<?php echo site_url('admin/hapus_layanan/'.$item->id_serviceitem) ?>')"
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

    <!-- Modal Hapus-->
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

    <!-- Modal Edit-->
    <div
        class="modal fade"
        id="serviceUpdateModal"
        tabindex="-1"
        aria-labelledby="serviceUpdateModalLabel"
        aria-hidden="true"
    >
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Data</h4>
                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                </div>
                <form class="form-horizontal" action="<?php echo base_url('admin/edit_layanan')?>" method="post" enctype="multipart/form-data" role="form">
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="col-lg-4 col-sm-4 control-label">Nama Layanan</label>
                            <div class="col-lg-10">
                            <input type="hidden" name="id_serviceitem" id="id_serviceitem">
                                <input type="text" class="form-control" name="nama_serviceitem" id="nama_serviceitem">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 col-sm-2 control-label">Harga</label>
                            <div class="col-lg-10">
                            <input class="form-control" name="harga" id="harga"></input>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-5 py-2">
                            <select name="service" id="service" class="form-control" required>
                                <?php foreach($service as $row):?>
                                <option value="<?php echo $row->id_service;?>"><?php echo $row->nama_service;?></option>
                                <?php endforeach;?> 
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="d-inline-block text-right mr-4 my-4">
                            <button
                                type="button"
                                class="btn bg-transparent border-default-yellow text-default-yellow btn-outline-yellow-hover"
                                data-dismiss="modal"
                            >
                                Cancel
                            </button>
                            <button
                                type="submit"
                                class="btn bg-default-yellow text-default-white btn-yellow-hover"

                                >Save</button
                            >
                        </div>
                    </div>
                </form>
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
