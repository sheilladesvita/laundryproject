<?php
defined('BASEPATH') or exit('No direct script access allowed');

class order extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('m_service_item');
        $this->load->model('m_service');
        $this->load->model('m_customer');
        $this->load->model('m_member');
        $this->load->model('m_order');
        $this->load->model('m_promo');
    }

    public function index(){
        $data["active_link"] = "order";
        if(isset($_SESSION['success']) && $_SESSION['success']==true)
            $data1['service'] = $this->m_service->getServiceMember()->result();
        else
            $data1['service'] = $this->m_service->getService()->result();
        
        $this->load->view('partials/header', $data);
        $this->load->view('pages/v_order',$data1);
        $this->load->view('partials/footer', $data);
    }

    function get_service_item(){
        $service_id = $this->input->post('id',TRUE);
        $data = $this->m_service_item->getServiceItemList($service_id)->result();
        echo json_encode($data);
    }

    function add_to_cart(){
        $data = array(
            'id'      => $this->input->post('id_serviceitem'),
            'qty'     => $this->input->post('qty'), 
            'price'   => $this->input->post('price'), 
            'name'    => $this->input->post('name_serviceitem'),
            'options' => array(
                'id_service' => $this->input->post('id_service'), 
                'name_service' => $this->input->post('name_service')
            )
        );
        $this->cart->product_name_rules = '[:print:]';
        $this->cart->insert($data);
        echo $this->show_cart();
    }

    function add_promo(){
        $kode = $this->input->post('promo');
        $promo = $this->m_promo->getPromoByKode($kode)->result();
        
        if(count($this->cart->contents()) > 0){
            if(!isset($_SESSION['promo'])){
                if(count($promo) > 0){
                    foreach ($promo as $item){
                        $id = $item->id_promo;
                        $date = $item->tanggal_berakhir;
                        $qty = $item->qty;
                        $diskon = $item->diskon;
                        $batas_harga = $item->batas_harga;
                    }
                    $now = date("Y-m-d");
                    if($now <= date("Y-m-d",strtotime($date)) && ($batas_harga == null || $batas_harga <= $this->cart->total())){
                        if($qty == null){
                            $_SESSION['promo'] = $this->cart->total() * $diskon;
                            $_SESSION['id_promo'] = $id;
                            redirect('order/index');
                        }else if($qty > 0){
                            $_SESSION['promo'] = $this->cart->total() * $diskon;
                            $_SESSION['id_promo'] = $id;
                            $data = array(
                                'qty' =>  $qty - 1
                            );
                            $this->m_promo->update_qtyPromo($id,$data);
                            redirect('order/index');
                        }else{
                            echo '<script>alert("Kode promo ini terbatas untuk jumlah tertentu.");
                            window.location.href="'.base_url('order/index').'";</script>';    
                        }
                    }else{
                        echo '<script>alert("Silahkan perhatikan syarat promo.");
                        window.location.href="'.base_url('order/index').'";</script>';
                    }
                }else{
                    echo '<script>alert("Kode promo yang Anda masukan tidak tersedia.");
                    window.location.href="'.base_url('order/index').'";</script>';
                }
            }else{
                echo '<script>alert("Sudah ada kode promo yang digunakan.");
                window.location.href="'.base_url('order/index').'";</script>';
            }
        }else{
            echo '<script>alert("Isi dulu keranjangnya yuk.");
                window.location.href="'.base_url('order/index').'";</script>';
        }
    }

    function delete_promo($link) {
        unset($_SESSION['promo']);
        unset($_SESSION['id_promo']);
        redirect('order/'.$link);
    }
 
    function show_cart(){
        $output = '';
        foreach ($this->cart->contents() as $items) {
            $output .='
                <tr>
                    <td class="text-center">'.$items['name'].'</td>
                    <td class="text-center">'.$items['options']['name_service'].'</td>
                    <td class="text-center">'.$items['price'].'</td>
                    <td class="text-center">'.$items['qty'].'</td>
                    <td class="text-center">'.'Rp '.number_format($items['subtotal']).'</td>
                    <td class="text-center">
                        <div class="btn-group" role="group" aria-label="Basic example">
                        <a	class="delete_cart btn btn-sm bg-default-blue text-default-white btn-blue-hover" id='.$items['rowid'].'><i class="fas fa-trash-alt mx-2"></i></a>
                        </div>
                    </td>
                </tr>
            ';
        }
        if(!isset($_SESSION['promo']) || $_SESSION['promo']==null){
            $output .= '
                <tr>
                    <th class="text-right" colspan="4">Total</th>
                    <th class="text-center">'.'Rp '.number_format($this->cart->total()).'</th>
                    <th></th>
                </tr>
            ';
        }else{
            $output .= '
                <tr>
                    <th class="text-right" colspan="4">Promo</th>
                    <th class="text-center">'.'-Rp '.number_format($_SESSION['promo']).'</th>
                    <th class="text-center">
                        <div class="btn-group" role="group">
                        <a
                                class="btn bg-default-red text-default-white btn-red-hover text-7"
                                href="delete_promo/index"
                            >
                                Hapus promo
                        </a>
                        </div>
                    </th>
                </tr>
                <tr>
                    <th class="text-right" colspan="4">Total</th>
                    <th class="text-center">'.'Rp '.number_format($this->cart->total() - $_SESSION['promo']).'</th>
                    <th></th>
                </tr>
            ';
        }
        return $output;
    }
 
    function load_cart(){
        echo $this->show_cart();
    }
 
    function delete_cart(){
        $data = array(
            'rowid' => $this->input->post('row_id'), 
            'qty' => 0, 
        );
        $this->cart->update($data);
        if(count($this->cart->contents()) == 0)
            $this->delete_promo();

        echo $this->show_cart();
    }

    function check_cart(){
        $output = array('success' => false);
        if(count($this->cart->contents()) > 0){
            $output = array('success' => true);
        }
        echo json_encode($output);
    }

    public function checkout(){
        $data["active_link"] = "checkout";
        $this->load->view('partials/header', $data);
        if(isset($_SESSION['success']) && $_SESSION['success']==true)
            $this->load->view('pages/v_checkout_member');
        else
            $this->load->view('pages/v_checkout');
        $this->load->view('partials/footer', $data);
    }

    public function buy() {
        if(isset($_SESSION['success']) && $_SESSION['success']==true){
            $type = $this->session->userdata('id_customertype');
            $id_customer = $this->session->userdata('id_customer');
            $id_order = $id_customer . date("mdy") . mt_rand(1000,9999);
        }else{
            $customer = $this->m_customer->getCustomer()->result();
            $member = $this->m_member->getNotMember()->result();

            $count = (count($customer)) + 1;
            $id_customer = "ID" . strval($count);
            $count = (count($member)) + 1;
            $id_member = "IDN" . strval($count);
            $type = "not_member";
            $id_order = $id_customer . date("mdy") . mt_rand(1000,9999);

            $data_customer = array(
                'id_customer' => $id_customer,
                'id' => $id_member,
                'id_customertype' => $type,
                'nama' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'nomor_telepon' => $this->input->post('phone-number'),
                'alamat' => $this->input->post('alamat')
            );

            $this->m_customer->addCustomer($id_customer,$type);
            $this->m_member->addNotMember($data_customer);
        }

        $total = $this->cart->total();
        if(isset($_SESSION['promo'])){
            $total = $total - $_SESSION['promo'];
        }
    
        $data_order = array(
          'id_order' => $id_order,
          'id_customer' => $id_customer,
          'alamat' => $this->input->post('alamat'),
          'total_price' => $total,
          'waktu_pickup' => $this->input->post('datepicker'),
          'catatan' => $this->input->post('catatan'),
          'pembayaran' => $this->input->post('pay'),
          'status' => 'belum bayar'
        );

        $this->m_order->addOrder($data_order);

        foreach ($this->cart->contents() as $items) {
          $this->m_order->addItem($id_order,$items['id'],$items['qty']);
        }

        if(isset($_SESSION['id_promo'])){
            $data_promo = array(
                'id_promo' => $_SESSION['id_promo'],
                'id_order' => $id_order
            );

            $this->m_promo->addPromoOrder($data_promo);
        }
        
        $_SESSION['id_order']=$id_order;

        $this->cart->destroy();
        redirect('order/confirmation');
      }

      function confirmation(){
        $data["active_link"] = "confirmation";
        if(isset($_SESSION['success']) && $_SESSION['success']==true){
            $name = 'username';
            $table = 'member';
        }else{
            $name = 'nama';
            $table = 'not_member';
        }
        $data1['customer'] = $this->m_order->getOrderById($_SESSION['id_order'],$name,$table)->result();
        $data1['items'] = $this->m_order->getOrderItem($_SESSION['id_order'])->result();
        $this->load->view('partials/header', $data);
        $this->load->view('pages/v_confirmation',$data1);
        $this->load->view('partials/footer', $data);
      }
}

?>