<main>
    <img src="http://alslaundry.com/assets/images/als%20logo.png" width="240" height="120" align="center"><br>
    <div style="text-align: justify">
        <?php echo $pesan;?>
    </div>
    <table style="margin: auto auto;
        background-color: #fffffa;
        box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.25);
        border-radius: 7px;
        padding: 1rem 2rem;">
        <tr>
            <td align="center">
                <table style="width:100%">
                    <tr>
                        <td style="padding: 35px 35px 20px 35px">
                            <table style="font-size: 16px; 
                                font-weight: 400; 
                                line-height: 24px; 
                                padding-top: 20px;">
                                <tr>
                                    <td style="width:70%;
                                    font-size: 10pt;
                                    font-weight: 800;
                                    padding-left: 15px;" 
                                    align="center">
                                    Pembayaran Transfer
                                    </td>
                                </tr>
                                <tr>
                                <td style="width: 70%;
                                    font-size: 10pt;
                                    font-weight:400; 
                                    padding: 5px 10px;" 
                                    align="left">
                                    Anda dapat melakukan pembayaran melalui transfer bank.
                                    </td>
                                </tr>
                                <tr>
                                <td style="width: 70%;
                                    font-size: 10pt;
                                    font-weight:400; 
                                    padding: 5px 10px;" 
                                    align="left">
                                    1. Transfer Ke Bank ABC No Rek ...... A/N ALS Laundry
                                    <br>
                                    2. Kirim bukti pembayaran via Whatsapp/Email/Instagram ALS Laundry
                                    <br>
                                    3. Pihak ALS Laundry konfirmasi via Whatsapp/Email/Instagram jika transfer sudah masuk 
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:70%;
                                    font-size: 10pt;
                                    font-weight: 800;
                                    padding-left: 15px;" 
                                    align="center">
                                    Pembayaran Cash On Delivery(COD)
                                    </td>
                                </tr>
                                <tr>
                                <td style="width: 70%;
                                    font-size: 10pt;
                                    font-weight:400; 
                                    padding: 5px 10px;" 
                                    align="left">
                                    Anda dapat melakukan pembayaran dengan COD.
                                    </td>
                                </tr>
                                <tr>
                                <td style="width: 70%;
                                    font-size: 10pt;
                                    font-weight:400; 
                                    padding: 5px 10px;" 
                                    align="left">
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
    <table style="margin:auto auto;
        background-color:#fffffa;
        box-shadow:2px 2px 4px #000000;
        border-radius: 7px;
        padding: 1rem 2rem;
        color:#000000;">
        <tr>
            <td align="center">
                <table style="width:100%">
                    <tr>
                        <td style="padding:35px 35px 20px 35px">
                            <table style="font-size:16px;font-weight:400;line-height:24px;padding-top:20px;">
                                <tr>
                                    <td align="center">
                                        <h2> Order Summary</h2>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left">
                                        <table style="width:100%">
                                            <tr>
                                                <td style="width:75%;font-size: 14pt;font-weight: 800;padding-left: 10px;" align="left">
                                                     Order Confirmation # 
                                                </td>
                                                <td style="width: 25rem;font-size:14pt;font-weight: 800;padding-left: 10px;" align="left">
                                                    <?php echo $_SESSION['id_order'];?>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left">
                                        <table style="width:100%">
                                            <?php 
                                                foreach($items as $item){
                                            ?>
                                            <tr>
                                                <td style="with:50%;font-size:14pt;font-weight:400;padding: 5px 10px;" align="left">
                                                    <?php echo $item->nama_serviceitem ?>
                                                </td>
                                                <td style="width:25%;font-size:14pt;font-weight:400;padding: 5px 10px;" align="left">
                                                    <?php echo "x" . $item->qty ?>
                                                </td>
                                                <td style="width:25%;font-size:14pt;font-weight:400;padding: 5px 10px;" align="left">
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
                                        <table style="width:100%">
                                            <tr>
                                                <td style="width: 75%;
                                                    font-size:14pt;
                                                    font-weight:800;
                                                    padding-left:10px;
                                                    border-top: 3px solid #eeeeee;
                                                    border-bottom: 3px solid #eeeeee;" 
                                                    align="left">
                                                    PROMO 
                                                </td>
                                                <td style="width: 25rem;
                                                    font-size:14pt;
                                                    font-weight:800;
                                                    padding-left:10px;
                                                    border-top: 3px solid #eeeeee;
                                                    border-bottom: 3px solid #eeeeee;" 
                                                    align="left"> 
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
                                        <table style="width:100%">
                                            <tr>
                                                <td style="width: 75%;
                                                    font-size:14pt;
                                                    font-weight:800;
                                                    padding-left:10px;
                                                    border-top: 3px solid #eeeeee;
                                                    border-bottom: 3px solid #eeeeee;" 
                                                    align="left">
                                                     TOTAL 
                                                </td>
                                                <td style="width: 25rem;
                                                    font-size:14pt;
                                                    font-weight:800;
                                                    padding-left:10px;
                                                    border-top: 3px solid #eeeeee;
                                                    border-bottom: 3px solid #eeeeee;" 
                                                    align="left">
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
                            <table style="width:100%">
                                <tr>
                                    <td style="font-size:0;">
                                        <table style="width:100%">
                                            <tr>
                                                <td style="width: 30%;
                                                    font-size: 10pt;
                                                    font-weight: 800; 
                                                    padding-left:10px;" 
                                                    align="left">
                                                     Nama
                                                </td>
                                                <td style="width: 70%;
                                                    font-size: 10pt;
                                                    font-weight:400; 
                                                    padding: 5px 10px;"
                                                    align="left">
                                                    <?php 
                                                    if(isset($_SESSION['success']) && $_SESSION['success']==true)
                                                        echo $order->username;
                                                    else
                                                        echo $order->nama; 
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 30%;
                                                    font-size: 10pt;
                                                    font-weight: 800; 
                                                    padding-left:10px;" 
                                                    align="left">
                                                     Email 
                                                </td>
                                                <td style="width: 70%;
                                                    font-size: 10pt;
                                                    font-weight:400; 
                                                    padding: 5px 10px;"
                                                    align="left">
                                                     <?php echo $order->email ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 30%;
                                                    font-size: 10pt;
                                                    font-weight: 800; 
                                                    padding-left:10px;" 
                                                    align="left">
                                                     Nomor Telepon 
                                                </td>
                                                <td style="width: 70%;
                                                    font-size: 10pt;
                                                    font-weight:400; 
                                                    padding: 5px 10px;"
                                                    align="left">
                                                    <?php echo $order->nomor_telepon ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 30%;
                                                    font-size: 10pt;
                                                    font-weight: 800; 
                                                    padding-left:10px;" 
                                                    align="left">
                                                     Alamat
                                                </td>
                                                <td style="width: 70%;
                                                    font-size: 10pt;
                                                    font-weight:400; 
                                                    padding: 5px 10px;"
                                                    align="left">
                                                    <?php echo $order->alamat ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 30%;
                                                    font-size: 10pt;
                                                    font-weight: 800; 
                                                    padding-left:10px;" 
                                                    align="left">
                                                     Tanggal Pickup
                                                </td>
                                                <td style="width: 70%;
                                                    font-size: 10pt;
                                                    font-weight:400; 
                                                    padding: 5px 10px;"
                                                    align="left">
                                                    <?php echo $order->waktu_pickup ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 30%;
                                                    font-size: 10pt;
                                                    font-weight: 800; 
                                                    padding-left:10px;" 
                                                    align="left">
                                                     Pembayaran
                                                </td>
                                                <td style="width: 70%;
                                                    font-size: 10pt;
                                                    font-weight:400; 
                                                    padding: 5px 10px;"
                                                    align="left">
                                                    <?php echo $order->pembayaran ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 30%;
                                                    font-size: 10pt;
                                                    font-weight: 800; 
                                                    padding-left:10px;" 
                                                    align="left">
                                                     Catatan
                                                </td>
                                                <td style="width: 70%;
                                                    font-size: 10pt;
                                                    font-weight:400; 
                                                    padding: 5px 10px;"
                                                    align="left">
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
    <div style="text-align: justify">
        <?php echo $footer;?>
    </div>
</main>