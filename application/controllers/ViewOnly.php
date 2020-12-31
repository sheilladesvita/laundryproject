<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ViewOnly extends CI_Controller
{

  /**
   * Index Page for this controller.
   *
   * Maps to the following URL
   * 		http://example.com/index.php/welcome
   *	- or -
   * 		http://example.com/index.php/welcome/index
   *	- or -
   * Since this controller is set as the default controller in
   * config/routes.php, it's displayed at http://example.com/
   *
   * So any other public methods not prefixed with an underscore will
   * map to /index.php/welcome/<method_name>
   * @see https://codeigniter.com/user_guide/general/urls.html
   */
  function __construct()
  {
    parent::__construct();
    $this->load->model('service_item');
    // $this->load->model('m_admin_login');
    $this->load->model('service');
    $this->load->model('customer');
    $this->load->model('member');
    $this->load->model('order');
    $this->load->helper('url');  
  }
  
  public function index()
  {
    $data["active_link"] = "home";
    $this->load->view('partials/header', $data);
    $this->load->view('pages/v_home');
    $this->load->view('partials/footer', $data);
  }

  public function test()
  {
    $data["active_link"] = "promo";
    $this->load->view('partials/header', $data);
    $this->load->view('pages/v_promo');
    $this->load->view('partials/footer', $data);
  }

  public function layanan()
  {
    $data["active_link"] = "layanan";
    $this->load->view('partials/header', $data);
    $this->load->view('pages/v_layanan');
    $this->load->view('partials/footer', $data);
  }

  public function layanan_satuan()
  {
    $data["active_link"] = "layanan";
    $data1['service_item'] = $this->service_item->getServiceItemByServiceId('S01')->result();
    $this->load->view('partials/header', $data);
    $this->load->view('pages/v_layanan_satuan', $data1);
    $this->load->view('partials/footer', $data);
  }

  public function layanan_kiloan()
  {
    $data["active_link"] = "layanan";
    $data1['service_item'] = $this->service_item->getServiceItemByServiceId('S02')->result();
    $this->load->view('partials/header', $data);
    $this->load->view('pages/v_layanan_kiloan',$data1);
    $this->load->view('partials/footer', $data);
  }

  public function layanan_member()
  {
    $data["active_link"] = "layanan";
    $data1['service_item'] = $this->service_item->getServiceItemByServiceId('S04')->result();
    $this->load->view('partials/header', $data);
    $this->load->view('pages/v_layanan_member',$data1);
    $this->load->view('partials/footer', $data);
  }

  public function layanan_masjid() 
  {
    $data["active_link"] = "layanan";
    $data1['service_item'] = $this->service_item->getServiceItemByServiceId('S03')->result();
    $this->load->view('partials/header', $data);
    $this->load->view('pages/v_layanan_masjid',$data1);
    $this->load->view('partials/footer', $data);
  }

  public function promo(){
    $data["active_link"] = "promo";
    $this->load->view('partials/header', $data);
    $this->load->view('pages/v_promo');
    $this->load->view('partials/footer', $data);
  }

  public function about_us(){
    $data["active_link"] = "tentang_kami";
    $this->load->view('partials/header', $data);
    $this->load->view('pages/v_about');
    $this->load->view('partials/footer', $data);
  }

  public function order(){
    $data["active_link"] = "order";
    $data1['service'] = $this->service->getService()->result();
    $this->load->view('partials/header', $data);
    $this->load->view('pages/v_order',$data1);
    $this->load->view('partials/footer', $data);
  }

  function get_service_item(){
    $service_id = $this->input->post('id',TRUE);
    $data = $this->service_item->getServiceItemList($service_id)->result();
    echo json_encode($data);
  }

  public function searchById($id) {
    foreach ($_SESSION['cart'] as $key => $cart) { 
      if ($cart['serviceitem_id'] == $id) {
        return $key;
      }
    }   
    return null; 
  } 

  function cart(){
    $service_id = $this->input->post('service_id');
    $service_name = $this->input->post('service_name');
    $serviceitem_id = $this->input->post('serviceitem_id');
    $serviceitem_name = $this->input->post('serviceitem_name');
    $qty = $this->input->post('qty');
    
    $price = $this->service_item->getServiceCart($serviceitem_id)->result();
    foreach($price as $row) {
      $pr = $row->harga;
    }

    if(!isset($_SESSION['cart'])){
      $_SESSION['cart']=array(
        array("service_id"=>$service_id,
              "service_name"=>$service_name,
              "serviceitem_id"=>$serviceitem_id,
              "serviceitem_name"=>$serviceitem_name,
              "price"=>$pr,
              "qty"=>$qty));
    }else{
      $key = $this->searchById($serviceitem_id);
      if($key==null){
        $b=array("service_id"=>$service_id,
                  "service_name"=>$service_name,
                  "serviceitem_id"=>$serviceitem_id,
                  "serviceitem_name"=>$serviceitem_name,
                  "price"=>$pr,
                  "qty"=>$qty);
        array_push($_SESSION['cart'],$b);
      }else{
        $_SESSION['cart'][$key]['qty'] += $qty; 
      }
    }

    echo json_encode($price);
  }

  public function delete_cart($id) {
    $key = $this->searchById($id);
    if($key !== null){
      unset($_SESSION['cart'][$key]);
    }
    redirect('viewonly/order');
  }

  public function getTotalPrice() {
    $total = 0;
    foreach ($_SESSION['cart'] as $key => $cart) { 
      $total += $cart['price'] * $cart['qty'];
    } 
    return $total;
  }

  public function checkout(){
    $data["active_link"] = "checkout";
    $data1['service'] = $this->service->getService()->result();
    $data1['total'] = $this->getTotalPrice();
    $this->load->view('partials/header', $data);
    $this->load->view('pages/v_checkout',$data1);
    $this->load->view('partials/footer', $data);
  }

  public function buy() {
    $nama = $this->input->post('name');
    $email = $this->input->post('email');
    $phone_number = $this->input->post('phone-number');
    $alamat = $this->input->post('alamat');
    $date = $this->input->post('datepicker');
    $pay = $this->input->post('pay');
    $catatan = $this->input->post('catatan');

    $customer = $this->customer->getCustomer()->result();
    $member = $this->member->getNotMember()->result();
    $count = (count($customer)) + 1;
    $id_customer = "ID" . strval($count);
    $count = (count($member)) + 1;
    $id_member = "IDN" . strval($count);
    $type = "not_member";
    $id_order = $id_customer . time() . mt_rand();

    $data_customer = array(
      'id_customer' => $id_customer,
      'id' => $id_member,
      'id_customertype' => $type,
      'nama' => $nama,
      'email' => $email,
      'nomor_telepon' => $phone_number,
      'alamat' => $alamat
    );

    $data_order = array(
      'id_order' => $id_order,
      'id_customer' => $id_customer,
      'alamat' => $alamat,
      'total_price' => $this->getTotalPrice(),
      'waktu_pickup' => $date,
      'catatan' => $catatan,
      'pembayaran' => $pay,
      'status' => 'belum bayar'
    );

    $this->customer->addCustomer($id_customer,$type);
    $this->member->addNotMember($data_customer);
    $this->order->addOrder($data_order);
    foreach ($_SESSION['cart'] as $key => $cart) { 
      $this->order->addItem($id_order,$cart['serviceitem_id'],$cart['qty']);
    }

    unset($_SESSION['cart']);
    redirect('viewonly/confirmation');
  }

  public function confirmation(){
    $data["active_link"] = "confirmation";
    $this->load->view('partials/header', $data);
    $this->load->view('pages/v_confirmation',$data);
    $this->load->view('partials/footer', $data);
  }

  public function admin_login(){
    $this->load->view('pages/v_admin_login');
  }

  public function admin(){
    // $this->load->view('pages/v_admin');
    $data['content_div'] = $this->load->view('pages/v_admin', '', true);	
        $this->load->view('pages/v_admin', $data);
  }


  
}
