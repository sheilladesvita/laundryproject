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
                                    <?php 
                                        if(isset($_SESSION['promo'])){
                                    ?>
                                    <td align="left">
                                        <table class="width-form-100">
                                            <tr>
                                                <td class="width-form-75 text-14 text-weight-800 padding-l-10-px test-black" align="left">
                                                     PROMO 
                                                </td>
                                                <td class="width-form-25 text-14 text-weight-800 padding-l-10-px test-black" align="left"> 
                                                    <?php echo "-Rp " . number_format($_SESSION['promo']); ?>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    <?php
                                        }
                                    ?>
                                </tr>
                                <tr>
                                    <td align="left">
                                        <table class="width-form-100">
                                            <tr>
                                                <td class="width-form-75 text-14 text-weight-800 padding-l-10-px test-black" align="left">
                                                     TOTAL 
                                                </td>
                                                <td class="width-form-25 text-14 text-weight-800 padding-l-10-px test-black" align="left">
                                                    <?php 
                                                        echo "Rp " . number_format($order->total_price);
                                                    ?>
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
                                            <tr>
                                                <td class="width-form-30 text-10 text-weight-800 padding-l-10-px" align="left">
                                                     Nama
                                                </td>
                                                <td class="width-form-70 text-10 text-weight-400 padding-confirm-text" align="left">
                                                    <?php 
                                                    if(isset($_SESSION['success']) && $_SESSION['success']==true)
                                                        echo $order->username;
                                                    else
                                                        echo $order->nama; 
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="width-form-30 text-10 text-weight-800 padding-l-10-px" align="left">
                                                     Email 
                                                </td>
                                                <td class="width-form-70 text-10 text-weight-400 padding-confirm-text" align="left">
                                                     <?php echo $order->email ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="width-form-30 text-10 text-weight-800 padding-l-10-px" align="left">
                                                     Nomor Telepon 
                                                </td>
                                                <td class="width-form-70 text-10 text-weight-400 padding-confirm-text" align="left">
                                                    <?php echo $order->nomor_telepon ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="width-form-30 text-10 text-weight-800 padding-l-10-px" align="left">
                                                     Alamat
                                                </td>
                                                <td class="width-form-70 text-10 text-weight-400 padding-confirm-text" align="left">
                                                    <?php echo $order->alamat ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="width-form-30 text-10 text-weight-800 padding-l-10-px" align="left">
                                                     Tanggal Pickup
                                                </td>
                                                <td class="width-form-70 text-10 text-weight-400 padding-confirm-text" align="left">
                                                    <?php echo $order->waktu_pickup ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="width-form-30 text-10 text-weight-800 padding-l-10-px" align="left">
                                                     Pembayaran
                                                </td>
                                                <td class="width-form-70 text-10 text-weight-400 padding-confirm-text" align="left">
                                                    <?php echo $order->pembayaran ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="width-form-30 text-10 text-weight-800 padding-l-10-px" align="left">
                                                     Catatan
                                                </td>
                                                <td class="width-form-70 text-10 text-weight-400 padding-confirm-text" align="left">
                                                    <?php echo $order->catatan ?>
                                                </td>
                                            </tr>
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
    <table class="container-table" style="margin-top:25px">
        <tr>
            <td align="center">
                <table class="width-form-100">
                    <tr>
                        <td class="row-confirmation">
                            <table class="table-confirmation">
                                <tr>
                                    <td align="center">
                                        <h5> INFORMATION</h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="width-form-70 text-10 text-weight-800 padding-l-15-px" align="center">
                                    Pembayaran Transfer
                                    </td>
                                </tr>
                                <tr>
                                <td class="width-form-70 text-10 text-weight-400 padding-confirm-text" align="left">
                                    Anda dapat melakukan pembayaran melalui transfer bank.
                                    </td>
                                </tr>
                                <tr>
                                <td class="width-form-70 text-10 text-weight-400 padding-confirm-text" align="left">
                                    1. Transfer Ke Bank ABC No Rek ...... A/N ALS Laundry
                                    <br>
                                    2. Kirim bukti pembayaran via Whatsapp/Email/Instagram ALS Laundry
                                    <br>
                                    3. Pihak ALS Laundry konfirmasi via Whatsapp/Email/Instagram jika transfer sudah masuk 
                                    </td>
                                </tr>
                                <tr>
                                    <td class="width-form-70 text-10 text-weight-800 padding-l-15-px" align="center">
                                    Pembayaran Cash On Delivery(COD)
                                    </td>
                                </tr>
                                <tr>
                                <td class="width-form-70 text-10 text-weight-400 padding-confirm-text" align="left">
                                    Anda dapat melakukan pembayaran dengan COD.
                                    </td>
                                </tr>
                                <tr>
                                <td class="width-form-70 text-10 text-weight-400 padding-confirm-text" align="left">
                                    1. Kurir mengantar laundry yang sudah selesai dicuci
                                    <br>
                                    2. Bayar langsung kepada kurir laundry yang datang kerumah anda
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