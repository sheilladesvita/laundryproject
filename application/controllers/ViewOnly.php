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
    $this->load->model('service');
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
      $b=array("service_id"=>$service_id,
                "service_name"=>$service_name,
                "serviceitem_id"=>$serviceitem_id,
                "serviceitem_name"=>$serviceitem_name,
                "price"=>$pr,
                "qty"=>$qty);
      array_push($_SESSION['cart'],$b);
    }

    echo json_encode($price);
  }

  public function checkout(){
    $data["active_link"] = "checkout";
    $data1['service'] = $this->service->getService()->result();
    $this->load->view('partials/header', $data);
    $this->load->view('pages/v_checkout',$data1);
    $this->load->view('partials/footer', $data);
  }

  public function buy() {
    unset($_SESSION['cart']);
    redirect('viewonly/order');
  }

  public function admin_login(){
    $this->load->view('pages/v_admin_login');
  }

  public function admin(){
    $this->load->view('pages/v_admin');
  }
}
