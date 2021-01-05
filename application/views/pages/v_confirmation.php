<main>
    <table class="container-table" style="margin-top:25px">
        <tr>
            <td align="center">
                <table class="width-form-100">
                    <tr>
                        <td class="row-confirmation">
                            <table class="table-confirmation">
                                <tr>
                                    <td align="center">
                                        <img src="<?php echo base_url();?>assets/images/checked-checkbox.png" width="125" height="120"><br><br>
                                        <h2> Thank You For Your Order!</h2>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left">
                                        <p class="confirmation-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium iste ipsa numquam odio dolores, nam. </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left">
                                        <table class="width-form-100">
                                            <tr>
                                                <td class="width-form-75 text-14 text-weight-800 padding-l-10-px" align="left">
                                                     Order Confirmation # 
                                                </td>
                                                <td class="width-form-25 text-14 text-weight-800 padding-l-10-px" align="left">
                                                    <?php echo $_SESSION['id_order'];?>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left">
                                        <table class="width-form-100">
                                            <?php 
                                                foreach($items as $item){
                                            ?>
                                            <tr>
                                                <td class="text-14 text-weight-400 padding-confirm-text" align="left">
                                                    <?php echo $item->nama_serviceitem ?>
                                                </td>
                                                <td class="width-form-25 text-14 text-weight-400 padding-confirm-text" align="left">
                                                    <?php echo "x" . $item->qty ?>
                                                </td>
                                                <td class="width-form-25 text-14 text-weight-400 padding-confirm-text" align="left">
                                                    <?php echo "Rp " . number_format($item->harga) ?>
                                                </td>
                                            </tr>
                                            <?php 
                                                }
                                            ?>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left">
                                        <table class="width-form-100">
                                            <tr>
                                                <td class="width-form-75 text-14 text-weight-800 padding-l-10-px test-black" align="left">
                                                     TOTAL 
                                                </td>
                                                <td class="width-form-25 text-14 text-weight-800 padding-l-10-px test-black" align="left">
                                                    <?php foreach($customer as $row){ 
                                                        echo "Rp " . number_format($row->total_price);
                                                    }?>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" style="padding: 0 35px 35px 35px;">
                            <table class="width-form-100">
                                <tr>
                                    <td style="font-size:0;">
                                        <table class="width-form-100">
                                            <?php 
                                                foreach($customer as $row){
                                            ?>
                                            <tr>
                                                <td class="width-form-30 text-10 text-weight-800 padding-l-10-px" align="left">
                                                     Nama
                                                </td>
                                                <td class="width-form-70 text-10 text-weight-400 padding-confirm-text" align="left">
                                                    <?php 
                                                    if(isset($_SESSION['success']) && $_SESSION['success']==true)
                                                        echo $row->username;
                                                    else
                                                        echo $row->nama; 
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="width-form-30 text-10 text-weight-800 padding-l-10-px" align="left">
                                                     Email 
                                                </td>
                                                <td class="width-form-70 text-10 text-weight-400 padding-confirm-text" align="left">
                                                     <?php echo $row->email ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="width-form-30 text-10 text-weight-800 padding-l-10-px" align="left">
                                                     Nomor Telepon 
                                                </td>
                                                <td class="width-form-70 text-10 text-weight-400 padding-confirm-text" align="left">
                                                    <?php echo $row->nomor_telepon ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="width-form-30 text-10 text-weight-800 padding-l-10-px" align="left">
                                                     Alamat
                                                </td>
                                                <td class="width-form-70 text-10 text-weight-400 padding-confirm-text" align="left">
                                                    <?php echo $row->alamat ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="width-form-30 text-10 text-weight-800 padding-l-10-px" align="left">
                                                     Tanggal Pickup
                                                </td>
                                                <td class="width-form-70 text-10 text-weight-400 padding-confirm-text" align="left">
                                                    <?php echo $row->waktu_pickup ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="width-form-30 text-10 text-weight-800 padding-l-10-px" align="left">
                                                     Pembayaran
                                                </td>
                                                <td class="width-form-70 text-10 text-weight-400 padding-confirm-text" align="left">
                                                    <?php echo $row->pembayaran ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="width-form-30 text-10 text-weight-800 padding-l-10-px" align="left">
                                                     Catatan
                                                </td>
                                                <td class="width-form-70 text-10 text-weight-400 padding-confirm-text" align="left">
                                                    <?php echo $row->catatan ?>
                                                </td>
                                            </tr>
                                            <?php 
                                                }
                                            ?>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <div class="container text-center width-form-25 padding-t-25">
        <a 
            href="<?php echo base_url();?>order/index"
            class="btn btn-block bg-default-sky text-default-white btn-auth"
            type="submit"
        >
            ORDER AGAIN
        </a>
    </div>
</main>