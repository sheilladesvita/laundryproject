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
    $this->load->model('m_service_item');
    // $this->load->model('m_admin_login');
    $this->load->model('m_service');
    $this->load->model('m_customer');
    $this->load->model('m_member');
    $this->load->model('m_order');
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
    $data1['service_item'] = $this->m_service_item->getServiceItemByServiceId('S01')->result();
    $this->load->view('partials/header', $data);
    $this->load->view('pages/v_layanan_satuan', $data1);
    $this->load->view('partials/footer', $data);
  }

  public function layanan_kiloan()
  {
    $data["active_link"] = "layanan";
    $data1['service_item'] = $this->m_service_item->getServiceItemByServiceId('LK01')->result();
    $this->load->view('partials/header', $data);
    $this->load->view('pages/v_layanan_kiloan',$data1);
    $this->load->view('partials/footer', $data);
  }

  public function layanan_member()
  {
    $data["active_link"] = "layanan";
    $data1['service_item'] = $this->m_service_item->getServiceItemByServiceId('PMS01')->result();
    $this->load->view('partials/header', $data);
    $this->load->view('pages/v_layanan_member',$data1);
    $this->load->view('partials/footer', $data);
  }

  public function layanan_masjid() 
  {
    $data["active_link"] = "layanan";
    $data1['service_item'] = $this->m_service_item->getServiceItemByServiceId('PM01')->result();
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
    $data1['service'] = $this->m_service->getService()->result();
    $this->load->view('partials/header', $data);
    $this->load->view('pages/v_order',$data1);
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

    $customer = $this->m_customer->getCustomer()->result();
    $member = $this->m_member->getNotMember()->result();
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

    $this->m_customer->addCustomer($id_customer,$type);
    $this->m_member->addNotMember($data_customer);
    $this->m_order->addOrder($data_order);
    foreach ($_SESSION['cart'] as $key => $cart) { 
      $this->m_order->addItem($id_order,$cart['serviceitem_id'],$cart['qty']);
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

  public function register(){
    $customer = $this->m_customer->getCustomer()->result();
    $count = (count($customer)) + 1;
    $id_customer = "ID" . strval($count);
    $type = "member";
    
    $data = array(
      'id_customer' => $id_customer,
      'username' => $this->input->post('nama'),
      'id_customertype' => $type,
      'email' => $this->input->post('email'),
      'password' => md5($this->input->post('password')),
      'nomor_telepon' => $this->input->post('phone'),
      'alamat' => $this->input->post('address')
    );

    $this->m_customer->addCustomer($id_customer,$type);
    $this->m_member->addMember($data);
    $_SESSION['success']=true;

    redirect('viewonly/welcome_register');
  }

  public function welcome_register(){
    $data["active_link"] = "welcome";
    $this->load->view('partials/header', $data);
    $this->load->view('pages/v_welcome_register');
    $this->load->view('partials/footer', $data);
  }

  public function login_member(){
		$email = $this->input->post('email');
    $password = md5($this->input->post('password'));
    
		$member = $this->m_member->login($email,$password)->result();
		if(count($member) > 0){
      foreach($member as $row) {
        $data_member = array(
          'id_customer' => $row->id_customer,
          'username' => $row->username,
          'email' => $row->email,
          'nomor_telepon' => $row->nomor_telepon,
          'alamat' => $row->alamat,
        );
      }
 
			$this->session->set_userdata($data_member);
      $_SESSION['success']=true;
			redirect('viewonly/index');
		}else{
			redirect('viewonly/welcome_register');
		}
	}

  public function logout(){
    $this->session->sess_destroy();
    $_SESSION['success'] = false;
		redirect('viewonly/index');
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
